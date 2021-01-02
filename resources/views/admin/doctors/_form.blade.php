@csrf
<div class="row">
    <div class="col-12 col-md-6">
        {{-- Name --}}
        <div class="form-group">
            @php
            $input = 'name';
            @endphp
            <label for="{{$input}}">Doctor Name<strong class="text-danger h5">*</strong></label>
            <input type="text" class="form-control {{$input}} @error($input) is-invalid @enderror" name="{{$input}}"
                id="{{$input}}" value="{{isset($row) ? $row->{$input} : old($input)}}" placeholder="Enter doctor name"
                required>
            @error($input)
            <div class="form-control-feedback text-danger">{{$message}}</div>
            @enderror
        </div>
    </div>
    <div class="col-12 col-md-6">
        {{-- Degree --}}
        <div class="form-group">
            @php
            $input = 'degree';
            @endphp
            <label for="{{$input}}">Degree<strong class="text-danger h5">*</strong></label>
            <input type="text" class="form-control {{$input}} @error($input) is-invalid @enderror" name="{{$input}}"
                id="{{$input}}" value="{{isset($row) ? $row->{$input} : old($input)}}"
                placeholder="Ex.Doctor of Surgery (DS, DSurg)">
            @error($input)
            <div class="form-control-feedback text-danger">{{$message}}</div>
            @enderror
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 col-md-6">
        {{-- Username --}}
        <div class="form-group">
            @php
            $input = 'username';
            @endphp
            <label for="{{$input}}">Username<strong class="text-danger h5">*</strong></label>
            <input type="text" class="form-control {{$input}} @error($input) is-invalid @enderror" name="{{$input}}"
                id="{{$input}}" value="{{isset($row) ? $row->{$input} : old($input)}}" required>
            @error($input)
            <div class="form-control-feedback text-danger">{{$message}}</div>
            @enderror
        </div>
    </div>
    <div class="col-12 col-md-6">
        {{-- Email --}}
        <div class="form-group">
            @php
            $input = 'email';
            @endphp
            <label for="{{$input}}">Email<strong class="text-danger h5">*</strong></label>
            <input type="email" class="form-control {{$input}} @error($input) is-invalid @enderror" name="{{$input}}"
                id="{{$input}}" value="{{isset($row) ? $row->{$input} : old($input)}}" placeholder="mail@example.com">
            @error($input)
            <div class="form-control-feedback text-danger">{{$message}}</div>
            @enderror
        </div>
    </div>
</div>

