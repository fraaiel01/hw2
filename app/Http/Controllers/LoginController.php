<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\User;
use Session;

class LoginController extends Controller {
   

    public function do_login(){

       if(Session::get('user_id')) //se user id non restituisce qualcosa di falso allora gia il login è avvenuto
        {
            return redirect('areapersonale');
        }

        if(strlen(request('email')) == 0 || strlen(request('password')) == 0)
         {
             Session::put('error', 'empty_fields');
             return redirect('login');
         }

         $user = User::where('email', request('email'))->first();
         if(!$user || !password_verify(request('password'), $user->password))
         {
             Session::put('error', 'wrong');
             return redirect('login');
         }


         Session::put('user_id', $user->id); //salvo variabile di sessione
         return redirect('areapersonale');

    }

    public function loginForm()
    {
       if(Session::get('user_id')) //se user id non restituisce qualcosa di falso allora gia il login è avvenuto
       {
           return redirect('areapersonale');
       }
       $error=Session::get('error');
       Session::forget('error'); 
       return view('login')->with('error',$error);
    }
}
?>