@extends('admin.layouts.master')

@section('title','Medicines')

@section('content')
@component('admin.shared.breadcrumb',[
'title' => 'Medicines',
'icon' => 'fas fa-capsules',
'description' => 'Update medicine.',
'current_route' => 'medicines.index',
'current_link' => 'Medicines',
'active_action' => 'Edit',
])
@endcomponent
{{-- Form --}}
<div class="row">
    <div class="col-12 col-md-8 mx-md-auto">
        <h2>Edit Medicine</h2>
        <form action="{{admin_route('medicines.update', $row->id)}}" method="post">
            @include('admin.medicines._form', ['row' => $row])
            @include('admin.shared.buttons.form_actions', ['btn_text'=>'Create Medicines'])
        </form>
    </div>
</div>

@endsection