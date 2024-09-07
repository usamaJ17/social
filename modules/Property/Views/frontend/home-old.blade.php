<?php
   /*$reflFunc = new ReflectionFunction('contractor_photo');
   print $reflFunc->getFileName() . ':' . $reflFunc->getStartLine();
   exit;*/
   
   ?>
@extends('layouts.app')
@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset("libs/ion_rangeslider/css/ion.rangeSlider.min.css") }}"/>
@endsection
@section('content')
<section class="home-one home1-overlay bg-img1" style="height: 500px;background-image:url(https://images.pexels.com/photos/271795/pexels-photo-271795.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2)">
   <div class="container">
      <div class="row posr">
         <div class="col-lg-12">
            <div class="home_content home1" style="padding: 140px 0 240px;">
               <div class="home-text text-center home1">
                  <br><br>
                  <h2 class="fz40 mx-lg-5">Find Your Fit-Out Contractor</h2>
                  <p class="fz18 color-white" style="display:none;">Answer a few questions and we’ll put you in touch with pros who can help</p>
               </div>
               <div class="row justify-content-center">
                  <div class="col-lg-10 col-xl-8">
                     <div class="home_adv_srch_opt text-center ">
                        <div class="wrapper">
                           <div class="home_adv_srch_form home1">
                              <div class="">
                                 <ul class="nav nav-tabs  d-none " role="tablist">
                                    <li role="bc_property">
                                       <a href="#bc_property" class=" active " aria-controls="bc_property" role="tab" data-toggle="tab">
                                       <i class="icofont-building-alt"></i>
                                       Property
                                       </a>
                                    </li>
                                 </ul>
                                 <div class="tab-content mt-0">
                                    <div role="tabpanel" class="tab-pane  active " id="bc_property">
                                       <form action="{{ url('/') }}" method="GET" class="bgc-white bgct-767 pl30 pt10 pl0-767">
                                          <div class="form-row align-items-center justify-content-around">
                                             <div class="col-auto home_form_input bgc-white mb20-xsd ">
                                                <label class="sr-only">What</label>
                                                <div class="input-group style1">
                                                   <div class="input-group-prepend">
                                                      <div class="input-group-text pl0 pb0-767">What service do you need ?</div>
                                                   </div>
                                                   <div class="select-wrap style2-dropdown">
                                                      <input type="text"  style="display:none;" class="refineText formTextbox" style="width: 250px;">
                                                      <select name="ch_category" class=" form-control js-searchBox" >
                                                         @foreach ($bc_property_category as $pcategory)
                                                         <option value="{{$pcategory->id}}"> {{$pcategory->name}}</option>
                                                         @endforeach
                                                      </select>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-auto home_form_input2 mb20-xsd">
                                                <button type="submit" class="btn search-btn mb-2"><span class="flaticon-loupe"></span></button>
                                             </div>
                                          </div>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="home_mobile_slider home_custom_list dn db-767 owl-carousel owl-theme owl-hidden owl-loaded" style="">
                           <div class="owl-stage-outer">
                              <div class="owl-stage" style="transform: translate3d(-45px, 0px, 0px); transition: all 1.2s ease 0s; width: 150px;">
                                 <div class="owl-item cloned" style="width: 0px; margin-right: 30px;">
                                    <div class="item">
                                       <div class="icon_home1">
                                          <div class="icon"><span class="flaticon-shopping-bag"></span></div>
                                          <p>Shopping</p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="owl-item cloned" style="width: 0px; margin-right: 30px;">
                                    <div class="item">
                                       <div class="icon_home1">
                                          <div class="icon"><span class="flaticon-brake"></span></div>
                                          <p>Automotive</p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="owl-item" style="width: 0px; margin-right: 30px;">
                                    <div class="item">
                                       <div class="icon_home1">
                                          <div class="icon"><span class="flaticon-tent"></span></div>
                                          <p>Outdoor Activity</p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="owl-item active" style="width: 0px; margin-right: 30px;">
                                    <div class="item">
                                       <div class="icon_home1">
                                          <div class="icon"><span class="flaticon-cutlery"></span></div>
                                          <p>Restaurant</p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="owl-item active" style="width: 0px; margin-right: 30px;">
                                    <div class="item">
                                       <div class="icon_home1">
                                          <div class="icon"><span class="flaticon-desk-bell"></span></div>
                                          <p>Hotels</p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="owl-item" style="width: 0px; margin-right: 30px;">
                                    <div class="item">
                                       <div class="icon_home1">
                                          <div class="icon"><span class="flaticon-mirror"></span></div>
                                          <p>Beauty &amp; Spa</p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="owl-item" style="width: 0px; margin-right: 30px;">
                                    <div class="item">
                                       <div class="icon_home1">
                                          <div class="icon"><span class="flaticon-shopping-bag"></span></div>
                                          <p>Shopping</p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="owl-item" style="width: 0px; margin-right: 30px;">
                                    <div class="item">
                                       <div class="icon_home1">
                                          <div class="icon"><span class="flaticon-brake"></span></div>
                                          <p>Automotive</p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="owl-item cloned" style="width: 0px; margin-right: 30px;">
                                    <div class="item">
                                       <div class="icon_home1">
                                          <div class="icon"><span class="flaticon-tent"></span></div>
                                          <p>Outdoor Activity</p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="owl-item cloned" style="width: 0px; margin-right: 30px;">
                                    <div class="item">
                                       <div class="icon_home1">
                                          <div class="icon"><span class="flaticon-cutlery"></span></div>
                                          <p>Restaurant</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="owl-controls">
                              <div class="owl-nav">
                                 <div class="owl-prev" style="display: none;"><i class="fa fa-arrow-left"></i></div>
                                 <div class="owl-next" style="display: none;"><i class="fa fa-arrow-right"></i></div>
                              </div>
                              <div class="owl-dots" style="display: none;"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<style>
   .con-btn  {
   color: #26ab13 !important;
   background-color: #ffffff;
   border-color: #26ab13 !important;
   border: 1.5px solid;
   padding: 8px 25px;
   font-weight: 600;
   display:block;
   }
   .con-btn:hover  {
   color: #fff !important;
   background-color: #26ab13;
   border-color: #26ab13 !important;
   }
   }
