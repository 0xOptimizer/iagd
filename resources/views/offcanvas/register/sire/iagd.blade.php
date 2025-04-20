<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas-input-sire-iagd">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title text-gradient-primary text-center">Search through our records</h5>
        <button type="button" class="btn btn-outline-primary ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-x" style="font-size: 32px;"></i></button>
    </div>
    <div class="offcanvas-body">
        <div class="card card-interactable">
            <div class="card-body d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-input-sire-iagd-number">
                <img src="{{ asset('images/iagd_logo_mica.png') }}" width="64" height="64" class="me-4">
                <div>
                    <span style="font-size: 24px;">Use IAGD Number</span>
                    <br>
                    <span style="opacity: 0.16;">Find the sire using their database ID.</span>
                </div>
            </div>
        </div>
        <div class="card card-interactable">
            <div class="card-body d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-input-sire-name">
                <img src="{{ asset('images/mayor_icons_paper-work.png') }}" width="64" height="64" class="me-4">
                <div>
                    <span style="font-size: 24px;">Search their Name</span>
                    <br>
                    <span style="opacity: 0.16;">Find the sire using their name.</span>
                </div>
            </div>
        </div>
        <hr class="my-5">
        <div class="card card-interactable">
            <div class="card-body d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-input-sire-no_iagd">
                <img src="{{ asset('images/mayor_icons_pencil.png') }}" width="64" height="64" class="me-4">
                <div>
                    <span style="font-size: 24px;">Manual Entry</span>
                    <br>
                    <span style="opacity: 0.16;">No database record? Enter the sire's name manually.</span>
                </div>
            </div>
        </div>
        <div class="mt-2">
            <div class="banner-container banner-info p-3 text-center">
                <i class="banner-icon bi bi-info-circle"></i> Can't find the sire?<br>Contact us and let us help you!
            </div>
        </div>
        <!-- <div class="card mt-2">
            <div class="select-species-option card-body d-flex align-items-center">
                <i class="bi bi-info-circle me-3" style="font-size: 48px;"></i>
                <div class="w-100">
                    <input type="text" class="form-control" placeholder="Other (Enter species)">
                </div>
            </div>
        </div> -->
    </div>
</div>
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas-input-sire-iagd-number">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title text-gradient-primary text-center">Enter the sire's IAGD number</h5>
        <button type="button" class="btn btn-outline-primary ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-x" style="font-size: 32px;"></i></button>
    </div>
    <div class="offcanvas-body">
        <div class="form-floating">
            <input type="text" class="form-control" id="pet-sire-search-number-input" placeholder="IAGD Number">
            <label for="pet-sire-search-number-input">IAGD Number</label>
        </div>
        <div class="d-flex justify-content-between align-items-center mt-3">
            <button type="button" class="btn btn-outline-primary me-2" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-input-sire-iagd" aria-label="Back">
                Back
            </button>
            <button type="button" class="pet-sire-search-number-btn btn btn-primary flex-grow-1">
                <i class="bi bi-search"></i> Search Records
            </button>
        </div>
        <hr class="my-3">
        <div class="pet-sire-search-number-results">

        </div>
        <div class="pet-sire-search-number-banner-no_records_found mt-2" style="display: none;">
            <div class="banner-container banner-warning p-3 text-center">
                <i class="banner-icon bi bi-database-fill-exclamation"></i> No records found for <b class="pet-sire-search-number-preview_input">...</b>
                <div class="mt-3">
                    <button class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-input-sire-name">
                        Search for their name instead
                    </button>
                </div>
            </div>
        </div>
        <div class="mt-2">
            <div class="banner-container banner-info p-3 text-center">
                <i class="banner-icon bi bi-info-circle"></i> Can't find the sire?<br>Contact us and let us help you!
            </div>
        </div>
        <!-- <div class="card mt-2">
            <div class="select-species-option card-body d-flex align-items-center">
                <i class="bi bi-info-circle me-3" style="font-size: 48px;"></i>
                <div class="w-100">
                    <input type="text" class="form-control" placeholder="Other (Enter species)">
                </div>
            </div>
        </div> -->
    </div>
</div>