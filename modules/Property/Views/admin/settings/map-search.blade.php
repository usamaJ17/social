@if(is_default_lang())
	<div class="form-group">
		<div class="form-controls">
			<div class="form-group-item">
				<div class="g-items-header">
					<div class="row">
						<div class="col-md-7">{{__("Search Field")}}</div>
						<div class="col-md-4">{{__("Order")}}</div>
						<div class="col-md-1"></div>
					</div>
				</div>
				<div class="g-items">
					@php
						$property_map_search_fields = setting_item_array('property_map_search_fields');
						$types = [
							'service_name'=>__("Service name"),
							'location'=>__("Location"),
							'category'=>__("Category"),
							'attr'=>__("Attribute"),
						];
						$attrs = \Modules\Core\Models\Attributes::where('service', 'property')->get();
					@endphp
					@foreach($property_map_search_fields as $key=>$item)
						<div class="item" data-number="{{$key}}">
							<div class="row">
								<div class="col-md-7">
									<select name="property_map_search_fields[{{$key}}][field]" class="custom-select">
										<option value="">{{__("-- Select field type --")}}</option>
										@foreach($types as $type=>$name)
											<option @if($item['field'] == $type) selected @endif value="{{$type}}">{{$name}}</option>
										@endforeach
									</select>
									<br>
									<select name="property_map_search_fields[{{$key}}][attr]" class="mt-2 custom-select">
										<option value="">{{__("-- Select Attribute --")}}</option>
										@foreach($attrs as $attr)
											<option @if($item['attr'] == $attr->id) selected @endif value="{{$attr->id}}">{{$attr->name}}</option>
										@endforeach
									</select>
								
								
								</div>
								<div class="col-md-4">
									<input type="number" name="property_map_search_fields[{{$key}}][position]" min="0" value="{{$item['position'] ?? 0}}" class="form-control">
								</div>
								<div class="col-md-1">
									<span class="btn btn-danger btn-sm btn-remove-item"><i class="fa fa-trash"></i></span>
								</div>
							</div>
						</div>
					@endforeach
				</div>
				<div class="text-right">
					<span class="btn btn-info btn-sm btn-add-item"><i class="icon ion-ios-add-circle-outline"></i> {{__('Add item')}}</span>
				</div>
				<div class="g-more hide">
					<div class="item" data-number="__number__">
						<div class="row">
							<div class="col-md-7">
								<select __name__="property_map_search_fields[__number__][field]" class="custom-select">
									<option value="">{{__("-- Select field type --")}}</option>
									@foreach($types as $type=>$name)
										<option value="{{$type}}">{{$name}}</option>
									@endforeach
								</select>
								<select __name__="property_map_search_fields[__number__][attr]" class=" mt-2  custom-select">
									<option value="">{{__("-- Select Attribute --")}}</option>
									@foreach($attrs as $attr)
										<option value="{{$attr->id}}">{{$attr->name}}</option>
									@endforeach
								</select>
							</div>
							<div class="col-md-4">
								<input type="number" __name__="property_map_search_fields[__number__][position]" min="0" class="form-control">
							</div>
							<div class="col-md-1">
								<span class="btn btn-danger btn-sm btn-remove-item"><i class="fa fa-trash"></i></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endif