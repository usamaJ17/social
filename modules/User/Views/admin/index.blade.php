@extends('admin.layouts.app')@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between mb20">
        <h1 class="title-bar">{{ __('All Users') }}</h1>
        <div class="title-actions">
            <!--<a href="{{ url('admin/module/user/create') }}" class="btn btn-primary">{{ __('Add new user') }}</a>-->
            <!--<a class="btn btn-warning btn-icon" href="{{ route('user.admin.export') }}" target="_blank" title="{{ __('Export to excel') }}">-->
            <!--    <i class="icon ion-md-cloud-download"></i> {{ __('Export to excel') }}-->
            <!--</a>-->
        </div>
    </div> @include('admin.message') <div class="filter-div d-flex justify-content-between ">
        <div class="col-left">
            <!--@if (!empty($rows))
-->
            <!--    <form method="post" action="{{ url('admin/module/user/bulkEdit') }}" class="filter-form filter-form-left d-flex justify-content-start">-->
            <!--        {{ csrf_field() }}-->
            <!--        <select name="action" class="form-control">-->
            <!--            <option value="">{{ __(' Bulk Actions ') }}</option>-->
            <!--            <option value="delete">{{ __(' Delete ') }}</option>-->
            <!--        </select>-->
            <!--        <button data-confirm="{{ __('Do you want to delete?') }}" class="btn-info btn btn-icon dungdt-apply-form-btn" type="button">{{ __('Apply') }}</button>-->
            <!--    </form>-->
            <!--
@endif-->
        </div>
        <div class="col-left">
            <div id="reportrange"
                style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc;margin-bottom:20px;">
                <i class="fa fa-calendar"></i>&nbsp; <span></span> <i class="fa fa-caret-down"></i> </div>
            <form method="get"
                class="filter-form filter-form-right d-flex justify-content-end flex-column flex-sm-row" role="search">
                <select class="form-control" name="role">
                    <option value="">{{ __('-- Select --') }}</option>
                    @foreach ($roles as $role)
                        <option value="{{ $role->name }}" @if (Request()->role == $role->name) selected @endif>
                            {{ ucfirst($role->name) }}</option>
                        @endforeach
                </select> <input type="text" name="s" value="{{ Request()->s }}"
                    placeholder="{{ __('Search by name') }}" class="form-control"> <button
                    class="btn-info btn btn-icon btn_search" type="submit">{{ __('Search User') }}</button> </form>
        </div>
    </div>
    <div class="text-right">
        <p><i>{{ __('Found :total items', ['total' => $rows->total()]) }}</i></p>
    </div>
    <div class="panel">
        <div class="panel-body">
            <form action="" class="bc-form-item">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <!--<th width="60px"><input type="checkbox" class="check-all"></th>-->
                                <th>{{ __('Name') }}</th>
                                <th>{{ __('Email') }}</th>
                                <th>{{ __('Phone') }}</th>
                                <th>{{ __('Gender') }}</th>
                                <th>{{ __('Age') }}</th>
                                <th>{{ __('Role') }}</th>
                                <th class="date">{{ __('Created Date') }}</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rows as $row)
                                <tr>
                                    <!--<td><input type="checkbox" name="ids[]" value="{{ $row->id }}" class="check-item"></td>-->
                                    <td class="title"> {{ $row->getDisplayName() }} </td>
                                    <td>{{ $row->email }}</td>
                                    <td>{{ $row->phone }}</td>
                                    <th>
                                        @if ($row->gender == 1)
                                            Male
                                        @elseif($row->gender == 0)
                                            Female
										@endif
                                    </th>
                                    <th>
                                        @if ($row->age == 18)
                                            18-25
                                        @elseif($row->age == 19)
                                            25-35
                                        @elseif($row->age == 20)
                                            35-50
                                        @elseif($row->age == 21)
                                            45-60+
                                            @endif
                                    </th>
                                    <td> @php
                                        $roles = $row->getRoleNames();
                                        if (!empty($roles[0])) {
                                            echo e(ucfirst($roles[0]));
                                        }
                                    @endphp </td>
                                    <td>{{ display_date($row->created_at) }}</td>
                                    <td>
                                        <div class="dropdown"> <button class="btn btn-primary btn-sm dropdown-toggle"
                                                type="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false"> <i class="fa fa-th"></i> </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> <a
                                                    class="dropdown-item" href=""><i class="fa fa-ban"></i>
                                                    Block</a>
                                                <!--<a class="dropdown-item"  href="{{ url('admin/module/user/edit/' . $row->id) }}"><i class="fa fa-edit"></i> {{ __('Edit') }}</a>-->
                                                <!--@if (!$row->hasVerifiedEmail())
