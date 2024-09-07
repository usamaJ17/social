<?php
$banner_images = '';
if (check_user_type() != 'customer' && request()->segment(3) != 'change-password') {
   $banner_images = isset($row) ? $row->getBannerImages() : "";
}

?>

    @if(!empty($banner_images))
    <style>
        .banner-style-one .slide:before {
    background-color: rgb(6 5 5 / 12%) !important; 
    bottom: 0;
    content: "";
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
} 

.slide
{
    border-radius: 0px !important;
}
    </style>
        <div class="row">
            <div class="col-lg-12">
                <?php 
                 foreach($banner_images as $key => $val)
                 
                 {
                     $data_image = $val['large'];
                 }
                  ?>
                 
                <div class="main-banner-wrapper home10" <?php  if(sizeof($banner_images) == 1) {  ?> style="background-image: url(<?php echo $data_image; ?>) !important;
    z-index: -14839543;
    background-size: cover;"  <?php }  ?> >
                    <div class="banner-style-one owl-theme owl-carousel">

                        @foreach($banner_images as $key => $val)
                        <div class="slide slide-one" style="background-image: url({{ $val['large'] }}); height: 200px;"></div>
                        @endforeach

                    </div>
                    <div class="carousel-btn-block banner-carousel-btn">
                        <span class="carousel-btn left-btn"><i class="flaticon-arrow-pointing-to-left left"></i></span>
                        <span class="carousel-btn right-btn"><i class="flaticon-arrow-pointing-to-right right"></i></span>
                    </div><!-- /.carousel-btn-block banner-carousel-btn -->
                </div><!-- /.main-banner-wrapper -->
            </div>
        </div>
       
    @else
    <div>
        <img src="https://contrafinder.com/public/images/profile-bg.png" style="height: 300px;
    width: 100%;
    object-fit: cover;
" />
    </div>
    @endif
    