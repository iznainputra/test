<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;


class M_user extends Authenticatable
{
    // use softDeletes;

    protected $table = 'tbuser';
    protected $primaryKey = 'user_id';
    protected $fillable = [
        'name',
        'address',
        'role',
        'email',
        'username',
        'password'
    ];
    protected $hidden;
}
