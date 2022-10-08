@extends(config('addon.checklists')
        ? 'Frontend.Layouts.modal_full'
        : 'Frontend.Layouts.modal',
        config('addon.checklists')
        ? ['modal_class' => 'modal-lg']
        : [])

@section('title')
    <i class="icon services"></i> {{ trans('global.edit') }}
@stop

@section('body')
    @if (Auth::user()->can('view', new \Tobuli\Entities\Checklist))
    <ul class="nav nav-tabs nav-default" role="tablist">
        <li class="active"><a href="#service-tab" role="tab" data-toggle="tab">{!!trans('front.service')!!}</a></li>
        <li><a href="#checklists-index" role="tab" data-toggle="tab">{!!trans('front.checklists')!!}</a></li>
    </ul>
    @endif

    <div class="tab-content">
        <div id="service-tab" class="tab-pane active">
            {!!Form::open(['route' => 'services.update', 'method' => 'PUT'])!!}
            {!!Form::hidden('id', $item->id)!!}
            {!!Form::hidden('device_id', $item->device_id)!!}
            <div class="form-group">
                {!!Form::label('name', trans('validation.attributes.name').':')!!}
                {!!Form::text('name', $item->name, ['class' => 'form-control'])!!}
            </div>
            <div class="form-group">
                {!!Form::label('expiration_by', trans('validation.attributes.expiration_by').':')!!}
                {!!Form::select('expiration_by', $expiration_by, $item->expiration_by, ['class' => 'form-control'])!!}
            </div>
            <div class="form-group">
                {!!Form::label('interval', trans('validation.attributes.interval').':')!!}
                {!!Form::text('interval', $item->interval, ['class' => 'form-control'])!!}
            </div>
            <div class="form-group">
                {!!Form::label('last_service', trans('validation.attributes.last_service').':')!!}
                {!!Form::text('last_service', $item->last_service, ['class' => 'form-control service-datepicker'])!!}
            </div>
            <div class="form-group">
                {!!Form::label('trigger_event_left', trans('validation.attributes.trigger_event_left').':')!!}
                {!!Form::text('trigger_event_left', $item->trigger_event_left, ['class' => 'form-control'])!!}
            </div>
            <div class="form-group">
                {!!Form::label('renew_after_expiration', trans('validation.attributes.renew_after_expiration').':')!!}
                {!!Form::checkbox('renew_after_expiration', 1, $item->renew_after_expiration)!!}
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="form-group">
                        {!!Form::label('current_odometer', trans('validation.attributes.current_odometer').':')!!}
                        {!!Form::text('current_odometer', $odometer_value, ['class' => 'form-control', 'disabled' => 'disabled'])!!}
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="form-group">
                        {!!Form::label('current_engine_hours', trans('validation.attributes.current_engine_hours').':')!!}
                        {!!Form::text('current_engine_hours', $engine_hours_value, ['class' => 'form-control', 'disabled' => 'disabled'])!!}
                    </div>
                </div>
            </div>
            <div class="form-group">
                {!!Form::label('description', trans('validation.attributes.description').':')!!}
                {!!Form::text('description', $item->description, ['class' => 'form-control'])!!}
            </div>
            <div class="form-group">
                {!!Form::label('email', trans('validation.attributes.email').':')!!}
                {!!Form::text('email', $item->email, ['class' => 'form-control'])!!}
            </div>
            @if (Auth::User()->sms_gateway)
                <div class="form-group">
                    {!!Form::label('mobile_phone', trans('validation.attributes.mobile_phone').':')!!}
                    {!!Form::text('mobile_phone', $item->mobile_phone, ['class' => 'form-control'])!!}
                </div>
            @endif
            {!!Form::close()!!}
        </div>

        @if (Auth::user()->can('view', new \Tobuli\Entities\Checklist))
        <div id="checklists-index" class="tab-pane">
            @include('Frontend.Checklist.index')
        </div>
        @endif
    </div>
@stop

@section('buttons')
    <button type="button" class="btn btn-action update">{!!trans('global.save')!!}</button>
    <button type="button" class="btn btn-default" data-dismiss="modal">{!!trans('global.cancel')!!}</button>
@stop
