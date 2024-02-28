<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class signinController extends Controller
{
    public function index()
    {
        return view('admin.sigIn');
    }
    public function store(Request $request){
        
            $login=$request->login;
            $password=$request->password;
            $credentials=['login'=>$login,'password'=>$password];
            

            if(Auth::attempt($credentials))
            {
                $request->session()->regenerate();
                return redirect()->route('dash_admin');
            }
            else{
                return back()->withErrors([
                    'login'=>'Invalid email or password',
                    
                ]);
            }
        

    }
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return to_route('signin');
    }
}
