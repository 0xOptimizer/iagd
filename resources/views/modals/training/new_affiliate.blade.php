<div class="modal fade" id="recordModal" tabindex="-1" aria-labelledby="recordModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="recordModalLabel"><i class="bi bi-plus-circle" style="vertical-align: 0;"></i> Add New Affiliate</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row g-3">
                        <div class="col-md-4">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="col-md-8">
                            <label for="representative" class="form-label">Representative</label>
                            <input type="text" class="form-control" id="representative">
                        </div>
                        <div class="col-md-12">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address">
                        </div>
                        <div class="col-md-3">
                            <label for="contact" class="form-label">Contact</label>
                            <input type="text" class="form-control" id="contact_number">
                        </div>
                        <div class="col-md-6">
                            <label for="bank" class="form-label">Bank</label>
                            <input type="text" class="form-control" id="bank">
                        </div>
                        <div class="col-md-3">
                            <label for="date" class="form-label">Date</label>
                            <input type="date" class="form-control" id="date" value="{{ date('Y-m-d') }}">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="affiliate-save-btn btn btn-success"><i class="bi bi-check2-circle" style="vertical-align: 0;"></i> Save Record</button>
            </div>
        </div>
    </div>
</div>