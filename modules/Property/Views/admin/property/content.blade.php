<h2>Account Information</h2>
<br>
        <div class="form-group">
            <label>{{__("Email")}}</label>
            <input type="text" value="{{Auth::user()->email}}" placeholder="{{__("Email")}}" disabled class="form-control">
        </div>
<br>
<h2>Public Business Information</h2>
<br>
        <div class="form-group">
            <label>{{__("Professional Firm/Business Name")}} <span style="color:red;">*</span></label>
            <input type="text" value="{{$translation->title}}" placeholder="{{__("Name of the property")}}" name="title" class="form-control"  required>
        </div>
        <div class="form-group">
            <label>{{__("License Number")}} <span style="color:red;">*</span></label>
            <input type="text" value="{{$translation->license_number}}" placeholder="{{__("License Number")}}" name="license_number" class="form-control" required>
        </div>
       
            <div class="form-group">
                <label class="control-label">{{__("Website")}}  <small> (https://example.com)</small></label>
                <input type="url" name="website" class="form-control" placeholder="{{__("https://example.com")}}" value="{{$row->website}}"  required>
            </div>
      
        <div class="form-group">
            <label class="control-label">{{__("Business Description")}} <span style="color:red;">*</span></label>
            <div class="">
                <textarea name="content" class="tinymce-editor" style="width:100%;padding: 20px;"  rows="10">{{$row->content}}</textarea>
            </div>
        </div>

        <!--@if(is_default_lang())-->
        <!--    <div class="form-group">-->
        <!--        <label class="control-label">{{__("Youtube Video")}}</label>-->
        <!--        <input type="text" name="video" class="form-control" value="{{$row->video}}" placeholder="{{__("Youtube link video")}}">-->
        <!--    </div>-->
        <!--@endif-->
        
        <!--@if(is_default_lang())-->
        <!--    <div class="form-group">-->
        <!--        <label class="control-label">{{__("Video Background")}}</label>-->
        <!--        <div class="form-group-image">-->
        <!--            {!! \Modules\Media\Helpers\FileHelper::fieldUpload('banner_image_id',$row->banner_image_id) !!}-->
        <!--        </div>-->
        <!--    </div>-->
        <!--@endif-->
        
        @if(is_default_lang())
            <div class="panel">
                <div class="panel-title"><strong>{{__("Background Images")}}</strong></div>
                <div class="panel-body">
					<?php
						
						if( Request::is('admin/*') ){
							$type = "by_contractor@@". $row->create_user;
						}else{
							$type = "usr_background_image";
						}
						
						
					?>
                    {!! \Modules\Media\Helpers\FileHelper::fieldGalleryUpload('banner_images',$row->banner_images, $type) !!}
                </div>
            </div>
        @endif
        
        
        <!--@if(is_default_lang())-->
        <!--    <div class="panel">-->
        <!--        <div class="panel-title"><strong>{{__("Gallery")}}</strong></div>-->
        <!--        <div class="panel-body">-->
        <!--            {!! \Modules\Media\Helpers\FileHelper::fieldGalleryUpload('gallery',$row->gallery) !!}-->
        <!--        </div>-->
        <!--    </div>-->
        <!--@endif-->
        
        <!--<div class="form-group-item">-->
        <!--    <label class="control-label">{{__('FAQs')}}</label>-->
        <!--    <div class="g-items-header">-->
        <!--        <div class="row">-->
        <!--            <div class="col-md-5">{{__("Title")}}</div>-->
        <!--            <div class="col-md-5">{{__('Content')}}</div>-->
        <!--            <div class="col-md-1"></div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--    <div class="g-items">-->
        <!--        @if(!empty($translation->faqs))-->
        <!--            @php if(!is_array($translation->faqs)) $translation->faqs = json_decode($translation->faqs); @endphp-->
        <!--            @foreach($translation->faqs as $key=>$faq)-->
        <!--                <div class="item" data-number="{{$key}}">-->
        <!--                    <div class="row">-->
        <!--                        <div class="col-md-5">-->
        <!--                            <input type="text" name="faqs[{{$key}}][title]" class="form-control" value="{{$faq['title']}}" placeholder="{{__('Eg: When and where does the tour end?')}}">-->
        <!--                        </div>-->
        <!--                        <div class="col-md-6">-->
        <!--                            <textarea name="faqs[{{$key}}][content]" class="form-control" placeholder="...">{{$faq['content']}}</textarea>-->
        <!--                        </div>-->
        <!--                        <div class="col-md-1">-->
        <!--                            <span class="btn btn-danger btn-sm btn-remove-item"><i class="fa fa-trash"></i></span>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            @endforeach-->
        <!--        @endif-->
        <!--    </div>-->
        <!--    <div class="text-right">-->
        <!--        <span class="btn btn-info btn-sm btn-add-item"><i class="icon ion-ios-add-circle-outline"></i> {{__('Add item')}}</span>-->
        <!--    </div>-->
        <!--    <div class="g-more hide">-->
        <!--        <div class="item" data-number="__number__">-->
        <!--            <div class="row">-->
        <!--                <div class="col-md-5">-->
        <!--                    <input type="text" __name__="faqs[__number__][title]" class="form-control" placeholder="{{__('Eg: Can I bring my pet?')}}">-->
        <!--                </div>-->
        <!--                <div class="col-md-6">-->
        <!--                    <textarea __name__="faqs[__number__][content]" class="form-control" placeholder=""></textarea>-->
        <!--                </div>-->
        <!--                <div class="col-md-1">-->
        <!--                    <span class="btn btn-danger btn-sm btn-remove-item"><i class="fa fa-trash"></i></span>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
   

<!--@include('Property::admin.property.pricing')-->

<!--@include('Property::admin.property.availability')-->