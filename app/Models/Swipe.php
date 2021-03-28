<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Swipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'from_user_id',
        'to_user_id',
        'is_like',
    ];

    // relation
    public function fromUser()
    {
        return $this->belongsTo('App\Models\User', 'from_user_id', 'id');
    }

    public function toUser()
    {
        return $this->belongsTo('App\Models\User', 'to_user_id', 'id');
    }
}