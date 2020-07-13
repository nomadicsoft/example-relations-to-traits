<?php

namespace App;

use App\Relations\BelongsToPost;
use App\Relations\BelongsToUser;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use BelongsToUser, BelongsToPost;
}
