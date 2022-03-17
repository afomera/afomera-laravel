<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Browsershot\Browsershot;

class Post extends Model
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

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getOgImageHtmlAttribute()
    {
        return view('posts.og', ['post' => $this]);
    }

    public function getOgImageAttribute()
    {
        // return Cache::rememberForever('post_og_' . $this->slug, function () {
        return Browsershot::url(
            route('posts.og-html', $this)
        )
            ->windowSize(1200, 627)
            ->deviceScaleFactor(2)
            ->showBackground()
            ->waitUntilNetworkIdle()
            ->ignoreHttpsErrors()
            ->screenshot();
        // });
    }

}
