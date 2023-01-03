<div>
    <div>
        <div wire:ignore.self class="modal fade" id="deleteBrandModal" tabindex="-1" aria-labelledby="deleteBrandModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="deleteBrandModalLabel">Brand Delete</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="destroyBrand">
                    <div class="modal-body">
                        <h6>Are you sure you want to delete this data?</h6>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Yes. Delete</button>
                      </div>
                </form>
            </div>
        </div>
    </div>

    @push('script')

    <script>
        window.addEventListener('close-modal', event=> {
            $('#deleteBrandModal').modal('hide');
        });
    </script>
    @endpush
</div>
