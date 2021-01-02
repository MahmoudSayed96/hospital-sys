@extends('admin.layouts.master')

@section('title','Medicines')

@section('content')
@component('admin.shared.breadcrumb',[
'title' => 'Medicines',
'icon' => 'fas fa-capsules',
'description' => 'View medicine.',
'current_route' => 'medicines.index',
'current_link' => 'Medicines',
'active_action' => 'View',
])
@endcomponent
{{-- Form --}}
<div class="row">
    <div class="col-12 col-md-8 mx-md-auto">
        <div class="tile">
            <div class="tile-body">
                @isset($row)
                <h2 class="text-center">How used <strong>{{$row->name}}</strong></h2>
                <hr>
                @if ($row->description !== '')
                <div>{!! $row->description !!}</div>
                @else
                <h2 class="text-center mt-5">No Description.</h2>
                @endif
                @endisset
                <div class="mt-5">
                    <button type="button" class="d-block btn btn-danger badge badge-pill px-4 py-3 mr-3"
                        onclick="history.back();">
                        <i class="fas fa-times-circle fa-w fa-lg"></i>
                        Back
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection