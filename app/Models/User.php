<?php

  namespace App\Models;
  use Illuminate\Database\Eloquent\Model;
  
  class User extends Model {

    public $timestamps = false;

    protected $table = 'user';
    
    public function posts(){
        return $this->hasMany('app/Models/Posts');
    }

    public function likes(){
      return $this->hasMany('app/Models/likes');
    }

  }

?>