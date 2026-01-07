<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Song extends Model
{
    use SoftDeletes, HasFactory;
    protected $fillable = [
        'title', 'artist_id', 'duration'
    ];

    public function artist() : BelongsTo
    {
        return $this->belongsTo(Artist::class);
    }

    public function playlists() : BelongsToMany
    {
        return $this->belongsToMany(Playlist::class);
    }
}
