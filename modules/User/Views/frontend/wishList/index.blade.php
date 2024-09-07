@extends('layouts.wish')
@section('head')

@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12 mb15">
            <div class="breadcrumb_content">
                <div class="row">
                    <div class="col-6">
                        <h1 class="breadcrumb_title">{{ __("Favorite Contractor's") }}</h1>
                        <hr>
                        <br>
                    </div>
                    <div class="col-6 text-right">
                   
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            @include('admin.message')
        </div>
    </div>

    @if($rows->total() > 0)
        <div class="row">
            @foreach($rows as $row)
                <div class="col-md-6 col-lg-4">
                    @includeIf('User::frontend.wishList.loop-list')
                </div>
            @endforeach
        </div>
        <div class="col-lg-12">
            <div class="mbp_pagination mt10">
                {{$rows->appends(request()->query())->links()}}
            </div>
        </div>
    @else
        {{__("")}}
    @endif

@endsection
@section('footer')
@endsection
