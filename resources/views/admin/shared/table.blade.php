<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-header d-flex mb-4">
                <div class="excel-btns ml-auto">
                    @isset($export_xlsx_route)
                    <a href="{{$export_xlsx_route}}" class="btn btn-dark ">
                        <i class="fas fa-file-download fa-lg mr-1"></i>
                        Export XLSX
                    </a>
                    @endisset
                    @isset($export_csv_route)
                    <a href="{{$export_csv_route}}" class="btn btn-dark">
                        <i class="fas fa-file-download fa-lg mr-1"></i>
                        Export CSV
                    </a>
                    @endisset
                </div>
            </div>
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