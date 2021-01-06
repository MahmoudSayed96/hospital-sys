@php
$model = 'stocks';
@endphp
<div class="d-flex align-items-center justify-content-around">
    <span class="d-block" data-toggle="tooltip" data-placement="top" title="View Stock">
        <a href="javascript:;" class="text-primary" type="button" data-toggle="modal" data-target="#showModal"
            data-name="{{$row->name}}" data-serial="{{$row->serial_no}}" data-quantity="{{$row->quantity}}"
            data-price="{{$row->price}}" data-type="{{$row->getType()}}">
            <i class="icon fas fa-eye fa-w fa-lg"></i>
        </a>
    </span>
    <span class="d-block" data-toggle="tooltip" data-placement="top" title="Edit Stock">
        <a href="javascript:;" class="text-secondary" type="button" data-toggle="modal" data-target="#editModal"
            data-id="{{$row->id}}" data-name="{{$row->name}}" data-serial="{{$row->serial_no}}"
            data-quantity="{{$row->quantity}}" data-price="{{$row->price}}" data-type="{{$row->type}}">
            <i class="icon fas fa-pencil-alt fa-w fa-lg"></i>
        </a>
    </span>
    <span class="d-block" data-toggle="tooltip" data-placement="top" title="Delete Stock">
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