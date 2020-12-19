@php
$fileSize = 0;
$totalSize = 0;
@endphp
<table class="table table-hover table-bordered text-center" id="sampleTable">
    <thead>
        <tr>
            <th>#</th>
            <th>Backup File</th>
            <th>Size</th>
            <th>Path</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @isset($backupFiles)
        @foreach ($backupFiles as $index => $file)
        @php
        $fileSize = $file->getSize()/(1024*1024);
        $totalSize = $totalSize + $fileSize;
        @endphp
        <tr>
            <td>{{$index + 1}}</td>
            <td>{{$file->getFileName()}}</td>
            <td><strong class="alert-success border border-success">{{number_format($fileSize, 2)}}MB</strong></td>
            <td>{{$file->getPath()}}</td>
            <td class="d-flex align-items-center justify-content-around">
                <span class="d-block" data-toggle="tooltip" data-placement="top" title="Download File">
                    <a href="{{admin_route('settings.backups.download', $file->getFileName())}}"
                        class="text-primary text-md">
                        <i class="icon fas fa-download"></i>
                    </a>
                </span>
                <span class="d-block" data-toggle="tooltip" data-placement="top" title="Delete File">
                    <a href="javascript:;" class="delete text-danger text-md" data-target="#deleteModal" type="button"
                        data-toggle="modal" data-id="{{$index + 1}}">
                        <i class="icon fas fa-trash"></i>
                    </a>
                    <form action="{{admin_route('settings.backups.destroy', $file->getFileName())}}" method="post"
                        class="d-none" id="delete-form-{{$index + 1}}">
                        @csrf
                    </form>
                </span>
            </td>
        </tr>
        @endforeach
        @endisset
    </tbody>
    <tfoot>
        <tr>
            <td colspan="4">
                <strong>Total Backup Files Size</strong>
            </td>
            <td>
                <strong class="alert-danger border border-danger">{{number_format($totalSize, 2)}}MB</strong>
            </td>
        </tr>
    </tfoot>
</table>

@push('scripts')
<!-- Data table plugin-->
<script type="text/javascript" src="{{asset('dashboard/js/plugins/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('dashboard/js/plugins/dataTables.bootstrap.min.js')}}"></script>
<script type="text/javascript">
    $('#sampleTable').DataTable();
    
</script>
@endpush