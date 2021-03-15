<?php   

use Illuminate\Support\Facades\Route;

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

Route::get('/','Frontend\FrontendController@index');
Route::get('/about/details','Frontend\FrontendController@aboutdetails')->name('abouts.about-details');
Route::get('/team/details/{id}','Frontend\FrontendController@teamdetails')->name('teams.team-details');
Route::get('/our/mission','Frontend\FrontendController@ourmission')->name('our.mission');
Route::get('/our/vission','Frontend\FrontendController@ourvission')->name('our.vission');
Route::get('/our/news','Frontend\FrontendController@ournews')->name('our.news');
Route::post('/contact/store','Frontend\FrontendController@contactstore')->name('contact.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix'=>'admin','middleware'=>['admin','auth'],'namespace'=>'admin'],function(){ 
	Route::get('dashboard','AdminController@index')->name('admin.dashboard');

});

Route::group(['prefix'=>'user','middleware'=>['user','auth'],'namespace'=>'user'],function(){ 
	Route::get('dashboard','UserController@index')->name('user.dashboard');

});

//========Item Catagory============
Route::group(['middleware'=>'auth'],function(){
	Route::get('admin/contacts', 'backend\ItemCatagoryController@getIndex')->name('item.index');
	Route::get('admin/contacts/data', 'backend\ItemCatagoryController@getData');
	Route::post('admin/contacts/store', 'backend\ItemCatagoryController@postStore');
	Route::post('admin/contacts/update', 'backend\ItemCatagoryController@postUpdate');
	Route::post('admin/contacts/delete', 'backend\ItemCatagoryController@postDelete');

//========Users============

Route::prefix('users')->group(function(){
	Route::get('/view','backend\UserController@view')->name('users.view');
	Route::get('/add','backend\UserController@add')->name('users.add');
	Route::post('/store','backend\UserController@store')->name('users.store');
	Route::get('/edit/{id}','backend\UserController@edit')->name('users.edit');
	Route::post('/update/{id}','backend\UserController@update')->name('users.update');
	Route::get('/delete/{id}','backend\UserController@delete')->name('users.delete');

});

Route::prefix('profiles')->group(function(){
	Route::get('/view','backend\ProfileController@view')->name('profiles.view');
	Route::get('/edit','backend\ProfileController@edit')->name('profiles.edit');
	Route::post('/store','backend\ProfileController@update')->name('profiles.update');
	Route::get('/password/view','backend\ProfileController@passwordview')->name('profiles.password.view');
	Route::post('/password/update','backend\ProfileController@passwordupdate')->name('profiles.password.update');
});

Route::prefix('sections')->group(function(){
	Route::get('/home/view','backend\HomeController@view')->name('sections.home-view');
	Route::get('/home/add','backend\HomeController@add')->name('sections.home-add');
	Route::post('/home/store','backend\HomeController@store')->name('sections.home-store');
	Route::get('/home/edit/{id}','backend\HomeController@edit')->name('sections.home-edit');
	Route::post('/home/update/{id}','backend\HomeController@update')->name('sections.home-update');
	Route::get('/home/delete/{id}','backend\HomeController@delete')->name('sections.home-delete');
	
});


Route::prefix('sections')->group(function(){
	Route::get('/about/view','backend\AboutController@view')->name('sections.about-view');
	Route::get('/about/add','backend\AboutController@add')->name('sections.about-add');
	Route::post('/about/store','backend\AboutController@store')->name('sections.about-store');
	Route::get('/about/edit/{id}','backend\AboutController@edit')->name('sections.about-edit');
	Route::post('/about/update/{id}','backend\AboutController@update')->name('sections.about-update');
	Route::get('/about/delete/{id}','backend\AboutController@delete')->name('sections.about-delete');
	
});

Route::prefix('sections')->group(function(){
	Route::get('/team/view','backend\TeamController@view')->name('sections.team-view');
	Route::get('/team/add','backend\TeamController@add')->name('sections.team-add');
	Route::post('/team/store','backend\TeamController@store')->name('sections.team-store');
	Route::get('/team/edit/{id}','backend\TeamController@edit')->name('sections.team-edit');
	Route::post('/team/update/{id}','backend\TeamController@update')->name('sections.team-update');
	Route::get('/team/delete/{id}','backend\TeamController@delete')->name('sections.team-delete');
	
});

Route::prefix('sections')->group(function(){
	Route::get('/messege/view','backend\MessegeController@view')->name('sections.messege-view');
	Route::get('/messege/add','backend\MessegeController@add')->name('sections.messege-add');
	Route::post('/messege/store','backend\MessegeController@store')->name('sections.messege-store');
	Route::get('/messege/delete/{id}','backend\MessegeController@delete')->name('sections.messege-delete');
	
});

Route::prefix('sections')->group(function(){
	Route::get('/skill/view','backend\SkillController@view')->name('sections.skill-view');
	Route::get('/skill/add','backend\SkillController@add')->name('sections.skill-add');
	Route::post('/skill/store','backend\SkillController@store')->name('sections.skill-store');
	Route::get('/skill/edit/{id}','backend\SkillController@edit')->name('sections.skill-edit');
	Route::post('/skill/update/{id}','backend\SkillController@update')->name('sections.skill-update');
	Route::get('/skill/delete/{id}','backend\SkillController@delete')->name('sections.skill-delete');
	
});

	

});