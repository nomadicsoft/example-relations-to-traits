<?php


namespace App\Relations;


use App\User;

trait BelongsToUser
{
    /**
     * @property $this \Illuminate\Database\Eloquent\Model
     */
    public function user()
    {
        return $this->belongsTo(User::class)->withDefault([new User()]);
    }
}
