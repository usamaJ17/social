<?php $container = 1 ?>
@extends('layouts.user')


@section('content')
<style>
    .dungdt-upload-box .attach-demo {
    background-color: #f7f7f7;
    border-radius: 0px !important;
    height: 195px !important;
    margin-bottom: 30px;
    overflow: hidden;
    position: relative;
    transition: all .2s;
    width: 100%;
}
</style>
<div class="service-edit-wrap">
    <br>
    <h2 style="margin: 0px;">Messages</h2>
    <br>
    @if (count($message_data) > 0)
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Bio</th>
                
                <th>Message</th>
            </tr>
        </thead>
        <tbody>
            {{-- <?php dd($message_data); ?> --}}
            @foreach ($message_data as $msg)
            <tr>
                <td>
                    <b>@if ($msg->sms_name=='null')
                        {{'demo'}}
                        @else
                        {{$msg->sms_name}}
                        @endif </b><br>
                    <p style="margin-bottom: 0px;
                        font-size: 14px;
                    color: #39a62a;">{{$msg->sms_email}}</p>
                    <p>+{{$msg->sms_phone}}</p>
                </td>
                <td>
                    {{$msg->body}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    {{'Message Not Found!'}}
    @endif
</div>

@endsection

@section('footer')
    <script type="text/javascript" src="{{ asset('libs/tinymce/js/tinymce/tinymce.min.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('js/condition.js?_ver='.config('app.asset_version')) }}"></script>
    <script type="text/javascript" src="{{url('module/core/js/map-engine.js?_ver='.config('app.asset_version'))}}"></script>
    {!! App\Helpers\MapEngine::scripts() !!}
    <script>
        jQuery(function ($) {
            new BravoMapEngine('map_content', {
                fitBounds: true,
                center: [{{$row->map_lat ?? "51.505"}}, {{$row->map_lng ?? "-0.09"}}],
                zoom:{{$row->map_zoom ?? "8"}},
                ready: function (engineMap) {
                    @if($row->map_lat && $row->map_lng)
                    engineMap.addMarker([{{$row->map_lat}}, {{$row->map_lng}}], {
                        icon_options: {}
                    });
                    @endif
                    engineMap.on('click', function (dataLatLng) {
                        engineMap.clearMarkers();
                        engineMap.addMarker(dataLatLng, {
                            icon_options: {}
                        });
                        $("input[name=map_lat]").attr("value", dataLatLng[0]);
                        $("input[name=map_lng]").attr("value", dataLatLng[1]);
                    });
                    engineMap.on('zoom_changed', function (zoom) {
                        $("input[name=map_zoom]").attr("value", zoom);
                    });
                    engineMap.searchBox($('.bc_searchbox'),function (dataLatLng) {
                        engineMap.clearMarkers();
                        engineMap.addMarker(dataLatLng, {
                            icon_options: {}
                        });
                        $("input[name=map_lat]").attr("value", dataLatLng[0]);
                        $("input[name=map_lng]").attr("value", dataLatLng[1]);
                    });
                }
            });

            $(".open-edit-input").on("click", function (e) {
                e.preventDefault();
                var val = $(this).text();
                $(this).after('<input type="text" name="slug" value="'+val+'">').remove();
            });

                var condition_object = 'select, input[type="radio"]:checked, input[type="text"], input[type="hidden"], input.ot-numeric-slider-hidden-input,input[type="checkbox"]'; // condition function to show and hide sections

                $('body').on('change.conditionals', condition_object, function (e) {
                    run_condition_engine();
                });
                run_condition_engine();

                function run_condition_engine() {
                    $('[data-condition]').each(function () {
                        var passed;
                        var conditions = get_match_condition($(this).data('condition'));
                        var operator = ($(this).data('operator') || 'and').toLowerCase();
                        $.each(conditions, function (index, condition) {
                            var target = $('[name=' + condition.check + ']');
                            var targetEl = !!target.length && target.first();

                            if (!target.length || !targetEl.length && condition.value.toString() != '') {
                                return;
                            }

                            var v1 = targetEl.length ? targetEl.val().toString() : '';
                            var v2 = condition.value.toString();
                            var result;

                            if (targetEl.length && targetEl.attr('type') == 'radio') {
                                v1 = $('[name=' + condition.check + ']:checked').val();
                            }

                            if (targetEl.length && targetEl.attr('type') == 'checkbox') {
                                v1 = targetEl.is(':checked') ? v1 : '';
                            }

                            switch (condition.rule) {
                                case 'less_than':
                                    result = parseInt(v1) < parseInt(v2);
                                    break;

                                case 'less_than_or_equal_to':
                                    result = parseInt(v1) <= parseInt(v2);
                                    break;

                                case 'greater_than':
                                    result = parseInt(v1) > parseInt(v2);
                                    break;

                                case 'greater_than_or_equal_to':
                                    result = parseInt(v1) >= parseInt(v2);
                                    break;

                                case 'contains':
                                    result = v1.indexOf(v2) !== -1 ? true : false;
                                    break;

                                case 'is':
                                    result = v1 == v2;
                                    break;

                                case 'not':
                                    result = v1 != v2;
                                    break;
                            }

                            if ('undefined' == typeof passed) {
                                passed = result;
                            }

                            switch (operator) {
                                case 'or':
                                    passed = passed || result;
                                    break;

                                case 'and':
                                default:
                                    passed = passed && result;
                                    break;
                            }
                        });

                        if (passed) {
                            $(this).show();
                        } else {
                            $(this).hide();
                        }

                        passed = undefined;
                    });
                }

                function get_match_condition(condition) {
                    var match;
                    var regex = /(.+?):(is|not|contains|less_than|less_than_or_equal_to|greater_than|greater_than_or_equal_to)\((.*?)\),?/g;
                    var conditions = [];

                    while (match = regex.exec(condition)) {
                        conditions.push({
                            'check': match[1],
                            'rule': match[2],
                            'value': match[3] || ''
                        });
                    }

                    return conditions;
                } // Please do not edit condition section if you don't understand what it is
        })
    </script>

@endsection
