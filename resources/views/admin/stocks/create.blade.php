@extends('admin.layouts.master')

@section('title','Stocks')

@php
$model = 'stocks';
@endphp

@section('content')
@component('admin.shared.breadcrumb',[
'title' => 'Stocks',
'description' => 'Add new department.',
'current_route' => $model . '.index',
'current_link' => 'Stocks',
'active_action' => 'Create',
])
@endcomponent
{{-- Form --}}
<div class="row">
    <div class="col-12 col-md-8 mx-md-auto">
        <h2>Add Stocck</h2>
        <form action="{{admin_route($model . '.store')}}" method="post">
            @include('admin.' . $model . '._form')
            @include('admin.shared.buttons.form_actions', ['btn_text'=>'Create Stock'])
        </form>
    </div>
</div>

@endsection