<div class="lss_contact_location " style="padding:0px;">
    <!--<div class="sidebar_map mb30">-->
    <!--    <div class="lss_map h200" id="map-canvas"></div>-->
    <!--</div>-->
    <style>		.contact_list li{			border-bottom: 1px solid #8080804a;			padding: 13px 15px;		}	</style>
    <ul class="contact_list list-unstyled mb15">
        @if($row->address)
        <li class="df"><span class="flaticon-pin mr15"></span>
		<small>{{ $row->address .' '.$row->address_2 }} {{ $location }} </small>
        </li>
        @endif
        @if($row->phone)
        <li><span class="flaticon-phone mr15"></span><a href="tel:{{ $row->phone }}" target="_blank"><small>{{ $row->phone }}</small></a></li>
        @endif
        @if($row->email)
        <li><span class="flaticon-email mr15"></span><span class="__cf_email__" data-cfemail="65161015150a171125160e0a09044b060a08">info@contractor.com</span></li>
        @endif
        @if($row->website)
			<?php
				$row->website = str_replace("https://", "", $row->website);
				$row->website = str_replace("http://", "", $row->website);
				$row->website = str_replace("https", "", $row->website);
				$row->website = str_replace("http", "", $row->website);
				
				$row->website = "https://{$row->website}";
				
				$project_cost = str_replace("_", " ", $project_details->project_cost ?? "");
				
			?>
        <li><span class="fa fa-calculator mr15"></span> <small>Typical Project Cost</small>
        <br>
        <div style="font-size: 13px;
    margin-left: 35px;
    color: #000;">{{$project_cost}} </div></li>
        <li><span class="fa fa-file-text-o mr15"></span><a target="_blank"></a> <small>License Number : {{ $row->license_number }} </small></li>
        <li><span class="flaticon-link mr15"></span><a href="{{ $row->website }}" target="_blank"><small>{{ $row->website }}</small></a></li>
        @endif
    </ul>

    @if( ( !empty($row->facebook) || !empty($row->instagram) || !empty($row->linkedin) || !empty($row->twitter) ) )
        <ul class="sidebar_social_icon mb0" style="padding: 15px;">
            @if(!empty($row->facebook))
            <li class="list-inline-item"><a href="{{ $row->facebook }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
            @endif

            @if(!empty($row->instagram))
            <li class="list-inline-item"><a href="{{ $row->instagram }}" target="_blank"><i class="fa fa-instagram"></i></a></li>
            @endif

            @if(!empty($row->linkedin))
            <li class="list-inline-item"><a href="{{ $row->linkedin }}" target="_blank"><i class="fa fa-linkedin"></i></a></li>
            @endif

            @if(!empty($row->twitter))
            <li class="list-inline-item"><a href="{{ $row->twitter }}" target="_blank"><i class="fa fa-twitter"></i></a></li>
            @endif
        </ul>
    @endif


</div>
