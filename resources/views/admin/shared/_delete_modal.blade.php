<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="showModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="showModalLabel">Delete Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="outline:none;">
                    <span aria-hidden="true"><i class="fas fa-times-circle text-white"></i></span>
                </button>
            </div>
            <div class="modal-body text-center">
                <h2>Are you sure Went delete this item?</h2>
                <p>You will not be able to recover this data!</p>
            </div>
            <div class="modal-footer">
                <div class="btns d-flex align-items-center justify-content-center">
                    <button type="button" class="d-block btn btn-dark badge badge-pill px-3 py-2  mr-3"
                        data-dismiss="modal">
                        <i class="icon fas fa-times-circle"></i>
                        CANCEL
                    </button>
                    <button type="button" data-id=""
                        class="delete-btn d-block btn btn-danger badge badge-pill px-3 py-2  text-capitalize">
                        <i class="icon fas fa-check-circle"></i>
                        Delete
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
<script>
    $('#deleteModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) ;
        var id = button.data('id');
        var modal = $(this);
        modal.find('.delete-btn').attr('data-id', id);
    });
    $('.delete-btn').on('click', function(){
        var formId = $(this).data('id');
        $('#delete-form-'+formId).submit();
    });
</script>
@endpush