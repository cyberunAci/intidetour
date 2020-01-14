<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InterestPointsModel extends Model
{
    protected $table = 'interest_points';
    protected $fillable = ['nom', 'coordonnees'];
    public $timestamps = false;

    function interestPointTypes(){

        return $this->belongsTo(InterestPointTypesModel::class,'id_type');
    }
}
