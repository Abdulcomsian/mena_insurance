<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Subscription;
use App\Models\Transaction;
use App\Utils\SubscriptionStatus;
use PDF;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function create($id){
        try{
            $package = Package::where('id',decrypt($id))->first();
            $params = array(
                'ivp_method' => 'create',
                'ivp_store' => env('IVP_STORE_ID'),
                'ivp_authkey' => 'FmJq#sfCh9-BTRbp',
                'ivp_cart' => uniqid(mt_rand(), true),
                'ivp_test' => '1',
                'ivp_amount' => $package->price,
                'ivp_currency' => 'AED',
                'ivp_desc' => $package->description,
                'ivp_framed' => 1,
                'return_auth' => url('/').'/transaction-success',
                'return_can' => url('/').'/transaction-cancel',
                'return_decl' => url('/').'/transaction-decline'
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
                return redirect($results->order->url);
            }else{
                dd('Url not exits',$results);
            }
        }catch (\Exception $exception){
            return 'Something went wrong';
        }catch (DecryptException $decryptException){
            return 'Something went wrong';
        }
    }


    public function success(Request $request){
        try {
            $order_no = session()->get('order_no');
            if(isset($order_no)){
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
                if(($results->order->status->code == 3) && ($results->order->transaction->status == "A" ||  $results->order->transaction->status == "H" )){
                    $result = self::saveTransaction($results);
                    return redirect('/conformation',compact($result));
                }
            }
        }catch (\Exception $exception){
            return 'Something went wrong';
        }
    }

    protected function saveTransaction($transaction){
        try {
            $package = Package::where('id',decrypt(session()->get('package_id')))->first();
            $sub = Subscription::where('user_id',Auth::id())->first();
            if (isset($sub)){
                Subscription::where('user_id',Auth::id())->update([
                    'package_id' => $package->id,
                    'package_name' => $package->name,
                    'price' => $package->price,
                    'status' => SubscriptionStatus::Approved,
                    'sanctions_balance' => $package->sanctions + $sub->sanctions_balance,
                ]);
            }else{
                Subscription::create([
                    'package_id' => $package->id,
                    'package_name' => $package->name,
                    'price' => $package->price,
                    'status' => SubscriptionStatus::Approved,
                    'user_id' => Auth::id(),
                    'sanctions_balance' => $package->sanctions,
                ]);
            }
            $transaction = Transaction::create([
                'order_id' => $transaction->order->ref ?? null,
                'cart_id' => $transaction->order->cartid ?? null,
                'test_mode' => $transaction->test ?? null,
                'amount' => $transaction->order->amount ?? null,
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
                'user_id' => Auth::id() ?? null,
                'package_id' => $package->id ?? null,
            ]);

            $pdf = PDF::loadView('pdf-transaction-template',['transaction'=>$transaction]);
            $path = public_path('/data/pdf');
            $fileName = 'transaction_' .Auth::id().time() . '.' . 'pdf';
            $pdf->setPaper('letter', 'landscape');
            $pdf->save($path . '/' . $fileName);
            $transaction->update(['pdf' => $fileName]);
        }catch (\Exception $exception){
            dd('Exception in save transaction',$exception->getMessage());
        }

    }
    public function cancel(Request $request){
        return 'Cancel Payment';
    }

    public function decline(Request $request){
        return 'Decline Payment';
    }

    protected function createSubscription($package){

    }
}
