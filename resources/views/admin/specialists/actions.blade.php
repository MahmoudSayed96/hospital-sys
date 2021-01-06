@php
$model = 'specialists';
@endphp
<div class="d-flex align-items-center justify-content-around">
    <span class="d-block" data-toggle="tooltip" data-placement="top" title="View Specialist">
        <a href="javascript:;" class="text-primary" type="button" data-toggle="modal" data-target="#showModal"
            data-name="{{$row->name}}">
            <i class="icon fas fa-eye fa-w fa-lg"></i>
        </a>
    </span>
    <span class="d-block" data-toggle="tooltip" data-placement="top" title="Edit Specialist">
        <a href="javascript:;" class="text-secondary" type="button" data-toggle="modal" data-target="#editModal"
            data-id="{{$row->id}}" data-name="{{$row->name}}">
            <i class="icon fas fa-pencil-alt fa-w fa-lg"></i>
        </a>
    </span>
    <span class="d-block" data-toggle="tooltip" data-placement="top" title="Delete Specialist">
        <a href="javascript:;" class="delete text-danger text-md" data-id="{{$row->id}}">
            <i class="icon fas fa-trash fa-lg"></i>
            <form action="{{admin_route($model . '.destroy', $row->id)}}" class="d-none" method="post"
                id="delete-form-{{$row->id}}">
                @csrf
            </form>
        </a>
    </span>
</div>