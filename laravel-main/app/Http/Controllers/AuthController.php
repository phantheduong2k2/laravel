<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function getLogin(){
        return view('auth.login');
    }

    public function postLogin(LoginRequest $rq){
         $data = $rq->all();
         $email =  $data['email'];
         $password =  $data['password'];

         if(Auth::attempt(['email'=> $email, 'password'=> $password])){
            return redirect(Route('users.list'));
         }
         return redirect(Route('auth.getLogin'));
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(Route('auth.getLogin'));
    }
}
