
@foreach ($attributes as $attribute)
    <div class="panel mb-3">
        <div class="panel-title"><strong>{{__(':name',['name'=>$attribute->name])}}</strong></div>
        <div class="panel-body">
            <div class="row">
                @foreach($attribute->terms as $term)
                <div class="col-md-6">
                    <label class="term-item">
                        <input @if(!empty($selected_terms) and $selected_terms->contains($term->id)) checked @endif type="checkbox" name="terms[]" value="{{$term->id}}" >
                        <span class="term-name">{{$term->name}}</span>
                    </label>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endforeach

<div id="contact" ></div>
<br>
<br>
