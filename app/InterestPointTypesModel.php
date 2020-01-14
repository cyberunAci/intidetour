<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InterestPointTypesModel extends Model
{
    protected $table = 'interest_point_types';
    protected $fillable = ['type',];
    public $timestamps = false;

    function interestPoints(){

        return $this->hasMany(InterestPointsModel::class,'id_type');
    }
}
