@php
if(empty($reviewData)){
	//$reviewData = Modules\Review\Models\Review::getTotalViewAndRateAvg($row['id'], $review_service_type);
	
	
}

	
$review_stats = setting_item($review_service_type."_review_stats");
$is_review_available = Modules\Review\Models\Review::where('object_id', $row['id'])->where('vendor_id', Auth::id())->first();			
@endphp
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
<br><br>
<div class="col-lg-12 pl15-767">
   <div class="custom_reivews  mb20 row">
      <div class="col-lg-12">
         <div class="row">
            <div class="col-md-8">
               <h3 class="mb25 rew-space">
                  Reviews for {{$row->title}}
                  <!--{{ $reviewData['sbc_total'] }} (-->
                  <!--@if($reviewData['total_review'] > 1)-->
                  <!--    {{ __(":number Reviews for Galaxy Interiors",["number"=>$reviewData['total_review'] ]) }}-->
                  <!--@else-->
                  <!--    {{ __(":number Review  for Galaxy Interiors",["number"=>$reviewData['total_review'] ]) }}-->
                  <!--@endif-->
                  <!--)-->
               </h3>
               <ul class="listing_reviews btm-rev" style="margin-top: -9px;left: 36px !important;font-size: 16px;">
                  @for ($i = 1; $i <= 5; $i++)
                  @if($reviewData['sbc_total'] < $i)
                  @if (round($reviewData['sbc_total']) == $i)
                  <li class="list-inline-item"><i
                     class="fa fa-star-half-o " style="color:#ffbe28;"></i></li>
                  @continue
                  @endif
                  <li class="list-inline-item"><i
                     class="fa fa-star-o " style="color:#ffbe28;"></i></li>
                  @continue
                  @endif
                  <li class="list-inline-item "><i
                     class="fa fa-star " style="color:#ffbe28;"></i></li>
                  @endfor
                  <li class="list-inline-item"><b style="color:#000;">
                     {{ $reviewData['sbc_total'] }} 
                     (
						 @if($reviewData['total_review'] > 1)
						 {{ __(":number Reviews",["number"=>$reviewData['total_review'] ]) }}
						 @else
						 {{ __(":number Review",["number"=>$reviewData['total_review'] ]) }}
						 @endif
                     )
                     </b>
                  </li>
                  {{-- 
                  <li class="list-inline-item" style="color: #8080805c;
                     font-size: 15px;
                     position: relative;
                     top: -1px;"><b style="color:grey;">|</b></li>
                  <li class="list-inline-item ">
                     <span style="color:#000;font-size:15px;"> 
                     @if(count($review_list) < 1) {{'0'}} @else {{ count($review_list) }} @endif 
                     Review</span>
                  </li>
                  --}}
               </ul>
            </div>
			
			
			
			
			@if(empty($is_review_available))
            <div class="col-md-4 ">
               <a  id="write" class="btn btn-default" style="float: right;
                  border: 1px solid #808080b0;"> Write a Review</a>
            </div>
            @endif 
			
         </div>
         <br>
		 @include('admin.message')
         {{--@if (check_user_type() == 'customer')--}}
         <div class="col-lg-12 pl0 pl15-767" id="bc-reviews" style="display:none;" >
            <div class="single_page_review_form p30-lg mb30-991">
               <div class="wrapper">
                  <h2>{{ __("Write a Review") }}</h2>
                  {{-- <br> --}}
                  {{--             
                  <div class="rates">
                     <i class="fa fa-star rate-box">1</i>
                     <i class="fa fa-star rate-box">2</i>
                     <i class="fa fa-star rate-box">3</i>
                     <i class="fa fa-star rate-box">4</i>
                     <i class="fa fa-star rate-box">5</i>
                  </div>
                  --}}
                  <style>
                     * {
                     margin: 0;
                     padding: 0;
                     }
                     .rate {
                     float: left;
                     height: 46px;
                     padding: 0 10px;
                     }
                     .rate:not(:checked) > input {
                     position: absolute;
                     left: -9999px;
                     top: auto;
                     }
                     .rate:not(:checked) > label {
                     float: right;
                     width: 1em;
                     overflow: hidden;
                     white-space: nowrap;
                     cursor: pointer;
                     font-size: 30px;
                     color: #ccc;
                     }
                     .rate:not(:checked) > label:before {
                     content: "★ ";
                     }
                     .rate > input:checked ~ label {
                     color: #ffc700;
                     }
                     .rate:not(:checked) > label:hover,
                     .rate:not(:checked) > label:hover ~ label {
                     color: #deb217;
                     }
                     .rate > input:checked + label:hover,
                     .rate > input:checked + label:hover ~ label,
                     .rate > input:checked ~ label:hover,
                     .rate > input:checked ~ label:hover ~ label,
                     .rate > label:hover ~ input:checked ~ label {
                     color: #c59b08;
                     }
                     /* Modified from: https://github.com/mukulkant/Star-rating-using-pure-css */
                  </style>
                  {{--@include('admin.message')--}}
                  <form class="review_form review-form" id="review-form" action="{{route('review.store')}}" method="post">
                     @csrf
                     <div class="custom_reivews row mt40 review-items sspd_review" style="display:none;" >
                        @if(!$review_stats)
                        @php $review_stats = is_array($review_stats) ? $review_stats : json_decode($review_stats); @endphp
                        @foreach($review_stats as $item)
                        <div class="col-lg-2 pr0">
                           <div class="title">{{$item->title}}</div>
                        </div>
                        {{-- 
                        <div class="col-lg-4">
                           <div class="review_star text-right item">
                              <input class="review_stats" type="hidden" name="review_stats[{{$item->title}}]">
                              <div class="rates">
                                 <i class="fa fa-star grey"></i>
                                 <i class="fa fa-star grey"></i>
                                 <i class="fa fa-star grey"></i>
                                 <i class="fa fa-star grey"></i>
                                 <i class="fa fa-star grey"></i>
                              </div>
                           </div>
                        </div>
                        --}}
                        @endforeach
                        @else
                        <div class="col-lg-2 pr0">
                           <div class="title">{{__("Review rate")}}</div>
                        </div>
                        <div class="col-lg-4">
                           {{-- 
                           <div class="review_star text-right review-items">
                              <div class="item">
                                 <input class="review_stats" type="hidden" name="review_rate">
                                 <div class="rates">
                                    <i class="fa fa-star grey"></i>
                                    <i class="fa fa-star grey"></i>
                                    <i class="fa fa-star grey"></i>
                                    <i class="fa fa-star grey"></i>
                                    <i class="fa fa-star grey"></i>
                                 </div>
                              </div>
                           </div>
                           --}}
                        </div>
                        @endif
                     </div>
                     <div class="form-group">
                        {{-- <label>Write Review</label> --}}
                        <input type="hidden" name="review_service_id" value="{{ $row['id'] }}">
                        <input type="hidden" name="review_service_type" value="{{ $review_service_type }}">
                        <div class="rate">
                           <input type="radio" id="star5" name="review_rate" value="5" />
                           <label for="star5" title="5 stars">5 stars</label>
                           <input type="radio" id="star4" name="review_rate" value="4" />
                           <label for="star4" title="4 stars">4 stars</label>
                           <input type="radio" id="star3" name="review_rate" value="3" />
                           <label for="star3" title="3 stars">3 stars</label>
                           <input type="radio" id="star2" name="review_rate" value="2" />
                           <label for="star2" title="2 stars">2 stars</label>
                           <input type="radio" id="star1" name="review_rate" value="1" />
                           <label for="star1" title="1 star">1 star</label>
                        </div>
                        <br><br>
                        <textarea class="form-control" name="review_content" rows="7" placeholder="{{ __("write your feedback here") }}"></textarea>
                     </div>
                     <div class="row d-none">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Project Name</label>
                              <input class="form-control" type="text" />
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Completion Date</label>
                              <input class="form-control" type="date" />
                           </div>
                        </div>
                     </div>
                     @if(setting_item('review_upload_picture'))
                     <div class="review_upload_wrap form-group">
                        <div class="mb-3"><i class="fa fa-camera"></i> {{__('Add photo')}}</div>
                        <div class="row">
                           <div class="col-md-2">
                              <div class="review_upload_btn">
                                 <span class="helpText" id="helpText"></span>
                                 <input type="file" id="file" multiple data-name="review_upload" data-multiple="1" accept="image/*" class="review_upload_file">
                              </div>
                           </div>
                           <div class="col-md-10">
                              <div class="review_upload_photo_list row"></div>
                           </div>
                        </div>
                     </div>
                     @endif
                     <button type="submit" class="btn btn-thm">{{ __("Submit Review") }}</button>
                  </form>
               </div>
            </div>
         </div>
         {{--@endif--}}
      </div>
      @if(!$review_stats)
      @php $review_stats = json_decode($review_stats); @endphp
      @foreach($review_stats as $key => $val)
      @foreach($review_meta as $key2 => $val2)
      @if($val->title == $val2->name)
      <div class="col-lg-2">
         <div class="title">{{ $val->title }}</div>
      </div>
      <div class="col-lg-4">
         <div class="review_content">
            <div class="review_line">
               <span class="line-active" style="width: {{ $val2->sbc_total/5*100 }}%"></span>
            </div>
            <div class="review_point">{{ $val2->sbc_total }}</div>
         </div>
      </div>
      @break
      @endif
      @endforeach
      @endforeach
      @endif
   </div>
