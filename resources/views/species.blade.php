<!DOCTYPE html>

<html>
<head>
    @include('components.header')
</head>
<style>


</style>
<body>
    @include('components.nav')
    <main class="p-3" style="position: relative;">
        <!-- <div class="row" style="position: absolute; top: 0; left: 0;">
            <div class="col-12">
                <button type="button" class="btn btn-outline-primary">What is IAGD?</button>
            </div>
        </div> -->
        <div class="row text-center mb-3 align-items-center">
            <div class="d-flex flex-row align-items-center justify-content-center">
                <img src="{{ $species_icon }}" class="img-fluid rounded-start me-3" alt="..." width="96" height="96">
                <h1 class="text-gradient-primary mb-0">
                    {{ $species_name }}
                </h1>
            </div>
        </div>
        <div class="loading-group row text-center mb-3">
            <div class="col-12">
                <div class="DNA_cont">
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
        <div class="species-filter-starts_with-btn-container loading-group" style="display: flex; gap: 4px; margin-top: 70px; position: absolute; left: 50%; transform: translateX(-50%); flex-wrap: nowrap; overflow-x: auto;">
        </div>
        <div class="loading-group row">
            <div class="row g-3">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="skeleton" style="width: 100%; height: 414px; border-radius: 8px; display: none;"></div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="skeleton" style="width: 100%; height: 414px; border-radius: 8px; display: none;"></div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="skeleton" style="width: 100%; height: 414px; border-radius: 8px; display: none;"></div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="skeleton" style="width: 100%; height: 414px; border-radius: 8px; display: none;"></div>
                </div>
            </div>
            <div class="row mt-1 g-3">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="skeleton" style="width: 100%; height: 414px; border-radius: 8px; display: none;"></div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="skeleton" style="width: 100%; height: 414px; border-radius: 8px; display: none;"></div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="skeleton" style="width: 100%; height: 414px; border-radius: 8px; display: none;"></div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="skeleton" style="width: 100%; height: 414px; border-radius: 8px; display: none;"></div>
                </div>
            </div>
        </div>
        <div class="after-loading row text-center" style="display: none;">
            <div class="col-12" style="position: relative;">
                <div class="DNA_cont" style="position: absolute; left: 50%; transform: translateX(-50%) scale(0.4); top: 12px; opacity: 0.08; width: 100%;">
                    <div class="nucleobase"></div>
                    <div class="nucleobase"></div>
                    <div class="nucleobase"></div>
                    <div class="nucleobase"></div>
                    <div class="nucleobase"></div>
                    <div class="nucleobase"></div>
                    <div class="nucleobase"></div>
                    <div class="nucleobase"></div>
                    <div class="nucleobase"></div>
                    <div class="nucleobase"></div>
                </div>
                <div class="form-floating" style="position: absolute; left: 50%; transform: translateX(-50%); width: 250px;">
                    <input class="form-control me-2" type="search" placeholder="Search within these records" aria-label="Search">
                    <label for="floatingInput"><i class="bi bi-search me-2"></i> Search within <span class="species-list-records-count">...</span> records</label>
                </div>
            </div>
        </div>
        <div class="species-filter-starts_with-btn-container after-loading" style="display: flex; gap: 4px; margin-top: 70px; position: absolute; left: 50%; transform: translateX(-50%); flex-wrap: nowrap; overflow-x: auto;">
        </div>
        <div class="species-list-wrapper row">
            <div class="species-list-container row g-3">

            </div>
            <div class="species-list-loading-group col-12 mt-3" style="display: none;">
                <div class="DNA_cont" style="width: 100%;">
                    <div class="nucleobase"></div>
                    <div class="nucleobase"></div>
                    <div class="nucleobase"></div>
                    <div class="nucleobase"></div>
                    <div class="nucleobase"></div>
                    <div class="nucleobase"></div>
                    <div class="nucleobase"></div>
                    <div class="nucleobase"></div>
                    <div class="nucleobase"></div>
                    <div class="nucleobase"></div>
                </div>
            </div>
        </div>
    </main>
