<div class="app-title">
    <div>
        <h1><i class="fas fa-th-list"></i> @isset($title) {{$title}} @endisset</h1>
        <p>@isset($description) {{$description}} @endisset</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{admin_route()}}"><i class="fas fa-tachometer-alt app-menu__icon"></i></a>
        </li>
        @isset ($current_route)
        <li class="breadcrumb-item"><a href="{{admin_route($current_route)}}">{{$current_link}}</a></li>
        @endisset
        @isset ($active_action)
        <li class="breadcrumb-item active">{{$active_action}}</li>
        @endisset
    </ul>
</div>