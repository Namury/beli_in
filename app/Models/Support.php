<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    protected $fillable = [
        'supporter',
        'supported',
        'item_id',
        'amount',
        'total_price',
    ];

    public function item()
    {
        return $this->belongsTo(Item::class, 'item_id');
    }

    public function supporter()
    {
        return $this->belongsTo(User::class, 'supporter');
    }

    public function supported()
    {
        return $this->belongsTo(User::class, 'Supported');
    }
}
