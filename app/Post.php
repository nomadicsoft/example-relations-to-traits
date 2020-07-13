<?php

namespace App;

use App\Relations\BelongsToUser;
use App\Relations\HasManyComments;
use App\Relations\HasManyPosts;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use BelongsToUser, HasManyComments;
}
