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
						$property_search_fields = setting_item_array('property_sidebar_search_fields');
						$attributes = \Modules\Core\Models\Attributes::where('service', 'property')->with(['terms','translations'])->get();
						$types = [
							'service_name'=>__("Service name"),
							'location'=>__("Location"),
							'category'=>__("Category"),
							'price'=>__("Price")
						];
						foreach($attributes as $attr) {
							$types[$attr->slug.'|'.$attr->id] = $attr->name;
						}
					@endphp
					@foreach($property_search_fields as $key=>$item)
						<div class="item" data-number="{{$key}}">
							<div class="row">
								<div class="col-md-7">
									<input type="text" name="property_sidebar_search_fields[{{$key}}][title]" value="{{$item['title'] ?? ""}}" class="form-control">
									<select name="property_sidebar_search_fields[{{$key}}][field]" class="custom-select">
										<option value="">{{__("-- Select field type --")}}</option>
										@foreach($types as $type=>$name)
											<option @if($item['field'] == $type) selected @endif value="{{$type}}">{{$name}}</option>
										@endforeach
									</select>
								</div>
								<div class="col-md-4">
									<input type="number" name="property_sidebar_search_fields[{{$key}}][position]" min="0" value="{{$item['position'] ?? 0}}" class="form-control">
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
								<input type="text" __name__="property_sidebar_search_fields[__number__][title]" value="" class="form-control">
								<select __name__="property_sidebar_search_fields[__number__][field]" class="custom-select">
									<option value="">{{__("-- Select field type --")}}</option>
									@foreach($types as $type=>$name)
										<option value="{{$type}}">{{$name}}</option>
									@endforeach
								</select>
							</div>
							<div class="col-md-4">
								<input type="number" __name__="property_sidebar_search_fields[__number__][position]" min="0" class="form-control">
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
