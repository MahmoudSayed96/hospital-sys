<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-secondary text-white">
                <h5 class="modal-title" id="editModalLabel">Update Specialist</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="outline:none;">
                    <span aria-hidden="true"><i class="fas fa-times-circle text-white"></i></span>
                </button>
            </div>
            <form action="{{admin_route('specialists.update')}}" method="post">
                <div class="modal-body">
                    <input type="hidden" class="id" name="id">
                    @include('admin.specialists._form')
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
        var id = button.data('id');
        var name = button.data('name');
        var description = button.data('description');
        var status = button.data('status');
        var modal = $(this);
        modal.find('.id').val(id);
        modal.find('.name').val(name);
        modal.find('.description').val(description);
        // Set status value.
        if(status == 1) {
            modal.find('.active').attr('checked', 'checked');
        } else {
            modal.find('.inactive').attr('checked', "checked");
        }
    });
</script>
@endpush