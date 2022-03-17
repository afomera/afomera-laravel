<?php

use App\Models\Post;
use App\Models\Talk;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\AdminPostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.index', ['latestPost' => Post::published()->latest('published_at')->first()]);
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/speaking', function () {
    return view('pages.speaking', ['talks' => Talk::latest('published_at')->published()->get()]);
});

Route::get('/posts', function () {
    return view('posts.index', ['posts' => Post::latest('published_at')->published()->get()]);
});

// Route::get('/admin/dashboard', function () {
//     return view('admin.dashboard');
// })->middleware(['auth', 'can:admin'])->name('dashboard');

require __DIR__.'/auth.php';

// Route::middleware('can:admin')->group(function () {
//      Route::resource('admin/posts', AdminPostController::class)->except('show');
//  });

Route::get('/posts/{post}', function (Post $post) {
    seo()
        ->twitterImage(
            route('posts.og', $post)
        )
        ->image(
            route('posts.og', $post)
        )
        ->url(route('posts.show', $post));
        // ->description($post->excerpt);

    return view("posts.show", ['post' => $post]);
})->where('post', '.*');

Route::get('/posts/{post:slug}/og-html', function (Post $post) {
    return $post->og_image_html;
})->name('posts.og-html');

Route::get('/posts/{post:slug}/og', function (Post $post) {
    if (request()->has('preview')) {
        return response(
            Browsershot::url(
                route('posts.og-html', $post)
            )
                ->windowSize(1200, 627)
                ->deviceScaleFactor(2)
                ->showBackground()
                ->waitUntilNetworkIdle()
                ->ignoreHttpsErrors()
                ->screenshot()
        )->header('Content-Type', 'image/png');
    }

    return response(
        $post->og_image
    )->header('Content-Type', 'image/png');
})->name('posts.og');

// // Wildcard route to handle all other requests to see if a Post exists with that slug
// Route::get('/{post}', function (Post $post) {
//     return view("posts.show", ['post' => $post]);
// })->where('post', '.*');
