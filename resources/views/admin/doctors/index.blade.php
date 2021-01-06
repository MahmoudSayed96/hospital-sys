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
<table class="table table-hover table-bordered text-center" id="dataTables">
    <thead>
        <tr>
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
        var t = $('#dataTables').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{admin_route("doctors.get_data")}}',
            columns: [
                { data: 'name', name: 'name',  },
                { data: 'username', name: 'username',  },
                { data: 'email', name: 'email',  },
                { data: 'department', name: 'department',  },
                { data: 'specialist', name: 'specialist',  },
                { data: 'status', name: 'status' },
                { data: 'actions', name: 'actions', orderable: false, searchable: false},
            ]
        });
    });
</script>
@endpush