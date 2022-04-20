<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\User;
use App\Models\Category;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Admin\CategoryController;

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

Route::get('/welcome', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/hi', function () {
    return 'It works!';
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/unicode', function() {
    $user = new User();
    $allUser = $user::all();
    dd($allUser);
});

Route::get('/home-1', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/home-2', [HomeController::class, 'index'])->name('home');
Route::get('/show-form', function() {
    return view('forms.form');
});

Route::get('/test', function() {
    return view('forms.form');
});
Route::post('/test', function() {
    return 'call action post of path /test';
});
Route::put('/test', function() {
    return 'call action put of path /test';
});
Route::delete('/test', function() {
    return 'call action delete of path /test';
});
Route::patch('/test', function() {
    return 'call action patch of path /test';
});
Route::match(['post', 'put'], 'test', function() {
    return $_SERVER['REQUEST_METHOD'];
});
Route::any('test', function() {
    $request = new Request;
    return $request->method();
    // return $_SERVER['REQUEST_METHOD'];
});
Route::any('test', function(Request $request) {
    return $request->method();
    // return $_SERVER['REQUEST_METHOD'];
});
Route::redirect('test', 'show-form');
Route::view('show-form', 'form');
// Route::prefix('admin')->group(function(){

//     Route::get('/', function() {
//         return view('admin');
//     })->name('admin');

//     Route::get('/test/{id?}', function($id=null) {
//         $content = 'Call action get of path /test';
//         $content.=' id = '.$id;
//         return $content;
//     });

//     Route::get('/test/{slug}-{id}.html', function($slug=null, $id=null) {
//         $content = 'Call action get of path /test';
//         $content.=' id = '.$id.'<br/>';
//         $content.=' slug = '.$slug;
//         return $content;
//     })->where(
//         [
//             'slug' => '.+',
//             'id' => '[0-9]+',
//         ]
//     );
//     Route::get('/detail/{slug}-{id?}.html', function($slug=null, $id=null) {
//         $content = 'Call action get of path /detail';
//         $content.=' id = '.$id.'<br/>';
//         $content.=' slug = '.$slug;
//         return $content;
//     })->where('slug', '.+')->where('id', '[0-9]+')->name('admin.detail.id');

//     Route::get('/show-form', function() {
//         return view('forms.form');
//     })->name('show-form');

//     Route::prefix('/product')->middleware('checkpermission')->group(function(){
//         Route::get('/', function(){
//             return 'list product';
//         })->name('admin.product');
        
//         Route::get('/add', function(){
//             return 'add product';
//         })->name('admin.product.add');

//     });
// });

// client router
Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/index', function () {
    return view('index');
})->name('index');

Route::get('/festival', function () {
    return view('festival');
})->name('festival');

Route::get('/transport', function () {
    return view('transport');
})->name('transport');

Route::get('/food', function () {
    return view('food');
})->name('food');

Route::get('/travel', function () {
    return view('travel');
})->name('travel');

// article route
Route::get('/article-list', [ArticleController::class, 'index'])->name('article.index');
Route::get('/create-article', [ArticleController::class, 'create'])->name('article.create');
Route::post('/create-article', [ArticleController::class, 'store'])->name('article.store');
Route::get('/edit-article/{id}', [ArticleController::class, 'edit'])->name('article.edit');
Route::post('/edit-article', [ArticleController::class, 'update'])->name('article.update');
Route::get('/delete-article/{id}', [ArticleController::class, 'show'])->name('article.show');
Route::post('/delete-article', [ArticleController::class, 'delete'])->name('article.delete');

Auth::routes();
// admin router
Route::prefix('dashboard')->group(function() {
    Route::get('/', [CategoryController::class, 'index'])->name('category.index');
    Route::resource('category', CategoryController::class); 
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
