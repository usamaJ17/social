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
    width: 100%;
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
</style>
	<?php
		function get_rendom(){
			$six_digit_random_number = random_int(100000, 999999);
		
			$has = \DB::table('bc_projects')->where("unique_id", $six_digit_random_number)->count();
			
			if($has==0){
				return $six_digit_random_number;
			}else{
				return get_rendom();
			}
		}
		
		$six_digit_random_number = get_rendom();
		
	?>
    <div class="service-edit-wrap">
            <br>
            <h2>+Add Project</h2>
            <br>
            <div class="row">
            <div class="col-md-7">
                
            <form action="{{ route('added_projects') }}" method="POST">
                    @csrf
					<input type="hidden" class="form-control"  name="unique_id" value="<?=$six_digit_random_number?>" required>

                    <div class="form-group">
                        <label for="Project name">Project name </label>
                        <input type="text" class="form-control" id="Project name" name="project_name" required>
                    </div>
            <input type="hidden" class="form-control"  name="project_description" value="dsfgjdfjhgkdsf" required>
              
                    <div class="form-group">
                        <label for="Project address">Project address</label>
                        <input type="text" class="form-control" id="Project address" name="address" required>
                    </div>
                    <div class="form-group">
                        <label for="Project Completion year">Project Completion year</label>
                        <input type="text" class="form-control" id="Project Completion year" name="completion_year" required>
                    </div>
                    <div class="form-group">
                        <label for="pwd"><small>Cost Range</small></label>
                        <select class="form-control" name="cost">
                            <option value="AED_0-100K"> AED 0 - 100K  </option>
                            <option value="AED_100K-500K"> AED 100K - 500K  </option>
                            <option value="AED_500K-800K"> AED 500K - 800K  </option>
                            <option value="AED_800K-3M"> AED 800K - 3M  </option>
                            <option value="AED_3M-5M"> AED 3M - 5M  </option>
                            <option value="Over_AED_5M"> Over AED 5M    </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <select class="form-control" name="category">
                            <option value="Fitout_Contractor"> Fitout Contractor</option>
                            <option value="Design_&_Build"> Design & Build</option>
                            <option value="FF&E"> FF&E</option>
                            <option value="Interior_Design/Decoration"> Interior Design/Decoration</option>
                            <option value="Remodeling"> Remodeling</option>
                            <option value="Renovation"> Renovation</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label>Type</label>
                        <select class="form-control" name="type">
                            <option>Type</option>
                            <option value="Restaurant/Food_&_Beverage"> Restaurant/Food & Beverage</option>
                            <option value="Retail"> Retail</option>
                            <option value="Commercial_Offices"> Commercial Offices</option>
                            
                            <option value="Industrial">  Industrial</option>
                            <option value="Healthcare_facilities">  Healthcare facilities</option>
                            <option value="Hotels/Resorts">  Hotels/Resorts</option>
                            <option value="Showroom/Gallery">  Showroom/Gallery</option>
                        </select>
                    </div>
                    
                     <div class="panel">
                    <div class="panel-title"><strong>{{__("Project Photos")}}</strong></div>
                    <div class="panel-body">
                        {!! \Modules\Media\Helpers\FileHelper::fieldGalleryUpload('project_photos',$row->project_photos, "proj_img_". $six_digit_random_number) !!}
                    </div>
                </div>
                 <p style="font-size:13px;text-algin:justify;">By uploading photos, you are
approving their display by
ContraFinder, saying that you
either own the rights to the image
or that you have permission or a
license to do so from the copyright
holder, and agreeing to abide by
Contrafinder’s  <a href="https://contrafinder.com/page/terms-of-use" style="color:#30c21c;">Terms of use</a></p>
                    
                    {{-- <div class="col-md-12" style="width:60%;"> --}}
                        {{-- @include('layouts.pro_images',['hide_gallery'=>true,'property_type'=>1]) --}}
                    {{-- </div> --}}
                    
                    {{-- <a data-toggle="modal" data-target="#myModal" >
                        <img src="https://contrafinder.appstown.co/public/images/photos.png" />
                    </a>
                    <p style="margin-left: 7px;margin-top: 9px;">By uploading photos, you are approving their display by
                    Houzz, saying that you either own the rights to the image or that you have permission or a license to do so from the copyright holder, and agreeing to abide by Houzz's terms of use.”</p> --}}
                    
                    <br><br>
                    <button style="width: 60%;
                    padding: 15px;" type="submit" class="btn btn-log btn-block btn-thm form-submit">Add Project</button>
                </form>
                <!-- Modal -->
                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-xl">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-body">
                                <img src="https://contrafinder.appstown.co/public/images/upload.png" />
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

 <div class="col-md-5">
            <div class="" style="padding: 20px;
                background: #e8e7e700;margin-top: 10%;
                border: 1px solid #80808054;">
                <h3>Photo Guidelines</h3>
                <p>Innappropriate photos will be removed.</p>
                <br>
                <h4><i class="fa fa-check-circle" style="color: #38952cd4;"></i>&nbsp;Do's</h4>
                <ul style="color: #38952cd4;list-style: circle;
    padding-left: 20px;font-size:13px;">
                    <li>Photos of residential spaces</li>
                    <li>Large Photos (1000 pixels wide or more)</li>
                    <li>JPEG or PNG Formats</li>
                    <li>Good Quality Photos</li>
            
                    
                    
                </ul>
                
                <br>
                <h4> <i class="fa fa-ban" style="color: #ff0000ad;"></i>&nbsp;Dont's</h4>
                <ul style="color: #ff0000ad;list-style: circle;
    padding-left: 20px;font-size:13px;">
                    <li>Photos of commercial or office spaces</li>
                    <li>Small Photos</li>
                    <li>PDF, Multi-Page TIFF, or EPS file formats</li>
                    <li>Low Quality Photos</li>
                    
    
                    
                </ul>
                <br><br>
            </div>
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
