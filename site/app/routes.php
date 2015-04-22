<?php

Route::get('/', function(){
	return View::make('frontend.layout',["main"=>View::make('frontend.index')]);
});

Route::get('/profile/search', function(){
	return View::make('frontend.layout',["main"=>View::make('frontend.profile.searchprofile')]);
});

Route::get('/profile/home', function(){
	return View::make('frontend.layout',["main"=>View::make('frontend.profile.home')]);
});

Route::get('/profile/user', function(){
	return View::make('frontend.layout',["main"=>View::make('frontend.profile.userprofile')]);
});

//registrations
Route::get('/registration', 'UserController@registration');
Route::post('/registration', 'UserController@postSignup');


Route::get('/login', function(){
	return View::make('frontend.layout',["main"=>View::make('frontend.profile.login')]);
});
Route::post('/login', 'UserController@postLogin');
Route::get('/logout', function(){
	Auth::logout();
	return Redirect::to('/');
});

Route::group(['before'=>'auth'], function(){
	Route::get('/basic-information', 'UserprofileController@editprofile');
	Route::put('/basicinfo', 'UserprofileController@basicinfo');
	Route::put('/religioninfo', 'UserprofileController@religioninfo');
	Route::put('/physicalinfo', 'UserprofileController@physicalinfo');
	Route::put('/educationinfo', 'UserprofileController@educationinfo');
	Route::put('/familyinfo', 'UserprofileController@familyinfo');
	Route::put('/lifestyleinfo', 'UserprofileController@lifestyleinfo');
	Route::put('/contactinfo', 'UserprofileController@contactinfo');
	Route::get('/profile', 'UserprofileController@getUserinfo');
	Route::get('/profile/{id}', 'UserprofileController@getUserinfo');
});


// Admin routes
Route::get('/admin', function(){
	return View::make('admin.layout',["main"=>View::make('admin.main')]);
});
Route::group(['prefix' => 'admin'], function () {

	Route::group(['prefix' => 'body_types'], function () {
		Route::get('/','BodyController@getBodytypes');
		Route::get('/add','BodyController@getAdd');
		Route::post('/store','BodyController@postAdd');
		Route::get('/edit/{id}','BodyController@getbodytype');
	    Route::put('/update/{id}', 'BodyController@putupdate');
	    Route::get('/delete/{id}', 'BodyController@getdelete');;

	});

    Route::group(['prefix' => 'education'], function () {
		Route::get('/','EducationController@getEducations');
		Route::get('/add','EducationController@getAdd');
		Route::post('/store','EducationController@postAdd');
		Route::get('/edit/{id}','EducationController@geteducation');
	    Route::put('/update/{id}', 'EducationController@putupdate');
	    Route::get('/delete/{id}', 'EducationController@getdelete');

	});
	 Route::group(['prefix' => 'complexion'], function () {
		Route::get('/','ComplexionController@getComplexions');
		Route::get('/add','ComplexionController@getAdd');
		Route::post('/store','ComplexionController@postAdd');
		Route::get('/edit/{id}','ComplexionController@getcomplexion');
	    Route::put('/update/{id}', 'ComplexionController@putupdate');
	    Route::get('/delete/{id}', 'ComplexionController@getdelete');

	});
	  Route::group(['prefix' => 'country'], function () {
		Route::get('/','CountryController@getCountries');
		Route::get('/add','CountryController@getAdd');
		Route::post('/store','CountryController@postAdd');
		Route::get('/edit/{id}','CountryController@getcountry');
	    Route::put('/update/{id}', 'CountryController@putupdate');
	    Route::get('/delete/{id}', 'CountryController@getdelete');

	});
	  
	   Route::group(['prefix' => 'tribe'], function () {
		Route::get('/','TribeController@getTribes');
		Route::get('/add','TribeController@getAdd');
		Route::post('/store','TribeController@postAdd');
		Route::get('/edit/{id}','TribeController@gettribe');
	    Route::put('/update/{id}', 'TribeController@putupdate');
	    Route::get('/delete/{id}', 'TribeController@getdelete');

	});
	   Route::group(['prefix' => 'religion'], function () {
		Route::get('/','ReligionController@getreligions');
		Route::get('/add','ReligionController@getAdd');
		Route::post('/store','ReligionController@postAdd');
		Route::get('/edit/{id}','ReligionController@getreligion');
	    Route::put('/update/{id}', 'ReligionController@putupdate');
	    Route::get('/delete/{id}', 'ReligionController@getdelete');

	});

	   Route::group(['prefix' => 'forum'], function () {
		Route::get('/','ForumController@getForums');
		Route::get('/add','ForumController@getAdd');
		Route::post('/store','ForumController@postAdd');
		Route::get('/edit/{id}','ForumController@getforum');
	    Route::put('/update/{id}', 'ForumController@putupdate');
	    Route::get('/delete/{id}', 'ForumController@getdelete');

	});

	   Route::group(['prefix' => 'language'], function () {
		Route::get('/','LanguageController@getlanguages');
		Route::get('/add','LanguageController@getAdd');
		Route::post('/store','LanguageController@postAdd');
		Route::get('/edit/{id}','LanguageController@getlanguage');
	    Route::put('/update/{id}', 'LanguageController@putupdate');
	    Route::get('/delete/{id}', 'LanguageController@getdelete');

	});

	    Route::group(['prefix' => 'state'], function () {
		Route::get('/','StateController@getStates');
		Route::get('/add','StateController@getAdd');
		Route::post('/store','StateController@postAdd');
		Route::get('/edit/{id}','StateController@getstate');
	    Route::put('/update/{id}', 'StateController@putupdate');
	    Route::get('/delete/{id}', 'StateController@getdelete');

	});

	     Route::group(['prefix' => 'city'], function () {
		Route::get('/','CityController@getCities');
		Route::get('/add','CityController@getAdd');
		Route::post('/store','CityController@postAdd');
		Route::get('/edit/{id}','CityController@getcity');
	    Route::put('/update/{id}', 'CityController@putupdate');
	    Route::get('/delete/{id}', 'CityController@getdelete');

	});
    
});

   