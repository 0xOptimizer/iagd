<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas-pets-view">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title text-gradient-primary text-center"><span class="view-pet-name"></span></h5>
        <button type="button" class="btn btn-outline-primary ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-x" style="font-size: 32px;"></i></button>
    </div>
    <div class="offcanvas-body">
        <div id="view-pets-loading">
            <div class="text-center">
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <p class="mt-2">Loading pet details, please wait...</p>
            </div>
        </div>
        <div id="view-pets-container"></div>
    </div>
</div>