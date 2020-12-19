<!-- Modal -->
<div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="showModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="showModalLabel">Stock Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="outline:none;">
                    <span aria-hidden="true"><i class="fas fa-times-circle text-white"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <ul class="list-group">
                    <li class="list-group-item d-flex align-items-center justify-content-between">
                        <strong class="d-block"><i class="fas fa-hospital-user fa-lg mr-2"></i>Name:</strong>
                        <span class="name d-block"></span>
                    </li>
                    <li class="list-group-item d-flex align-items-center justify-content-between">
                        <strong class="d-block">
                            <i class="fas fa-barcode fa-lg mr-2"></i> Serial NO:</strong>
                        <span class="serial d-block"></span>
                    </li>
                    <li class="list-group-item d-flex align-items-center justify-content-between">
                        <strong class="d-block">
                            <i class="fas fa-box-open fa-lg mr-2"></i> Quantity: </strong>
                        <span class="quantity d-block"></span>
                    </li>
                    <li class="list-group-item d-flex align-items-center justify-content-between">
                        <strong class="d-block">
                            <i class="fas fa-money-bill-alt fa-lg mr-2"></i> Price: </strong>
                        <span class="price d-block"></span>
                    </li>
                    <li class="list-group-item d-flex align-items-center justify-content-between">
                        <strong class="d-block">
                            <i class="fas fa-hospital fa-lg mr-2"></i> Type: </strong>
                        <span class="type d-block"></span>
                    </li>
                </ul>
            </div>
            <div class="modal-footer">
                <div class="btns d-flex align-items-center justify-content-center">
                    <button type="button" class="d-block btn btn-danger badge badge-pill px-3 py-2  mr-3"
                        data-dismiss="modal">
                        <i class="fas fa-times-circle fa-w fa-lg"></i>
                        CANCEL
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    $('#showModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) ;
        var name = button.data('name');
        var serial = button.data('serial');
        var quantity = button.data('quantity');
        var price = button.data('price');
        var type = button.data('type');
        var modal = $(this);
        modal.find('.name').text(name);
        modal.find('.serial').text(serial);
        modal.find('.quantity').text(quantity);
        modal.find('.price').text(price);
        modal.find('.type').text(type);
    });
</script>
@endpush