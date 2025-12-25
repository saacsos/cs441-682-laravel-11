<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Artist extends Model
{
    protected $fillable = [
        'name', 'image_path'
    ];

    public function songs() : HasMany
    {
        return $this->hasMany(Song::class);
    }
}