{{-- Passwords --}}
<div class="row">
    <div class="col-12 col-md-6">
        {{-- Password --}}
        <div class="form-group">
            @php
            $input = 'password';
            @endphp
            <label for="{{$input}}">Password<strong class="text-danger h5">*</strong></label>
            <div class="d-flex align-items-center">
                <input type="password" class="form-control mr-1 {{$input}} @error($input) is-invalid @enderror"
                    name="{{$input}}" id="{{$input}}" autocomplete="new-password">
                <span class="password" style="cursor: pointer;"><i class="fas fa-eye-slash pass"></i></span>
            </div>
            @error($input)
            <div class="form-control-feedback text-danger">{{$message}}</div>
            @enderror
        </div>
    </div>
    <div class="col-12 col-md-6">
        {{-- Confirm Password --}}
        <div class="form-group">
            @php
            $input = 'password_confirmation';
            @endphp
            <label for="{{$input}}">Password Confirmation<strong class="text-danger h5">*</strong></label>
            <div class="d-flex align-items-center">
                <input type="password" class="form-control mr-1 {{$input}} @error($input) is-invalid @enderror"
                    name="{{$input}}" id="{{$input}}" autocomplete="new-password">
                <span class="password_confirmation" style="cursor: pointer;"><i
                        class="fas fa-eye-slash pass-confirm"></i></span>
            </div>
            @error($input)
            <div class="form-control-feedback text-danger">{{$message}}</div>
            @enderror
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 col-md-6">
        {{-- Date of Birth --}}
        <div class="form-group">
            @php
            $input = "date_of_birth"
            @endphp
            <label for="{{$input}}">Date Of Birth</label>
            <input class="form-control @error($input) is-invalide @enderror" type="text" name="{{$input}}" id="demoDate"
                value="{{isset($row->{$input}) ? $row->{$input} : old($input)}}">
            @error($input)
            <div class="form-control-feedback text-danger">{{$message}}</div>
            @enderror
        </div>
    </div>
    <div class="col-12 col-md-6">
        {{-- Gender --}}
        @php
        $input = 'gender';
        @endphp
        <label>Gender<strong class="text-danger h5">*</strong></label>
        <div class="form-group d-flex">
            <div class="animated-radio-button mr-3">
                <label for="male">
                    <input class="form-check-input male" id="male" type="radio" name="{{$input}}" value="1"
                        {{isset($row) && $row->{$input} == 1 ? 'checked' : ''}}>
                    <span class="label-text">Male</span>
                </label>
            </div>
            <div class="animated-radio-button">
                <label for="female">
                    <input class="form-check-input female" id="female" type="radio" name="{{$input}}" value="0"
                        {{isset($row) && $row->{$input} == 0 ? 'checked' : ''}}>
                    <span class="label-text">Female</span>
                </label>
            </div>
            @error($input)
            <div class="form-control-feedback text-danger">{{$message}}</div>
            @enderror
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 col-md-4">
        {{-- Department --}}
        <div class="form-group">
            @php
            $input = 'department_id';
            @endphp
            <label for="{{$input}}">Department<strong class="text-danger h5">*</strong></label>
            <select class="form-control select2 {{$input}} @error($input) is-invalid @enderror" name="{{$input}}"
                id="{{$input}}" required>
                @isset($departments)
                <optgroup label="Select Department">
                    <option></option>
                    @foreach ($departments as $department)
                    <option value="{{$department->id}}"
                        {{(isset($row->department_id) && $row->department_id == $department->id) ? 'selected' : ''}}>
                        {{$department->name}}</option>
                    @endforeach
                </optgroup>
                @endisset
            </select>
            @error($input)
            <div class="form-control-feedback text-danger">{{$message}}</div>
            @enderror
        </div>
    </div>
    <div class="col-12 col-md-4">
        {{-- Specialist --}}
        <div class="form-group">
            @php
            $input = 'specialist_id';
            @endphp
            <label for="{{$input}}">Specialist<strong class="text-danger h5">*</strong></label>
            <select class="form-control select2 {{$input}} @error($input) is-invalid @enderror" name="{{$input}}"
                id="{{$input}}" required>
                @isset($specialists)
                <optgroup label="Select Specialist">
                    <option></option>
                    @foreach ($specialists as $specialist)
                    <option value="{{$specialist->id}}"
                        {{(isset($row->specialist_id) && $row->specialist_id == $specialist->id) ? 'selected' : ''}}>
                        {{$specialist->name}}</option>
                    @endforeach
                </optgroup>
                @endisset
            </select>
            @error($input)
            <div class="form-control-feedback text-danger">{{$message}}</div>
            @enderror
        </div>
    </div>
    <div class="col-12 col-md-4">
        {{-- Salary --}}
        <div class="form-group">
            @php
            $input = 'salary';
            @endphp
            <label for="{{$input}}">Salary<strong class="text-danger h5">*</strong></label>
            <input type="number" min="0.0" class="form-control {{$input}} @error($input) is-invalid @enderror"
                name="{{$input}}" id="{{$input}}" value="{{isset($row) ? $row->{$input} : old($input)}}" required>
            @error($input)
            <div class="form-control-feedback text-danger">{{$message}}</div>
            @enderror
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 col-md-4">
        {{-- Phone --}}
        <div class="form-group mb-sm-1">
            @php
            $input = "phone"
            @endphp
            <label for="{{$input}}">Phone</label>
            <input class="form-control @error($input) is-invalid @enderror" type="text" name="{{$input}}"
                id="{{$input}}" value="{{isset($row->{$input}) ? $row->{$input} : old($input)}}">
            @error($input)
            <div class="form-control-feedback text-danger">{{$message}}</div>
            @enderror
        </div>
    </div>
    {{-- Address --}}
    <div class="col-12 col-md-4">
        {{-- Gov --}}
        <div class="form-group">
            @php
            $input = "governorate_id"
            @endphp
            <label for="{{$input}}">
                <strong>Governorate<strong class="text-danger h5">*</strong></strong>
            </label>
            <select class="select2 form-control @error($input) is-invalid @enderror" type="text" name="{{$input}}"
                id="{{$input}}" required>
                @isset($govs)
                <optgroup label="Select Governorate">
                    <option></option>
                    @foreach ($govs as $gov)
                    <option value="{{$gov->id}}"
                        {{(isset($row->governorate_id) && $row->governorate_id == $gov->id) ? 'selected' : ''}}>
                        {{$gov->name}}</option>
                    @endforeach
                </optgroup>
                @endisset
            </select>
            @error($input)
            <div class="form-control-feedback text-danger">{{$message}}</div>
            @enderror
        </div>
    </div>
    <div class="col-12 col-md-4">
        {{-- City --}}
        <div class="form-group">
            @php
            $input = "city_id"
            @endphp
            <label for="{{$input}}">
                <strong>City<strong class="text-danger h5">*</strong></strong>
            </label>
            <select class="form-control @error($input) is-invalid @enderror" type="text" name="{{$input}}"
                id="{{$input}}" required {{isset($row->city_id) ? '' : 'disabled'}}>
                <optgroup label="Select City" id="cities">
                    <option></option>
                    @isset($row)
                    @foreach ($row->governorate->cities as $city)
                    <option value="{{$city->id}}"
                        {{(isset($row->city_id) && $row->city_id == $city->id) ? 'selected' : ''}}>
                        {{$city->name}}</option>
                    @endforeach
                    @endisset
                </optgroup>
            </select>
            @error($input)
            <div class="form-control-feedback text-danger">{{$message}}</div>
            @enderror
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        {{-- Bio --}}
        @php
        $input = 'bio';
        @endphp
        <div class="form-group">
            <label for="{{$input}}">Bio</label>
            <textarea class="form-control {{$input}} @error($input) is-invalid @enderror" name="{{$input}}" id="editor1"
                rows="5">{{isset($row) ? $row->{$input} : old($input)}}</textarea>
            @error($input)
            <div class="form-control-feedback text-danger">{{$message}}</div>
            @enderror
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 col-md-6">
        {{-- Avatar --}}
        <div class="form-group">
            @php
            $input = "avatar"
            @endphp
            <label>Avatar</label>
            <div class="row">
                <div class="col-12 col-md-3">
                    <img src="{{isset($row->avatar) ? asset($row->avatar) : asset('uploads/images/user-avatar.jpg')}}"
                        class="img-fluid img-thumbnail rounded-circle" id="imgPreview" alt="avatar" width="100"
                        height="100" style="min-width:100px;min-height:100px;">
                </div>
                <div class="col-12 col-md-9 overflow-hidden">
                    <input type="file" id="imgInp" class="form-control" name="{{$input}}">
                    @error($input)
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
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