</style>
<section class="our-listing pb30-991" style="background:#f4f4f4;">
   <div class="container" style="background:#fff;">
      <div class="row">
         <div class="col-lg-12">
            <div class="listing_sidebar dn db-lg">
               <div class="sidebar_content_details style3">
                  <div class="sidebar_listing_list style2 mobile_sytle_sidebar mb0">
                     <div class="sidebar_advanced_search_widget">
                        <h4 class="mb25">Advanced Search <a class="filter_closed_btn float-right" href="#"><small>Hide Filter</small> <span class="flaticon-close"></span></a></h4>
                        <form action="https://guido.bookingcore.org/property" class="form" method="get">
                           <ul class="sasw_list style2 mb0">
                              <li class="search_area">
                                 <div class="form-group">
                                    <input type="text" class="form-control" id="ServiceName" name="service_name" placeholder="What are you looking for" value="">
                                 </div>
                              </li>
                              <li>
                                 <div class="search_option_two">
                                    <div class="candidate_revew_select">
                                       <select name="category_id" class="selectpicker w100 show-tick">
                                          <option value="0">All Categories</option>
                                          <option value="1"> Outdoor Activity</option>
                                          <option value="2"> Restaurant</option>
                                          <option value="3"> Hotels</option>
                                          <option value="4"> Beauty &amp; Spa</option>
                                          <option value="5"> Shopping</option>
                                          <option value="6"> Automotive</option>
                                       </select>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="search_option_two">
                                    <div class="candidate_revew_select"></div>
                                 </div>
                              </li>
                              <li>
                                 <div class="small_dropdown2">
                                    <div id="prncgs2" class="btn dd_btn">
                                       <span>Price</span>
                                       <label for="exampleInputEmail2"><span class="fa fa-angle-down"></span></label>
                                    </div>
                                    <div class="dd_content2">
                                       <div class="pricing_acontent">
                                          <input class="mt30" data-addui='slider' name="amount" data-min='0' data-max='191.00' data-formatter='usd' data-fontsize='14' data-step='0.05' data-range='true' value='0,191.00'>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="ui_kit_checkbox sidebar_tag">
                                    <h4 class="title">Amenities</h4>
                                    <div class="wrapper">
                                       <ul>
                                          <li>
                                             <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="terms[]" value="1" id="customCheck71XO8">
                                                <label class="custom-control-label" for="customCheck71XO8">Accepts Credit Cards</label>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="terms[]" value="2" id="customCheck1mHUm">
                                                <label class="custom-control-label" for="customCheck1mHUm">Bike Parking</label>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="terms[]" value="3" id="customChecktmcd3">
                                                <label class="custom-control-label" for="customChecktmcd3">Parking Street</label>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="terms[]" value="4" id="customCheck9CmT4">
                                                <label class="custom-control-label" for="customCheck9CmT4">Wireless Internet</label>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="terms[]" value="5" id="customCheckuDAcK">
                                                <label class="custom-control-label" for="customCheckuDAcK">Wheelchair Accessible</label>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="terms[]" value="6" id="customChecky7tAH">
                                                <label class="custom-control-label" for="customChecky7tAH">Pets Friendly</label>
                                             </div>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="search_option_button text-center mt25">
                                    <button type="submit" class="btn btn-block btn-thm mb15">Search</button>
                                    <a class="tdu fz14 reset-filter" href="#">Reset Filter</a>
                                 </div>
                              </li>
                           </ul>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <section class="filters" style="padding:30px 0px;">
         <form action="{{ url('/') }}" method="GET">
            <div class="row">
               <div class="col-md-2">
                  <a href=""  data-toggle="modal" data-target="#filters" style="text-align: center;
                     display: block;
                     background: #fff;
                     border: 1px solid #26ab13;
                     padding: 6px;
                     border-radius: 2px;
                     font-weight: 700;
                     color: #26ab13;"><i class="fa fa-sliders"></i>   All Filters</a>
               </div>
               <div class="col-md-2">
                  <div class="search_option_two">
                     <div class="candidate_revew_select">
                        <select name="ch_location[]" multiple id="ch_location_id" class="w100 show-tick" >
                           @foreach ($bc_property_locations as $plocations)
                           @if (isset($_GET['ch_location']) && get_ch_location($_GET['ch_location'])->id == $plocations->id)
                           <option value="{{get_ch_location($_GET['ch_location'])->id}}" selected> {{get_ch_location($_GET['ch_location'])->name}}</option>
                           @else
                           <option value="{{$plocations->id}}"> {{$plocations->name}}</option>
                           @endif
                           @endforeach
                        </select>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="search_option_two">
                     <div class="candidate_revew_select">
                        <select name="ch_category[]" multiple class="w100 show-tick"  id="ch_category_id">
                           @foreach ($bc_property_category as $pcategory)
                           @if (isset($_GET['ch_category']) && get_ch_category($_GET['ch_category'])->id == $pcategory->id)
                           <option value="{{get_ch_category($_GET['ch_category'])->id}}" selected> {{get_ch_category($_GET['ch_category'])->name}}</option>
                           @else
                           <option value="{{$pcategory->id}}"> {{$pcategory->name}}</option>
                           @endif
                           @endforeach
                        </select>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="search_option_two">
                     <div class="candidate_revew_select">
                        <select name="ch_type[]" id="ch_type_id" class="w100 show-tick" multiple >
                           @foreach ($bc_property_type as $ptype)
                           @if (isset($_GET['ch_type']) && get_ch_type($_GET['ch_type'])->id == $ptype->id)
                           <option value="{{get_ch_type($_GET['ch_type'])->id}}" selected> {{get_ch_type($_GET['ch_type'])->name}}</option>
                           @else
                           <option value="{{$ptype->id}}"> {{$ptype->name}}</option>
                           @endif
                           @endforeach
                        </select>
                     </div>
                  </div>
               </div>
               <div class="col-md-2">
                  <div style="border: 1px solid #26ab13;color:#26ab13;border-radius:2px;" >
                     <label style="margin-top: 4px;
                        position: relative;
                        top: 3px;
                        left: 12px;">
                     @if (isset($_GET['verified']))
                     <input type="checkbox" value="Yes" id="verified" name="verified" checked /> Show Verified
                     @else
                     <input type="checkbox" value="Yes" id="verified" name="verified" /> Show Verified
                     @endif
                     </label>
                  </div>
               </div>
               {{-- 
               <div class="col-md-2">
                  <button type="submit" class="btn con-btn"> Search </button>
               </div>
               --}}
            </div>
         </form>
      </section>
      <div class="row">
         <div class="col-lg-4 col-xl-4" style="display:none;">
            <div class="sidebar_listing_grid1 dn-lg bgc-f4">
               <div class="sidebar_listing_list">
                  <div class="sidebar_advanced_search_widget">
                     <ul class="sasw_list mb0">
                        <form action="#" class="form" method="get">
                           <input type="hidden" name="_layout" value="v1">
                           <input type="hidden" name="orderby" value="old">
                           <input type="hidden" name="layout" value="list">
                           <ul class="sasw_list mb0">
                              <li class="search_area">
                                 <div class="form-group">
                                    <input type="text" class="form-control" id="ServiceName" name="service_name" placeholder="What are you looking for" value="">
                                 </div>
                              </li>
                              <li>
                                 <div class="search_option_two">
                                    <div class="candidate_revew_select">
                                       <select name="category_id" class="selectpicker w100 show-tick">
                                          <option value="0">All Categories</option>
                                          <option value="1"> Restaurant</option>
                                          <option value="2"> Cafe</option>
                                          <option value="3"> Gym</option>
                                          <option value="4"> Retail Shop</option>
                                       </select>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="search_option_two">
                                    <div class="candidate_revew_select">
                                       <select name="location_id" class="selectpicker w100 show-tick">
                                          <option value="0">Location</option>
                                          <option value="1"> Dubai</option>
                                          <option value="2"> Abu Dhabi</option>
                                          <option value="3"> Sharjah</option>
                                       </select>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="small_dropdown2">
                                    <div id="prncgs2" class="btn dd_btn">
                                       <span>Price</span>
                                       <label for="exampleInputEmail2"><span class="fa fa-angle-down"></span></label>
                                    </div>
                                    <div class="dd_content2">
                                       <div class="pricing_acontent">
                                          <input class="mt30" data-addui='slider' name="amount" data-min='10000' data-max='500000' data-formatter='' data-fontsize='14' data-step='0.05' data-range='true' value='10000,1910000'>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="ui_kit_checkbox sidebar_tag">
                                    <h4 class="title">Contractor Speaks</h4>
                                    <div class="wrapper">
                                       <ul>
                                          <li>
                                             <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="terms[]" value="1" id="customCheck98rgh">
                                                <label class="custom-control-label" for="customCheck98rgh">English</label>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="terms[]" value="2" id="customCheckcxnj0">
                                                <label class="custom-control-label" for="customCheckcxnj0">Arabic</label>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="terms[]" value="3" id="customCheckTi31z">
                                                <label class="custom-control-label" for="customCheckTi31z">Hindi</label>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="terms[]" value="4" id="customCheckvnCjx">
                                                <label class="custom-control-label" for="customCheckvnCjx">French</label>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="terms[]" value="6" id="customChecky6sgg">
                                                <label class="custom-control-label" for="customChecky6sgg">Pets Friendly</label>
                                             </div>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="search_option_button text-center mt25">
                                    <button type="submit" class="btn btn-block btn-thm mb15">Search</button>
                                    <a class="tdu fz14 reset-filter" href="#">Reset Filter</a>
                                 </div>
                              </li>
                           </ul>
                        </form>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-12 col-lg-12">
            <div class="row">
               <div class="listing_filter_row dif db-767">
                  <div class="col-sm-12 col-md-8 col-lg-8 col-xl-7" style="display:none;">
                     <div class="listing_list_style tac-767">
                        <form class="bc_form_search" method="GET">
                           <input type="hidden" name="_layout" value="v1">
                           <ul class="mb0">
                              <li class="list-inline-item dropdown text-left">
                                 <span class="stts">Sort by: </span>
                                 <select onchange="this.form.submit()" name="orderby" class="selectpicker show-tick">
                                    <option value="new">Default</option>
                                    <option value="old" selected>High Rated </option>
                                    <option value="name_high">Verified </option>
                                 </select>
                                 <input type="hidden" name="layout" value="list">
                              </li>
                           </ul>
                        </form>
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                     <div class="left_area tac-xsd mb30-767">
                        @if (isset($_GET['ch_location']))
                        <a style="background: #027562;
                           padding: 7px 14px;
                           border-radius: 20px;
                           padding-right: 14px;
                           color: #fff;
                           cursor: pointer;
                           font-size: 18px;"> {{get_ch_location($_GET['ch_location'])->name}}   &nbsp;&nbsp;<i class="fa fa-times-circle" onclick="onItemSelected('ch_location')"></i></a>
                        @endif
                        @if (isset($_GET['ch_category']))
                        <a style="background: #027562;
                           padding: 7px 14px;
                           border-radius: 20px;
                           padding-right: 14px;
                           color: #fff;
                           cursor: pointer;
                           font-size: 18px;"> {{get_ch_category($_GET['ch_category'])->name}}   &nbsp;&nbsp;<i class="fa fa-times-circle" onclick="onItemSelected('ch_category')"></i></a>
                        @endif
                        @if (isset($_GET['ch_type']))
                        <a style="background: #027562;
                           padding: 7px 14px;
                           border-radius: 20px;
                           padding-right: 14px;
                           color: #fff;
                           cursor: pointer;
                           font-size: 18px;"> {{get_ch_type($_GET['ch_type'])->name}}   &nbsp;&nbsp;<i class="fa fa-times-circle" onclick="onItemSelected('ch_type')"></i></a>
                        @endif
                        <p class="mb0" style="float: right;"><span class="heading-color"> <b>{{$res_from}}</b> - <b>{{$res_to}}</b> of <b>{{$total_page}}</b> professionals</span></p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="list-item">
               <div class="row">
                  <div class="col-lg-12">
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
                  </div>
                  @php $avatar = ''; @endphp
                  {{-- profile data --}}
                  @if (count($bc_contractor) > 0)
                  @foreach ($bc_contractor as $contractor)
                  <?php
                     $photo = contractor_photo(0);
                     
                     $contractor_photo = explode(',', $contractor->banner_images);
					
						foreach ($contractor_photo as $imgkey => $img_value) {
                         
						if (!empty($img_value)) {
							$photo = contractor_photo($img_value);
						}
                     }
                     
                    $avatar = contractor_profile_icon_photo($contractor->image_id);
					
					if (!$contractor->image_id) {			
						$avatar = "https://cpworldgroup.com/wp-content/uploads/2021/01/placeholder.png";		
					}
                     
					$reviewData = Modules\Review\Models\Review::getTotalViewAndRateAvg($contractor->id, 'property');
                    
					?>
                  <div class="item-listting col-lg-12">
                     <div class="feat_property list">
                        <div class="thumb_t">
                           <a class="thumb-image_t" target="_blank" href="{{ url('contractor/'.$contractor->slug) }}">
                           <img class="img-whpd" style="height: 207px;
                              border-radius: 0px;
                              width: 350px;
                              object-fit: cover;" src="{{$photo}}" alt="Adventure High Ropes">
                           </a>
                        </div>
                        <div class="details" style="padding: 0px 20px;">
                           <div class="row">
                              <a href="{{ url('contractor/'.$contractor->slug) }}">
                                 <div class="col-md-8">
                                    <div class="row">
                                       <div class="col-2">
                                          <img src="{{$avatar}}" style="height: 40px;
                                             width: 40px;
                                             border-radius: 50%;"/>
                                       </div>
                                       <div class="col-10" style="position: relative;
                                          left: -33px;" >
                                          <h4>{{$contractor->title}}</h4>
                                          <ul class="listing_reviews">
                                             <li class="list-inline-item"><b style="color:#ffbe28;">{{ $reviewData['sbc_total'] }}</b></li>
                                             <!--                @for( $i = 0 ; $i <= 5 ; $i++ )-->
                                             <!--	@if($i <= $reviewData['sbc_total'])-->
                                             <!--	@if(is_float($reviewData['sbc_total']) && (round($reviewData['sbc_total']) == $i))-->
                                             <!--	 <li class="list-inline-item"><i style="color:#ffbe28;" class="fa fa-star-half-o"></i></li>-->
                                             <!--	@else-->
                                             <!--	<li class="list-inline-item"><i style="color:#ffbe28;" class="fa fa-star"></i></li>-->
                                             <!--	@endif-->
                                             <!--	@else-->
                                             <!--	 <li class="list-inline-item"><i style="color:#ffbe28;" class="fa fa-star-o"></i></li>-->
                                             <!--	@endif-->
                                             <!--@endfor-->
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
                                             <li class="list-inline-item ">
                                                <span style="color:#000;">
                                                @if($reviewData['total_review'] > 1)
                                                {{ __(":number Reviews",["number"=>$reviewData['total_review'] ]) }}
                                                @else
                                                {{ __(":number Review",["number"=>$reviewData['total_review'] ]) }}
                                                @endif
                                                </span>
                                             </li>
                                             @if($contractor->verified == 'Yes')
                                             <li class="list-inline-item">|</li>
                                             <li class="list-inline-item"><img src="https://contrafinder.com/public/images/approved.png" style="height: 18px;position: relative;top: -2px;" /></li>
                                             <li class="list-inline-item"><span style="color: #0f9138;position: relative;left: -4px;font-weight: bold;"> Verified</span></li>
                                             @endif
                                             <li class="list-inline-item">|</li>
                                             <li class="list-inline-item" style="color: #ff5722;font-weight:600;">{{$contractor->hires}}X Hires</li>
                                          </ul>
                                       </div>
                                    </div>
                                    </span>
                                    <p style="margin-top: 15px;">
                                       <?= substr($contractor->content, 0, 250)?>
                                    </p>
                              <a href="{{ url('contractor/'.$contractor->slug) }}" style="font-size:14px;color:#027562;float:right;font-weight:bold;">Read More
                              <span style="font-size: 22px;
                                 position: relative;
                                 top: 2px;
                                 left: 3px;" class="fa fa-angle-right"></span></a>
                              </div>
                              </a>
                              <div class="col-md-4" style="position: relative;
                                 left: 19px;ext-align: right;">
                                 <a href="#" class="btn con-btn" 	@if(Auth::id() && check_user_type() != 'customer') style="visibility:hidden;"   @endif  data-toggle="modal" data-target="#sendmessage_model_{{$contractor->id}}"><span class="fa fa-envelope "></span> Send Message</a>             <br>
                                 <div class="row" style="font-size: 14px;">
                                    <div class="col-2"><span class="fa fa-map-marker"></span></div>
                                    <div class="col-10">
                                       <a href="#" target="_blank"><?php if(!empty($contractor->address)){echo $contractor->address.' '.$contractor->address_2;}else{echo "Not Found!";} ?>@if(!is_null($contractor->name)) ,{{$contractor->name}} @endif</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="fp_footer">
                           </div>
                        </div>
                     </div>
                  </div>
                  {{-- message model --}}
                  <div id="sendmessage_model_{{$contractor->id}}" class="modal fade" role="dialog">
                     <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                           <div class="modal-header">
                              <h3 class="title mt15" style="padding-left: 30px;">Contact this {{$contractor->title}}</h3>
                           </div>
                           <div class="modal-body">
                              <div class="" style="padding:30px;padding-top:10px;">
                                 <form action="{{ route('send_chmsg') }}" method="POST">
                                    @csrf
                                    <ul class="business_contact mb0">
                                       <li class="search_area">
                                          <div class="form-group">
                                             <input type="hidden" name="c_slug"   value="{{$contractor->slug}}">
                                             <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="{{ __("Name") }}" value="@if(Auth::id()) {{Auth::user()->name}} @endif">
                                          </div>
                                       </li>
                                       <li class="search_area">
                                          <div class="form-group">
                                             <input type="email" name="email" class="form-control" id="exampleInputEmail" placeholder="{{ __("Email") }}" value="@if(Auth::id()) {{Auth::user()->email}} @endif">
                                          </div>
                                       </li>
                                       <li class="search_area">
                                          <div class="form-group">
                                             <input type="tel" name="phone" class="form-control" id="exampleInputName2" placeholder="{{ __("Phone") }}" value="@if(Auth::id()) {{Auth::user()->phone}} @endif">
                                          </div>
                                       </li>
                                       <li class="search_area">
                                          <div class="form-group">
                                             <textarea id="form_message" name="message" class="form-control" rows="5" required="required" placeholder="{{ __("Message") }}"></textarea>
                                          </div>
                                       </li>
                                       <li>
                                          <input type="hidden" name="to_id" value="<?=$contractor->create_user?>">
                                          <input type="hidden" name="from_id" value="{{Auth::id()}}">
                                       </li>
                                       <li>
                                          <p style="font-size:13px;">
                                             <!--By clicking or tapping "Send," I agree to the <a href="" style="color: #26ab13;">Contrafinder Terms of Use</a> & <a href="" style="color: #26ab13;">Contrafinder Privacy Policy</a> well as to receive text messages and calls from Contrafinder and professionals about my projects under these terms.-->
                                             By clicking or tapping "Send," I agree to the <a href="" style="color: #26ab13;">Contrafinder Terms of Use</a> and the <a href="" style="color: #26ab13;">Contrafinder Privacy Policy</a> as well as to receive text messages and calls from Contrafinder and professionals about my projects under these terms.
                                          </p>
                                       </li>
                                       <li>
                                          <button type="submit" class="btn btn-block btn-thm h55">Send Message
                                          </button>
                                       </li>
                                    </ul>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  @endforeach
                  {!! $bc_contractor->links() !!}
                  @else
                  <div class="m-2">
                     <h3>Sorry <i class="fa fa-frown-o"></i></h3>
                     <p>we dont have any relevant contractors as per your search </p>
                  </div>
                  @endif
                  {{-- end profile --}}
               </div>
            </div>
            <div class="col-lg-12 mt20">
               <div class="mbp_pagination"></div>
            </div>
         </div>
      </div>
   </div>
   <!-- Modal -->
   <div id="myModalfirst" class="modal fade" role="dialog">
      <div class="modal-dialog">
         <!-- Modal content-->
         <div class="modal-content">
            <div class="modal-header">
               <h3 class="title mt15" style="padding-left: 30px;">Contact this Galaxy Interior & Sharp</h3>
            </div>
            <div class="modal-body">
               <div class="" style="padding:30px;padding-top:10px;">
                  <form action="{{ route('vendor.contact') }}" method="POST" class="agent_contact_form">
                     @csrf
                     <ul class="business_contact mb0">
                        <li>
                           To:<br>
                           <div class="row">
                              <div class="col-3">
                                 <img src="{{$avatar}}" style="height: 40px;
                                    width: 40px;
                                    border-radius: 50%;" />
                              </div>
                              <div class="col-9" style="position: relative;
                                 left: -60px;" >
                                 <h4>Galaxy Interior & Sharp</h4>
                                 <ul class="listing_reviews" style="bottom: -7px;">
                                    <li class="list-inline-item"><b style="color:#ffbe28;">4.5</b></li>
                                    <li class="list-inline-item"><i style="color:#ffbe28;" class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i style="color:#ffbe28;" class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i style="color:#ffbe28;" class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i style="color:#ffbe28;" class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i style="color:#ffbe28;" class="fa fa-star"></i></li>
                                    <li class="list-inline-item ">
                                       <span style="color:#000;">27 Review</span>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </li>
                        <li class="search_area" style="margin-top:20px;">
                           <div class="form-group">
                              <textarea id="form_message" name="message" class="form-control" rows="5" required="required" placeholder="{{ __("Message") }}"></textarea>
                           </div>
                        </li>
                        <li>
                           <input type="hidden" name="vendor_id" value="">
                           <input type="hidden" name="object_id" value="">
                           <input type="hidden" name="object_model" value="property">
                        </li>
                        <li>
                           <p style="font-size:13px;"> I confirm that this message complies with the <a href="" style="color: #26ab13;">Contrafinder Review Policy,</a> including that I do not
                              work for, am not related to and am not a competitor of this professional.
                           </p>
                        </li>
                        <li>
                           <div class="search_option_button">
                              <button data-toggle="modal" data-target="#myModalsecond" type="submit" class="btn btn-block btn-thm h55"><span class="text">{{ __("Send Message") }}</span><i class="fa fa-spin fa-spinner"></i></button>
                           </div>
                        </li>
                     </ul>
                     <div class="form-mess"></div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--modal for filters starts fromhere -->
   <!-- Modal -->
   <div id="filters" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg">
         <!-- Modal content-->
         <form action="{{ url('/') }}" method="GET">
            <div class="modal-content">
               <div class="modal-header">
                  <h3 class="modal-title"><i class="fa fa-sliders"></i>   Filters <small style="color: #80808082;
                     font-size: 14px;">find your choice here</small></h3>
               </div>
               <div class="modal-body" style="padding: 0px;">
                  <div class="row">
                     <div class="col-md-8" style="padding: 40px;">
                        <div class="row">
                           <div class="col-md-6" >
                              <label>Search Location</label>
                              <div class="search_option_two">
                                 <div class="candidate_revew_select">
								   <select name="ch_location[]" multiple id="ch_location_id_pop" class="w100 show-tick">
									  @foreach ($bc_property_locations as $plocations)
									  @if (isset($_GET['ch_location']) && get_ch_location($_GET['ch_location'])->id == $plocations->id)
									  <option value="{{get_ch_location($_GET['ch_location'])->id}}" selected> {{get_ch_location($_GET['ch_location'])->name}}</option>
									  @else
									  <option value="{{$plocations->id}}"> {{$plocations->name}}</option>
									  @endif
									  @endforeach
								   </select>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <label style="">Verified Contractors</label>
                              <div style="border: 1px solid #26ab13;color:#26ab13;border-radius:2px;" >
                                 <label style="margin-top: 4px;position: relative;top: 3px;left: 12px;">@if (isset($_GET['verified']))
                                 <input type="checkbox" value="Yes" id="verified" name="verified" checked /> Show Verified
                                 @else
                                 <input type="checkbox" value="Yes" id="verified" name="verified" /> Show Verified
                                 @endif</label>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <br><br>
                           <div class="col-md-12">
                              <label style="margin-top: 20px;">Choose Category</label>
                              <div class="search_option_two">
                                 <div class="candidate_revew_select">
									<select name="ch_category[]" multiple class="w100 show-tick" tabindex="-98" id="ch_category_id_pop">
										@foreach ($bc_property_category as $pcategory)
											@if (isset($_GET['ch_category']) && get_ch_category($_GET['ch_category'])->id == $pcategory->id)
												<option value="{{get_ch_category($_GET['ch_category'])->id}}" selected> {{get_ch_category($_GET['ch_category'])->name}}</option>
											@else
												<option value="{{$pcategory->id}}"> {{$pcategory->name}}</option>
											@endif
										@endforeach
									</select>
                                 </div>
                              </div>
                           </div>
                           <br><br>
                           <div class="col-md-12">
                              <label style="margin-top: 20px;">Type</label>
                              <div class="search_option_two">
                                 <div class="candidate_revew_select">
                                       <select name="ch_type[]" multiple id="ch_type_id_pop" class="w100 show-tick" tabindex="-98">
                                          @foreach ($bc_property_type as $ptype)
                                          @if (isset($_GET['ch_type']) && get_ch_type($_GET['ch_type'])->id == $ptype->id)
                                          <option value="{{get_ch_type($_GET['ch_type'])->id}}" selected> {{get_ch_type($_GET['ch_type'])->name}}</option>
                                          @else
                                          <option value="{{$ptype->id}}"> {{$ptype->name}}</option>
                                          @endif
                                          @endforeach
                                       </select>
                                 </div>
                              </div>
                           </div>
                           <br><br>
                           <div class="col-md-12">
                              <label style="margin-top: 20px;">Languages </label>
                              <div class="search_option_two">
                                 <div class="candidate_revew_select">
                                       <select name="ch_language[]" multiple class="w100 show-tick" tabindex="-98" id="ch_language_id_pop">
                                          @foreach ($bc_property_language as $language)
                                          @if (isset($_GET['ch_language']) && get_ch_language($_GET['ch_language'])->id == $language->id)
                                          <option value="{{get_ch_language($_GET['ch_language'])->id}}" selected> {{get_ch_language($_GET['ch_language'])->name}}</option>
                                          @else
                                          <option value="{{$language->id}}"> {{$language->name}}</option>
                                          @endif
                                          @endforeach
                                       </select>
                                 </div>
                              </div>
                           </div>
                           <br><br>
                           <div class="col-md-6">
                              <label style="margin-top: 20px;">Sort By</label>
                              <div class="search_option_two">
                                 <div class="candidate_revew_select">
                                    <div class="dropdown bootstrap-select w100 show-tick show">
                                       {{-- 'most-viewed' => 'Most Reviewed' --}}
                                       <select name="ch_sort" class="selectpicker w100 show-tick" tabindex="-98" id="ch_category_id_">
                                          <option value="0" disabled selected >Sort By</option>
                                          <?php
                                             $sort_arr = [
                                                 'Highest' => 'Star Rating (Highest First)',
                                                 'Lowest' => 'Star Rating (Lowest First)'
                                                 ]
                                              ?>
                                          @foreach ($sort_arr as $sort =>$val)
                                          @if (isset($_GET['ch_sort']) && $_GET['ch_sort'] == $sort)
                                          <option value="{{$_GET['ch_sort']}}" selected> {{$val}}</option>
                                          @else
                                          <option value="{{$sort}}"> {{$val}}</option>
                                          @endif
                                          @endforeach
                                       </select>
                                       <button style="display:none;" type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="button" title="All Categories" aria-expanded="true">
                                          <div class="filter-option">
                                             <div class="filter-option-inner">
                                                <div class="filter-option-inner-inner">All Categories</div>
                                             </div>
                                          </div>
                                       </button>
                                       <div class="dropdown-menu show" role="combobox" x-placement="bottom-start" style="max-height: 271.039px; overflow: hidden; min-height: 122px; position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 55px, 0px);">
                                          <div class="inner show" role="listbox" aria-expanded="true" tabindex="-1" style="max-height: 253.039px; overflow-y: auto; min-height: 104px;">
                                             <ul class="dropdown-menu inner show">
                                                <li class="selected active"><a role="option" class="dropdown-item selected active" aria-disabled="false" tabindex="0" aria-selected="true"><span class=" bs-ok-default check-mark"></span><span class="text">All Categories</span></a></li>
                                                <li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Outdoor Activity</span></a></li>
                                                <li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Restaurant</span></a></li>
                                                <li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Hotels</span></a></li>
                                                <li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Beauty &amp; Spa</span></a></li>
                                                <li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Shopping</span></a></li>
                                                <li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Automotive</span></a></li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <br><br>
                           <div class="col-md-6">
                              <label style="margin-top: 20px;">Budget</label>
                              <div class="search_option_two">
                                 <div class="candidate_revew_select">
                                    <div class="dropdown bootstrap-select w100 show-tick show">
                                       <select name="ch_budget" class="selectpicker w100 show-tick" tabindex="-98" id="ch_category_id_">
                                          <option value="0" disabled selected >Budget</option>
                                          @foreach ($bc_property_budget as $budget)
                                          @if (isset($_GET['ch_budget']) && get_ch_budget($_GET['ch_budget'])->id == $budget->id)
                                          <option value="{{get_ch_budget($_GET['ch_budget'])->id}}" selected> {{get_ch_budget($_GET['ch_budget'])->name}}</option>
                                          @else
                                          <option value="{{$budget->id}}"> {{$budget->name}}</option>
                                          @endif
                                          @endforeach
                                       </select>
                                       <button style="display:none;" type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="button" title="All Categories" aria-expanded="true">
                                          <div class="filter-option">
                                             <div class="filter-option-inner">
                                                <div class="filter-option-inner-inner">All Categories</div>
                                             </div>
                                          </div>
                                       </button>
                                       <div class="dropdown-menu show" role="combobox" x-placement="bottom-start" style="max-height: 271.039px; overflow: hidden; min-height: 122px; position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 55px, 0px);">
                                          <div class="inner show" role="listbox" aria-expanded="true" tabindex="-1" style="max-height: 253.039px; overflow-y: auto; min-height: 104px;">
                                             <ul class="dropdown-menu inner show">
                                                <li class="selected active"><a role="option" class="dropdown-item selected active" aria-disabled="false" tabindex="0" aria-selected="true"><span class=" bs-ok-default check-mark"></span><span class="text">All Categories</span></a></li>
                                                <li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Outdoor Activity</span></a></li>
                                                <li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Restaurant</span></a></li>
                                                <li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Hotels</span></a></li>
                                                <li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Beauty &amp; Spa</span></a></li>
                                                <li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Shopping</span></a></li>
                                                <li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Automotive</span></a></li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div  style="background-image: url('https://cdn.pixabay.com/photo/2019/12/15/18/08/cats-cafe-4697753_1280.jpg');
                           height: 100%;
                           background-size: cover;"></div>
                     </div>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-default" style="border: 1px solid #80808063;
                     padding: 10px 30px;" data-dismiss="modal">Done</button>
                  <button type="submit" class="btn btn-success" style="border: 1px solid #80808063; padding: 10px 30px;">Search</button>
               </div>
            </div>
         </form>
      </div>
   </div>
   <!--modal filters ends here -->
