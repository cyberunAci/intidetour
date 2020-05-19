<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RolesModel extends Model
{
    protected $table = 'roles';
    protected $fillable = ['id', 'role'];

    function user()
    {
        return $this->belongsTo(User::class, 'id_role');
    }
}
