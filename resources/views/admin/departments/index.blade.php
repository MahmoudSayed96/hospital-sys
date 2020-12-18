@extends('admin.layouts.master')

@section('title','Departments')

@section('content')

@component('admin.shared.breadcrumb',[
'title' => 'Departments',
'icon' => '',
'description' => 'List of departments in hospital.',
'active_action' => 'Departments',
])
@endcomponent


{{-- Butttons --}}
@component('admin.shared.buttons.header_btns',[
'add_btn_text'=>'Add Department',
'add_btn_route' => admin_route('departments.create')
])
@endcomponent

{{-- Messages --}}
@include('admin.shared._errors')
{{-- Messages --}}
@include('admin.shared._messages')

{{-- Table --}}
@component('admin.shared.table')
<table class="table table-hover table-bordered text-center" id="sampleTable">
    <thead>
        <tr>
            <th>#</th>
            <th>Department</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @isset($rows)
        @foreach ($rows as $index => $row)
        <tr>
            <td>{{$index + 1}}</td>
            <td>{{$row->name}}</td>
            <td>
                <strong
                    class="px-3 py-1 badge alert-success border border-success @if($row->status == 0) border-danger alert-danger @endif">
                    {{$row->getStatus()}}
                </strong>
            </td>
            <td class="d-flex align-items-center justify-content-around">
                <span class="d-block" data-toggle="tooltip" data-placement="top" title="View Department">
                    <a href="javascript:;" class="text-primary" type="button" data-toggle="modal"
                        data-target="#showModal" data-name="{{$row->name}}" data-description="{{$row->description}}"
                        data-status="{{$row->getStatus()}}">
                        <i class="icon fas fa-eye fa-w fa-lg"></i>
                    </a>
                </span>
                <span class="d-block" data-toggle="tooltip" data-placement="top" title="Edit Department">
                    <a href="javascript:;" class="text-secondary" type="button" data-toggle="modal"
                        data-target="#editModal" data-id="{{$row->id}}" data-name="{{$row->name}}"
                        data-description="{{$row->description}}" data-status="{{$row->status}}">
                        <i class="icon fas fa-pencil-alt fa-w fa-lg"></i>
                    </a>
                </span>
                <span class="d-block" data-toggle="tooltip" data-placement="top" title="Delete Department">
                    <a href="javascript:;" class="delete text-danger text-md" data-id="{{$row->id}}">
                        <i class="icon fas fa-trash fa-lg"></i>
                        <form action="{{admin_route('departments.destroy', $row->id)}}" class="d-none" method="post"
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
{{-- View Modal --}}
@include('admin.departments._show')
{{-- Edit Modal --}}
@include('admin.departments._edit')
@endsection