<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CircuitsModel extends Model
{
    protected $table = 'circuits';
    protected $fillable = ['nom', 'image', 'difficulte', 'description',];
    public $timestamps = false;

}
