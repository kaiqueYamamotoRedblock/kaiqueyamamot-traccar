@if ($image)
    @if ($image->isImage())
        <img class="img-full-width" src="{{ route('device_media.display_image', [$item->org_id, $image->name]) }}"/>
    @else
        <div class="text-center">
            <h4>
                {{trans('front.file_could_not_be_displayed')}}
            </h4>

            <a target="_blank" class="btn btn-primary "
               href="{!! route('device_media.download_file', [$item->org_id, $image->name]) !!} ">
                {{trans('admin.download')}}
            </a>
        </div>
    @endif

    <div class="row">
        <div class="col-xs-12 col-sm-9">
            <div class="pull-left">
                <h5 class="text-left">
                    {{trans('front.address')}}: {{  getGeoAddress($item->lat, $item->lng) }}
                </h5>
            </div>
        </div>
        <div class="col-xs-12 col-sm-3">
            <div class="pull-right">
                <h5>
                    {{trans('front.time')}}: {{ Formatter::time()->convert($image->created_at) }}
                </h5>
            </div>
        </div>
    </div>

    <script>
        app.devices.initDeviceIn('mapForPhoto', {!! json_encode($item) !!});
    </script>
@else
    <h4>{{trans('front.file_could_not_be_displayed')}}</h4>
@endif
