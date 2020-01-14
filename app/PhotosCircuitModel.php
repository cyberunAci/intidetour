<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhotosCircuitModel extends Model
{  
    protected $table = 'photosCircuit';
    protected $fillable = ['id', 'photos', 'id_circuit',];
    public $timestamps = false;
}


function circuit(){
    return $this->hasMany(CircuitsModel::class,'id_circuit');
}