</section>
<div class="bc_detail_location" style="display:none;">
   <section class="our-listing pb30-991">
      <div class="container">
         <div class="row">
            {{-- 
            <div class="col-lg-12">
               @include('Property::frontend.layouts.search.filter-search-mobile')
            </div>
            --}}
         </div>
         <div class="row">
            <div class="col-xl-12">
               <div class="sidebar_listing_grid1 dn-lg bgc-f4">
                  <div class="sidebar_listing_list">
                     <div class="sidebar_advanced_search_widget">
                        {{-- 
                        <ul class="sasw_list mb0">
                           @include('Property::frontend.layouts.form-search.sidebar')
                        </ul>
                        --}}
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-12">
               <div class="row">
                  <div class="listing_filter_row dif db-767">
                     <div class="col-sm-12 col-md-4 col-lg-4 col-xl-5">
                        {{-- 
                        <div class="left_area tac-xsd mb30-767">
                           @include('Property::frontend.layouts.search.loop.result-count')
                        </div>
                        --}}
                     </div>
                     <div class="col-sm-12 col-md-8 col-lg-8 col-xl-7">
                        <div class="listing_list_style tac-767">
                           @include('Property::frontend.layouts.search.loop.orderby')
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>
@endsection
@section('footer')
{!! App\Helpers\MapEngine::scripts() !!}
<script type="text/javascript" src="{{ asset('libs/ion_rangeslider/js/ion.rangeSlider.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('libs/sticky/jquery.sticky.js') }}"></script>
{{-- check_user_type() --}}
<script type="text/javascript">
   // $('.sendmessage').click(function(){
   //     var check_user = '<?php if (Auth::id()) {echo 1;}else{echo 0;} ?>';
   //     if(check_user == 0){
   //         $('#myModalsecond').modal('hide');
   //         window.location.href = '<?= url('login'); ?>'; 
   //     }else{
   //         $('#myModalsecond').modal('show');
   //     }
   // });
   
   function onItemSelected(parameter){
       var url = window.location.href;
   
           //prefer to use l.search if you have a location/link object
           var urlparts = url.split('?');   
           if (urlparts.length >= 2) {
   
               var prefix = encodeURIComponent(parameter) + '=';
               var pars = urlparts[1].split(/[&;]/g);
   
               //reverse iteration as may be destructive
               for (var i = pars.length; i-- > 0;) {    
                   //idiom for string.startsWith
                   if (pars[i].lastIndexOf(prefix, 0) !== -1) {  
                       pars.splice(i, 1);
                   }
               }
   
               var new_url = urlparts[0] + (pars.length > 0 ? '?' + pars.join('&') : '');
   
               window.location.href = new_url;
           }
   
           window.location.href = new_url;
   }
   
   
   
   /*$("#ch_location_id").change(function() {
        this.form.submit();
   });
   
   $("#ch_category_id").change(function() {
        this.form.submit();
   });
   
   $("#ch_type_id").change(function() {
        this.form.submit();
   });
   
   $("#verified").change(function() {
        this.form.submit();
   });*/
   
