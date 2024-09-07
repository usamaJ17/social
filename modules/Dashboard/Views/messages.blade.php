@extends('admin.layouts.app') 
@section('content')
<div class="container-fluid">
    
    <br />
    <div class="row">
        <div class="col-md-12 col-lg-12 mb-12">
            <div class="panel">
                <div class="panel-title d-flex justify-content-between align-items-center">
                    <strong>Messages</strong>
                </div>
                <div class="panel-body">
                    <table id="example" class="display table table-hover" style="width: 100%;">
                        <thead>
                            <tr>
                                
                                <th>From</th>
                                <th>To</th>
                                <th>Content</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
							@foreach($bc_properties as $row)
                            <tr>
                                <td>{{$row->title}}</td>
                                <td>{{$row->view}}</td>
                                <td>{{$row->messages}}</td>
                                <td>{{$row->reviews}}</td>
                            </tr>
							@endforeach
                            <!--<tr>
                                <td>Horea Interiors</td>
                                <td>200</td>
                                <td>4</td>
                                <td>8</td>
                            </tr>

                            <tr>
                                <td>Mudassar Fitout</td>
                                <td>200</td>
                                <td>4</td>
                                <td>8</td>
                            </tr>-->
                        </tbody>
                    </table>

                    <canvas id="earning_chart" style="display: none;"></canvas>
                    <script>
                        var earning_chart_data = {!! json_encode($earning_chart_data) !!};
                    </script>
                </div>
            </div>
        </div>
    </div>
    <br />
    <div class="row"></div>
</div>
@endsection @section('script.body')
<script src="{{url('libs/chart_js/Chart.min.js')}}"></script>
<script src="{{url('libs/daterange/moment.min.js')}}"></script>

<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js" type="text/javascript"></script>

<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js" type="text/javascript"></script>

<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js" type="text/javascript"></script>

<script src="{{url('libs/daterange/daterangepicker.min.js?_ver='.config('app.asset_version'))}}"></script>
<link rel="stylesheet" href="{{url('libs/daterange/daterangepicker.css')}}" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css" />

<script>
    var ctx = document.getElementById('earning_chart').getContext('2d');
    window.myMixedChart = new Chart(ctx, {
        type: 'bar',
        data: earning_chart_data,
        options: {
            responsive: true,
            tooltips: {
                mode: 'index',
                intersect: true
            },
            scales: {
                xAxes: [{
                    stacked: true,
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: '{{__("Timeline")}}'
                    }
                }],
                yAxes: [{
                    stacked: true,
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: '{{__("Currency: :currency_main",['currency_main'=>setting_item('currency_main')])}}'
                    },
                    ticks: {
                        beginAtZero: true,
                    }
                }]
            },
            tooltips: {
                callbacks: {
                    label: function (tooltipItem, data) {
                        var label = data.datasets[tooltipItem.datasetIndex].label || '';
                        if (label) {
                            label += ': ';
                        }
                        label += tooltipItem.yLabel + " ({{setting_item('currency_main')}})";
                        return label;
                    }
                }
            }
        }
    });

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
            '{{__("Today")}}': [moment(), moment()],
            '{{__("Yesterday")}}': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            '{{__("Last 7 Days")}}': [moment().subtract(6, 'days'), moment()],
            '{{__("Last 30 Days")}}': [moment().subtract(29, 'days'), moment()],
            '{{__("This Month")}}': [moment().startOf('month'), moment().endOf('month')],
            '{{__("Last Month")}}': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')],
            '{{__("This Year")}}': [moment().startOf('year'), moment().endOf('year')],
            '{{__('This Week')}}': [moment().startOf('week'), end]
        }
    }, cb).on('apply.daterangepicker', function (ev, picker) {
        // Reload Earning JS
        $.ajax({
            url: '{{url('admin/module/dashboard/reloadChart')}}',
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
        })
    });
    cb(start, end);
</script>
<script>
    $(document).ready(function () {
        le").DataTable({
            dom: "Bfrtip",
            buttons: ["copy", "csv", "excel", "pdf", "print"]
           
        });
    });
</script>
@endsection
