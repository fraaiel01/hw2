<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller;
use App\Models\User;
use App\Models\Posts;
use Session;

class areaPersonaleController extends Controller
{
    public function areaP()
    {
       if(!Session::get('user_id')) 
       {
           return redirect('login');
       }
       $user = user::find(Session::get('user_id'));
       return view('areapersonale')->with('email',$user->email);
    }


    public function ricerca_api()
    {

        if(!Session::get('user_id'))
        {
            return redirect('login');
        }
        $curl = curl_init();
        curl_setopt($curl,CURLOPT_URL,"https://random-d.uk/api/random");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
        $res = curl_exec($curl);
        return($res);

    }

    public function carica_api()
    {
        $request=request();
        $posts = new Posts();
        $posts->cliente = session('user_id');
        $posts->content =$request->duck;
        $posts->descrizione =$request->descr;
        $posts->save();
        return $posts;
    }

    public function stampa_api(){
        $array = array();
        $rows = DB::table('posts')->join('user','posts.cliente','user.id')->orderBy('posts.id','DESC')->get();

        foreach($rows as $row){
        $array[]=array(
        'id' => $row->cliente,
        'content'=>$row->content,
        'descrizione'=>$row->descrizione,
        'user'=>$row->email);
        }

        return $array;
    
    }


}

?>