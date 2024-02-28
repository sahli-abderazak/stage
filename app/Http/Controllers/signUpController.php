<?php

namespace App\Http\Controllers;

use App\Http\Requests\signuprequest;
use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class signUpController extends Controller
{
    public function index()
    {
        return view('admin.signUp');
    }
    public function store(signuprequest $request){
        $forms=$request->validated();
        $forms['password']= Hash::make($request->password);
        admin::create($forms);   
        return redirect()->route('signin');

    }
}
