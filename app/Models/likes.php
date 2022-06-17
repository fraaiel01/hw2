<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class likes extends Model
{
    public $timestamps = false;

    protected $table = "mipiace";
    
    public function posts(){
        return $this->belongsTo('app/Models/Posts');
    }

    public function user(){
        return $this->belongsTo('app/Models/User');
    }
}

?>