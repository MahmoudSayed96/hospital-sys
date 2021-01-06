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
<table class="table table-hover table-bordered text-center" id="dataTables">
    <thead>
        <tr>
            <th>Product</th>
            <th>Serial No</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Type</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
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

{{-- JavaScript code --}}
@push('scripts')
<script>
    $(document).ready(function(){
        $('#dataTables').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{admin_route("stocks.get_data")}}',
            columns: [
                { data: 'name', name: 'name', orderable: true, searchable: true },
                { data: 'serial_no', name: 'serial_no', orderable: true, searchable: true },
                { data: 'quantity', name: 'quantity', orderable: true, searchable: true },
                { data: 'price', name: 'price', orderable: true, searchable: true },
                { data: 'type', name: 'type', orderable: true, searchable: true },
                { data: 'actions', name: 'actions', orderable: false, searchable: false },
            ]
        });
    });
</script>
@endpush