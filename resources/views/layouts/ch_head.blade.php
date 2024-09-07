<div class="row profile-v">
    <div class="col-md-3">
        <div class="profile-pic">
            <a href="{{route('user.profile.edit',['id'=>Auth::id()])}}" class="profile-change-icon"><i class="fa fa-camera"></i></a>
        </div>
    </div>
    <div class="col-md-7">
        <div class="bio" style="position: relative;
            top: 145px;">
            <h2 style="color:#fff;">Galaxy Idioms Test</h2>
            <a href="{{ url('reviews') }}" style="color:#fff;font-size:16px;">Get Reviews &nbsp;<i class="fa fa-angle-right"></i></a>
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
            <li><a href="{{ url('projects') }}">Projects</a></li>
            <li><a href="{{ url('message') }}">Messages</a></li>
            <li><a href="{{ url('reviews') }}">Reviews</a></li>
            <li><a href="{{ url('analytics') }}">Analytics</a></li>
            
            
        </ul>
    </div>
</div>