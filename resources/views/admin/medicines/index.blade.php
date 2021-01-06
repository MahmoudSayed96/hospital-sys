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
<table class="table table-hover table-bordered text-center" id="dataTables">
    <thead>
        <tr>
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
    </tbody>
</table>
@endcomponent
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
            ajax: '{{admin_route("medicines.get_data")}}',
            columns: [
                { data: 'name', name: 'name', orderable: true, searchable: true },
                { data: 'price', name: 'price', orderable: true, searchable: true },
                { data: 'expire_date', name: 'expire_date', orderable: true, searchable: true },
                { data: 'quantity', name: 'quantity', orderable: true, searchable: true },
                { data: 'alert_qty', name: 'alert_qty', orderable: true, searchable: true },
                { data: 'status', name: 'status', orderable: true, searchable: true },
                { data: 'actions', name: 'actions', orderable: false, searchable: false },
            ]
        });
    });
</script>
@endpush