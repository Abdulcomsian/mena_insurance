<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function create($id){
        try{
            $package = Package::where('id',decrypt($id))->first();
            $params = array(
                'ivp_method' => 'create',
                'ivp_store' => env('IVP_STORE_ID'),
                'ivp_authkey' => 'FmJq#sfCh9-BTRbp',
                'ivp_cart' => 'www333',
                'ivp_test' => '1',
                'ivp_amount' => $package->price,
                'ivp_currency' => 'AED',
                'ivp_desc' => $package->description,
                'return_auth' => 'http://127.0.0.1:8000/transaction-success',
                'return_can' => 'http://127.0.0.1:8000/transaction-cancel',
                'return_decl' => 'http://127.0.0.1:8000/transaction-decline'
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
            if(isset( $results->order->url)){
                return redirect($results->order->url);
            }else{
                dd('Url not exits',$results);
            }
        }catch (\Exception $exception){
            dd($exception->getMessage());
            return back();
        }catch (DecryptException $decryptException){
            dd($decryptException->getMessage());
            return back();
        }
    }

    public function success(Request $request){
        dump('In success');
        dd($request);
    }

    public function cancel(Request $request){
        dump('In cancel');
        dd($request->all());
    }

    public function decline(Request $request){
        dump('In decline');
        dd($request->all());
    }
}
