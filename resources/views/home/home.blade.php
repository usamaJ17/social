@extends('layouts.app')
@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset("libs/ion_rangeslider/css/ion.rangeSlider.min.css") }}"/>
@endsection
@section('content')
<section class="home-one home1-overlay bg-img1" style="height: 400px;background-image:url(https://images.pexels.com/photos/271795/pexels-photo-271795.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2)">
    <div class="container">
    <div class="row posr">
    <div class="col-lg-12">
    <div class="home_content home1" style="padding: 140px 0 240px;">
    <div class="home-text text-center home1">
    <h2 class="fz50 mx-lg-5">Find the right contractor</h2>
    <p class="fz18 color-white">Answer a few questions and we’ll put you in touch with pros who can help</p>
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
    <form action="#" method="get" class="bgc-white bgct-767 pl30 pt10 pl0-767">
    <div class="form-row align-items-center justify-content-around">
    <div class="col-auto home_form_input bgc-white mb20-xsd ">
    <label class="sr-only">What</label>
    <div class="input-group style1">
    <div class="input-group-prepend">
    <div class="input-group-text pl0 pb0-767">What service do you need ?</div>
    </div>
    <div class="select-wrap style2-dropdown">
    <input type="text"  style="display:none;" class="refineText formTextbox" style="width: 250px;"><select name="category_id" class=" form-control js-searchBox" style="display: none;">
   
    <option value="1"> Fitout Contractor</option>
    <option value="2"> Design & Build</option>
    <option value="3"> FF&E</option>
    <option value="4"> Interior Design/Decoration</option>
    <option value="5">Remodeling</option>
    <option value="6">Renovation</option>
    </select>

    <ul class="searchBoxElement" style="width: 250px; display: none;"><li data-selected="off" data-searchval="0" class="selected"><span>Ex: shopping, restaurant...</span></li><li data-selected="off" data-searchval="1"><span> Outdoor Activity</span></li><li data-selected="off" data-searchval="2"><span> Restaurant</span></li><li data-selected="off" data-searchval="3"><span> Hotels</span></li><li data-selected="off" data-searchval="4"><span> Beauty &amp; Spa</span></li><li data-selected="off" data-searchval="5"><span> Shopping</span></li><li data-selected="off" data-searchval="6"><span> Automotive</span></li>
    </ul>

    </div>
    </div>
    </div>

    <div class="col-auto home_form_input bgc-white mb20-xsd " style="display:none;">
    <label class="sr-only">Where</label>
    <div class="input-group style1">
    <div class="input-group-prepend">
    <div class="input-group-text pl0 pb0-767">Where</div>
    </div>
    <div class="select-wrap style2-dropdown">
    <input style="display:none;" type="text" class="refineText formTextbox" style="width: 250px;"><select name="location_id" class=" form-control js-searchBox" style="display: none;">
    <option value="0">Your city</option>
    <option value="3"> Dubai</option>
    <option value="2">Abu Dhabi</option>
    <option value="5"> Sharjah</option>
    <option value="1"> Ras Al Khaima</option>
    <option value="6"> Ajman</option>
    </select><ul class="searchBoxElement" style="width: 250px; display: none;"><li data-selected="off" data-searchval="0" class="selected"><span>Your city</span></li><li data-selected="off" data-searchval="3"><span> Florida</span></li><li data-selected="off" data-searchval="2"><span> Los Angeles</span></li><li data-selected="off" data-searchval="5"><span> Los Angeles</span></li><li data-selected="off" data-searchval="1"><span> Miami</span></li><li data-selected="off" data-searchval="6"><span> New Jersey</span></li><li data-selected="off" data-searchval="4"><span> New York</span></li><li data-selected="off" data-searchval="7"><span> San Francisco</span></li><li data-selected="off" data-searchval="8"><span> Virginia</span></li></ul>
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
    
    
    
    
    
    
    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-45px, 0px, 0px); transition: all 1.2s ease 0s; width: 150px;"><div class="owl-item cloned" style="width: 0px; margin-right: 30px;"><div class="item">
    <div class="icon_home1">
    <div class="icon"><span class="flaticon-shopping-bag"></span></div>
    <p>Shopping</p>
    </div>
    </div></div><div class="owl-item cloned" style="width: 0px; margin-right: 30px;"><div class="item">
    <div class="icon_home1">
    <div class="icon"><span class="flaticon-brake"></span></div>
    <p>Automotive</p>
    </div>
    </div></div><div class="owl-item" style="width: 0px; margin-right: 30px;"><div class="item">
    <div class="icon_home1">
    <div class="icon"><span class="flaticon-tent"></span></div>
    <p>Outdoor Activity</p>
    </div>
    </div></div><div class="owl-item active" style="width: 0px; margin-right: 30px;"><div class="item">
    <div class="icon_home1">
    <div class="icon"><span class="flaticon-cutlery"></span></div>
    <p>Restaurant</p>
    </div>
    </div></div><div class="owl-item active" style="width: 0px; margin-right: 30px;"><div class="item">
    <div class="icon_home1">
    <div class="icon"><span class="flaticon-desk-bell"></span></div>
    <p>Hotels</p>
    </div>
    </div></div><div class="owl-item" style="width: 0px; margin-right: 30px;"><div class="item">
    <div class="icon_home1">
    <div class="icon"><span class="flaticon-mirror"></span></div>
    <p>Beauty &amp; Spa</p>
    </div>
    </div></div><div class="owl-item" style="width: 0px; margin-right: 30px;"><div class="item">
    <div class="icon_home1">
    <div class="icon"><span class="flaticon-shopping-bag"></span></div>
    <p>Shopping</p>
    </div>
    </div></div><div class="owl-item" style="width: 0px; margin-right: 30px;"><div class="item">
    <div class="icon_home1">
    <div class="icon"><span class="flaticon-brake"></span></div>
    <p>Automotive</p>
    </div>
    </div></div><div class="owl-item cloned" style="width: 0px; margin-right: 30px;"><div class="item">
    <div class="icon_home1">
    <div class="icon"><span class="flaticon-tent"></span></div>
    <p>Outdoor Activity</p>
    </div>
    </div></div><div class="owl-item cloned" style="width: 0px; margin-right: 30px;"><div class="item">
    <div class="icon_home1">
    <div class="icon"><span class="flaticon-cutlery"></span></div>
    <p>Restaurant</p>
    </div>
    </div></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style="display: none;"><i class="fa fa-arrow-left"></i></div><div class="owl-next" style="display: none;"><i class="fa fa-arrow-right"></i></div></div><div class="owl-dots" style="display: none;"></div></div></div>
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
</li> <li>
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
<div class="candidate_revew_select">
<select name="location_id" class="selectpicker w100 show-tick">
<option value="0">Location</option>
<option value="1"> Miami</option>
<option value="2"> Los Angeles</option>
<option value="3"> Florida</option>
<option value="4"> New York</option>
<option value="5"> Los Angeles</option>
<option value="6"> New Jersey</option>
<option value="7"> San Francisco</option>
<option value="8"> Virginia</option>
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
<div class="row" style="display:none;">
<div class="col-lg-12">
<div class="breadcrumb_content style2 mb0-991">
    <br><br>
