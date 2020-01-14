<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuccessModel extends Model
{
    protected $table = 'success';
    protected $fillable = ['nom', 'image', 'description',];
    public $timestamps = false;
}
