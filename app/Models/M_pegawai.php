<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class M_pegawai extends Model
{
    use softDeletes;

    protected $table = 'pegawai';
    protected $fillable = [
        'nik',
        'name',
        'address',
        'birth',
        'email'
    ];
    protected $hidden;
}
