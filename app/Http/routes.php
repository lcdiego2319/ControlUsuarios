<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Routes for ControlUsuarios
Route::group(['prefix' => 'admin' , 'namespace' => 'Admin'],function(){
	Route::resource('users','UsersController');
});

Route::group(['prefix' => 'administrador','middleware'=>['auth'],'namespace' => 'Admin'],function(){//el middleware de admin se encuentra declarado en el constructor 
	Route::resource('usuarios','UsuarioController');
	Route::resource('calibration','CalibrationController');
	Route::resource('historial','HistorialController');
});

Route::group(['prefix' => 'estaciones','middleware'=>['auth'],'namespace'=>'Estaciones'],function(){
	Route::resource('reports','ReportsController');
	Route::resource('bodystatus','BodystatustableController');
	Route::resource('cantilever','CantileverController');
	Route::resource('conformal','ConformalController');
	Route::resource('coverassembly','CoverAssemblyController');
	Route::resource('coverstatus','CoverStatusController');
	Route::resource('finalTestStation1','FinalTestStation1Controller');
	Route::resource('finalTestStation3','FinalTestStation3Controller');
	Route::resource('finalTestStation4a','FinalTestStation4aController');
	Route::resource('finalTestStation2','FinalTestStation2Controller');
	Route::resource('finalTestStation4b','FinalTestStation4bController');
	Route::resource('friction','FrictionAssemblyController');
	Route::resource('heatForm','HeatFormController');
	Route::resource('labelPrinter','LabelPrinterController');
	Route::resource('buscador','BuscadorController');
	Route::resource('laser','LaserController');
	Route::resource('plugAssembly','PlugAssemblyController');
	Route::resource('welderRobot','WelderRobotController');
});

Route::post('storeSuperuser',['as'=>'storeSuperuser','uses'=>'Admin\UsuarioController@storeSuperuser']);
Route::get('createSuperuser','Admin\UsuarioController@getSuperuser');
Route::post('send/calibration','Admin\CalibrationController@postFields');
Route::post('send/fields','Admin\UsuarioController@postFields');
Route::post('resetPassword',['as'=>'resetPassword','uses'=>'Admin\UsuarioController@postResetPass']);
Route::get('custom_auth/login','CustomAuthController@getLogin');
Route::post('custom_auth/login','CustomAuthController@postLogin');
Route::get('custom_auth/logout','CustomAuthController@getLogout');
Route::get('getMessage',['as'=>'getMessage','uses'=>'Admin\UsuarioController@goChangePassword']);
Route::get('goMain',['as'=>'goMain','uses'=>'Admin\UsuarioController@goMain']);

//Route::resource('getUsers','UsuarioController');

Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
