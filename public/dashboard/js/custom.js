$(function() {
    "use strict";
    var treeviewMenu = $(".app-menu");

    // Toggle Sidebar
    $('[data-toggle="sidebar"]').click(function(event) {
        event.preventDefault();
        $(".app").toggleClass("sidenav-toggled");
    });

    // Activate sidebar treeview toggle
    $("[data-toggle='treeview']").click(function(event) {
        event.preventDefault();
        if (
            !$(this)
                .parent()
                .hasClass("is-expanded")
        ) {
            treeviewMenu
                .find("[data-toggle='treeview']")
                .parent()
                .removeClass("is-expanded");
        }
        $(this)
            .parent()
            .toggleClass("is-expanded");
    });

    // Set initial active toggle
    $("[data-toggle='treeview.'].is-expanded")
        .parent()
        .toggleClass("is-expanded");

    //Activate bootstrip tooltips
    $("[data-toggle='tooltip']").tooltip();

    // Date picker.
    $("#demoDate").datepicker({
        format: "yyyy-mm-dd",
        autoclose: true,
        todayHighlight: true
    });

    // Preview image before upload.
    // Image preview
    $("#imgInp").change(function() {
        var reader = new FileReader();
        reader.onload = function(e) {
            $("#imgPreview").attr("src", e.target.result);
        };
        reader.readAsDataURL(this.files[0]); // convert to base64 string
    }); //end of image preview

    // Select2.
    $("#stock_id").select2();
    // Get stock product data.
    $("#stock_id").change(function(e) {
        e.preventDefault();
        let id = $(this).val();
        $.ajax({
            url: `/admin/inventory/stocks/request`,
            method: "GET",
            dataType: "json",
            data: { id },
            success: function(response) {
                let data = response.data;
                $("#serial_no").val(data.serial_no);
                $("#available_qut").val(data.quantity);
            }
        });
    });

    var data = {
        labels: ["January", "February", "March", "April", "May"],
        datasets: [
            {
                label: "My First dataset",
                fillColor: "rgba(220,220,220,0.2)",
                strokeColor: "rgba(220,220,220,1)",
                pointColor: "rgba(220,220,220,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(220,220,220,1)",
                data: [65, 59, 80, 81, 56]
            },
            {
                label: "My Second dataset",
                fillColor: "rgba(151,187,205,0.2)",
                strokeColor: "rgba(151,187,205,1)",
                pointColor: "rgba(151,187,205,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                data: [28, 48, 40, 19, 86]
            }
        ]
    };
    var pdata = [
        {
            value: 300,
            color: "#46BFBD",
            highlight: "#5AD3D1",
            label: "Complete"
        },
        {
            value: 50,
            color: "#F7464A",
            highlight: "#FF5A5E",
            label: "In-Progress"
        }
    ];

    var ctxl = $("#lineChartDemo")
        .get(0)
        .getContext("2d");
    var lineChart = new Chart(ctxl).Line(data);

    var ctxp = $("#pieChartDemo")
        .get(0)
        .getContext("2d");
    var pieChart = new Chart(ctxp).Pie(pdata);
});
