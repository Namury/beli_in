<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'content',
        'post_category_id',
        'user_id',
    ];

    public function category()
    {
    	return $this->belongsTo(PostCategory::class, 'post_category_id');
    }

    public function user()
    {
    	return $this->belongsTo(User::class, 'user_id');
    }
}
