<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas-specify_mix">
    <div class="offcanvas-header">
        <div class="offcanvas-title">
            <h5 class="text-gradient-primary">Add co-owners</h5>
            <br>
            <span class="text-muted"><i class="bi bi-arrow-return-right"></i> <span class="pet-preview-pet_breed">...</span></span>
        </div>
        <button type="button" class="btn btn-outline-primary ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-check2-circle" style="font-size: 32px;"></i></button>
    </div>
    <div class="offcanvas-body position-relative">
        <div class="position-absolute" style="top: 50%; left: 50%; transform: translate(-50%, -50%); opacity: 0.01;">
            <img src="{{ asset('images/offcanvas-bg-hexagons.png') }}">
        </div>
        <div class="pet-breeds-container">
            <div class="pet-breeds-input-container specify_mix-default row mt-2">
                <div class="col-sm-1 pet-breeds-grip">
                    <i class="bi bi-grip-vertical" style="font-size: 36px; margin-left: -8px; color: #312c57"></i>
                </div>
                <div class="col-sm-7 position-relative">
                    <input type="text" class="pet-breeds-input form-control" style="height: 56px;">
                    <i class="bi bi-caret-right-fill" style="position: absolute; top: 25%; right: 1px; transform: translateY(-50%); font-size: 32px; color: #312c57;"></i>
                    <!-- <button type="button" class="copy-btn btn btn-secondary position-absolute" data-target="pet-profile-qr_code-url" style="top: 8px; right: -40px; background-color: #272042;">
                        <i class="bi bi-trash-fill"></i>
                    </button> -->
                </div>
                <div class="col-sm-4">
                    <div class="input-group">
                        <input type="number" class="pet-breeds-input-percent form-control" value="100" step="0.01" max="100" style="height: 56px;">
                        <span class="input-group-text">%</span>
                    </div>
                </div>
            </div>
            <div class="pet-breeds-input-container specify_mix-add_more row mt-2">
                <div class="col-sm-1 pet-breeds-grip">
                    <i class="bi bi-grip-vertical" style="display: none; font-size: 36px; margin-left: -8px; color: #312c57;"></i>
                </div>
                <div class="col-sm-7 position-relative">
                    <input type="text" class="pet-breeds-input form-control" placeholder="Add more (if possible)..." style="height: 56px;">
                    <i class="bi bi-caret-right-fill" style="position: absolute; top: 25%; right: 1px; transform: translateY(-50%); font-size: 32px; color: #312c57;"></i>
                </div>
                <div class="col-sm-4">
                    <div class="input-group">
                        <input type="number" class="pet-breeds-input-percent form-control" placeholder="0" step="0.01" max="100" style="height: 56px;">
                        <span class="input-group-text">%</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="mt-2">
            <button type="button" class="btn btn-primary w-100"><i class="bi bi-plus"></i> Add Another Breed</button>
        </div> -->
        <div class="row mt-5">
            <div class="banner-container banner-info p-3 text-center">
                <i class="banner-icon bi bi-info-circle"></i> Having trouble with the breed specification?
                <br>Contact us and let us help you!
                <br><a href="https://links.manalok9.com/iagd?t=ST02" target="_blank" class="btn btn-primary btn-sm"><i class="bi bi-messenger" style="vertical-align: 0px;"></i> Messenger</a>
            </div>
        </div>
    </div>
</div>