<!-- Essential javascripts for application to work-->
<script src="{{asset('dashboard/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('dashboard/js/popper.min.js')}}"></script>
<script src="{{asset('dashboard/js/bootstrap.min.js')}}"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="{{asset('dashboard/js/plugins/pace.min.js')}}"></script>
<!-- Page specific javascripts-->
<script src="{{asset('dashboard/js/plugins/chart.js')}}"></script>
<!-- Notify Alert -->
<script src="{{asset('dashboard/js/plugins/bootstrap-notify.min.js')}}"></script>
<!-- Date picker-->
<script src="{{asset('dashboard/js/plugins/bootstrap-datepicker.min.js')}}"></script>

@if(session()->has('message'))
<script>
    // Notify alerts.
    $.notify(
        {
            title: '{{ session()->get("messageType") == "error" ? "Error: " : "Success: " }}',
            message: "{{session()->get('message')}}",
            icon:
                "{{ session()->get('messageType') == 'success' ? 'fas fa-check' : 'fas fa-exclamation-triangle'}}"
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

@stack('scripts')
<!-- Custom code -->
<script src="{{asset('dashboard/js/custom.js')}}"></script>