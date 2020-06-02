<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CircuitsModel extends Model
{
    protected $table = 'circuits';
    protected $fillable = ['nom', 'image', 'difficulte', 'description','duree','distance','longitude','latitude'];
    protected $softDelete = true;
    public $timestamps = false;
    use SoftDeletes;

    /**
     * @param Liaison id_circuit à l'id base de donnée 
     */
    function traces()
    {
        return $this->hasMany(TracesModel::class, 'id_circuit');
    }


    function photos()
    {
        return $this->hasMany(PhotosCircuitModel::class, 'id_circuit');
    }

    function user()
    {
        return $this->belongsToMany('App\User', 'user_has_circuit', 'id_user', 'id_circuit');
    }

}
