<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Mahasiswa_Matakuliah extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa_matakuliah';

    protected $fillable = [
        'id_mahasiswa',
        'id_matkul',
        'nilai'
    ];
}
