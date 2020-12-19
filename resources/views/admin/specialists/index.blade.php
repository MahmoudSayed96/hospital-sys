@extends('admin.layouts.master')

@section('title','Specialists')

@php
$model = 'specialists';
@endphp
@section('content')

@component('admin.shared.breadcrumb',[
'title' => 'Specialists',
'icon' => 'fas fa-stethoscope',
'description' => 'List of specialists in hospital.',
'active_action' => 'Specialists',
])
@endcomponent

{{-- Messages --}}
@include('admin.shared._errors')
{{-- Messages --}}
@include('admin.shared._messages')

{{-- Create form --}}
@include('admin.specialists._create')

{{-- Table --}}
@component('admin.shared.table', [
'export_xlsx_route' => admin_route($model . '.export_xlsx'),
'export_csv_route' => admin_route($model . '.export_csv'),
])
<table class="table table-hover table-bordered text-center" id="sampleTable">
    <thead>
        <tr>
            <th>#</th>
            <th>Specialist</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @isset($rows)
        @foreach ($rows as $index => $row)
        <tr>
            <td>{{$index + 1}}</td>
            <td>{{$row->name}}</td>
            <td class="d-flex align-items-center justify-content-around">
                <span class="d-block" data-toggle="tooltip" data-placement="top" title="View Specialist">
                    <a href="javascript:;" class="text-primary" type="button" data-toggle="modal"
                        data-target="#showModal" data-name="{{$row->name}}">
                        <i class="icon fas fa-eye fa-w fa-lg"></i>
                    </a>
                </span>
                <span class="d-block" data-toggle="tooltip" data-placement="top" title="Edit Specialist">
                    <a href="javascript:;" class="text-secondary" type="button" data-toggle="modal"
                        data-target="#editModal" data-id="{{$row->id}}" data-name="{{$row->name}}">
                        <i class="icon fas fa-pencil-alt fa-w fa-lg"></i>
                    </a>
                </span>
                <span class="d-block" data-toggle="tooltip" data-placement="top" title="Delete Specialist">
                    <a href="javascript:;" class="delete text-danger text-md" data-id="{{$row->id}}">
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
{{-- View Modal --}}
@include('admin.' . $model . '._show')
{{-- Edit Modal --}}
@include('admin.' . $model . '._edit')
{{-- Delete Modal --}}
@include('admin.shared._delete_modal')
@endsection