</body>
<script src="{{ asset('js/TweenMax.min.js') }}"></script>
<script src="{{ asset('js/luxon.min.js') }}"></script>
<script>
var isFetching = false; // Failsafe to prevent multiple triggers
var isFirstTime = true;
var hasReachedEnd = false;

function fetchSpecies(page = 1, startsWith = 'a', species = 11) {
    if (hasReachedEnd) {
        return;
    }

    $('.species-list-loading-group').show();

    $.ajax({
        url: '/api/v1/species/filter',
        method: 'GET',
        data: {
            page: page,
            starts_with: startsWith,
            species: species
        }
    }).done(function(response) {
        // $('.species-list-container').empty();

        if (!response.data || response.data.length === 0) {
            if (isFirstTime) {
                $('.species-list-container').html('<p>No pets found.</p>');
            } else {
                if (!hasReachedEnd) {
                    hasReachedEnd = true;
                    $('.species-list-container').append('<p>No more pets found.</p>');
                }
            }
            return;
        }

        if (isFirstTime) {
            const registerCard = `
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="card card-hoverable h-100" style="position: relative;">
                        <div class="card-body d-flex flex-column align-items-center justify-content-center" style="height: 414px; margin-top: 75px;">
                            <div class="d-flex justify-content-center w-100 text-muted">
                                <i class="bi bi-plus-circle" style="font-size: 64px; margin-top: -85px; margin-left: -44px;"></i>
                            </div>
                            <h5 class="card-title text-gradient-primary mt-3">Register Your Pet</h5>
                            <p class="card-text">Add your pet to the IAGD database.</p>
                            <a href="{{ route('register') }}" class="btn btn-primary mt-2">Register Now</a>
                        </div>
                    </div>
                </div>`;
            $('.species-list-container').append(registerCard);
        }

        response.data.forEach(pet => {
            const image = pet.primary_image || '/images/no_img.png';
            const name = pet.pet_name || 'Unnamed Pet';
            const iagdNumber = pet.details?.iagd_number || 'No IAGD Number';
            const inserted = pet.meta?.date_inserted;
            let createdAt = "Unknown";

            if (inserted) {
                const dt = luxon.DateTime.fromFormat(inserted, "yyyy-MM-dd hh:mm:ss a");
                if (dt.isValid) {
                    createdAt = dt.toRelative({ locale: "en" }) || "Unknown";
                } else {
                    const dt24 = luxon.DateTime.fromFormat(inserted, "yyyy-MM-dd HH:mm:ss");
                    if (dt24.isValid) {
                        createdAt = dt24.toRelative({ locale: "en" }) || "Unknown";
                    }
                }
            }


            const card = `
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <a href="{{ url('/pets') }}/${pet.pet_type ? pet.pet_type : ''}/${pet.details?.iagd_number ? pet.details.iagd_number : ''}" class="card card-hoverable h-100" style="${isFirstTime ? 'display: none;' : ''}; position: relative;">
                        <div class="card-background" style="position: absolute; top: 0; left: 0; right: 0; height: 256px; background-color: rgba(0, 0, 0, 0.16); z-index: -1;"></div>
                        <!-- <div class="card-background" style="position: absolute; top: 0; left: 0; right: 0; height: 256px; background-image: url('${image}'); background-size: cover; background-position: center; filter: blur(8px); z-index: -1;"></div> -->
                        <img src="${image}" class="img-fluid w-100 rounded-start" alt="${name}'s Cute Photo" style="height: 256px; object-fit: contain; object-position: top;">
                        <div class="card-body">
                            <b class="card-title">${name}</b>
                            <p class="card-text">${iagdNumber}</p>
                            <p class="card-text"><small class="text-muted">Registered ${createdAt}</small></p>
                        </div>
                        <div class="card-icon" style="top: 250px;">
                            <i class="bi bi-caret-right-fill"></i>
                        </div>
                    </a>
                </div>`;
            $('.species-list-container').append(card);
        });
        $('.species-list-records-count').text(response.total_species_count.toLocaleString());
    }).fail(function(jqXHR) {
        $('.species-list-container').html('<p>Error loading pets. Please try again later.</p>');
        console.error('Fetch failed:', jqXHR.responseText);
    }).always(function() {
        isFetching = false;
        $('.loading-group').hide();
        $('.species-list-loading-group').hide();
        $('.after-loading').show();
        if (isFirstTime) {
            isFirstTime = false;
            afterLoading();
        }
    });
}
function afterLoading() {
    $('.species-list-container .card').show();
    // TweenMax.staggerFrom(".species-filter-starts_with-btn-container.after-loading", 0.5, {opacity:0.0, transform: "translateY(20vh) scale(0)", delay: 0.666, transformOrigin:'50% 50%', ease:Circ.easeOut, force3D: true},0.04)
    $('.species-filter-starts_with-btn-container.after-loading').fadeIn('fast');
    TweenMax.staggerFrom(".after-loading .form-floating", 0.4, {opacity:0.0, transform: "translateY(20vh) scale(0)", delay: 0.333, transformOrigin:'50% 50%', ease:Circ.easeOut, force3D: true},0.04)
    TweenMax.staggerFrom(".species-list-container .card", 0.4, {opacity:0.0, transform: "translateY(20vh) scale(0)", delay: 0.666, transformOrigin:'50% 50%', ease:Circ.easeOut, force3D: true},0.04)
};
$(document).ready(function() {
    var scroll_page_counter = 1;
    var starts_with = new URLSearchParams(window.location.search).get('starts_with') || "a";

    $('.card-hoverable').on('mouseover', function() {
        $(this).find('.card-title').addClass('text-gradient-primary');
    });
    $('.card-hoverable').on('mouseout', function() {
        $(this).find('.card-title').removeClass('text-gradient-primary');
    });

    $('.h1wrap').each(function(){
        $(this).find("h1").html( $(this).find("h1").html().replace(/./g, "<span>$&</span>").replace(/\s/g, "&nbsp;"));
    });

    function introOpen(){  
        $('.loading-group .nucleobase').show();
        $('.skeleton').show();
        TweenMax.staggerFrom(".loading-group .nucleobase", 1.2, {opacity:0.0, transform: "translateY(20vh) scale(0)", delay: 0.333, transformOrigin:'50% 50%', ease:Circ.easeOut, force3D: true},0.06)
        TweenMax.staggerFrom(".skeleton", 0.5, {opacity:0.0, transform: "translateY(20vh) scale(0)", delay: 2.333, transformOrigin:'50% 50%', ease:Circ.easeOut, force3D: true},0.04)
    };
  
    introOpen();

    fetchSpecies(scroll_page_counter, starts_with, '{{ $species_id }}');

    $(window).scroll(function() {
        if (isFirstTime) {
            return;
        }
        if (!isFetching && $(window).scrollTop() + $(window).height() >= $(document).height() - 100) {
            isFetching = true; // Set fetching flag
            scroll_page_counter++;
            fetchSpecies(scroll_page_counter, starts_with, '{{ $species_id }}');
        }
    });

    for (let i = 65; i <= 90; i++) {
        const char = String.fromCharCode(i);
        const button = $('<button>', {
            type: 'button',
            class: 'species-filter-starts_with-btn btn btn-outline-primary',
            'data-starts_with': char.toLowerCase(),
            text: char
        });
        $('.species-filter-starts_with-btn-container.after-loading').append(button);
    }

    $('.species-filter-starts_with-btn').on('click', function() {
        starts_with = $(this).data('starts_with');
        scroll_page_counter = 1;
        isFirstTime = true;
        hasReachedEnd = false;
        $('.species-list-container').empty(); // Clear the container
        fetchSpecies(scroll_page_counter, starts_with, '{{ $species_id }}'); // Fetch new data
    });
});
</script>
</html>
