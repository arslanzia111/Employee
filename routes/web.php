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
// Route::view('/test','Translate.page');
// Route::get('/','TranslateController@index');
Route::get('/home/{lang}',function($lang){
    App::setlocale($lang);
    
    return view('Translate.page');
});
Route::get('/contact/{lang}',function($lang){
  App::setlocale($lang);
  
  return view('Translate.contact');
});
Route::get('/','MyController@index');

// Route::get('/', 'QueueController@chunks'); // chunk controller route
// Route::view('/c','Many_to_many.M2m');
// Route::view('/p','Many_to_many.M2mproduct');
// Route::get('/test','M2mController@index');
// Route::get('/product','M2mController@product');
// Route::get('/m','MyController@index');
// Route::view('/l','Master.master');
// Route::view('/view','Datatable.datatable');
// Route::post('/store', 'EmployeeController@store')->name('store');
// Route::post('/test','EmployeeController@show')->name('test');
// Route::get('/','EmployeeController@show');
// Route::post('/test','EmployeeController@store')->name('test');
// Route::get('/view', 'EmployeeController@firstview')->name('view');
//Route::get('/a','EmployeeController@a');
//Route::get('/b','EmployeeController@b');
//Route::get('/','EmployeeController@boot');
/*
Route::get('/test',function(){

   $a=['1'=>1,'2'=>2,'3'=>3];
    foreach($a as $array)
    echo $array;
  //return $a;


});
*/



//Route::get('/test', 'RequestController@save')->name('test');
//Route::view('/view','Master.master')->name('view');

// Route::get('/test', 'EmployeeController@show');
//Route::post('store','EmployeeController@store');
//Route::get('show', 'EmployeeController@show');
/*
Route::any( '/', function (Request $req) {
    dd($req);
  
  })->name('test');
  */

//Route::view('/test','Datatable.datatable')->name('test');


/*
Route::get('user/{salary}', function ($salary) {
    return 'User '.$salary;
});
*/
//Route::view('/table', 'Employee.employee')->name('table')->middleware('checkuser');
//Route::view('/test','Datatable.datatable')->name('test');
//Route::view('/Ka','Master.master')->name('Ka');



// Route::get('/', function (Request $request){
//     dd($request);
    

//   });
