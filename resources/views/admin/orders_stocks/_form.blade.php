@csrf
<div class="row">
    <div class="col-12 col-md-6">
        {{-- Entry/Delivery --}}
        <div class="form-group">
            @php
            $input = 'action';
            @endphp
            <label for="{{$input}}">Entry/Delivery<strong class="text-danger h5">*</strong></label>
            <select class="form-control {{$input}} @error($input) is-invalid @enderror" name="{{$input}}"
                id="{{$input}}" required>
                <option value="0" {{isset($row) && $row->{$input} == 0 ? 'selected' : old($input)}}>Entry</option>
                <option value="1" {{isset($row) && $row->{$input} == 1 ? 'selected' : old($input)}}>Delivery</option>
            </select>
            @error($input)
            <div class="form-control-feedback text-danger">{{$message}}</div>
            @enderror
        </div>
    </div>
    <div class="col-12 col-md-6">
        {{-- Stock Type --}}
        <div class="form-group">
            @php
            $input = 'type';
            @endphp
            <label for="{{$input}}">Entry/Delivery<strong class="text-danger h5">*</strong></label>
            <select class="form-control {{$input}} @error($input) is-invalid @enderror" name="{{$input}}"
                id="{{$input}}" required>
                <option value="0" {{isset($row) && $row->{$input} == 0 ? 'selected' : old($input)}}>Hospital</option>
                <option value="1" {{isset($row) && $row->{$input} == 1 ? 'selected' : old($input)}}>Lab</option>
            </select>
            @error($input)
            <div class="form-control-feedback text-danger">{{$message}}</div>
            @enderror
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-md-6">
        {{-- Product name --}}
        <div class="form-group">
            @php
            $input = 'stock_id';
            @endphp
            <label for="{{$input}}">Product Name<strong class="text-danger h5">*</strong></label>
            <select class="form-control {{$input}} @error($input) is-invalid @enderror" name="{{$input}}"
                id="{{$input}}" required>
                @isset($stocks)
                <optgroup label="Select Product">
                    <option></option>
                    @foreach ($stocks as $stock)
                    <option value="{{$stock->id}}">{{$stock->name}}</option>
                    @endforeach
                </optgroup>
                @endisset
            </select>
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
            <label for="{{$input}}">Serial No</label>
            <input type="number" min="0" step="1" class="form-control {{$input}} @error($input) is-invalid @enderror"
                name="{{$input}}" id="{{$input}}" required readonly>
            @error($input)
            <div class="form-control-feedback text-danger">{{$message}}</div>
            @enderror
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-md-6">
        {{-- Available --}}
        <div class="form-group">
            @php
            $input = 'available_qut';
            @endphp
            <label for="{{$input}}">Available</label>
            <input type="number" min="0" step="1" class="form-control {{$input}} @error($input) is-invalid @enderror"
                name="{{$input}}" id="{{$input}}" value="{{isset($row) ? $row->{$input} : old($input)}}" required
                readonly>
            @error($input)
            <div class="form-control-feedback text-danger">{{$message}}</div>
            @enderror
        </div>
    </div>
    <div class="col-12 col-md-6">
        {{-- Quantity --}}
        <div class="form-group">
            @php
            $input = 'quantity';
            @endphp
            <label for="{{$input}}">Quantity<strong class="text-danger h5">*</strong></label>
            <input type="number" min="0.0" class="form-control {{$input}} @error($input) is-invalid @enderror"
                name="{{$input}}" id="{{$input}}" value="{{isset($row) ? $row->{$input} : old($input)}}" required>
            @error($input)
            <div class="form-control-feedback text-danger">{{$message}}</div>
            @enderror
        </div>
    </div>
</div>