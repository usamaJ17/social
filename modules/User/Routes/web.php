<?php

use Illuminate\Support\Facades\Auth;
use \Illuminate\Support\Facades\Route;
Auth::routes(['verify' => true]);
Route::group(['prefix'=>'user','middleware' => ['auth','verified']],function(){
    Route::match(['get'],'/dashboard','UserController@dashboard')->name("vendor.dashboard");
    Route::post('/reloadChart','UserController@reloadChart');

    Route::get('/profile','UserController@profile')->name("user.profile.index");
    Route::post('/profile','UserController@profileUpdate')->name("user.profile.update");
    Route::get('/profile/change-password','UserController@changePassword')->name("user.change_password");
    Route::post('/profile/change-password','UserController@changePasswordUpdate')->name("user.change_password.update");
    Route::get('/booking-history','UserController@bookingHistory')->name("user.booking_history");
    Route::get('/enquiry-report','UserController@enquiryReport')->name("vendor.enquiry_report");
    Route::get('/enquiry-report/bulkEdit/{id}','UserController@enquiryReportBulkEdit')->name("vendor.enquiry_report.bulk_edit");

    Route::post('/wishlist','UserWishListController@handleWishList')->name("user.wishList.handle");
    Route::get('/wishlist','UserWishListController@index')->name("user.wishList.index");
    Route::get('/wishlist/remove','UserWishListController@remove')->name("user.wishList.remove");

    Route::group(['prefix'=>'verification'],function(){
        Route::match(['get'],'/','VerificationController@index')->name("user.verification.index");
        Route::match(['get'],'/update','VerificationController@update')->name("user.verification.update");
        Route::post('/store','VerificationController@store')->name("user.verification.store");
        Route::post('/send-code-verify-phone','VerificationController@sendCodeVerifyPhone')->name("user.verification.phone.sendCode");
        Route::post('/verify-phone','VerificationController@verifyPhone')->name("user.verification.phone.field");
    });

    Route::group(['prefix'=>'/booking'],function(){
        Route::get('{code}/invoice','BookingController@bookingInvoice')->name('user.booking.invoice');
        Route::get('{code}/ticket','BookingController@ticket')->name('user.booking.ticket');
    });

    Route::match(['get'],'/upgrade-vendor','UserController@upgradeVendor')->name("user.upgrade_vendor");

    Route::get('wallet','WalletController@wallet')->name('user.wallet');
    Route::get('wallet/buy','WalletController@buy')->name('user.wallet.buy');
    Route::post('wallet/buyProcess','WalletController@buyProcess')->name('user.wallet.buyProcess');

    Route::get('chat','ChatController@index')->name('user.chat');
    Route::get('/reviews','UserReviewController@index')->name("user.review.index");
});

Route::group(['prefix'=>config('chatify.path'),'middleware'=>'auth'],function(){
    Route::get('/', 'ChatController@iframe')->name(config('chatify.path'));
    Route::post('search','ChatController@search')->name('search');
    Route::post('getContacts', 'ChatController@getContacts')->name('contacts.get');
    Route::post('idInfo', 'ChatController@idFetchData');
});

Route::group(['prefix'=>'profile'],function(){
Route::match(['get'],'/{id}','ProfileController@profile')->name("user.profile");
Route::match(['get'],'/{id}/reviews','ProfileController@allReviews')->name("user.profile.reviews");
Route::match(['get'],'/{id}/services','ProfileController@allServices')->name("user.profile.services");
});


//customer
Route::get('customer/profile','UserController@customer_profile')->name('customer.profile');







//Newsletter
Route::post('newsletter/subscribe','UserController@subscribe')->name('newsletter.subscribe');
Route::get('message','UserController@message')->name('message');
Route::get('analytics','UserController@analytics')->name('analytics');

//projects
Route::get('projects','ChProjectController@ch_projects')->name('projects');
Route::get('add-project','ChProjectController@add_projects')->name('add-project');
// Route::post('submit_projects','ChProjectController@submit_projects')->name('submit_projects');
// Route::get('edit-project/{id}','ChProjectController@edit_projects')->name('edit.project');
// Route::post('update-project','ChProjectController@update_projects')->name('update.project');
// Route::get('delete-project/{id}','ChProjectController@delete_projects')->name('delete.project');

