<?php

namespace App\Http\Controllers\Auth;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class Registercontroller extends Controller
{
    public function store(Request $request){
       // dd($request);    
        // $request->validate(
                
        //     [
        //             'email'=>'require',
        //             'password'=>'required|confirmed'
        //         ]
        //         );
        
                $user = new student;
                $user->email=$request->input(('email'));
                $user->password=$request->input(('password'));
                $user->save();
                Auth::login($user);
                return redirect('/home');
    }
}
