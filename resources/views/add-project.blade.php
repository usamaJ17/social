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
    <div class="row" style="margin-top: 20px;">
        @include('layouts.sidebar')
        <div class="col-md-6">
            <br><br>
            <h2>+Add Project</h2>
            <br>
            <div class="row">
                <div class="col-md-11">
                    <form action="{{ route('submit_projects') }}" method="POST">
                        @csrf
                    <div class="form-group">
                        <label for="Project name">Project name</label>
                        <input type="text" class="form-control" id="Project name" name="project_name" required>
                    </div>
                    <div class="form-group">
                        <label for="Project address">Project address</label>
                        <input type="text" class="form-control" id="Project address" name="address" required>
                    </div>
                    <div class="form-group">
                        <label for="Project Completion year">Project Completion year</label>
                        <input type="text" class="form-control" id="Project Completion year" name="completion_year" required>
                    </div>
                    <div class="form-group">
                        <label for="pwd"><small>Cost Range</small></label>
                        <select class="form-control" name="cost">
                            <option value="1"> AED 0 - 100K  </option>
                            <option value="1"> AED 100K - 500K  </option>
                            <option value="1"> AED 500K - 800K  </option>
                            <option value="1"> AED 800K - 3M  </option>
                            <option value="1"> AED 3M - 5M  </option>
                            <option value="1"> Over AED 5M    </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <select class="form-control" name="category">
                            <option value="1"> Fitout Contractor</option>
                            <option value="2"> Design & Build</option>
                            <option value="3"> FF&E</option>
                            <option value="5"> Interior Design/Decoration</option>
                            <option value="5"> Remodeling</option>
                            <option value="5"> Renovation</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label>Type</label>
                        <select class="form-control" name="type">
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
                        </select>
                    </div>
                    
                    {{-- <div class="col-md-12" style="width:60%;"> --}}
                    {{-- @include('layouts.pro_images',['hide_gallery'=>true,'property_type'=>1]) --}}
                    {{-- </div> --}}
                    
                    {{-- <a data-toggle="modal" data-target="#myModal" >
                        <img src="https://contrafinder.appstown.co/public/images/photos.png" />
                    </a>
                    <p style="margin-left: 7px;margin-top: 9px;">By uploading photos, you are approving their display by
                    Houzz, saying that you either own the rights to the image or that you have permission or a license to do so from the copyright holder, and agreeing to abide by Houzz's terms of use.”</p> --}}

                    
                    <br><br>
                    <button style="width: 60%;
                    padding: 15px;" type="submit" class="btn btn-log btn-block btn-thm form-submit">Add Project</button>
                    </form>
                    <!-- Modal -->
                    <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog modal-xl">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img src="https://contrafinder.appstown.co/public/images/upload.png" />
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="col-md-3">
            <div class="" style="padding: 20px;
                background: #e8e7e71f;margin-top: 17%;
                border: 1px solid #80808054;">
                <h3>Photo Guidelines</h3>
                <p>Innappropriate photos will be removed.</p>
                <br>
                <h4>Do's</h4>
                <ul style="color: #38952cd4;">
                    <li>Photos of residential spaces</li>
                    <li>Photos of residential spaces</li>
                    <li>Photos of residential spaces</li>
                    <li>Photos of residential spaces</li>
                </ul>
                
                <br>
                <h4>Dont's</h4>
                <ul style="color: #ff0000ad;">
                    <li>Small Photos</li>
                    <li>Photos of residential spaces</li>
                    <li>Low Quality Photos</li>
                    <li>Photos of residential spaces</li>
                </ul>
                <br><br>
            </div>
        </div>
    </div>
</div>
<br><br><br>
@endsection