<h2 class="breadcrumb_title">Best Contractor in United Arab Emirates</h2>
<ol class="breadcrumb">
<li class="breadcrumb-item active" aria-current="page">We are bringing the right contractors for your needs</li>
</ol>
</div>
</div>
<div class="col-lg-12">
<div class="dn db-lg mt30 mb0 tac-767">
<div id="main2">
 <span id="open2" class="fa fa-filter filter_open_btn style2"> Show Filter</span> 
</div>
</div>
</div>
</div>

 <section class="filters" style="padding:30px 0px;">
        
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
<div class="dropdown bootstrap-select w100 show-tick show"><select name="category_id" class="selectpicker w100 show-tick" tabindex="-98">
<option value="0">Location</option>
<option value="1"> Abu Dhabi</option>
<option value="2"> Dubai</option>
<option value="3"> Sharjah</option>
<option value="1"> Ajman</option>
<option value="2"> Ras Al Khaima</option>
<option value="3"> Umm ul Qwain</option>
</select><button style="display:none;" type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="button" title="All Categories" aria-expanded="true"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">All Categories</div></div> </div></button><div class="dropdown-menu show" role="combobox" x-placement="bottom-start" style="max-height: 271.039px; overflow: hidden; min-height: 122px; position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 55px, 0px);"><div class="inner show" role="listbox" aria-expanded="true" tabindex="-1" style="max-height: 253.039px; overflow-y: auto; min-height: 104px;"><ul class="dropdown-menu inner show"><li class="selected active"><a role="option" class="dropdown-item selected active" aria-disabled="false" tabindex="0" aria-selected="true"><span class=" bs-ok-default check-mark"></span><span class="text">All Categories</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Outdoor Activity</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Restaurant</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Hotels</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Beauty &amp; Spa</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Shopping</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Automotive</span></a></li></ul></div></div></div>
</div>
</div>
            </div>
            
            <div class="col-md-3">
            <div class="search_option_two">
