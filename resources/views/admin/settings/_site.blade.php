<form action="{{admin_route('settings.site.update')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{$row->id}}">
    {{-- Name --}}
    <div class="form-group">
        @php
        $input = "site_name"
        @endphp
        <label for="{{$input}}">
            <i class="fas fa-laptop fa-lg mr-2"></i> <strong>Site Name</strong>
        </label>
        <input class="form-control @error($input) is-invalide @enderror" type="text" name="{{$input}}" id="{{$input}}"
            value="{{isset($row->{$input}) ? $row->{$input} : ''}}" required>
        @error($input)
        <div class="form-control-feedback text-danger">{{$message}}</div>
        @enderror
    </div>
    {{-- Email --}}
    <div class="form-group">
        @php
        $input = "site_email"
        @endphp
        <label for="{{$input}}">
            <i class="fas fa-envelope fa-lg mr-2"></i> <strong>Email</strong>
        </label>
        <input class="form-control @error($input) is-invalide @enderror" type="email" name="{{$input}}" id="{{$input}}"
            value="{{isset($row->{$input}) ? $row->{$input} : ''}}" required>
        @error($input)
        <div class="form-control-feedback text-danger">{{$message}}</div>
        @enderror
    </div>
    {{-- Stablish Date --}}
    <div class="form-group">
        @php
        $input = "stablish_date"
        @endphp
        <label for="{{$input}}">
            <i class="fas fa-calendar fa-lg mr-2"></i> <strong>Stablish Date</strong>
        </label>
        <input class="form-control @error($input) is-invalide @enderror" type="text" name="{{$input}}" id="demoDate"
            value="{{isset($row->{$input}) ? $row->{$input} : ''}}">
        @error($input)
        <div class="form-control-feedback text-danger">{{$message}}</div>
        @enderror
    </div>
    {{-- Phone & Telephone & Fax --}}
    <div class="form-group">
        <div class="row">
            <div class="col-12 col-md-4 mb-sm-1">
                @php
                $input = "site_phone"
                @endphp
                <label for="{{$input}}">
                    <i class="fas fa-phone fa-lg mr-2"></i>
                    <strong>Phone</strong>
                </label>
                <input class="form-control @error($input) is-invalide @enderror" type="text" name="{{$input}}"
                    id="{{$input}}" value="{{isset($row->{$input}) ? $row->{$input} : ''}}">
                @error($input)
                <div class="form-control-feedback text-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="col-12 col-md-4 mb-sm-1">
                @php
                $input = "site_telephone"
                @endphp
                <label for="{{$input}}">
                    <i class="fas fa-home fa-lg mr-2"></i>
                    <strong>Telephone</strong>
                </label>
                <input class="form-control @error($input) is-invalide @enderror" type="text" name="{{$input}}"
                    id="{{$input}}" value="{{isset($row->{$input}) ? $row->{$input} : ''}}">
                @error($input)
                <div class="form-control-feedback text-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="col-12 col-md-4 mb-sm-1">
                @php
                $input = "site_fax"
                @endphp
                <label for="{{$input}}">
                    <i class="fas fa-fax fa-lg mr-2"></i> <strong>Fax</strong>
                </label>
                <input class="form-control @error($input) is-invalide @enderror" type="text" name="{{$input}}"
                    id="{{$input}}" value="{{isset($row->{$input}) ? $row->{$input} : ''}}">
                @error($input)
                <div class="form-control-feedback text-danger">{{$message}}</div>
                @enderror
            </div>
        </div>
    </div>

    {{-- Address --}}
    <div class="form-group">
        @php
        $input = "site_address"
        @endphp
        <label for="{{$input}}">
            <i class="fas fa-map-marked fa-lg mr-2"></i> <strong>Address</strong>
        </label>
        <textarea class="form-control @error($input) is-invalide @enderror" name="{{$input}}" id="{{$input}}" cols="30"
            rows="5">{{isset($row->{$input}) ? $row->{$input} : ''}}</textarea>
        @error($input)
        <div class="form-control-feedback text-danger">{{$message}}</div>
        @enderror
    </div>

    {{-- Faceboook --}}
    <div class="form-group">
        @php
        $input = "site_facebook"
        @endphp
        <label for="{{$input}}">
            <i class="fab fa-facebook fa-lg mr-2"></i> <strong>Facebook</strong>
        </label>
        <input class="form-control @error($input) is-invalide @enderror" type="text" name="{{$input}}" id="{{$input}}"
            value="{{isset($row->{$input}) ? $row->{$input} : ''}}">
        @error($input)
        <div class="form-control-feedback text-danger">{{$message}}</div>
        @enderror
    </div>
    {{-- Twitter --}}
    <div class="form-group">
        @php
        $input = "site_twitter"
        @endphp
        <label for="{{$input}}">
            <i class="fab fa-twitter fa-lg mr-2"></i> <strong>Twitter</strong>
        </label>
        <input class="form-control @error($input) is-invalide @enderror" type="text" name="{{$input}}" id="{{$input}}"
            value="{{isset($row->{$input}) ? $row->{$input} : ''}}">
        @error($input)
        <div class="form-control-feedback text-danger">{{$message}}</div>
        @enderror
    </div>
    {{-- Instagram --}}
    <div class="form-group">
        @php
        $input = "site_instagram"
        @endphp
        <label for="{{$input}}">
            <i class="fab fa-instagram fa-lg mr-2"></i> <strong>Instagram</strong>
        </label>
        <input class="form-control @error($input) is-invalide @enderror" type="text" name="{{$input}}" id="{{$input}}"
            value="{{isset($row->{$input}) ? $row->{$input} : ''}}">
        @error($input)
        <div class="form-control-feedback text-danger">{{$message}}</div>
        @enderror
    </div>

    {{-- Logo --}}
    <div class="form-group">
        @php
        $input = "site_logo"
        @endphp
        <label>
            <i class="fas fa-image fa-lg mr-2"></i>
            <strong>Site Logo</strong>
        </label>
        <div class="row">
            <div class="col-12 col-md-3">
                <img src="{{$row->site_logo}}" class="img-fluid img-thumbnail" width="100px" height="100px"
                    id="imgPreview" alt="logo">
            </div>
            <div class="col-12 col-md-9">
                <input type="file" id="imgInp" class="form-control" name="{{$input}}">
                @error($input)
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
    {{-- Status --}}
    <div class="form-group">
        @php
        $input = 'status';
        @endphp
        <h5>Status</h5>
        <div class="form-group d-flex">
            <div class="animated-radio-button mr-3">
                <label for="active">
                    <input class="form-check-input active" id="active" type="radio" name="{{$input}}" value="1"
                        @isset($row->{$input}) @if($row->{$input} == 1) checked @endif @endisset>
                    <span class="label-text">Active</span>
                </label>
            </div>
            <div class="animated-radio-button">
                <label for="inactive">
                    <input class="form-check-input inactive" id="inactive" type="radio" name="{{$input}}" value="0"
                        @isset($row->{$input}) @if($row->{$input} == 0) checked @endif @endisset>
                    <span class="label-text">InActive</span>
                </label>
            </div>
            @error($input)
            <div class="form-control-feedback text-danger">{{$message}}</div>
            @enderror
        </div>
    </div>

    <div class="row mb-10">
        <div class="col-md-12">
            <button class="btn btn-primary" type="submit"><i class="fas fa-check-circle fa-w"></i>
                Save</button>
        </div>
    </div>
</form>