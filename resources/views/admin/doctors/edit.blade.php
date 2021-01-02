@extends('admin.layouts.master')

@section('title','Doctors')

@section('content')
@component('admin.shared.breadcrumb',[
'title' => 'Doctors',
'icon' => 'fas fa-user-md',
'description' => 'Update doctor profile.',
'current_route' => 'doctors.index',
'current_link' => 'Doctors',
'active_action' => 'Edit',
])
@endcomponent
{{-- Messages --}}
@include('admin.shared._errors')
{{-- Messages --}}
@include('admin.shared._messages')
{{-- Form --}}
<div class="row">
    <div class="col-12 mx-md-auto">
        <div class="tile">
            <h2 class="tile-title">Edit Doctor</h2>
            <div class="tile-body">
                <form action="{{admin_route('doctors.update', $row->id)}}" method="post" enctype="multipart/form-data">
                    @include('admin.doctors._form')
                    @include('admin.shared.buttons.form_actions', ['btn_text'=>'Create Doctor', 'row' => $row])
                </form>
            </div>
        </div>
    </div>
</div>

@endsection