<div class="candidate_revew_select">
<div class="dropdown bootstrap-select w100 show-tick show"><select name="category_id" class="selectpicker w100 show-tick" tabindex="-98">
<option>Category</option>
<option value="1"> Fitout Contractor</option>
<option value="2"> Design & Build</option>
<option value="3"> FF&E</option>
<option value="5"> Interior Design/Decoration</option>
<option value="5"> Remodeling</option>
<option value="5"> Renovation</option>
</select><button style="display:none;" type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="button" title="All Categories" aria-expanded="true"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">All Categories</div></div> </div></button><div class="dropdown-menu show" role="combobox" x-placement="bottom-start" style="max-height: 271.039px; overflow: hidden; min-height: 122px; position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 55px, 0px);"><div class="inner show" role="listbox" aria-expanded="true" tabindex="-1" style="max-height: 253.039px; overflow-y: auto; min-height: 104px;"><ul class="dropdown-menu inner show"><li class="selected active"><a role="option" class="dropdown-item selected active" aria-disabled="false" tabindex="0" aria-selected="true"><span class=" bs-ok-default check-mark"></span><span class="text">All Categories</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Outdoor Activity</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Restaurant</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Hotels</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Beauty &amp; Spa</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Shopping</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Automotive</span></a></li></ul></div></div></div>
</div>
</div>
            </div>
            
            <div class="col-md-3">
            <div class="search_option_two">
<div class="candidate_revew_select">
<div class="dropdown bootstrap-select w100 show-tick show"><select name="category_id" class="selectpicker w100 show-tick" tabindex="-98">
    <option>Type</option>
