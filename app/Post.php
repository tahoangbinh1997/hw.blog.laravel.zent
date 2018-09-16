<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = ['title','thumbnail','description','content','slug','user_id','category_id','view_count'];

    public function category(){
    	return $this-> belongsTo('App\Category');
    }

    public function tags(){
    	return $this->belongsTo('App\Post')->get();
    }
}
