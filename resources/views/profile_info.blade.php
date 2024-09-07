@extends('layouts.app')

@section('content')
<style>
    .profile-v
    {
        background-image: url('https://cdn.pixabay.com/photo/2019/07/23/22/17/apartment-4358755_1280.jpg');
        height: 250px;
    }

    .profile-pic {
    background-image: url('https://cdn.pixabay.com/photo/2017/11/29/09/15/paint-2985569_1280.jpg');
    width: 200px;
    height: 200px;
    border: 3px solid #efecec;
    position: relative;
    background-size: cover;
    top: 93px;
    left: 21px;
}

header, .ftr
{
    display:none !important;
}

.profile-change-icon
{
    color: #fff;
    background: #000;
    padding: 10px;
    border-radius: 58%;
    position: relative;
    left: 150px;
    border: 2px solid #fff;
    top: 15px;
}



.profile-menus {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.profile-menus li {
  display: inline;
  padding-right: 30px;
}
.profile-menus li >a {
    display: inline;
    padding-right: 30px;
    font-size: 15px;
    text-decoration: none;
    color: grey;
    font-weight: 700;
}

.list-view-menu li
{
    display:block;
    padding: 5px 0px;
}

.list-view-menu li > a {
    display: block;
    font-size: 15sspx;
    text-decoration: none;
    color: grey;
    font-weight: 400;
}

.list-view-menu li > a:active {

color:red !important;

}

.form-control
{
    width: 95%;
    height: 45px;
}

@media only screen and (max-width: 480px) {
    .logo-mobi-pro
    {
        display:none;
    }
    
    .cont-bac
    {
    background-image: none !important;
    height: auto !important;
    }
}

</style>

<div class="container-fluid" >
    <div class="row">
        
        <?php if(isset($_GET["contractor"])) { ?>
        <div class="col-md-7" style="padding: 0px 8%;height: 100vh;">
             <br>
                 <img src="https://contrafinder.com/public/images/contra-logo.png" class="logo-mobi-pro"  style="height: 40px;" /><br>
        <br><br>
    
        
           <h2 style="margin: 0px;" id="info">Let's Get Started By Creating your Profile</h2>
          <p>to help you better with your Needs</p>
          <form action="update_contractor_profile" method="post" >
              
              @csrf  
        <div class="business-information" id="business"> 
          
        <br>
        <div class="form-group">
            <label for="email">Business Name <span style="color:red;">*</span></label>
            <input type="text" class="form-control" required name="title"  >
          </div>
      

          <br>
          <h3>Category</h3>
          <div class="row">
			<?php				
			
				$traverse = function ($categories, $prefix = '') use (&$traverse) {								foreach ($categories as $category) {					$checked = '';			?>				
			<div class="col-md-6">					
				<label class="term-item d-block">						
					<input {{ $checked }} type="checkbox" name="categories[]" value="{{$category->id}}" >						
					<span class="term-name">{{$prefix . ' ' . $category->name}}</span>					
				</label>				
			</div>			
			<?php				$traverse($category->children, $prefix . '-');				}			};			$traverse($property_category);			?>
       <div class="col-md-12">
            <p style="color:#30c21c;font-size:13px;">Tell us what you do so we can match you with the potential clients</p>
       </div>
          
          </div>
          <br>
          </div>
          <div class="business-information" id="contact"> 
          
           <br>
           <div class="form-group">
            <label for="email">Country <span style="color:red;">*</span></label>
            <input type="text"  name= "address" class="form-control" id="email" required>
            
          </div>		  		  @if(is_default_lang())            <div class="form-group">                <label class="control-label">City <span style="color:red;">*</span></label>                @if(!empty($is_smart_search))                                    @else                    <div class="">                        <select name="location_id" class="form-control" required>                            <option value="">{{__("-- Please Select --")}}</option>                            <?php                            $traverse = function ($locations, $prefix = '') use (&$traverse) {                                foreach ($locations as $location) {                                    $selected = '';                                                                        printf("<option value='%s' %s>%s</option>", $location->id, $selected, $prefix . ' ' . $location->name);                                    $traverse($location->children, $prefix . '-');                                }                            };                            $traverse($property_location);                            ?>                        </select>                    </div>                @endif            </div>        @endif
         <!-- <div class="form-group">
            <label for="email">City</label>
            <input type="text"  name= "address" class="form-control" id="email">
            
          </div>-->
          <div class="form-group">
            <label for="email">Phone Number <span style="color:red;">*</span></label>
            <input type="tel" class="form-control" name="phone" required>
          </div>
           
           
           
           <br><br>
         
<button type="submit" style="width: 60%;
    padding: 15px;" class="btn btn-log btn-block btn-thm form-submit">Next</button>
    </form>
         
        </div>
        <br><br><br>
        </div>
        <div class="col-md-5 cont-bac" style="background-image: url(https://contrafinder.com/public/designimages/contractor-details.jpg);
    background-size: cover;
    background-repeat: no-repeat;height: 100vh;"></div>
        <?php } else { ?>
        <div class="col-md-4"></div>
        <div class="col-md-4" style="padding: 0px 5%;">
             <br><br><img src="https://contrafinder.com/public//images/contra-logo.png"   class="logo-mobi-pro" style="height: 40px;" />
             <br>
        <br>
           <h2 style="margin: 0px;" id="info">Tell us a little about you</h2>
          <p>to help you better with your Needs</p>
          <form action="updatecustomerprofile" method="post" >
              @csrf  

        <div class="business-information" id="business"> 
          
        <br>
        <div class="form-group">
            <label for="email">First Name <span style="color:red;">*</span></label>
            <input type="text" class="form-control" name="first_name" id="email" required>
          </div>
          

        <div class="form-group">
            <label for="email">Last Name <span style="color:red;">*</span></label>
            <input type="text" class="form-control" name="last_name" id="email" required>
          </div>
          
          
        <div class="form-group">
            <label for="email">Age <span style="color:red;">*</span></label>
           
         <select class="form-control" name="age"  required>
                <option value="18">18 - 25</option>
                <option value="19">25 - 35</option>
                <option  value="20">35 - 50</option>
                <option  value="21">45 - 60+</option>
                
            </select>
                
                
                
            </select>
          </div>

             <div class="form-group">
                 
            <label for="email">Gender <span style="color:red;">*</span></label><br>
           <label> <input type="radio"  name="gender" value="1" required> Male &nbsp;&nbsp;</label>
           
           <label> <input type="radio"  name="gender" value="2" required> Female &nbsp;&nbsp;</label>
         
          </div>
          

                    
        
          
          <div class="business-information" id="contact"> 
          <div class="form-group">
            <label for="email">Phone Number <span style="color:red;">*</span></label>
            <input type="tel" class="form-control" name="phone" id="email" required>
          </div>
           
           
           
           <br><br>
         
<button style="width: 60%;
    padding: 15px;" type="submit" class="btn btn-log btn-block btn-thm form-submit">Next</button>
    
         
        </div>
        <br><br><br>
        </div>
        </form>
        
    </div>
    <?php } ?>
    
    </div>
@endsection