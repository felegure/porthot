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
Route::get('/contact', 'ChapcontactController@index');
Route::resource('/contacthotel', 'ChapcontactController');

Route::get('/freeroomes', 'ChapfreeroomeController@index');
Route::get('/bookvalidate', 'ChapvalidateController@store');
Route::get('/available', 'ChapbookcreateController@index');
Route::resource('booking', 'ChapvalidateController');
Route::resource('chapbookings', 'ChapbookingController');

Route::get('sendmail', 'ChapbooksendController@mailsend');

//Route::get('/blog', function () {        // To be done
//    return view('blog'); or call blogController
// });
?>
