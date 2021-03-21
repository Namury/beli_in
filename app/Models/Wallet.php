<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    protected $fillable = [
        'user_id',
        'amount',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
