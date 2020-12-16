@extends('admin.layouts.master')

@section('title','Settings')

@section('content')

@component('admin.shared.breadcrumb',[
'title' => 'Settings',
'description' => 'Global site settings.',
'active_action' => 'Settings',
])
@endcomponent

{{-- Errors Messages --}}
@include('admin.shared._errors')

<div class="row user">
    <div class="col-md-3">
        <div class="tile p-0">
            <ul class="nav flex-column nav-tabs user-tabs">
                <li class="nav-item"><a class="nav-link active" href="#site-settings" data-toggle="tab">Site</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="#roles-settings" data-toggle="tab">Roles</a></li>
            </ul>
        </div>
    </div>
    <div class="col-md-9">
        <div class="tab-content">
            <div class="tab-pane active" id="site-settings">
                <div class="tile">
                    <h4 class="line-head">Site Settings</h4>
                    @include('admin.settings._site')
                </div>
            </div>
            <div class="tab-pane fade" id="roles-settings">
                <div class="tile">
                    <h4 class="line-head">Roles</h4>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection