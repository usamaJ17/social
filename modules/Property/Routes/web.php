<?php
use \Illuminate\Support\Facades\Route;

Route::group(['prefix'=>config('property.property_route_prefix')],function(){
    // Route::get('/','PropertyController@index')->name('property.search'); // Search
    // Route::get('/{slug}','PropertyController@detail')->name('property.detail');// Detail
    Route::get('/search/searchForSelect2','PropertyController@searchForSelect2')->name("property.searchForSelect");;// Search for select 2
});
//home
Route::get('/contractor/{slug}', 'PropertyController@detail');
Route::get('/','PropertyController@index')->name('property.search');
Route::get('/old','PropertyController@index_old')->name('property.search');
Route::group(['prefix'=>'user/'.config('property.property_route_prefix'),'middleware' => ['auth','verified']],function(){
    Route::match(['get'],'/','ManagePropertyController@manageProperty')->name('property.vendor.index');
    Route::match(['get'],'/create','ManagePropertyController@createProperty')->name('property.vendor.create');
    Route::match(['get'],'/edit/{id}','ManagePropertyController@editProperty')->name('property.vendor.edit');
    Route::match(['get','post'],'/del/{id}','ManagePropertyController@deleteProperty')->name('property.vendor.delete');    Route::match(['post'],'/store/{id}','ManagePropertyController@store')->name('property.vendor.store');
    Route::get('bulkEdit/{id}','ManagePropertyController@bulkEditProperty')->name("property.vendor.bulk_edit");
    Route::get('/booking-report','ManagePropertyController@bookingReport')->name("property.vendor.booking_report");
    Route::get('/booking-report/bulkEdit/{id}','ManagePropertyController@bookingReportBulkEdit')->name("property.vendor.booking_report.bulk_edit");
	Route::get('clone/{id}','ManagePropertyController@cloneProperty')->name("property.vendor.clone");
    Route::get('/contact','ManagePropertyController@showContact')->name('property.vendor.contact');
});

//profile
Route::get('/user/profile/create', 'ManagePropertyController@createProperty');
Route::get('/user/profile/message', 'ManagePropertyController@chmsg');
Route::post('/user/profile/send_chmsg', 'ManagePropertyController@send_chmsg')->name('send_chmsg');
Route::get('/user/profile/analytics', 'ManagePropertyController@analytics');
Route::get('/user/profile/reviews', 'ManagePropertyController@reviews');
Route::post('/user/profile/askreviews', 'ManagePropertyController@askreviews');
Route::get('/user/profile/projects', 'ManagePropertyController@project');
Route::get('/user/profile/add-project', 'ManagePropertyController@addproject');
Route::get('delete-project/{id}','ManagePropertyController@delete_projects_')->name('delete.project');
Route::get('/user/profile/edit-project/{id}','ManagePropertyController@edit_projects')->name('edit.project');
Route::get('/user/profile/edit/{id}', 'ManagePropertyController@editProperty')->name('user.profile.edit');

Route::group(['prefix'=>'user/'.config('property.property_route_prefix')],function(){
    Route::group(['prefix'=>'availability'],function(){
        Route::get('/','AvailabilityController@index')->name('property.vendor.availability.index');
        Route::get('/loadDates','AvailabilityController@loadDates')->name('property.vendor.availability.loadDates');
        Route::match(['post'],'/store','AvailabilityController@store')->name('property.vendor.availability.store');
    });
});

Route::group(['prefix'=>config('property.property_cat_route_prefix')], function (){
     Route::get('/{slug}', 'CategoryController@detail')->name('property.category.detail');});

Route::post('added_projects', 'ManagePropertyController@added_projects')->name('added_projects');
Route::post('/user/profile/update-project','ManagePropertyController@update_projects')->name('update.project');