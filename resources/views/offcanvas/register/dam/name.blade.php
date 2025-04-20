<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas-input-dam-name">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title text-gradient-primary text-center">Enter the dam's name</h5>
        <button type="button" class="btn btn-outline-primary ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-x" style="font-size: 32px;"></i></button>
    </div>
    <div class="offcanvas-body">
        <div class="form-floating">
            <input type="text" class="form-control" id="pet-dam-search-name-input" placeholder="dam's Name">
            <label for="pet-dam-search-name-input">dam's Name</label>
        </div>
        <div class="d-flex justify-content-between align-items-center mt-3">
            <button type="button" class="btn btn-outline-primary me-2" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-input-dam-iagd" aria-label="Back">
                Back
            </button>
            <button type="button" class="pet-dam-search-name-btn btn btn-primary flex-grow-1">
                <i class="bi bi-search"></i> Search Records
            </button>
        </div>
        <hr class="my-3">
        <div class="pet-dam-search-name-results">

        </div>
        <div class="pet-dam-search-name-banner-no_records_found mt-2" style="display: none;">
            <div class="banner-container banner-warning p-3 text-center">
                <i class="banner-icon bi bi-database-fill-exclamation"></i> No records found for <b class="pet-dam-search-name-preview_input">...</b>
                <div class="mt-3">
                    <button class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-input-dam-iagd-number">
                        Search for their IAGD number instead
                    </button>
                </div>
            </div>
        </div>
        <div class="mt-2">
            <div class="banner-container banner-info p-3 text-center">
                <i class="banner-icon bi bi-info-circle"></i> Can't find the dam?<br>Contact us and let us help you!
            </div>
        </div>
    </div>
</div>