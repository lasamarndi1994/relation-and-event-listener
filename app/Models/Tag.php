<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    /**
     * Get all of the posts that are assigned this tag.
     */
    public function posts()
    {
        return $this->morphedByMany(Post::class, 'taggable');
    }

    /**
     * Get all of the Comments that are assigned this tag.
     */
    public function comments()
    {
        return $this->morphedByMany(Comment::class, 'taggable');
    }

    /**
     * Get all of the videos that are assigned this tag.
     */
    public function video()
    {
        return $this->morphedByMany(Video::class, 'taggable');
    }

    /**
     * Get all of the phots that are assigned this tag.
     */
    public function phots()
    {
        return $this->morphedByMany(Photo::class, 'taggable');
    }
}
