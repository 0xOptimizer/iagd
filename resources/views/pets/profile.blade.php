<!DOCTYPE html>

<html>
<head>
    @include('components.header')
</head>
<style>


</style>
<body>
    @include('components.nav')
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: -1; display: flex; align-items: center; justify-content: center; pointer-events: none;">
        <img src="{{ asset('images/map.svg') }}" style="max-width: 100%; max-height: 100%; object-fit: contain;">
    </div>
    <main class="p-3" style="position: relative;">
        <div class="iagd-circle-containers">
            <div class="iagd-circle-01"></div>
            <div class="iagd-circle-02"></div>
            <div class="iagd-circle-03"></div>
            <div class="iagd-circle-04"></div>
            <div class="iagd-circle-05"></div>
            <div class="iagd-circle-06"></div>
            <div class="iagd-circle-07"></div>
        </div>
        <div class="mt-5">
            <div class="image-container text-center position-relative">
                <div class="circle-text pet-profile-iagd_number position-absolute" style="top: 0px; left: 0px;">
                    <svg viewBox="0 0 200 200" width="192" height="192" style="display: block;">
                        <defs>
                            <path id="circlePath" d="M 100,100 m -60,0 a 60,60 0 1,1 120,0 a 60,60 0 1,1 -120,0"/>
                        </defs>
                        <text dy="-5" fill="#333" font-size="14" text-anchor="middle">
                            <textPath xlink:href="#circlePath" startOffset="15%">
                                {{ $pet->details->iagd_number }}
                            </textPath>
                        </text>
                    </svg>
                </div>
                @php
                    $file = $pet->files->first();
                @endphp
                @if ($file)
                    <img src="{{ asset('uploads/pets/' . $file->attached_to_uuid . '/' . $file->uuid . '.' . $file->file_extension) }}" class="rounded-circle" alt="" width="192" height="192">
                @else
                    <img src="{{ asset('uploads/pets/default.png') }}" class="rounded-circle" alt="Default Image" width="192" height="192">
                @endif
            </div>
            <div class="mt-3 text-center position-relative">
                <h1 class="h1wrap">
                    <span class="pet-profile-name text-gradient-primary" style="z-index: 2;">{{ $pet->pet_name }}</span>
                </h1>
                <h1 class="h1wrap position-absolute" style="top: 28px; left: 50%; transform: translate(-50%, -50%); z-index: 1;">
                    <span style="color: black; opacity: 0.5; font-weight: bold;">{{ $pet->pet_name }}</span>
                </h1>
                <h2 class="phrases"></h2>
            </div>
            <!-- <div class="pet-tabs-container text-center justify-content-center mt-3">
                <button class="pet-tab btn @if(!request()-> has('tab') || request()->get('tab') == 'details') btn-primary @else btn-secondary @endif" style="width: 130px;"><i class="bi bi-info-circle"></i> Details</button>
                <button class="pet-tab btn @if(request()->get('tab') == 'pedigree') btn-primary @else btn-secondary @endif" style="width: 130px;"></i><i class="bi bi-diagram-2"></i> Pedigree</button>
                <button class="pet-tab btn @if(request()->get('tab') == 'gallery') btn-primary @else btn-secondary @endif" style="width: 130px;"><i class="bi bi-images"></i> Gallery</button>
                <button class="pet-tab btn @if(request()->get('tab') == 'documents') btn-primary @else btn-secondary @endif" style="width: 130px;"><i class="bi bi-stack"></i> Comments</button>
                <button class="pet-tab btn @if(request()->get('tab') == 'settings') btn-primary @else btn-secondary @endif"><i class="bi bi-gear"></i></button>
                <button class="pet-tab btn @if(request()->get('tab') == 'export') btn-primary @else btn-secondary @endif"><i class="bi bi-file-earmark-arrow-down"></i></button>
                <button class="pet-tab btn btn-secondary"><i class="bi bi-flag" style="color: red;"></i></button>
            </div> -->
            <div class="pet-interactives-container d-flex justify-content-between w-100 align-items-center">
                <div class="text-start">
                    <button id="pet-like-btn" class="pet-interact btn btn-secondary align-content-center position-relative" data-value="like" data-active="false" data-icon-default="{{ asset('images/mayor_icons_like.png') }}" data-icon-active="{{ asset('images/mayor_icons_like_white.png') }}">
                        <img src="{{ asset('images/mayor_icons_like_white.png') }}" class="position-absolute" style="width: 28px; height: 28px; left: 7px; top: 1px;">
                        <span class="pet-interact-count">0</span>
                    </button>
                    <button id="pet-favorite-btn" class="pet-interact btn btn-secondary align-content-center position-relative" data-value="favorite" data-active="false" data-icon-default="{{ asset('images/mayor_icons_heart.png') }}" data-icon-active="{{ asset('images/mayor_icons_heart_white.png') }}">
                        <img src="{{ asset('images/mayor_icons_heart_white.png') }}" class="position-absolute" style="width: 28px; height: 28px; left: 7px; top: 1px;">
                        <span class="pet-interact-count">0</span>
                    </button>
                    <button id="pet-chat-btn" class="pet-interact-passive btn btn-secondary align-content-center position-relative">
                        <img src="{{ asset('images/mayor_icons_chat_white.png') }}" class="position-absolute" style="width: 28px; height: 28px; left: 7px; top: 1px;">
                        <span class="pet-interact-count">0</span>
                    </button>
                </div>
                <div class="text-center">
                    <div class="d-none d-md-block">
                        <span class="iagd-badge iagd-badge-premium"><i class="bi bi-gem"></i> Premium</span>
                        <span class="iagd-badge iagd-badge-early_member"><i class="bi bi-trophy-fill"></i> Early Member</span>
                        <span class="iagd-badge iagd-badge-new_member"><i class="bi bi-brightness-alt-high-fill"></i> New Member</span>
                        <span class="iagd-badge iagd-badge-join_date"><i class="bi bi-trophy-fill"></i> 10 years</span>
                    </div>
                    <div class="d-block d-md-none">
                    </div>
                </div>
                <div class="text-end">
                    <div class="d-none d-md-block">
                        <button class="btn btn-secondary" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-pet-profile-qr_code"><i class="bi bi-qr-code"></i> QR Code</button>
                        <button class="btn btn-secondary"><i class="bi bi-file-earmark-arrow-down"></i> Export</button>
                        <button class="btn btn-secondary"><i class="bi bi-gear-fill"></i></button>
                    </div>
                    <div class="d-block d-md-none">
                        <button class="btn btn-secondary" id="pet-options-btn">
                            <i class="bi bi-gear-fill"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="mt-1 profile-group-container-grid">
                <div class="profile-group-container" style="display: none;">
                    <div class="row p-3">
                        <!-- Pet Details 1/2 -->
                        <div class="col-lg-6 col-sm-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="pet-breed-container btn btn-secondary" data-link="https://www.tiktok.com/@DocAbelManaloOfficial/">
                                        <div class="pet-breed-background"></div>
                                        <div class="pet-breed-icon" style="top: -19px; left: 10px;">
                                            @if ($pet->pet_type == 10)
                                                <img src="{{ asset('images/mayor_icons_dog.png') }}" alt="Pet Breed Icon" width="64" height="64">
                                            @elseif ($pet->pet_type == 11)
                                                <img src="{{ asset('images/mayor_icons_cat.png') }}" alt="Pet Breed Icon" width="64" height="64">
                                            @elseif ($pet->pet_type == 12)
                                                <img src="{{ asset('images/mayor_icons_bird.png') }}" alt="Pet Breed Icon" width="64" height="64">
                                            @elseif ($pet->pet_type == 13)
                                                <img src="{{ asset('images/mayor_icons_rabbit.png') }}" alt="Pet Breed Icon" width="64" height="64">
                                            @endif
                                        </div>
                                        <h6 class="pet-breed-title">{{ $pet->details->breed ?? 'No Breed' }}</h6>
                                        <span class="pet-breed-tooltip">
                                            100% ASPIN / 100% ASPIN / 100% ASPIN / 100% ASPIN
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-12 mt-3">
                                    <div class="form-floating position-relative">
                                        <input type="text" class="form-control w-100" id="petMarkings" placeholder="Pet Markings" value="{{ $pet->details->markings }}" readonly>
                                        <label for="petMarkings" style="color: #15a4ff !important;"><i class="bi bi-lightning-fill"></i> Markings</label>
                                        <button type="button" class="btn btn-secondary position-absolute" style="top: 8px; right: 8px;">
                                            <i class="bi bi-pencil-fill"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-12 mt-2">
                                    <div class="row g-1">
                                        <div class="col-sm-6">
                                            <div class="form-floating position-relative">
                                                <input type="text" class="form-control w-100" id="petBodyColor" placeholder="Pet Body Color" value="{{ $pet->details->colors_body ?? 'Unspecified' }}" readonly>
                                                <label for="petBodyColor" style="color: #15a4ff !important;"><i class="bi bi-gitlab"></i> Body Color</label>
                                                <button type="button" class="btn btn-secondary position-absolute" style="top: 8px; right: 8px;">
                                                    <i class="bi bi-pencil-fill"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating position-relative">
                                                <input type="text" class="form-control w-100" id="petEyeColor" placeholder="Pet Eye Color" value="{{ $pet->details->colors_eye ?? 'Unspecified' }}" readonly>
                                                <label for="petEyeColor" style="color: #15a4ff !important;"><i class="bi bi-eye-fill"></i> Eye Color</label>
                                                <button type="button" class="btn btn-secondary position-absolute" style="top: 8px; right: 8px;">
                                                    <i class="bi bi-pencil-fill"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 mt-2">
                                    <div class="pet-banner pet-banner-gallery w-100">
                                        <img src="{{ asset('images/iagd-container-cat-raw.png') }}" alt="Gallery Images" class="pet-banner-image">
                                        <div class="pet-banner-title text-center">
                                            <h6 style="color: #15a4ff; font-size: 24px;"><span class="outlined-text" style="color: white;"><i class="bi bi-images"></i> Gallery <span style="opacity: 0.33;">//</span> 24,506 images</span></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Pet Details 2/2 -->
                        <div class="col-lg-6 col-sm-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="pet-breed-container btn btn-secondary" data-link="https://www.tiktok.com/@DocAbelManaloOfficial/">
                                        <div class="pet-breed-background"></div>
                                        <div class="pet-breed-icon" style="top: -19px; left: 10px;">
                                            <img src="{{ asset('images/mayor_icons_summer.png') }}" alt="Age Icon" width="64" height="64">
                                        </div>
                                        @php
                                            use Carbon\Carbon;

                                            $dob = Carbon::parse($pet->details->date_of_birth);
                                            $dobFormatted = $dob->format('F d, Y');
                                            $now = Carbon::now();
                                            $diff = $dob->diff($now);

                                            $ageParts = [];

                                            if ($diff->y > 0) {
                                                $ageParts[] = $diff->y . ' year' . ($diff->y > 1 ? 's' : '');
                                                if ($diff->m > 0) {
                                                    $ageParts[] = $diff->m . ' month' . ($diff->m > 1 ? 's' : '');
                                                }
                                            } elseif ($diff->m > 0) {
                                                $ageParts[] = $diff->m . ' month' . ($diff->m > 1 ? 's' : '');
                                                if ($diff->d >= 7) {
                                                    $weeks = intdiv($diff->d, 7);
                                                    $ageParts[] = $weeks . ' week' . ($weeks > 1 ? 's' : '');
                                                }
                                            } elseif ($diff->d > 0) {
                                                $ageParts[] = $diff->d . ' day' . ($diff->d > 1 ? 's' : '');
                                                if ($diff->h > 0) {
                                                    $ageParts[] = $diff->h . ' hour' . ($diff->h > 1 ? 's' : '');
                                                }
                                            } elseif ($diff->h > 0) {
                                                $ageParts[] = $diff->h . ' hour' . ($diff->h > 1 ? 's' : '');
                                                if ($diff->i > 0) {
                                                    $ageParts[] = $diff->i . ' minute' . ($diff->i > 1 ? 's' : '');
                                                }
                                            } elseif ($diff->i > 0) {
                                                $ageParts[] = $diff->i . ' minute' . ($diff->i > 1 ? 's' : '');
                                            } else {
                                                $ageParts[] = 'Just now';
                                            }

                                            $ageFormatted = implode(', ', array_slice($ageParts, 0, 2));
                                        @endphp
                                        <h6 class="pet-breed-title">{{ $ageFormatted }} old</h6>
                                        <span class="pet-breed-tooltip">
                                            Born {{ $dobFormatted }}
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-12 mt-3">
                                    <div class="row g-1">
                                        <div class="col-sm-6">
                                            <div class="form-floating position-relative">
                                                @php
                                                    $gender = $pet->details->gender;
                                                    $genderIcon = 'bi-gender-ambiguous';
                                                    $genderColor = '#15a4ff'; // Default color
                                                    if ($gender == 'Male') {
                                                        $genderIcon = 'bi-gender-male';
                                                        $genderColor = '#007bff';
                                                    } elseif ($gender == 'Female') {
                                                        $genderIcon = 'bi-gender-female';
                                                        $genderColor = '#ff69b4';
                                                    }
                                                @endphp
                                                <i class="bi {{ $genderIcon }} position-absolute" style="top: 26px; left: 10px; color: {{ $genderColor }};"></i>
                                                <input type="text" class="form-control w-100" id="petGender" placeholder="Pet Gender" value="{{ $pet->details->gender }}" style="padding-left: 30px;" readonly>
                                                <label for="petGender" style="color: #15a4ff !important;"><i class="bi bi-balloon-fill"></i> Gender</label>
                                                <button type="button" class="btn btn-secondary position-absolute" style="top: 8px; right: 8px;">
                                                    <i class="bi bi-pencil-fill"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-floating position-relative">
                                                <input type="text" class="form-control w-100" id="petWeight" placeholder="Pet Weight" value="{{ $pet->details->weight ?? 'Unspecified' }}" readonly>
                                                <label for="petWeight" style="color: #15a4ff !important;"><i class="bi bi-align-center"></i> Weight</label>
                                                <button type="button" class="btn btn-secondary position-absolute" style="top: 8px; right: 8px;">
                                                    <i class="bi bi-pencil-fill"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-floating position-relative">
                                                <input type="text" class="form-control w-100" id="petHeight" placeholder="Pet Height" value="{{ $pet->details->height ?? 'Unspecified' }}" readonly>
                                                <label for="petHeight" style="color: #15a4ff !important;"><i class="bi bi-align-middle"></i> Height</label>
                                                <button type="button" class="btn btn-secondary position-absolute" style="top: 8px; right: 8px;">
                                                    <i class="bi bi-pencil-fill"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 mt-2">
                                    <div class="row g-1">
                                        <div class="col-sm-6">
                                            <div class="form-floating position-relative">
                                                <input type="text" class="form-control w-100" id="petSire" placeholder="Sire" value="{{ empty($pet->details->male_parent) ? 'Unspecified' : $pet->details->male_parent }}" readonly>
                                                <label for="petSire" style="color: #15a4ff !important;"><i class="bi bi-brightness-high-fill"></i> Sire</label>
                                                <button type="button" class="btn btn-secondary position-absolute" style="top: 8px; right: 8px;">
                                                    <i class="bi bi-pencil-fill"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating position-relative">
                                                <input type="text" class="form-control w-100" id="petDam" placeholder="Dam" value="{{ empty($pet->details->female_parent) ? 'Unspecified' : $pet->details->female_parent }}" readonly>
                                                <label for="petDam" style="color: #15a4ff !important;"><i class="bi bi-brightness-low-fill"></i> Dam</label>
                                                <button type="button" class="btn btn-secondary position-absolute" style="top: 8px; right: 8px;">
                                                    <i class="bi bi-pencil-fill"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 mt-2">
                                    <div class="pet-banner pet-banner-gallery position-relative w-100">
                                        <img src="{{ asset('images/carl_burton_23_blue.gif') }}" alt="Documents" class="pet-banner-image" style="opacity: 0.5; object-position: 50% 45%;">
                                        <img src="{{ asset('images/mayor_icons_pdf.png') }}" alt="Documents" class="position-absolute start-50 top-50 translate-middle" style="width: 128px;">
                                        <div class="pet-banner-title text-center">
                                            <h6 style="color: #15a4ff; font-size: 24px;"><span class="outlined-text" style="color: white;"><i class="bi bi-folder"></i> Documents <span style="opacity: 0.33;">//</span> 335,230 files</span></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="profile-group-container" style="display: none;">
                    <div class="row p-3">
                        <div class="col-sm-12">
                            <div class="pet-breed-container btn btn-secondary" data-link="https://www.tiktok.com/@DocAbelManaloOfficial/">
                                <div class="pet-breed-background"></div>
                                <div class="pet-breed-icon" style="top: -19px; left: 10px;">
                                    <img src="{{ asset('images/mayor_icons_badge.png') }}" alt="Age Icon" width="64" height="64">
                                </div>
                                <h6 class="pet-breed-title">{{ empty($pet->details->animal_facility) ? 'No Animal Facility' : $pet->details->animal_facility }}</h6>
                                <span class="pet-breed-tooltip">
                                    {{ empty($pet->extra->animal_facility_location) ? $pet->pet_name . ' is not part of any animal facility' : $pet->extra->animal_facility_location }}
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-12 mt-3">
                            <div class="row g-1">
                                <div class="col-sm-8">
                                    <div class="form-floating position-relative">
                                        <input type="text" class="form-control w-100" id="petOwner" placeholder="Pet Owner" value="{{ empty($pet->details->owner) ? 'Unspecified' : $pet->details->owner }}" readonly>
                                        <label for="petOwner" style="color: #ffc400 !important;"><i class="bi bi-flower3"></i> Owner</label>
                                        <button type="button" class="btn btn-secondary position-absolute" style="top: 8px; right: 8px;">
                                            <i class="bi bi-pencil-fill"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-1">
                                    <button type="button" class="btn btn-secondary w-100 h-100"><i class="bi bi-facebook"></i></button>
                                </div>
                                <div class="col-sm-1">
                                    <button type="button" class="btn btn-secondary w-100 h-100"><i class="bi bi-twitter-x"></i></button>
                                </div>
                                <div class="col-sm-1">
                                    <button type="button" class="btn btn-secondary w-100 h-100"><i class="bi bi-globe2"></i></button>
                                </div>
                                <div class="col-sm-1">
                                    <button type="button" class="btn btn-secondary w-100 h-100"><i class="bi bi-person-circle"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 mt-2">
                            <div class="form-floating position-relative">
                                <input type="text" class="form-control w-100" id="petCoOwner" placeholder="Pet Co-Owner" value="{{ empty($pet->details->co_owner) ? 'None' : $pet->details->co_owner }}" readonly>
                                <label for="petCoOwner" style="color: #ffc400 !important;"><i class="bi bi-flower3"></i> Co-Owners (0)</label>
                                <button type="button" class="btn btn-secondary position-absolute" style="top: 8px; right: 8px;">
                                    <i class="bi bi-pencil-fill"></i>
                                </button>
                            </div>
                        </div>
                        <div class="col-sm-12 mt-2">
                            <div class="pet-banner pet-banner-gallery w-100">
                                <img src="{{ asset('images/steph.jpg') }}" alt="Certificates" class="pet-banner-image" style="object-position: 50% 18%;">
                                <div class="pet-banner-title text-center">
                                    <h6 style="color: #ffc400; font-size: 24px;"><span class="outlined-text" style="color: white;"><i class="bi bi-card-heading"></i> Certificates <span style="opacity: 0.33;">//</span> 8,114 records</span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="profile-group-container" style="display: none;">
                    <div class="row p-3">
                        <div class="col-sm-12">
                            <div class="pet-breed-container btn btn-secondary" data-link="https://www.tiktok.com/@DocAbelManaloOfficial/">
                                <div class="pet-breed-background"></div>
                                <div class="pet-breed-icon" style="top: -19px; left: 10px;">
                                    <img src="{{ asset('images/mayor_icons_globe2.png') }}" alt="Age Icon" width="64" height="64">
                                </div>
                                <h6 class="pet-breed-title">{{ empty($pet->extra->_country) ? 'Unspecified' : $pet->extra->pet_location_country }}</h6>
                                <span class="pet-breed-tooltip">
                                    {{ empty($pet->details->pet_location) ? 'Unspecified address' : $pet->details->pet_location }}
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-12 mt-3">
                            <div class="pet-banner pet-banner-gallery w-100 map-ripple" style="height: 360px;">
                                <img src="{{ asset('images/location_philippines.png') }}" alt="Certificates" class="pet-banner-image" style="object-fit: contain;">
                            </div>
                        </div>
                        <div class="col-sm-12 mt-2">
                            <div class="form-floating position-relative">
                                <input type="text" class="form-control w-100" id="petMicrochip" placeholder="Pet Microchip" value="{{ empty($pet->details->microchip) ? 'None' : $pet->details->microchip }}" readonly>
                                <label for="petMicrochip" style="color: #88bdf6 !important;"><i class="bi bi-check2-circle"></i> Microchip ID</label>
                                <button type="button" class="btn btn-secondary position-absolute" style="top: 8px; right: 8px;">
                                    <i class="bi bi-pencil-fill"></i>
                                </button>
                            </div>
                        </div>
                        <div class="col-sm-12 mt-2">
                            <button type="button" class="btn btn-secondary w-100 h-100" style="font-size: 14px; padding: 10px;">
                                <i class="bi bi-caret-right-fill"></i> View Medical Records
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            @php
                $images = $pet->files->where('file_type', 'image')->take(15)->values();
            @endphp

            <!-- <div class="mt-3 d-grid gap-1" style="grid-template-columns: repeat(5, 1fr);">
                @foreach($images as $image)
                    <div>
                        <img src="{{ asset('storage/' . $image->file_path) }}" style="width: 100%; height: auto;" alt="">
                    </div>
                @endforeach
            </div> -->

            @php
                $total = min(7, 15);
                $perRow = 5;
                $fullRows = intdiv($total, $perRow);
                $remainder = $total % $perRow;
            @endphp

            <div class="mt-3">
                @for ($i = 0; $i < $fullRows * $perRow; $i++)
                    @if ($i % $perRow === 0)
                        <div class="pet-profile-gallery-grid">
                    @endif

                    <div>
                        <img src="{{ asset('images/iagd-container-cat-raw.png') }}" style="width: 100%; height: 360px; object-fit: cover;" alt="">
                    </div>

                    @if ($i % $perRow === $perRow - 1)
                        </div>
                    @endif
                @endfor

                @if ($remainder > 0)
                    <div class="pet-profile-gallery-grid-last" style="grid-template-columns: repeat({{ $remainder }}, 1fr);">
                        @for ($i = 0; $i < $remainder; $i++)
                            <div>
                                <img src="{{ asset('images/iagd-container-cat-raw.png') }}" style="width: 100%; height: 360px; object-fit: cover;" alt="">
                            </div>
                        @endfor
                    </div>
                @endif
            </div>

            <div class="mt-3" style="width: 100%; overflow-x: auto;">
                <pre style="color: #fff; white-space: pre-wrap; word-wrap: break-word;">
                    {{ $pet }}
                </pre>
            </div>
        </div>
    </main>
