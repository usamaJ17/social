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
    width: 60%;
    height: 45px;
}

</style>

<div class="container " >
    <div class="row profile-v">
        <div class="col-md-3">
           <div class="profile-pic">
               <a href="" class="profile-change-icon"><i class="fa fa-camera"></i></a>
           </div>
    </div>
        <div class="col-md-7">

            <div class="bio" style="position: relative;
            top: 145px;"> 
                <h2 style="color:#fff;">Galaxy Idioms Test</h2>
                <a href="https://contrafinder.appstown.co/reviews" style="color:#fff;font-size:16px;">Get Reviews &nbsp;<i class="fa fa-angle-right"></i></a>
            </div>
        </div>

        <div class="col-md-2"></div>
    
    
    
    </div>


    <div class="row" style="margin-top: 17px;
    border-bottom: 1px solid #8080802e;
    padding-bottom: 23px;">
        <div class="col-md-3"></div>
        <div class="col-md-9">
            <ul class="profile-menus">
               <li><a href="projects">Projects</a></li>
                <li><a href="message">Messages</a></li>
                <li><a href="reviews">Reviews</a></li>
                <li><a href="analytics">Analytics</a></li>
                
              </ul>
        </div>
    </div>

    <div class="row" style="margin-top: 20px;" >
        <div class="col-md-3">
        <h5>Account</h5>
            <ul class="profile-menus list-view-menu">
                <li ><a href="#info" style="color:green;font-weight:500;">Profile info</a></li>
                <li><a href="#contact">Contact info</a></li>
                <li><a href="#password">Change Password</a></li>
                <li><a href="#social">Social Media Setting</a></li>
              </ul>
        </div>
        <div class="col-md-9">
           <h2 style="margin: 0px;" id="info">Account Information</h2>
           <br><br>
            <div class="form-group">
            <label for="email">User Name</label>
            <input type="email" class="form-control" id="email">
          </div>
          <div class="form-group">
            <label for="pwd">Email <small>[private]</small></label>
            <input type="password" class="form-control" id="pwd">
          </div>
        <br><br>
        
        <div >
            <h2>Banner Photos</h2><br>
          <a data-toggle="modal" data-target="#myModal" >
          <img src="https://contrafinder.appstown.co/public/images/photos.png" />
          </a>
        </div>
        <br><br>
        
        
        <div class="business-information" id="business"> 
          <h2 style="margin: 0px;">Public Business Information</h2>
           <br><br>

           <div class="form-group">
            <label for="email">Professional Firm/Business Name</label>
            <input type="email" class="form-control" id="email">
          </div>
          <div class="form-group">
            <label for="pwd">Cost Range</small></label>
           <select class="form-control">
               <option value="1"> AED 0 - 100K  </option>

<option value="1"> AED 100K - 500K  </option>


<option value="1"> AED 500K - 800K  </option>

<option value="1"> AED 800K - 3M  </option>

<option value="1"> AED 3M - 5M  </option>