<option value="1"> Restaurant/Food & Beverage</option>
<option value="2"> Retail</option>
<option value="3">  Office Space (Class A)</option>
<option value="4">  Office Space (Class B)</option>
<option value="5">  Office Space (Class C)</option>
<option value="6">  Industrial</option>
<option value="7">  Healthcare facilities</option>
<option value="8">  Hotels/Resorts</option>
<option value="9">  Showroom/Gallery</option>
</select><button style="display:none;" type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="button" title="All Categories" aria-expanded="true"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">All Categories</div></div> </div></button><div class="dropdown-menu show" role="combobox" x-placement="bottom-start" style="max-height: 271.039px; overflow: hidden; min-height: 122px; position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 55px, 0px);"><div class="inner show" role="listbox" aria-expanded="true" tabindex="-1" style="max-height: 253.039px; overflow-y: auto; min-height: 104px;"><ul class="dropdown-menu inner show"><li class="selected active"><a role="option" class="dropdown-item selected active" aria-disabled="false" tabindex="0" aria-selected="true"><span class=" bs-ok-default check-mark"></span><span class="text">All Categories</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Outdoor Activity</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Restaurant</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Hotels</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Beauty &amp; Spa</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Shopping</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Automotive</span></a></li></ul></div></div></div>
</div>
</div>
            </div>
            
            <div class="col-md-2">
                 <div style="border: 1px solid #26ab13;color:#26ab13;border-radius:2px;" >
                 <label style="margin-top: 4px;
    position: relative;
    top: 3px;
    left: 12px;"><input type="checkbox"  /> Show Verified</label>
                 </div>
            </div>
           
           
           
        </div>
        
        
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
</li> <li>
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
<li class="list-inline-item dropdown text-left"><span class="stts">Sort by: </span>
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
    <a style="background: #027562;
    padding: 7px 14px;
    border-radius: 20px;
    padding-right: 14px;
    color: #fff;
    font-size: 18px;"> Designer & Architect   &nbsp;&nbsp;<i class="fa fa-times-circle"></i></a>
<p class="mb0" style="float: right;"><span class="heading-color"> <b>{{$i}}</b> - <b>{{$current_pages}}</b> of <b>{{$total_page}}</b> professionals</span></p>
</div>
</div>
</div>
</div>
<div class="list-item">
<div class="row">










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
        $avatar = contractor_photo($contractor->image_id);
        if (empty($avatar)) {
           $avatar = contractor_photo(0);
        }?>

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
                                border-radius: 50%;" />
                            </div>
                            
                            <div class="col-10" style="position: relative;
                                left: -33px;" >
                                
                                <h4>{{$contractor->title}} </h4>
                                
                                <ul class="listing_reviews">
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
                        <span style="display: none;" ><img class="list_simg rounded-circle mr5" src="s_assets/approved.svg" alt="System Admin"> <span style="position: relative;
                            top: 3px;
                            left: -7px;
                        ">Verified</span>
                        <br><br>
                    </span>
                    
                    <p style="margin-top: 15px;"><?=$contractor->content?></p>
                    <a href="https://contrafinder.appstown.co/property/museum-of-new-york" style="font-size:14px;color:#027562;float:right;font-weight:bold;">Read More <span style="font-size: 22px;
                        position: relative;
                        top: 2px;
                    left: 3px;" class="fa fa-angle-right"></span></a>
                    
                </div>
            </a>
            <div class="col-md-4" style="position: relative;
                left: 19px;ext-align: right;">
                
                <a href="#" class="btn con-btn" data-toggle="modal" data-target="#myModalfirst"  ><span class="fa fa-envelope " ></span>
                Send Message
            </a>
            <br>
            <div class="row" style="font-size: 14px;">
                <div class="col-2"><span class="fa fa-map-marker"></span></div>
                
                <div class="col-10">
                    
                    <a href="#" target="_blank">5629 Cypress Creek Parkway Ste. 113, Houston Texas ,United States</a>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="fp_footer">
    </div>
</div>
</div>
</div>
@endforeach

{!! $bc_contractor->links() !!}

@else
{{'Contractor Data Not Found!'}}
@endif
{{-- end profile --}}









</div>
</div>
<div class="col-lg-12 mt20">
<div class="mbp_pagination">
</div>
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
									<li>To:<br>
