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
    @include('layouts.ch_head')

    <div class="row" style="margin-top: 20px;" >
        @include('layouts.sidebar')
        <div class="col-md-9">
            <br>
           <h2 style="margin: 0px;">Messages</h2>
           <br>
           @if (count($message_data) > 0)
           <table class="table table-bordered">
    <thead>
      <tr>
        <th>Bio</th>
        
        <th>Message</th>
      </tr>
    </thead>
    <tbody>

{{-- <?php dd($message_data); ?> --}}


    @foreach ($message_data as $msg)
      <tr>
        <td>
        <b>{{$msg->first_name.' '.$msg->last_name}}</b><br>
        <p style="margin-bottom: 0px;
    font-size: 14px;
    color: #39a62a;">{{$msg->email}}</p>
        <p>+{{$msg->phone}}</p>
        </td>
        <td>
            {{$msg->body}}
        </td>
      </tr>
    @endforeach





    </tbody>
  </table>
    @else
  {{'Message Not Found!'}}
  @endif
  <br><br><br><br>
        </div>
    </div>
</div>
@endsection