<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class departemen extends Model
{
    use HasFactory;

    protected $table = 'departemen';

    protected $guarded = [];

    /**
     * image
     *
     * @return Attribute
     */
    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn ($logo) => url('/storage/posts/Departemen' . $logo),
        );
    }

}
