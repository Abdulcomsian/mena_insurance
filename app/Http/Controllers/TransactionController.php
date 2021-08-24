<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Subscription;
use App\Models\Transaction;
use App\Notifications\TransactionEmail;
use App\Utils\SubscriptionStatus;
//use Barryvdh\DomPDF\PDF;
use Hamcrest\Core\DummyToStringClass;
use PDF;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Self_;

class TransactionController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    public function showCards(){
        try {
            $cards = Transaction::select('card_last4','card_first6','card_type')
                ->where('user_id',Auth::id())
                ->where('status','Paid')
                ->distinct()
                ->get();
            return view('screens.add-card',compact('cards'));
        }catch (\Exception $exception){
            toastError('Something went wrong, try later');
        }
    }
    public function create($id){
        try{
            $package = Package::where('id',decrypt($id))->first();
            $total = $package->price * 0.05 + $package->price;
            $username = explode(" ",Auth::user()->name,2);
            $params = array(
                'ivp_method' => 'create',
                'ivp_store' => env('IVP_STORE_ID'),
                'ivp_authkey' => 'FmJq#sfCh9-BTRbp',
                'ivp_cart' => uniqid(mt_rand()),
                'ivp_test' => '1',
                'ivp_amount' => $total,
                'ivp_currency' => 'AED',
                'ivp_desc' => 'Not Set',
                'ivp_framed' => 1,
                'bill_custref' => Auth::id(), //Using for storing cards
                'bill_fname' => $username[0],
                'bill_sname' => $username[1] ? $username[1] : 'Not Set',
                'bill_addr1' => Auth::user()->address,
                'bill_phone' => Auth::user()->mobile_number,
                'bill_city' => Auth::user()->city ?? null,
                'bill_country' => Auth::user()->country->country_code,
                'bill_email' => Auth::user()->email,
                'return_auth' => url('/').'/transaction-success-loading',
                'return_can' => url('/').'/transaction-cancel-loading',
                'return_decl' => url('/').'/transaction-decline-loading'
            );
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://secure.telr.com/gateway/order.json");
            curl_setopt($ch, CURLOPT_POST, count($params));
            curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
            $results = curl_exec($ch);
            curl_close($ch);
            $results = json_decode($results);
            if(isset( $results->order->url) && isset($results->order->ref)){
                session()->put('package_id',$id);
                session()->put('order_no',$results->order->ref);
                $order_url = $results->order->url;
                $data = [
                    'success' => true,
                    'order_url' => $order_url
                ];
                return response()->json($data);
            }else{
                $data = [
                    'success' => false,
                    'message' => 'Server is busy, try again!'
                ];
                return response()->json($results);
            }
        }catch (\Exception $exception){
            $data = [
                'success' => false,
                'message' => 'Server is busy, try again!'
            ];
            return response()->json($data);
        }catch (DecryptException $decryptException){
            $data = [
                'success' => false,
                'message' => 'Server is busy, try again!'
            ];
            return response()->json($data);
        }
    }

    public function success(){
        try {
                $results = self::checkOrder();
                $transaction = self::saveTransactionForSuccess($results);
                return redirect('success-payment');

                //if(($results->order->status->code == 3) && ($results->order->transaction->status == "A" ||  $results->order->transaction->status == "H" )){
        }catch (\Exception $exception){
            toastr()->error('Server is busy, try again!');
            return redirect('/');
        }
    }

    protected function saveTransactionForSuccess($transaction){
        try {
            $package = Package::where('id',decrypt(session()->get('package_id')))->first();
            $sub = Subscription::where('user_id',Auth::id())->first();
            if (isset($sub)){
                Subscription::where('user_id',Auth::id())->update([
                    'package_id' => $package->id,
                    'package_name' => $package->name,
                    'price' => $package->price,
                    'status' => SubscriptionStatus::Approved,
                    'remaining_sanctions' => $package->sanctions + $sub->remaining_sanctions,
                    'total_sanctions' => $package->sanctions + $sub->total_sanctions,
                ]);
            }else{
                Subscription::create([
                    'package_id' => $package->id,
                    'package_name' => $package->name,
                    'price' => $package->price,
                    'status' => SubscriptionStatus::Approved,
                    'user_id' => Auth::id(),
                    'remaining_sanctions' => $package->sanctions,
                    'total_sanctions' => $package->sanctions,
                ]);
            }

            $transaction = self::saveTransactionForAll($transaction);

            $pdf = PDF::loadView('pdf-transaction-template',['transaction'=>$transaction]);
            $path = public_path('/data/pdf');
            $fileName = 'transaction_' .Auth::id().time() . '.' . 'pdf';
            $pdf->setPaper('letter', 'landscape');
            $pdf->save($path . '/' . $fileName);
            $transaction->update(['pdf' => 'data/pdf/'.$fileName]);
            Auth::user()->notify(new TransactionEmail($transaction));
        }catch (\Exception $exception){
            toastr()->error('Server is busy, try again!');
            return redirect('/');
        }

    }

    protected function checkOrder(){
        $order_no = session()->get('order_no');
        if(isset($order_no)) {
            $params = array(
                'ivp_method' => 'check',
                'ivp_store' => env('IVP_STORE_ID'),
                'ivp_authkey' => 'FmJq#sfCh9-BTRbp',
                'order_ref' => $order_no,
            );
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://secure.telr.com/gateway/order.json");
            curl_setopt($ch, CURLOPT_POST, count($params));
            curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
            $results = curl_exec($ch);
            curl_close($ch);
            $results = json_decode($results);
            return $results;
        }else{
            return false;
        }
    }
    protected function saveTransactionForAll($transaction){
        $package = Package::where('id',decrypt(session()->get('package_id')))->first();
        $transaction = Transaction::create([
            'order_id' => $transaction->order->ref ?? null,
            'invoice_id' => $transaction->order->cartid ?? null,
            'test_mode' => $transaction->test ?? null,
            'description' => $transaction->order->description ?? null,
            'billing_fname' => $transaction->order->customer->name->forenames ?? null,
            'billing_sname' => $transaction->order->customer->name->surname ?? null,
            'billing_address_1' => $transaction->order->customer->address->line1 ?? null,
            'billing_address_2' => $transaction->order->customer->address->line2 ?? null,
            'billing_city' => $transaction->order->customer->address->city ?? null,
            'billing_region' => $transaction->test ?? null,
            'billing_zip' => $transaction->order->customer->address->areacode ?? null,
            'billing_country' => $transaction->order->customer->address->country ?? null,
            'billing_email' => $transaction->order->customer->email ?? null,
            'status' => $transaction->order->status->text ?? null,
            'card_last4' => $transaction->order->card->last4 ?? null,
            'card_first6' => $transaction->order->card->first6 ?? null,
            'card_type' => $transaction->order->card->type ?? null,
            'trx_reference' => $transaction->order->transaction->ref ?? null,
            'user_id' => Auth::id() ?? null,
            'package_id' =>  $package->id ?? null,
            'package_name' =>  $package->name ?? null,
            'package_sanctions' =>  $package->id ?? null,
            'vat_amount' =>  $package * 0.05 ?? null,
            'package_amount' => $package->price ?? null,
            'total_amount' => $transaction->order->amount ?? null,
        ]);
        return $transaction;
    }
    public function cancel(Request $request){
        $results = self::checkOrder();
        if(isset($results)) {
            $transaction = self::saveTransactionForAll($results);
            Auth::user()->notify(new TransactionEmail($transaction));
        }
        return redirect('cancel-payment');
    }

    public function decline(Request $request){
        $results = self::checkOrder();
        if(isset($results)) {
            $transaction = self::saveTransactionForAll($results);
            Auth::user()->notify(new TransactionEmail($transaction));

        }
        return redirect('decline-payment');
    }

    protected function createSubscription($package){

    }

    public function paymentCheckout($id){
        try {
            $package = Package::where('id',decrypt($id))->first();
            $vat = $package->price * 0.05;
            $total = $vat + $package->price;
            return view('screens.checkout',compact('package','total','vat'));
        }catch (\Exception $exception){
            toastr()->error('Server is busy, try again!');
            return back();
        }
    }
}
