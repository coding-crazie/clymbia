<?php

namespace App\Http\Controllers;
use App\Mail\AdminRequestNotifyMail;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Banks;
use App\Models\User;
use Mail;

class BanksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
   
        return view('side-pages.banks-form');
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        $user=$request->user();
        $banks=new Banks;
        $banks->bfname=$request->bfname;
        $banks->bcountry_code=$request->bcountry_code;
        $banks->bphone_number=$request->bphone_number;
        $banks->country=$request->country;
        $banks->bnumber=$request->bnumber;
        $banks->bname=$request->bname;
        $banks->amount=$request->amount;
        $user->banks()->save($banks);
        $data=[
            
            'name'=>Auth::user()->name,
            'bfname'=>$request->bfname,
            'country'=>$request->country,
            'bname'=>$request->bname,
     
            'email'=>Auth::user()->email ,
            'amount'=>$request->amount,
        ];
 
        Mail::to('support@clymbia.com')->send(new AdminRequestNotifyMail($data));
        return redirect(route('add-bank'))->with('status',' Please exchange your balance first');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {   $userid=$request->user()->id;
        $banks=Banks::where('user_id',$userid )->get();
        return view('side-pages.all_requests',['banks'=>$banks]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
