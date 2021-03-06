<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Talk extends Model
{
    use HasFactory;

    protected $casts = [
        'published_at' => 'datetime',
    ];

    public function scopePublished($query)
    {
        return $query->whereNot('published_at', null);
    }

    // Disable mass-assignment protection
    protected $guarded = [];
}
