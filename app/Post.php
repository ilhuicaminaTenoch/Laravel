<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function autor()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
