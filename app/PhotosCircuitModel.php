<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhotosCircuitModel extends Model
{  
    protected $table = 'photos_circuit';
    protected $fillable = ['id', 'photos', 'id_circuit',];
    public $timestamps = false;

  
    

    function circuit(){
        return $this->belongsTo(CircuitsModel::class,'id_circuit');
    }
}



