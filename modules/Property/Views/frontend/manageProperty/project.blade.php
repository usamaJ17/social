<?php $container = 1 ?>
@extends('layouts.user')


@section('content')
<style>
    .dungdt-upload-box .attach-demo {
    background-color: #f7f7f7;
    border-radius: 0px !important;
    height: 195px !important;
    margin-bottom: 30px;
    overflow: hidden;
    position: relative;
    transition: all .2s;
    width: 100%;
}
.profile-menus {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.profile-menus li {
  display: inline;
  padding-right: 30px;
}
.profile-menus li >a {
    display: inline;
    padding-right: 30px;
    font-size: 15px;
    text-decoration: none;
    color: grey;
    font-weight: 700;
}

.list-view-menu li
{
    display:block;
    padding: 5px 0px;
}

.list-view-menu li > a {
    display: block;
    font-size: 15sspx;
    text-decoration: none;
    color: grey;
    font-weight: 400;
}

.list-view-menu li > a:active {

color:red !important;

}

.form-control
{
    width: 60%;
    height: 45px;
}


.project-block
{
    margin-top: 18px;
}
.edit-icon
{
    position: absolute;
    background: #000000c7;
    padding: 7px 12px;
    color: #fff;
    border-radius: 50%;
    right: 25px;
    top: 27px;
    display: none;
}

.project-block:hover .edit-icon {
 display:block;
 color: #fff;
 transition:1s all;
}


.del-icon
{
    position: absolute;
    background: red;
    padding: 8px 14px;
    color: #fff;
    border-radius: 50%;
    right: 70px;
    top: 25px;
    display:none;
    
}

.project-block:hover .del-icon {
 display:block;
 color: #fff;
 transition:1s all;
}
</style>
<div class="service-edit-wrap">
    <h2>Projects</h2>
    <br>
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <div class="row">
        <div class="col-md-4">
            <div class="" style="text-align: center;
                border: 3px dashed #80808059;
                padding: 76px 50px;margin-top:18px;">
                <a href="{{ url('user/profile/add-project') }}" style="color: #30c21c;"><i class="fa fa-plus" style="font-size:66px;"></i><br>
                    Add Project
                </a>
            </div>
        </div>
        @if (count($bc_projects) > 0)
        @foreach ($bc_projects as $project)

<?php
        $photo = project_oneImg(0);
		
		$project_photo = explode(',', $project->project_photos);
		
		/*echo"<pre>";
		print_r($project_photo[0]);
		exit;*/
		
		$photo = project_oneImg($project_photo[0]);	
		
		/*foreach ($project_photo as $imgkey => $img_value) {
			if (!empty($img_value)) {				
				$photo = project_oneImg($img_value);			
			}		
		}*/
	?>
 
        <div class="col-md-4">
            <div class="project-block" style="border: 1px solid #00000045; height: 251px;">
                <img src="{{$photo}}" style="height: 200px;width: 100%;object-fit: cover;"  />
                <a href="{{ route('edit.project',['id'=>$project->id]) }}" class="edit-icon"><i class="fa fa-edit "></i></a>
                <a href="{{ route('delete.project',['id'=>$project->id]) }}" class="del-icon" onclick="alert('Are you sure you want to delete this project?');"><i class="fa fa-trash "></i></a>
            
                <div style="padding: 7px 14px;">
                    <b>{{substr($project->project_name, 0, 20)}} </b>
                    <p style="font-size: 12px; margin-top: -7px;">{{count($project_photo)-1}} Photos</p>
                </div>
            </div>
        </div>
        @endforeach
        @else
        {{''}}
        @endif
        
        
        
        {{-- <div class="col-md-4">
            <div class="project-block" style="border: 1px solid #00000045; height: 251px;">
                <img src="https://cdn.pixabay.com/photo/2017/03/28/12/10/chairs-2181947_1280.jpg" style="height: 200px;"  />
                <a href="" class="edit-icon"><i class="fa fa-edit "></i></a>
                <div style="padding: 7px 14px;">
                    <b>Emirates Hill</b>
                    <p style="font-size: 12px; margin-top: -7px;">2 Photos</p>
                </div>
            </div>
        </div> --}}
    </div>
</div>

@endsection

@section('footer')
    <script type="text/javascript" src="{{ asset('libs/tinymce/js/tinymce/tinymce.min.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('js/condition.js?_ver='.config('app.asset_version')) }}"></script>
    <script type="text/javascript" src="{{url('module/core/js/map-engine.js?_ver='.config('app.asset_version'))}}"></script>
    {!! App\Helpers\MapEngine::scripts() !!}
    <script>
        jQuery(function ($) {
            new BravoMapEngine('map_content', {
                fitBounds: true,
                center: [{{$row->map_lat ?? "51.505"}}, {{$row->map_lng ?? "-0.09"}}],
                zoom:{{$row->map_zoom ?? "8"}},
                ready: function (engineMap) {
                    @if($row->map_lat && $row->map_lng)
                    engineMap.addMarker([{{$row->map_lat}}, {{$row->map_lng}}], {
                        icon_options: {}
                    });
                    @endif
                    engineMap.on('click', function (dataLatLng) {
                        engineMap.clearMarkers();
                        engineMap.addMarker(dataLatLng, {
                            icon_options: {}
                        });
                        $("input[name=map_lat]").attr("value", dataLatLng[0]);
                        $("input[name=map_lng]").attr("value", dataLatLng[1]);
                    });
                    engineMap.on('zoom_changed', function (zoom) {
                        $("input[name=map_zoom]").attr("value", zoom);
                    });
                    engineMap.searchBox($('.bc_searchbox'),function (dataLatLng) {
                        engineMap.clearMarkers();
                        engineMap.addMarker(dataLatLng, {
                            icon_options: {}
                        });
                        $("input[name=map_lat]").attr("value", dataLatLng[0]);
                        $("input[name=map_lng]").attr("value", dataLatLng[1]);
                    });
                }
            });

            $(".open-edit-input").on("click", function (e) {
                e.preventDefault();
                var val = $(this).text();
                $(this).after('<input type="text" name="slug" value="'+val+'">').remove();
            });

                var condition_object = 'select, input[type="radio"]:checked, input[type="text"], input[type="hidden"], input.ot-numeric-slider-hidden-input,input[type="checkbox"]'; // condition function to show and hide sections

                $('body').on('change.conditionals', condition_object, function (e) {
                    run_condition_engine();
                });
                run_condition_engine();

                function run_condition_engine() {
                    $('[data-condition]').each(function () {
                        var passed;
                        var conditions = get_match_condition($(this).data('condition'));
                        var operator = ($(this).data('operator') || 'and').toLowerCase();
                        $.each(conditions, function (index, condition) {
                            var target = $('[name=' + condition.check + ']');
                            var targetEl = !!target.length && target.first();

                            if (!target.length || !targetEl.length && condition.value.toString() != '') {
                                return;
                            }

                            var v1 = targetEl.length ? targetEl.val().toString() : '';
                            var v2 = condition.value.toString();
                            var result;

                            if (targetEl.length && targetEl.attr('type') == 'radio') {
                                v1 = $('[name=' + condition.check + ']:checked').val();
                            }

                            if (targetEl.length && targetEl.attr('type') == 'checkbox') {
                                v1 = targetEl.is(':checked') ? v1 : '';
                            }

                            switch (condition.rule) {
                                case 'less_than':
                                    result = parseInt(v1) < parseInt(v2);
                                    break;

                                case 'less_than_or_equal_to':
                                    result = parseInt(v1) <= parseInt(v2);
                                    break;

                                case 'greater_than':
                                    result = parseInt(v1) > parseInt(v2);
                                    break;

                                case 'greater_than_or_equal_to':
                                    result = parseInt(v1) >= parseInt(v2);
                                    break;

                                case 'contains':
                                    result = v1.indexOf(v2) !== -1 ? true : false;
                                    break;

                                case 'is':
                                    result = v1 == v2;
                                    break;

                                case 'not':
                                    result = v1 != v2;
                                    break;
                            }

                            if ('undefined' == typeof passed) {
                                passed = result;
                            }

                            switch (operator) {
                                case 'or':
                                    passed = passed || result;
                                    break;

                                case 'and':
                                default:
                                    passed = passed && result;
                                    break;
                            }
                        });

                        if (passed) {
                            $(this).show();
                        } else {
                            $(this).hide();
                        }

                        passed = undefined;
                    });
                }

                function get_match_condition(condition) {
                    var match;
                    var regex = /(.+?):(is|not|contains|less_than|less_than_or_equal_to|greater_than|greater_than_or_equal_to)\((.*?)\),?/g;
                    var conditions = [];

                    while (match = regex.exec(condition)) {
                        conditions.push({
                            'check': match[1],
                            'rule': match[2],
                            'value': match[3] || ''
                        });
                    }

                    return conditions;
                } // Please do not edit condition section if you don't understand what it is
        })
    </script>

@endsection