</div>
<?php
   function time_elapsed_string($datetime, $full = false) {
       $now = new DateTime;
       $ago = new DateTime($datetime);
       $diff = $now->diff($ago);
   
       $diff->w = floor($diff->d / 7);
       $diff->d -= $diff->w * 7;
   
       $string = array(
           'y' => 'year',
           'm' => 'month',
           'w' => 'week',
           'd' => 'day',
           'h' => 'hour',
           'i' => 'minute',
           's' => 'second',
       );
       foreach ($string as $k => &$v) {
           if ($diff->$k) {
               $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
           } else {
               unset($string[$k]);
           }
       }
   
       if (!$full) $string = array_slice($string, 0, 1);
       return $string ? implode(', ', $string) . ' ago' : 'just now';
   }
   ?>
@if(!empty($review_list))
<div class="col-lg-12  pl15-767 " style="margin-top: -55px;">
   <div class="listing_single_reviews">
      <div class="product_single_content mb30 ">
         @foreach($review_list as $key => $item)
         @php
         $userInfo = $item->author;
         $pictures = $item->getReviewMetaPicture();
         @endphp
         <div class="mbp_first media mt30 @if($key != count($review_list) - 1) mb15  @endif">
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
                     <ul class="mb0">
                        @for( $i = 0 ; $i < 5 ; $i++ )
                        @if($i < $item->rate_number)
                        <li class="list-inline-item"><i class="fa fa-star r-s"></i></li>
                        @else
                        <li class="list-inline-item"><i class="fa fa-star-o r-s"></i></li>
                        @endif
                        @endfor
                     </ul>
                     @endif
                  </div>
                  <!--{{ time_elapsed_string(display_datetime($item->created_at))}}-->
                  <span style="font-size: 13px;">
                  <?php 
                     $date = $item->created_at;
                     echo date('F d, Y', strtotime($date)); 
                     ?>
                  </span>
               </div>
               <p class="fz14 mt10" style="text-align:justify;font-size:14px;line-height:20px;">{{ $item->content }}</p>
               
               @if(!empty($is_review_available)) 
               @if(Auth::user()->name == $userInfo->getDisplayName())
               <a href="{{ route('review.delete',['id'=>$is_review_available->id]) }}" onclick="return confirm('Are you sure you want to delete your previous review?');" class="btn btn-danger btn-xs" style="
                  background: #d53f3f;border: 1px solid #d53f3f;font-size: 13px;margin-bottom:16px"> <i class="fa fa-trash"></i>  Delete Review</a>
               <br>
          @endif
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
         <div class="mbp_first media mb15 ml90 mt10 mt30 @if($key != count($review_list) - 1) mb15 ml90  @endif">
            @if($avatar_url = $userInfo->getAvatarUrl())
            <img class="mr-3 avatar" style="object-fit: cover;
               border: 2px dashed #30c21e;
               padding: 2px;height:50px;width:50px;" 
               
               <?php $img = contractor_profile_icon_photo($row->image_id);
                if(!$row->image_id) { $img = "https://cpworldgroup.com/wp-content/uploads/2021/01/placeholder.png";}?>
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
                  <!--{{ time_elapsed_string(display_datetime($item->created_at))}}-->
               </div>
               <p class="fz14 mt10" style="text-align:justify;font-size:14px;line-height:20px;">{{ $item->admin_reply }}</p>
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
@endif
<script>
   jQuery(function ($) {
     $("#write").click(function(){
       $("#bc-reviews").slideToggle();
     });
   })
       
</script>