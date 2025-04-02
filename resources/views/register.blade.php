<!DOCTYPE html>

<html>
<head>
    @include('components.header')
</head>
<style>


</style>
<body>
<div class="phone-container">
    <nav class="navbar navbar-dark header sticky-top">
        <div class="container-fluid">
            <!-- Left Group - Logo -->
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/IAGD_Logo_Silver.png') }}" alt="Logo" style="transform: scale(2.25);">
            </a>

            <div class="d-flex">
                IAGD
            </div>

            <!-- Middle Group - Search Bar -->
            <div class="flex-grow-1 mx-3">
                &nbsp;
            </div>

            <!-- Right Group - Buttons -->
            <div class="d-flex gap-2">
                <img class="rounded-circle" src="{{ asset('images/default.png') }}" width="50" height="50" class="me-3">
            </div>
        </div>
    </nav>
    <div class="group-container" data-group="page_1">
        <div class="d-flex align-items-center justify-content-center mb-4">
            <div class="rotating" style="position: absolute; top: 74px; left: 57px; font-size: 144px; color: #312c57; opacity: 0.33; z-index: -1; pointer-events: none;">
                <i class="rotating bi bi-ubuntu"></i>
            </div>
            <!-- <img src="{{ asset('images/iagd_logo_mica.png') }}" width="150" height="150" style="position: absolute; top: 102px; left: 57px; opacity: 0.55;"> -->
            <img src="{{ asset('images/iagd_logo.png') }}" width="125" height="125" class="me-3">
            <div>
                <h4 class="text-gradient-primary mt-2">Free IAGD Registration</h4>
                <p>
                    <!-- <a href="" target="_blank" class="btn btn-outline-primary" style="font-size: 12px;">Check out our IAGD products <i class="bi bi-caret-right-fill" style="vertical-align: 0px;"></i></a> -->
                    <a href="" target="_blank" class="btn btn-outline-primary" style="font-size: 12px;">What is IAGD?</a>
                    <a href="https://redirect.manalok9.com/facebook/iagd" target="_blank" class="btn btn-outline-primary" style="font-size: 12px;"><i class="bi bi-facebook" style="vertical-align: 0px; margin-right: 5px;"></i> Message Us</a>
                </p>
            </div>
        </div>
        <form id="registrationForm" autocomplete="off">
            <div class="row">
                <input class="form-control self-input-new-fields-fields" type="file" id="self-input-photo" name="file" accept="image/*" required="" style="display:none;" multiple>
                <div class="drop-zone create-drop-zone">
                    <div class="drop-message">
                        <img src="{{ asset('images/mayor_icons_add-image.png') }}" class="mb-3" width="48" height="48">
                        <br>
                        <span style="font-size: 14px;">Drag and drop your pet's photo here,</span>
                        <br>
                        <span style="font-size: 14px;">or press to browse from your device.</span>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="form-floating col-12">
                    <input type="text" class="form-control" id="pet-name" placeholder="What is your pet's name?" required>
                    <label for="pet-name" style="margin-left: 12px;">What is your pet's name? <span class="text-danger">*</span></label>
                </div>
            </div>
            <div class="row mt-2" style="position: relative;">
                <div class="form-floating col-4" style="position: relative;">
                    <input type="text" class="pet-species-input input-interactable input-interactable-readonly form-control" id="pet-species" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-select-species" placeholder="Species" readonly>
                    <label for="pet-species" style="margin-left: 12px;">Species <span class="text-danger">*</span></label>
                    <i class="bi bi-caret-right-fill" style="position: absolute; top: 25%; right: 1px; transform: translateY(-50%); font-size: 32px; color: #312c57;"></i>
                </div>
                <div class="form-floating col-8">
                    <input type="text" class="form-control" id="pet-breed" placeholder="Pet Breed">
                    <label for="pet-breed" style="margin-left: 12px;">Breed</label>
                </div>
            </div>
            <!-- Submit Button -->
            <div class="d-grid gap-2 mt-4 mb-3">
                <div class="row">
                    <div class="form-floating col-3">
                        <button type="button" class="group-navigate-btn btn btn-outline-primary btn-lg" data-group="main" style="height: 100%; width: 100%;" disabled>Back</button>
                    </div>
                    <div class="page_1-incomplete-continue-btn-group form-floating col-9">
                        <button type="button" class="page_1-incomplete-continue-btn btn btn-primary btn-lg" style="height: 100%; width: 100%;">Continue</button>
                    </div>
                    <div class="page_1-complete-continue-btn-group form-floating col-9" style="display: none;">
                        <button type="button" class="group-navigate-btn btn btn-primary btn-lg" data-group="page_2" style="height: 100%; width: 100%;">Continue</button>
                    </div>
                </div>
                <div class="page_1-error-banner row" style="display: none;">
                    <div class="col-12">
                        <div class="banner-info p-3 text-danger text-center w-100" style="font-weight: bold;">
                            <i class="bi bi-exclamation-circle"></i> We need your pet's name, photo, and species.
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="group-container" data-group="page_2" style="display: none;">
        <div class="d-flex align-items-center justify-content-start mb-4">
            <img class="pet-preview-image-backdrop rounded-circle" src="{{ asset('images/default.png') }}" width="125" height="125" class="me-3">
            <img class="pet-preview-image rounded-circle" src="{{ asset('images/default.png') }}" width="125" height="125" class="me-3">
            <div style="margin-left: 25px;">
                <h4 class="pet-preview-pet_name text-gradient-primary mt-2">...</h4>
                <h6 class="pet-preview-pet_breed">...</h6>
            </div>
        </div>
        <form id="registrationForm" autocomplete="off">
            <div class="pet-input-age-mimic-group row">
                <div class="form-floating col-12">
                    <input type="date" class="form-control" id="pet-birth_date-mimic" placeholder="Date of Birth">
                    <label for="pet-birth_date-mimic" style="margin-left: 12px;">Date of Birth</label>
                </div>
            </div>
            <div class="pet-input-age-actual-group preview-age row" style="position: relative; display: none;">
                <div class="form-floating col-4" style="position: relative;">
                    <input type="date" class="form-control" id="pet-birth_date" placeholder="Date of Birth">
                    <label for="pet-birth_date" style="margin-left: 12px;">Date of Birth</label>
                    <i class="bi bi-caret-right-fill" style="position: absolute; top: 25%; right: 1px; transform: translateY(-50%); font-size: 32px; color: #312c57;"></i>
                </div>
                <div class="form-floating col-8">
                    <input type="text" class="form-control" id="pet-age" placeholder="Age" readonly>
                    <label for="pet-age" style="margin-left: 12px;">Age</label>
                </div>
            </div>
            <div class="row mt-2">
                <div class="form-floating col-4">
                    <input type="text" class="pet-gender-input input-interactable-readonly form-control" id="pet-gender" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-select-gender" placeholder="Gender" readonly>
                    <!-- <select class="form-control" id="pet-gender" required>
                        <option value="default" hidden>Select</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select> -->
                    <label for="pet-gender" style="margin-left: 12px;">Gender</label>
                </div>
                <div class="form-floating col-4">
                    <input type="text" class="form-control" id="pet-weight" placeholder="Weight">
                    <label for="pet-weight" style="margin-left: 12px;">Weight</label>
                </div>
                <div class="form-floating col-4">
                    <input type="text" class="form-control" id="pet-height" placeholder="Height">
                    <label for="pet-height" style="margin-left: 12px;">Height</label>
                </div>
            </div>
            <div class="row mt-2">
                <div class="form-floating col-12">
                    <input type="text" class="form-control" id="pet-color_eye" placeholder="Eye Color">
                    <label for="pet-color_eye" style="margin-left: 12px;">Eye Color</label>
                </div>
                <div class="form-floating col-12 mt-2">
                    <input type="text" class="form-control" id="pet-color_body" placeholder="Body Color">
                    <label for="pet-color_body" style="margin-left: 12px;">Body Color</label>
                </div>
                <div class="form-floating col-12 mt-2">
                    <input type="text" class="form-control" id="pet-markings" placeholder="Markings">
                    <label for="pet-markings" style="margin-left: 12px;">Markings</label>
                </div>
            </div>
            <div class="row mt-2">
                <div class="form-floating col-10">
                    <input type="text" class="form-control" id="pet-address" placeholder="Pet's Address">
                    <label for="pet-address" style="margin-left: 12px;"><span class="pet-preview-pet_name"></span>'s Address</label>
                </div>
                <div class="form-floating col-2" style="position: relative;">
                    <i class="bi bi-caret-left-fill" style="position: absolute; top: 25%; left: -15px; transform: translateY(-50%); font-size: 32px; color: #312c57;"></i>
                    <button type="button" class="pet-address-autofill btn btn-primary btn-lg w-100 h-100"><i class="bi bi-geo-alt-fill"></i></button>
                </div>
            </div>
            <div class="row mt-2">
                <div class="banner-info p-3 text-center">
                    <i class="bi bi-info-circle"></i> Note: As part of IAGD, your pet details will appear publicly.
                </div>
            </div>
            <!-- Submit Button -->
            <div class="d-grid gap-2 mt-4 mb-3">
                <div class="row">
                    <div class="form-floating col-3 mb-3">
                        <button type="button" class="group-navigate-btn btn btn-outline-primary btn-lg" data-group="page_1" style="height: 100%; width: 100%;">Back</button>
                    </div>
                    <div class="form-floating col-9 mb-3">
                        <button type="button" class="group-navigate-btn btn btn-primary btn-lg" data-group="page_3" style="height: 100%; width: 100%;">Continue</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="group-container" data-group="page_3" style="display: none;">
        <div class="d-flex align-items-center justify-content-start mb-4">
            <img class="pet-preview-image-backdrop rounded-circle" src="{{ asset('images/default.png') }}" width="125" height="125" class="me-3">
            <img class="pet-preview-image rounded-circle" src="{{ asset('images/default.png') }}" width="125" height="125" class="me-3">
            <div style="margin-left: 25px;">
                <h4 class="pet-preview-pet_name text-gradient-primary mt-2">...</h4>
                <h6><span class="pet-preview-pet_breed">...</span> · <span class="pet-preview-pet_age">...</span> old</h6>
            </div>
        </div>
        <form id="registrationForm" autocomplete="off">
            <div class="row">
                <div class="form-floating col-12">
                    <input type="text" class="form-control" id="pet-owner" placeholder="Main Owner">
                    <label for="pet-owner" style="margin-left: 12px;">Who is the main owner of <span class="pet-preview-pet_name"></span>?</label>
                </div>
                <div class="form-floating col-12 mt-2">
                    <textarea class="form-control" id="pet-co_owners" placeholder="Co-Owner(s)" style="min-height: 125px;"></textarea>
                    <label for="pet-co_owners" style="margin-left: 12px;">Co-Owner(s)</label>
                </div>
            </div>
            <div class="row mt-2">
                <div class="form-floating col-10">
                    <input type="text" class="form-control" id="pet-owner_location" placeholder="Owner's Location">
                    <label for="pet-owner_location" style="margin-left: 12px;">Owner's Location</label>
                </div>
                <div class="form-floating col-2" style="position: relative;">
                    <i class="bi bi-caret-left-fill" style="position: absolute; top: 25%; left: -15px; transform: translateY(-50%); font-size: 32px; color: #312c57;"></i>
                    <button type="button" class="pet-owner_address-autofill btn btn-primary btn-lg w-100 h-100"><i class="bi bi-geo-alt-fill"></i></button>
                </div>
                <div class="form-floating col-12 mt-2">
                    <input type="text" class="form-control" id="pet-owner_contact" placeholder="Owner's Contact Number">
                    <label for="pet-owner_contact" style="margin-left: 12px;">Owner's Contact Number</label>
                </div>
                <div class="form-floating col-12 mt-2">
                    <input type="text" class="form-control" id="pet-owner_email" placeholder="Owner's Email">
                    <label for="pet-owner_email" style="margin-left: 12px;">Owner's Email</label>
                </div>
            </div>
            <div class="row mt-2">
                <div class="banner-info p-3 text-center">
                    <i class="bi bi-info-circle"></i> Note: Except the names, owner details will not publicly appear.
                </div>
            </div>
            <!-- Submit Button -->
            <div class="d-grid gap-2 mt-4 mb-3">
                <div class="row">
                    <div class="form-floating col-3 mb-3">
                        <button type="button" class="group-navigate-btn btn btn-outline-primary btn-lg" data-group="page_2" style="height: 100%; width: 100%;">Back</button>
                    </div>
                    <div class="form-floating col-9 mb-3">
                        <button type="button" class="group-navigate-btn btn btn-primary btn-lg" data-group="page_4" style="height: 100%; width: 100%;">Continue</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Sales Entry</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editSalesForm">
                    <div class="form-floating mb-3">
                        <select class="form-control" id="edit-team">
                            <option value="default" hidden>Select</option>
                            <option value="extreme_aces">Extreme Aces</option>
                            <option value="unstoppable_closers">Unstoppable Closers</option>
                        </select>
                        <label for="edit-team">Team</label>
                    </div>

                    <div class="form-floating mb-3">
                        <select class="edit-sales-input type-select form-control" name="edit-type" id="edit-type">
                            <option value="default" selected hidden>Select</option>
                            <option value="distributors">Distributors</option>
                            <option value="dealers">Dealers</option>
                            <option value="iagd">IAGD</option>
                            <option value="mainstream">Mainstream</option>
                            <option value="mk9">MK9 Business Unit</option>
                            <option value="mrh_/_f&b">MRH / F&B</option>
                            <option value="retail">Retail</option>
                            <option value="osd">OSD</option>
                        </select>
                        <label for="creeditate-type">Type</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="edit-sales_amount" step="0.01" required>
                        <label for="edit-sales_amount">Sales Amount</label>
                    </div>

                    <div class="form-floating mb-3">
                        <select class="form-control" id="edit-currency">
                            <option value="php" selected>PHP</option>
                            <option value="usd" disabled>USD</option>
                            <option value="jpy" disabled>JPY</option>
                            <option value="cny" disabled>CNY</option>
                        </select>
                        <label for="edit-currency">Currency</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" id="edit-date" required>
                        <label for="edit-date">Date</label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger me-auto" id="deleteEntry" style="width: 50px;"><i class="bi bi-trash-fill"></i></button>
                <button type="button" class="btn btn-primary" id="saveEdit" style="width: 225px;"><i class="bi bi-floppy2-fill"></i> Save Changes</button>
            </div>
        </div>
    </div>
