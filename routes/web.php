<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('welcome');
});

Route::get('/benefits', function () {
    return view('benefits');
});
Route::get('/testimonials', function () {
    return view('testimonials');
});

Route::get('/rooms', function () {
    return view('rooms');
});

Route::get('/about', function () {
        return view('about');
});

Route::get('/bookcreate', 'ChapbookcreateController@index');    
Route::get('/contact', 'ContactController@create');  
Route::post('/contact', 'ContactController@store');  
Route::get('/freeroomes', 'ChapfreeroomeController@index');   
Route::get('/bookvalidate', 'ChapvalidateController@store');   
Route::get('/available', 'ChapbookcreateController@index'); 
Route::resource('booking', 'ChapvalidateController');
Route::resource('chapbookings', 'ChapbookingController');  

//Route::get('/typeroom', 'ChaptyperoomController@index');  // To be finalised  - To be implemented
//Route::get('/room', 'ChaproomController@index');        // To be finalised  - To be implemented
//Route::get('/customer', 'ChapcustomerController@index');  //   To be finalised - To be implemented
//Route::get('/booklist', 'ChapbookController@index');       //   To be finalised - To be implemented
//Route::resource('admin', 'AdminController');   NOT YET IMPLEMENTED
//Route::resource('chapbookings', 'ChapvalidateController');
//Route::resource('booking', 'ChapbookingController@store');
//Route::get('/blog', function () {        // To be done
//    return view('blog'); or call blogController
// });
