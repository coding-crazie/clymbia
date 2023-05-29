<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class ChangeEmailController extends Controller
{
    public function index()
    {
        return view('ui-elements.change-email');
    } 
    public function ChangeEmail(Request $request)
    {
        $id= auth()->user()->id;
        DB::table('users')->where('id',$id)->update([
            'email'=>$request['email'],
        ]);
        return back()->with("status", "Email changed successfully!");

    }
}
