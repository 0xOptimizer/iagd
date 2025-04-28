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
        <div class="container-fluid text-center">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/IAGD_Logo_Silver.png') }}" alt="Logo" style="transform: scale(2.25);">
            </a>
            <div class="d-flex">
                &nbsp;
            </div>
            <div class="flex-grow-1 mx-3">
                <span class="d-none d-md-inline">International Animal Genetics Database</span>
                <span class="d-inline d-md-none">IAGD</span>
            </div>
            <div class="d-flex gap-2">
                <button type="button" class="offcanvas-nav-apps-btn tewi-btn-icon me-2">
                    <i class="bi bi-grid-3x3-gap-fill" style="vertical-align: 0px; font-size: 32px;"></i>
                </button>
            </div>
        </div>
    </nav>
    <div class="loading-group row text-center mt-5">
        <div class="col-12">
            <div class="DNA_cont" style="width: 100%;">
                <div class="nucleobase" style="display: none;"></div>
                <div class="nucleobase" style="display: none;"></div>
                <div class="nucleobase" style="display: none;"></div>
                <div class="nucleobase" style="display: none;"></div>
                <div class="nucleobase" style="display: none;"></div>
                <div class="nucleobase" style="display: none;"></div>
                <div class="nucleobase" style="display: none;"></div>
                <div class="nucleobase" style="display: none;"></div>
                <div class="nucleobase" style="display: none;"></div>
                <div class="nucleobase" style="display: none;"></div>
            </div>
        </div>
    </div>
    <div class="group-container" data-group="page_1" style="display: none;">
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
                        <div class="banner-container banner-info p-3 text-danger text-center w-100" style="font-weight: bold;">
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
                <div class="banner-container banner-info p-3 text-center">
                    <i class="banner-icon bi bi-info-circle"></i>
                    Note: As part of IAGD, your pet details will appear publicly.
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
            <input type="text" id="pet-sire-uuid" hidden>
            <input type="text" id="pet-dam-uuid" hidden>
            <div class="pet-sire-before-selection-group row">
                <div class="form-floating col-12">
                    <input type="text" class="pet-sire-input input-interactable-readonly form-control" id="pet-sire" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-input-sire" placeholder="Sire" readonly>
                    <label for="pet-sire" style="margin-left: 12px;">Sire</label>
                </div>
            </div>
            <div class="pet-sire-after-selection-group row" style="display: none;">
                <div class="form-floating col-2">
                    <img src="" class="pet-sire-preview-image img-border-primary rounded-circle" width="60" height="60" style="object-fit: contain;">
                </div>
                <div class="form-floating col-6">
                    <input type="text" class="pet-sire-input input-interactable-readonly form-control" id="pet-sire-name" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-input-sire" placeholder="Sire's Name" readonly>
                    <label for="pet-sire-name" style="margin-left: 12px;">Sire's Name</label>
                </div>
                <div class="form-floating col-4" style="position: relative;">
                    <i class="bi bi-caret-right-fill" style="position: absolute; top: 25%; left: -17px; transform: translateY(-50%); font-size: 32px; color: #312c57;"></i>
                    <input type="text" class="form-control" id="pet-sire-breed" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-input-sire" placeholder="Sire's Breed" readonly>
                    <label for="pet-sire-breed" style="margin-left: 12px;">Sire's Breed</label>
                </div>
            </div>
            <div class="pet-dam-before-selection-group row mt-2">
                <div class="form-floating col-12">
                    <input type="text" class="pet-dam-input input-interactable-readonly form-control" id="pet-dam" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-input-dam" placeholder="Dam" readonly>
                    <label for="pet-dam" style="margin-left: 12px;">Dam</label>
                </div>
            </div>
            <div class="pet-dam-after-selection-group row mt-2" style="display: none;">
                <div class="form-floating col-2">
                    <img src="" class="img-border-primary rounded-circle" width="60" height="60" style="object-fit: contain;">
                </div>
                <div class="form-floating col-6">
                    <input type="text" class="pet-dam-input input-interactable-readonly form-control" id="pet-dam-name" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-input-dam" placeholder="Dam's Name" readonly>
                    <label for="pet-dam-name" style="margin-left: 12px;">Dam's Name</label>
                </div>
                <div class="form-floating col-4" style="position: relative;">
                    <i class="bi bi-caret-right-fill" style="position: absolute; top: 25%; left: -17px; transform: translateY(-50%); font-size: 32px; color: #312c57;"></i>
                    <input type="text" class="pet-dam-input input-interactable-readonly form-control" id="pet-dam-breed" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-input-sire" placeholder="Dam's Breed" readonly>
                    <label for="pet-dam-breed" style="margin-left: 12px;">Dam's Breed</label>
                </div>
            </div>
            <!-- <div class="row mt-4">
                <div class="form-floating col-12">
                    <input type="text" class="pet-animal_facility-input input-interactable-readonly form-control" id="pet-animal_facility" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-input-animal_facility" placeholder="Animal Facility" readonly>
                    <label for="pet-animal_facility" style="margin-left: 12px;">Animal Facility</label>
                </div>
            </div>
            <div class="row mt-2">
                <div class="form-floating col-12">
                    <input type="text" class="pet-vet_records-input input-interactable-readonly form-control" id="pet-vet_records" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-input-vet_records" placeholder="Vet Records" readonly>
                    <label for="pet-vet_records" style="margin-left: 12px;">Vet Records</label>
                </div>
            </div> -->
            <div class="row mt-2">
                <div class="banner-container banner-info p-3 text-center">
                    <i class="banner-icon bi bi-info-circle"></i> Note: Using IAGD, we automatically trace and connect your pet's pedigree, including their parents and ancestors. You only need to add their immediate details to the database.
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
    <div class="group-container" data-group="page_4" style="display: none;">
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
                <div class="form-floating col-8">
                    <input type="text" class="form-control" id="pet-owner" placeholder="Main Owner">
                    <label for="pet-owner" style="margin-left: 12px;">Who is the main owner of <span class="pet-preview-pet_name"></span>?</label>
                </div>
                <div class="form-floating col-4" style="position: relative;">
                    <i class="bi bi-caret-left-fill" style="position: absolute; top: 25%; left: -15px; transform: translateY(-50%); font-size: 32px; color: #312c57;"></i>
                    <button type="button" class="pet-owner-link_lounge-btn btn btn-primary btn-lg w-100 h-100"><i class="bi bi-link-45deg"></i> Link Lounge</button>
                </div>
            </div>
            <div class="row mt-2">
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
                <div class="banner-container banner-info p-3 text-center">
                    <i class="banner-icon bi bi-info-circle"></i> Note: Except the names, owner details will not publicly appear.
                </div>
            </div>
            <!-- Submit Button -->
            <div class="d-grid gap-2 mt-4 mb-3">
                <div class="row">
                    <div class="form-floating col-3 mb-3">
                        <button type="button" class="group-navigate-btn btn btn-outline-primary btn-lg" data-group="page_3" style="height: 100%; width: 100%;">Back</button>
                    </div>
                    <div class="form-floating col-9 mb-3">
                        <button type="button" class="group-navigate-btn btn btn-primary btn-lg" data-group="page_5" style="height: 100%; width: 100%;">Continue</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="group-container" data-group="page_5" style="display: none;">
        <div class="row mb-2">
            <div class="banner-container banner-info p-3 text-center">
                <i class="banner-icon bi bi-info-circle"></i> Review all information before submitting. You can go back to make changes.
            </div>
        </div>
        <div class="summary-container">
            <!-- Pet Details Summary -->
            <div class="summary-section">
                <h5 class="summary-title text-gradient-primary">Pet Details</h5>
                <div class="summary-row">
                    <span class="summary-label">Name:</span>
                    <span class="summary-value" data-source="pet-name"></span>
                </div>
                <div class="summary-row">
                    <span class="summary-label">Species:</span>
                    <span class="summary-value" data-source="pet-species"></span>
                </div>
                <div class="summary-row">
                    <span class="summary-label">Breed:</span>
                    <span class="summary-value" data-source="pet-breed"></span>
                </div>
                <div class="summary-row">
                    <span class="summary-label">Date of Birth:</span>
                    <span class="summary-value" data-source="pet-birth_date"></span>
                </div>
            </div>

            <!-- Physical Characteristics -->
            <div class="summary-section mt-4">
                <h5 class="summary-title text-gradient-primary">Physical Characteristics</h5>
                <div class="summary-row">
                    <span class="summary-label">Gender:</span>
                    <span class="summary-value" data-source="pet-gender"></span>
                </div>
                <div class="summary-row">
                    <span class="summary-label">Weight:</span>
                    <span class="summary-value" data-source="pet-weight"></span>
                </div>
                <div class="summary-row">
                    <span class="summary-label">Height:</span>
                    <span class="summary-value" data-source="pet-height"></span>
                </div>
                <div class="summary-row">
                    <span class="summary-label">Colors:</span>
                    <span class="summary-value" data-source="pet-color_body"></span> /
                    <span class="summary-value" data-source="pet-color_eye"></span>
                </div>
            </div>

            <!-- Ownership Details -->
            <div class="summary-section mt-4">
                <h5 class="summary-title text-gradient-primary">Ownership Details</h5>
                <div class="summary-row">
                    <span class="summary-label">Main Owner:</span>
                    <span class="summary-value" data-source="pet-owner"></span>
                </div>
                <div class="summary-row">
                    <span class="summary-label">Location:</span>
                    <span class="summary-value" data-source="pet-owner_location"></span>
                </div>
                <div class="summary-row">
                    <span class="summary-label">Contact:</span>
                    <span class="summary-value" data-source="pet-owner_contact"></span>
                </div>
            </div>

            <!-- Additional Information -->
            <div class="summary-section mt-4">
                <h5 class="summary-title text-gradient-primary">Additional Information</h5>
                <!-- <div class="summary-row">
                    <span class="summary-label">Animal Facility:</span>
                    <span class="summary-value" data-source="pet-animal_facility"></span>
                </div>
                <div class="summary-row">
                    <span class="summary-label">Vet Records:</span>
                    <span class="summary-value" data-source="pet-vet_records"></span>
                </div> -->
                <div class="summary-row">
                    <span class="summary-label">Pedigree:</span>
                    <span class="summary-value" data-source="pet-sire-name"></span> /
                    <span class="summary-value" data-source="pet-dam-name"></span>
                </div>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="d-grid gap-2 mt-4 mb-3">
            <div class="row">
                <div class="form-floating col-3 mb-3">
                    <button type="button" class="group-navigate-btn btn btn-outline-primary btn-lg" data-group="page_4" style="height: 100%; width: 100%;">Back</button>
                </div>
                <div class="form-floating col-9 mb-3">
                    <button type="submit" class="registration-submit-btn btn btn-primary btn-lg" style="height: 100%; width: 100%;" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-register-submit">
                        <i class="bi bi-check-circle-fill"></i> Submit Registration
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="group-container" data-group="page_6" style="display: none;">
        <div class="row text-center">
            <div class="col-12">
                <span class="text-gradient-primary" style="font-size: 24px;">Welcome to IAGD!</span>
            </div>
            <div class="col-12 mt-2">
                <img class="pet-preview-image-backdrop rounded-circle" src="" style="width: 256px; height: 128px;">
                <img class="pet-preview-image rounded-circle" src="" style="width: 256px; height: 128px;">
            </div>
            <div class="col-12 mt-2"><span class="pet-preview-pet_name text-gradient-primary" style="font-size: 32px;"></span></div>
        </div>
        <div class="d-flex align-items-center mt-2 w-100">
            <button type="button" class="btn btn-primary flex-grow-1 me-2" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-share-pet">
                <i class="bi bi-share me-1"></i> Share
            </button>
            <a href="#" target="_blank" class="submit-view_profile-btn btn btn-outline-primary flex-grow-1 me-2">
                <i class="bi bi-box-arrow-up-right me-1"></i> View Profile
            </a>
            <button type="button" class="btn btn-outline-primary flex-grow-1" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-export-pet">
                <i class="bi bi-qr-code me-1"></i> QR Code
            </button>
        </div>
        <div class="summary-section mt-2">
            <h5 class="summary-title d-flex align-items-center">
                Overview
                <button type="button" class="btn btn-outline-primary ms-auto" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-export-pet" style="font-size: 14px;">
                    <i class="bi bi-file-earmark-arrow-down me-1"></i> Download
                </button>
            </h5>
            <div class="summary-row">
                <span class="summary-label">IAGD No.</span>
                <span class="summary-value submit-overview-iagd_number text-background-info"></span>
            </div>
            <div class="summary-row">
                <span class="summary-label">IAGD Status</span>
                <span class="summary-value"><span class="text-background-info">Verifying</span>&nbsp;<button type="button" class="btn btn-outline-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-qna-status">?</button></span>
            </div>
            <div class="summary-row">
                <span class="summary-label">Breed:</span>
                <span class="summary-value"><span class="submit-overview-breed"></span></span>
            </div>
            <div class="summary-row">
                <span class="summary-label">Gender:</span>
                <span class="summary-value"><span class="submit-overview-gender"></span></span>
            </div>
            <div class="summary-row">
                <span class="summary-label">Physical (Weight / Height):</span>
                <span class="summary-value" data-source="pet-weight"></span> /
                <span class="summary-value" data-source="pet-height"></span>
            </div>
            <div class="summary-row">
                <span class="summary-label">Colors (Body / Eye):</span>
                <span class="summary-value" data-source="pet-color_body"></span> /
                <span class="summary-value" data-source="pet-color_eye"></span>
            </div>
            <div class="summary-row">
                <span class="summary-label">Main Owner:</span>
                <span class="summary-value" data-source="pet-owner"></span>
            </div>
            <div class="summary-row">
                <span class="summary-label">Location:</span>
                <span class="summary-value"></span><span class="submit-overview-pet_location"></span>&nbsp;<button type="button" class="btn btn-outline-primary" onclick="openPetAddressMap()"><i class="bi bi-geo-alt-fill"></i></button>
            </div>
            <div class="summary-row">
                <span class="summary-label">Animal Facility:</span>
                <span class="summary-value" data-source="pet-animal_facility"></span>
            </div>
        </div>
        <hr class="my-3">
        <div class="row mt-2">
            <div class="banner-container banner-info p-3 text-center">
                <i class="banner-icon bi bi-info-circle"></i> Note: Your pet will remain in pending for up to 24 hours while we verify the details you provided. <br> We will notify you once your pet has been approved for display.
            </div>
        </div>
        <!-- Submit Button -->
        <div class="d-grid gap-2 mt-4 mb-3">
            <div class="row">
                <div class="form-floating col-5 mb-3">
                    <button type="button" class="btn btn-outline-primary btn-lg" style="height: 100%; width: 100%;">View Profile</button>
                </div>
                <div class="form-floating col-7 mb-3">
                    <button type="button" class="btn btn-primary btn-lg" style="height: 100%; width: 100%;"><i class="bi bi-plus-circle"></i> Register Another Pet</button>
                </div>
            </div>
        </div>
    </div>
