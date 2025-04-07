<!DOCTYPE html>

<html>
<head>
    @include('components.header')
</head>
<style>


</style>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark header">
        <div class="container-fluid">
            <!-- Left Group - Logo -->
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/IAGD_Logo_Silver.png') }}" alt="Logo" style="transform: scale(2.25);">
            </a>

            <div class="d-flex">
                <button type="button" class="tewi-btn-icon me-2"><i class="bi bi-grid-3x3-gap-fill" style="vertical-align: 0px; font-size: 32px;"></i></button>
            </div>

            <div class="d-flex">
                IAGD
            </div>

            <!-- Middle Group - Search Bar -->
            <div class="flex-grow-1 mx-3">
                <form class="d-flex">
                    <div class="form-floating w-100">
                        <input class="form-control me-2" type="search" placeholder="Search a pet registry, facility, or vaccination record" aria-label="Search">
                        <label for="floatingInput">Search</label>
                    </div>
                </form>
            </div>

            <!-- Right Group - Buttons -->
            <div class="d-flex gap-2">
                <button type="button" class="btn btn-primary" style="width: 235px; height: 38px;"><i class="bi bi-feather"></i> Register Pet</button>
                <button type="button" class="btn btn-secondary" style="width: 150px; height: 38px;"><i class="bi bi-dice-5"></i> Random</button>
            </div>
        </div>
    </nav>
    <main class="p-3">
        <div class="iagd-containers">
            <div class="row g-3">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card card-hoverable h-100">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <!-- <img src="{{ asset('images/iagd-container-dog-raw.png') }}" class="img-fluid w-100 h-100 object-fit-cover rounded-start" alt="..."> -->
                                <img src="{{ asset('images/mayor_icons_dog.png') }}" class="img-fluid rounded-start mt-3 ms-1" alt="..." width="128" height="128">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <b class="card-title">Dogs</b>
                                    <p class="card-text">{{ number_format($pet_counts['Dog'] ?? 0) }}&nbsp;registered</p>
                                    <p class="card-text"><small class="text-muted">Newest {{ \Carbon\Carbon::parse($latest_pets['Dog'] ?? now())->diffForHumans() }}</small></p>
                                </div>
                                <div class="card-icon">
                                    <i class="bi bi-caret-right-fill"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card card-hoverable h-100">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <!-- <img src="{{ asset('images/iagd-container-cat-raw-2.jfif') }}" class="img-fluid w-100 h-100 object-fit-cover rounded-start" alt="..."> -->
                                <img src="{{ asset('images/mayor_icons_cat.png') }}" class="img-fluid rounded-start mt-3 ms-1" alt="..." width="128" height="128">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <b class="card-title">Cats</b>
                                    <p class="card-text">{{ number_format($pet_counts['Cat'] ?? 0) }}&nbsp;registered</p>
                                    <p class="card-text"><small class="text-muted">Newest {{ \Carbon\Carbon::parse($latest_pets['Cat'] ?? now())->diffForHumans() }}</small></p>
                                </div>
                                <div class="card-icon">
                                    <i class="bi bi-caret-right-fill"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card card-hoverable h-100">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <!-- <img src="{{ asset('images/iagd-container-bird-raw.png') }}" class="img-fluid w-100 h-100 object-fit-cover rounded-start" alt="..."> -->
                                <img src="{{ asset('images/mayor_icons_bird.png') }}" class="img-fluid rounded-start mt-3 ms-1" alt="..." width="128" height="128">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <b class="card-title">Birds</b>
                                    <p class="card-text">{{ number_format($pet_counts['Bird'] ?? 0) }}&nbsp;registered</p>
                                    <p class="card-text"><small class="text-muted">Newest {{ \Carbon\Carbon::parse($latest_pets['Bird'] ?? now())->diffForHumans() }}</small></p>
                                </div>
                                <div class="card-icon">
                                    <i class="bi bi-caret-right-fill"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card card-hoverable h-100">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <!-- <img src="{{ asset('images/iagd-container-rabbit-raw.png') }}" class="img-fluid w-100 h-100 object-fit-cover rounded-start" alt="..."> -->
                                <img src="{{ asset('images/mayor_icons_rabbit.png') }}" class="img-fluid rounded-start mt-3 ms-1" alt="..." width="128" height="128">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <b class="card-title">Rabbits</b>
                                    <p class="card-text">{{ number_format($pet_counts['Rabbit'] ?? 0) }}&nbsp;registered</p>
                                    <p class="card-text"><small class="text-muted">Newest {{ \Carbon\Carbon::parse($latest_pets['Rabbit'] ?? now())->diffForHumans() }}</small></p>
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
                    <div class="card card-hoverable h-100">
                        <img src="{{ asset('images/iagd-container-animal_facility-raw.jpeg') }}" class="img-fluid w-100 object-fit-cover rounded-start" alt="..." style="max-height: 256px;">
                        <div class="card-body">
                            <b class="card-title">Animal Facilities</b>
                            <p class="card-text">534&nbsp;registered</p>
                            <p class="card-text"><small class="text-muted">Newest {{ \Carbon\Carbon::parse($latest_pets['Dog'] ?? now())->diffForHumans() }}</small></p>
                        </div>
                        <div class="card-icon" style="top: 250px;">
                            <i class="bi bi-caret-right-fill"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="card card-hoverable h-100">
                        <img src="{{ asset('images/iagd-container-cat-raw.png') }}" class="img-fluid w-100 object-fit-cover rounded-start" alt="..." style="height: 256px;">
                        <div class="card-body">
                            <b class="card-title">Vet & Medical</b>
                            <p class="card-text">534&nbsp;records</p>
                            <p class="card-text"><small class="text-muted">Newest {{ \Carbon\Carbon::parse($latest_pets['Dog'] ?? now())->diffForHumans() }}</small></p>
                        </div>
                        <div class="card-icon" style="top: 250px;">
                            <i class="bi bi-caret-right-fill"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="card card-hoverable h-100">
                        <img src="{{ asset('images/iagd-container-other_animal-raw.png') }}" class="img-fluid w-100 object-fit-cover rounded-start" alt="..." style="height: 256px;">
                        <div class="card-body">
                            <b class="card-title">Other Animals</b>
                            <p class="card-text">534&nbsp;registered</p>
                            <p class="card-text"><small class="text-muted">Newest {{ \Carbon\Carbon::parse($latest_pets['Dog'] ?? now())->diffForHumans() }}</small></p>
                        </div>
                        <div class="card-icon" style="top: 250px;">
                            <i class="bi bi-caret-right-fill"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
<script>
$(document).ready(function() {
    $('.card-hoverable').on('mouseover', function() {
        $(this).find('.card-title').addClass('text-gradient-primary');
    });
    $('.card-hoverable').on('mouseout', function() {
        $(this).find('.card-title').removeClass('text-gradient-primary');
    });
});
</script>
</html>
