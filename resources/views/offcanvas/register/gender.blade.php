<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas-select-gender">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title text-gradient-primary text-center">What is your pet's gender?</h5>
        <button type="button" class="btn btn-outline-primary ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-x" style="font-size: 32px;"></i></button>
    </div>
    <div class="offcanvas-body">
        <div class="card card-interactable">
            <div class="select-gender-option card-body d-flex align-items-center" data-option="Male">
                <img src="{{ asset('images/freepik_male.png') }}" width="48" height="48" class="me-4">
                <div>
                    <span style="font-size: 24px;">Male</span>
                </div>
            </div>
        </div>
        <div class="card card-interactable">
            <div class="select-gender-option card-body d-flex align-items-center" data-option="Female">
                <img src="{{ asset('images/freepik_female.png') }}" width="48" height="48" class="me-4">
                <div>
                    <span style="font-size: 24px;">Female</span>
                </div>
            </div>
        </div>
    </div>
</div>