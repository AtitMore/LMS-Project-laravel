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


Route::get('/', function () {
    return view('welcome');
});

Route::get('home', 'HomeController@index')->name('home');


*/




Route::get('/', function () {
    return view('welcome');
});

Route::get('home', 'HomeController@index')->name('home');



Auth::routes();

Route::get('/welcome', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});



Route::group(['namespace' => 'User'], function(){
	Route::get('blog','BlogController@index')->name('blog');
	Route::get('blog/{post}','PostController@post')->name('post');
	Route::get('blog/tag/{tag}','BlogController@tag')->name('tag');
	Route::get('blog/category/{category}','BlogController@category')->name('category.post');
	Route::get('category', 'CategoryController@index')->name('category');
	Route::get('abc', 'AbcController@index')->name('abc');
	Route::resource('user/post','WritePostController');

});


Route::group(['namespace' => 'Admin'], function(){

	
	// Tag Routes
	
	Route::resource('admin/tag','TagController');

	
	// Category Routes
	
	Route::resource('admin/category','CategoryController');

	//Post Route

	Route::resource('admin/post','PostController');

	//Admin Home Page

	Route::get('admin/home','HomeController@index')->name('admin.home');

	// Users Routes
	Route::resource('admin/user','UserController');

	// Roles Routes
	Route::resource('admin/role','RoleController');

	//Comment Manage
	Route::resource('admin/comment', 'CommentsController');

	// Permission Routes
	Route::resource('admin/permission','PermissionController');

	//Admin Auth
	Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');
	Route::post('admin-login', 'Auth\LoginController@login');



	//Route::get('admin/editor','EditorController@index');

	
});






Route::get('/home', 'HomeController@index')->name('home');

	Route::get('/', function () {
    return view('welcome');

});




Route::get('/{slug}', 'Profile\ProfileController@index')->name('profile');


if (version_compare(PHP_VERSION, '7.2.0', '>=')) {
// Ignores notices and reports all other kinds... and warnings
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
// error_reporting(E_ALL ^ E_WARNING); // Maybe this is enough
}

