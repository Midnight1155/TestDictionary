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
Auth::routes();
//Route::get('/kdictionary', 'HomeController@index')->name('Home');
//Route::get('/dictionary', 'DisplayDictionaryController@index')->name('dictionary.index');
Route::get('/', function () {
    $posts = App\Post::all();
    return view('Landing', compact('posts'));
})->name('landing');

Route::get('blog', function () {
    $posts = App\Post::all();
    return view('blog', compact('posts'));
})->name('blog');

Route::get('post/{slug}', function($slug){
    $post = App\Post::where('slug', '=', $slug)->firstOrFail();
    return view('post', compact('post'));
});

Route::get('/dictionary', 'HomeController@index')->name('home');
Route::get('/dictionary/{dic_data}', 'DisplayDictionaryController@show')->name('dictionary.show');
Route::post('search','SearchController@search');
Route::get('message', 'AboutController@showmessage')->name('message');
Route::get('foreword', 'AboutController@showforeword')->name('foreword');
Route::get('preface', 'AboutController@showpreface')->name('preface');
Route::get('searchfromdem', 'SampleController@index')->name('searchfromdem');
Route::get('glossary', 'GlossaryController@index')->name('glossary');

Route::get('contact', function () {
    return view('ContactUs');
})->name('contact');
/*
Route::get('admin/', function () {
    return view('Admin.AdminHome');
});

Route::get('admin/AddData', function () {
    return view('Admin.AddData');
});
Route::get('admin/UpdateData', function () {
    return view('Admin.UpdateData');
});
Route::post('admin/AddData', 'AjaxCrudController@store');
*/
//Route::resource('admin','AjaxCrudController');
Route::get('admin/DictionaryData', 'AjaxCrudController@index')->name('Admin.ViewDictionaryData');
Route::get('ViewData/getdata', 'AjaxCrudController@getdata')->name('ViewData.getdata');
Route::get('ViewData/getdata2', 'AjaxCrudController@getdata2')->name('ViewData.getdata2');

Route::post('admin/update', 'AjaxCrudController@update')->name('admin.update');
Route::get('admin/destroy/{id}', 'AjaxCrudController@destroy');



//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/admin', 'AdminController@index')->name('AdminHome');

//Route::get('search', 'SearchController@index')->name('search');
Route::get('autocomplete', 'SearchController@autocomplete')->name('autocomplete');


Route::get('/search', [
    "as"=> 'search',
    "uses"=> 'SearchController@result']);
Route::get('/phone', [
    "as"=> 'phone',
    "uses"=> 'SearchController@phone']);


Route::resource('searchfromdem', 'SampleController');

Route::post('sample/update', 'SampleController@update')->name('sample2.update');
Route::get('sample/destroy/{id}', 'SampleController@destroy');
Route::get('sample/getdata2', 'SampleController@getdicdata')->name('sample2.getdicdata');

//Route::resource('glossary', 'GlossaryController');
Route::get('glossary/glossarydata', 'GlossaryController@getGlossary')->name('glossary.getGlossary');

Route::get('/contributors', function () {
    return view('contributors');
});
//Route::get('/', 'SearchController@result')->name('search');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
