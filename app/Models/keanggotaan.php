<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keanggotaan extends Model
{
    use HasFactory;

    protected $table = 'keanggotaan';

    protected $guarded = [];

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
