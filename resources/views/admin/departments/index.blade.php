@extends('admin.layouts.master')

@section('title','Departments')

@php
$model = 'departments';
@endphp

@section('content')

@component('admin.shared.breadcrumb',[
'title' => 'Departments',
'icon' => 'fas fa-hospital-user',
'description' => 'List of departments in hospital.',
'active_action' => 'Departments',
])
@endcomponent


{{-- Butttons --}}
@component('admin.shared.buttons.header_btns',[
'add_btn_text'=>'Add Department',
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
            <th>Department</th>
            <th>Status</th>
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
            ajax: '{{admin_route("departments.get_data")}}',
            columns: [
                { data: 'name', name: 'name', orderable: true, searchable: true },
                { data: 'status', name: 'status' },
                { data: 'actions', name: 'actions', orderable: false, searchable: false },
            ]
        });
    });
</script>
@endpush