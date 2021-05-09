<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    protected $fillable = [
        'follower',
        'followed',
    ];

    public function follower()
    {
        return $this->belongsTo(User::class, 'followed');
    }

    public function following()
    {
        return $this->belongsTo(User::class, 'follower');
    }
}
