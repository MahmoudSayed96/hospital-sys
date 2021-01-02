<div class="row mb-4">
    <div class="col-12">
        <div class="buttons d-flex align-items-center justify-content-end">
            {{isset($header_btns) ? $header_btns : ''}}
            <a href="@isset($add_btn_route) {{$add_btn_route}} @endisset"
                class="btn btn-primary badge badge-pill px-2 py-2 ml-3">
                <i class="fas {{isset($icon) ? $icon : 'fa-plus'}}"></i>
                @isset($add_btn_text)
                <strong>{{strtoupper($add_btn_text)}}</strong>
                @endisset
            </a>
        </div>
    </div>
</div>