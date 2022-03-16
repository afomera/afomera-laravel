<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $casts = [
        'published_at' => 'datetime',
    ];

    // Disable mass-assignment protection
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
