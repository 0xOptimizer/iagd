<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas-share-pet">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title text-gradient-primary text-center">Select a social media platform</h5>
        <button type="button" class="btn btn-outline-primary ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-x" style="font-size: 32px;"></i></button>
    </div>
    <div class="offcanvas-body">
        <button type="button" onclick="share('facebook')" class="card card-interactable w-100">
            <div class="card-body d-flex align-items-center">
                <img src="{{ asset('images/facebook_logo.svg') }}" width="64" height="64" class="me-4" style="object-fit: contain;">
                <div>
                    <span style="font-size: 24px;">Facebook</span>
                </div>
            </div>
        </button>
        <button type="button" onclick="share('twitter')" class="card card-interactable w-100">
            <div class="card-body d-flex align-items-center">
                <img src="{{ asset('images/twitter_logo.jpeg') }}" width="64" height="64" class="me-4" style="object-fit: contain;">
                <div>
                    <span style="font-size: 24px;">X / Twitter</span>
                </div>
            </div>
        </button>
        <div class="mt-2">
            <div class="banner-container banner-info p-3 text-center">
                <i class="banner-icon bi bi-info-circle"></i> Having trouble sharing?<br>Contact us and let us help you!
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