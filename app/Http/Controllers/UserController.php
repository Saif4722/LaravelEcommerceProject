<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function login(Request $request){
        $checkUser = User::where('email',$request->email)->first();
        if($checkUser || Hash::check($checkUser->password,$request->password)){
            $request->session()->put('user',$checkUser);
            return redirect('/');
        }else{
            return "Something Goes Wrong";
        }
    }
}
