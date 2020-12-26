@extends('admin.layouts.master')

@section('title','Stocks')

@php
$model = 'orders_stocks';
@endphp

@section('content')
@component('admin.shared.breadcrumb',[
'title' => 'Stocks',
'description' => 'Add new department.',
'current_route' => 'stocks.index',
'current_link' => 'Stocks',
'active_action' => 'Request',
])
@endcomponent
{{-- Form --}}
<div class="row">
    <div class="col-12 col-md-8 mx-md-auto">
        <h2>Request/Add Stock</h2>
        <form action="{{admin_route($model . '.store')}}" method="post">
            @include('admin.' . $model . '._form')
            @include('admin.shared.buttons.form_actions', ['btn_text'=>'Process Stock'])
        </form>
    </div>
</div>

@endsection