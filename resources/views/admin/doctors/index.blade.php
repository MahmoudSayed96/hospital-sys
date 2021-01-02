@extends('admin.layouts.master')

@section('title','Doctors')

@php
$model = 'doctors';
@endphp

@section('content')

@component('admin.shared.breadcrumb',[
'title' => 'Doctors',
'icon' => 'fas fa-user-md',
'description' => 'List of doctors in hospital.',
'active_action' => 'Doctors',
])
@endcomponent


{{-- Butttons --}}
@component('admin.shared.buttons.header_btns',[
'add_btn_text'=>'Add Doctor',
'add_btn_route' => admin_route($model . '.create')
])
@slot('header_btns')
<a href="{{admin_route($model . '.gallery')}}" class="text-dark" data-toggle="tooltip" data-placement="top"
    title="gallery">
    <i class="fas fa-border-all fa-2x mr-3"></i>
</a>
<a href="{{admin_route($model . '.index')}}" class="text-dark" data-toggle="tooltip" data-placement="top" title="list">
    <i class="fas fa-list-alt fa-2x"></i>
</a>
@endslot
@endcomponent

{{-- Messages --}}
@include('admin.shared._errors')
{{-- Messages --}}
@include('admin.shared._messages')

{{-- Table --}}
@component('admin.shared.table', [
'export_xlsx_route' => admin_route($model . '.export_xlsx'),
'export_csv_route' => admin_route($model . '.export_csv'),
])
<table class="table table-hover table-bordered text-center" id="sampleTable">
    <thead>
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Department</th>
            <th>Specialist</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @isset($rows)
        @foreach ($rows as $index => $row)
        <tr>
            <td>{{$index + 1}}</td>
            <td>
                <a class="d-flex align-items-center" href="#">
                    <img src="{{$row->getAvatar()}}" class="img-fluid img-thumbnail rounded-circle mr-1" width="50"
                        height="50" alt="{{$row->username}}" style="min-width:50px;min-height:50px;">
                    <span>{{$row->name}}</span>
                </a>
            </td>
            <td>{{$row->username}}</td>
            <td>{{$row->email}}</td>
            <td>{{$row->department->name}}</td>
            <td>{{$row->specialist->name}}</td>
            <td>
                <strong
                    class="px-3 py-1 badge alert-success border border-success @if($row->status == 0) border-danger alert-danger @endif">
                    {{$row->getStatus()}}
                </strong>
            </td>
            <td class="d-flex align-items-center justify-content-around">
                <span class="d-block" data-toggle="tooltip" data-placement="top" title="View Profile">
                    <a href="{{admin_route($model . '.show', $row->id)}}" class="text-primary">
                        <i class="icon fas fa-eye fa-w fa-lg"></i>
                    </a>
                </span>
                <span class="d-block" data-toggle="tooltip" data-placement="top" title="Edit Profile">
                    <a href="{{admin_route($model . '.edit', $row->id)}}" class="text-secondary" type="button">
                        <i class="icon fas fa-pencil-alt fa-w fa-lg"></i>
                    </a>
                </span>
                <span class="d-block" data-toggle="tooltip" data-placement="top" title="Delete Profile">
                    <a href="javascript:;" class="delete text-danger text-md" data-target="#deleteModal" type="button"
                        data-toggle="modal" data-id="{{$row->id}}">
                        <i class="icon fas fa-trash fa-lg"></i>
                        <form action="{{admin_route($model . '.destroy', $row->id)}}" class="d-none" method="post"
                            id="delete-form-{{$row->id}}">
                            @csrf
                        </form>
                    </a>
                </span>
            </td>
        </tr>
        @endforeach
        @endisset
    </tbody>

</table>
@endcomponent

{{-- Delete Modal --}}
@include('admin.shared._delete_modal')
@endsection