<div class="row">
    <div class="col-3">
        <img src="https://www.w3schools.com/howto/img_avatar2.png" style="height: 40px;
    width: 40px;
    border-radius: 50%;" />
    </div>
    
    <div class="col-9" style="position: relative;
    left: -60px;" >
        
    <h4>Martha O'Hara Interiors </h4>
    
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
</div></li>
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
									<li><p style="font-size:13px;"> I confirm that this message complies with the <a href="" style="color: #26ab13;">Contrafinder Review Policy,</a> including that I do not
  work for, am not related to and am not a competitor of this professional.</p></li>
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
<div id="myModalsecond" class="modal fade" role="dialog">
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
									<li class="search_area">
										<div class="form-group">
											<input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="{{ __("Name") }}">
										</div>
									</li>
									<li class="search_area">
										<div class="form-group">
											<input type="email" name="email" class="form-control" id="exampleInputEmail" placeholder="{{ __("Email") }}">
										</div>
									</li>
									<li class="search_area">
										<div class="form-group">
											<input type="number" name="phone" class="form-control" id="exampleInputName2" placeholder="{{ __("Phone") }}">
										</div>
									</li>
									<li class="search_area">
										<div class="form-group">
											<textarea id="form_message" name="message" class="form-control" rows="5" required="required" placeholder="{{ __("Message") }}"></textarea>
										</div>
									</li>
									<li>
										<input type="hidden" name="vendor_id" value="">
										<input type="hidden" name="object_id" value="">
										<input type="hidden" name="object_model" value="property">
									</li>
									<li><p style="font-size:13px;"> I confirm that this message complies with the <a href="" style="color: #26ab13;">Contrafinder Review Policy,</a> including that I do not
  work for, am not related to and am not a competitor of this professional.</p></li>
									<li>
										<div class="search_option_button">
											<button type="submit" class="btn btn-block btn-thm h55"><span class="text">{{ __("Send Message") }}</span><i class="fa fa-spin fa-spinner"></i></button>
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
<div class="dropdown bootstrap-select w100 show-tick show"><select name="category_id" class="selectpicker w100 show-tick" tabindex="-98">
<option value="1"> Abu Dhabi</option>
<option value="2"> Dubai</option>
<option value="3"> Sharjah</option>
<option value="1"> Ajman</option>
<option value="2"> Ras Al Khaima</option>
<option value="3"> Umm ul Qwain</option>
</select><button style="display:none;" type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="button" title="All Categories" aria-expanded="true"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">All Categories</div></div> </div></button><div class="dropdown-menu show" role="combobox" x-placement="bottom-start" style="max-height: 271.039px; overflow: hidden; min-height: 122px; position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 55px, 0px);"><div class="inner show" role="listbox" aria-expanded="true" tabindex="-1" style="max-height: 253.039px; overflow-y: auto; min-height: 104px;"><ul class="dropdown-menu inner show"><li class="selected active"><a role="option" class="dropdown-item selected active" aria-disabled="false" tabindex="0" aria-selected="true"><span class=" bs-ok-default check-mark"></span><span class="text">All Categories</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Outdoor Activity</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Restaurant</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Hotels</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Beauty &amp; Spa</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Shopping</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Automotive</span></a></li></ul></div></div></div>
</div>
</div>
            
                      </div>
                      <div class="col-md-6">
            
                 <label style="">Verified Contractors</label>
                 <div style="border: 1px solid #26ab13;color:#26ab13;border-radius:2px;" >
                 <label style="margin-top: 4px;position: relative;top: 3px;left: 12px;"><input type="checkbox"  /> Show Verified</label>
                 </div>
            
            
                      </div>
                  </div>
                  
                   <div class="row">
            
            <br><br>
            <div class="col-md-12">
                 <label style="margin-top: 20px;">Choose Category</label>
            <div class="search_option_two">
<div class="candidate_revew_select">
<div class="dropdown bootstrap-select w100 show-tick show"><select name="category_id" class="selectpicker w100 show-tick" tabindex="-98">
<option value="1"> Fitout Contractor</option>
<option value="2"> Design & Build</option>
<option value="3"> FF&E</option>
<option value="5"> Interior Design/Decoration</option>
<option value="5"> Remodeling</option>
<option value="5"> Renovation</option>

