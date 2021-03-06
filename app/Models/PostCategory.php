<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    protected $fillable = [
        'name',
        'user_id',
    ];

    public function posts()
    {
    	return $this->hasMany(Post::class, 'post_category_id');
    }

    public function user()
    {
    	return $this->belongsTo(User::class, 'user_id');
    }
}
