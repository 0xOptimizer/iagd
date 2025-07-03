<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas-input-dam">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title text-gradient-primary text-center">Who is <span class="pet-preview-pet_name">...</span>'s dam?</h5>
        <button type="button" class="btn btn-outline-primary ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-x" style="font-size: 32px;"></i></button>
    </div>
    <div class="offcanvas-body">
        <!-- <i class="bi bi-caret-left-fill" style="position: absolute; top: 0px; left: 320px; font-size: 420px; color: #130d22;"></i> -->
        <div class="has-dam card card-interactable" style="display: none;">
            <div class="select-gender-option card-body d-flex align-items-center" data-option="Male">
                <img class="pet-dam-preview-image me-4" src="{{ asset('images/freepik_male.png') }}" width="48" height="48">
                <div>
                    <span class="pet-dam-preview-pet_name" style="font-size: 24px;">...</span>
                    <br>
                    <span class="pet-dam-preview-pet_breed" style="opacity: 0.16;">...</span>
                </div>
            </div>
        </div>
        <hr class="has-dam my-5" style="display: none;">
        <div class="card card-interactable">
            <div class="card-body d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-input-dam-iagd">
                <img src="{{ asset('images/mayor_icons_search.png') }}" width="64" height="64" class="me-4">
                <div>
                    <span style="font-size: 24px;">Search Database</span>
                    <br>
                    <span style="opacity: 0.16;">Find and identify the dam's details automatically.</span>
                </div>
            </div>
        </div>
        <div class="card card-interactable">
         <div class="card-body d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-input-dam-no_iagd">
                <img src="{{ asset('images/mayor_icons_pencil.png') }}" width="64" height="64" class="me-4">
                <div>
                    <span style="font-size: 24px;">No IAGD Number</span>
                    <br>
                    <span style="opacity: 0.16;">No database record? Enter the dam's name manually.</span>
                </div>
            </div>
        </div>
        <div class="mt-2">
            <div class="banner-container banner-info p-3 text-center">
                <i class="banner-icon bi bi-info-circle"></i> Can't find the dam?<br>Contact us and let us help you!
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