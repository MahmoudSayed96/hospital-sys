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
<table class="table table-hover table-bordered text-center" id="dataTables">
    <thead>
        <tr>
            <th>Specialist</th>
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
            ajax: '{{admin_route("specialists.get_data")}}',
            columns: [
                { data: 'name', name: 'name', orderable: true, searchable: true },
                { data: 'actions', name: 'actions', orderable: false, searchable: false },
            ]
        });
    });
</script>
@endpush