</select><button style="display:none;" type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="button" title="All Categories" aria-expanded="true"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">All Categories</div></div> </div></button><div class="dropdown-menu show" role="combobox" x-placement="bottom-start" style="max-height: 271.039px; overflow: hidden; min-height: 122px; position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 55px, 0px);"><div class="inner show" role="listbox" aria-expanded="true" tabindex="-1" style="max-height: 253.039px; overflow-y: auto; min-height: 104px;"><ul class="dropdown-menu inner show"><li class="selected active"><a role="option" class="dropdown-item selected active" aria-disabled="false" tabindex="0" aria-selected="true"><span class=" bs-ok-default check-mark"></span><span class="text">All Categories</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Outdoor Activity</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Restaurant</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Hotels</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Beauty &amp; Spa</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Shopping</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Automotive</span></a></li></ul></div></div></div>
</div>
</div>
            </div>
            <br><br>
            <div class="col-md-12">
                
                 <label style="margin-top: 20px;">Type</label>
            <div class="search_option_two">
<div class="candidate_revew_select">
<div class="dropdown bootstrap-select w100 show-tick show"><select name="category_id" class="selectpicker w100 show-tick" tabindex="-98">
<option value="1"> Restaurant/Food & Beverage</option>
<option value="2"> Retail</option>
<option value="3">  Office Space (Class A)</option>
<option value="4">  Office Space (Class B)</option>
<option value="5">  Office Space (Class C)</option>
<option value="6">  Industrial</option>
<option value="7">  Healthcare facilities</option>
<option value="8">  Hotels/Resorts</option>
<option value="9">  Showroom/Gallery</option>
</select><button style="display:none;" type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="button" title="All Categories" aria-expanded="true"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">All Categories</div></div> </div></button><div class="dropdown-menu show" role="combobox" x-placement="bottom-start" style="max-height: 271.039px; overflow: hidden; min-height: 122px; position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 55px, 0px);"><div class="inner show" role="listbox" aria-expanded="true" tabindex="-1" style="max-height: 253.039px; overflow-y: auto; min-height: 104px;"><ul class="dropdown-menu inner show"><li class="selected active"><a role="option" class="dropdown-item selected active" aria-disabled="false" tabindex="0" aria-selected="true"><span class=" bs-ok-default check-mark"></span><span class="text">All Categories</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Outdoor Activity</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Restaurant</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Hotels</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Beauty &amp; Spa</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Shopping</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Automotive</span></a></li></ul></div></div></div>
</div>
</div>
            </div>
            <br><br>
            <div class="col-md-12">
                
                 <label style="margin-top: 20px;">Languages </label>
            <div class="search_option_two">
<div class="candidate_revew_select">
<div class="dropdown bootstrap-select w100 show-tick show"><select name="category_id" class="selectpicker w100 show-tick" tabindex="-98">

<option value="1">Speaks Arabic</option>
<option value="2">Speaks English</option>
<option value="3">Speaks French</option>

<option value="3">Speaks Russian</option>
<option value="3">Speaks Urdu</option>
<option value="3">Speaks Tagalog</option>
<option value="3">Speaks Spanish</option>





</select><button style="display:none;" type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="button" title="All Categories" aria-expanded="true"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">All Categories</div></div> </div></button><div class="dropdown-menu show" role="combobox" x-placement="bottom-start" style="max-height: 271.039px; overflow: hidden; min-height: 122px; position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 55px, 0px);"><div class="inner show" role="listbox" aria-expanded="true" tabindex="-1" style="max-height: 253.039px; overflow-y: auto; min-height: 104px;"><ul class="dropdown-menu inner show"><li class="selected active"><a role="option" class="dropdown-item selected active" aria-disabled="false" tabindex="0" aria-selected="true"><span class=" bs-ok-default check-mark"></span><span class="text">All Categories</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Outdoor Activity</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Restaurant</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Hotels</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Beauty &amp; Spa</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Shopping</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Automotive</span></a></li></ul></div></div></div>
</div>
</div>
            </div>
            
             <br><br>
            <div class="col-md-6">
                
                 <label style="margin-top: 20px;">Sort By</label>
            <div class="search_option_two">
