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
        <div class="row text-center mb-3">
            <div class="h1wrap">
                <h1 class="text-gradient-primary">International Animals Genetic Database</h1>
            </div>
        </div>
        <div class="loading-group row text-center mb-3">
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
        <div class="loading-group row">
            <div class="row g-3">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="skeleton" style="width: 100%; height: 158px; border-radius: 8px; display: none;"></div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="skeleton" style="width: 100%; height: 158px; border-radius: 8px; display: none;"></div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="skeleton" style="width: 100%; height: 158px; border-radius: 8px; display: none;"></div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="skeleton" style="width: 100%; height: 158px; border-radius: 8px; display: none;"></div>
                </div>
            </div>
            <div class="row mt-1 g-3">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="skeleton" style="width: 100%; height: 158px; border-radius: 8px; display: none;"></div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="skeleton" style="width: 100%; height: 158px; border-radius: 8px; display: none;"></div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="skeleton" style="width: 100%; height: 158px; border-radius: 8px; display: none;"></div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="skeleton" style="width: 100%; height: 158px; border-radius: 8px; display: none;"></div>
                </div>
            </div>
        </div>
        <div class="iagd-containers row text-center" style="display: none;">
            <div class="col-12" style="position: relative;">
                    <div class="DNA_cont" style="position: absolute; left: 50%; transform: translateX(-50%) scale(0.4); opacity: 0.08; width: 100%;">
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
                <h4 style="color: #fff">{{ number_format($total ?? 0) }} records</h4>
            </div>
        </div>
        <div class="iagd-containers row" style="display: none;">
            <div class="row g-3">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="species-card card card-hoverable h-100 glow-on-hover" data-group="10">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <!-- <img src="{{ asset('images/iagd-container-dog-raw.png') }}" class="img-fluid w-100 h-100 object-fit-cover rounded-start" alt="..."> -->
                                <img src="{{ asset('images/mayor_icons_dog.png') }}" class="img-fluid rounded-start mt-2 ms-2" alt="..." width="128" height="128">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <b class="card-title">Dogs</b>
                                    <p class="card-text"><span class="iagd-total-count" data-group="10">{{ number_format($pet_counts['10'] ?? 0) }}</span>&nbsp;registered</p>
                                    <p class="card-text"><small class="text-muted">Newest <span class="iagd-newest-registry" data-group="10">{{ \Carbon\Carbon::parse($latest_pets['10'] ?? now())->diffForHumans() }}</span></small></p>
                                </div>
                                <div class="card-icon">
                                    <i class="bi bi-caret-right-fill"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="species-card card card-hoverable h-100 glow-on-hover" data-group="11">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <!-- <img src="{{ asset('images/iagd-container-cat-raw-2.jfif') }}" class="img-fluid w-100 h-100 object-fit-cover rounded-start" alt="..."> -->
                                <img src="{{ asset('images/mayor_icons_cat.png') }}" class="img-fluid rounded-start mt-2 ms-2" alt="..." width="128" height="128">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <b class="card-title">Cats</b>
                                    <p class="card-text"><span class="iagd-total-count" data-group="11">{{ number_format($pet_counts['11'] ?? 0) }}</span>&nbsp;registered</p>
                                    <p class="card-text"><small class="text-muted">Newest <span class="iagd-newest-registry" data-group="11">{{ \Carbon\Carbon::parse($latest_pets['11'] ?? now())->diffForHumans() }}</span></small></p>
                                </div>
                                <div class="card-icon">
                                    <i class="bi bi-caret-right-fill"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="species-card card card-hoverable h-100 glow-on-hover" data-group="12">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <!-- <img src="{{ asset('images/iagd-container-bird-raw.png') }}" class="img-fluid w-100 h-100 object-fit-cover rounded-start" alt="..."> -->
                                <img src="{{ asset('images/mayor_icons_bird.png') }}" class="img-fluid rounded-start mt-2 ms-2" alt="..." width="128" height="128">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <b class="card-title">Birds</b>
                                    <p class="card-text"><span class="iagd-total-count" data-group="12">{{ number_format($pet_counts['12'] ?? 0) }}</span>&nbsp;registered</p>
                                    <p class="card-text"><small class="text-muted">Newest <span class="iagd-newest-registry" data-group="12">{{ \Carbon\Carbon::parse($latest_pets['12'] ?? now())->diffForHumans() }}</span></small></p>
                                </div>
                                <div class="card-icon">
                                    <i class="bi bi-caret-right-fill"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="species-card card card-hoverable h-100 glow-on-hover" data-group="13">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <!-- <img src="{{ asset('images/iagd-container-rabbit-raw.png') }}" class="img-fluid w-100 h-100 object-fit-cover rounded-start" alt="..."> -->
                                <img src="{{ asset('images/mayor_icons_rabbit.png') }}" class="img-fluid rounded-start mt-2 ms-2" alt="..." width="128" height="128">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <b class="card-title">Rabbits</b>
                                    <p class="card-text"><span class="iagd-total-count" data-group="13">{{ number_format($pet_counts['13'] ?? 0) }}</span>&nbsp;registered</p>
                                    <p class="card-text"><small class="text-muted">Newest <span class="iagd-newest-registry" data-group="13">{{ \Carbon\Carbon::parse($latest_pets['13'] ?? now())->diffForHumans() }}</span></small></p>
                                </div>
                                <div class="card-icon">
                                    <i class="bi bi-caret-right-fill"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-1 g-3">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card card-hoverable h-100 glow-on-hover">
                        <img src="{{ asset('images/lounge_banner.png') }}" class="banner-icon img-fluid w-100 object-fit-cover rounded-start" alt="..." style="max-height: 256px; filter: grayscale(25%); opacity: 0.45;">
                        <div class="card-body">
                            <b class="card-title">Lounge — A Social Media for Pets!</b>
                            <p class="card-text">13,000&nbsp;members and growing!</p>
                            <p class="card-text"><small class="text-muted">Join our community in establishing a vibrant space for pet lovers!</small></p>
                        </div>
                        <div class="card-icon" style="top: 250px;">
                            <i class="bi bi-caret-right-fill"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="card card-hoverable h-100 glow-on-hover">
                        <img src="{{ asset('images/animal_facility.png') }}" class="img-fluid w-100 object-fit-cover rounded-start" alt="..." style="height: 256px;">
                        <div class="card-body">
                            <b class="card-title">Animal Facilities</b>
                            <p class="card-text">534&nbsp;records</p>
                            <p class="card-text"><small class="text-muted">Newest {{ \Carbon\Carbon::parse($latest_pets['Dog'] ?? now())->diffForHumans() }}</small></p>
                        </div>
                        <div class="card-icon" style="top: 250px;">
                            <i class="bi bi-caret-right-fill"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="card card-hoverable h-100 glow-on-hover">
                        <img src="{{ asset('images/certificate.png') }}" class="banner-icon img-fluid w-100 object-fit-cover rounded-start" alt="..." style="height: 256px; filter: grayscale(25%); opacity: 0.45;">
                        <div class="card-body">
                            <b class="card-title">Certificates</b>
                            <p class="card-text">534&nbsp;issued</p>
                            <p class="card-text"><small class="text-muted">Give your pet their own recognition!</small></p>
                        </div>
                        <div class="card-icon" style="top: 250px;">
                            <i class="bi bi-caret-right-fill"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-1 g-3">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="species-card card card-hoverable h-100 glow-on-hover" data-group="list">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <!-- <img src="{{ asset('images/iagd-container-dog-raw.png') }}" class="img-fluid w-100 h-100 object-fit-cover rounded-start" alt="..."> -->
                                <img src="{{ asset('images/mayor_icons_globe.png') }}" class="img-fluid rounded-start mt-2 ms-2" alt="..." width="128" height="128">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <b class="card-title">All Species</b>
                                    <p class="card-text"><span class="iagd-total-count" data-group="10">{{ number_format($pet_counts['10'] ?? 0) }}</span>&nbsp;records</p>
                                    <p class="card-text"><small class="text-muted">Newest <span class="iagd-newest-registry" data-group="10">{{ \Carbon\Carbon::parse($latest_pets['10'] ?? now())->diffForHumans() }}</span></small></p>
                                </div>
                                <div class="card-icon">
                                    <i class="bi bi-caret-right-fill"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
