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
    width: 95%;
    height: 45px;
}

</style>

<div class="container " >
    @include('layouts.ch_head')


    <div class="row" style="margin-top: 20px;" >
        @include('layouts.sidebar')
        <div class="col-md-9">
            <br>
           <h2 style="margin: 0px;">No Reviews for Lamis Contractor</h2>
           <br>
           <a data-toggle="modal" data-target="#myModal" class="btn btn-default" style="border: 1px solid;
    margin-bottom: 15px;">Get Reviews</a>
           <p>No review yet , lorem ipusm can be change by the real tezt</p>
           <br>
          
          
          <!-- Trigger the modal with a button -->

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-xl">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Request Reviews</h3>
      </div>
      <div class="modal-body">
          <div class="row">
             <div class="col-md-6">
                 
      <h2>Request Review</h2>
      <p></p>
      <div class="form-group">
            <label for="email">To</label>
            <input type="email" class="form-control" id="email">
          </div>
             <div class="form-group">
            <label for="email">Message</label>
            <textarea rows="8" class="form-control" id="email"></textarea>
          </div>
          
          <br>
          <a href="projects" style="width: 60%;
    padding: 15px;" class="btn btn-log btn-block btn-thm form-submit">Send Request</a>
    
                 
             </div> 
             <div class="col-md-6">
                 <b>Email Preview</b>
                 <div style="background: #80808012;
    padding: 30px;
    border-radius: 0px;
    border: 1px solid #8080804a;" >
                     <h4>Request Review</h4>
                     <hr>
                     <p>W3Schools is optimized for learning and training. Examples might be simplified to improve reading and learning. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using W3Schools, you agree to have read and accepted our terms of use, cookie and privacy policy.
</p>
                 </div>
             </div> 
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
  <br><br><br><br>
        </div>
    </div>
</div>
@endsection