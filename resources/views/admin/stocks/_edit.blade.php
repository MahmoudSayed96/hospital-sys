<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-secondary text-white">
                <h5 class="modal-title" id="editModalLabel">Update Department</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="outline:none;">
                    <span aria-hidden="true"><i class="fas fa-times-circle text-white"></i></span>
                </button>
            </div>
            <form action="{{admin_route('stocks.update')}}" method="post">
                <div class="modal-body">
                    <input type="hidden" class="id" name="id">
                    @include('admin.stocks._form')
                </div>
                <div class="modal-footer">
                    <div class="btns d-flex align-items-center justify-content-center">
                        <button type="button" class="d-block btn btn-danger badge badge-pill px-3 py-2  mr-3"
                            data-dismiss="modal">
                            <i class="icon fas fa-times-circle"></i>
                            CANCEL
                        </button>
                        <button type="submit"
                            class="d-block btn btn-success badge badge-pill px-3 py-2  text-capitalize">
                            <i class="icon fas fa-check-circle"></i>
                            UPDATE
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@push('scripts')
<script>
    $('#editModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) ;
        var name = button.data('name');
        var serial = button.data('serial');
        var quantity = button.data('quantity');
        var price = button.data('price');
        var type = button.data('type');
        var id = button.data('id');
        var modal = $(this);
        modal.find('.name').text(name);
        modal.find('.serial').text(serial);
        modal.find('.quantity').text(quantity);
        modal.find('.price').text(price);
        modal.find('.id').val(id);
        // Set type value.
        if(type == 0) {
            modal.find('.hospital').attr('selected', 'selected');
        } else {
            modal.find('.lab').attr('selected', "selected");
        }
    });
</script>
@endpush