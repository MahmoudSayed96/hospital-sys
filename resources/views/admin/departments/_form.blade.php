@csrf
{{-- Name --}}
@php
$input = 'name';
@endphp
<div class="form-group">
    <label for="{{$input}}">Department Name<strong class="text-danger h5">*</strong></label>
    <input type="text" class="form-control {{$input}} @error($input) is-invalid @enderror" name="{{$input}}"
        id="{{$input}}" value="{{isset($row) ? $row->{$input} : old($input)}}" placeholder="Enter department name"
        required>
    @error($input)
    <div class="form-control-feedback text-danger">{{$message}}</div>
    @enderror
</div>
{{-- Description --}}
@php
$input = 'description';
@endphp
<div class="form-group">
    <label for="{{$input}}">Department Description</label>
    <textarea class="form-control {{$input}} @error($input) is-invalid @enderror" name="{{$input}}" id="{{$input}}"
        rows="5">{{isset($row) ? $row->{$input} : old($input)}}</textarea>
    @error($input)
    <div class="form-control-feedback text-danger">{{$message}}</div>
    @enderror
</div>
{{-- Status --}}
@php
$input = 'status';
@endphp
<h5>Status<strong class="text-danger h5">*</strong></h5>
<div class="form-group d-flex">
    <div class="animated-radio-button mr-3">
        <label for="active">
            <input class="form-check-input active" id="active" type="radio" name="{{$input}}" value="1">
            <span class="label-text">Active</span>
        </label>
    </div>
    <div class="animated-radio-button">
        <label for="inactive">
            <input class="form-check-input inactive" id="inactive" type="radio" name="{{$input}}" value="0">
            <span class="label-text">InActive</span>
        </label>
    </div>
    @error($input)
    <div class="form-control-feedback text-danger">{{$message}}</div>
    @enderror
</div>