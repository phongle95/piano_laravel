<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $primaryKey = 'id';
    public $timestamps = true;
    public $fillable = ['title', 'description', 'detail', 'category_id', 'picture', 'img'];

    public function cat(){
    	return $this->belongsTo('App\Category', 'category_id');
    }
}
