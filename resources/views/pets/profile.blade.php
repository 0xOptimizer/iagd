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
            <div class="image-container text-center">
                @php
                    $file = $pet->files->first();
                @endphp
                @if ($file)
                    <img src="{{ asset('uploads/pets/' . $file->attached_to_uuid . '/' . $file->uuid . '.' . $file->file_extension) }}" class="rounded-circle" alt="" width="192" height="192">
                @else
                    <img src="{{ asset('uploads/pets/default.png') }}" class="rounded-circle" alt="Default Image" width="192" height="192">
                @endif
            </div>
            <div class="mt-3 text-center">
                <h1 class="h1wrap">
                    <span class="text-gradient-primary">{{ $pet->pet_name }}</span>
                </h1>
            </div>
            <div class="pet-tabs-container text-center justify-content-center mt-3">
                <button class="pet-tab btn @if(!request()->has('tab') || request()->get('tab') == 'details') btn-primary @else btn-secondary @endif" style="width: 130px;"><i class="bi bi-info-circle"></i> Details</button>
                <button class="pet-tab btn @if(request()->get('tab') == 'pedigree') btn-primary @else btn-secondary @endif" style="width: 130px;"></i><i class="bi bi-diagram-2"></i> Pedigree</button>
                <button class="pet-tab btn @if(request()->get('tab') == 'gallery') btn-primary @else btn-secondary @endif" style="width: 130px;"><i class="bi bi-images"></i> Gallery</button>
                <button class="pet-tab btn @if(request()->get('tab') == 'documents') btn-primary @else btn-secondary @endif" style="width: 130px;"><i class="bi bi-stack"></i> Documents</button>
                <button class="pet-tab btn @if(request()->get('tab') == 'settings') btn-primary @else btn-secondary @endif"><i class="bi bi-gear"></i></button>
                <button class="pet-tab btn @if(request()->get('tab') == 'export') btn-primary @else btn-secondary @endif"><i class="bi bi-file-earmark-arrow-down"></i></button>
                <!-- <button class="pet-tab btn btn-secondary"><i class="bi bi-flag" style="color: red;"></i></button> -->
            </div>
            <div class="mt-3 d-grid gap-1" style="grid-template-columns: 50% 33.333% 16.667%;">
                <div class="profile-group-container">
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
                                        <img src="{{ asset('images/carl-burton-23.gif') }}" alt="Documents" class="pet-banner-image" style="opacity: 0.5; object-position: 50% 45%;">
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
                <div class="profile-group-container">
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
                <div class="profile-group-container">
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
                            <div class="pet-banner pet-banner-gallery w-100">
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
            <div class="mt-3" style="width: 1000px; overflow-x: auto;">
                <pre style="color: #fff; white-space: pre-wrap; word-wrap: break-word;">
                    {{ $pet }}
                </pre>
            </div>
        </div>
    </main>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js"></script>
<script>
$(document).ready(function() {
    $('.card-hoverable').on('mouseover', function() {
        $(this).find('.card-title').addClass('text-gradient-primary');
    });
    $('.card-hoverable').on('mouseout', function() {
        $(this).find('.card-title').removeClass('text-gradient-primary');
    });

    $.ajax({
        url: '{{ route("api.v1.pets.count") }}',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            // Update the pet counts
            $.each(data.pet_counts, function(group, count) {
                $('.iagd-total-count[data-group="' + group + '"]').text(count.toLocaleString());
            });

            // Update the newest registry dates
            $.each(data.latest_pets, function(group, date) {
                $('.iagd-newest-registry[data-group="' + group + '"]').text(moment(date).fromNow());
            });

            setTimeout(function() {
                $('.loading-group').fadeOut(100, function() {
                    $(this).removeClass('animate__animated animate__fadeOut');
                });
            }, 200);
            setTimeout(function() {
                $('.iagd-containers').fadeIn(100, function() {
                    $(this).removeClass('animate__animated animate__fadeIn');
                });
                afterLoading();
            }, 300);
        },
        error: function(xhr, status, error) {
            console.error('Error fetching pet counts:', error);
        }
    });

    $('.h1wrap').each(function(){
        $(this).find("h1").html( $(this).find("h1").html().replace(/./g, "<span>$&</span>").replace(/\s/g, "&nbsp;"));
    });

    function introOpen(){  
      //Using ex. transform:"translate3d(x,x,x)" instead of (y:__) or (top:__) to maintain vh or em units responsiveness
    //   TweenMax.staggerFrom("h1 > span", 1.2, {opacity:0, transform: "translateY(16vh) scaleY(-0.382)", transformOrigin:'50% 20%', ease:Expo.easeOut, force3D: true},0.035)
      
    //   TweenMax.from("h1", 3.6, {transform: "translateY(16vh)", ease:Expo.easeOut, force3D: true})
      $('.nucleobase').show();
      $('.skeleton').show();
      TweenMax.staggerFrom(".nucleobase", 1.2, {opacity:0.0, transform: "translateY(20vh) scale(0)", delay: 0.333, transformOrigin:'50% 50%', ease:Circ.easeOut, force3D: true},0.06)
      TweenMax.staggerFrom(".skeleton", 0.5, {opacity:0.0, transform: "translateY(20vh) scale(0)", delay: 0.333, transformOrigin:'50% 50%', ease:Circ.easeOut, force3D: true},0.04)
    };

    function afterLoading(){  
        $('.iagd-containers .card').show();
        TweenMax.staggerFrom(".iagd-containers .card", 0.4, {opacity:0.0, transform: "translateY(20vh) scale(0)", delay: 0.333, transformOrigin:'50% 50%', ease:Circ.easeOut, force3D: true},0.04)
    };
  
    introOpen();
});
</script>
</html>
