<?php
namespace Modules\Dashboard\Admin;

use Illuminate\Http\Request;
use Modules\AdminController;
use Modules\Booking\Models\Booking;
use DB;

class DashboardController extends AdminController
{
    public function index(Request $request)
    {
	   $bc_property = DB::table('bc_properties')->where('status', 'publish')
            ->orderBy('id', 'desc')
            ->get();
        
		foreach($bc_property as $val){
			
			if($request->has('from') && $request->from != "" && $request->has('to') && $request->to != "") {
				
				
				$val->reviews = DB::table('bc_review')->where('object_id', $val->id)->where('object_model', 'property')->whereNull('deleted_at')->whereRaw("DATE(created_at)>='{$request->from}'")->whereRaw("DATE(created_at)<='{$request->to}'")->count();
				
				$val->view = DB::table('analytics')->where('ch_id', $val->id)->whereRaw("DATE(created_at)>='{$request->from}'")->whereRaw("DATE(created_at)<='{$request->to}'")->sum("view");
				
				$val->messages = DB::table('ch_messages')->where("c_slug", $val->slug)->whereDate('created_at', '>=', $request->from)->whereDate('created_at', '<=', $request->to)->count();
			
			}else{
				$val->reviews = DB::table('bc_review')->where('object_id', $val->id)->where('object_model', 'property')->whereNull('deleted_at')->count();
				$val->messages = DB::table('ch_messages')->where("c_slug", $val->slug)->count();
				$val->view = DB::table('analytics')->where('ch_id', $val->id)->sum("view");
			}
		}
		
		$f = strtotime('monday this week');
        
		$data = [
				'recent_bookings' => Booking::getRecentBookings() , 
				'top_cards' => Booking::getTopCardsReport() , 
				'earning_chart_data' => Booking::getDashboardChartData($f, time()) , 
				'bc_properties' => $bc_property, 
			];
        
		return view('Dashboard::index', $data);
    }

    public function reloadChart(Request $request)
    {
        $chart = $request->input('chart');
        switch ($chart)
        {
            case "earning":
                $from = $request->input('from');
                $to = $request->input('to');
                return $this->sendSuccess(['data' => Booking::getDashboardChartData(strtotime($from) , strtotime($to)) ]);
            break;
        }
    }
}

