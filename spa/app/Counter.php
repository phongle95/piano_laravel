<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{
    protected $table = "counter";
    protected $primaryKey = 'id';
    const CREATED_AT = null;
    const UPDATED_AT = null;
    public $fillable = ['page', 'author', 'day', 'month'];
}
