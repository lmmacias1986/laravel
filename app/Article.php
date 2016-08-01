<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Article extends Model implements SluggableInterface
{

    protected $table = "Articles";

    protected $fillable = ['title','content','category_id','user_id'];

    public function category (){
    	return $this->belongsTo('App\Category');
    }

    public function user (){
    	return $this->belongsTo('App\User');
    }

    public function image (){
    	return $this->hasMany('App\Image');
    }

    public function tags(){
    	return $this->belongsToMany('App\Tag');
    }
}
