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
        <div class="col-md-9">
            <h2>Projects</h2>
            <br>

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

            <div class="row">
                <div class="col-md-4">
                    <div class="" style="text-align: center;
    border: 3px dashed #80808059;
    padding: 76px 50px;margin-top:18px;">
                        <a href="{{ url('add-project') }}" style="color: #30c21c;"><i class="fa fa-plus" style="font-size:66px;"></i><br>
                        Add Project
                        </a>
                    </div>
                </div>


                @if (count($bc_projects) > 0)
                    @foreach ($bc_projects as $project)
                    <div class="col-md-4">
                        <a href="{{ route('delete.project',['id'=>$project->id]) }}" class="btn-sm btn-danger" onclick="alert('Are you sure you want to delete this project?');">delete</a>
                        <div class="project-block" style="border: 1px solid #00000045; height: 251px;">
                            <img src="https://cdn.pixabay.com/photo/2017/03/28/12/10/chairs-2181947_1280.jpg" style="height: 200px;"  />
                            <a href="{{ route('edit.project',['id'=>$project->id]) }}" class="edit-icon"><i class="fa fa-edit "></i></a>
                            <div style="padding: 7px 14px;">
                                <b>{{$project->project_name}}</b>
                                <p style="font-size: 12px; margin-top: -7px;">2 Photos</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @else
                {{'Project Not Found!'}}
                @endif

                

                

                
{{--                 <div class="col-md-4">
                    <div class="project-block" style="border: 1px solid #00000045; height: 251px;">
                        <img src="https://cdn.pixabay.com/photo/2017/03/28/12/10/chairs-2181947_1280.jpg" style="height: 200px;"  />
                        <a href="" class="edit-icon"><i class="fa fa-edit "></i></a>
                        <div style="padding: 7px 14px;">
                            <b>Emirates Hill</b>
                            <p style="font-size: 12px; margin-top: -7px;">2 Photos</p>
                        </div>
                    </div>
                </div> --}}





            </div>
            
        </div>
    </div>
</div>
<br><br><br>
@endsection