<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas-pet-profile-qr_code">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title text-gradient-primary text-center">QR Code</h5>
        <button type="button" class="btn btn-outline-primary ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-x" style="font-size: 32px;"></i></button>
    </div>
    <div class="offcanvas-body">
        <div id="qrcode" style="text-align: center; height: 256px; width: 110%; margin-left: -18px; background-color: #00000063;"></div>
        <div class="mt-3">
            <div class="form-floating position-relative">
                <input type="text" class="form-control w-100" id="pet-profile-qr_code-url" placeholder="Link" value="{{ url()->current() }}?t=q" readonly>
                <label for="pet-profile-qr_code-url" class="text-gradient-golden"><i class="bi bi-link-45deg"></i> Link</label>
                <button type="button" class="copy-btn btn btn-secondary position-absolute" data-target="pet-profile-qr_code-url" style="top: 8px; right: 8px; background-color: #272042;">
                    <i class="bi bi-clipboard"></i>
                </button>
            </div>
        </div>
        <div class="radio-btn-group mt-2 w-100">
            <button class="pet-qr-theme-btn radio-btn radio-btn-active" data-theme="light">Light</button>
            <button class="pet-qr-theme-btn radio-btn" data-theme="dark">Dark</button>
            <button class="pet-qr-theme-btn radio-btn" data-theme="purple">Purple</button>
            <button class="pet-qr-theme-btn radio-btn" data-theme="golden">Golden</button>
        </div>
        <div class="mt-2">
            <div class="banner-container banner-info p-3 text-center">
                <i class="banner-icon bi bi-info-circle"></i> Having trouble with the QR code?
                <br>Contact us and let us help you!
                <br><a href="https://links.manalok9.com/iagd?t=ST01" target="_blank" class="btn btn-primary btn-sm"><i class="bi bi-messenger" style="vertical-align: 0px;"></i> Messenger</a>
            </div>
        </div>
        <div class="mt-2">
            
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