@include('offcanvas.pets.profile.qr_code')
</body>
<!-- <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script src="https://unpkg.com/leaflet-rotatedmarker/leaflet.rotatedMarker.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js"></script>
<script src="{{ asset('js/luxon.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/qr-code-styling@1.5.0/lib/qr-code-styling.js"></script>
<script>
$(document).ready(function() {
    $('.card-hoverable').on('mouseover', function() {
        $(this).find('.card-title').addClass('text-gradient-primary');
    });
    $('.card-hoverable').on('mouseout', function() {
        $(this).find('.card-title').removeClass('text-gradient-primary');
    });

    // $('.h1wrap').each(function(){
    //     $(this).find("h1").html( $(this).find("h1").html().replace(/./g, "<span>$&</span>").replace(/\s/g, "&nbsp;"));
    // });;

    $('.profile-group-container').show();
    TweenMax.staggerFrom(".profile-group-container", 0.4, {opacity:0.0, transform: "translateY(20vh) scale(0)", delay: 0.333, transformOrigin:'50% 50%', ease:Circ.easeOut, force3D: true},0.06);

    // setTimeout(function() { 
    //     animateScramble('.pet-profile-name');
    // }, 300);

    // var map = L.map('map', {
    //     zoomControl: false,
    //     attributionControl: false
    // }).setView([37.422, -122.084], 16);

    // L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png', {
    //     maxZoom: 19,
    //     subdomains: 'abcd'
    // }).addTo(map);

    $(document).on('click', '.pet-interact', function () {
        const $btn = $(this);
        const isActive = $btn.attr('data-active') === 'true';
        let count = parseInt($btn.find('span.pet-interact-count').text(), 10) || 0;

        if (isActive) {
            // Switch to INACTIVE state
            $btn.attr('data-active', 'false')
                .removeClass('btn-primary').addClass('btn-secondary')
                .find('img').attr('src', $btn.attr('data-icon-active'))
                .css({ width: '28px', height: '28px', left: '7px', top: '1px' });

            $btn.find('span.pet-interact-count').removeClass('text-gradient-golden');

            count -= 1;
            $btn.find('span.pet-interact-count').text(count);
        } else {
            // Switch to ACTIVE state
            $btn.attr('data-active', 'true')
                .removeClass('btn-secondary').addClass('btn-primary')
                .find('img').attr('src', $btn.attr('data-icon-default'))
                .css({ width: '35px', height: '35px', left: '-1px', top: '-2px' });

            $btn.find('span.pet-interact-count').addClass('text-gradient-golden');

            count += 1
            $btn.find('span.pet-interact-count').text(count);

            $btn.floatingText({
                text: '+1',
                color: '#fff',
                backgroundColor: 'transparent',
                fontSize: '14px',
                duration: 1500,
                floatDistance: 40
            });
        }
    });

    $(".pet-qr-theme-btn").on("click", function() {
        const selectedEC = 'M';
        const selectedTheme = $(this).data("theme");

        $('.pet-qr-theme-btn').removeClass('radio-btn-active');
        $(this).addClass('radio-btn-active');

        generateQRCode(selectedEC, selectedTheme);
    });

    generateQRCode();

    // Preload
    const sources = [
        '{{ asset("images/mayor_icons_like.png") }}',
        '{{ asset("images/mayor_icons_like_white.png") }}',
        '{{ asset("images/mayor_icons_heart.png") }}',
        '{{ asset("images/mayor_icons_heart_white.png") }}',
        '{{ asset("images/mayor_icons_fire_white.png") }}'
    ];

    for (let src of sources) {
        const img = new Image();
        img.src = src;
    }
});

