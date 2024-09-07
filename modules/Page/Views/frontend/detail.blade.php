@extends ('layouts.app')
@section ('content')
    @if($row->template_id)
        <div class="page-template-content">
            {!! $row->getProcessedContent() !!}
        </div>
    @else
    
    <section class="inner_page_breadcrumb" style="background-image: url('https://contrafinder.com/public/designimages/banner-contrafinder.png');"  >
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="breadcrumb_content">
                    <h2 class="breadcrumb_title">{!! clean($translation->title) !!}</h2>
                    <ol class="breadcrumb">
                        <?php $actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";  ?>
                        <li style="margin:0px;" class="breadcrumb-item"><a href="https://contrafinder.com">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                            <a href="<?= $actual_link ?>">{!! clean($translation->title) !!}</a>
                                                                    </li>
                                                                        </ol>
                </div>
            </div>
        </div>
    </div>
</section>
    
    
       
            </div>
           
            
            <div class="container blog-content" style="padding: 5%;">
                
                {!! $translation->content !!}
            </div>
        </div>
    @endif
@endsection