</div>
@include('offcanvas.register.species')
@include('offcanvas.register.gender')
@include('offcanvas.register.primary_image')
@include('offcanvas.register.sire.main')
@include('offcanvas.register.sire.iagd')
@include('offcanvas.register.sire.name')
@include('offcanvas.register.sire.no_iagd')
@include('offcanvas.register.dam.main')
@include('offcanvas.register.dam.iagd')
@include('offcanvas.register.dam.name')
@include('offcanvas.register.dam.no_iagd')
@include('offcanvas.register.submit')
@include('offcanvas.register.share')
</body>
<script src="{{ asset('js/TweenMax.min.js') }}"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/luxon/3.4.3/luxon.min.js"></script> -->
<script src="{{ asset('js/luxon.min.js') }}"></script>
<script src="{{ asset('js/confetti.browser.min.js') }}"></script>
<script>
var hasPetImage = false;
function page_1_continue_validate() {
    const petName = $('#pet-name').val();
    const petSpecies = $('#pet-species').val();

    console.log(petName);
    console.log(petSpecies);
    console.log(hasPetImage);

    if (petName && petSpecies && hasPetImage) {
        $('.page_1-incomplete-continue-btn-group').hide();
        $('.page_1-complete-continue-btn-group').show();
    } else {
        $('.page_1-complete-continue-btn-group').hide();
    }
}
function submitRegistration() {
    let formData = new FormData();
    formData.append('pet_name', $('#pet-name').val() || '');
    formData.append('pet_type', $('#pet-species').val() || '');
    let petImages = $('#self-input-photo').prop('files');
    if (petImages && petImages.length > 0) {
        for (let i = 0; i < petImages.length; i++) {
            formData.append('pet_images[]', petImages[i]);
        }
    }
    formData.append('breed', $('#pet-breed').val() || '');
    formData.append('date_of_birth', $('#pet-birth_date').val() || '');
    formData.append('gender', $('#pet-gender').val() || '');
    formData.append('weight', $('#pet-weight').val() || '');
    formData.append('height', $('#pet-height').val() || '');
    formData.append('colors_eye', $('#pet-color_eye').val() || '');
    formData.append('colors_body', $('#pet-color_body').val() || '');
    formData.append('markings', $('#pet-markings').val() || '');
    formData.append('pet_location', $('#pet-address').val() || '');
    formData.append('owner', $('#pet-owner').val() || '');
    formData.append('co_owners', $('#pet-co_owners').val() || '');
    formData.append('owner_location', $('#pet-owner_location').val() || '');
    formData.append('owner_contact', $('#pet-owner_contact').val() || '');
    formData.append('owner_email', $('#pet-owner_email').val() || '');
    formData.append('animal_facility', $('#pet-animal_facility').val() || '');
    formData.append('animal_facility_uuid', $('#pet-animal_facility_uuid').val() || '');
    formData.append('vet_records', $('#pet-vet_records').val() || '');
    formData.append('male_parent', $('#pet-sire-name').val() || '');
    formData.append('male_parent_uuid', $('#pet-sire-uuid').val() || '');
    formData.append('male_parent_breed', $('#pet-sire-breed').val() || '');
    formData.append('female_parent', $('#pet-dam-name').val() || '');
    formData.append('female_parent_uuid', $('#pet-dam-uuid').val() || '');
    formData.append('female_parent_breed', $('#pet-dam-breed').val() || '');

    $('.submit-uploading-inactive-loading-group').hide();
    $('.submit-uploading-before-loading-group').show();

    for (var pair of formData.entries()) {
        console.log(pair[0] + ': ' + pair[1]);
    }

    $.ajax({
        url: '{{ route("rest.v1.pets.create") }}',
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response) {
            const details = response.data.details;
            const iagd_number = details?.iagd_number || 'NO IAGD NUMBER';
            const share_url = `{{ url('pet') }}/${iagd_number}`;
            
            const genderRaw = details?.gender?.toLowerCase() || '';
            const isMale = genderRaw.startsWith('male');
            const isFemale = genderRaw.startsWith('female');

            const genderIcon = isMale
                ? '<i class="bi bi-gender-male" style="color: cyan;"></i> Male'
                : isFemale
                    ? '<i class="bi bi-gender-female" style="color: pink;"></i> Female'
                    : '<i class="bi bi-question-circle" style="color: gray;"></i> Unknown';

            $('.submit-view_profile-btn').attr('href', share_url);
            $('.submit-overview-iagd_number').text(iagd_number);
            $('.submit-overview-breed').html(details?.gender || '');
            $('.submit-overview-gender').html(genderIcon);
            $('.submit-overview-pet_location').html(details?.pet_location || '');

            setTimeout(function() {
                $('.submit-uploading-before-loading-group').hide();
                $('.submit-uploading-after-loading-group').show();

                animateShine($('.submit-uploading-after-loading-group'));

                $('.submit-assigning-inactive-loading-group').hide();
                $('.submit-assigning-before-loading-group').show();

                setTimeout(function() {
                    $('.submit-assigning-before-loading-group').hide();
                    $('.submit-assigning-after-loading-group').show();

                    animateShine($('.submit-assigning-after-loading-group'));

                    $('.submit-creating-inactive-loading-group').hide();
                    $('.submit-creating-before-loading-group').show();

                    setTimeout(function() {
                        $('.submit-creating-before-loading-group').hide();
                        $('.submit-creating-after-loading-group').show();

                        animateShine($('.submit-creating-after-loading-group'));
                        setTimeout(function() {
                            $(`.group-container`).hide();
                            $(`.group-container[data-group="page_6"]`).show();
                            $('#offcanvas-register-submit').offcanvas('hide');

                            $('.phone-container').scrollTop(0);

                            setTimeout(function() {
                                var count = 200;
                                var defaults = {
                                    origin: { y: 0.7 }
                                };
                                
                                function fire(particleRatio, opts) {
                                    confetti({
                                        ...defaults,
                                        ...opts,
                                        particleCount: Math.floor(count * particleRatio)
                                    });
                                }
                                
                                fire(0.25, {
                                    spread: 26,
                                    startVelocity: 55,
                                });
                                fire(0.2, {
                                    spread: 60,
                                });
                                fire(0.35, {
                                    spread: 100,
                                    decay: 0.91,
                                    scalar: 0.8
                                });
                                fire(0.1, {
                                    spread: 120,
                                    startVelocity: 25,
                                    decay: 0.92,
                                    scalar: 1.2
                                });
                                fire(0.1, {
                                    spread: 120,
                                    startVelocity: 45,
                                });
                            }, 400)
                        }, 700);
                    }, 2700);
                }, Math.floor(Math.random() * 400) + 800);

            }, 1500);
        },
        error: function(xhr, status, error) {
            console.error('Error submitting registration:', error);
        }
    });

    return false;
}
function share(platform) {
    if (typeof platform !== 'string') return;
    platform = platform.toLowerCase().trim();
    if (!['facebook', 'twitter', 'linkedin', 'whatsapp'].includes(platform)) return;

    var petName = $('#pet-name').val();
    if (typeof petName !== 'string' || !(petName = petName.trim())) return;

    var message = `My pet, ${petName}, now has an online profile via IAGD!`;
    var profileUrl = `{{ url('pet') }}/${$('.submit-overview-iagd_number').text()}`;
    var encodedUrl = encodeURIComponent(profileUrl);
    var shareUrl = "";

    switch(platform) {
        case 'facebook':
            shareUrl = `https://www.facebook.com/sharer/sharer.php?u=${encodedUrl}&quote=${encodeURIComponent(message)}`;
            break;
        case 'twitter':
            shareUrl = `https://twitter.com/intent/tweet?text=${encodeURIComponent(message + " " + profileUrl)}`;
            break;
        case 'linkedin':
            shareUrl = `https://www.linkedin.com/sharing/share-offsite/?url=${encodedUrl}`;
            break;
        case 'whatsapp':
            shareUrl = `https://wa.me/?text=${encodeURIComponent(message + " " + profileUrl)}`;
            break;
        default:
            return;
    }

    try {
        window.open(shareUrl, '_blank', 'width=600,height=400');
    } catch (e) {
        console.error("Share failed:", e);
    }
}
function openPetAddressMap() {
    const query = $('#pet-address').val();
    const url = `https://www.google.com/maps/search/${encodeURIComponent(query)}`;
    const newWindow = window.open(url, '_blank');
    if (newWindow) {
        newWindow.focus();
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

    let droppedFiles = {};

    function previewImage(input, dropZone) {
        if (input.files && input.files.length) {
            hasPetImage = true;
            dropZone.empty();
            $(".pet-input-images-container").empty();
            let files = Array.from(input.files).slice(0, 5);
            let base64Images = [];

            files.forEach(function(file, index) {
                let reader = new FileReader();
                reader.onload = function(e) {
                    base64Images.push(e.target.result);

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
                        dzImg.addClass('drop-zone-primary-img').css({
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

                    if (index === files.length - 1) {
                        localStorage.setItem('pet_image_gallery', JSON.stringify(base64Images));
                    }
                };
                reader.readAsDataURL(file);
            });

            dropZone.find(".drop-message").hide();
            droppedFiles[input.id] = input.files;

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
                            const response_species = response.species.charAt(0).toUpperCase() + response.species.slice(1);
                            $('#pet-species').val(response_species);
                            animateShine($('#pet-species').parent('.form-floating'));
                            localStorage.setItem('form_pet-species', response_species);
                            page_1_continue_validate();
                        }
                    } else {
                        console.warn("Unexpected response format:", response);
                    }
                },
                error: function(xhr, status, error) {
                    console.error("Error:", error);
                }
            });

            if (input.files && input.files[0]) {
                let reader = new FileReader();
                reader.onload = function(e) {
                    $('.pet-preview-image').attr('src', e.target.result);
                    $('.pet-preview-image-backdrop').attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }

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

    function clearFormStorage(name = null) {
        if (name) {
            localStorage.removeItem('form_' + name);
        } else {
            for (let key in localStorage) {
                if (key.startsWith('form_') || key === 'pet_image_gallery') {
                    localStorage.removeItem(key);
                }
            }
        }
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
                    localStorage.setItem('form_pet-address', `${city}, ${region}, ${country}`);
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
                    animateShine($input.parent('.form-floating'))
                    localStorage.setItem('form_pet-owner_location', `${city}, ${region}, ${country}`);
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

        let ageText = years > 0 
            ? `${years} year${years > 1 ? 's' : ''}, ${months} month${months > 1 ? 's' : ''}` 
            : `${months} month${months > 1 ? 's' : ''}`;
        
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
        localStorage.setItem('form_pet-species', option);
        page_1_continue_validate();
    });

    $('.select-gender-option').on('click', function() {
        const option = $(this).data('option');
        $('#pet-gender').val(option);
        $('#offcanvas-select-gender').offcanvas('hide');
        localStorage.setItem('form_pet-gender', option);
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

    $('#pet-name').bind('input', function() {
        page_1_continue_validate();
    });

    $('.group-navigate-btn[data-group="page_5"]').on('click', function() {
        $('[data-source]').each(function() {
            var sourceId = $(this).data('source');
            var sourceElement = $('#' + sourceId);
            $(this).text(sourceElement.length ? sourceElement.val() : 'N/A');
        });

        var petName = $('#pet-name').val();
        $('.pet-preview-pet_name').text(petName);
    });

    $('input, textarea, select').each(function () {
        let name = $(this).attr('name') || $(this).attr('id');
        if (!name) return;
        let saved = localStorage.getItem(`form_${name}`);
        if (saved !== null) {
            try {
                $(this).val(saved);
            } catch (e) {
                console.error(`Error setting value for ${name}:`, e);
            }
        }
        try {
            if (name === 'pet-name') {
                $('.pet-preview-pet_name').text(saved);
            }
            if (name === 'pet-species') {
                $('.pet-preview-pet_species').text(saved);
            }
            if (name === 'pet-age') {
                $('.pet-preview-pet_age').text(saved);
            }
            if (name === 'pet-breed') {
                $('.pet-preview-pet_breed').text(saved);
            }
            if (name === 'pet-birth_date-mimic' || name === 'pet-birth_date') {
                const birthDate = saved;
                if (!birthDate) return;

                let dt = luxon.DateTime.fromISO(birthDate);
                let now = luxon.DateTime.now();
                let diff = now.diff(dt, ['years', 'months']).toObject();

                let years = Math.floor(diff.years);
                let months = Math.floor(diff.months);

                let ageText = years > 0
                    ? `${years} year${years > 1 ? 's' : ''}, ${months} month${months > 1 ? 's' : ''}`
                    : `${months} month${months > 1 ? 's' : ''}`;

                $('#pet-birth_date').val(birthDate);
                $('#pet-age').val(ageText);
                $('.pet-preview-pet_age').text(ageText);

                $('.pet-input-age-mimic-group').hide();
                $('.pet-input-age-actual-group').show();
            }
            if (name === 'pet-sire-name' || name === 'pet-sire-uuid' || name === 'pet-sire-breed' || name === 'pet-sire-image') {
                const sireName = localStorage.getItem('form_pet-sire-name') || '';
                const sireUuid = localStorage.getItem('form_pet-sire-uuid') || '';
                const sireBreed = localStorage.getItem('form_pet-sire-breed') || '';
                const sireImage = localStorage.getItem('form_pet-sire-image') || '';

                if (sireName || sireUuid || sireBreed || sireImage) {
                    $('#pet-sire-name').val(sireName);
                    $('#pet-sire-uuid').val(sireUuid);
                    $('#pet-sire-breed').val(sireBreed);
                    $('.pet-sire-preview-image').attr('src', sireImage);
                    $('.pet-sire-preview-pet_name').text(sireName);
                    $('.pet-sire-preview-pet_breed').text(sireBreed);

                    $('.pet-sire-before-selection-group').hide();
                    $('.pet-sire-after-selection-group').show();
                }
            }
            if (name === 'pet-dam-name' || name === 'pet-dam-uuid' || name === 'pet-dam-breed' || name === 'pet-dam-image') {
                const damName = localStorage.getItem('form_pet-dam-name') || '';
                const damUuid = localStorage.getItem('form_pet-dam-uuid') || '';
                const damBreed = localStorage.getItem('form_pet-dam-breed') || '';
                const damImage = localStorage.getItem('form_pet-dam-image') || '';

                if (damName || damUuid || damBreed || damImage) {
                    $('#pet-dam-name').val(damName);
                    $('#pet-dam-uuid').val(damUuid);
                    $('#pet-dam-breed').val(damBreed);
                    $('.pet-dam-preview-image').attr('src', damImage);
                    $('.pet-dam-preview-pet_name').text(damName);
                    $('.pet-dam-preview-pet_breed').text(damBreed);

                    $('.pet-dam-before-selection-group').hide();
                    $('.pet-dam-after-selection-group').show();
                }
            }
        } catch (e) {
            console.error(`Error processing ${name}:`, e);
        }
        try {
            page_1_continue_validate();
        } catch (e) {
            console.error('Error in page_1_continue_validate:', e);
        }
    });

    $(document).on('input change', 'input, textarea, select', function () {
        let name = $(this).attr('name') || $(this).attr('id');
        if (!name) return;
        localStorage.setItem('form_' + name, $(this).val());
    });

    let gallery = localStorage.getItem('pet_image_gallery');
    if (gallery) {
        let images = JSON.parse(gallery);
        let input = $("input[type='file']").get(0);
        let dropZone = $(input).siblings(".drop-zone");
        $(".pet-input-images-container").empty();
        dropZone.empty();
        images.forEach(function(src, index) {
            hasPetImage = true;
            page_1_continue_validate();

            let dzImg = $("<img>")
                .attr("src", src)
                .addClass("drop-zone-img")
                .data("index", index)
                .css({
                    "object-fit": "contain",
                    "max-width": "100%",
                    "max-height": "100%"
                });
            if (index === 0) {
                dzImg.addClass('drop-zone-primary-img').css({
                    "transform": "none",
                    "position": "relative",
                    "z-index": 10
                });
                $('.pet-preview-image').attr('src', src);
                $('.pet-preview-image-backdrop').attr('src', src);
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
                .attr("src", src)
                .css({
                    "width": "100%",
                    "height": "100%",
                    "object-fit": "contain"
                });
            card.append(cardImg);
            $(".pet-input-images-container").append(card);
        });
    }

    $('.loading-group .nucleobase').show();
    TweenMax.staggerFrom(".loading-group .nucleobase", 1.2, {opacity:0.0, transform: "translateY(20vh) scale(0)", delay: 0, transformOrigin:'50% 50%', ease:Circ.easeOut, force3D: true},0.06)
    setTimeout(function() {
        $('.loading-group').hide();
        $('.group-container[data-group="page_1"]').show();
        TweenMax.staggerFrom('.group-container[data-group="page_1"] div', 0.7, {opacity:0.0, transform: "translateY(20vh) scale(0)", delay: 0, transformOrigin:'50% 50%', ease:Circ.easeOut, force3D: true},0.04)
    }, 1150);

    $('.pet-sire-search-number-btn').on('click', function() {
        const species = $('#pet-species').val()?.trim();
        if (!species) return;

        const iagdNumber = $('#pet-sire-search-number-input').val()?.trim();
        if (!iagdNumber) return;

        const $button = $(this);
        $button.prop('disabled', true).html('<span class="spinner-border spinner-border-sm"></span> Searching');

        $('.pet-sire-search-number-results').empty().hide();
        $('.pet-sire-search-number-banner-no_records_found').hide();
        $('.banner-container.banner-warning').remove();

        $.ajax({
            url: `{{ url("api/v1/search/pets/id") }}/${encodeURIComponent(species)}/${encodeURIComponent(iagdNumber)}`,
            type: 'GET',
            success: function(response) {
                let response_count = 0;
                if (Array.isArray(response) && response.length > 0) {
                    let html = '';

                    response.forEach(function(pet) {
                        const genderRaw = pet?.details?.gender?.toLowerCase() || '';
                        const isMale = genderRaw.startsWith('male');
                        const isFemale = genderRaw.startsWith('female');

                        if (!isMale) {
                            return;
                        }

                        response_count++;

                        const genderIcon = isMale
                            ? '<i class="bi bi-gender-male" style="color: cyan;"></i> Male'
                            : isFemale
                                ? '<i class="bi bi-gender-female" style="color: pink;"></i> Female'
                                : '<i class="bi bi-question-circle" style="color: gray;"></i> Unknown';

                        const image = pet?.primary_image || '';
                        const petName = pet?.pet_name || 'Unnamed';
                        const breed = pet?.details?.breed || 'Unknown Breed';
                        const iagd = pet?.details?.iagd_number || 'Unknown ID';
                        const type = pet?.pet_type || 'Unknown';

                        const joinDateRaw = pet?.meta?.date_inserted;
                        let joinDateText = 'Joined unknown';

                        if (joinDateRaw) {
                            let joinDate = luxon.DateTime.fromISO(joinDateRaw);
                            if (!joinDate.isValid) {
                                joinDate = luxon.DateTime.fromFormat(joinDateRaw, 'yyyy-MM-dd hh:mm:ss a');
                            }
                            if (joinDate.isValid) {
                                joinDateText = `Joined ${joinDate.toRelative({ locale: 'en' })}`;
                            }
                        }

                        const dobRaw = pet?.details?.date_of_birth;
                        let dobFormatted = 'Unknown';
                        let ageText = '';

                        if (dobRaw) {
                            let dob = luxon.DateTime.fromISO(dobRaw);
                            if (!dob.isValid) dob = luxon.DateTime.fromFormat(dobRaw, 'MMMM d, yyyy');
                            if (dob.isValid) {
                                dobFormatted = dob.toFormat('MMMM d, yyyy');

                                const now = luxon.DateTime.now();
                                const diff = now.diff(dob, ['years', 'months', 'weeks', 'days']).toObject();

                                const y = Math.floor(diff.years || 0);
                                const m = Math.floor(diff.months || 0);
                                const w = Math.floor(diff.weeks || 0);
                                const d = Math.floor(diff.days || 0);

                                if (y >= 1) {
                                    ageText = `${y} year${y > 1 ? 's' : ''}`;
                                    if (m > 0) ageText += `, ${m} month${m > 1 ? 's' : ''}`;
                                } else if (m >= 1) {
                                    ageText = `${m} month${m > 1 ? 's' : ''}`;
                                } else {
                                    if (w > 0) ageText += `${w} week${w > 1 ? 's' : ''}`;
                                    if (d > 0) ageText += (w > 0 ? ', ' : '') + `${d} day${d > 1 ? 's' : ''}`;
                                }
                            }
                        }

                        const cardHtml = `
                            <div class="card card-hoverable h-100 mb-3">
                                <img src="${image}" class="img-fluid w-100 object-fit-cover rounded-start" alt="${petName}" style="height: 256px;">
                                <div class="card-body">
                                    <b class="card-title">${petName}</b>
                                    <p class="card-text">${iagd}&nbsp;·&nbsp;${breed}</p>
                                    <p class="card-text"><small class="text-muted">${genderIcon}&nbsp;${type}&nbsp;·&nbsp;${joinDateText}</small></p>
                                </div>
                                <div class="d-flex p-3" style="top: 125px;">
                                    <a class="btn btn-outline-primary me-2" style="flex: 1;" href="{{ url('pets') }}/${iagd}" target="_blank">
                                        <i class="bi bi-box-arrow-up-right"></i> View
                                    </a>
                                    <button class="pet-sire-select-option-btn btn btn-primary" style="flex: 2;" data-uuid="${pet?.uuid}" data-primary_image="${image}" data-pet_name="${petName}" data-breed="${breed}">
                                        <i class="bi bi-check2-circle"></i> Select as Sire
                                    </button>
                                </div>
                            </div>
                        `;

                        html += cardHtml;
                    });

                    $('.pet-sire-search-number-results').html(html).show();
                    $('.pet-sire-search-number-banner-no_records_found').hide();
                    TweenMax.staggerFrom('.pet-sire-search-number-results .card', 0.3, {opacity:0.0, transform: "translateY(20vh) scale(0)", delay: 0, transformOrigin:'50% 50%', ease:Circ.easeOut, force3D: true}, 0.04);
                } else {
                    $('.pet-sire-search-number-banner-no_records_found').show();
                    $('.pet-sire-search-number-preview_input').text(iagdNumber);
                    $('.pet-sire-search-number-results').hide();

                    const warningBanner = `
                        <div class="banner-container banner-warning p-3 text-center">
                            <i class="banner-icon bi bi-database-fill-exclamation"></i> No records found for <b class="pet-sire-search-number-preview_input">${iagdNumber}</b>
                            <div class="mt-3">
                                <button class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-input-sire-name">
                                    Search for their name instead
                                </button>
                            </div>
                        </div>
                    `;
                    $('.pet-sire-search-number-results').before(warningBanner);
                    TweenMax.staggerFrom('.banner-container.banner-warning', 0.3, {opacity:0.0, transform: "translateY(20vh) scale(0)", delay: 0, transformOrigin:'50% 50%', ease:Circ.easeOut, force3D: true}, 0.04);
                }

                if (response_count === 0) {
                    const warningBanner = `
                        <div class="banner-container banner-warning p-3 text-center">
                            <i class="banner-icon bi bi-database-fill-exclamation"></i> No records found for <b class="pet-sire-search-number-preview_input">${iagdNumber}</b>
                            <div class="mt-3">
                                <button class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-input-sire-name">
                                    Search for their name instead
                                </button>
                            </div>
                        </div>
                    `;
                    $('.pet-sire-search-number-results').before(warningBanner);
                    TweenMax.staggerFrom('.banner-container.banner-warning', 0.3, {opacity:0.0, transform: "translateY(20vh) scale(0)", delay: 0, transformOrigin:'50% 50%', ease:Circ.easeOut, force3D: true}, 0.04);
                }

                $button.prop('disabled', false).html('<i class="bi bi-arrow-clockwise"></i> Search Again');
            },
            error: function(xhr, status, error) {
                console.error('Error:', error);

                const errorBanner = `
                    <div class="banner-container banner-warning p-3 text-center">
                        <i class="banner-icon bi bi-database-fill-exclamation"></i> An error occurred during the search. Please try again.
                    </div>
                `;
                $('.pet-sire-search-number-results').before(errorBanner);
                $('.pet-sire-search-number-results').hide();

                $button.html('<i class="bi bi-exclamation-circle"></i> Error Occurred!');
                setTimeout(function() {
                    $button.prop('disabled', false).html('<i class="bi bi-arrow-clockwise"></i> Try Again');
                }, 2000);
            }
        });
    });

    $('.pet-sire-search-name-btn').on('click', function() {
        const species = $('#pet-species').val()?.trim();
        if (!species) return;

        const name = $('#pet-sire-search-name-input').val()?.trim();
        if (!name) return;

        const $button = $(this);
        $button.prop('disabled', true).html('<span class="spinner-border spinner-border-sm"></span> Searching');

        $('.pet-sire-search-name-results').empty().hide();
        $('.pet-sire-search-name-banner-no_records_found').hide();
        $('.banner-container.banner-warning').remove();

        $.ajax({
            url: `{{ url("api/v1/search/pets/name") }}/${encodeURIComponent(species)}/${encodeURIComponent(name)}`,
            type: 'GET',
            success: function(response) {
                let response_count = 0;
                if (Array.isArray(response) && response.length > 0) {
                    let html = '';

                    response.forEach(function(pet) {
                        const genderRaw = pet?.details?.gender?.toLowerCase() || '';
                        const isMale = genderRaw.startsWith('male');
                        const isFemale = genderRaw.startsWith('female');

                        if (!isMale) {
                            return;
                        }

                        response_count++;

                        const genderIcon = isMale
                            ? '<i class="bi bi-gender-male" style="color: cyan;"></i> Male'
                            : isFemale
                                ? '<i class="bi bi-gender-female" style="color: pink;"></i> Female'
                                : '<i class="bi bi-question-circle" style="color: gray;"></i> Unknown';

                        const image = pet?.primary_image || '';
                        const petName = pet?.pet_name || 'Unnamed';
                        const breed = pet?.details?.breed || 'Unknown Breed';
                        const iagd = pet?.details?.iagd_number || 'Unknown ID';
                        const type = pet?.pet_type || 'Unknown';

                        const joinDateRaw = pet?.meta?.date_inserted;
                        let joinDateText = 'Joined unknown';

                        if (joinDateRaw) {
                            let joinDate = luxon.DateTime.fromISO(joinDateRaw);
                            if (!joinDate.isValid) {
                                joinDate = luxon.DateTime.fromFormat(joinDateRaw, 'yyyy-MM-dd hh:mm:ss a');
                            }
                            if (joinDate.isValid) {
                                joinDateText = `Joined ${joinDate.toRelative({ locale: 'en' })}`;
                            }
                        }

                        const dobRaw = pet?.details?.date_of_birth;
                        let dobFormatted = 'Unknown';
                        let ageText = '';

                        if (dobRaw) {
                            let dob = luxon.DateTime.fromISO(dobRaw);
                            if (!dob.isValid) dob = luxon.DateTime.fromFormat(dobRaw, 'MMMM d, yyyy');
                            if (dob.isValid) {
                                dobFormatted = dob.toFormat('MMMM d, yyyy');

                                const now = luxon.DateTime.now();
                                const diff = now.diff(dob, ['years', 'months', 'weeks', 'days']).toObject();

                                const y = Math.floor(diff.years || 0);
                                const m = Math.floor(diff.months || 0);
                                const w = Math.floor(diff.weeks || 0);
                                const d = Math.floor(diff.days || 0);

                                if (y >= 1) {
                                    ageText = `${y} year${y > 1 ? 's' : ''}`;
                                    if (m > 0) ageText += `, ${m} month${m > 1 ? 's' : ''}`;
                                } else if (m >= 1) {
                                    ageText = `${m} month${m > 1 ? 's' : ''}`;
                                } else {
                                    if (w > 0) ageText += `${w} week${w > 1 ? 's' : ''}`;
                                    if (d > 0) ageText += (w > 0 ? ', ' : '') + `${d} day${d > 1 ? 's' : ''}`;
                                }
                            }
                        }

                        const cardHtml = `
                            <div class="card card-hoverable h-100 mb-3">
                                <img src="${image}" class="img-fluid w-100 object-fit-cover rounded-start" alt="${petName}" style="height: 256px;">
                                <div class="card-body">
                                    <b class="card-title">${petName}</b>
                                    <p class="card-text">${iagd}&nbsp;·&nbsp;${breed}</p>
                                    <p class="card-text"><small class="text-muted">${genderIcon}&nbsp;${type}&nbsp;·&nbsp;${joinDateText}</small></p>
                                </div>
                                <div class="d-flex p-3" style="top: 125px;">
                                    <a class="btn btn-outline-primary me-2" style="flex: 1;" href="{{ url('pets') }}/${iagd}" target="_blank">
                                        <i class="bi bi-box-arrow-up-right"></i> View
                                    </a>
                                    <button class="pet-sire-select-option-btn btn btn-primary" style="flex: 2;" data-uuid="${pet?.uuid}" data-primary_image="${image}" data-pet_name="${petName}" data-breed="${breed}">
                                        <i class="bi bi-check2-circle"></i> Select as Sire
                                    </button>
                                </div>
                            </div>
                        `;

                        html += cardHtml;
                    });

                    $('.pet-sire-search-name-results').html(html).show();
                    $('.pet-sire-search-name-banner-no_records_found').hide();
                    TweenMax.staggerFrom('.pet-sire-search-name-results .card', 0.3, {opacity:0.0, transform: "translateY(20vh) scale(0)", delay: 0, transformOrigin:'50% 50%', ease:Circ.easeOut, force3D: true}, 0.04);
                } else {
                    $('.pet-sire-search-name-banner-no_records_found').show();
                    $('.pet-sire-search-name-preview_input').text(name);
                    $('.pet-sire-search-name-results').hide();

                    const warningBanner = `
                        <div class="banner-container banner-warning p-3 text-center">
                            <i class="banner-icon bi bi-database-fill-exclamation"></i> No records found for <b class="pet-sire-search-name-preview_input">${name}</b>
                            <div class="mt-3">
                                <button class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-input-sire-iagd-number">
                                    Search for their IAGD number instead
                                </button>
                            </div>
                        </div>
                    `;
                    $('.pet-sire-search-name-results').before(warningBanner);
                    TweenMax.staggerFrom('.banner-container.banner-warning', 0.3, {opacity:0.0, transform: "translateY(20vh) scale(0)", delay: 0, transformOrigin:'50% 50%', ease:Circ.easeOut, force3D: true}, 0.04);
                }

                if (response_count === 0) {
                    $('.pet-sire-search-name-banner-no_records_found').show();
                    $('.pet-sire-search-name-preview_input').text(name);
                    $('.pet-sire-search-name-results').hide();

                    const warningBanner = `
                        <div class="banner-container banner-warning p-3 text-center">
                            <i class="banner-icon bi bi-database-fill-exclamation"></i> No records found for <b class="pet-sire-search-name-preview_input">${name}</b>
                            <div class="mt-3">
                                <button class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-input-sire-iagd-number">
                                    Search for their IAGD number instead
                                </button>
                            </div>
                        </div>
                    `;
                    $('.pet-sire-search-name-results').before(warningBanner);
                    TweenMax.staggerFrom('.banner-container.banner-warning', 0.3, {opacity:0.0, transform: "translateY(20vh) scale(0)", delay: 0, transformOrigin:'50% 50%', ease:Circ.easeOut, force3D: true}, 0.04);
                }

                $button.prop('disabled', false).html('<i class="bi bi-arrow-clockwise"></i> Search Again');
            },
            error: function(xhr, status, error) {
                console.error('Error:', error);

                const errorBanner = `
                    <div class="banner-container banner-warning p-3 text-center">
                        <i class="banner-icon bi bi-database-fill-exclamation"></i> An error occurred during the search. Please try again.
                    </div>
                `;
                $('.pet-sire-search-name-results').before(errorBanner);
                $('.pet-sire-search-name-results').hide();

                $button.html('<i class="bi bi-exclamation-circle"></i> Error Occurred!');
                setTimeout(function() {
                    $button.prop('disabled', false).html('<i class="bi bi-arrow-clockwise"></i> Try Again');
                }, 2000);
            }
        });
    });

    $('body').on('click', '.pet-sire-select-option-btn', function() {
        const uuid = $(this).data('uuid');
        const primaryImage = $(this).data('primary_image');
        const petName = $(this).data('pet_name');
        const breed = $(this).data('breed');

        $('#pet-sire-uuid').val(uuid);
        $('#pet-sire-name').val(petName);
        $('#pet-sire-breed').val(breed);
        $('.pet-sire-preview-image').attr('src', primaryImage);
        $('.pet-sire-preview-pet_name').text(petName);
        $('.pet-sire-preview-pet_breed').text(breed);

        animateShine($('#pet-sire-name').parent('.form-floating'));
        animateShine($('#pet-sire-breed').parent('.form-floating'));

        localStorage.setItem('form_pet-sire-uuid', uuid);
        localStorage.setItem('form_pet-sire-name', petName);
        localStorage.setItem('form_pet-sire-breed', breed);
        localStorage.setItem('form_pet-sire-image', primaryImage);

        $('.pet-sire-before-selection-group').hide();
        $('.pet-sire-after-selection-group').show();
        $('#offcanvas-input-sire-iagd-number').offcanvas('hide');
        $('#offcanvas-input-sire-name').offcanvas('hide');
    });

    $('body').on('click', '.pet-sire-no_iagd-save-btn', function() {
        const petName = $('#pet-sire-no_iagd-name-input').val();
        const breed = $('#pet-sire-no_iagd-breed-input').val();

        if (!petName || !breed) {
            return;
        }

        $('#pet-sire-name').val(petName);
        $('#pet-sire-breed').val(breed);
        $('.pet-sire-preview-pet_name').text(petName);
        $('.pet-sire-preview-pet_breed').text(breed);

        animateShine($('#pet-sire-name').parent('.form-floating'));
        animateShine($('#pet-sire-breed').parent('.form-floating'));

        localStorage.setItem('form_pet-sire-name', petName);
        localStorage.setItem('form_pet-sire-breed', breed);

        $('.pet-sire-before-selection-group').hide();
        $('.pet-sire-after-selection-group').show();
        $('#offcanvas-input-sire-no_iagd').offcanvas('hide');
    });

    $('.pet-dam-search-number-btn').on('click', function() {
        const species = $('#pet-species').val()?.trim();
        if (!species) return;

        const iagdNumber = $('#pet-dam-search-number-input').val()?.trim();
        if (!iagdNumber) return;

        const $button = $(this);
        $button.prop('disabled', true).html('<span class="spinner-border spinner-border-sm"></span> Searching');

        $('.pet-dam-search-number-results').empty().hide();
        $('.pet-dam-search-number-banner-no_records_found').hide();
        $('.banner-container.banner-warning').remove();

        $.ajax({
            url: `{{ url("api/v1/search/pets/id") }}/${encodeURIComponent(species)}/${encodeURIComponent(iagdNumber)}`,
            type: 'GET',
            success: function(response) {
                let response_count = 0;
                if (Array.isArray(response) && response.length > 0) {
                    let html = '';

                    response.forEach(function(pet) {
                        const genderRaw = pet?.details?.gender?.toLowerCase() || '';
                        const isMale = genderRaw.startsWith('male');
                        const isFemale = genderRaw.startsWith('female');

                        if (!isFemale) {
                            return;
                        }

                        response_count++;

                        const genderIcon = isMale
                            ? '<i class="bi bi-gender-male" style="color: cyan;"></i> Male'
                            : isFemale
                                ? '<i class="bi bi-gender-female" style="color: pink;"></i> Female'
                                : '<i class="bi bi-question-circle" style="color: gray;"></i> Unknown';

                        const image = pet?.primary_image || '';
                        const petName = pet?.pet_name || 'Unnamed';
                        const breed = pet?.details?.breed || 'Unknown Breed';
                        const iagd = pet?.details?.iagd_number || 'Unknown ID';
                        const type = pet?.pet_type || 'Unknown';

                        const joinDateRaw = pet?.meta?.date_inserted;
                        let joinDateText = 'Joined unknown';

                        if (joinDateRaw) {
                            let joinDate = luxon.DateTime.fromISO(joinDateRaw);
                            if (!joinDate.isValid) {
                                joinDate = luxon.DateTime.fromFormat(joinDateRaw, 'yyyy-MM-dd hh:mm:ss a');
                            }
                            if (joinDate.isValid) {
                                joinDateText = `Joined ${joinDate.toRelative({ locale: 'en' })}`;
                            }
                        }

                        const dobRaw = pet?.details?.date_of_birth;
                        let dobFormatted = 'Unknown';
                        let ageText = '';

                        if (dobRaw) {
                            let dob = luxon.DateTime.fromISO(dobRaw);
                            if (!dob.isValid) dob = luxon.DateTime.fromFormat(dobRaw, 'MMMM d, yyyy');
                            if (dob.isValid) {
                                dobFormatted = dob.toFormat('MMMM d, yyyy');

                                const now = luxon.DateTime.now();
                                const diff = now.diff(dob, ['years', 'months', 'weeks', 'days']).toObject();

                                const y = Math.floor(diff.years || 0);
                                const m = Math.floor(diff.months || 0);
                                const w = Math.floor(diff.weeks || 0);
                                const d = Math.floor(diff.days || 0);

                                if (y >= 1) {
                                    ageText = `${y} year${y > 1 ? 's' : ''}`;
                                    if (m > 0) ageText += `, ${m} month${m > 1 ? 's' : ''}`;
                                } else if (m >= 1) {
                                    ageText = `${m} month${m > 1 ? 's' : ''}`;
                                } else {
                                    if (w > 0) ageText += `${w} week${w > 1 ? 's' : ''}`;
                                    if (d > 0) ageText += (w > 0 ? ', ' : '') + `${d} day${d > 1 ? 's' : ''}`;
                                }
                            }
                        }

                        const cardHtml = `
                            <div class="card card-hoverable h-100 mb-3">
                                <img src="${image}" class="img-fluid w-100 object-fit-cover rounded-start" alt="${petName}" style="height: 256px;">
                                <div class="card-body">
                                    <b class="card-title">${petName}</b>
                                    <p class="card-text">${iagd}&nbsp;·&nbsp;${breed}</p>
                                    <p class="card-text"><small class="text-muted">${genderIcon}&nbsp;${type}&nbsp;·&nbsp;${joinDateText}</small></p>
                                </div>
                                <div class="d-flex p-3" style="top: 125px;">
                                    <a class="btn btn-outline-primary me-2" style="flex: 1;" href="{{ url('pets') }}/${iagd}" target="_blank">
                                        <i class="bi bi-box-arrow-up-right"></i> View
                                    </a>
                                    <button class="pet-dam-select-option-btn btn btn-primary" style="flex: 2;" data-uuid="${pet?.uuid}" data-primary_image="${image}" data-pet_name="${petName}" data-breed="${breed}">
                                        <i class="bi bi-check2-circle"></i> Select as Dam
                                    </button>
                                </div>
                            </div>
                        `;

                        html += cardHtml;
                    });

                    $('.pet-dam-search-number-results').html(html).show();
                    $('.pet-dam-search-number-banner-no_records_found').hide();
                    TweenMax.staggerFrom('.pet-dam-search-number-results .card', 0.3, {opacity:0.0, transform: "translateY(20vh) scale(0)", delay: 0, transformOrigin:'50% 50%', ease:Circ.easeOut, force3D: true}, 0.04);
                } else {
                    $('.pet-dam-search-number-banner-no_records_found').show();
                    $('.pet-dam-search-number-preview_input').text(iagdNumber);
                    $('.pet-dam-search-number-results').hide();

                    const warningBanner = `
                        <div class="banner-container banner-warning p-3 text-center">
                            <i class="banner-icon bi bi-database-fill-exclamation"></i> No records found for <b class="pet-dam-search-number-preview_input">${iagdNumber}</b>
                            <div class="mt-3">
                                <button class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-input-dam-name">
                                    Search for their name instead
                                </button>
                            </div>
                        </div>
                    `;
                    $('.pet-dam-search-number-results').before(warningBanner);
                    TweenMax.staggerFrom('.banner-container.banner-warning', 0.3, {opacity:0.0, transform: "translateY(20vh) scale(0)", delay: 0, transformOrigin:'50% 50%', ease:Circ.easeOut, force3D: true}, 0.04);
                }

                if (response_count === 0) {
                    const warningBanner = `
                        <div class="banner-container banner-warning p-3 text-center">
                            <i class="banner-icon bi bi-database-fill-exclamation"></i> No records found for <b class="pet-dam-search-number-preview_input">${iagdNumber}</b>
                            <div class="mt-3">
                                <button class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-input-dam-name">
                                    Search for their name instead
                                </button>
                            </div>
                        </div>
                    `;
                    $('.pet-dam-search-number-results').before(warningBanner);
                    TweenMax.staggerFrom('.banner-container.banner-warning', 0.3, {opacity:0.0, transform: "translateY(20vh) scale(0)", delay: 0, transformOrigin:'50% 50%', ease:Circ.easeOut, force3D: true}, 0.04);
                }

                $button.prop('disabled', false).html('<i class="bi bi-arrow-clockwise"></i> Search Again');
            },
            error: function(xhr, status, error) {
                console.error('Error:', error);

                const errorBanner = `
                    <div class="banner-container banner-warning p-3 text-center">
                        <i class="banner-icon bi bi-database-fill-exclamation"></i> An error occurred during the search. Please try again.
                    </div>
                `;
                $('.pet-dam-search-number-results').before(errorBanner);
                $('.pet-dam-search-number-results').hide();

                $button.html('<i class="bi bi-exclamation-circle"></i> Error Occurred!');
                setTimeout(function() {
                    $button.prop('disabled', false).html('<i class="bi bi-arrow-clockwise"></i> Try Again');
                }, 2000);
            }
        });
    });

    $('.pet-dam-search-name-btn').on('click', function() {
        const species = $('#pet-species').val()?.trim();
        if (!species) return;

        const name = $('#pet-dam-search-name-input').val()?.trim();
        if (!name) return;

        const $button = $(this);
        $button.prop('disabled', true).html('<span class="spinner-border spinner-border-sm"></span> Searching');

        $('.pet-dam-search-name-results').empty().hide();
        $('.pet-dam-search-name-banner-no_records_found').hide();
        $('.banner-container.banner-warning').remove();

        $.ajax({
            url: `{{ url("api/v1/search/pets/name") }}/${encodeURIComponent(species)}/${encodeURIComponent(name)}`,
            type: 'GET',
            success: function(response) {
                let response_count = 0;
                if (Array.isArray(response) && response.length > 0) {
                    let html = '';

                    response.forEach(function(pet) {
                        const genderRaw = pet?.details?.gender?.toLowerCase() || '';
                        const isMale = genderRaw.startsWith('male');
                        const isFemale = genderRaw.startsWith('female');

                        if (!isFemale) {
                            return;
                        }

                        response_count++;

                        const genderIcon = isMale
                            ? '<i class="bi bi-gender-male" style="color: cyan;"></i> Male'
                            : isFemale
                                ? '<i class="bi bi-gender-female" style="color: pink;"></i> Female'
                                : '<i class="bi bi-question-circle" style="color: gray;"></i> Unknown';

                        const image = pet?.primary_image || '';
                        const petName = pet?.pet_name || 'Unnamed';
                        const breed = pet?.details?.breed || 'Unknown Breed';
                        const iagd = pet?.details?.iagd_number || 'Unknown ID';
                        const type = pet?.pet_type || 'Unknown';

                        const joinDateRaw = pet?.meta?.date_inserted;
                        let joinDateText = 'Joined unknown';

                        if (joinDateRaw) {
                            let joinDate = luxon.DateTime.fromISO(joinDateRaw);
                            if (!joinDate.isValid) {
                                joinDate = luxon.DateTime.fromFormat(joinDateRaw, 'yyyy-MM-dd hh:mm:ss a');
                            }
                            if (joinDate.isValid) {
                                joinDateText = `Joined ${joinDate.toRelative({ locale: 'en' })}`;
                            }
                        }

                        const dobRaw = pet?.details?.date_of_birth;
                        let dobFormatted = 'Unknown';
                        let ageText = '';

                        if (dobRaw) {
                            let dob = luxon.DateTime.fromISO(dobRaw);
                            if (!dob.isValid) dob = luxon.DateTime.fromFormat(dobRaw, 'MMMM d, yyyy');
                            if (dob.isValid) {
                                dobFormatted = dob.toFormat('MMMM d, yyyy');

                                const now = luxon.DateTime.now();
                                const diff = now.diff(dob, ['years', 'months', 'weeks', 'days']).toObject();

                                const y = Math.floor(diff.years || 0);
                                const m = Math.floor(diff.months || 0);
                                const w = Math.floor(diff.weeks || 0);
                                const d = Math.floor(diff.days || 0);

                                if (y >= 1) {
                                    ageText = `${y} year${y > 1 ? 's' : ''}`;
                                    if (m > 0) ageText += `, ${m} month${m > 1 ? 's' : ''}`;
                                } else if (m >= 1) {
                                    ageText = `${m} month${m > 1 ? 's' : ''}`;
                                } else {
                                    if (w > 0) ageText += `${w} week${w > 1 ? 's' : ''}`;
                                    if (d > 0) ageText += (w > 0 ? ', ' : '') + `${d} day${d > 1 ? 's' : ''}`;
                                }
                            }
                        }

                        const cardHtml = `
                            <div class="card card-hoverable h-100 mb-3">
                                <img src="${image}" class="img-fluid w-100 object-fit-cover rounded-start" alt="${petName}" style="height: 256px;">
                                <div class="card-body">
                                    <b class="card-title">${petName}</b>
                                    <p class="card-text">${iagd}&nbsp;·&nbsp;${breed}</p>
                                    <p class="card-text"><small class="text-muted">${genderIcon}&nbsp;${type}&nbsp;·&nbsp;${joinDateText}</small></p>
                                </div>
                                <div class="d-flex p-3" style="top: 125px;">
                                    <a class="btn btn-outline-primary me-2" style="flex: 1;" href="{{ url('pets') }}/${iagd}" target="_blank">
                                        <i class="bi bi-box-arrow-up-right"></i> View
                                    </a>
                                    <button class="pet-dam-select-option-btn btn btn-primary" style="flex: 2;" data-uuid="${pet?.uuid}" data-primary_image="${image}" data-pet_name="${petName}" data-breed="${breed}">
                                        <i class="bi bi-check2-circle"></i> Select as Sire
                                    </button>
                                </div>
                            </div>
                        `;

                        html += cardHtml;
                    });

                    $('.pet-dam-search-name-results').html(html).show();
                    $('.pet-dam-search-name-banner-no_records_found').hide();
                    TweenMax.staggerFrom('.pet-dam-search-name-results .card', 0.3, {opacity:0.0, transform: "translateY(20vh) scale(0)", delay: 0, transformOrigin:'50% 50%', ease:Circ.easeOut, force3D: true}, 0.04);
                } else {
                    $('.pet-dam-search-name-banner-no_records_found').show();
                    $('.pet-dam-search-name-preview_input').text(name);
                    $('.pet-dam-search-name-results').hide();

                    const warningBanner = `
                        <div class="banner-container banner-warning p-3 text-center">
                            <i class="banner-icon bi bi-database-fill-exclamation"></i> No records found for <b class="pet-dam-search-name-preview_input">${name}</b>
                            <div class="mt-3">
                                <button class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-input-dam-iagd-number">
                                    Search for their IAGD number instead
                                </button>
                            </div>
                        </div>
                    `;
                    $('.pet-dam-search-name-results').before(warningBanner);
                    TweenMax.staggerFrom('.banner-container.banner-warning', 0.3, {opacity:0.0, transform: "translateY(20vh) scale(0)", delay: 0, transformOrigin:'50% 50%', ease:Circ.easeOut, force3D: true}, 0.04);
                }

                if (response_count === 0) {
                    $('.pet-dam-search-name-banner-no_records_found').show();
                    $('.pet-dam-search-name-preview_input').text(name);
                    $('.pet-dam-search-name-results').hide();

                    const warningBanner = `
                        <div class="banner-container banner-warning p-3 text-center">
                            <i class="banner-icon bi bi-database-fill-exclamation"></i> No records found for <b class="pet-dam-search-name-preview_input">${name}</b>
                            <div class="mt-3">
                                <button class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-input-dam-iagd-number">
                                    Search for their IAGD number instead
                                </button>
                            </div>
                        </div>
                    `;
                    $('.pet-dam-search-name-results').before(warningBanner);
                    TweenMax.staggerFrom('.banner-container.banner-warning', 0.3, {opacity:0.0, transform: "translateY(20vh) scale(0)", delay: 0, transformOrigin:'50% 50%', ease:Circ.easeOut, force3D: true}, 0.04);
                }

                $button.prop('disabled', false).html('<i class="bi bi-arrow-clockwise"></i> Search Again');
            },
            error: function(xhr, status, error) {
                console.error('Error:', error);

                const errorBanner = `
                    <div class="banner-container banner-warning p-3 text-center">
                        <i class="banner-icon bi bi-database-fill-exclamation"></i> An error occurred during the search. Please try again.
                    </div>
                `;
                $('.pet-dam-search-name-results').before(errorBanner);
                $('.pet-dam-search-name-results').hide();

                $button.html('<i class="bi bi-exclamation-circle"></i> Error Occurred!');
                setTimeout(function() {
                    $button.prop('disabled', false).html('<i class="bi bi-arrow-clockwise"></i> Try Again');
                }, 2000);
            }
        });
    });

    $('body').on('click', '.pet-dam-select-option-btn', function() {
        const uuid = $(this).data('uuid');
        const primaryImage = $(this).data('primary_image');
        const petName = $(this).data('pet_name');
        const breed = $(this).data('breed');

        $('#pet-dam-uuid').val(uuid);
        $('#pet-dam-name').val(petName);
        $('#pet-dam-breed').val(breed);
        $('.pet-dam-preview-image').attr('src', primaryImage);
        $('.pet-dam-preview-pet_name').text(petName);
        $('.pet-dam-preview-pet_breed').text(breed);

        animateShine($('#pet-dam-name').parent('.form-floating'));
        animateShine($('#pet-dam-breed').parent('.form-floating'));

        localStorage.setItem('form_pet-dam-uuid', uuid);
        localStorage.setItem('form_pet-dam-name', petName);
        localStorage.setItem('form_pet-dam-breed', breed);
        localStorage.setItem('form_pet-dam-image', primaryImage);

        $('.pet-dam-before-selection-group').hide();
        $('.pet-dam-after-selection-group').show();
        $('#offcanvas-input-dam-iagd-number').offcanvas('hide');
        $('#offcanvas-input-dam-name').offcanvas('hide');
    });

    $('body').on('click', '.pet-dam-no_iagd-save-btn', function() {
        const petName = $('#pet-dam-no_iagd-name-input').val();
        const breed = $('#pet-dam-no_iagd-breed-input').val();

        if (!petName || !breed) {
            return;
        }

        $('#pet-dam-name').val(petName);
        $('#pet-dam-breed').val(breed);
        $('.pet-dam-preview-pet_name').text(petName);
        $('.pet-dam-preview-pet_breed').text(breed);

        animateShine($('#pet-dam-name').parent('.form-floating'));
        animateShine($('#pet-dam-breed').parent('.form-floating'));

        localStorage.setItem('form_pet-dam-name', petName);
        localStorage.setItem('form_pet-dam-breed', breed);

        $('.pet-dam-before-selection-group').hide();
        $('.pet-dam-after-selection-group').show();
        $('#offcanvas-input-dam-no_iagd').offcanvas('hide');
    });

    $('.registration-submit-btn').on('click', async function() {
        $('.submit-nucleus-text .nucleobase').show();
        TweenMax.staggerFrom(".submit-nucleus-text .nucleobase", 1.2, {opacity:0.0, transform: "translateY(20vh) scale(0)", delay: 0, transformOrigin:'50% 50%', ease:Circ.easeOut, force3D: true},0.06)
        setTimeout(function() {
            $('.submit-uploading-inactive-loading-group').fadeIn('fast');
            $('.submit-assigning-inactive-loading-group').fadeIn('fast');
            $('.submit-creating-inactive-loading-group').fadeIn('fast');
            setTimeout(function() {
                submitRegistration();
            }, 750);
        }, 750);
    });
});
</script>
</html>