<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\User;
use Session;

class RegisterController extends Controller {
   
    public function registerForm()
    {
       if(Session::get('user_id')) //se user id non restituisce qualcosa di falso allora gia il login è avvenuto
       {
           return redirect('areapersonale');
       }
       $error=Session::get('error');
       Session::forget('error'); 
       return view('register')->with('error',$error);
    }


    public function do_register(){

        if(Session::get('user_id')) //se user id non restituisce qualcosa di falso allora gia il login è avvenuto
        {
            return redirect('areapersonale');
        }

        if(strlen(request('email')) == 0 || strlen(request('password')) == 0)
         {
             Session::put('error', 'empty_fields');
             return redirect('register');
         }

         else if(request('password') != request('conferma_password'))
         {
             Session::put('error', 'bad_password');
             return redirect('register');
         }

         else if(User::where('email', request('email'))->first())
         {
             Session::put('error', 'exist_email');
             return redirect('register');
         }



         $user = new User;
         $user->nome= request('nome');
         $user->cognome= request('cognome');
         $user->data_nascita= request('data');
         $user->email = request('email');
         $user->password=password_hash(request('password'),PASSWORD_BCRYPT);
         $user->save();
         

         Session::put('user_id', $user->id); //salvo variabile di sessione
         return redirect('areapersonale');

    }

    public function checkEmail($query)
    {
        $exist = User::where('email', $query)->exists();
        return ['exists' => $exist];
    }

    public function do_logout()
    {
        Session::flush();
        return view('home');
    }

}

