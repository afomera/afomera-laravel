<?php

use App\Models\Post;
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
    return view('pages.index');
});

Route::get('/about', function () {
    return view('pages.about');
});

// Route::get('/admin/dashboard', function () {
//     return view('admin.dashboard');
// })->middleware(['auth', 'can:admin'])->name('dashboard');

require __DIR__.'/auth.php';

Route::middleware('can:admin')->group(function () {
     Route::resource('admin/posts', AdminPostController::class)->except('show');
 });

// Wildcard route to handle all other requests to see if a Post exists with that slug
Route::get('/{post}', function (Post $post) {
    return view("posts.show", ['post' => $post]);
})->where('post', '.*');
