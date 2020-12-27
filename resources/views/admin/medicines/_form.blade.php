@csrf
<div class="row">
    <div class="col-12 col-md-6">
        {{-- Name --}}
        <div class="form-group">
            @php
            $input = 'name';
            @endphp
            <label for="{{$input}}">Medicine Name<strong class="text-danger h5">*</strong></label>
            <input type="text" class="form-control {{$input}} @error($input) is-invalid @enderror" name="{{$input}}"
                id="{{$input}}" value="{{isset($row) ? $row->{$input} : old($input)}}" placeholder="Enter medicine name"
                required>
            @error($input)
            <div class="form-control-feedback text-danger">{{$message}}</div>
            @enderror
        </div>
    </div>
    <div class="col-12 col-md-6">
        {{-- Expire Date --}}
        <div class="form-group">
            @php
            $input = "expire_date"
            @endphp
            <label for="{{$input}}">Stablish Date</label>
            <input class="form-control @error($input) is-invalide @enderror" type="text" name="{{$input}}" id="demoDate"
                value="{{isset($row->{$input}) ? $row->{$input} : ''}}">
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

<div class="row">
    <div class="col-12 col-md-6">
        {{-- Alert Qty --}}
        <div class="form-group">
            @php
            $input = 'alert_qty';
            @endphp
            <label for="{{$input}}">Alert Quantity</label>
            <input type="number" min="0" step="1" class="form-control {{$input}} @error($input) is-invalid @enderror"
                name="{{$input}}" id="{{$input}}" value="{{isset($row) ? $row->{$input} : old($input)}}">
            @error($input)
            <div class="form-control-feedback text-danger">{{$message}}</div>
            @enderror
        </div>
    </div>
    <div class="col-12 col-md-6">
        {{-- Status --}}
        @php
        $input = 'status';
        @endphp
        <label>Status<strong class="text-danger h5">*</strong></label>
        <div class="form-group d-flex">
            <div class="animated-radio-button mr-3">
                <label for="active">
                    <input class="form-check-input active" id="active" type="radio" name="{{$input}}" value="1"
                        {{isset($row) && $row->{$input} == 1 ? 'checked' : ''}}>
                    <span class="label-text">Active</span>
                </label>
            </div>
            <div class="animated-radio-button">
                <label for="inactive">
                    <input class="form-check-input inactive" id="inactive" type="radio" name="{{$input}}" value="0"
                        {{isset($row) && $row->{$input} == 0 ? 'checked' : ''}}>
                    <span class="label-text">InActive</span>
                </label>
            </div>
            @error($input)
            <div class="form-control-feedback text-danger">{{$message}}</div>
            @enderror
        </div>
    </div>
</div>
{{-- Description --}}
@php
$input = 'description';
@endphp
<div class="form-group">
    <label for="{{$input}}">Medicine Description/How it Used?</label>
    <textarea class="form-control {{$input}} @error($input) is-invalid @enderror" name="{{$input}}" id="editor1"
        rows="5">{{isset($row) ? $row->{$input} : old($input)}}</textarea>
    @error($input)
    <div class="form-control-feedback text-danger">{{$message}}</div>
    @enderror
</div>

@push('scripts')
<script>
    // Ckeditor.
    CKEDITOR.replace("editor1");
</script>
@endpush