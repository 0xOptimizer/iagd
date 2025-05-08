<!doctype html>
<html lang="en">

<head>


    {{-- Required Meta tags --}}
    @include('admin.sections.metatags')

    {{-- Stylesheets --}}
    @include('admin.sections.stylesheets')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.bootstrap5.css">
</head>

<body id="admin-page">

    <div class="wrapper d-flex flex-row">
        {{-- Floating sidebar --}}
        @include('admin.sections.floating-sidebar')

        <div class="main-content">

            {{-- Header navigation bar --}}
            @include('admin.sections.header-nav')

            <div class="w-100" style="padding: 1rem;">
                <div class="page-contents py-3 px-1 py-lg-3 px-lg-3 w-100">
                    <div class="container-fluid">
                        <div class="row pt-3">
                            <div class="col-12 mb-3">
                                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                                    aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a class="link-offset-2 link-underline link-underline-opacity-0"
                                                href="{{ route('admin.pets') }}">
                                                <div class="d-flex flex-row justify-content-center align-items-center">
                                                    <div class="svg-icon-sm me-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            class="size-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                                        </svg>
                                                    </div>
                                                    Pets
                                                </div>
                                            </a>
                                        </li>
                                        <li class="breadcrumb-item active">
                                            <a class="link-offset-2 link-underline link-underline-opacity-0"
                                                href="{{ route('admin.pets.form') }}">
                                                <div class="d-flex flex-row justify-content-center align-items-center">
                                                    <div class="svg-icon-sm me-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            class="size-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                                        </svg>
                                                    </div>
                                                    Form
                                                </div>
                                            </a>
                                        </li>
                                        {{-- <li class="breadcrumb-item active" aria-current="page">Library</li> --}}
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        <div class="row pt-3 mb-3">
                            <div class="col-12">
                                <div class="bs-card p-3">
                                    <div class="d-flex justify-content-start mb-3">


                                        <a href="{{ url()->previous() ? url()->previous() : route('admin.pets') }}"
                                            type="button"
                                            class="btn btn-danger d-flex flex-row justify-content-center align-items-center ms-0 ms-md-2">
                                            <div class="svg-icon-sm me-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="size-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                                                </svg>

                                            </div>

                                            <span>
                                                Back
                                            </span>
                                        </a>

                                    </div>

                                    <div class="sectionTabContainer w-100">
                                        <div class="container-fluid mx-0 w-100 sectionTabContainerTabs">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="lead mb-3">
                                                        Pet
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-4">
                                                    <div class="mb-3">
                                                        <div class="form-floating">
                                                            <input id="pet_name" type="text" class="form-control form-control-sm"
                                                                placeholder="" />
                                                            <label for="formId1">Name</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-lg-4">
                                                    <div class="mb-3">

                                                        <div class="form-floating">
                                                            <input id="pet_images" type="file" class="form-control"
                                                                placeholder="Choose" multiple>
                                                            <label for="pet_images">Image</label>
                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="col-12 col-lg-4">
                                                    <div class="mb-3">
                                                        <div class="form-floating">
                                                            <select id="pet_type" class="form-select">
                                                                <option selected>Select one</option>
                                                                <option value="dog">Dog</option>
                                                                <option value="cat">Cat</option>
                                                                <option value="bird">Bird</option>
                                                            </select>
                                                            <label for="floatingSelectGrid">
                                                                Choose type
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <button type="button"
                                                            class="btn btn-primary d-flex flex-row justify-content-center align-items-center nextSectionTabs">
                                                            <div class="svg-icon-sm me-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor" class="size-6">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                                                </svg>

                                                            </div>
                                                            <span>Continue</span>

                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="container-fluid mx-0 w-100 sectionTabContainerTabs">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="lead mb-3">
                                                        Pet Details
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-4">
                                                    <div class="mb-3">
                                                        <div class="form-floating">
                                                            <input id="pet_breed" type="text" class="form-control form-control-sm"
                                                                placeholder="" />
                                                            <label for="pet_breed">Breed</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-4">
                                                    <div class="mb-3">
                                                        <div class="form-floating">
                                                            <input id="iagd_number" type="text" class="form-control form-control-sm"
                                                                placeholder="" />
                                                            <label for="iagd_number">IAGD #</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-4">
                                                    <div class="mb-3">
                                                        <div class="form-floating">
                                                            <select id="pet_stars" class="form-select">
                                                                <option selected>
                                                                    ---
                                                                </option>
                                                                <option value="1">
                                                                    ⭐
                                                                </option>
                                                                <option value="2">
                                                                    ⭐⭐
                                                                </option>
                                                                <option value="3">
                                                                    ⭐⭐⭐
                                                                </option>
                                                                <option value="4">
                                                                    ⭐⭐⭐⭐
                                                                </option>
                                                                <option value="5">
                                                                    ⭐⭐⭐⭐⭐
                                                                </option>
                                                            </select>
                                                            <label for="pet_stars">
                                                                Rate
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-4">
                                                    <div class="mb-3">
                                                        <div class="form-floating">
                                                            <input id="owner_name" type="text" class="form-control form-control-sm"
                                                                placeholder="" />
                                                            <label for="owner_name">
                                                                Owner
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-4">
                                                    <div class="mb-3">
                                                        <div class="form-floating">
                                                            <input id="co_owner_name" type="text" class="form-control form-control-sm"
                                                                placeholder="" />
                                                            <label for="co_owner_name">
                                                                Co-owner
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-4">
                                                    <div class="mb-3">
                                                        <div class="form-floating">
                                                            <input id="location" type="text" class="form-control form-control-sm"
                                                                placeholder="" />
                                                            <label for="location">
                                                                Location
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-4">
                                                    <div class="mb-3">
                                                        <div class="form-floating">
                                                            <input id="breeder" type="text" class="form-control form-control-sm"
                                                                placeholder="" />
                                                            <label for="breeder">
                                                                Breeder
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-lg-4">
                                                    <div class="mb-3">
                                                        <div class="form-floating">
                                                            <input id="animal_facility" type="text" class="form-control form-control-sm"
                                                                placeholder="" />
                                                            <label for="animal_facility">
                                                                Animal Facility
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-lg-4">
                                                    <div class="mb-3">
                                                        <div class="form-floating">
                                                            <input id="gender" type="text" class="form-control form-control-sm"
                                                                placeholder="" />
                                                            <label for="gender">
                                                                Gender
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-12 col-lg-4">
                                                    <div class="mb-3">
                                                        <div class="form-floating">
                                                            <input id="date_of_birth" type="text" class="form-control form-control-sm"
                                                                placeholder="" />
                                                            <label for="date_of_birth">
                                                                Date of birth
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-lg-4">
                                                    <div class="mb-3">
                                                        <div class="form-floating">
                                                            <input id="markings" type="text" class="form-control form-control-sm"
                                                                placeholder="" />
                                                            <label for="markings">
                                                                Markings
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-lg-4">
                                                    <div class="mb-3">
                                                        <div class="form-floating">
                                                            <input id="fur_color" type="text" class="form-control form-control-sm"
                                                                placeholder="" />
                                                            <label for="fur_color">
                                                                Fur color
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-lg-4">
                                                    <div class="mb-3">
                                                        <div class="form-floating">
                                                            <input id="eye_color" type="text" class="form-control form-control-sm"
                                                                placeholder="" />
                                                            <label for="eye_color">
                                                                Eye color
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-lg-4">
                                                    <div class="mb-3">
                                                        <div class="form-floating">
                                                            <input id="weight" type="text" class="form-control form-control-sm"
                                                                placeholder="" />
                                                            <label for="weight">
                                                                Weight
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-lg-4">
                                                    <div class="mb-3">
                                                        <div class="form-floating">
                                                            <input id="height" type="text" class="form-control form-control-sm"
                                                                placeholder="" />
                                                            <label for="height">
                                                                Height
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-lg-4">
                                                    <div class="mb-3">
                                                        <div class="form-floating">
                                                            <input id="icgd_number" type="text" class="form-control form-control-sm"
                                                                placeholder="" />
                                                            <label for="icgd_number">
                                                                ICGD number
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-lg-4">
                                                    <div class="mb-3">
                                                        <div class="form-floating">
                                                            <input id="link" type="text" class="form-control form-control-sm"
                                                                placeholder="" />
                                                            <label for="link">
                                                                Link
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-lg-4">
                                                    <div class="mb-3">
                                                        <div class="form-floating">
                                                            <input id="parent_male" type="text" class="form-control form-control-sm"
                                                                placeholder="" />
                                                            <label for="parent_male">
                                                                Parent male
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-lg-4">
                                                    <div class="mb-3">
                                                        <div class="form-floating">
                                                            <input id="parent_female" type="text" class="form-control form-control-sm"
                                                                placeholder="" />
                                                            <label for="parent_female">
                                                                Parent female
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div
                                                        class="mb-3 d-flex flex-row justify-content-between align-items-center gap-2">
                                                        <button type="button"
                                                            class="btn btn-secondary d-flex flex-row justify-content-center align-items-center prevSectionTabs">
                                                            <div class="svg-icon-sm me-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor" class="size-6">
                                                                    <path stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                                                                </svg>
                                                            </div>
                                                            <span>Return</span>

                                                        </button>

                                                        <button id="submitPetForm" type="button"
                                                            class="btn btn-primary d-flex flex-row justify-content-center align-items-center">
                                                            <div class="svg-icon-sm me-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor" class="size-6">
                                                                    <path stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                                                </svg>

                                                            </div>
                                                            <span>Save</span>

                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Laravel PHP to javascript variables footer --}}
    @include('jsVars')

    {{-- Scripts --}}
    @include('admin.sections.jsscripts')

    <script src="{{ asset('admin-resources/js/sectionTabControl.js') }}"></script>

    <script type="module" src="{{ asset("admin-resources/js/pets-form.js") }}"></script>
</body>

</html>
