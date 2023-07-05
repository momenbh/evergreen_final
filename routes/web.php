<?php

use App\Http\Controllers\admin\Home;
// use App\http\controller\Homecontroller;

//Frontend controllers
use App\Http\Controllers\admin\News;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\Review;
use App\Http\Controllers\admin\Contact;
use App\Http\Controllers\admin\Project;


//Admin controllers
use App\Http\Controllers\admin\Dashboard;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\frontend\Homecontroller;
use App\Http\Controllers\frontend\Newscontroller;
use App\Http\Controllers\frontend\Aboutcontroller;

//Backend
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\AboutConroller;


use App\Http\Controllers\frontend\Contactcontroller;
use App\Http\Controllers\frontend\Projectcontroller;
//dashboard


// Route::get('/', function () {
//     return view('welcome');
// });






//Frontend controllers
Route::get('/', [Homecontroller::class, 'index'])->name('home.project');

//login
Route::get('/login',[LoginController::class,'login'])->name('admin.login');
Route::post('/do-login',[LoginController::class,'dologin'])->name('do.login');

//amdin routes
Route::get('/dashboard', [Dashboard::class, 'index'])->name('dashboard.project');




Route::group(['middleware'=> 'auth'], function (){

Route::get('/about', [Aboutcontroller::class, 'index']);

Route::get('/contact', [Contactcontroller::class, 'index']);

Route::get('/news', [Newscontroller::class, 'index']);

Route::get('/projects', [Projectcontroller::class, 'index']);

//project list/details

Route::get('/projects-list', [Projectcontroller::class, 'projectlist'])->name('list.project');
Route::get('/project/details/{id}',[Projectcontroller::class,'details'])->name('details.project');

//category
Route::get('/category/add',[News::class,'add'])->name('add.category');
Route::get('/category/manage',[News::class,'managecategory'])->name('manage.category');
Route::post('/category/store',[News::class,'store'])->name('store.category');

//delete  edit update
Route::get('/category/delete/{id}',[News::class,'delete'])->name('delete.category');
Route::get('/category/edit/{id}',[News::class,'edit'])->name('edit.category');
Route::post('/category/update/{id}',[News::class,'update'])->name('update.category');



//news
Route::get('/news/add',[News::class,'news'])->name('add.news');
Route::get('/news/manage',[News::class,'managenews'])->name('news.manage');
Route::get('/news/list',[News::class,'list'])->name('list.news');
Route::get('/news/view/details/{id}',[News::class,'details'])->name('details.news');
Route::post('/news/store_news',[News::class,'store_news'])->name('create.newes');
Route::get('/news/delete/{id}',[News::class,'delete_news'])->name('delete.newes');
Route::get('/news/edit/{id}',[News::class,'news_edit'])->name('edit.newes');
Route::post('/news/update/{id}',[News::class,'news_update'])->name('update.news');




//admin


Route::get('/logout',[LoginController::class,'logout'])->name('admin.logout');
// Route::get('/registration',[LoginController::class,'registration'])->name('admin.registration');





Route::get('/project/view',[Project::class,'view'])->name('view.project');
Route::get('/project/add',[Project::class,'addproject'])->name('add.project');
Route::post('/project/store',[Project::class,'store'])->name('store.project');

//admin delete /edit
Route::get('/project/delete/{id}',[Project::class,'delete'])->name('deete.project');
Route::get('/project/edit/{id}',[Project::class,'edit'])->name('edit.project');
Route::post('/project/update/{id}',[Project::class,'update'])->name('update.project');




//setting
Route::get('/settings',[SettingController::class,'settings'])->name('admin.settings');
Route::post('/settings/store',[SettingController::class,'store'])->name('store.settings');
// Route::post('/settings/update/{id}',[SettingController::class,'update'])->name('update.settings');

//client Reviews
Route::get('/clientreviews',[Review::class,'reviews'])->name('client.reviews');
Route::get('/client/manage',[Review::class,'manage'])->name('manage.client');

Route::post('/client/reviews/store',[Review::class,'store'])->name('reviews.store');

Route::get('/client/manage/delete/{id}',[Review::class,'delete'])->name('delete.reviews');
Route::get('/client/manage/edit/{id}',[Review::class,'edit'])->name('edit.reviews');
Route::post('/client/manage/update/{id}',[Review::class,'update'])->name('update.reviews');


//contact
Route::get('/contact',[Contact::class,'contact'])->name('contact.page');
Route::get('/contact/view',[Contact::class,'view'])->name('view.contact');
Route::post('/contact/store',[Contact::class,'store'])->name('store.contact');


//homepage edit
Route::get('/homepage/page',[Home::class,'homepage'])->name('home.page');
Route::post('/homepage/store',[Home::class,'store'])->name('store.homepage');

//about

Route::get('/about/page',[AboutConroller::class,'about'])->name('about.page');
Route::get('/about/details/pages',[AboutConroller::class,'pages'])->name('detail.pages');
Route::post('/about/pages/store',[AboutConroller::class,'store'])->name('aboutpage.store');

});