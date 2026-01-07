<?php

namespace App\Models;

use App\Models\Enum\PlaylistAccessibility;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Playlist extends Model
{
    use SoftDeletes;

    protected $fillable = ['name'];

    protected function casts(): array
    {
        return [
            'accessibility' => PlaylistAccessibility::class,
        ];
    }

    public function songs(): BelongsToMany
    {
        return $this->belongsToMany(Song::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
