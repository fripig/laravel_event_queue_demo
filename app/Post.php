<?php

namespace App;

use App\Events\PostCreated;
use App\Events\PostDeleting;
use App\Events\PostUpdate;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $events = [
        'created' => PostCreated::class,
        'updated' => PostUpdate::class,
        'deleting' =>PostDeleting::class,
    ];
    protected $fillable = [
        'title',
        'body',
        'isPublic'
    ];

    public function statu()
    {
        return $this->hasOne('PostStatu','post_id','id');
    }
}
