<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    protected $table = 'memberships';

    protected $fillable = [
        'user_id',
        'tier',
        'discount_percentage',
        'valid_until',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
