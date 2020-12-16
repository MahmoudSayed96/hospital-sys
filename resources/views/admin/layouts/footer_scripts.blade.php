<!-- Essential javascripts for application to work-->
<script src="{{asset('dashboard/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('dashboard/js/popper.min.js')}}"></script>
<script src="{{asset('dashboard/js/bootstrap.min.js')}}"></script>
<script src="{{asset('dashboard/js/main.js')}}"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="{{asset('dashboard/js/plugins/pace.min.js')}}"></script>
<!-- Page specific javascripts-->
<script src="{{asset('dashboard/js/plugins/chart.js')}}"></script>
<!-- Sweet Alert -->
<script src="{{asset('dashboard/js/plugins/sweetalert.min.js')}}"></script>
<!-- Notify Alert -->
<script src="{{asset('dashboard/js/plugins/bootstrap-notify.min.js')}}"></script>
@if (session()->has('message'))
<script>
    // Notify alerts.
    $.notify(
        {
            title: "Success: ",
            message: "{{session()->get('message')}}",
            icon:
                " {{ session()->get('messageType') == 'success' ? 'fa fa-check' : 'fa fa-exclamation-triangle'}}"
        },
        {
            type: '{{ session()->get("messageType") == "error" ? "danger" : "success" }}',
            placement: {
                from: "top",
                align: "right"
            }
        }
    );
</script>
@endif

{{-- Delete Action --}}
<script>
    $('.delete').click(function(e){
        e.preventDefault();
        var button = $(this);
        var id = button.data('id');
        console.log(button.data('id'));
        swal({
                title: "Are you sure?",
                text: "You will not be able to recover this data!",
                type: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel plx!",
                confirmButtonClass: "btn-danger",
                closeOnConfirm: true,
                closeOnCancel: true,
                dangerMode: true,
            }, function(isConfirm) {
                if (isConfirm) {
                    $('#delete-form-'+id).submit();
      		    }    
            });
    });
</script>

@stack('scripts')

<!-- Custom javaScript code -->
<script src="{{asset('dashboard/js/custom.js')}}"></script>