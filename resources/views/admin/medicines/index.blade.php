@extends('admin.layouts.master')

@section('title','Medicines')

@php
$model = 'medicines';
@endphp

@section('content')

@component('admin.shared.breadcrumb',[
'title' => 'Medicines',
'icon' => 'fas fa-capsules',
'description' => 'List of Medicines in hospital.',
'active_action' => 'Medicines',
])
@endcomponent


{{-- Butttons --}}
@component('admin.shared.buttons.header_btns',[
'add_btn_text'=>'Add Medicine',
'add_btn_route' => admin_route($model . '.create')
])
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
            <th>#</th>
            <th>Name</th>
            <th>Price</th>
            <th>Expire Date</th>
            <th>Quantity</th>
            <th>Alert Qty</th>
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
            <td>{{number_format($row->price)}}</td>
            <td>{{$row->expire_date}}</td>
            <td>{{$row->quantity}}</td>
            <td>{{$row->alert_qty}}</td>
            <td>
                <strong
                    class="px-3 py-1 badge alert-success border border-success @if($row->status == 0) border-danger alert-danger @endif">
                    {{$row->getStatus()}}
                </strong>
            </td>
            <td class="d-flex align-items-center justify-content-around">
                <span class="d-block" data-toggle="tooltip" data-placement="top" title="View Medicine">
                    <a href="{{admin_route($model . '.show', $row->id)}}" class="text-primary">
                        <i class="icon fas fa-eye fa-w fa-lg"></i>
                    </a>
                </span>
                <span class="d-block" data-toggle="tooltip" data-placement="top" title="Edit Medicine">
                    <a href="{{admin_route($model . '.edit', $row->id)}}" class="text-secondary" type="button">
                        <i class="icon fas fa-pencil-alt fa-w fa-lg"></i>
                    </a>
                </span>
                <span class="d-block" data-toggle="tooltip" data-placement="top" title="Delete Medicine">
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
{{-- View Modal --}}
@include('admin.' . $model . '._show')
{{-- Delete Modal --}}
@include('admin.shared._delete_modal')
@endsection