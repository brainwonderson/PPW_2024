<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PostAnggotaBEM extends Model
{
    use HasFactory;
     
    protected $table = 'post_anggota_bem';
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'foto',
        'nama',
        'divisi',
        'jabatan',
    ];

    /**
     * image
     *
     * @return Attribute
     */
    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn ($foto) => url('/storage/posts/AnggotaBEM' . $foto),
        );
    }
}