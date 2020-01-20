<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AproposModel extends Model
{
    protected $table = 'apropos';
    protected $fillable = ['description'];
    public $timestamps = false;
}
