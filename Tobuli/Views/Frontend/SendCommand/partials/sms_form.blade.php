@if (!Auth::User()->sms_gateway)
    <div class="alert alert-danger" role="alert">{!!trans('front.sms_gateway_disabled')!!}</div>
@else
    @if (empty($devices_sms))
        <div class="alert alert-danger" role="alert">{!!trans('front.no_devices_with_sim_number')!!}</div>
    @endif

    <div class="form-group">
        {!!Form::label('devices', trans('validation.attributes.devices').'*:')!!}
        @if (empty($devices_sms))
            {!!Form::text('devices[]', null, ['class' => 'form-control', 'disabled' => 'disabled'])!!}
        @else
            {!!Form::select('devices[]', $devices_sms, isset($device_id) ? $device_id : null, ['class' => 'form-control', 'multiple' => 'multiple', 'data-live-search' => 'true', 'data-actions-box' => 'true'])!!}
        @endif
        {!!Form::hidden('devices_fake')!!}
        <small>{!!trans('front.add_sim_number_info')!!}</small>
    </div>

    <div class="form-group">
        {!!Form::label('sms_template_id', trans('validation.attributes.sms_template_id').':')!!}
        {!!Form::select('sms_template_id', $sms_templates, null, ['class' => 'form-control', 'data-url' => route('user_sms_templates.get_message')])!!}
        <small>{!!trans('front.add_sms_template_info')!!}</small>
    </div>

    <div class="form-group">
        {!!Form::label('message', trans('validation.attributes.message').'*:')!!}
        {!!Form::textarea('message_sms', (isset($message) ? $message : null), ['class' => 'form-control', 'rows' => 3])!!}
        {!!Form::hidden('message_fake')!!}
    </div>

    <div class="send_command_result" style="display: none;">
        <div>
            <p>{!!trans('front.get_request')!!}:</p>
            <p class="get_request result_parse"></p>
        </div>
        <div>
            <p>{!!trans('front.response')!!}:</p>
            <p class="get_result result_parse"></p>
        </div>
    </div>
@endif