<?php

  namespace App\Models;
  use Illuminate\Database\Eloquent\Model;
  class Posts extends Model {

    public $timestamps = false;

    protected $table = 'posts';
    
    public function user(){
        return $this->belongsTo('app/Models/user');
    }

    public function likes(){
      return $this->hasMany('app/Models/likes');
  }

  }

?>