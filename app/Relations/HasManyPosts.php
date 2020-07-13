<?php


namespace App\Relations;


use App\Post;

trait HasManyPosts
{
    /**
     * @property $this \Illuminate\Database\Eloquent\Model
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
