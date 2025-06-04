<nav class="navbar navbar-expand-lg navbar-dark header">
    <div class="container-fluid">
        <!-- Left Group - Logo -->
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/IAGD_Logo_Silver.png') }}" alt="Logo" style="transform: scale(2.25);">
        </a>

        <div class="d-flex">
            <button type="button" class="offcanvas-nav-apps-btn tewi-btn-icon me-2"><i class="bi bi-grid-3x3-gap-fill" style="vertical-align: 0px; font-size: 32px;"></i></button>
        </div>

        <div class="d-flex">
            IAGD
        </div>

        <!-- Middle Group - Search Bar -->
        <div class="flex-grow-1 mx-3">
            <form class="d-flex">
                <div class="form-floating w-100">
                    <input class="form-control me-2" type="search" placeholder="Search a pet registry, facility, or vaccination record" aria-label="Search">
                    <label for="floatingInput"><i class="bi bi-search me-2"></i> Search</label>
                </div>
            </form>
        </div>
    </div>
    <div>
        <!-- Right Group - Buttons -->
        <div class="d-flex gap-2">
            <a href="{{ route('register') }}" class="btn btn-primary" style="width: 235px; height: 57px; align-content: center;"><i class="bi bi-feather"></i> Register Pet</a>
            <button type="button" class="btn btn-secondary" style="width: 150px; height: 57px; align-content: center;"><i class="bi bi-dice-5"></i> Random</button>
        </div>
    </div>
</nav>
@include('offcanvas.navigation.apps')