</script>

<style>
	.select2-container--default .select2-selection--single{
		background-color: #fff;
		border-radius: 2px;
		color: #26ab15;
		height: 40px;
		font-weight: 700;
		line-height: 25px;
		padding-left: 20px;
		padding-right: 15px;
		border: 1px solid #9e9e9eb3;
	}
</style>

<script>
		
	$( document ).ready(function() {
		
		$("#ch_location_id, #ch_location_id_pop").selectpicker({
			noneSelectedText: "Location"
		});
		
		$("#ch_category_id, #ch_category_id_pop").selectpicker({
			noneSelectedText: "Category"
		});
		
		$("#ch_type_id, #ch_type_id_pop").selectpicker({
			noneSelectedText: "Type"
		});
		
		$("#ch_language_id_pop").selectpicker({
			noneSelectedText: "Language"
		});
		
		var page = 1;
		
		$(window).scroll(function() {
			if($(window).scrollTop() + $(window).height() >= $(document).height()) {
				page++;
				
				$(".loader").html("<i class='fa fa-spinner fa-spin fa-2x'></i><div>Loading...</div>");
				
				
				
				$.ajax({
					url:'?page=' + page,
					cache: false,
					success: function(data){
						$("#post-data").append(data.response);
					},
					complete: function(){
						$(".loader").html("");
					}
				});
			}
		});
	});
</script>
@endsection