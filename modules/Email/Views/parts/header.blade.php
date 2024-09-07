<div class="" style="">
    <div class="b-container">
        <div class="b-header" style="background:#30c21c;border-radius: 16px 16px 0px 0px;">
            @php $email_header = setting_item_with_lang('email_header') @endphp
            {!! $email_header ? $email_header : sprintf('<h1 class="site-title">%s</h1>',setting_item('site_title','Contrafinder')) !!}
        </div>
    </div>
</div>