<script src="{{ asset('js/TweenMax.min.js') }}"></script>
<script src="{{ asset('js/luxon.min.js') }}"></script>
<script>
$(document).ready(function() {
    $('.card-hoverable').on('mouseover', function() {
        $(this).find('.card-title').addClass('text-gradient-primary');
        $(this).find('img.banner-icon').css('transition', 'transform 0.5s ease-in-out');
        $(this).find('img.banner-icon').css('filter', 'grayscale(0%)');
        $(this).find('img.banner-icon').css('opacity', '1');
    });

    $('.card-hoverable').on('mouseout', function() {
        $(this).find('.card-title').removeClass('text-gradient-primary');
        $(this).find('img.banner-icon').css('transition', 'transform 0.5s ease-in-out');
        $(this).find('img.banner-icon').css('filter', 'grayscale(25%)');
        $(this).find('img.banner-icon').css('opacity', '0.45');
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
                $('.iagd-newest-registry[data-group="' + group + '"]').text(luxon.DateTime.fromISO(date).toRelative());
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
      $('.loading-group .nucleobase').show();
      $('.skeleton').show();
      TweenMax.staggerFrom(".loading-group .nucleobase", 1.2, {opacity:0.0, transform: "translateY(20vh) scale(0)", delay: 0.333, transformOrigin:'50% 50%', ease:Circ.easeOut, force3D: true},0.06)
      TweenMax.staggerFrom(".skeleton", 0.5, {opacity:0.0, transform: "translateY(20vh) scale(0)", delay: 2.333, transformOrigin:'50% 50%', ease:Circ.easeOut, force3D: true},0.04)
    };

    function afterLoading(){  
        $('.iagd-containers .card').show();
        TweenMax.staggerFrom(".iagd-containers .card", 0.4, {opacity:0.0, transform: "translateY(20vh) scale(0)", delay: 0.333, transformOrigin:'50% 50%', ease:Circ.easeOut, force3D: true},0.04)
    };
  
    introOpen();

    $('.species-card').on('click', function() {
        animateShine($(this));
        const group = $(this).data('group');
        window.location.replace(`{{ url('species') }}/${group}`);
    });
});
</script>
</html>
