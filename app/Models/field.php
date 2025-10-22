<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class field extends Model
{
    protected $table = 'fields';

    protected $fillable = [
        'sport_type_id',
        'price_per_hours',
        'status',
    ];
}