class TextScramble {
    constructor(el) {
        this.el = el
        this.chars = '!<>-_\\/[]{}—=+*^?#________'
        this.update = this.update.bind(this)
    }
    setText(newText) {
        const oldText = this.el.innerText
        const length = Math.max(oldText.length, newText.length)
        const promise = new Promise((resolve) => this.resolve = resolve)
        this.queue = []
        for (let i = 0; i < length; i++) {
            const from = oldText[i] || ''
            const to = newText[i] || ''
            const start = Math.floor(Math.random() * 40)
            const end = start + Math.floor(Math.random() * 40)
            this.queue.push({ from, to, start, end })
        }
        cancelAnimationFrame(this.frameRequest)
        this.frame = 0
        this.update()
        return promise
    }
    update() {
        let output = ''
        let complete = 0
        for (let i = 0, n = this.queue.length; i < n; i++) {
            let { from, to, start, end, char } = this.queue[i]
            if (this.frame >= end) {
                complete++
                output += to
            } else if (this.frame >= start) {
                if (!char || Math.random() < 0.28) {
                    char = this.randomChar()
                    this.queue[i].char = char
                }
                output += `<span class="dud">${char}</span>`
            } else {
                output += from
            }
        }
        this.el.innerHTML = output
        if (complete === this.queue.length) {
            this.resolve()
        } else {
            this.frameRequest = requestAnimationFrame(this.update)
            this.frame++
        }
    }
    randomChar() {
        return this.chars[Math.floor(Math.random() * this.chars.length)]
    }
}

