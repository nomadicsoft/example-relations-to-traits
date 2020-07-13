<?php


namespace App\Relations;


use App\Comment;

trait HasManyComments
{
    /**
     * @property $this \Illuminate\Database\Eloquent\Model
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
