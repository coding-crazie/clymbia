<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use WisdomDiala\Cryptocap\Facades\Cryptocap;
use AmrShawky\LaravelCurrency\Facade\Currency;
class BtcController extends Controller
{
    public function index()
    {
      $live_price=  Cryptocap::getSingleAsset('bitcoin')->data->priceUsd;
      $live_price_Eur=$live_price * 0.93;
      
                    
    //   $live_price_usd=Currency::convert()
    //             ->from('USD')
    //             ->to('EUR')
    //             ->amount($live_price)
    //             ->get();
        return view('dashboard',['price'=>$live_price_Eur]);
       
    }

public function show(){
    return  view('admin.balanceform');
}

public function showGerman(){
    return  view('admin.admin2balanceform');
}
    public function UpdateBalance(Request $request){
        DB::table('users')->whereNot('country','=','Germany')->update([
            'balance'=>$request['balance']
        ]);
        
        return back()->with('status','Balance Updated Successfully');

    }
    
    public function UpdateBalanceGerman(Request $request){
        
        DB::table('germanusers')->where('country','Germany')->update([
            'balance'=>$request['balance']
        ]);
        return back()->with('status','Balance Updated Successfully');

    }
}
