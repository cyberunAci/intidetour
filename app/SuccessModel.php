<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SuccessModel extends Model
{
    protected $table = 'success';
    protected $fillable = ['nom', 'image', 'description',];
    public $timestamps = false;
    use SoftDeletes;
}
