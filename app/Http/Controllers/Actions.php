<?php
namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Mail;
use Modules\User\Models\Role;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Modules\User\Events\SendMailUserRegistered;
use Chatify\Http\Models\Message;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Log;
use Modules\Property\Models\Property;

class Actions extends Controller{
    
    
     public function __construct()
    {

    }

    public function index()
    {
 
    }
    
    public function messages()
    {
        $message = DB::table("ch_messages")->get()->sortByDesc("id");
         return view("messages-admin")->with("mes", $message);
    }
    
    public function update_role($role_id)
    { 
        
            Role::where('model_id',Auth::id())->update(array('role_id' =>$role_id));
            DB::table('users')->where('id',Auth::id())->update(array('profile_completed' => 1));
           if(DB::table('users')->where('id',Auth::id())->value('property_created') == 0)
     {
        if ($role_id == 1) {
             $data=array('create_user'=> Auth::id());
             $id =   DB::table('bc_properties')->insertGetId($data);
             DB::table('users')->where('id',Auth::id())->update(array('property_created' => $id));
               //return redirect()->to('user/profile/edit/'.$id);
                return redirect()->to('profile-info?contractor=right');
        }else{
            return redirect()->to('profile-info');
            // return redirect()->to('customer/profile');
            
           
        }

     }
   
     
    }
    
    public function update_admin_reply(Request $request)
    
    {
       DB::table('bc_review')->where('id',$request->review_id)->update(array('admin_reply' => $request->admin_reply, 'replay_date' => date('Y-m-d H:i:s'))); 
            
       return "updated"; 
    }
	
	public function update_review_reply(Request $request){
		
		if(empty($request->id) || empty($request->message)){
		 return redirect('user/profile/reviews')->with('success', __('Sorry! Please try again latter'));
		}
		DB::table('bc_review')->where('id',$request->id)->update(array('admin_reply' => $request->message, 'replay_date' => date('Y-m-d H:i:s'))); 
		return redirect('user/profile/reviews')->with('success', __('Review reply added.'));
		
	}
    
    
    public function updatecustomerprofile(Request $request){
		
		
		
        DB::table('users')->where('id',Auth::id())->update(array(
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'age' => $request->input('age'),
            'gender' => $request->input('gender'),
            'phone' => $request->input('phone')
		));
		
		return redirect()->to('send_email_re');
    }
    
    
    
    
    
     
     public function update_contractor_profile(Request $request )
    {
        DB::table('bc_properties')->where('create_user',Auth::id())->update(array(
            'title' => $request->input('title'),
            'slug' => str_replace(' ', '-', $request->input('title')),
            'address' => $request->input('address'),
            'location_id' => $request->input('location_id'),
            'phone' => $request->input('phone')
		));
		
		DB::table('users')->where('id',Auth::id())->update(array(
		    'name' => $request->input('title'),
            'first_name' => $request->input('title'),
            'phone' => $request->input('phone'),
            'last_name' => "",
            ));
            
    	$row = Property::where("create_user", Auth::id())->first();
		
		$row->categories()->sync($request->input('categories') ?? []);
		
		return redirect()->to('send_email_re');
    }
    
}
