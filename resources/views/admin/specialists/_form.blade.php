@csrf
{{-- Name --}}
@php
$input = 'name';
@endphp
<div class="form-group">
    <label for="{{$input}}">Specialist Name<strong class="text-danger h5">*</strong></label>
    <input type="text" class="form-control {{$input}} @error($input) is-invalid @enderror" name="{{$input}}"
        id="{{$input}}" value="{{isset($row) ? $row->{$input} : old($input)}}" placeholder="Enter specialist name"
        required>
    @error($input)
    <div class="form-control-feedback text-danger">{{$message}}</div>
    @enderror
</div>