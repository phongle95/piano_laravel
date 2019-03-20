<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $table = 'category';
	protected $primaryKey = 'id';
	public $timestamps = false;

    public $fillable = ['name', 'slug_name', 'parent_id'];

    public function news(){
    	return $this->hasMany('App\News');
    }
}
