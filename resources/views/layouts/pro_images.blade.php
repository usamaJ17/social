@if(is_default_lang())
    <div class="panel">
        <div class="panel-title"><strong>{{__("Project Images")}}</strong></div>
        <div class="panel-body">
            {!! \Modules\Media\Helpers\FileHelper::fieldGalleryUpload('project_photos',$row->project_photos) !!}
        </div>
    </div>
@endif