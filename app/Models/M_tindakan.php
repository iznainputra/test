<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class M_tindakan extends Model
{
    use softDeletes;

    protected $table = 'tindakan';
    protected $primaryKey = 'action_id';
    protected $fillable = [
        'action',
        'description'
    ];
    protected $hidden;
}
