<!-- Modal -->
<div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="showModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="showModalLabel">Department Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="outline:none;">
                    <span aria-hidden="true"><i class="fas fa-times-circle text-white"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="mb-2">
                    <strong><i class="fas fa-building fa-lg mr-2"></i>Name:</strong>
                    <span class="name"></span>
                </div>
                <div class="mb-2">
                    <strong>
                        <i class="fas fa-file-alt fa-lg mr-2"></i> Description:</strong>
                    <p class="lead description"></p>
                </div>
                <div class="mb-2">
                    <strong>
                        <i class="fas fa-info-circle fa-lg mr-2"></i> Status: </strong>
                    <span class="status"></span>
                </div>
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
        var description = button.data('description');
        var status = button.data('status');
        var modal = $(this);
        modal.find('.name').text(name);
        modal.find('.description').text(description);
        modal.find('.status').text(status);
    });
</script>
@endpush