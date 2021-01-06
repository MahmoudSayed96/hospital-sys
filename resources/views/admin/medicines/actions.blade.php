@php
$model='medicines';
@endphp
<div class="d-flex align-items-center justify-content-around">
    <span class="d-block" data-toggle="tooltip" data-placement="top" title="View Medicine">
        <a href="{{admin_route($model . '.show', $row->id)}}" class="text-primary">
            <i class="icon fas fa-eye fa-w fa-lg"></i>
        </a>
    </span>
    <span class="d-block" data-toggle="tooltip" data-placement="top" title="Edit Medicine">
        <a href="{{admin_route($model . '.edit', $row->id)}}" class="text-secondary" type="button">
            <i class="icon fas fa-pencil-alt fa-w fa-lg"></i>
        </a>
    </span>
    <span class="d-block" data-toggle="tooltip" data-placement="top" title="Delete Medicine">
        <a href="javascript:;" class="delete text-danger text-md" data-target="#deleteModal" type="button"
            data-toggle="modal" data-id="{{$row->id}}">
            <i class="icon fas fa-trash fa-lg"></i>
            <form action="{{admin_route($model . '.destroy', $row->id)}}" class="d-none" method="post"
                id="delete-form-{{$row->id}}">
                @csrf
            </form>
        </a>
    </span>
</div>