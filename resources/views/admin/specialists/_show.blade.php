<!-- Modal -->
<div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="showModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="showModalLabel">Specialist Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="outline:none;">
                    <span aria-hidden="true"><i class="fas fa-times-circle text-white"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="mb-2">
                    <strong><i class="fas fa-stethoscope fa-lg mr-2"></i>Name:</strong>
                    <span class="name"></span>
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
        var modal = $(this);
        modal.find('.name').text(name);
    });
</script>
@endpush