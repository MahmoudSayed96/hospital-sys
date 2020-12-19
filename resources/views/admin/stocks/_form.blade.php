@csrf
<div class="row">
    <div class="col-12 col-md-6">
        {{-- Name --}}
        <div class="form-group">
            @php
            $input = 'name';
            @endphp
            <label for="{{$input}}">Product Name<strong class="text-danger h5">*</strong></label>
            <input type="text" class="form-control {{$input}} @error($input) is-invalid @enderror" name="{{$input}}"
                id="{{$input}}" value="{{isset($row) ? $row->{$input} : old($input)}}" placeholder="Enter product name"
                required>
            @error($input)
            <div class="form-control-feedback text-danger">{{$message}}</div>
            @enderror
        </div>
    </div>
    <div class="col-12 col-md-6">
        {{-- Serial --}}
        <div class="form-group">
            @php
            $input = 'serial_no';
            @endphp
            <label for="{{$input}}">Serial No<strong class="text-danger h5">*</strong></label>
            <input type="text" class="form-control {{$input}} @error($input) is-invalid @enderror" name="{{$input}}"
                id="{{$input}}" value="{{isset($row) ? $row->{$input} : old($input)}}"
                placeholder="Enter product serial number" required>
            @error($input)
            <div class="form-control-feedback text-danger">{{$message}}</div>
            @enderror
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-md-6">
        {{-- Quantity --}}
        <div class="form-group">
            @php
            $input = 'quantity';
            @endphp
            <label for="{{$input}}">Quantity<strong class="text-danger h5">*</strong></label>
            <input type="number" min="0" step="1" class="form-control {{$input}} @error($input) is-invalid @enderror"
                name="{{$input}}" id="{{$input}}" value="{{isset($row) ? $row->{$input} : old($input)}}" required>
            @error($input)
            <div class="form-control-feedback text-danger">{{$message}}</div>
            @enderror
        </div>
    </div>
    <div class="col-12 col-md-6">
        {{-- Price --}}
        <div class="form-group">
            @php
            $input = 'price';
            @endphp
            <label for="{{$input}}">Price<strong class="text-danger h5">*</strong></label>
            <input type="number" min="0.0" class="form-control {{$input}} @error($input) is-invalid @enderror"
                name="{{$input}}" id="{{$input}}" value="{{isset($row) ? $row->{$input} : old($input)}}" required>
            @error($input)
            <div class="form-control-feedback text-danger">{{$message}}</div>
            @enderror
        </div>
    </div>
</div>
{{-- Type --}}
@php
$input = 'type';
@endphp
<div class="form-group">
    <label for="{{$input}}">Type<strong class="text-danger h5">*</strong></label>
    <select class="form-control {{$input}} @error($input) is-invalid @enderror" name="{{$input}}" id="{{$input}}"
        value="{{isset($row) ? $row->{$input} : old($input)}}">
        <option value="0" class="hospital">Hospital</option>
        <option value="1" class="lab">Lab</option>
    </select>
    @error($input)
    <div class="form-control-feedback text-danger">{{$message}}</div>
    @enderror
</div>