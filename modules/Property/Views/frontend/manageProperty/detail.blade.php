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
</style>

<div class="service-edit-wrap">
    
    <div class="d-flex justify-content-between mb20">
        <div class="">
        </div>
    </div>
    
    <div class="col-lg-12 mb10"></div>
    @include('admin.message')
    <!--<div class="mb-3">-->
    <!--    @if($row->id)-->
    <!--        @include('Language::admin.navigation')-->
    <!--    @endif-->
    <!--</div>-->
    <div class="row">
        <div class="col-md-12" style="width:100%;">
            @include('Property::admin.property.content',['hide_gallery'=>true,'property_type'=>1])
        </div>

        {{--<div class="col-md-12" style="width:60%;">
            <div class="panel">
                <div class="panel-title"><strong>Certifications and Awards</strong></div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <input type="file" name="certifications[]" class="form-control" multiple="multiple">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12" style="width:60%;">
            <div class="panel">
                <div class="panel-title"><strong>Certifications and Awards list</strong></div>
                <div class="panel-body">
                    <div class="row">
                        @if (count($certifications_award) > 1)
                        @php $file_count = 1; @endphp
                        @foreach ($certifications_award as $award)
                            <a class="mr-3" href="{{ url($award->path) }}">File:{{$file_count}}</a>
                        @php $file_count++; @endphp
                        @endforeach
                        @else
                        {{'data Not found!'}}
                        @endif
                    </div>
                </div>
            </div>
        </div> --}}

{{--         <div class="col-md-12" style="width:60%;">
            <div class="panel">
                <div class="panel-title"><strong>Awards</strong></div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <input type="file" name="awards" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="col-md-12">
            @if(is_default_lang())
            <div class="panel">
                <div class="panel-title"><strong>{{__("Category")}}</strong></div>
                <div class="panel-body">
                    
                    
                    <div class="row">
                        
                        
                        
                        
                        <?php
							$traverse = function ($categories, $prefix = '') use (&$traverse, $row) {
							
							foreach ($categories as $category) {
								$checked = '';
								foreach ($row->categories as $cat){
										if ($category->id == $cat->id){
										$checked = 'checked';
										break;
									}
								}
                        ?>
							<div class="col-md-6">
								<label class="term-item d-block">
									<input {{ $checked }} type="checkbox" name="categories[]" value="{{$category->id}}">
									<span class="term-name">{{$prefix . ' ' . $category->name}}</span>
								</label>
							</div>
                        <?php
							$traverse($category->children, $prefix . '-');
							}
                        };
                        $traverse($property_category);
                        ?>
                    </div>
                </div>
            </div>
            @endif
            <!--<div class="panel panel-image">-->
            <!--    <div class="panel-title"><strong>{{__('Property Image')}}</strong></div>-->
            <!--    <div class="panel-body">-->
            <!--        {!! \Modules\Media\Helpers\FileHelper::fieldUpload('image_id',$row->image_id) !!}-->
            <!--    </div>-->
            <!--</div>-->
            @include('Property::admin.property.attributes')
            
            @include('Property::admin.property.location')
            
            
            <br>
            <div class="my_profile_setting_input text-center">
                <button type="submit" class="btn btn-log btn-block btn-thm form-submit btn-lg">{{ __('Save Details') }}</button>
                
            </div>
        </div>
    </div>
</form>
</div>
@endsection
@section('footer')
<script type="text/javascript" src="{{ asset('libs/tinymce/js/tinymce/tinymce.min.js') }}" ></script>
<script type="text/javascript" src="{{ asset('js/condition.js?_ver='.config('app.asset_version')) }}"></script>
<script type="text/javascript" src="{{url('module/core/js/map-engine.js?_ver='.config('app.asset_version'))}}"></script>
{!! App\Helpers\MapEngine::scripts() !!}

<script type="text/javascript">
		tinymce.init({
            selector: 'textarea.tinymce-editor',
            height: 300,
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount', 'image'
            ],
            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
            content_css: '//www.tiny.cloud/css/codepen.min.css'
        });
    </script>
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