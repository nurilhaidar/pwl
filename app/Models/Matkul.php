<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    use HasFactory;

    protected $table = 'matkul';

    protected $fillable = [
        'nama_matkul',
        'sks',
        'jam',
        'semester'
    ];

    public function mahasiswa()
    {
        return $this->belongsToMany(Mahasiswa::class, 'mahasiswa_matakuliah', 'id_matkul', 'id_mahasiswa')->withPivot('nilai');
    }
}
