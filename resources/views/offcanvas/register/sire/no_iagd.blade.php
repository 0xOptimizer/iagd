<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas-input-sire-no_iagd">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title text-gradient-primary text-center">Enter the sire's details</h5>
        <button type="button" class="btn btn-outline-primary ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-x" style="font-size: 32px;"></i></button>
    </div>
    <div class="offcanvas-body">
        <!-- <input type="file" class="form-control" id="pet-sire-image-input" accept="image/*" style="display: none;"> -->
        <!-- <div class="text-center">
            <div id="pet-sire-image-input-mimic" style="width: 128px; height: 128px;">
                <i class="bi bi-plus-circle-dotted"></i>
                <span>Press to upload the sire's image</span>
            </div>
        </div> -->
        <div>
            <div class="banner-container banner-info p-3 text-center">
                <i class="banner-icon bi bi-info-circle"></i> To upload the sire's photo, they must be a registered IAGD member. You can connect them to IAGD in the future.
            </div>
        </div>
        <div class="form-floating mt-2">
            <input type="text" class="form-control" id="pet-sire-no_iagd-name-input" placeholder="Sire's Name">
            <label for="pet-sire-no_iagd-name-input">Sire's Name</label>
        </div>
        <div class="form-floating mt-2">
            <input type="text" class="form-control" id="pet-sire-no_iagd-breed-input" placeholder="Sire's Breed">
            <label for="pet-sire-no_iagd-breed-input">Sire's Breed</label>
        </div>
        <div class="d-flex justify-content-between align-items-center mt-3">
            <button type="button" class="btn btn-outline-primary me-2" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-input-sire-iagd" aria-label="Back">
                Back
            </button>
            <button type="button" class="pet-sire-no_iagd-save-btn btn btn-primary flex-grow-1">
                <i class="bi bi-check-circle-fill"></i> Save Sire
            </button>
        </div>
    </div>
</div>