<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GalerieModel extends Model
{
    protected $table = 'galerie_photos';
    protected $fillable = ['order', 'id_photo'];
    public $timestamps = false;

    function photo()
    {
        return $this->belongsTo(GalerieModel::class, 'id_photo');
    }
}
