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
            <img src="{{ asset('images/iagd_logo.png') }}" width="125" height="125" class="me-3">
            <div>
                <h4 class="text-gradient-primary mt-2">Free IAGD Registration</h4>
                <p>For paid premium benefits, click here.</p>
            </div>
        </div>
        <form id="registrationForm" autocomplete="off">
            <div class="row">
                <input class="form-control self-input-new-fields-fields" type="file" id="self-input-photo" name="file" accept="image/*" required="" style="display:none;">
                <div class="drop-zone create-drop-zone">
                    <div class="drop-message">
                        <i class="bi bi-download"></i>
                        <br>
                        <span style="font-size: 14px;">Drag and drop your pet's photo here,</span>
                            <br>
                        <span style="font-size: 14px;">or press to browse from your device</span>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="form-floating col-12">
                    <input type="text" class="form-control" id="pet-name" placeholder="Pet Name" required>
                    <label for="pet-name" style="margin-left: 12px;">Pet's Name</label>
                </div>
            </div>
            <div class="row mt-2">
                <div class="form-floating col-4">
                    <input type="text" class="pet-gender-input input-interactable input-interactable-readonly form-control" id="pet-species" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-select-species" placeholder="Species" readonly>
                    <!-- <select class="form-control" id="pet-species" required>
                        <option value="default" hidden>Select</option>
                        <option value="bird">Bird</option>
                        <option value="cat">Cat</option>
                        <option value="dog">Dog</option>
                        <option value="rabbit">Rabbit</option>
                        <option value="others">Others</option>
                    </select> -->
                    <label for="pet-species" style="margin-left: 12px;">Species</label>
                </div>
                <div class="form-floating col-8">
                    <input type="text" class="form-control" id="pet-breed" placeholder="Pet Breed">
                    <label for="pet-breed" style="margin-left: 12px;">Breed</label>
                </div>
            </div>
            <!-- Submit Button -->
            <div class="d-grid gap-2 mt-4 mb-3">
                <div class="row">
                    <div class="form-floating col-3 mb-3">
                        <button type="button" class="group-navigate-btn btn btn-outline-primary btn-lg" data-group="main" style="height: 100%; width: 100%;" disabled>Back</button>
                    </div>
                    <div class="form-floating col-9 mb-3">
                        <button type="button" class="group-navigate-btn btn btn-primary btn-lg" data-group="page_2" style="height: 100%; width: 100%;">Continue</button>
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
            <div class="row">
                <div class="form-floating col-4">
                    <input type="date" class="form-control" id="pet-birth_date" placeholder="Date of Birth">
                    <label for="pet-birth_date" style="margin-left: 12px;">Date of Birth</label>
                </div>
                <div class="form-floating col-8">
                    <input type="text" class="form-control" id="pet-age" placeholder="Age" readonly>
                    <label for="pet-age" style="margin-left: 12px;">Age</label>
                </div>
            </div>
            <div class="row mt-2">
                <div class="form-floating col-4">
                    <input type="text" class="pet-gender-input input-interactable-readonly form-control" id="pet-gender" placeholder="Weight" readonly>
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
                    <input type="text" class="form-control" id="pet-address" placeholder="Pet Address">
                    <label for="pet-address" style="margin-left: 12px;">Pet Address</label>
                </div>
                <div class="form-floating col-2">
                    <button type="button" class="pet-address-autofill btn btn-primary btn-lg w-100 h-100"><i class="bi bi-geo-alt-fill"></i></button>
                </div>
            </div>
            <div class="row mt-2">
                <div class="banner-info p-3 text-center">
                    <i class="bi bi-info-circle"></i> Your pet's address can be vague, as it will be publicly displayed.
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
                    <label for="pet-owner" style="margin-left: 12px;">Main Owner Name</label>
                </div>
                <div class="form-floating col-12 mt-2">
                    <textarea class="form-control" id="pet-co_owners" placeholder="Co-Owner(s)" style="min-height: 125px;"></textarea>
                    <label for="pet-co_owners" style="margin-left: 12px;">Co-Owner(s)</label>
                </div>
            </div>
            <div class="row mt-2">
                <div class="form-floating col-10">
                    <input type="text" class="form-control" id="pet-owner_location" placeholder="Owner Location">
                    <label for="pet-owner_location" style="margin-left: 12px;">Owner Location</label>
                </div>
                <div class="form-floating col-2">
                    <button type="button" class="pet-owner_address-autofill btn btn-primary btn-lg w-100 h-100"><i class="bi bi-geo-alt-fill"></i></button>
                </div>
                <div class="form-floating col-12 mt-2">
                    <input type="text" class="form-control" id="pet-owner_contact" placeholder="Owner Contact Number">
                    <label for="pet-owner_contact" style="margin-left: 12px;">Owner Contact Number</label>
                </div>
                <div class="form-floating col-12 mt-2">
                    <input type="text" class="form-control" id="pet-owner_email" placeholder="Owner Email">
                    <label for="pet-owner_email" style="margin-left: 12px;">Owner Email</label>
                </div>
            </div>
            <div class="row mt-2">
                <div class="banner-info p-3 text-center">
                    <i class="bi bi-info-circle"></i> The owner's location will be privately stored in the system.
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
    <div class="group-container" data-group="fill_up_pet" style="display: none;">
        <div class="mb-5">
            <h4 class="text-center">Your Appointment</h4>
            <h6 class="text-center">₱1,000 per 30 minutes</h6>
            <h6 class="text-center">March 20th, 2025</h6>
            <h6 class="text-center">12:30 PM to 1:00 PM</h6>
        </div>
        <form id="registrationForm" autocomplete="off">
            <!-- Pet Name -->
            <div class="row mb-4">
                <div class="form-floating col-8">
                    <input type="text" class="form-control" id="pet-name" placeholder="Pet Name" required>
                    <label for="pet-name" style="margin-left: 12px;">Pet Name</label>
                </div>
                <div class="form-floating col-4">
                    <input type="text" class="form-control" id="pet-iagd" placeholder="IAGD Number">
                    <label for="pet-iagd" style="margin-left: 12px;">IAGD Number</label>
                </div>
            </div>
            <div class="row mb-3">
                <div class="form-floating col-4">
                    <select class="form-control" id="pet-species" required>
                        <option value="cat">Cat</option>
                        <option value="dog">Dog</option>
                    </select>
                    <label for="pet-species" style="margin-left: 12px;">Pet Type</label>
                </div>
                <div class="form-floating col-8">
                    <input type="text" class="form-control" id="pet-breed" placeholder="Pet Breed">
                    <label for="pet-breed" style="margin-left: 12px;">Pet Breed</label>
                </div>
            </div>
            <div class="row mb-4">
                <div class="form-floating col-4">
                    <select class="form-control" id="pet-gender" required>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                    <label for="pet-gender" style="margin-left: 12px;">Gender</label>
                </div>
                <div class="form-floating col-4">
                    <input type="text" class="form-control" id="pet-age" placeholder="Age">
                    <label for="pet-age" style="margin-left: 12px;">Age</label>
                </div>
                <div class="form-floating col-4">
                    <input type="text" class="form-control" id="pet-weight" placeholder="Weight">
                    <label for="pet-weight" style="margin-left: 12px;">Current Weight</label>
                </div>
            </div>
            <!-- Reason -->
            <div class="row mb-3">
                <div class="form-floating col-12">
                    <textarea class="form-control" id="consultation-reason" placeholder="Briefly describe the reason for your consultation" rows="3" required></textarea>
                    <label for="consultation-reason" style="margin-left: 12px;">Please briefly describe the reason for consultation</label>
                </div>
            </div>
            <div class="row mb-3">
                <div class="form-floating col-12">
                    <textarea class="form-control" id="consultation-food" placeholder="What are you feeding your pet?" rows="3"></textarea>
                    <label for="consultation-food" style="margin-left: 12px;">What are you feeding your pet?</label>
                </div>
            </div>
            <div class="row mb-3">
                <div class="form-floating col-12">
                    <textarea class="form-control" id="consultation-medications" placeholder="Is your pet currently under any medications or vitamins?" rows="3"></textarea>
                    <label for="consultation-medications" style="margin-left: 12px;">Is your pet currently under any medications or vitamins?</label>
                </div>
            </div>
            <!-- Submit Button -->
            <div class="d-grid gap-2 mt-4 mb-3">
                <div class="row">
                    <div class="form-floating col-3 mb-3">
                        <button type="button" class="group-navigate-btn btn btn-outline-primary btn-lg" data-group="iagd" style="height: 100%; width: 100%;">Back</button>
                    </div>
                    <div class="form-floating col-9 mb-3">
                        <button type="button" class="group-navigate-btn btn btn-primary btn-lg" data-group="fill_up_owner" style="height: 100%; width: 100%;">Continue</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="group-container" data-group="fill_up_owner" style="display: none;">
        <div class="mb-5">
            <h4 class="text-center">Your Appointment</h4>
            <h6 class="text-center">₱1,000 per 30 minutes</h6>
            <h6 class="text-center">March 20th, 2025</h6>
            <h6 class="text-center">12:30 PM to 1:00 PM</h6>
            <h6 class="text-center">Loki</h6>
        </div>
        <form id="registrationForm" autocomplete="off">
            <!-- Pet Name -->
            <div class="row mb-4">
                <div class="form-floating col-12">
                    <input type="text" class="form-control" id="pet-name" placeholder="Pet Name" required>
                    <label for="pet-name" style="margin-left: 12px;">Owner Name</label>
                </div>
            </div>
            <div class="row mb-3">
                <div class="form-floating col-8">
                    <input type="text" class="form-control" id="pet-breed" placeholder="Pet Breed">
                    <label for="pet-breed" style="margin-left: 12px;">Pet Breed</label>
                </div>
            </div>
            <div class="row mb-3">
                <div class="form-floating col-8">
                    <input type="text" class="form-control" id="pet-breed" placeholder="Pet Breed">
                    <label for="pet-breed" style="margin-left: 12px;">Pet Breed</label>
                </div>
            </div>
            <!-- Reason -->
            <div class="row mb-3">
                <div class="form-floating col-12">
                    <textarea class="form-control" id="consultation-reason" placeholder="Briefly describe the reason for your consultation" rows="3" required></textarea>
                    <label for="consultation-reason" style="margin-left: 12px;">Please briefly describe the reason for consultation</label>
                </div>
            </div>
            <div class="row mb-3">
                <div class="form-floating col-12">
                    <textarea class="form-control" id="consultation-food" placeholder="What are you feeding your pet?" rows="3"></textarea>
                    <label for="consultation-food" style="margin-left: 12px;">What are you feeding your pet?</label>
                </div>
            </div>
            <div class="row mb-3">
                <div class="form-floating col-12">
                    <textarea class="form-control" id="consultation-medications" placeholder="Is your pet currently under any medications or vitamins?" rows="3"></textarea>
                    <label for="consultation-medications" style="margin-left: 12px;">Is your pet currently under any medications or vitamins?</label>
                </div>
            </div>
            <!-- Submit Button -->
            <div class="d-grid gap-2 mt-4 mb-3">
                <div class="row">
                    <div class="form-floating col-3 mb-3">
                        <button type="button" class="group-navigate-btn btn btn-outline-primary btn-lg" data-group="iagd" style="height: 100%; width: 100%;">Back</button>
                    </div>
                    <div class="form-floating col-9 mb-3">
                        <button type="button" class="group-navigate-btn btn btn-primary btn-lg" data-group="fill_up_owner" style="height: 100%; width: 100%;">Continue</button>
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
        <h5 class="offcanvas-title text-gradient-primary text-center">Select Species</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="card card-interactable">
            <div class="select-species-option card-body d-flex align-items-center" data-option="Dog">
                <img src="{{ asset('images/mayor_icons_dog.png') }}" width="64" height="64" class="me-4">
                <div>
                    <span style="font-size: 24px;">Dog</span>
                    <br>
                    <span style="font-style: italic; opacity: 0.16;">Canis lupus familiaris</span>
                </div>
            </div>
        </div>
        <div class="card card-interactable">
            <div class="select-species-option card-body d-flex align-items-center" data-option="Cat">
                <img src="{{ asset('images/mayor_icons_cat.png') }}" width="64" height="64" class="me-4">
                <div>
                    <span style="font-size: 24px;">Cat</span>
                    <br>
                    <span style="font-style: italic; opacity: 0.16;">Felis catus</span>
                </div>
            </div>
        </div>
        <div class="card card-interactable">
            <div class="select-species-option card-body d-flex align-items-center" data-option="Rabbit">
                <img src="{{ asset('images/mayor_icons_rabbit.png') }}" width="64" height="64" class="me-4">
                <div>
                    <span style="font-size: 24px;">Rabbit</span>
                    <br>
                    <span style="font-style: italic; opacity: 0.16;">Oryctolagus cuniculus</span>
                </div>
            </div>
        </div>
        <div class="card card-interactable">
            <div class="select-species-option card-body d-flex align-items-center" data-option="Bird">
                <img src="{{ asset('images/mayor_icons_bird.png') }}" width="64" height="64" class="me-4">
                <div>
                    <span style="font-size: 24px;">Bird</span>
                    <br>
                    <span style="font-style: italic; opacity: 0.16;">Aves</span>
                </div>
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
</body>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/luxon/3.4.3/luxon.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script>

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
	    if (input.files && input.files[0]) {
	        let reader = new FileReader();
	        reader.onload = function(e) {
                let img = $("<img>").attr("src", e.target.result).addClass("drop-zone-img").css({
                    "max-width": "100%",
                    "max-height": "100%",
                    "object-fit": "contain"
                });

                $('.pet-preview-image').attr("src", e.target.result);
                $('.pet-preview-image-backdrop').attr("src", e.target.result);

	            // Store the base64 image in localStorage
	            // localStorage.setItem(input.name, e.target.result);

	            // Remove any existing images in the drop-zone before appending the new one
	            dropZone.find("img").remove();
	            dropZone.prepend(img);

	            // Hide the drop message
	            dropZone.find(".drop-message").hide();

                // Send the image to the API
                let formData = new FormData();
                formData.append("file", input.files[0]);

                $.ajax({
                    url: "https://iagd-api.metaanimals.org/classify/",
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        if (response && response.species) {
                            $('#pet-species').val(response.species.charAt(0).toUpperCase() + response.species.slice(1));
                            animateShine($('#pet-species').parent('.form-floating'));
                        } else {
                            console.warn("Unexpected response format:", response);
                        }
                    },
                    error: function (xhr, status, error) {
                        console.error("Error:", error);
                    }
                });
	        };
	        reader.readAsDataURL(input.files[0]);
	    } else {
	        // Show the drop message when no image is selected
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

	    // Store the dropped files in the droppedFiles variable
	    droppedFiles[input.id] = files;

	    dropZone.removeClass("dragging");

	    // Call the previewImage function to show the image preview
	    if (files.length) {
	        // Modify the input's files property to store the dropped files
	        input.files = files;

	        // Call previewImage with the input and dropZone elements
	        previewImage(input, dropZone);
	    } else {
	        dropZone.html(`<div class="drop-message">
	            <i class="bi bi-download"></i>
	            <br>
	            <span style="font-size: 14px;">Drag and drop receipt photo here,</span>
	            <br>
	            <span style="font-size: 14px;">or press to browse from your files</span>
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
	                <i class="bi bi-download"></i>
	                <br>
	                <span style="font-size: 14px;">Drag and drop receipt photo here,</span>
	                <br>
	                <span style="font-size: 14px;">or press to browse from your files</span>
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

	        // Remove any existing images in the drop-zone
	        dropZone.find("img").remove();

	        // Show the drop message
	        dropZone.html(`<div class="drop-message">
	            <i class="bi bi-download"></i>
	            <br>
	            <span style="font-size: 14px;">Drag and drop receipt photo here,</span>
	            <br>
	            <span style="font-size: 14px;">or press to browse from your files</span>
	            </div>`);
	    });

	    // Clear input files
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

    $('#pet-birth_date').on('change', function () {
        let birthDate = $(this).val();
        if (!birthDate) return;

        let dt = luxon.DateTime.fromISO(birthDate);
        let now = luxon.DateTime.now();
        let diff = now.diff(dt, ['years', 'months']).toObject();

        let years = Math.floor(diff.years);
        let months = Math.floor(diff.months);

        let ageText = years > 0 ? `${years} years, ${months} months` : `${months} months`;
        
        $('#pet-age').val(ageText);
        $('.pet-preview-pet_age').text(ageText);
    });
});
</script>
</html>
