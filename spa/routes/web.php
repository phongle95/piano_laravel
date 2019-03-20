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
Route::pattern('id','([0-9]*)');
Route::pattern('cid','([0-9]*)');
Route::pattern('slug','(.*)');

Route::namespace('Ajax')->group(function(){
	Route::get('/service', [
		'uses' => 'AjaxController@service',
		'as' => 'ajax.admin.activeService'
	]);	
	Route::get('/news', [
		'uses' => 'AjaxController@news',
		'as' => 'ajax.admin.activenews'
	]);	
});
Route::namespace('Auth')->group(function(){
	Route::get('login', [
		'uses' => 'AuthController@getLogin',
		'as' => 'auth.auth.login'
	]);
	Route::post('login', [
		'uses' => 'AuthController@postLogin',
		'as' => 'auth.auth.login'
	]);
	Route::get('logout', [
		'uses' => 'AuthController@logout',
		'as' => 'auth.auth.logout'
	]);
});
Route::namespace('Spa')->group(function(){
	Route::get('', [
		'uses' => 'IndexController@index',
		'as' => 'spa.index.index'
	]);
	Route::get('lien-he', [
		'uses' => 'IndexController@getContact',
		'as' => 'spa.index.contact'
	]);
	Route::post('lien-he', [
		'uses' => 'IndexController@postContact',
		'as' => 'spa.index.contact'
	]);
	Route::get('dich-vu', [
		'uses' => 'ServiceController@index',
		'as' => 'spa.service.index'
	]);
	Route::get('dich-vu/{slug}', [
		'uses' => 'ServiceController@service',
		'as' => 'spa.service.service'
	]);
	Route::get('day-nghe', [
		'uses' => 'ServiceController@learn',
		'as' => 'spa.service.learn'
	]);
	Route::get('day-nghe/khoa-hoc-spa-dao-tao-cham-soc-da-chuyen-nghiep', [
		'uses' => 'ServiceController@learnskin',
		'as' => 'spa.service.learnskin'
	]);
	Route::get('day-nghe/khoa-hoc-phun-xam-tham-my', [
		'uses' => 'ServiceController@learnxam',
		'as' => 'spa.service.learnxam'
	]);
	Route::get('gioi-thieu', [
		'uses' => 'IndexController@aboutus',
		'as' => 'spa.index.aboutus'
	]);
	Route::get('hinh-anh-video', [
		'uses' => 'IndexController@picture',
		'as' => 'spa.index.picture'
	]);
	Route::get('blog', [
		'uses' => 'NewsController@index',
		'as' => 'spa.news.index'
	]);
	Route::get('blog/{slug}', [
		'uses' => 'NewsController@news',
		'as' => 'spa.news.news'
	]);
	Route::get('{slug}-{id}.html', [
		'uses' => 'NewsController@detail',
		'as' => 'spa.news.detail'
	]);
	Route::get('tim-kiem', [
		'uses' => 'NewsController@search',
		'as' => 'spa.news.search'
	]);
	Route::get('sitemap.xml', [
		'uses' => 'IndexController@sitemap',
		'as' => 'spa.index.sitemap'
	]);
});
Route::namespace('Admin')->middleware('auth')->group(function(){
// Index ADMIN	
	Route::prefix('admin')->group(function(){
		Route::get('', [
			'uses' => 'IndexController@index',
			'as' => 'admin.index.index'
		]);
	//Category
		Route::prefix('cat')->group(function(){
			Route::get('', [
				'uses' => 'CatController@index',
				'as' => 'admin.category.index'
			]);
			Route::get('add', [
				'uses' => 'CatController@getAdd',
				'as' => 'admin.category.add'
			]);
			Route::post('add', [
				'uses' => 'CatController@postAdd',
				'as' => 'admin.category.add'
			]);
			Route::get('edit/{cid}', [
				'uses' => 'CatController@getEdit',
				'as' => 'admin.category.edit'
			]);
			Route::post('edit/{cid}', [
				'uses' => 'CatController@postEdit',
				'as' => 'admin.category.edit'
			]);
			Route::get('delete/{cid}', [
				'uses' => 'CatController@delete',
				'as' => 'admin.category.delete'
			]);
		});
	// News
		Route::prefix('news')->group(function(){
			Route::get('', [
				'uses' => 'NewsController@index',
				'as' => 'admin.news.index'
			]);
			Route::get('add', [
				'uses' => 'NewsController@getAdd',
				'as' => 'admin.news.add'
			]);
			Route::post('add', [
				'uses' => 'NewsController@postAdd',
				'as' => 'admin.news.add'
			]);
			Route::get('edit/{cid}', [
				'uses' => 'NewsController@getEdit',
				'as' => 'admin.news.edit'
			]);
			Route::post('edit/{cid}', [
				'uses' => 'NewsController@postEdit',
				'as' => 'admin.news.edit'
			]);
			Route::get('delete/{cid}', [
				'uses' => 'NewsController@delete',
				'as' => 'admin.news.delete'
			]);
		});
	// User
		Route::prefix('user')->group(function(){
			Route::get('', [
				'uses' => 'UserController@index',
				'as' => 'admin.user.index'
			]);
			Route::get('add', [
				'uses' => 'UserController@getAdd',
				'as' => 'admin.user.add'
			]);
			Route::post('add', [
				'uses' => 'UserController@postAdd',
				'as' => 'admin.user.add'
			]);
			Route::get('edit/{id}', [
				'uses' => 'UserController@getEdit',
				'as' => 'admin.user.edit'
			]);
			Route::post('edit/{id}', [
				'uses' => 'UserController@postEdit',
				'as' => 'admin.user.edit'
			]);
			Route::get('delete/{id}', [
				'uses' => 'UserController@delete',
				'as' => 'admin.user.delete'
			]);
		});
	//Cat package
		Route::prefix('package')->group(function(){
			Route::get('', [
				'uses' => 'CatPackageController@index',
				'as' => 'admin.catpackage.index'
			]);
			Route::get('add', [
				'uses' => 'CatPackageController@getAdd',
				'as' => 'admin.catpackage.add'
			]);
			Route::post('add', [
				'uses' => 'CatPackageController@postAdd',
				'as' => 'admin.catpackage.add'
			]);
			Route::get('edit/{id}', [
				'uses' => 'CatPackageController@getEdit',
				'as' => 'admin.catpackage.edit'
			]);
			Route::post('edit/{id}', [
				'uses' => 'CatPackageController@postEdit',
				'as' => 'admin.catpackage.edit'
			]);
			Route::get('delete/{id}', [
				'uses' => 'CatPackageController@delete',
				'as' => 'admin.catpackage.delete'
			]);
		});
	//Service
		Route::prefix('service')->group(function(){
			Route::get('', [
				'uses' => 'ServiceController@index',
				'as' => 'admin.service.index'
			]);
			Route::get('add', [
				'uses' => 'ServiceController@getAdd',
				'as' => 'admin.service.add'
			]);
			Route::post('add', [
				'uses' => 'ServiceController@postAdd',
				'as' => 'admin.service.add'
			]);
			Route::get('edit/{id}', [
				'uses' => 'ServiceController@getEdit',
				'as' => 'admin.service.edit'
			]);
			Route::post('edit/{id}', [
				'uses' => 'ServiceController@postEdit',
				'as' => 'admin.service.edit'
			]);
			Route::get('delete/{id}', [
				'uses' => 'ServiceController@delete',
				'as' => 'admin.service.delete'
			]);
		});
		Route::prefix('contact')->group(function(){
			Route::get('', [
				'uses' => 'ContactController@index',
				'as' => 'admin.contact.index'
			]);
			Route::get('delete/{id}', [
				'uses' => 'ContactController@delete',
				'as' => 'admin.contact.delete'
			]);
		});
	});
});