</div>
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
            <div class="banner-info p-3 text-center">
                <i class="bi bi-info-circle"></i> Can't find your pet species?<br>Contact us and let us help you!
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
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas-pet-images">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title text-gradient-primary text-center">Select an image to make it the primary</h5>
        <button type="button" class="btn btn-outline-primary ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-x" style="font-size: 32px;"></i></button>
    </div>
    <div class="offcanvas-body">
        <div class="pet-input-images-container"></div>
    </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/luxon/3.4.3/luxon.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script>
var hasPetImage = false;
function page_1_continue_validate() {
    const petName = $('#pet-name').val();
    const petSpecies = $('#pet-species').val();

    if (petName && petSpecies && hasPetImage) {
        $('.page_1-incomplete-continue-btn-group').hide();
        $('.page_1-complete-continue-btn-group').show();
    } else {
        $('.page_1-complete-continue-btn-group').hide();
    }
}
$(document).ready(function() {

    $('.group-navigate-btn').on('click', function() {
        const group = $(this).data('group');

        if (group == 'analytics') {
            fetchLeaderboardData();
            fetchWeeklyChartData();
            fetchMonthlyChartData();
        } else if (group == 'create') {
            refreshLatestSalesContainer();
            fetchLatestSales(1, 1);
        } else if (group == 'history') {
            refreshLatestSalesContainer();
            fetchLatestSales(1, 50);
        }
    });

    
    $('.subgroup-navigate-btn').on('click', function() {
        const subgroup = $(this).data('group');
        $('.subgroup-container').hide();
        $(`.subgroup-container[data-group="${subgroup}"]`).show();

        $('.subgroup-navigate-btn').removeClass('btn-primary').addClass('btn-outline-primary');
        $(this).removeClass('btn-outline-primary').addClass('btn-primary');
    });
    $(".generate-report-btn").on("click", function () {
        let reportType = $(this).data("report");
        let startDate = $("#startDate").val();
        let endDate = $("#endDate").val();

        if (!startDate || !endDate) {
            alert("Error: Start date or end date not found.");
            return;
        }

        let sanitizeFileName = (str) => str.replace(/[^\w\-]/g, "-");

        startDate = sanitizeFileName(startDate);
        endDate = sanitizeFileName(endDate);

        let randomHex = Math.floor(Math.random() * 0xFFFFFFFF).toString(16).padStart(8, "0");
        let fileName = `${reportType}_${startDate}_${endDate}_0x${randomHex}.png`;

        let targetElement = $(`.printable-container[data-report="${reportType}"]`);

        if (targetElement.length === 0) {
            alert("Error: No printable container found for this report.");
            return;
        }

        html2canvas(targetElement[0]).then((canvas) => {
            let link = document.createElement("a");
            link.href = canvas.toDataURL("image/png");
            link.download = fileName;
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        }).catch((error) => {
            console.error("Error generating image:", error);
            alert("An error occurred while generating the report.");
        });
    });

    let droppedFiles = {}; // For drag 'n drop functionality

    function previewImage(input, dropZone) {
        if (input.files && input.files.length) {
            hasPetImage = true;
            dropZone.empty();
            $(".pet-input-images-container").empty();
            let files = Array.from(input.files).slice(0, 5);
            files.forEach(function(file, index) {
                let reader = new FileReader();
                reader.onload = function(e) {
                    // Create drop zone image element.
                    let dzImg = $("<img>")
                        .attr("src", e.target.result)
                        .addClass("drop-zone-img")
                        .data("index", index)
                        .css({
                            "object-fit": "contain",
                            "max-width": "100%",
                            "max-height": "100%"
                        });
                    if (index === 0) {
                        dzImg.addClass('drop-zone-primary-img');
                        dzImg.css({
                            "transform": "none",
                            "position": "relative",
                            "z-index": 10
                        });
                    } else {
                        let rotation = (index % 2 === 0 ? "rotate(3deg)" : "rotate(-3deg)");
                        dzImg.css({
                            "transform": rotation,
                            "position": "absolute",
                            "top": 0,
                            "left": 0,
                            "z-index": 10 - index,
                            "border": "none"
                        });
                    }
                    dropZone.append(dzImg);
                    
                    // Create offcanvas card element (displayed normally).
                    let card = $("<div>")
                        .addClass("pet-image-card")
                        .data("index", index)
                        .css({
                            "cursor": "pointer",
                            "border": index === 0 ? "2px solid #000" : "none",
                            "margin-bottom": "10px",
                            "max-width": "300px",
                            "max-height": "300px",
                            "overflow": "hidden"
                        });
                    let cardImg = $("<img>")
                        .attr("src", e.target.result)
                        .css({
                            "width": "100%",
                            "height": "100%",
                            "object-fit": "contain"
                        });
                    card.append(cardImg);
                    $(".pet-input-images-container").append(card);
                    
                    // Clicking a card updates primary image and closes offcanvas.
                    card.on("click", function() {
                        $(".pet-input-images-container .pet-image-card").css("border", "none");
                        $(this).css("border", "2px solid #000");
                        let selectedSrc = $(this).find("img").attr("src");
                        dropZone.find("img.drop-zone-img").each(function() {
                            let idx = $(this).data("index");
                            if ($(this).attr("src") === selectedSrc) {
                                $(this).css({
                                    "border": "2px solid #000",
                                    "transform": "none",
                                    "z-index": 10
                                });
                            } else {
                                let rotation = (idx % 2 === 0 ? "rotate(3deg)" : "rotate(-3deg)");
                                $(this).css({
                                    "border": "none",
                                    "transform": rotation,
                                    "z-index": 10 - idx
                                });
                            }
                        });
                        $("#offcanvas-pet-images").offcanvas("hide");
                    });
                };
                reader.readAsDataURL(file);
            });
            dropZone.find(".drop-message").hide();
            droppedFiles[input.id] = input.files;
            // Send the first image for classification.
            let formData = new FormData();
            formData.append("file", input.files[0]);
            $.ajax({
                url: "https://iagd-api.metaanimals.org/classify/",
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response && response.species) {
                        if (response.species_confidence > 0.8) {
                            $('#pet-species').val(response.species.charAt(0).toUpperCase() + response.species.slice(1));
                            animateShine($('#pet-species').parent('.form-floating'));
                            // $('.drop-zone').floatingText(getRandomResponse(response.species));
                        }
                    } else {
                        console.warn("Unexpected response format:", response);
                    }
                },
                error: function(xhr, status, error) {
                    console.error("Error:", error);
                }
            });
            // Show offcanvas and button if more than one image.
            if (input.files.length > 1) {
                $('.drop-zone-primary-img').addClass('drop-zone-multiple-primary-img');
                $(".offcanvas-input-images-btn").show();
                $("#offcanvas-pet-images").offcanvas("show");
            } else {
                $('.drop-zone-primary-img').addClass('drop-zone-single-primary-img');
                $(".offcanvas-input-images-btn").hide();
            }
        } else {
            dropZone.find(".drop-message").show();
        }
    }

    function handleDragging(e) {
        e.preventDefault();
        e.stopPropagation();
    }

    function handleDragEnterLeave(e) {
        e.preventDefault();
        e.stopPropagation();
        let dropZone = $(e.target).closest(".drop-zone");
        dropZone.toggleClass("dragging", e.type === "dragenter");
    }

    function handleDrop(e) {
        e.preventDefault();
        e.stopPropagation();
        let dropZone = $(e.target).closest(".drop-zone");
        let files = e.originalEvent.dataTransfer.files;
        let input = dropZone.siblings("input[type='file']")[0];

        droppedFiles[input.id] = files;

        dropZone.removeClass("dragging");

        if (files.length) {
            input.files = files;
            previewImage(input, dropZone);
        } else {
            dropZone.html(`<div class="drop-message">
                <img src="{{ asset('images/mayor_icons_add-image.png') }}" class="mb-3" width="48" height="48">
                <br>
                <span style="font-size: 14px;">Drag and drop your pet's photo here,</span>
                <br>
                <span style="font-size: 14px;">or press to browse from your device.</span>
            </div>`);
        }
    }

    function setupDropZone(dropZoneSelector) {
        let dropZones = $(dropZoneSelector);

        dropZones.on("dragenter", handleDragEnterLeave);
        dropZones.on("dragleave", handleDragEnterLeave);
        dropZones.on("dragover", handleDragging);
        dropZones.on("drop", handleDrop);

        dropZones.on("click", function () {
            $(this).siblings("input[type='file']").click();
        });

        $("input[type='file']").on("change", function () {
            let dropZone = $(this).siblings(dropZoneSelector);
            if (this.files.length) {
                previewImage(this, dropZone);
            } else {
                dropZone.html(`<div class="drop-message">
                    <img src="{{ asset('images/mayor_icons_add-image.png') }}" class="mb-3" width="48" height="48">
                    <br>
                    <span style="font-size: 14px;">Drag and drop your pet's photo here,</span>
                    <br>
                    <span style="font-size: 14px;">or press to browse from your device.</span>
                </div>`);
            }
        });
    }

    setupDropZone(".create-drop-zone");
    setupDropZone(".affiliates-drop-zone");

    function resetDropZone(dropZoneSelector) {
        let dropZones = $(dropZoneSelector);
        
        dropZones.each(function() {
            let dropZone = $(this);

            dropZone.find("img").remove();
            dropZone.html(`<div class="drop-message">
                <img src="{{ asset('images/mayor_icons_add-image.png') }}" class="mb-3" width="48" height="48">
                <br>
                <span style="font-size: 14px;">Drag and drop your pet's photo here,</span>
                <br>
                <span style="font-size: 14px;">or press to browse from your device.</span>
            </div>`);
        });

        $("input[type='file']").val('');
    }

    $('#pet-name').on('input', function() {
        let petName = $(this).val();
        $('.pet-preview-pet_name').text(petName);
    });
    $('#pet-breed').on('input', function() {
        let petBreed = $(this).val();
        $('.pet-preview-pet_breed').text(petBreed);
    });

    $(".pet-address-autofill").click(function() {
        var $button = $(this);
        var $input = $("#pet-address");

        if ($input.val().trim() !== "" && !confirm("This will remove the currently entered address. Do you want to continue?")) {
            return;
        }

        $button.prop("disabled", true).html('<span class="spinner-border spinner-border-sm"></span>');
        $input.prop("disabled", true);

        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var lat = position.coords.latitude;
                var lon = position.coords.longitude;

                $.getJSON(`https://nominatim.openstreetmap.org/reverse?format=json&lat=${lat}&lon=${lon}`, function(data) {
                    var city = data.address.city || data.address.town || data.address.village || "Unknown City";
                    var region = data.address.state || "Unknown Region";
                    var country = data.address.country || "Unknown Country";
                    
                    $input.val(`${city}, ${region}, ${country}`);
                    animateShine($input.parent('.form-floating'));
                }).always(function() {
                    resetPetLocationAutofill($button, $input);
                });
            }, function() {
                resetPetLocationAutofill($button, $input);
            });
        } else {
            resetPetLocationAutofill($button, $input);
        }
    });

    function resetPetLocationAutofill($button, $input) {
        $button.prop("disabled", false).html('<i class="bi bi-geo-alt-fill"></i>');
        $input.prop("disabled", false);
    }

    $(".pet-owner_address-autofill").click(function() {
        var $button = $(this);
        var $input = $("#pet-owner_location");

        if ($input.val().trim() !== "" && !confirm("This will remove the currently entered address. Do you want to continue?")) {
            return;
        }

        $button.prop("disabled", true).html('<span class="spinner-border spinner-border-sm"></span>');
        $input.prop("disabled", true);

        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var lat = position.coords.latitude;
                var lon = position.coords.longitude;

                $.getJSON(`https://nominatim.openstreetmap.org/reverse?format=json&lat=${lat}&lon=${lon}`, function(data) {
                    var city = data.address.city || data.address.town || data.address.village || "Unknown City";
                    var region = data.address.state || "Unknown Region";
                    var country = data.address.country || "Unknown Country";
                    
                    $input.val(`${city}, ${region}, ${country}`);
                    animateShine($input.parent('.form-floating'));
                }).always(function() {
                    resetPetOwnerLocationAutofill($button, $input);
                });
            }, function() {
                resetPetOwnerLocationAutofill($button, $input);
            });
        } else {
            resetPetOwnerLocationAutofill($button, $input);
        }
    });

    function resetPetOwnerLocationAutofill($button, $input) {
        $button.prop("disabled", false).html('<i class="bi bi-geo-alt-fill"></i>');
        $input.prop("disabled", false);
    }

    $('#pet-birth_date-mimic, #pet-birth_date').on('change', function () {
        let birthDate = $(this).val();
        if (!birthDate) return;

        let dt = luxon.DateTime.fromISO(birthDate);
        let now = luxon.DateTime.now();
        let diff = now.diff(dt, ['years', 'months']).toObject();

        let years = Math.floor(diff.years);
        let months = Math.floor(diff.months);

        let ageText = years > 0 ? `${years} years, ${months} months` : `${months} months`;
        
        $('#pet-birth_date').val(birthDate);
        $('#pet-age').val(ageText);
        $('.pet-preview-pet_age').text(ageText);

        $('.pet-input-age-mimic-group').hide();
        $('.pet-input-age-actual-group').show();
        animateShine($('#pet-age').parent('.form-floating'));
    });

    $('.select-species-option').on('click', function() {
        const option = $(this).data('option');
        $('#pet-species').val(option);
        $('#offcanvas-select-species').offcanvas('hide');
        page_1_continue_validate();
    });

    $('.select-gender-option').on('click', function() {
        const option = $(this).data('option');
        $('#pet-gender').val(option);
        $('#offcanvas-select-gender').offcanvas('hide');
    });

    $('.page_1-incomplete-continue-btn').on('click', function() {
        $('.page_1-error-banner').show();
        $('.page_1-error-banner').show().addClass('animate__animated animate__headShake')
            .one('animationend', function() {
                $(this).removeClass('animate__animated animate__headShake');
            });
    });

    $('.page_1-complete-continue-btn').on('click', function() {
        $('.page_1-error-banner').hide();
    });

    $('#petName').bind('input', function() {
        page_1_continue_validate();
    });
});
</script>
</html>