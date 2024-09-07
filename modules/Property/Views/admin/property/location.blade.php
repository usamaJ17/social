<h2 >Contact Information</h2>
<br>
        @if(is_default_lang())
            <div class="form-group">
                <label class="control-label">City <span style="color:red;">*</span></label>
                @if(!empty($is_smart_search))
                    <div class="form-group-smart-search">
                        <div class="form-content">
                            <?php
                            $location_name = "";
                            $list_json = [];
                            $traverse = function ($locations, $prefix = '') use (&$traverse, &$list_json , &$location_name,$row) {
                                foreach ($locations as $location) {
                                    $translate = $location->translateOrOrigin(app()->getLocale());
                                    if ($row->location_id == $location->id){
                                        $location_name = $translate->name;
                                    }
                                    $list_json[] = [
                                        'id' => $location->id,
                                        'title' => $prefix . ' ' . $translate->name,
                                    ];
                                    $traverse($location->children, $prefix . '-');
                                }
                            };
                            $traverse($property_location);
                            ?>
                            <div class="smart-search">
                                <input type="text" class="smart-search-location parent_text form-control" placeholder="{{__("-- Please Select --")}}" value="{{ $location_name }}" data-onLoad="{{__("Loading...")}}"
                                       data-default="{{ json_encode($list_json) }}">
                                <input type="hidden" class="child_id" name="location_id" value="{{$row->location_id ?? Request::query('location_id')}}">
                            </div>
                        </div>
                    </div>
                @else
                    <div class="">
                        <select name="location_id" class="form-control">
                            <option value="">{{__("-- Please Select --")}}</option>
                            <?php
                            $traverse = function ($locations, $prefix = '') use (&$traverse, $row) {
                                foreach ($locations as $location) {
                                    $selected = '';
                                    if ($row->location_id == $location->id)
                                        $selected = 'selected';
                                    printf("<option value='%s' %s>%s</option>", $location->id, $selected, $prefix . ' ' . $location->name);
                                    $traverse($location->children, $prefix . '-');
                                }
                            };
                            $traverse($property_location);
                            ?>
                        </select>
                    </div>
                @endif
            </div>
        @endif
        <div class="form-group">
            <label class="control-label">{{__("Address Line 1")}} <span style="color:red;">*</span></label>
            <input type="text" name="address" class="form-control" placeholder="{{__("Address Line 1")}}" value="{{$row->address}}" required>
        </div>
         <div class="form-group">
            <label class="control-label">{{__("Address Line 2")}} </label>
            <input type="text" name="address_2" class="form-control" placeholder="{{__("Address Line 2")}}" value="{{$row->address_2}}">
        </div>
        @if(is_default_lang())
            <div class="form-group">
                <label class="control-label">{{__("Phone Number")}} <span style="color:red;">*</span></label>
                <input type="text" name="phone" class="form-control" placeholder="{{__("+971 55 4379700")}}" value="{{$row->phone}}" required>
            </div>
        @endif
        <br>
