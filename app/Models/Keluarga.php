<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluarga extends Model
{
    use HasFactory;

    protected $table = 'keluarga';
    protected $primaryKey = 'id_keluarga';
    protected $keyType = 'string';

    protected $fillable = [
        'id_keluarga',
        'nama_keluarga',
        'hubungan'
    ];
}
