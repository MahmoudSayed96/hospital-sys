@extends('admin.layouts.master')

@section('title','Doctors')

@section('content')
@component('admin.shared.breadcrumb',[
'title' => 'Doctors',
'icon' => 'fas fa-user-md mr-1',
'description' => 'Show doctor profile.',
'current_route' => 'doctors.index',
'current_link' => 'Doctors',
'active_action' => 'View',
])
@endcomponent

{{-- Butttons --}}
@component('admin.shared.buttons.header_btns',[
'add_btn_text'=>'Edit Profile',
'icon' => 'fa-pencil-alt',
'add_btn_route' => admin_route('doctors.edit', $row->id)
])
@endcomponent

{{-- Profile --}}
<div class="row">
    <div class="col-12 mx-md-auto">
        <div class="tile">
            @isset($row)
            <h2 class="tile-title"><strong class="text-primary">{{$row->username}}</strong> Profile</h2>
            <hr>
            <div class="tile-body">
                <div class="row mb-3">
                    <div class="col-12 col-lg-5 border-right">
                        <div class="left d-flex align-items-center">
                            <div class="user-img">
                                <img src="{{$row->getAvatar()}}" class="img-fluid img-thumbnail rounded-circle"
                                    width="150" height="150" alt="{{$row->username}}">
                            </div>
                            <div class="username mx-3">
                                <h5 class="text-dark">{{$row->name}}</h5>
                                <p class="text-secondary">{{$row->email}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-7 d-none d-lg-block">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <strong class="mr-2 d-block"><i
                                                class="fas fa-user-graduate fa-lg mr-1"></i>Degree</strong>
                                        <span>{{$row->degree}}</span>
                                    </li>
                                    <li class="list-group-item">
                                        <strong class="mr-2 d-block"><i
                                                class="fas fa-hospital-user fa-lg mr-1"></i>Department:</strong>
                                        <span>{{$row->department->name}}</span>
                                    </li>
                                    <li class="list-group-item">
                                        <strong class="mr-2 d-block"><i
                                                class="fas fa-stethoscope fa-lg mr-1"></i>Specialist:</strong>
                                        <span>{{$row->specialist->name}}</span>
                                    </li>
                                    <li class="list-group-item">
                                        <strong class="mr-2 d-block">
                                            <i class="fas fa-male fa-lg"></i>/<i
                                                class="fas fa-female fa-lg mr-1"></i>Gender:</strong>
                                        <span>{{$row->getGender()}}</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-6">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <strong class="mr-2 d-block">
                                            <i class="fas fa-calendar-alt fa-lg mr-1"></i>Date
                                            Of Birth</strong>
                                        <span>{{$row->date_of_birth}}</span>
                                    </li>
                                    <li class="list-group-item">
                                        <strong class="mr-2 d-block"><i
                                                class="fas fa-phone fa-lg mr-1"></i>Phone:</strong>
                                        <span>{{isset($row->phone) ? $row->phone : 'N/A'}}</span>
                                    </li>
                                    <li class="list-group-item">
                                        <strong class="mr-2 d-block"><i
                                                class="fas fa-map-marker fa-lg mr-1"></i>Address:</strong>
                                        <span>{{$row->city->name}}, {{$row->governorate->name}}</span>
                                    </li>
                                    <li class="list-group-item">
                                        <strong class="mr-2 d-block"><i
                                                class="fas fa-dollar-sign fa-lg mr-1"></i>Salary:</strong>
                                        <span>{{$row->salary}}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                {{-- Information tab --}}
                <div class="row">
                    <div class="col-12">
                        <div class="bs-component">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab"
                                        href="#about">About</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profile">Profile</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade active show" id="about">
                                    <div class="row d-lg-none">
                                        <div class="col-12 col-md-6">
                                            <ul class="list-group">
                                                <li class="list-group-item">
                                                    <strong class="mr-2 d-block"><i
                                                            class="fas fa-user-graduate fa-lg mr-1"></i>Degree</strong>
                                                    <span>{{$row->degree}}</span>
                                                </li>
                                                <li class="list-group-item">
                                                    <strong class="mr-2 d-block"><i
                                                            class="fas fa-hospital-user fa-lg mr-1"></i>Department:</strong>
                                                    <span>{{$row->department->name}}</span>
                                                </li>
                                                <li class="list-group-item">
                                                    <strong class="mr-2 d-block"><i
                                                            class="fas fa-stethoscope fa-lg mr-1"></i>Specialist:</strong>
                                                    <span>{{$row->specialist->name}}</span>
                                                </li>
                                                <li class="list-group-item">
                                                    <strong class="mr-2 d-block">
                                                        <i class="fas fa-male fa-lg"></i>/<i
                                                            class="fas fa-female fa-lg mr-1"></i>Gender:</strong>
                                                    <span>{{$row->getGender()}}</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <ul class="list-group">
                                                <li class="list-group-item">
                                                    <strong class="mr-2 d-block">
                                                        <i class="fas fa-calendar-alt fa-lg mr-1"></i>Date
                                                        Of Birth</strong>
                                                    <span>{{$row->date_of_birth}}</span>
                                                </li>
                                                <li class="list-group-item">
                                                    <strong class="mr-2 d-block"><i
                                                            class="fas fa-phone fa-lg mr-1"></i>Phone:</strong>
                                                    <span>{{isset($row->phone) ? $row->phone : 'N/A'}}</span>
                                                </li>
                                                <li class="list-group-item">
                                                    <strong class="mr-2 d-block"><i
                                                            class="fas fa-map-marker fa-lg mr-1"></i>Address:</strong>
                                                    <span>{{$row->city->name}}, {{$row->governorate->name}}</span>
                                                </li>
                                                <li class="list-group-item">
                                                    <strong class="mr-2 d-block"><i
                                                            class="fas fa-dollar-sign fa-lg mr-1"></i>Salary:</strong>
                                                    <span>{{$row->salary}}</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="p-2 border mt-1 mt-md-0">{{isset($row->bio) ? $row->bio : 'No Bio.'}}</p>
                                </div>
                                <div class="tab-pane fade" id="profile">
                                    <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee
                                        squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes
                                        anderson artisan four loko farm-to-table craft beer twee. Qui photo booth
                                        letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl
                                        cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus
                                        mollit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endisset
            @include('admin.shared.buttons.back_btn')
        </div>
    </div>
</div>

@endsection