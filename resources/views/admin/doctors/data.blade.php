{{$rows->count()}}
@php
$model = 'doctors';
@endphp
@foreach($rows->chunk(3) as $chunk)
<div class="row">
    @foreach($chunk as $row)
    <div class="col-12 col-md-2 col-lg-4">
        <div class="tile text-center">
            <div class="float-right">
                <span class="mx-1" data-toggle="tooltip" data-placement="top" title="Edit Profile">
                    <a href="{{admin_route($model . '.edit', $row->id)}}" class="text-secondary" type="button">
                        <i class="icon fas fa-pencil-alt"></i>
                    </a>
                </span>
                <span class="mx-1" data-toggle="tooltip" data-placement="top" title="Delete Profile">
                    <a href="javascript:;" class="delete text-danger text-md" data-target="#deleteModal" type="button"
                        data-toggle="modal" data-id="{{$row->id}}">
                        <i class="icon fas fa-trash"></i>
                        <form action="{{admin_route($model . '.destroy', $row->id)}}" class="d-none" method="post"
                            id="delete-form-{{$row->id}}">
                            @csrf
                        </form>
                    </a>
                </span>
            </div>
            <div class="clearfix"></div>
            <img src="{{$row->getAvatar()}}" class="d-block img-fluid img-thumbnail mx-auto rounded-circle"
                alt="{{$row->username}}" width="100" height="100" style="min-width:100px;min-height:100px;">
            <h5 class="tile-title mb-0 mt-3">{{$row->name}}</h5>
            <p class="text-muted mt-0">
                <i class="fas fa-stethoscope text-dark"></i>
                <strong>{{$row->specialist->name}}</strong>
            </p>
            <h3>
                <i class="fas fa-map-marked-alt"></i>
                <span>{{$row->governorate->name}}</span>
            </h3>
        </div>
    </div>
    @endforeach
</div>
@endforeach