<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    /**
     * 获取此视频的所有评论
     */
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