-->
                                                <!--    <a class="dropdown-item"  href="{{ route('user.admin.verifyEmail', $row) }}"><i class="fa fa-edit"></i> {{ __('Verify email') }}</a>-->
                                            <!--    @else-->
                                                <!--    <a class="dropdown-item"  href="#" ><i class="fa fa-check"></i> {{ __('Email verified') }}</a>-->
                                                <!--
@endif--> 										<a class="dropdown-item" href="{{ url('admin/module/user/password/' . $row->id) }}"><i class="fa fa-lock"></i> {{ __('Change Password') }}</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </form> {{ $rows->appends(request()->query())->links() }}
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="{{asset('libs/daterange/moment.min.js')}}"></script>
<script src="{{asset('libs/daterange/daterangepicker.min.js?_ver='.config('app.asset_version'))}}"></script>
<link rel="stylesheet" href="{{asset('libs/daterange/daterangepicker.css')}}" />
<script>

var start = moment().startOf('week');
    var end = moment();
   
    function cb(start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    }
	
$('#reportrange').daterangepicker({
        startDate: start,
        endDate: end,
        "alwaysShowCalendars": true,
        "opens": "left",
        "showDropdowns": true,
        ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')],
            'This Year': [moment().startOf('year'), moment().endOf('year')],
            'This Week': [moment().startOf('week'), end]
        }
    }, cb).on('apply.daterangepicker', function (ev, picker) {
        
		 
			let url = new URL(window.location.href);
			url.searchParams.set('from', picker.startDate.format('YYYY-MM-DD'));
			url.searchParams.set('to', picker.endDate.format('YYYY-MM-DD'));
			console.log(url);
			
			window.location.href = url; // reloads the page
			 
		
		
		// Reload Earning JS
		
		/*$.ajax({
            url: 'https://contrafinder.com/admin/module/dashboard/reloadChart',
            data: {
                chart: 'earning',
                from: picker.startDate.format('YYYY-MM-DD'),
                to: picker.endDate.format('YYYY-MM-DD'),
            },
            dataType: 'json',
            type: 'post',
            success: function (res) {
                if (res.status) {
                    window.myMixedChart.data = res.data;
                    window.myMixedChart.update();
                }
            }
        })*/
    });
	
	<?php
		if(isset($_GET["from"])){
	?>
		cb( moment("<?php echo $_GET['from'];?>", 'YYYY-MM-DD'), moment("<?php echo $_GET['to'];?>", 'YYYY-MM-DD'));
	<?php
		}
	?>
	
    /*$('#reportrange').daterangepicker({
            startDate: start,
            endDate: end,
            "alwaysShowCalendars": true,
            "opens": "left",
            "showDropdowns": true,
            ranges: {
                '{{ __('Today') }}': [moment(), moment()],
                '{{ __('Yesterday') }}': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                '{{ __('Last 7 Days') }}': [moment().subtract(6, 'days'), moment()],
                '{{ __('Last 30 Days') }}': [moment().subtract(29, 'days'), moment()],
                '{{ __('This Month') }}': [moment().startOf('month'), moment().endOf('month')],
                '{{ __('Last Month') }}': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
                    'month').endOf('month')],
                '{{ __('This Year') }}': [moment().startOf('year'), moment().endOf('year')],
                '{{ __('This Week') }}': [moment().startOf('week'), end]
            }
        }, cb).on('apply.daterangepicker', function(ev,
            picker) { // Reload Earning JS         $.ajax({             url: '{{ url('admin/module/dashboard/reloadChart') }}',             data: {                 chart: 'earning',                 from: picker.startDate.format('YYYY-MM-DD'),                 to: picker.endDate.format('YYYY-MM-DD'),             },             dataType: 'json',             type: 'post',             success: function (res) {                 if (res.status) {                     window.myMixedChart.data = res.data;                     window.myMixedChart.update();                 }             }         })      });      cb(start, end);   */
</script>
@endsection