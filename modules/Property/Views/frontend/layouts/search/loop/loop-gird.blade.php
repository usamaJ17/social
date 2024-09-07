@php
	$translation = $row->translateOrOrigin(app()->getLocale());
	$reviewData = Modules\Review\Models\Review::getTotalViewAndRateAvg($row['id'], 'property');
@endphp
<div class="feat_property ">
	<div class="thumb">
        <a href="https://contrafinder.com/contractor/{{ $row->slug }}" style="width: 100%;">
            @if($row->image_url)
                <img class="img-whp" src="{{$row->image_url}}" style="height: 200px;
    width: 100% !important;
    object-fit: cover;
" alt="{{$translation->title}}">
            @else
                <span class="avatar-text-large">{{$row->vendor->getDisplayNameAttribute()[0]}}</span>
            @endif
        </a>
		<div class="thmb_cntnt">
			
			@if($row->is_featured)
				
			@endif
			<ul class="listing_reviews" style="bottom: 1px !important;">
				@for( $i = 0 ; $i < 5 ; $i++ )
					@if($i < (int)$reviewData['sbc_total'])
						<li class="list-inline-item"><a style="color:#ffbe28;"><span class="fa fa-star"></span></a></li>
					@else
						<li class="list-inline-item"><a style="color:#ffbe28;"><span class="fa fa-star-o"></span></a></li>
					@endif
				@endfor
				<li class="list-inline-item text-white">(
					@if($reviewData['total_review'] > 1)
						{{ __(":number Reviews",["number"=>$reviewData['total_review'] ]) }}
					@else
						{{ __(":number Review",["number"=>$reviewData['total_review'] ]) }}
					@endif
				)</li>
			</ul>
			<br><br>
		</div>
	</div>
	<div class="details">
		<div class="tc_content">
            
			<a href="https://contrafinder.com/contractor/{{ $row->slug }}" @if(!empty($blank)) target="_blank" @endif>
				<h4 class="title">{{$translation->title}}</h4>
			</a>
		<ul class="prop_details mb0">
				<!--@if($row->phone)-->
				<!--	<li class="list-inline-item"><span class="flaticon-phone mr15"></span><a href="tel:{{ $row->phone }}" target="_blank">{{ $row->phone }}</a></li>-->
				<!--@endif-->
				@if(!empty($row->location->name))
					<li class="list-inline-item">
						<a href="https://contrafinder.com/contractor/{{ $row->slug }}"><span class="flaticon-pin pr5"></span>{{ $row->location->name }}</a>
					</li>
				@endif
			</ul>
		</div>
		<div class="fp_footer">
				@if(!empty($category = $row->categories->first()))
					<ul class="fp_meta float-left mb0">
						@if($category->image_id)
							<li class="list-inline-item"><a href="https://contrafinder.com/contractor/{{ $row->slug }}"><img src="{{ \Modules\Media\Helpers\FileHelper::url($category->image_id) }}" alt="{{$category->name}}"></a></li>
						@endif
						<li class="list-inline-item"><a href="https://contrafinder.com/contractor/{{ $row->slug }}">{{$category->name}}</a></li>
					</ul>
				@endif
				<ul class="fp_meta float-right mb0">
					<li class="list-inline-item"><a class="service-wishlist icon {{ $row->isWishList() }}" data-id="{{$row->id}}" data-type="property"><i class="@if($row->hasWishList) fa fa-heart @else fa fa-heart-o @endif"></i></a></li>
				</ul>
		</div>
	</div>
</div>
