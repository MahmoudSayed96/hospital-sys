@extends('admin.layouts.master')

@section('title','Settings')

@section('content')

@component('admin.shared.breadcrumb',[
'title' => 'Settings',
'icon' => 'fas fa-cog',
'description' => 'Global site settings.',
'active_action' => 'Settings',
])
@endcomponent

{{-- Messages --}}
@include('admin.shared._errors')
{{-- Messages --}}
@include('admin.shared._messages')

<div class="row user">
    <div class="col-md-3">
        <div class="tile p-0">
            <ul class="nav flex-column nav-tabs user-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#site-settings" data-toggle="tab">
                        <i class="fas fa-laptop fa-lg"></i> Site
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#backups" data-toggle="tab"><i class="fas fa-database fa-lg"></i> Backups
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#roles-settings" data-toggle="tab">
                        <i class="fas fa-user-tag fa-lg"></i> Roles
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-md-9">
        <div class="tab-content">
            <div class="tab-pane active" id="site-settings">
                <div class="tile">
                    <h4 class="line-head">
                        <i class="fas fa-laptop fa-lg"></i> Site Settings
                    </h4>
                    @include('admin.settings._site')
                </div>
            </div>
            <div class="tab-pane fade" id="backups">
                <div class="tile">
                    <h4>
                        <i class="fas fa-database fa-lg"></i> Backups
                    </h4>
                    <span class="line-head d-block mb-4">Every Day At 1 AM System Backups Files and Database.
                        <span class="text-danger">Make Sure to Delete All Old Backups,Because It's Take From Hard
                            Disk.
                        </span>
                    </span>
                    {{-- Table --}}
                    @include('admin.settings._backup', ['backupFiles' => $backupFiles])
                </div>
            </div>
            <div class="tab-pane fade" id="roles-settings">
                <div class="tile">
                    <h4 class="line-head">
                        <i class="fas fa-user-tag fa-lg"></i> Roles
                    </h4>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
{{-- Delete Modal --}}
@include('admin.shared._delete_modal')