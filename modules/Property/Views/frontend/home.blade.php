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

<section class="home-one home1-overlay bg-img1 img-mbl" style="background-image:url(https://contrafinder.com/public/designimages/banner-contrafinder.png)">
   <div class="container">
      <div class="row posr">
         <div class="col-lg-12">
            <div class="home_content home1" style="padding: 140px 0 240px;">
               <div class="home-text text-center home1 hee">
                 
                  <h2 class="fz40 mx-lg-5 m-text hero-te">Find A Qualified Interior Fitout Contractor</h2>
                  <p class="fz18 color-white ds-mb" style="font-size: 22px;
    font-style: italic;" >Contact Us, We Will Help You Find One</p>
               </div>
               <style>
                  .m-s .ht_left_widget 
                  {
                      text-align: center !important;
                      float: none !important;
                  }
                   .m-s .custom_search_with_menu_trigger 
                   {
                       width: 250px;
                        background: #fff !important;
                        border: 2px solid !important;
                        padding: 26px !important;
    
                   }
                 

                   @media screen and (min-width: 400px) {
                                .m-s .custom_search_with_menu_trigger {
                                    width: 380px !important;
                                    background: #fff !important;
                                    border: 2px solid !important;
                                    padding: 26px !important;
                                }
                            }
                  
                    @media screen and (min-width: 800px) {
                                .m-s .custom_search_with_menu_trigger {
                                    width: 600px !important;
                                    background: #fff !important;
                                    border: 2px solid !important;
                                    padding: 26px !important;
                                }
                            }
                   
               </style>
              
               <div class="row">
                   <div class="col-md-12 m-s">
                       	@if(!empty(setting_item('enable_search_header')))
				@includeIf("Layout::parts.header-search")
			@endif
                   </div>
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
    .form-group input,
	  .form-group textarea{			
		margin-bottom:0px !important;		
	   }			
	  .has-error .help-block .list-unstyled li{			
		color: red;		
	   }				
	   .form-group.has-error input,		
	   .form-group.has-error textarea{			
			border-color: red;		
	   }	 
</style>
<section class="our-listing pb30-991 zerp"  style="background:#fff;padding-top: 22px;">
   <div class="container f-con" style="background:#fff;">
      <section class="filters" style="padding:30px 0px;">
         <form action="{{ url('/') }}" method="GET">
            <div class="row">
               <div class="col-md-2 f-box">
                  <a href=""  data-toggle="modal" data-target="#filters" style="text-align: center;
                     display: block;
                     background: #fff;
                     border: 1px solid #26ab13;
                     padding: 6px;
                     border-radius: 2px;
                     font-weight: 700;
                     color: #26ab13;"><i class="fa fa-sliders"></i>   All Filters</a>
               </div>
               <div class="col-md-2 f-box">
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
               <div class="col-md-3 f-box">
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
               <div class="col-md-3 f-box">
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
               <div class="col-md-2 f-box">
                  <div style="border: 1px solid #26ab13;color:#26ab13;border-radius:2px;" >
                     <label style="margin-top: 4px;
                        position: relative;
                        top: 3px;
                        left: 12px;">
                     @if (isset($_GET['verified']))
                     <input type="checkbox" value="Yes" id="is_verified" name="verified" checked /> Show Verified
                     @else
                     <input type="checkbox" value="Yes" id="is_verified" name="verified" /> Show Verified
                     @endif
                     </label>
                  </div>
               </div>
               {{-- 
               <div class="col-md-2 f-box">
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
                     <div class="filters-chips-view left_area tac-xsd mb30-767">
                        <ul class="chips">
                            
						</ul>
                        <p class="mb0" style="float: right;">
							<span class="heading-color">
								<!--<b class="no_from_rec">0</b> - <b class="no_to_rec">0</b> of <b class="no_total_rec">0</b> professionals-->
							 <b class="no_total_rec">0</b> Contractors 
							</span>
						</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="list-item">
				<!------------ bc_contractor ---------->
				<div class="row" id="contractor-list">
					
				</div>
				
				<div class="loader"></div>
				
			</div>
      </div>
   </div>
   
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
                                 <input type="checkbox" value="Yes" id="is_verified_pop" name="verified" checked /> Show Verified
                                 @else
                                 <input type="checkbox" value="Yes" id="is_verified_pop" name="verified" /> Show Verified
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
                                       {{-- 'most-viewed' => 'Most Reviewed' --}}
                                       <select name="ch_sort" class="selectpicker w100 show-tick" tabindex="-98" id="ch_sort_by_pop">
                                          <option value="" selected >Sort By</option>
                                          <?php
                                             $sort_arr = [
                                                 'srh' => 'Star Rating (Highest First)',
                                                 'srl' => 'Star Rating (Lowest First)'
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
                                 </div>
                              </div>
                           </div>
                           <br><br>
                           <div class="col-md-6">
                              <label style="margin-top: 20px;">Budget</label>
                              <div class="search_option_two">
                                 <div class="candidate_revew_select">
                                       <select name="ch_budget[]" multiple class="w100 show-tick" tabindex="-98" id="ch_budget_pop">
                                          @foreach ($bc_property_budget as $budget)
                                          @if (isset($_GET['ch_budget']) && get_ch_budget($_GET['ch_budget'])->id == $budget->id)
                                          <option value="{{get_ch_budget($_GET['ch_budget'])->id}}" selected> {{get_ch_budget($_GET['ch_budget'])->name}}</option>
                                          @else
                                          <option value="{{$budget->id}}"> {{$budget->name}}</option>
                                          @endif
                                          @endforeach
                                       </select>
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
                  <button type="button" class="btn btn-default btn-adv-clear" style="border: 1px solid #80808063;padding: 10px 30px;" data-dismiss="modal">Clear Filters</button>
                  <button type="button" class="btn btn-success btn-adv-search" style="border: 1px solid #80808063; padding: 10px 30px;">Search</button>
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



<div id="sendmessage_model" class="modal fade" role="dialog">
	 <div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
		   <div class="modal-header">
			  <h3 class="title mt15" style="padding-left: 30px;">Contact this TITLE HERE</h3> 
			 <button type="button" class="btn btn-default" data-dismiss="modal" style="margin-top: 10px;font-size: 20px;"><span aria-hidden="true">&times;</span></button>
		   </div>
		   <div class="modal-body">
			  <div class="" style="padding:30px;padding-top:10px;">
				 <form method="POST" data-ajax="user/profile/send_chmsg" data-target-button=".btn-send-msg" data-allow-success="true">
					@csrf
					<ul class="business_contact mb0">
					   <li class="search_area">
						  <div class="form-group">
							 <input type="hidden" name="c_slug" value="">
							 <input type="text" name="name" class="form-control" id="exampleInputName1" required="required" placeholder="{{ __("Name") }}" value="@if(Auth::id()) {{Auth::user()->name}} @endif"  >
							 <div class="help-block with-errors"></div>
						  </div>
					   </li>
					   <li class="search_area">
						  <div class="form-group">
							 <input type="email" name="email" class="form-control" id="exampleInputEmail" required="required" placeholder="{{ __("Email") }}" value="@if(Auth::id()) {{Auth::user()->email}} @endif">
							 <div class="help-block with-errors"></div>
						  </div>
					   </li>
					   <li class="search_area">
						  <div class="form-group">
							 <input type="tel" name="phone" class="form-control" id="exampleInputName2" required="required" placeholder="{{ __("Phone") }}" value="@if(Auth::id()) {{Auth::user()->phone}} @endif">
							 <div class="help-block with-errors"></div>
						  </div>
					   </li>
					   <li class="search_area">
						  <div class="form-group">
							 <textarea id="form_message" name="message" class="form-control" rows="5" required="required" placeholder="{{ __("Message") }}"></textarea>
							 <div class="help-block with-errors"></div>
						  </div>
					   </li>
					   <li>
						  <input type="hidden" name="to_id" value="">
						  <input type="hidden" name="from_id" value="{{Auth::id()}}">
					   </li>
					   <li>
						  <p style="font-size:13px;">
							 <!--By clicking or tapping "Send," I agree to the <a href="" style="color: #26ab13;">Contrafinder Terms of Use</a> & <a href="" style="color: #26ab13;">Contrafinder Privacy Policy</a> well as to receive text messages and calls from Contrafinder and professionals about my projects under these terms.-->
							 By clicking or tapping "Send," I agree to the <a href="https://contrafinder.com/page/terms-of-use" style="color: #26ab13;">Contrafinder Terms of Use</a> and the <a href="https://contrafinder.com/page/privacy-policy" style="color: #26ab13;">Contrafinder Privacy Policy</a> as well as to receive text messages and calls from Contrafinder and professionals about my projects under these terms.
						  </p>
					   </li>
					   <li>
							<div class="messages"></div>
							<button type="submit" class="btn btn-block btn-thm h55 btn-send-msg">Send Message</button>
					   </li>
					</ul>
				 </form>
			  </div>
		   </div>
		</div>
	 </div>
	</div>
</div>





@endsection
@section('footer')
{!! App\Helpers\MapEngine::scripts() !!}
<script type="text/javascript" src="{{ asset('libs/ion_rangeslider/js/ion.rangeSlider.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('libs/sticky/jquery.sticky.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/form-plugin.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/validator.min.js') }}"></script>


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
	.loader{
		text-align:center;
	}
	.loader div{
		display:inline-block;
		position: relative;
		top: -7px;
		left: 10px;
	}
	
	.filters-chips-view{
	}

	.filters-chips-view .chips{
		margin:0px;
		padding:0px;
	}

	.filters-chips-view .chips .chip{
		display:inline-block;
		padding: 1px 12px 0px 12px;
		background: #26ab13;
		color: #fff;
		cursor: pointer;
		border-radius: 20px;
		margin-right: 5px;
		margin-top: 5px;
	}
	
	.bootstrap-select.show-tick .dropdown-menu li a span.text{
		margin-left: 14px !important;
	}
	
	.bootstrap-select.show-tick .dropdown-menu .selected span.check-mark{
		right: auto !important;
		left: 15px !important;
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
		
		$("#ch_budget_pop").selectpicker({
			noneSelectedText: "Budget"
		});
		
		
		var page = 1;
		let hasNext = true;
		let isLoading = false;
		
		let filter_location = [];
		let filter_category = [];
		let filter_type = [];
		let filter_lang = [];
		let filter_verified = 0;
		let filter_sort_by = "";
		let filter_budget = "";
		let filter_search = "{{ app('request')->input('all') }}";
		
		let filters_display_chips = [];
		filters_display_chips["loc"] = [];
		filters_display_chips["cat"] = [];
		filters_display_chips["type"] = [];
		filters_display_chips["lang"] = [];
		filters_display_chips["sort"] = [];
		filters_display_chips["budget"] = [];
		
		function print_chips(){
			
			let html = '';
			
			$.each(filters_display_chips["loc"], function(index, obj){
				html += '<li data-type="loc" data-target="'+ obj.id +'" class="chip">'+ obj.val +' <i class="fa fa-times-circle"></i></li>';
			});
			
			$.each(filters_display_chips["cat"], function(index, obj){
				html += '<li data-type="cat" data-target="'+ obj.id +'" class="chip">'+ obj.val +' <i class="fa fa-times-circle"></i></li>';
			});
			
			$.each(filters_display_chips["type"], function(index, obj){
				html += '<li data-type="type" data-target="'+ obj.id +'" class="chip">'+ obj.val +' <i class="fa fa-times-circle"></i></li>';
			});
			
			$.each(filters_display_chips["lang"], function(index, obj){
				html += '<li data-type="lang" data-target="'+ obj.id +'" class="chip">'+ obj.val +' <i class="fa fa-times-circle"></i></li>';
			});
			
			$.each(filters_display_chips["sort"], function(index, obj){
				html += '<li data-type="sort" data-target="'+ obj.id +'" class="chip">'+ obj.val +' <i class="fa fa-times-circle"></i></li>';
			});
			
			$.each(filters_display_chips["budget"], function(index, obj){
				html += '<li data-type="budget" data-target="'+ obj.id +'" class="chip">'+ obj.val +' <i class="fa fa-times-circle"></i></li>';
			});
			
			$(".filters-chips-view .chips").html(html);
			
		}
		
		$(".filters-chips-view .chips").on("click", "li[data-target]", function(){
			let type = $(this).attr("data-type");
			let id = $(this).attr("data-target");
			
			if(type=="loc"){
				$("#filters #ch_location_id_pop").find("option[value='"+ id +"']").prop("selected", false).change();
				$("#ch_location_id").find("option[value='"+ id +"']").prop("selected", false).change();
			}
			
			if(type=="cat"){
				$("#filters #ch_category_id_pop").find("option[value='"+ id +"']").prop("selected", false).change();
				$("#ch_category_id").find("option[value='"+ id +"']").prop("selected", false).change();
			}
			
			if(type=="type"){
				$("#filters #ch_type_id_pop").find("option[value='"+ id +"']").prop("selected", false).change();
				$("#ch_type_id").find("option[value='"+ id +"']").prop("selected", false).change();
			}
			
			if(type=="lang"){
				$("#filters #ch_language_id_pop").find("option[value='"+ id +"']").prop("selected", false).change();
				filter_lang = $("#filters #ch_language_id_pop").val();
				
				filters_display_chips["lang"] = [];
				$("#filters #ch_language_id_pop").find("option:selected").each(function(){
					filters_display_chips["lang"].push({
						id: $(this).val(),
						val: $(this).text()
					});
				});
				
				load_filter();
				return;
			}
			
			if(type=="sort"){
				$("#filters #ch_sort_by_pop").find("option[value='"+ id +"']").prop("selected", false).change();
				filters_display_chips["sort"] = [];
				$(this).remove();
				load_filter();
				return;
			}
			
			if(type=="budget"){
				$("#filters #ch_budget_pop").find("option[value='"+ id +"']").prop("selected", false).change();
				
				filter_budget = $("#filters #ch_budget_pop").val();
				
				filters_display_chips["budget"] = [];
				$("#filters #ch_budget_pop").find("option:selected").each(function(){
					filters_display_chips["budget"].push({
						id: $(this).val(),
						val: $(this).text()
					});
				});
				
				load_filter();
				return;
			}
			
		});
		
		$("#filters .btn-adv-search").on("click", function(){
			
			filter_location = $("#filters #ch_location_id_pop").val();
			filter_category = $("#filters #ch_category_id_pop").val();
			filter_type = $("#filters #ch_type_id_pop").val();
			filter_lang = $("#filters #ch_language_id_pop").val();
			filter_verified = $("#filters #is_verified_pop").prop("checked") ? 1 : 0;
			filter_sort_by = $("#filters #ch_sort_by_pop").val();
			filter_budget = $("#filters #ch_budget_pop").val();
			
			$("#ch_location_id").val(filter_location).change();
			$("#ch_category_id").val(filter_category).change();
			$("#ch_type_id").val(filter_type).change();
			
			/* chips code */
			filters_display_chips["lang"] = [];
			$("#filters #ch_language_id_pop").find("option:selected").each(function(){
				filters_display_chips["lang"].push({
					id: $(this).val(),
					val: $(this).text()
				});
			});
			
			if(filter_sort_by){
				filters_display_chips["sort"] = [];
				$("#filters #ch_sort_by_pop").find("option:selected").each(function(){
					filters_display_chips["sort"].push({
						id: $(this).val(),
						val: $(this).text()
					});
				});
			}
			
			if(filter_budget){
				filters_display_chips["budget"] = [];
				$("#filters #ch_budget_pop").find("option:selected").each(function(){
					filters_display_chips["budget"].push({
						id: $(this).val(),
						val: $(this).text()
					});
				});
			}
			/* chips code */
			
			load_filter();
			$("#filters").modal("toggle");
		});

		$("#filters .btn-adv-clear").on("click", function(){
			clear_filters();
		});
		
		function clear_filters(){
			filter_location = [];
			filter_category = [];
			filter_type = [];
			filter_lang = [];
			filter_verified = 0;
			filter_sort_by = "";
			filter_budget = "";
			filter_search = "";
			
			
			filters_display_chips["loc"] = [];
			filters_display_chips["cat"] = [];
			filters_display_chips["type"] = [];
			filters_display_chips["lang"] = [];
			filters_display_chips["sort"] = [];
			filters_display_chips["budget"] = [];
			
			load_filter();
			$("#filters").modal("toggle");
		}
		
		$(document).on("click", ".search-btn", function(){
			filter_category = $(".js-searchBox").val();
			load_filter();
		});
		
		$(window).scroll(function() {
			if($(window).scrollTop() + $(window).height() >= $(document).height()-500) {
				if(!isLoading){
					page++;
					load_data(false);
				}
			}
		});
		
		/* load first time */
		load_data();
		
		$(document).on("change", "#ch_location_id", function(){
			filter_location = $(this).val();
			
			/* chips code */
			filters_display_chips["loc"] = [];
			
			$(this).find("option:selected").each(function(){
				filters_display_chips["loc"].push({
					id: $(this).val(),
					val: $(this).text()
				});
			});
			/* chips code */
			
			$("#ch_location_id_pop").val(filter_location).change();
			
			load_filter();
		});
		
		$(document).on("change", "#ch_category_id", function(){
			filter_category = $(this).val();
			
			/* chips code */
			filters_display_chips["cat"] = [];
			
			$(this).find("option:selected").each(function(){
				filters_display_chips["cat"].push({
					id: $(this).val(),
					val: $(this).text()
				});
			});
			/* chips code */
			
			$("#ch_category_id_pop").val(filter_category).change();
			
			load_filter();
		});
		
		$(document).on("change", "#ch_type_id", function(){
			filter_type = $(this).val();
			
			/* chips code */
			filters_display_chips["type"] = [];
			
			$(this).find("option:selected").each(function(){
				filters_display_chips["type"].push({
					id: $(this).val(),
					val: $(this).text()
				});
			});
			/* chips code */
			$("#ch_type_id_pop").val(filter_type).change();
			
			load_filter();
		});
		
		$(document).on("change", "#is_verified", function(){
			filter_verified = $(this).prop("checked") ? 1 : 0;
			load_filter();
		});
		
		function load_filter(){
			hasNext = true;
			page = 1;
			print_chips();
			
			$("#filters #is_verified_pop").attr("checked", filter_verified==1);
			$("#is_verified").attr("checked", filter_verified==1);
			
			load_data(true);
			
		}
		
		function load_data(reset){
			
			if(!hasNext){
				return;
			}
			
			if(reset){
				$("#contractor-list").html("");
			}
			
			isLoading = true;
			
			$(".loader").html("<i class='fa fa-circle-o-notch fa-spin fa-4x' style='font-size:20px;color:#30c21c;'></i><br><div style='color:black;'>Loading great contractors for you...</div>");
			
			const params = new URLSearchParams({
			  page: page,
			  filter_location: filter_location,
			  filter_category: filter_category,
			  filter_type: filter_type,
			  filter_lang: filter_lang,
			  filter_verified: filter_verified,
			  filter_sort_by: filter_sort_by,
			  filter_budget: filter_budget,
			  filter_search: filter_search
			});
			
			$.ajax({
				url:'?' + params,
				cache: false,
				success: function(response){
					
					hasNext = response.next_page_url!=null;
					
					$(".no_from_rec").html(response.from);
					$(".no_to_rec").html(response.to);
					$(".no_total_rec").html(response.total);
					
					let html = '';
					
					$.each(response.data, function(index, val){
					   if (val.content) {
                          	html += line_item(val);
                        }
					
					});

					if(reset){
						$("#contractor-list").html(html);
					}else{
						$("#contractor-list").append(html);
					}
					
					isLoading = false;
				},
				complete: function(){
					$(".loader").html("");
					isLoading = false;
				}
			});
		}
		
		function line_item(item){
			
			let html = '';
			
			html += '<div class="item-listting col-lg-12 extrra">';
				html += '<div class="feat_property list">';
					html += '<div class="thumb_t">';
						html += '<a class="thumb-image_t" target="_blank" href="/contractor/'+ item.slug +'">';
							html += '<img class="img-whpd" style="height: 265px; border-radius: 0px; width: 350px; object-fit: cover;" src="'+ item.img +'" alt="'+ item.title +'" />';
						html += '</a>';
					html += '</div>';
					html += '<div class="details btn-spc-desk" style="">';
						html += '<div class="row">';
							html += '<a href="/contractor/'+ item.slug +'">';
							
								html += '<div class="col-md-8">';
									html += '<a href="/contractor/'+ item.slug +'">';
										html += '<div class="row">';
											html += '<div class="col-2">';
												html += '<img src="'+ item.usr_img +'" class="prf-img" style="border-radius: 50%; margin-top: 5px;" />';
											html += '</div>';
											html += '<div class="col-10 hding" style="position: relative;">';
												html += '<h4 style="font-size: 16px;">'+ item.title +'</h4>';
												html += '<ul class="listing_reviews" style="margin-top: 4px;" >';
													html += '<li class="list-inline-item"><b style="color: #ffbe28;">'+ item.sbc_total +'</b></li>';
													
													for(let i=1; i<=5; i++){
														
														if(item.sbc_total < i){
															if (Math.round(item.sbc_total) == i){
																html += '<li class="list-inline-item"><i class="fa fa-star-half-o " style="color:#ffbe28;"></i></li>';
																continue;
															}
															
															html += '<li class="list-inline-item"><i class="fa fa-star-o " style="color:#ffbe28;"></i></li>';
															continue;
														}
														
														html += '<li class="list-inline-item "><i class="fa fa-star " style="color:#ffbe28;"></i></li>';
													}
													
													html += '<li class="list-inline-item">';
														html += '<span style="color: #000;">';
															if(item.total_reviews>1){
																html += item.total_reviews + ' Reviews';
															}else{
																html += item.total_reviews + ' Review';
															}
														html += '</span>';
													html += '</li>';
													
													if(item.verified=="Yes"){
														html += '<li class="list-inline-item">|</li>';
														html += '<li class="list-inline-item"><img src="https://contrafinder.com/public/images/approved.png" style="height: 18px; position: relative; top: -2px;" /></li>';
														html += '<li class="list-inline-item"><span style="color: #0f9138;font-size:12px; position: relative; left: -4px; font-weight: bold;" data-toggle="tooltip" title="ContraFinder confirmed the business license and met all requirements as a qualified professional."> &nbsp; Verified</span></li>';
													}
													
													html += '</ul>';
													
													
											
											html += '</div>';
										html += '</div>';
										
    
											html += '<div class="mbl-stars" style="position: relative;top: -3px;">';
													if(item.hires > 0){
													html += '<span  data-toggle="tooltip" title="The number of clients who hired this professional through ContraFinder." style="font-size: 12px;cursor:pointer;color:#007bff;position: relative;left: -4px;font-weight: bold;"><i class="fa fa-handshake-o"></i> '+ item.hires +'x Hires</span> &nbsp;';
													}
													
													if(item.completed_hires > 0){
													html += '<span  data-toggle="tooltip" title="The number of hires which this professional has completed and verified by ContraFinder." style="font-size: 12px;cursor:pointer;color: #0f9138;position: relative;left: -4px;font-weight: bold;"> <i class="fa fa-check-circle-o"></i>  '+ item.completed_hires +'x Completed Hires</span>';
													}
													
														html += '</div>';

										html += '<div style="max-height:120px;min-height: 120px;overflow: hidden;" ><p style="margin-top: 20px;max-height:100px;font-size: 14px;">';
										html += item.content.replace(/<\/?("[^"]*"|'[^']*'|[^>])*(>|$)/g, "");
									html += '</p></div></a>';
									html += '<a href="/contractor/'+ item.slug +'" style="font-size: 14px; color: #027562; padding-bottom:10px; margin-right:5px;float: right; font-weight: bold;">';
										html += 'Read More <span style="font-size: 22px; position: relative; top: 2px; left: 3px;" class="fa fa-angle-right"></span>';
									html += '</a>';
								html += '</div>';
							html += '</a>';

							html += '<div class="col-md-4" style="position: relative; left: 19px; text-align: right;">';
							
							html += '<div class="row desk-view" style="font-size: 14px; padding-bottom: 20px;">';
									html += '<div class="col-1"><span class="fa fa-map-marker"></span></div>';
									html += '<div class="col-10" style="text-align: left;">';
										html += '<a href="#" target="_blank">'+ item.address +" "+ item.address_2 + ( item.name ? ", "+ item.name : "") +'</a>';
									html += '</div>';
								html += '</div>';
								
									html += '<a href="#" class="btn con-btn btn-send-desk" data-open-modal="'+ btoa(JSON.stringify(item)) +'"><span class="fa fa-envelope"></span> Send Message</a> <br />';
								
								html += '<div class="row mbl-view" style="font-size: 14px;">';
									html += '<div class="col-1"><span class="fa fa-map-marker"></span></div>';
									html += '<div class="col-10" style="text-align: left;">';
										html += '<a href="#" target="_blank">'+ item.address +" "+ item.address_2 + ( item.name ? ", "+ item.name : "") +'</a>';
									html += '</div>';
								html += '</div>';
							html += '</div>';
						html += '</div>';
						html += '<div class="fp_footer"></div>';
					html += '</div>';
				html += '</div>';
			html += '</div>';
			
			return html;
		}
		
		$(document).on("click", "a[data-open-modal]", function(){
			
			let item = jQuery.parseJSON(atob($(this).attr("data-open-modal")));
			console.log(item);
			
			$("#sendmessage_model .title").html("Contact this "+ item.title);
			$("#sendmessage_model input[name='c_slug']").val(item.slug);
			$("#sendmessage_model input[name='to_id']").val(item.create_user);
			
			$("#sendmessage_model").modal("toggle");
			
		});
	});
</script>
@endsection