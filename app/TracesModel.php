<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TracesModel extends Model
{
    protected $table = 'traces';
    protected $fillable = ['trace'];
    public $timestamps = false;

    function traces(){
        return $this->belongsTo(CircuitsModel::class,'id_circuit');
    }
}
