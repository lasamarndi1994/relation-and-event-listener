<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    /**
     * Get all of the tags for the video.
     */
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
