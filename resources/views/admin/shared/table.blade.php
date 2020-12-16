<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                <div class="table-responsive">
                    {{$slot}}
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<!-- Data table plugin-->
<script type="text/javascript" src="{{asset('dashboard/js/plugins/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('dashboard/js/plugins/dataTables.bootstrap.min.js')}}"></script>
<script type="text/javascript">
    $('#sampleTable').DataTable();
</script>
@endpush