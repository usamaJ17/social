<div class="home10-mainslider">

    <?php $banner_images = $row->getBannerImages(); ?>

    @if ($banner_images)
        <div class="container-fluid p0">
            @if (!isset($_GET['project']))
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-banner-wrapper home10 suresh">
                            <div data-loop="{{ count($banner_images) != 1 }}"
                                class="banner-style-one owl-theme owl-carousel">
                                @foreach ($banner_images as $key => $val)
                                    <div class="slide slide-one"
                                        style="background-image: url({{ $val['medium'] }});height: 300px;"></div>
                                @endforeach
                            </div>
                            <div class="carousel-btn-block banner-carousel-btn">
                                <span class="carousel-btn left-btn"><i
                                        class="flaticon-arrow-pointing-to-left left"></i></span>
                                <span class="carousel-btn right-btn"><i
                                        class="flaticon-arrow-pointing-to-right right"></i></span>
                            </div><!-- /.carousel-btn-block banner-carousel-btn -->
                        </div><!-- /.main-banner-wrapper -->
                    </div>
                </div>
            @endif
        </div>
    @else
        <div class="container-fluid p0">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-banner-wrapper home10">
                        <div data-loop="0" class="banner-style-one owl-theme owl-carousel">
                            <div class="slide slide-one"
                                style="background-image: url('<?php echo url('/') . '/public/uploads/0000/44/2022/11/22/dimg.jpg'; ?>');height: 300px;"></div>
                        </div>
                        <div class="carousel-btn-block banner-carousel-btn">
                            <span class="carousel-btn left-btn"><i
                                    class="flaticon-arrow-pointing-to-left left"></i></span>
                            <span class="carousel-btn right-btn"><i
                                    class="flaticon-arrow-pointing-to-right right"></i></span>
                        </div><!-- /.carousel-btn-block banner-carousel-btn -->
                    </div><!-- /.main-banner-wrapper -->
                </div>
            </div>
        </div>
    @endif


    <style>
        .profile-pic {
            height: 120px;
            width: 120px;
            border-radius: 5px;
            box-shadow: 6px -4px 41px -25px rgb(0 0 0 / 75%);
          
        }

        .listing_reviews {

            bottom: 0px;
            left: 0px;
            top: auto;
        }
    </style>
    <div class="container " style="margin-top: 5%;">
        <div class="row  style2">
            <div class="col-lg-3 col-xl-3 desk-profile-pic">
                <?php $img = contractor_profile_icon_photo($row->image_id);
                if (!$row->image_id) {
                    $img = 'https://cpworldgroup.com/wp-content/uploads/2021/01/placeholder.png';
                } ?>

                <div>
                    <img class="profile-pic" src="{{ $img }}" />
                </div>

            </div>
            
            <div class="col-lg-3 col-xl-3 mbl-profile-pic">
                <?php $img = contractor_profile_icon_photo($row->image_id);
                if (!$row->image_id) {
                    $img = 'https://cpworldgroup.com/wp-content/uploads/2021/01/placeholder.png';
                } ?>

                <div>
                    <img class="profile-pic" src="{{ $img }}" />
                </div>

            </div>

            <div class="col-lg-7 col-xl-7">

                <div class="info-box info-thing">
                    <h2 style="margin-bottom:10px;">{{ $row->title }}</h2>

                    <br>

                    <ul class="listing_reviews">
                        <li class="list-inline-item"><b style="color:#ffbe28;">
                                {{ $reviewData['sbc_total'] }}
                            </b></li>

                        @for ($i = 1; $i <= 5; $i++)
                            @if ($reviewData['sbc_total'] < $i)
                                @if (round($reviewData['sbc_total']) == $i)
                                    <li class="list-inline-item"><i class="fa fa-star-half-o "
                                            style="color:#ffbe28;"></i></li>
                                    @continue
                                @endif
                                <li class="list-inline-item"><i class="fa fa-star-o " style="color:#ffbe28;"></i></li>
                                @continue
                            @endif
                            <li class="list-inline-item "><i class="fa fa-star " style="color:#ffbe28;"></i></li>
                        @endfor


                        <li class="list-inline-item ">
                            <span style="color:#000;">
                                (
                                @if ($reviewData['total_review'] > 1)
                                    {{ __(':number Reviews', ['number' => $reviewData['total_review']]) }}
                                @else
                                    {{ __(':number Review', ['number' => $reviewData['total_review']]) }}
                                @endif
                                )
                            </span>
                        </li>
                        @if ($row->verified == 'Yes')
                            <li class="list-inline-item">|</li>
                            <li class="list-inline-item"><img src="https://contrafinder.com/public/images/approved.png"
                                    style="height: 18px;position: relative;top: -2px;" /></li>
                            <li class="list-inline-item"><span
                                    style="color: #0f9138;position: relative;left: -4px;font-weight: bold;">
                                    Verified</span></li>
                        @endif


                    </ul>
                
				<div class="mbl-stars" style="margin-left: 5px;" >
								 @if ($row->hires > 0)					
					<span  data-toggle="tooltip" title="The number of clients who hired this professional through ContraFinder." style="font-size: 14px;cursor:pointer;color:#007bff;position: relative;left: -4px;font-weight: bold;"><i class="fa fa-handshake-o"></i> <?= $row->hires ?>x Hires</span> &nbsp;
						 @endif		
						  @if ($row->completed_hires > 0)	
					<span  data-toggle="tooltip" title="The number of hires which this professional has completed and verified by ContraFinder." style="font-size: 14px;cursor:pointer;color: #0f9138;position: relative;left: -4px;font-weight: bold;"> <i class="fa fa-check-circle-o"></i> <?= $row->completed_hires ?>x Hires  </span>
							@endif						
													
				</div>

                </div>
                

                <div class="single_property_title listing_single_v1" style="display:none;">
                    <div class="media">
                        <div class="media-body mt20">
                            <h2 class="mt-0">{{ $row->title }}</h2>
                            <ul class="mb40 agency_profile_contact listing_single_v1">
                                @if ($row->phone)
                                    <li class="list-inline-item"><a href="tel:{{ $row->phone }}"><span
                                                class="flaticon-phone"></span> {{ $row->phone }}</a></li>
                                @endif
                                @if ($row->location)
                                    <li class="list-inline-item"><a href="{{ $row->location->getDetailUrl() }}"><span
                                                class="flaticon-pin"></span> {{ $row->location->name }}</a></li>
                                @endif
                            </ul>

                            <div class="sspd_review listing_single_v1">
                                <ul class="mb0">
                                    @if (setting_item('property_enable_review') and $reviewData['total_review'] > 0)
                                        @for ($i = 0; $i < 5; $i++)
                                            @if ($i < (int) $reviewData['sbc_total'])
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            @else
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            @endif
                                        @endfor
                                        <li class="list-inline-item text-white">(
                                            @if ($reviewData['total_review'] > 1)
                                                {{ __(':number Reviews', ['number' => $reviewData['total_review']]) }}
                                            @else
                                                {{ __(':number Review', ['number' => $reviewData['total_review']]) }}
                                            @endif
                                            )
                                        </li>
                                    @endif
                                    @if ($row->price_range)
                                        <li class="list-inline-item ml20">
                                            <a class="price_range" href="#">
                                                @for ($i = 0; $i < $row->price_range; $i++)
                                                    $
                                                @endfor
                                            </a>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-xl-2">

                <div class="">
                    <ul class="listing_reviews btn-share-love">
                        <input type="hidden" value="{{ \Request::url() }}" id="current-contractor-url">
                        <li class="list-inline-item"><a href="#"
                                style="font-size: 16px;
                        font-weight: 800;
                    color: #000000;"
                                onclick="share_link()"><i class="fa fa-share-alt"></i> Share &nbsp;&nbsp;&nbsp;</a></li>

                        @if (check_user_type() == 'customer')
                            <li class="list-inline-item">
                                <a style="font-size: 16px; font-weight: 800; color: #000;" href=""
                                    class="service-wishlist {{ $row->isWishList() }}" data-id="{{ $row->id }}"
                                    data-type="{{ $row->type }}">
                                    <i class="fa fa-heart-o"></i> Save
                                </a>
                            </li>
                        @endif

                    </ul>
                </div>

                <div class="single_property_social_share listing_single_v1 mt80 mt0-lg" style="display:none;">
                    <div class="spss style2 listing_single_v1 mt30 float-left fn-lg">
                        <ul class="mb0">
                            <li class="list-inline-item icon social-share">
                                <a href="#"><span class="flaticon-upload"></span></a>
                                <ul class="share-wrapper">
                                    <li>
                                        <a class="facebook"
                                            href="https://www.facebook.com/sharer/sharer.php?u={{ $row->getDetailUrl() }}&amp;title={{ $translation->title }}"
                                            target="_blank" rel="noopener" original-title="{{ __('Facebook') }}">
                                            <i class="fa fa-facebook fa-lg"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="twitter"
                                            href="https://twitter.com/share?url={{ $row->getDetailUrl() }}&amp;title={{ $translation->title }}"
                                            target="_blank" rel="noopener" original-title="{{ __('Twitter') }}">
                                            <i class="fa fa-twitter fa-lg"></i>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-inline-item"><a class="text-white"
                                    href="#">{{ __('Share') }}</a></li>
                            <li class="list-inline-item icon">
                                <a href="#" class="service-wishlist {{ $row->isWishList() }}"
                                    data-id="{{ $row->id }}" data-type="{{ $row->type }}">
                                    <span class="fa fa-heart-o"></span>
                                </a>
                            </li>
                            <li class="list-inline-item"><a class="text-white"
                                    href="#">{{ $row->isWishList() ? __('Saved') : __('Save') }}</a></li>
                        </ul>
                    </div>
                    <!--@if (setting_item('property_enable_review'))
-->
                    <!--<div class="price listing_single_v1 mt25 float-right fn-lg">-->
                    <!--    <a href="#bc-reviews" class="btn btn-thm spr_btn">{{ __('Submit Review') }}</a>-->
                    <!--</div>-->
                    <!--
@endif-->
                </div>
            </div>
        </div>
    </div>
</div>
