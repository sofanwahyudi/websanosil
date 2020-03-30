<?php

use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\SitemapGenerator;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['middleware' => ['auth']], function() {
    Route::get('/admin/dashboard', 'AdminController@dashboard')->name('dashboard');
    Route::get('/logout', 'AdminController@logout');
    Route::resource('admin/application', 'ApplicationProductController');
    Route::get('admin/application', 'ApplicationProductController@index')->name('application');
    Route::get('admin/json/application', 'ApplicationProductController@dataTable')->name('application.json');
    Route::resource('/admin/sub_cat_prod', 'SubCaregoriesProductController');
    Route::get('/admin/sub_cat_prod', 'SubCaregoriesProductController@index')->name('sub.prod');
    Route::get('/admin/json/sub_cat_prod', 'SubCaregoriesProductController@dataTable')->name('sub.json');
    Route::resource('/admin/news', 'NewsController');
    Route::resource('admin/product', 'ProductController');
    Route::resource('admin/categories', 'CategoriesController');
    Route::get('admin/categories', 'CategoriesController@index')->name('categories');
    Route::get('admin/json/categories', 'CategoriesController@dataTable')->name('categories.json');
    Route::resource('admin/sub_categories', 'SubCategoriesController');
    Route::get('admin/sub_categories', 'SubCategoriesController@index')->name('sub.cat');
    Route::get('admin/json/sub_categories', 'SubCategoriesController@dataTable')->name('cat.json');
    Route::get('admin/product', 'ProductController@index')->name('product');
    Route::get('admin/json/product', 'ProductController@dataTable')->name('product.json');
    Route::get('/admin/news', 'NewsController@index')->name('news');
    Route::get('/admin/json/news', 'NewsController@dataTable')->name('news.json');
    Route::resource('/admin/galery', 'GaleryController');
    Route::get('/admin/galery', 'GaleryController@index')->name('galeri');
    Route::get('/admin/json/galery', 'GaleryController@dataTable')->name('galeri.json');
}); //End Route Auth Midleware
Route::get('product/search/', ['uses' => 'SectionController@search', 'as' => 'search.product']);
Route::get('/adminweb', 'AdminController@login');
Route::get('/', 'SectionController@section');
Route::post('/send', 'SectionController@send')->name('send.mail');
Route::get('/product', 'SectionController@pageProduct');
Route::get('/about', 'SectionController@pageAbout');
Route::get('/contact', 'SectionController@pageContact');
Route::get('/news', 'SectionController@pageNews');
Route::get('/news/{slug}', 'SectionController@post');
Route::get('/product/{slug}', 'SectionController@detailProduct');
Route::get('/kategori/{kategoriId}', 'SectionController@productByCategories');
Route::get('/kategori/{kategoriId}/{url}', 'SectionController@productBySubCategories');
Route::get('/kategori/{kategoriId}/{url}/{slugslug}', 'SectionController@productBySubSubCategories');
Route::get('/kategori/sub/product/{id}', 'SectionController@productBySubSubCategories');
Route::get('/aplikasi/{slug}', 'SectionController@productByApp');
Auth::routes(['register' => false, 'reset' => false, 'verify' =>'false']);

Route::get('/home', 'HomeController@index')->name('home');
