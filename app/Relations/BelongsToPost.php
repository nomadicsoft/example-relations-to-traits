<?php


namespace App\Relations;


use App\Post;

trait BelongsToPost
{

    /**
     * @property $this \Illuminate\Database\Eloquent\Model
     */
    public function post()
    {
        $this->belongsTo(Post::class);
    }
}