<div class="candidate_revew_select">
<div class="dropdown bootstrap-select w100 show-tick show"><select name="category_id" class="selectpicker w100 show-tick" tabindex="-98">
<option>Star Rating (Highest First)</option>
<option>Star Rating (Lowest First)</option>
<option>Most Reviewed</option>

</select><button style="display:none;" type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="button" title="All Categories" aria-expanded="true"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">All Categories</div></div> </div></button><div class="dropdown-menu show" role="combobox" x-placement="bottom-start" style="max-height: 271.039px; overflow: hidden; min-height: 122px; position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 55px, 0px);"><div class="inner show" role="listbox" aria-expanded="true" tabindex="-1" style="max-height: 253.039px; overflow-y: auto; min-height: 104px;"><ul class="dropdown-menu inner show"><li class="selected active"><a role="option" class="dropdown-item selected active" aria-disabled="false" tabindex="0" aria-selected="true"><span class=" bs-ok-default check-mark"></span><span class="text">All Categories</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Outdoor Activity</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Restaurant</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Hotels</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Beauty &amp; Spa</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Shopping</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Automotive</span></a></li></ul></div></div></div>
</div>
</div>
            </div>
           
           
            
            <br><br>
            <div class="col-md-6">
                
                 <label style="margin-top: 20px;">Budget</label>
            <div class="search_option_two">
<div class="candidate_revew_select">
<div class="dropdown bootstrap-select w100 show-tick show"><select name="category_id" class="selectpicker w100 show-tick" tabindex="-98">

<option value="1"> AED 0 - 100K  </option>

<option value="1"> AED 100K - 500K  </option>


<option value="1"> AED 500K - 800K  </option>

<option value="1"> AED 800K - 3M  </option>

<option value="1"> AED 3M - 5M  </option>

<option value="1"> Over AED 5M    </option>


</select><button style="display:none;" type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="button" title="All Categories" aria-expanded="true"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">All Categories</div></div> </div></button><div class="dropdown-menu show" role="combobox" x-placement="bottom-start" style="max-height: 271.039px; overflow: hidden; min-height: 122px; position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 55px, 0px);"><div class="inner show" role="listbox" aria-expanded="true" tabindex="-1" style="max-height: 253.039px; overflow-y: auto; min-height: 104px;"><ul class="dropdown-menu inner show"><li class="selected active"><a role="option" class="dropdown-item selected active" aria-disabled="false" tabindex="0" aria-selected="true"><span class=" bs-ok-default check-mark"></span><span class="text">All Categories</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Outdoor Activity</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Restaurant</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Hotels</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Beauty &amp; Spa</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Shopping</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text"> Automotive</span></a></li></ul></div></div></div>
</div>
</div>
            </div>
            
            
             <div class="col-md-6">
                
               
       <a href="btn btn-primary">Show Results</a>
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
      </div>
    </div>

  </div>
</div>

<!--modal filters ends here -->


</section>








    <div class="bc_detail_location" style="display:none;">
        <section class="our-listing pb30-991">
            <div class="container">
                <div class="row">
                    {{-- <div class="col-lg-12">
                        @include('Property::frontend.layouts.search.filter-search-mobile')
                    </div> --}}
                </div>
                

                <div class="row">
                    <div class="col-xl-12">
                        <div class="sidebar_listing_grid1 dn-lg bgc-f4">
                            <div class="sidebar_listing_list">
                                <div class="sidebar_advanced_search_widget">
                                    {{-- <ul class="sasw_list mb0">
                                        @include('Property::frontend.layouts.form-search.sidebar')
                                    </ul> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="listing_filter_row dif db-767">
                                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-5">
                                    {{-- <div class="left_area tac-xsd mb30-767">
                                        @include('Property::frontend.layouts.search.loop.result-count')
                                    </div> --}}
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

    <script type="text/javascript" src="{{ asset("libs/ion_rangeslider/js/ion.rangeSlider.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("libs/sticky/jquery.sticky.js") }}"></script>
@endsection








