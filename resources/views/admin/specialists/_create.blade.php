<div class="row mb-4">
    <div class="col-12 col-md-8 mx-md-auto">
        <h2>Add Specialist</h2>
        <form action="{{admin_route('specialists.store')}}" method="post">
            @include('admin.specialists._form')
            <button type="submit"
                class="d-block btn btn-success badge badge-pill px-2 py-3 w-25 text-capitalize mx-auto">
                <i class="fas fa-check-circle fa-w fa-lg"></i>
                CREATE SPECIALIST
            </button>
        </form>
    </div>
</div>