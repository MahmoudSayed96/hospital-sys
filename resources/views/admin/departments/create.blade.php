@extends('admin.layouts.master')

@section('title','Departments')

@section('content')
@component('admin.shared.breadcrumb',[
'title' => 'Departments',
'description' => 'Add new department.',
'current_route' => 'departments.index',
'current_link' => 'Departments',
'active_action' => 'Create',
])
@endcomponent
{{-- Form --}}
<div class="row">
    <div class="col-12 col-md-8 mx-md-auto">
        <h2>Add Department</h2>
        <form action="{{admin_route('departments.store')}}" method="post">
            @include('admin.departments._form')
            @include('admin.shared.buttons.form_actions', ['btn_text'=>'Create Department'])
        </form>
    </div>
</div>

@endsection