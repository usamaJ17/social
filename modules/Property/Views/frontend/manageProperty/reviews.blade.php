<?php $container = 1 ?>
@extends('layouts.user')


@section('content')

	<!--<link rel="stylesheet" type="text/css" href="https://contrafinder.com/public/js/multi-input-taglist/css/taglist.css">
		<link rel="stylesheet" type="text/css" href="https://contrafinder.com/public/js/multi-input-taglist/css/demo.css">-->		
		<link rel="stylesheet" type="text/css" href="https://contrafinder.com/public/js/bootstrap-tagsinput-latest/src/bootstrap-tagsinput.css">

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
	.bootstrap-tagsinput 
	.tag{	
		background: #30c21c;    
		border-radius: 5px;    
		padding: 0px 5px;
	}
</style>
<style>
   .r-s
   {
   color: #ffbe28 !important;
   font-size:15px !important;
   }
   .rate-box
   {
   color:#cdcdcd !important;
   font-size:30px !important;
   }
   .ratings
   {
   color:#ffbe28 !important;
   font-size:30px !important;
   }
</style>
    <div class="service-edit-wrap"><br>
	@include('admin.message')
@if (count($review_list) > 0)
	<h2 style="margin: 0px;">
		Reviews for {{$row->title}}
		<a data-toggle="modal" data-target="#myModal" class="btn btn-default pull-right" style="border: 1px solid;margin-bottom: 15px;">Get Reviews</a>
	</h2>
   <br>
    <div class="col-lg-12 pl0 pl15-767">
    <div class="listing_single_reviews">
        <div class="product_single_content mb30">
            @foreach($review_list as $key => $item)
                @php
                    $userInfo = $item->author;
                    $pictures = $item->getReviewMetaPicture();
                @endphp
                <div class="mbp_first media @if($key != count($review_list) - 1) mb30 @endif">
                    
                    @if($avatar_url = $userInfo->getAvatarUrl())
                        <img class="mr-3 avatar" src="{{$avatar_url}}" alt="{{$userInfo->getDisplayName()}}">
                    @else
                        <span class="avatar-text">{{ucfirst($userInfo->getDisplayName()[0])}}</span>
                    @endif
                    <div class="media-body">
                        <h4 class="sub_title mt-0">{{ $userInfo->getDisplayName() }} </h4>
                        <div class="sspd_postdate fz14 mb0"> 
                            <div class="sspd_review">
                                @if($item->rate_number)
                                    <ul>
                                        @for( $i = 0 ; $i < 5 ; $i++ )
                                            @if($i < $item->rate_number)
                                                <li class="list-inline-item"><i class="fa fa-star r-s" style="font-size:15px;"></i></li>
                                            @else
                                                <li class="list-inline-item"><i class="fa fa-star-o r-s" style="font-size:15px;"></i></li>
                                            @endif
                                        @endfor
                                    </ul>
                                @endif
                            </div>
                            {{display_datetime($item->created_at)}}
                        </div>
                        <p class="fz14 mt10">{{ $item->content }}</p>
						@if(empty($item->admin_reply))
							<p><a data-toggle="modal" data-target="#myReplyModal" data-id="{{$item->id}}" class="btn btn-default" style="border: 1px solid;margin-bottom: 15px;">Reply</a></p>
						@endif
                        @if(!empty($pictures))
                            @php $listImages = json_decode($pictures->val, true); @endphp
                            <div class="review_upload_photo_list thumb-list mt30">
                                <ul>
                                    @foreach($listImages as $key => $oneImages)
                                        @php $imagesData = json_decode($oneImages, true); @endphp
                                        @if($key <= 3)
                                            <li class="list-inline-item review_upload_item gallery_item mb-3">
                                                <a href="{{ @$imagesData['download'] }}" class="popup-img-review">
                                                    @if($key >= 3)
                                                        <div class="gallery_overlay style2 listing_single_v1"><span class="icon"><span class="fz14">+{{ count($listImages) - 4 }}</span></span></div>
                                                    @endif
                                                    <img src="{{ @$imagesData['download'] }}" alt="bsp1">
                                                </a>
                                            </li>
                                        @else
                                            <li class="hidden"><a class="popup-img-review" href="{{ @$imagesData['download'] }}"></a></li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
				 <?php if(!empty($item->admin_reply)) {  ?>
         <div class="mbp_first media mb15 ml90 mt30">
            @if($avatar_url = $userInfo->getAvatarUrl())
            
           <img class="mr-3 avatar" style="
               border: 2px dashed #30c21e;
               padding: 5px;height:50px;width:50px;" 
               
               <?php $img = contractor_profile_icon_photo($row->image_id);
                if(!$row->image_id) { $img = "https://contrafinder.com/public//images/contra-logo.png"; }?>
                
               src="{{$img}}" alt="Contranfinder Admin" >
               
            @else
            <span class="avatar-text">Contranfinder</span>
            @endif
            <div class="media-body">
               <h5 class="sub_title mt-0">{{$row->title}} | <span style="font-size: 12px;font-weight:300;">
                  <?php 
                     $date = $item->replay_date;
                     echo date('F d, Y', strtotime($date)); 
                     ?>
                  </span>
               </h5>
               <div class="sspd_postdate fz14 mb0">
                  
               </div>
               <p class="fz14 mt10" style="text-align:justify;font-size:14px;line-height:20px;">{{ $item->admin_reply }}</p>
			   
				<p><a data-toggle="modal" data-target="#myReplyModal" data-id="{{$item->id}}" data-cnt="<?=base64_encode($item->admin_reply)?>" class="btn btn-default" style="border: 1px solid;margin-bottom: 15px;">Edit Reply</a></p>
				
               @if(!empty($pictures))
               @php $listImages = json_decode($pictures->val, true); @endphp
               <div class="review_upload_photo_list thumb-list mt30">
                  <ul>
                     @foreach($listImages as $key => $oneImages)
                     @php $imagesData = json_decode($oneImages, true); @endphp
                     @if($key <= 3)
                     <li class="list-inline-item review_upload_item gallery_item mb-3">
                        <a href="{{ @$imagesData['download'] }}" class="popup-img-review">
                           @if($key >= 3)
                           <div class="gallery_overlay style2 listing_single_v1"><span class="icon"><span class="fz14">+{{ count($listImages) - 4 }}</span></span></div>
                           @endif
                           <img src="{{ @$imagesData['download'] }}" alt="bsp1">
                        </a>
                     </li>
                     @else
                     <li class="hidden"><a class="popup-img-review" href="{{ @$imagesData['download'] }}"></a></li>
                     @endif
                     @endforeach
                  </ul>
               </div>
               @endif
            </div>
         </div>
         <?php } ?>
         <hr width="96%" size="1" align="center">
            @endforeach
        </div>
    </div>