<option value="1"> Over AED 5M    </option>
           </select>
          </div>

          <div class="form-group">
            <label for="email">Website</label>
            <input type="email" class="form-control" id="email">
          </div>

          <div class="form-group">
            <label for="email">License Number</label>
            <input type="email" class="form-control" id="email">
          </div>
           <div class="form-group">
            <label for="email">Business Description</label>
            <textarea  class="form-control" rows="5" id="email"></textarea>
          </div>
          <div class="form-group">
            <label for="email">Certifications Awards & Supporting Documents</label>
            <textarea  class="form-control" rows="5" id="email"></textarea>
          </div>
          
           <h3>Attach Documents</h3>
         
          <div class="col-md-6">
              <label> <input type="file" id="vehicle1" name="vehicle1" value="Bike"></label>
          </div>
          
          <br>
          <h3>Category</h3>
          <div class="row">
              
          <div class="col-md-6">
          
     <label> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">  Fitout Contractor</label>
          </div>
          <div class="col-md-6">
              <label> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"> Design & Build</label>
          </div>
          <div class="col-md-6">
              <label> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"> FF&E</label>
          </div>
          <div class="col-md-6">
              <label> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"> Interior Design/Decoration </label>
          </div>
        
          
          </div>
          <br>
             <h3>Type</h3>
          <div class="row">
             
          <div class="col-md-6">
          
     <label> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">  Restaurant/Food & Beverage</label>
          </div>
          <div class="col-md-6">
              <label> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"> Retail</label>
          </div>
          <div class="col-md-6">
              <label> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"> Office Space (Class A)</label>
          </div>
          <div class="col-md-6">
              <label> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"> Office Space (Class
 B) </label>
          </div>
          
            <div class="col-md-6">
              <label> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"> Office Space (Class
 B) </label>
          </div>
          
            <div class="col-md-6">
              <label> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"> Office Space (Class C) </label>
          </div>
            <div class="col-md-6">
              <label> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"> Industrial </label>
          </div>
             <div class="col-md-6">
              <label> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"> Healthcare facilities </label>
          </div>
             <div class="col-md-6">
              <label> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"> Hotels/Resorts </label>
          </div>
        
        
          <div class="col-md-6">
              <label> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">  Showroom/Gallery </label>
          </div>
        
        
      
        
          
          </div>
          
          
          <br>
          <h3>Areas Served</h3>
          <div class="row">
              
          <div class="col-md-6">
              <label> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">Abu Dhabi</label>
          </div>
          <div class="col-md-6">
              <label> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">Dubai</label>
          </div>
          <div class="col-md-6">
              <label> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">Sharjah</label>
          </div>
          <div class="col-md-6">
              <label> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">Ajman</label>
          </div>
        
          <div class="col-md-6">
              <label> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">Ras Al Khaimah</label>
          </div>
        
          <div class="col-md-6">
              <label> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">Fujairah</label>
          </div>
        
          <div class="col-md-6">
              <label> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">Umm Al Quwain</label>
          </div>
        
        
       
          
          </div>
          
          
          <br>
             <h3>Languages Speak</h3>
          <div class="row">
              
          <div class="col-md-6">
              <label> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">Arabic</label>
          </div>
          <div class="col-md-6">
              <label> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">English</label>
          </div>
          <div class="col-md-6">
              <label> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">Russian</label>
          </div>
          <div class="col-md-6">
              <label> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">French</label>
          </div>
        
          <div class="col-md-6">
              <label> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">Urdu</label>
          </div>
        
          <div class="col-md-6">
              <label> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">Hindi</label>
          </div>
        
          <div class="col-md-6">
              <label> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">Tagalog</label>
          </div>
          <div class="col-md-6">
              <label> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">Spanish</label>
          </div>
        
        
       
          
          </div>
         <br>
          </div>
          
          <div class="business-information" id="contact"> 
          <br><br><br>
          <h2 style="margin: 0px;" >Contact Information</h2>
           <br>
           <div class="form-group">
            <label for="email">Address Line 1</label>
            <input type="email" class="form-control" id="email">
          </div>
          <div class="form-group">
            <label for="email">Address Line 2</label>
            <input type="email" class="form-control" id="email">
          </div>
           <div class="form-group">
            <label for="email">Country</label>
            <input type="email" class="form-control" placeholder="United Arab Emirates" id="email">
          </div>
           <div class="form-group">
            <label for="email">City</label>
            <input type="email" class="form-control" placeholder="Dubai" id="email">
          </div>
          <div class="form-group">
            <label for="email">Phone Number</label>
            <input type="text" class="form-control" placeholder="+971 554379700" id="email">
          </div>
           
           <br><br><br>
          <h2 style="margin: 0px;" id="social">Social Media Accounts</h2>
           <br>
           <div class="form-group">
            <label for="email">Facebook</label>
            <input type="email" class="form-control" id="email">
          </div>
          <div class="form-group">
            <label for="email">Twitter</label>
            <input type="email" class="form-control" id="email">
          </div>
           <div class="form-group">
            <label for="email">Instagram</label>
            <input type="email" class="form-control"  id="email">
          </div>
           <div class="form-group">
            <label for="email">Linkedin</label>
            <input type="email" class="form-control" id="email">
          </div>
         
        </div>
        <br><br><br>
        </div>
    </div>
</div>
@endsection