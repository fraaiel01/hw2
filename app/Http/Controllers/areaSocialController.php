<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller;
use App\Models\User;
use App\Models\Posts;
use App\Models\likes;
use Session;

class areaSocialController extends Controller
{
    public function areaS()
    {
       if(!Session::get('user_id')) 
       {
           return [];
       }
       $user = user::find(Session::get('user_id'));
       return view('areasocial')->with('id',$user->id);
    }


    public function verifica_like($id)
    {
        $array = array();
        $rows = likes::select('id_social')->where('id_user','=',$id)->get();
        
        foreach($rows as $row){
            $array[]=array(
            'id_social' => $row->id_social);
        }

        return $array;
    }

    public function miPiace($user_id, $social_id)
    {
        $mipiace = new likes();
        $mipiace->id_user = $user_id;
        $mipiace->id_social =$social_id;
        $mipiace->save();
        return $mipiace;
    }

    public function NonMiPiace($user_id, $social_id)
    {
        $rows = likes::where('id_user','=',$user_id,'and','id_social','=',$social_id)->delete('id_user','id_social');
        return $rows;
    }

}    
?>    