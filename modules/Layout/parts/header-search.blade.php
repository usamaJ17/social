@if(!empty($row->header_style) and $row->header_style=='transparent')
	<div class="ht_left_widget  float-left">
		<ul>
			<li class="list-inline-item">
				<div class="ht_search_widget">
					<div class="header_search_widget home1">
						<div class="form-inline mailchimp_form">
							<input type="text"  style="padding: 13px 14px;
    background: #8080801a;
    border-radius: 35px;
    padding-left: 20px;" class="custom_search_with_menu_trigger form-control" value="{{ app('request')->input('all') }}" placeholder="Search By contractor name" data-toggle="modal"  data-target="#staticBackdrop_test">
							<button type="submit" class="btn"><span class="flaticon-loupe"></span></button>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
@else
	<div class="ht_left_widget style2 float-left">
		<ul>
			<li class="list-inline-item">
				<div class="ht_search_widget">
					<div class="header_search_widget inner_page">
						<div class="form-inline mailchimp_form">
							<form action="{{ url('/') }}" method="GET">
								<input type="text" value="{{ app('request')->input('all') }}" class="custom_search_with_menu_trigger form-control"  style="padding: 13px 14px;
    background: #8080801a;
    border-radius: 35px;
    padding-left: 20px;" placeholder="Search Contractor" data-toggle="modal" data-target="#staticBackdrop_test" name="all">
							<button type="submit" class="btn"><span class="flaticon-loupe"></span></button>
							</form>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
@endif
	
