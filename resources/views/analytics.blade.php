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
    width: 100%;
    height: 45px;
}


.project-block
{
    margin-top: 18px;
}
.edit-icon
{
    position: absolute;
    background: #000000c7;
    padding: 7px 12px;
    color: #fff;
    border-radius: 50%;
    right: 25px;
    top: 27px;
    display: none;
}

.project-block:hover .edit-icon {
 display:block;
 color: #fff;
 transition:1s all;
}

</style>

<div class="container " >
    @include('layouts.ch_head')

    <div class="row" style="margin-top: 20px;" >
        @include('layouts.sidebar')
        <div class="col-md-8">
            <br>
            <h2>Analytics</h2>
            <br>
            <form action="{{ url('analytics') }}" method="GET">
                <div class="row">
                    <div class="col-md-4">
                        
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="email">From</label>
                            <input type="date" class="form-control" id="email" name="from">
                        </div>
                        
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="email">To</label>
                            <input type="date" class="form-control" id="email" name="to">
                        </div>
                        
                    </div>
                    <div class="col-md-2">
                        <div class="form-group" style="margin-top: 37%;">
                            
                            <input type="submit" class="btn btn-primary" style="background: #2dc21c;" value="Show">
                        </div>
                        
                    </div>
                </div>
            </form>
           <div class="row">

            @if (!isset($_GET['from']))
                            <div class="col-md-3">
                <div  style="border: 1px solid #9e9e9e6e;
    padding: 20px;
    border-radius: 5px;">
                    
                    <h3 style="color:grey;">Today</h3>
               
                <h4><span  style="font-size:50px;">{{$currentday_analytics}}</span> Views</h4>
                <p>{{date('d M')}}</p>
                </div>
            </div>
            <div class="col-md-3">
                <div  style="border: 1px solid #9e9e9e6e;
    padding: 20px;
    border-radius: 5px;">
                    
                    <h3 style="color:grey;">This Week</h3>
               
                <h4><span style="font-size:50px;">{{$currentWeek_analytics}}</span> Views</h4>
                <p>{{date("d M", strtotime('monday this week'))}} - {{date("d M", strtotime('sunday this week'))}}</p>
                </div>
            </div>
           
            <div class="col-md-3">
                <div  style="border: 1px solid #9e9e9e6e;
    padding: 20px;
    border-radius: 5px;">
                    <h3 style="color:grey;">This Month</h3>
                <h4><span  style="font-size:50px;">{{$currentMonth_analytics}}</span> Views</h4>
                <p>1st - Till Today</p>
                </div>
            </div>
           
            <div class="col-md-3">
                <div  style="border: 1px solid #9e9e9e6e;
    padding: 20px;
    border-radius: 5px;">
                    <h3 style="color:grey;">Total</h3>
               
                <h4><span  style="font-size:50px;">{{$total_analytics}}</span> Views</h4>
                 <p>Over All</p>
                </div>
            </div>
            @else
            <div class="col-md-12 text-center">
                <div  style="border: 1px solid #9e9e9e6e;
    padding: 20px;
    border-radius: 5px;">
                    <h3 style="color:grey;">Total</h3>
               
                <h4><span  style="font-size:50px;">{{$total_analytics}}</span> Views</h4>
                 <p>Over All</p>
                </div>
            </div>
            @endif

            </div>
            
        </div>
    </div>
</div>
<br><br><br>
@endsection