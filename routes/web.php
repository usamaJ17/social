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

use Illuminate\Support\Facades\Auth;
use Modules\Property\Models\PropertyCategory;
use Modules\Location\Models\Location;

// Route::get('/', 'HomeController@index');
// Route::get('/contractor/{title}', 'HomeController@contractor_property');
Route::get('/actions/update_role/{role_id}', 'Actions@update_role');
Route::post('/updatecustomerprofile', 'Actions@updatecustomerprofile');
Route::post('/update_contractor_profile', 'Actions@update_contractor_profile');
Route::post('/adminreply', 'Actions@update_admin_reply');
Route::post('reviews-reply', 'Actions@update_review_reply')->name('reviews-reply');
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/install/check-db', 'HomeController@checkConnectDatabase');
Route::get('admin-view/messages', 'Actions@messages');

Route::get('/update', function (){
    return redirect('/');
});

//Cache
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cleared!";
});



Route::get('send-mail', function () {
   
    $details = [
        'title' => 'Mail from Nicesnippets.com',
        'body' => 'This is a test email using SMTP'
    ];
   
    \Mail::to('phpfiverrpk@gmail.com')->send(new \App\Mail\MyDemoMail($details));
   
    dd("Mail Sent Successfully.");
});



//Login
Auth::routes();
//Custom User Login and Register
Route::post('register','\Modules\User\Controllers\UserController@userRegister')->name('auth.register');
Route::post('login','\Modules\User\Controllers\UserController@userLogin')->name('auth.login');
Route::post('logout','\Modules\User\Controllers\UserController@logout')->name('auth.logout');
// Social Login
Route::get('social-login/{provider}', 'Auth\LoginController@socialLogin');
Route::get('social-callback/{provider}', 'Auth\LoginController@socialCallBack');


// Logs
Route::get('admin/logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index')->middleware(['auth', 'dashboard','system_log_view']);



//custom routes for contrafinder

Route::get('/c_profile', function (){
    return view('c_profile');
});

// Route::get('/projects', function (){
//     return view('project');
// });

// Route::get('/add-project', function (){
//     return view('add-project');
// });



Route::get('/user_type', function (){
    return view('user_type');
});


Route::get('/send_email_re', function (){
    return view('send_email');
});





// Route::get('/message', function (){
//     return view('message');
// });

Route::get('/reviews', function (){
    return view('reviews');
});

Route::get('/tips-to-hire-contractor', function (){
    return view('hiringtips');
});

// Route::get('/analytics', function (){
//     return view('analytics');
// });

Route::get('/profile-info', function (){
	
	$property_category = PropertyCategory::where('status', 'publish')->get()->toTree();
	$property_location = Location::where("status","publish")->get()->toTree();
	
    return view('profile_info', compact('property_category', 'property_location'));
});


//static pages

Route::get('/terms-and-conditions', function (){
    return view('terms');
});

Route::get('/print-routes', function (){
    
	$routeCollection = \Route::getRoutes();

	echo "<style>";
	echo "table{ border-collapse: collapse; }";
	echo "table tr td{ padding: 8px; }";
	echo "table tr:hover{ background:#dddddd }";
	echo "</style>";
	
	echo "<table style='width:100%'>";
	echo "<tr>";
	echo "<td width='10%'><h4>HTTP Method</h4></td>";
	echo "<td width='10%'><h4>Route</h4></td>";
	echo "<td width='10%'><h4>Name</h4></td>";
	echo "<td width='70%'><h4>Corresponding Action</h4></td>";
	echo "</tr>";
	foreach ($routeCollection as $value) {
		echo "<tr>";
		echo "<td>" . $value->methods()[0] . "</td>";
		echo "<td>" . $value->uri() . "</td>";
		echo "<td>" . $value->getName() . "</td>";
		echo "<td>" . $value->getActionName() . "</td>";
		echo "</tr>";
	}
	echo "</table>";
	exit;
		$routeCollection = \Illuminate\Support\Facades\Route::getRoutes();

	foreach ($routeCollection as $value) {
		if($value->uri=="email/verify"){
			echo "<pre>";
			echo $value->uri;
			print_r($value);
			exit;
		}
	}
	
});




