<?php
Route::controller(array(
	'boojer::home',
));


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/
Route::get('/gallery', 'boojer::home@gallery');
Route::get('/gallery/(:any)', 'boojer::home@show_gallery');
Route::get('/get_gallery_json/(:num)', 'boojer::home@gallery_json');
Route::get('/boojers', 'boojer::home@boojers');
Route::get('/boojers/(:any)', 'boojer::home@show_boojer');


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
// Route::get('admin/boojer', 'boojer::admin.home@index');
Route::get('admin/boojer', 'boojer::admin.boojer@index');


Route::get('admin/boojer/list', 'boojer::admin.boojer@index');
Route::get('admin/boojer/create', 'boojer::admin.boojer@create');
Route::post('admin/boojer/store', 'boojer::admin.boojer@store');
Route::get('admin/boojer/edit/(:num)', 'boojer::admin.boojer@edit');
Route::post('admin/boojer/update/(:num)', 'boojer::admin.boojer@update');
Route::get('admin/boojer/destroy/(:num)', 'boojer::admin.boojer@destroy');


Route::get('admin/boojer/albums', 'boojer::admin.album@index');
Route::get('admin/boojer/create_album', 'boojer::admin.album@create');
Route::post('admin/boojer/store_album', 'boojer::admin.album@store');
Route::get('admin/boojer/edit_album/(:num)', 'boojer::admin.album@edit');
Route::post('admin/boojer/update_album/(:num)', 'boojer::admin.album@update');
Route::get('admin/boojer/destroy_album/(:num)', 'boojer::admin.album@destroy');
Route::get('admin/boojer/edit_album_photos/(:num)', 'boojer::admin.album@edit_photos');
Route::post('admin/boojer/store_album_photo/(:num)', 'boojer::admin.album@store_photo');
Route::get('admin/boojer/destroy_album_photo/(:num)', 'boojer::admin.album@destroy_photo');
Route::post('admin/boojer/destroy_album_photo/(:num)', 'boojer::admin.album@destroy_photo');
Route::post('admin/boojer/update_album_photo_caption/(:num)', 'boojer::admin.album@update_photo');
Route::post('admin/boojer/update_album_photo_tags/(:num)', 'boojer::admin.album@update_photo_tags');
Route::post('admin/boojer/vote_down_album_photo/(:num)', 'boojer::admin.album@vote_down_photo');
Route::post('admin/boojer/vote_up_album_photo/(:num)', 'boojer::admin.album@vote_up_photo');
Route::get('admin/boojer/vote_down_album_photo/(:num)', 'boojer::admin.album@vote_down_photo');
Route::get('admin/boojer/vote_up_album_photo/(:num)', 'boojer::admin.album@vote_up_photo');
Route::post('admin/boojer/update_album_cover_photo', 'boojer::admin.album@update_album_cover');


Route::get('admin/boojer/tags', 'boojer::admin.boojtag@index');
Route::get('admin/boojer/create_tag', 'boojer::admin.boojtag@create');
Route::post('admin/boojer/store_tag', 'boojer::admin.boojtag@store');
Route::get('admin/boojer/edit_tag/(:num)', 'boojer::admin.boojtag@edit');
Route::post('admin/boojer/update_tag/(:num)', 'boojer::admin.boojtag@update');
Route::get('admin/boojer/destroy_tag/(:num)', 'boojer::admin.boojtag@destroy');