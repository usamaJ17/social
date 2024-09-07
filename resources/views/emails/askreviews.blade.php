@extends('Email::layout')

@section('content')
	<div class="b-container">
		<div class="b-panel">
			<p><b>Hi dear,</b></p>
			<p>{{ $description }}</p>	
			<p style="text-align:center">
				<a style="border-radius:3px;color:#fff;display:inline-block;text-decoration:none;background-color:#3490dc;border-top:10px solid #3490dc;border-right:18px solid #3490dc;border-bottom:10px solid #3490dc;border-left:18px solid #3490dc" href="https://contrafinder.com/contractor/{{$property->slug}}#reviews">Write review</a>
			</p>
			<p>Thank in advance and let me know if you have any questions.</[>
			<p>Regards, <br>Contrafinder </p>
		</div>
	</div>	
@endsection