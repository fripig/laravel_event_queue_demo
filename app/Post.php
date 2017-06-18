<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function statu()
    {
        return $this->hasOne('PostStatu','post_id','id');
    }
}
