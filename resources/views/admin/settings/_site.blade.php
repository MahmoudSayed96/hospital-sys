<form action="{{admin_route('settings.site.update')}}" method="POST" enctype="multipart/form-data">
    @csrf
    {{-- Name --}}
    @php
    $input = "site_name"
    @endphp
    <div class="form-group">
        <label for="{{$input}}">
            <i class="fas fa-laptop fa-lg mr-2"></i> <strong>Site Name</strong>
        </label>
        <input class="form-control @error($input) is-invalide @enderror" type="text" name="{{$input}}" id="{{$input}}"
            required>
        @error($input)
        <div class="form-control-feedback text-danger">{{$message}}</div>
        @enderror
    </div>
    {{-- Email --}}
    @php
    $input = "site_email"
    @endphp
    <div class="form-group">
        <label for="{{$input}}">
            <i class="fas fa-envelope fa-lg mr-2"></i> <strong>Email</strong>
        </label>
        <input class="form-control @error($input) is-invalide @enderror" type="email" name="{{$input}}" id="{{$input}}"
            required>
        @error($input)
        <div class="form-control-feedback text-danger">{{$message}}</div>
        @enderror
    </div>
    {{-- Logo --}}
    {{-- <div class="form-group">
        <label>Site Logo</label>
        <input class="form-control dropzone dz-clickable" type="file">
    </div> --}}
    {{-- Phone & Fax --}}
    <div class="form-group">
        <div class="row">
            <div class="col-12 col-md-4">
                @php
                $input = "site_phone"
                @endphp
                <label for="{{$input}}">
                    <i class="fas fa-phone fa-lg mr-2"></i>
                    <strong>Phone</strong>
                </label>
                <input class="form-control @error($input) is-invalide @enderror" type="text" name="{{$input}}"
                    id="{{$input}}">
                @error($input)
                <div class="form-control-feedback text-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="col-12 col-md-4">
                @php
                $input = "site_fax"
                @endphp
                <label for="{{$input}}">
                    <i class="fas fa-fax fa-lg mr-2"></i> <strong>Fax</strong>
                </label>
                <input class="form-control @error($input) is-invalide @enderror" type="text" name="{{$input}}"
                    id="{{$input}}">
                @error($input)
                <div class="form-control-feedback text-danger">{{$message}}</div>
                @enderror
            </div>
            {{-- Stablish Date --}}
            <div class="col-12 col-md-4">
                @php
                $input = "stablish_date"
                @endphp
                <label for="{{$input}}">
                    <i class="fas fa-calendar fa-lg mr-2"></i> <strong>Stablish Date</strong>
                </label>
                <input class="form-control @error($input) is-invalide @enderror" type="text" name="{{$input}}"
                    id="{{$input}}">
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
            rows="5"></textarea>
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
        <input class="form-control @error($input) is-invalide @enderror" type="text" name="{{$input}}" id="{{$input}}">
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
        <input class="form-control @error($input) is-invalide @enderror" type="text" name="{{$input}}" id="{{$input}}">
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
        <input class="form-control @error($input) is-invalide @enderror" type="text" name="{{$input}}" id="{{$input}}">
        @error($input)
        <div class="form-control-feedback text-danger">{{$message}}</div>
        @enderror
    </div>
    <div class="row mb-10">
        <div class="col-md-12">
            <button class="btn btn-primary" type="submit"><i class="fas fa-check-circle fa-w"></i>
                Save</button>
        </div>
    </div>
</form>