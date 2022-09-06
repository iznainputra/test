<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class M_obat extends Model
{

    protected $table = 'obat';
    protected $primaryKey = 'medicine_id';
    protected $fillable = [
        'medicine',
        'description'
    ];
    protected $hidden;
}
