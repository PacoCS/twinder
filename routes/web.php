<?php

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
use App\Post;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function () {
    $users = App\User::all();
    return view('users_list', ['users'=>$users]);
});

Route::get('/randomPost', function () {
    $post = App\Post::find(rand(1,50));
      return view('randomPost', ['post'=>$post]);

});

Route::get('/newPost', function(){
  return view('new_post');
})->middleware('auth');

Route::post('/newPost', function(Request $request){
  $validator = Validator::make($request->all(), [
    'text' => 'required|max:255',
  ]);
  if ($validator->fails()) {
    return redirect('/newpost')
    ->withInput()
    ->withErrors($validator);
  }
  //CREAR POST
  $post = new Post;
  $post->text = $request->text;
  $post->img = $request->img;
  $post->user_id = Auth::id();
  $post->created_at = now();
  $post->updated_at = now();
  $post->save();
  //Volver a la view newPost
  return redirect('/newPost');
});


Route::get('/posts', function () {

});


Route::get('/posts/date', function () {
    $posts = App\Post::all()->sortBy("created_at");
    return view('post_list', ['posts'=>$posts]);
});





Auth::routes();
Route::get('/home','HomeController@index')->name('home');


Route::resource('/post', 'PostController');
