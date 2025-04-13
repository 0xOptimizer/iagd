<nav class="navbar navbar-expand-lg navbar-dark header">
    <div class="container-fluid">
        <!-- Left Group - Logo -->
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/IAGD_Logo_Silver.png') }}" alt="Logo" style="transform: scale(2.25);">
        </a>

        <div class="d-flex">
            <button type="button" class="offcanvas-nav-apps-btn tewi-btn-icon me-2"><i class="bi bi-grid-3x3-gap-fill" style="vertical-align: 0px; font-size: 32px;"></i></button>
        </div>

        <div class="d-flex">
            IAGD
        </div>

        <!-- Middle Group - Search Bar -->
        <div class="flex-grow-1 mx-3">
            <form class="d-flex">
                <div class="form-floating w-100">
                    <input class="form-control me-2" type="search" placeholder="Search a pet registry, facility, or vaccination record" aria-label="Search">
                    <label for="floatingInput"><i class="bi bi-search me-2"></i> Search</label>
                </div>
            </form>
        </div>

        <!-- Right Group - Buttons -->
        <div class="d-flex gap-2">
            <a href="{{ route('register') }}" class="btn btn-primary" style="width: 235px; height: 38px;"><i class="bi bi-feather"></i> Register Pet</a>
            <button type="button" class="btn btn-secondary" style="width: 150px; height: 38px;"><i class="bi bi-dice-5"></i> Random</button>
        </div>
    </div>
</nav>
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas-nav-apps">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title text-gradient-primary text-center">Manalo K9 Family</h5>
        <button type="button" class="btn btn-outline-primary ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-x" style="font-size: 32px;"></i></button>
    </div>
    <div class="offcanvas-body">
        <!-- <i class="bi bi-caret-left-fill" style="position: absolute; top: 0px; left: 320px; font-size: 420px; color: #130d22;"></i> -->
        <div class="card card-interactable">
            <div class="card-body d-flex align-items-center" data-option="Male">
                <img src="{{ asset('images/mk9_logo_compressed.png') }}" width="64" height="64" class="me-4">
                <div>
                    <span style="font-size: 24px;">Manalo K9</span>
                    <br>
                    <span style="opacity: 0.16;">Official website.</span>
                </div>
            </div>
        </div>
        <div class="card card-interactable">
            <div class="card-body d-flex align-items-center" data-option="Dog">
                <img src="{{ asset('') }}" width="64" height="64" class="me-4">
                <div>
                    <span style="font-size: 24px;">Manalo Resort Hotel</span>
                    <br>
                    <span style="opacity: 0.16;">Our resort and hotel venue in Binangonan, Philippines.</span>
                </div>
            </div>
        </div>
        <hr class="my-5">
        <div class="card card-interactable">
            <div class="card-body d-flex align-items-center" data-option="Cat">
                <img src="{{ asset('') }}" width="64" height="64" class="me-4">
                <div>
                    <span style="font-size: 24px;">SDN - Superdog Nutrition</span>
                    <br>
                    <span style="opacity: 0.16;">High quality food for your dogs.</span>
                </div>
            </div>
        </div>
        <div class="card card-interactable">
            <div class="card-body d-flex align-items-center" data-option="Cat">
                <img src="{{ asset('') }}" width="64" height="64" class="me-4">
                <div>
                    <span style="font-size: 24px;">Dog Training</span>
                    <br>
                    <span style="opacity: 0.16;">Let our best trainers train your dog.</span>
                </div>
            </div>
        </div>
        <div class="card card-interactable">
            <div class="card-body d-flex align-items-center" data-option="Cat">
                <img src="{{ asset('') }}" width="64" height="64" class="me-4">
                <div>
                    <span style="font-size: 24px;">Vet Consultation</span>
                    <br>
                    <span style="opacity: 0.16;">Schedule a consultation with Doc Abel.</span>
                </div>
            </div>
        </div>
        <div class="mt-2">
            <div class="banner-info p-3 text-center">
                <i class="bi bi-info-circle"></i> Have inquiries?<br>Contact us and let us help you!
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