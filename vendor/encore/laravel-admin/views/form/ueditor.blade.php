<div class="form-group {!! !$errors->has($errorKey) ?: 'has-error' !!}">

    <label for="{{$id}}" class="col-sm-{{$width['label']}} control-label">{{$label}}</label>

    <div class="col-sm-{{$width['field']}}">

        @include('admin::form.error')

        <script id="{{$name}}" name="{{$name}}" type="text/plain">{{ $placeholder }}</script>
        {{--<textarea class="form-control" id="{{$id}}" name="{{$name}}" placeholder="{{ $placeholder }}" {!! $attributes !!} >{{ old($column, $value) }}</textarea>--}}

        @include('admin::form.help-block')

    </div>
</div>
