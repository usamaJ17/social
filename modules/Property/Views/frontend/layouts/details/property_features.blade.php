@php
    $terms_ids = $row->terms->pluck('term_id');
    $attributes = \Modules\Core\Models\Terms::getTermsById($terms_ids);
	
@endphp 
@if(!empty($terms_ids) and !empty($attributes))
    @foreach($attributes as $attribute )
        @php $translate_attribute = $attribute['parent']->translateOrOrigin(app()->getLocale()) @endphp
        @if(empty($attribute['parent']['hide_in_single']))
            <div class="col-lg-12 {{$attribute['parent']->slug}} attr-{{$attribute['parent']->id}}">
                <div class="additional_details mb30">
                    <div class="row">
                        <div class="col-lg-12 pl0 pr0 pl15-767 pr15-767">
                            <h5  class="mb10 spec-cat"><b>{{ $translate_attribute->name }}</b></h5>
                        </div>
                        @php $terms = $attribute['child'] @endphp
                        @foreach($terms as $term )
                            @php $translate_term = $term->translateOrOrigin(app()->getLocale()); @endphp
                             {{$translate_term->name}}, &nbsp;
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
    @endforeach
@endif