</div>

@else

   <h2 style="margin: 0px;">No Reviews for {{$row->title}}</h2><br>
   <a data-toggle="modal" data-target="#myModal" class="btn btn-default" style="border: 1px solid;margin-bottom: 15px;">Get Reviews</a>
   <p>You do not have any reviews. Increase your visibility on ContraFinder by asking for reviews from your clients</p><br>
@endif

<div id="myReplyModal" class="modal fade" role="dialog">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h3 class="modal-title">Reply Reviews</h3>
         </div>
        <form action="{{route('reviews-reply')}}" method="POST">
			@csrf
			  <input type="hidden" name="id" />
			<div class="modal-body">
				<div class="row">
				   <div class="col-md-12">
						 <div class="form-group">
							<label for="email">Message</label>
							<textarea rows="8" class="form-control" name="message" required></textarea>
						 </div>
						 <br>
						
				   </div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-log btn-thm form-submit">Send Reply</button>
			</div>
        </form>
      </div>
   </div>
</div>
</div>

<!-- Trigger the modal with a button -->

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-xl">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Request Reviews</h3>
      </div>
      <div class="modal-body">
          <div class="row">
             <div class="col-md-6">
             
        <form action="{{ url('user/profile/askreviews') }}" method="POST">
            @csrf
              <label for="email" style="width: 100%;">To</label>
              <input name="emails" data-role="tagsinput" id="reviewemailsx" />
                <p style="font-size: 13px;
    padding-top: 5px;
    color: #ff9800;">Enter client email
addresses, separated by space</p>
            
            <div class="form-group">
                <label for="email">Message</label>
                <textarea rows="8" class="form-control" name="message" required></textarea>
            </div>
            
            <br>
            <button style="width: 60%;
            padding: 15px;" type="submit" class="btn btn-log btn-block btn-thm form-submit">Send Request</button>
        </form>
    
                 
             </div> 
             <div class="col-md-6">
                 <b>Email Preview</b>
                 <div style="background: #80808012;
    padding: 30px;
    border-radius: 0px;
    border: 1px solid #8080804a;" >
                     <h4>Request Review</h4>
                     <hr>
                     <p>“As a Fit Out professional, my business relies on
recommendations from clients. I would appreciate it if you
would write a brief review for me on Contrafinder.com, the
largest and most influential directory of fit out and interior
design professionals.<br><br>
Click this link to write your review. <br><br>
Thank in advance and let me know if you have any questions.
</p>
                 </div>
             </div> 
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</div>


@endsection

@section('footer')
    <script type="text/javascript" src="{{ asset('libs/tinymce/js/tinymce/tinymce.min.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('js/condition.js?_ver='.config('app.asset_version')) }}"></script>
    <script type="text/javascript" src="{{url('module/core/js/map-engine.js?_ver='.config('app.asset_version'))}}"></script>
    {!! App\Helpers\MapEngine::scripts() !!}
@endsection
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<!--<script type="text/javascript" src="https://contrafinder.com/public/js/multi-input-taglist/js/taglist.jquery.js"></script>		
<script type="text/javascript" src="https://contrafinder.com/public/js/multi-input-taglist/js/demo.js"></script>		-->				

<script type="text/javascript" src="https://contrafinder.com/public/js/bootstrap-tagsinput-latest/src/bootstrap-tagsinput.js"></script>	

<script>
	$(document).ready(function(){

		$(document).on('shown.bs.modal', '#myReplyModal', function (e) {
			var id = $(e.relatedTarget).attr('data-id');
			var cnt = $(e.relatedTarget).attr('data-cnt');
			$("#myReplyModal input[name='id']").val(id);
			$("#myReplyModal textarea[name='message']").val( cnt ? atob(cnt) : "" );
		});
	
	});
</script>