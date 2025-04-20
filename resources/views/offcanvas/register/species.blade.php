<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas-select-species">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title text-gradient-primary text-center">What is your pet's species?</h5>
        <button type="button" class="btn btn-outline-primary ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-x" style="font-size: 32px;"></i></button>
    </div>
    <div class="offcanvas-body">
        <!-- <i class="bi bi-caret-left-fill" style="position: absolute; top: 0px; left: 320px; font-size: 420px; color: #130d22;"></i> -->
        <div class="card card-interactable">
            <div class="select-species-option card-body d-flex align-items-center" data-option="Dog">
                <img src="{{ asset('images/mayor_icons_dog.png') }}" width="64" height="64" class="me-4">
                <div>
                    <span style="font-size: 24px;">Dog</span>
                    <br>
                    <span style="font-style: italic; opacity: 0.16;">Genus: Canis lupus familiaris</span>
                </div>
            </div>
        </div>
        <div class="card card-interactable">
            <div class="select-species-option card-body d-flex align-items-center" data-option="Cat">
                <img src="{{ asset('images/mayor_icons_cat.png') }}" width="64" height="64" class="me-4">
                <div>
                    <span style="font-size: 24px;">Cat</span>
                    <br>
                    <span style="font-style: italic; opacity: 0.16;">Genus: Felis catus</span>
                </div>
            </div>
        </div>
        <div class="card card-interactable">
            <div class="select-species-option card-body d-flex align-items-center" data-option="Rabbit">
                <img src="{{ asset('images/mayor_icons_rabbit.png') }}" width="64" height="64" class="me-4">
                <div>
                    <span style="font-size: 24px;">Rabbit</span>
                    <br>
                    <span style="font-style: italic; opacity: 0.16;">Genus: Oryctolagus cuniculus</span>
                </div>
            </div>
        </div>
        <div class="card card-interactable">
            <div class="select-species-option card-body d-flex align-items-center" data-option="Bird">
                <img src="{{ asset('images/mayor_icons_bird.png') }}" width="64" height="64" class="me-4">
                <div>
                    <span style="font-size: 24px;">Bird</span>
                    <br>
                    <span style="font-style: italic; opacity: 0.16;">Genus: Aves</span>
                </div>
            </div>
        </div>
        <div class="mt-2">
            <div class="banner-container banner-info p-3 text-center">
                <i class="banner-icon bi bi-info-circle"></i> Can't find your pet species?<br>Contact us and let us help you!
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