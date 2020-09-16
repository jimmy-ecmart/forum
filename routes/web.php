<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
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
// Route ::get('/posts', function(){
//     return view('posts');
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
6. 用用eloquent抓取posts資料傳入文章列表
*/
Route::get('/posts', function(){
    $posts = App\Models\Post::get();
    return view('posts', ['posts' => $posts]);
});



