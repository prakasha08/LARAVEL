<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class Logincontroller extends Controller
{
    public function authenticate(Request $request){
        // dd($request);
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        $email= $request->input(('email'));
        $password= $request->input(('password'));
        if(Auth::attempt(['email'=>$email,'password'=>$password])){
            $user = User::where('email',$email) ->first();
            Auth::login($user);
    return redirect('/home');
        }
        else{
            return back()->withErros(['Invalid Credentials!']);
        }
    }
    public function logout(){
        Auth::logout();
        return redirect('/Auth/login');
    }
}