function animateScramble(selector) {
    const el = document.querySelector(selector)
    if (!el) return
    const finalText = el.textContent
    const fx = new TextScramble(el)
    fx.setText(finalText)
}

function circularText(txt, radius, classIndex) {
    txt = txt.split(""),
    classIndex = document.getElementsByClassName("circle-text")[classIndex];
    
    var deg = 360 / txt.length,
    origin = 0;
    
    txt.forEach((ea) => {
        ea = `<p style='height:${radius}px;position:absolute;transform:rotate(${origin}deg);transform-origin:0 100%'>${ea}</p>`;
        classIndex.innerHTML += ea;
        origin += deg;
    });
}

function generateQRCode(ec = "M", theme = "light") {
    $("#qrcode").html('<div id="qr-loading" style="display: flex; justify-content: center; align-items: center; height: 256px;"><i class="spinner-border spinner-border-sm" style="width: 64px; height: 64px;"></i></div>');

    setTimeout(function() {
        $("#qrcode").empty();

        let flatDotsColor = "#000000";
        let flatBackgroundColor = '#ffffff';
        let gradientDotsColor = null;
        let logo = "{{ asset('images/iagd_logo_large.png') }}";

        if (theme === "dark") {
            flatDotsColor = "#ffffff";
            flatBackgroundColor = "#000000";
            logo = "{{ asset('images/iagd_silver_logo.png') }}";
        } else if (theme === "purple") {
            flatDotsColor = "#ffffff";
            flatBackgroundColor = "#312c57";
            logo = "{{ asset('images/iagd_silver_logo.png') }}";
        } else if (theme === "golden") {
            flatBackgroundColor = "#ffffff";
            gradientDotsColor = {
                type: "linear",
                rotation: 0,
                colorStops: [
                    { offset: 0, color: "#FFD700" },
                    { offset: 1, color: "#FFA500" }
                ]
            };
            logo = "{{ asset('images/iagd_logo_large.png') }}";
        }

        const qrCode = new QRCodeStyling({
            width: 256,
            height: 256,
            data: "{{ url()->current() }}?t=q",
            qrOptions: {
                errorCorrectionLevel: ec
            },
            dotsOptions: {
                type: "rounded",
                color: gradientDotsColor ? undefined : flatDotsColor,
                gradient: gradientDotsColor || undefined
            },
            backgroundOptions: {
                color: flatBackgroundColor
            },
            image: logo,
            imageOptions: {
                crossOrigin: "anonymous",
                margin: 4,
                imageSize: 0.7
            },
            cornersSquareOptions: {
                type: "extra-rounded"
            },
            cornersDotOptions: {
                type: "dot"
            }
        });

        qrCode.append(document.getElementById("qrcode"));
        animateShine($('#qrcode'), 300);
    }, 10);
}
</script>
</html>
