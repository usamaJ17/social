<?php
namespace Modules\User\Controllers;

use App\Models\ChMessage;
use App\Notifications\AdminChannelServices;
use Chatify\Http\Models\Message;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;
use Matrix\Exception;
use Modules\FrontendController;
use Modules\Property\Models\Property;
use Modules\Review\Models\Review;
use Modules\User\Events\NewVendorRegistered;
use Modules\User\Events\SendMailUserRegistered;
use Modules\User\Events\UserSubscriberSubmit;
use Modules\User\Models\Subscriber;
use Modules\User\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\MessageBag;
use Modules\Vendor\Models\VendorRequest;
use Illuminate\Support\Facades\Validator;
use Modules\Booking\Models\Booking;
use App\Helpers\ReCaptchaEngine;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Modules\Booking\Models\Enquiry;
use Illuminate\Support\Str;
use Carbon\Carbon;
use DB;

class ChProjectController extends FrontendController
{
    use AuthenticatesUsers;

    protected $enquiryClass;

    public function __construct()
    {
        $this->enquiryClass = Enquiry::class;
        parent::__construct();
    }

    public function ch_projects(Request $request)
    {
        $bc_projects = DB::table('bc_projects')->where('property_id',get_bc_properties())->get();
        return view('project', get_defined_vars());
    }

    public function add_projects(Request $request)
    {
        $row = DB::table('bc_projects')->where('property_id',get_bc_properties())->first();
        return view('add-project', get_defined_vars());
    }

    public function submit_projects(Request $request)
    {
        $project_data = array(
            'property_id'=>get_bc_properties(),
            'project_name'=>$request->project_name,
            'project_cost'=>$request->cost,
            'project_location'=>$request->address,
            'completion_year'=>$request->completion_year
            // 'project_description'=>$request->project_name
        );
        DB::table('bc_projects')->insert($project_data);

        return redirect('user/profile/projects')->with('success', __('Projects added successfully!') );

        }


    //edit
    public function edit_projects(Request $request)
    {
        $row = DB::table('bc_projects')->where('id', $request->id)->first();
        return view('edit-project', get_defined_vars());
    }

    //update
    public function update_projects(Request $request)
    {
        $project_data = array(
            'property_id'=>get_bc_properties(),
            'project_name'=>$request->project_name,
            'project_cost'=>$request->cost,
            'project_location'=>$request->address,
            'completion_year'=>$request->completion_year
            // 'project_description'=>$request->project_name
        );

        $update = DB::table('bc_projects')->where('id', $request->project_id)->update($project_data);
        if ($update) {
            return redirect(route('projects'))->with('success', __('Projects Updated successfully!'));
        }

        return redirect(route('projects'))->with('error', __('Something Wrong!'));
    }

        //delete
    public function delete_projects(Request $request)
    {
        $delete = DB::table('bc_projects')->where('id', $request->id)->delete();
        if ($delete) {
            return redirect(route('projects'))->with('success', __('Projects deleted successfully!'));
        }
        
        return redirect(route('projects'))->with('error', __('Something wrong!') );
    }
}