<?php
  
namespace App\Http\Controllers\Auth;
  
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\DB;

  
class AuthController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('auth.login');
    }  
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function registration()
    {
        return view('auth.registration');
    }
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = User::where('email', $request->email)
        ->where('password', $request->password)
        ->first();
      
if($credentials) {
  

    Auth::login($credentials);
    return redirect('dashboard')->withSuccess('Welcome Back');
} else {
    return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');

}
    }
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'country' => 'required',
        ]);
           
        // $data = $request->all();
        // $check = $this->create($data);
           User::create([
           $name= 'name' => $request->name,
          $email=  'email' => $request->email,
           $password= 'password' =>$request->password,
           $country= 'country' =>$request->country,
          ]);

if($request->country==='Germany'|| $request->country==='Schweiz' || $request->country==='Switzerland' || $request->country==='Austria' || $request->country==='Osterreich' || $request->country==='Schweiz'){
    DB::table('germanusers')->insert([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>$request->password,
        'country'=>$request->country,
    ]);
}

        // return redirect()->intended('dashboard')->withSuccess('Great! You have Successfully loggedin');
    return redirect('dashboard')->withSuccess('Great! You have Successfully Registered');

    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        return redirect("dashboard")->withSuccess('Opps! You do not have access');

        }
  
        return redirect(route('dashboard'))->withSuccess('Opps! You do not have access');
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' =>$data['password'],
        'country' =>$data['country'],
      ]);
    //   return redirect(route('login'))->withSuccess(' You have access');
    return redirect('dashboard')->withSuccess('Great! You are Successfully Registered');


    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function logout() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}