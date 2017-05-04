<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    const STATUS_DISABLE = 0;
    const STATUS_ENABLE  = 1;
}
