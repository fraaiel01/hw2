<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\User;
use Session;

class HomeController extends Controller
{

    
    public function home_access()
    {
        if(!Session::get('user_id')) //se user id non restituisce qualcosa di falso allora gia il login è avvenuto
         {
            return redirect('login');
         }
            return view('home');
    }
    
}

?>