<h2 id="social">Social Media Accounts</h2>
<br>
<div class="form-group">
            <label class="control-label">{{__("Facebook")}} </label>
            <input type="text" name="facebook" class="form-control" placeholder="{{__("Facebook profile url")}}" value="{{$row->facebook}}" >
        </div>
        
        <div class="form-group">
            <label class="control-label">{{__("Instagram")}}</label>
            <input type="text" name="instagram" class="form-control" placeholder="{{__("Instagram profile url")}}" value="{{$row->instagram}}" >
        </div>
        
        <div class="form-group">
            <label class="control-label">{{__("Twitter")}}</label>
            <input type="text" name="twitter" class="form-control" placeholder="{{__("Twitter profile url")}}" value="{{$row->twitter}}" >
        </div>
        
        <div class="form-group">
            <label class="control-label">{{__("Linkedin")}}</label>
            <input type="text" name="linkedin" class="form-control" placeholder="{{__("Linkedin profile url")}}" value="{{$row->linkedin}}" >
        </div>
        
        <!--@if(is_default_lang())-->
        <!--    <div class="form-group">-->
        <!--        <label class="control-label">{{__("Email")}}</label>-->
        <!--        <input type="email" name="email" class="form-control" placeholder="{{__("Email")}}" value="{{$row->email}}">-->
        <!--    </div>-->
        <!--@endif-->
        
        
        <!--@if(is_default_lang())-->
        <!--    <div class="form-group">-->
        <!--        <label class="control-label">{{__("The geographic coordinate")}}</label>-->
        <!--        <div class="control-map-group">-->
        <!--            <div id="map_content"></div>-->
        <!--            <input type="text" placeholder="{{__("Search by name...")}}" class="bc_searchbox form-control" autocomplete="off" onkeydown="return event.key !== 'Enter';">-->
        <!--            <div class="g-control">-->
        <!--                <div class="form-group">-->
        <!--                    <label>{{__("Map Latitude")}}:</label>-->
        <!--                    <input type="text" name="map_lat" class="form-control" value="{{$row->map_lat}}" onkeydown="return event.key !== 'Enter';">-->
        <!--                </div>-->
        <!--                <div class="form-group">-->
        <!--                    <label>{{__("Map Longitude")}}:</label>-->
        <!--                    <input type="text" name="map_lng" class="form-control" value="{{$row->map_lng}}" onkeydown="return event.key !== 'Enter';">-->
        <!--                </div>-->
        <!--                <div class="form-group">-->
        <!--                    <label>{{__("Map Zoom")}}:</label>-->
        <!--                    <input type="text" name="map_zoom" class="form-control" value="{{$row->map_zoom ?? "8"}}" onkeydown="return event.key !== 'Enter';">-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--    <div class="form-group">-->
        <!--        <div class="form-group-item">-->
        <!--            <label class="control-label">{{__('Socials List')}}</label>-->
        <!--            <div class="g-items-header">-->
        <!--                <div class="row">-->
        <!--                    <div class="col-md-5">{{__("Icon Class")}}</div>-->
        <!--                    <div class="col-md-5">{{__('Url')}}</div>-->
        <!--                    <div class="col-md-1"></div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="g-items">-->
        <!--                @if(!empty($row->socials))-->
        <!--                    @php if(!is_array($row->socials)) $row->socials = json_decode($row->socials); @endphp-->
        <!--                    @foreach($row->socials as $key => $social)-->
        <!--                        @php $social = (array)$social @endphp-->
        <!--                        <div class="item" data-number="{{$key}}">-->
        <!--                            <div class="row">-->
        <!--                                <div class="col-md-5">-->
        <!--                                    <input type="text" name="socials[{{$key}}][icon_class]" class="form-control" value="{{$social['icon_class']}}" placeholder="{{__('Eg: fa fa-facebook')}}">-->
        <!--                                </div>-->
        <!--                                <div class="col-md-6">-->
        <!--                                    <input type="text" name="socials[{{$key}}][url]" class="form-control" value="{{$social['url']}}" placeholder="https://facebook.com">-->
        <!--                                </div>-->
        <!--                                <div class="col-md-1">-->
        <!--                                    <span class="btn btn-danger btn-sm btn-remove-item"><i class="fa fa-trash"></i></span>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    @endforeach-->
        <!--                @endif-->
        <!--            </div>-->
        <!--            <div class="text-right">-->
        <!--                <span class="btn btn-info btn-sm btn-add-item"><i class="icon ion-ios-add-circle-outline"></i> {{__('Add item')}}</span>-->
        <!--            </div>-->
        <!--            <div class="g-more hide">-->
        <!--                <div class="item" data-number="__number__">-->
        <!--                    <div class="row">-->
        <!--                        <div class="col-md-5">-->
        <!--                            <input type="text" __name__="socials[__number__][icon_class]" class="form-control" placeholder="{{__('Eg: fa fa-facebook')}}">-->
        <!--                        </div>-->
        <!--                        <div class="col-md-6">-->
        <!--                            <input type="text" __name__="socials[__number__][url]" class="form-control" placeholder="https://facebook.com" />-->
        <!--                        </div>-->
        <!--                        <div class="col-md-1">-->
        <!--                            <span class="btn btn-danger btn-sm btn-remove-item"><i class="fa fa-trash"></i></span>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--@endif-->
    