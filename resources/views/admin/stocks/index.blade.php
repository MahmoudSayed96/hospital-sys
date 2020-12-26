@extends('admin.layouts.master')

@section('title','Stocks')

@php
$model = 'stocks';
@endphp
@section('content')

@component('admin.shared.breadcrumb',[
'title' => 'Stocks',
'icon' => 'fas fa-dolly-flatbed',
'description' => 'List of products stocks in hospital.',
'active_action' => 'Stocks',
])
@endcomponent

{{-- Messages --}}
@include('admin.shared._errors')
{{-- Messages --}}
@include('admin.shared._messages')

{{-- Butttons --}}
@component('admin.shared.buttons.header_btns',[
'add_btn_text'=>'Add Stock',
'add_btn_route' => admin_route($model . '.create')
])
<a href="{{admin_route('orders_stocks.create')}}" class="btn btn-primary badge badge-pill px-2 py-2 ml-3">
    <i class="fas fa-plus"></i>
    <strong>REQUEST STOCK</strong>
</a>
@endcomponent

{{-- Table --}}
@component('admin.shared.table', [
'export_xlsx_route' => admin_route($model . '.export_xlsx'),
'export_csv_route' => admin_route($model . '.export_csv'),
])
<table class="table table-hover table-bordered text-center" id="sampleTable">
    <thead>
        <tr>
            <th>#</th>
            <th>Product</th>
            <th>Serial No</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Type</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @isset($rows)
        @foreach ($rows as $index => $row)
        <tr>
            <td>{{$index + 1}}</td>
            <td>{{$row->name}}</td>
            <td>{{$row->serial_no}}</td>
            <td>{{$row->quantity}}</td>
            <td>{{$row->price}}</td>
            <td>{{$row->getType()}}</td>
            <td class="d-flex align-items-center justify-content-around">
                <span class="d-block" data-toggle="tooltip" data-placement="top" title="View Stock">
                    <a href="javascript:;" class="text-primary" type="button" data-toggle="modal"
                        data-target="#showModal" data-name="{{$row->name}}" data-serial="{{$row->serial_no}}"
                        data-quantity="{{$row->quantity}}" data-price="{{$row->price}}" data-type="{{$row->getType()}}">
                        <i class="icon fas fa-eye fa-w fa-lg"></i>
                    </a>
                </span>
                <span class="d-block" data-toggle="tooltip" data-placement="top" title="Edit Stock">
                    <a href="javascript:;" class="text-secondary" type="button" data-toggle="modal"
                        data-target="#editModal" data-id="{{$row->id}}" data-name="{{$row->name}}"
                        data-serial="{{$row->serial_no}}" data-quantity="{{$row->quantity}}"
                        data-price="{{$row->price}}" data-type="{{$row->type}}">
                        <i class="icon fas fa-pencil-alt fa-w fa-lg"></i>
                    </a>
                </span>
                <span class="d-block" data-toggle="tooltip" data-placement="top" title="Delete Stock">
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
{{-- Edit Modal --}}
@include('admin.' . $model . '._edit')
{{-- Delete Modal --}}
@include('admin.shared._delete_modal')
@endsection