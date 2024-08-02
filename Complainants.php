<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complainants extends Model
{
    protected $table = 'complainants';
    protected $guarded = ['id', 'created_at','updated_at'];
    public $timestamps = false;
}
