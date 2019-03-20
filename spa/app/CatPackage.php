<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatPackage extends Model
{
    protected $table = 'catpackage';
    protected $primaryKey = 'id';
    public $timestamps = false;
    public $fillable = ['name'];

    public function service(){
    	return $this->hasMany('App\Service');
    }
}
