<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the many comments of the  post.
     */
    public function comments(){
       return $this->hasMany('App\Models\Comment');
    }

    /**
     * Get the user that owns the post.
     *
     */
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    /**
     * The categories belongs to the post
     *
     */
    public function categories(){
        return $this->belongsToMany('App\Model\Category');
    }

     /**
     * Get all of the tags for the post.
     */
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
