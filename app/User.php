<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use RolesSeeder;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;


    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom', 'prenom', 'email','tel', 'date_naissance', 'password', 'photo',
    ];

    protected $softDelete = true;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        
    ];

    use SoftDeletes;

    function roles()
    {
        return $this->belongsTo(RolesModel::class, 'id_role');
    }

    function success()
    {
        return $this->belongsToMany('App\SuccessModel', 'users_has_success', 'id_user', 'id_success');
    }

    function circuit()
    {
        return $this->belongsToMany('App\CircuitsModel', 'user_has_circuit', 'id_user', 'id_circuit');
    }
    

}
