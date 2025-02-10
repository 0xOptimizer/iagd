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
            <div class="d-flex">
            <button type="button" class="tewi-btn-icon me-2"><i class="bi bi-grid-3x3-gap-fill" style="vertical-align: 0px; font-size: 32px;"></i></button>
            <button type="button" class="tewi-btn-icon me-2"><i class="bi bi-grid-3x3-gap-fill" style="vertical-align: 0px; font-size: 32px;"></i></button>
            <button type="button" class="tewi-btn-icon"><i class="bi bi-grid-3x3-gap-fill" style="vertical-align: 0px; font-size: 32px;"></i></button>
            </div>
        </div>
    </nav>
    <main class="p-3">
        <div class="iagd-containers">
            <div class="row g-3"> <!-- Added gutter spacing -->
                <div class="col-lg-3 col-md-3 col-sm-3"> <!-- Proper column sizing -->
                    <div class="card h-100"> <!-- Added h-100 for equal height -->
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('images/iagd-container-dog-raw.jpeg') }}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Content goes here...</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3"> <!-- Proper column sizing -->
                    <div class="card h-100"> <!-- Added h-100 for equal height -->
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="..." class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Content goes here...</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3"> <!-- Proper column sizing -->
                    <div class="card h-100"> <!-- Added h-100 for equal height -->
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="..." class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Content goes here...</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3"> <!-- Proper column sizing -->
                    <div class="card h-100"> <!-- Added h-100 for equal height -->
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="..." class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Content goes here...</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
<script>
$(document).ready(function() {

});
</script>
</html>
