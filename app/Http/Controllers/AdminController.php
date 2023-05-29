<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\Banks;

use PDF;
use Excel;
class AdminController extends Controller
{

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

            // for admin index page 
        $search=$request['search'] ?? "";
        if($search !==""){
            $users=DB::table('users')->where('name' ,'LIKE' ,"%$search%")->orWhere('email' ,'LIKE' ,"%$search%")->simplePaginate(30);
             return view('admin.index',['users'=>$users]);

            }else{

            $users= DB::table('users')->whereNot('country','=','Germany')->simplePaginate(30);
            return view('admin.index',['users'=>$users]);
        }
    }
     public function users_german(Request $request)
    {

            // for admin index page 
        $search=$request['search'] ?? "";
        if($search !==""){
            $users=DB::table('germanusers')->where('name' ,'LIKE' ,"%$search%")->orWhere('email' ,'LIKE' ,"%$search%")->simplePaginate(30);
             return view('admin.german',['users'=>$users]);
            }else{
            $users= DB::table('germanusers')->where('country'  ,"Germany")->simplePaginate(30);
            return view('admin.german',['users'=>$users]);
        }
    }
      // For Users page 
      public function users(Request $request)
      {
              $search=$request['search'] ?? "";
              if($search !==""){
                  $users=User::where('name' ,'LIKE' ,"%$search%")->orWhere('email' ,'LIKE' ,"%$search%")->simplePaginate(30);
                   return view('admin.users',['users'=>$users]);
  
                  }else{
  
                  $users= DB::table('users')->simplePaginate(30);
                  return view('admin.users',['users'=>$users]);
              }
      }
    public function verifications(Request $request)
    {

            // for admin index page 
        $search=$request['search'] ?? "";
        if($search !==""){
            $users=DB::table('users')->where('name' ,'LIKE' ,"%$search%")->orWhere('email' ,'LIKE' ,"%$search%")->simplePaginate(30);
             return view('admin.verifications',['users'=>$users]);

            }else{

            $users= DB::table('users')->simplePaginate(30);
            return view('admin.verifications',['users'=>$users]);
        }
    }
    // Number for  User rows 
    public function countRows()
    {
        $count= DB::table('users','banks')->count();
        return view('admin.numbers',['count'=>$count]);
   
    }

   
  
    // For PDF 
public function downloadPDF()
{
    $users=User::simplePaginate(30);
    $pdf=PDF::loadView('admin.users',compact('users'));
    return $pdf->download('users.pdf');

}

    // Show Insert form 
        public function insertForm(){
        return view('admin.form');
        }
    // Show Edit form 

        public function editform(){
            return view('admin.form');
        }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            
        ]);
        DB::table('users')->insert([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => $request['password'],
            // 'balance' => $request['balance']
        ]);
        return redirect(route('admin.insert'))->with('status','User added Successfully');
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users=DB::table('users')->find($id);
        return view('admin.editform',['users'=>$users]);
    }

    public function verifications_edit($id)
    {
        $users=DB::table('users')->find($id);
        return view('admin.verifications_edit',['users'=>$users]);
    }


    public function balance($id)
    {
        $users=DB::table('users')->find($id);
        return view('admin.balanceform',['users'=>$users]);
    }

//    for german individiually 
    public function balanceGerman($id)
    {
        $users=DB::table('germanusers')->find($id);
        return view('admin.germanindi',['users'=>$users]);
    }
    public function updateBalance(Request $request, $id)
    {
      DB::table('users')->where('id',$id)->update([
            'balance' => $request['balance'],
        ]);
        return back()->with('status','Balance Added Successfully');
    }
    public function updateBalanceGerman(Request $request, $email)
    {
     $germansolve=   DB::table('germanusers')->where('email',$email)->update([
            'balance' => $request['balance'],
        ]);

        DB::table('users')->where('email',$email)->update([
            'balance' => $request['balance'],
        ]);
        return back()->with('status','Balance Added Successfully');

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
        DB::table('users')->where('id',$id)->update([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => $request['password'],
            // 'balance' => $request['balance'],

        ]);
        return back()->with('status','User Edited Successfully');

    }
    public function update_verifications(Request $request, $id)
    {
        DB::table('users')->where('id',$id)->update([
            'government_card' => $request['government_card'],
            'facial' => $request['facial'],
        ]);
        return back()->with('status','User Edited Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('users')->where('id',$id)->delete();
        return redirect(route('admin'));
        // return back()->with('status','User Deleted Successfully');


    }

// Show Banks 
    public function show_banks(Request $request)
{
    $search=$request['search'] ?? "";
    if($search !==""){
        $banks=Banks::where('bnumber' ,'LIKE' ,"%$search%")->simplePaginate(30);
         return view('admin.banks',['banks'=>$banks]);
        }else{
    $banks=Banks::simplePaginate(30);
    return view('admin.banks',['banks'=>$banks]);
}
}
// Edit Withdraw Status 
public function edit_status($id)
{
    $banks=Banks::find($id);
    return view('admin.edit_bank_status',['banks'=>$banks]);
}
// Edit Withdraw Status 

public function update_status(Request $request, $id)
{
    $banks=Banks::find($id);
    $banks->status=$request->status;
    $banks->save();

    return back()->with('status',' Status Updated Successfully');

}
  // Number for  Banks rows 
  public function totalRequest()
  {
      $banks_count= Banks::count();
      return view('admin.request_submitted',['banks_count'=>$banks_count]);
  }

  public function show_banks_germany(Request $request)
  {
    $search=$request['search'] ?? "";
    if($search !==""){
        $banks=Banks::where('bnumber' ,'LIKE' ,"%$search%")->simplePaginate(30);
         return view('admin.banks',['banks'=>$banks]);
        }else{
    
     
          $banks=Banks::where('country',"germany")->orWhere('country', '=', "Switzerland")->orWhere('country', '=', "Schweiz")->orWhere('country', '=', "Deutschland")->simplePaginate(30);
           return view('admin.banks',['banks'=>$banks]);
          
        }
  }
  
  public function exportIntoExcel()
  {
    return Excel::download(new UsersExport,'BanksDetails.xlsx');
  }
  public function exportIntoCsv()
  {
    return Excel::download(new UsersExport,'BanksDetails.csv');
  } 
}
