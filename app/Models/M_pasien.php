<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class M_pasien extends Model
{
    use softDeletes;

    protected $table = 'pasien';
    protected $primaryKey = 'pasien_id';
    protected $fillable = [
        'name',
        'address',
        'birth',
        'telephone',
        'action_id',
        'medicine_id',
        'date'
    ];
    protected $hidden;
}
