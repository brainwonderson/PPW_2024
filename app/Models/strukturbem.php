<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StrukturBEM extends Model
{
    use HasFactory;

    // Nama tabel yang digunakan
    protected $table = 'keanggotaan';

    // Kolom yang dapat diisi secara massal
    protected $guarded = [];

    // protected $fillable = [
    //     'nama',
    //     'jabatan',
    //     'foto', // Jika ada kolom untuk foto anggota
    // ];
}
