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
                <a href="" style="color:#fff;font-size:16px;">Get Reviews &nbsp;<i class="fa fa-angle-right"></i></a>
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
                <li><a href="#home">Projects</a></li>
                <li><a href="#news">Messages</a></li>
                <li><a href="#contact">Reviews</a></li>
                <li><a href="#contact">Analytics</a></li>
                
              </ul>
        </div>
    </div>

    <div class="row" style="margin-top: 20px;" >
        <div class="col-md-3">
        <h5>Account</h5>
            <ul class="profile-menus list-view-menu">
                <li ><a href="#home" style="color:green;font-weight:500;">Profile info</a></li>
                <li><a href="#news">Contact info</a></li>
                <li><a href="#contact">Change Password</a></li>
                <li><a href="#about">Social Media Setting</a></li>
              </ul>
        </div>
        