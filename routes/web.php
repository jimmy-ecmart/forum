<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PostController;
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


/*
1. welcome page
*/
Route::get('/', function () {
    return view('welcome');
});

/*
2. 靜態文章列表頁
*/
// Route::get('/posts/{slug}', function($slug){
//     $post = DB::table('posts')->where('slug', $slug)->first();
//     // dd($post);
//     if($post === null){
//         abort(404);
//     }
//     return view('post', ['post' => $post]);
// });

/*
3. 使用seed塞入假資料。執行 php artisan db:seed 可以一次生成5筆假資料
*/

/*
4. 建立一個posts 的array 傳入文章列表頁
*/
// Route::get('/posts', function(){
//     class Post{
//         public $id;
//         public $title;
//     }

//     $myPost1 = new Post();
//     $myPost1->id = '1';
//     $myPost1->title = 'post1';

//     $myPost2 = new Post();
//     $myPost2->id = '2';
//     $myPost2->title = 'post2';

//     $myPost3 = new Post();
//     $myPost3->id = '3';
//     $myPost3->title = 'post3';

//     $posts = array($myPost1, $myPost2, $myPost3);
//     // dd($posts);
//     return view('posts', ['posts' => $posts]);
// });


/*
5. 用DB query builder抓取posts資料傳入文章列表
*/
// Route::get('/posts', function(){
//     $posts = DB::table('posts')->get();
//     return view('posts', ['posts' => $posts]);
// });

/*
6. 使用eloquent抓取posts資料傳入文章列表
*/
// Route::get('/posts', function(){
//     $posts = App\Models\Post::all();
//     return view('posts', ['posts' => $posts]);
// });

/*
7. 使用controllers抓取posts資料傳入文章列表
*/
Route::get('posts', [PostController::class, 'index']);

/*
8. 建立一個show post的route，能夠在url的path中傳入id
*/
Route::get('posts/{id}', [PostController::class, 'show']);