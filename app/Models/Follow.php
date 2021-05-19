<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    protected $fillable = [
        'follower',
        'followed',
    ];

    public function followerDetail()
    {
        return $this->belongsTo(User::class, 'followed');
    }

    public function followingDetail()
    {
        return $this->belongsTo(User::class, 'follower');
    }
}
