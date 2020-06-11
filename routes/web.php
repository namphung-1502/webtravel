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
Route::get('menubar',function()
{
  return view('home.menubar2');
});
Route::get('banner',function()
{
  return view('home.banner');
});
Route::get('homepage','homepagecontroller@homepage')->name('homepage');
Route::get('logincustomer',function()
{
   return view('home.login');
})->name('logincustomer');
Route::post('xulilogin','homepagecontroller@login')->name('xulilogin');
Route::post('logingg','homepagecontroller@logingg')->name('logingg');
Route::get('register',function()
{
   return view('home.register');
})->name('register');
Route::post('register1','homepagecontroller@register')->name('register1');
Route::get('domestic','homepagecontroller@domestic')->name('domestic');
Route::get('foreign','homepagecontroller@foreign')->name('foreign');
Route::get('contact',function()
{
    return view('home.contact');
})->name('contact');
Route::get('aboutus',function()
{
  return view('home.intro');
})->name('aboutus');
Route::get('totalartical','homepagecontroller@totalartical')->name('totalartical');
Route::get('detailartical/{id}','homepagecontroller@detailartical')->name('detailartical/{id}');
Route::get('detailtour/{id}','homepagecontroller@detailtour')->name('detailtour/{id}');
Route::get('resultlink/{cate}/{place}','homepagecontroller@resultlink');

//ajax
Route::post('xulilienhe','ajaxcontroller@xulilienhe')->name('xulilienhe');
Route::post('xulicomment','ajaxcontroller@xulicomment')->name('xulicomment');
Route::post('filterforeign','ajaxcontroller@filterforeign')->name('filterforeign');
Route::post('filterdomestic','ajaxcontroller@filterdomestic')->name('filterdomestic');


//bill
Route::post('bill','billcontroller@bill')->name('bill')->middleware('customerlogin');
Route::post('savebill','billcontroller@savebill')->name('savebill')->middleware('customerlogin');
Route::get('loadcity','billcontroller@loadcity')->name('loadcity');
Route::get('cart','billcontroller@cart')->name('cart')->middleware('customerlogin');
Route::post('deletetour','billcontroller@deletetour')->name('deletetour');
Route::get('logout','billcontroller@logout')->name('logout');

//admin
Route::get('admin','admincontroller@admin')->name('admin')->middleware('adminlogin');
Route::get('totaltouradmin','admincontroller@totaltour')->name('totaltouradmin');
Route::get('deletetouradmin/{id}','admincontroller@deletetouradmin')->name('deletetouradmin');
Route::get('detailtouradmin/{id}','admincontroller@detailtour')->name('detailtouradmin');
Route::post('updatetouradmin','admincontroller@updatetour')->name('updatetouradmin');
Route::post('updatetouradmin2','admincontroller@updatetour2')->name('updatetouradmin2');
Route::get('addtourinterface','admincontroller@addtourinterface')->name('addtourinterface');
Route::post('addtouradmin','admincontroller@addtouradmin')->name('addtouradmin');
Route::get('totalbill','admincontroller@totalbill')->name('totalbill');
Route::get('detailbilladmin/{id}','admincontroller@detailbill')->name('detailbilladmin');
Route::get('managercustomer','admincontroller@managercustomer')->name('managercustomer');
Route::get('totalarticaladmin','admincontroller@totalarticle')->name('totalarticaladmin');
Route::get('deletearticleadmin/{id}','admincontroller@deletearticle')->name('deletearticleadmin');
Route::get('detailarticle/{id}','admincontroller@detailarticle')->name('detailarticle');
Route::post('updatearticleadmin','admincontroller@updatearticle')->name('updatearticleadmin');
Route::get('addartical','admincontroller@addartical')->name('addartical');
Route::post('add','admincontroller@add')->name('add');
Route::get('message','admincontroller@message')->name('message');
Route::post('deletebilladmin','admincontroller@deletebilladmin')->name('deletebilladmin');
Route::post('feedbackcustomer','admincontroller@feedbackcustomer')->name('feedbackcustomer');
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//google
Route::get('auth/google', 'Auth\LoginController@redirectToProvider');
Route::get('auth/google/callback', 'Auth\LoginController@handleProviderCallback');
Route::get('logout3','homepagecontroller@logout3')->name('logout3');
