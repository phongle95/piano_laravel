<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'service';
    protected $primaryKey = 'id';
    public $timestamps = true;
    public $fillable = ['name', 'title', 'description', 'detail', 'picture', 'cat_package_id', 'img'];

    public function catpackage(){
    	return $this->belongsTo('App\CatPackage', 'cat_package_id');
    }
}

