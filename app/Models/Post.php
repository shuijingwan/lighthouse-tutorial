<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    /**
     * 获取文章图片
     */
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    /**
     * 获取此文章的所有评论
     */
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
