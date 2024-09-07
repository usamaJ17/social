@extends('admin.layouts.app')

@section('content')



    <form action="{{route('property.admin.store',['id'=>($row->id) ? $row->id : '-1','lang'=>request()->query('lang')])}}" method="post">
        @csrf
        <div class="container-fluid" style="background:#fff;">
            <div class="d-flex justify-content-between mb20">
                
                
                <!--<div class="">-->
                <!--    @if($row->slug)-->
                <!--        <a class="btn btn-primary btn-sm" href="{{$row->getDetailUrl(request()->query('lang'))}}" target="_blank">{{__("View Property")}}</a>-->
                <!--    @endif-->
                <!--</div>-->
                
            </div>
            @include('admin.message')
            <!--@if($row->id)-->
            <!--    @include('Language::admin.navigation')-->
            <!--@endif-->
            <div class="lang-content-box" style="background-color:#fff;">
                <div class="row">
                    <div class="col-md-9">
                        @include('Property::admin.property.content')
                        @include('Property::admin.property.location')
                       
                       @if(is_default_lang())
                        <div class="panel">
                            <div class="panel-title"><strong>Specialization {{__("Category")}}</strong></div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <div class="terms-scrollable">
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
                                                    <label class="term-item">
                                                        <input {{ $checked }} type="checkbox" name="categories[]" value="{{$category->id}}">
                                                        <span class="term-name">{{$prefix . ' ' . $category->name}}</span>
                                                    </label>
                                                <?php
                                                    $traverse($category->children, $prefix . '-');
                                                    }
                                                };
                                            $traverse($property_category);
                                            ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        
                           @include('Property::admin.property.attributes')
                    </div>
                    <div class="col-md-3">
                        
                        
                        <div class="panel">
                            <div class="panel-title"><strong>{{__('Verify Contractor')}}</strong></div>
                            <div class="panel-body">
                                @if(is_default_lang())
                                    <div>
                                        <label class="cursor-pointer"><input @if($row->verified=='Yes') checked @endif type="radio" name="verified" value="Yes"> {{__("Yes")}}
                                        </label></div>
                                        <div>
                                        <label class="cursor-pointer"><input @if($row->verified=='No') checked @endif type="radio" name="verified" value="No"> {{__("No")}}
                                        </label></div>
                                   
                                @endif
                            </div>
                        </div>
                        
                        <div class="panel">
                            <div class="panel-title"><strong>{{__('No of Hires')}}</strong></div>
                            <div class="panel-body">
                               
                                   <div >
                                       
                                       <input name="hires" type="text"  Placeholder="34" class="form-control" value="{{$row->hires}}"  />
                                   </div>
                                   
                               
                            </div>
                        </div>
                        
                          <div class="panel">
                            <div class="panel-title"><strong>{{__('Completed Hires')}}</strong></div>
                            <div class="panel-body">
                               
                                   <div >
                                       <input name="completed_hires" type="text"  Placeholder="34" class="form-control" value="{{$row->completed_hires}}"  />
                                   </div>
                                   
                               
                            </div>
                        </div>
                        
                        
                        <div class="panel">
                            <div class="panel-title"><strong>{{__('Publish')}}</strong></div>
                            <div class="panel-body">
                                @if(is_default_lang())
                                    <div>										
										<label class="cursor-pointer">
										<input @if($row->status=='publish') checked @endif type="radio" name="status" value="publish"> {{__("Publish")}}</label>									
									</div>									<div>										
									<label class="cursor-pointer"><input @if($row->status=='draft') checked @endif type="radio" name="status" value="draft"> {{__("Hide Contractor")}}</label>									
							</div>
                                @endif
							<div class="text-right">
								<button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> {{__('Update')}}</button>
							</div>
                            </div>
                        </div>                   
					</div>
                </div>
            </div>
        </div>
    </form>
    
   
@endsection

@section ('script.body')
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
                disableScripts: true,
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
            var cw = $('.attach-demo .image-item').width();
            $('.attach-demo .image-item').css({'height':cw+'px'});
            var cw1 = $('.image-feature .dungdt-upload-box-normal').width();
            $('.image-feature .dungdt-upload-box-normal').css({'height':cw1+'px'});
        })
    </script>
@endsection
