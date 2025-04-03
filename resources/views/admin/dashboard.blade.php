<!doctype html>
<html lang="en">

<head>


    {{-- Required Meta tags --}}
    @include('admin.sections.metatags')

    {{-- Stylesheets --}}
    @include('admin.sections.stylesheets')

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
                            <div class="col-12 col-md-6 col-xxl-3 mb-4">
                                <div class="bs-card d-flex flex-row justify-content-between align-items-center p-3">
                                    <div class="svg-icon-xxl svg-stroke-pink">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
                                        </svg>
                                    </div>
                                    <div class="d-flex flex-column align-items-end justify-content-center bs-card-desc">
                                        <div>
                                            <h4>
                                                700
                                            </h4>
                                        </div>
                                        <div>
                                            REGISTRATIONS
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-12 col-md-6 col-xxl-3 mb-4">
                                <div class="bs-card d-flex flex-row justify-content-between align-items-center p-3">
                                    <div class="svg-icon-xxl svg-stroke-pink">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                        </svg>

                                    </div>
                                    <div class="d-flex flex-column align-items-end justify-content-center bs-card-desc">
                                        <div>
                                            <h4>
                                                500
                                            </h4>
                                        </div>
                                        <div>
                                            MEMBERS
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-12 col-md-6 col-xxl-3 mb-4">
                                <div class="bs-card d-flex flex-row justify-content-between align-items-center p-3">
                                    <div class="svg-icon-xxl svg-stroke-pink">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                                        </svg>

                                    </div>
                                    <div class="d-flex flex-column align-items-end justify-content-center bs-card-desc">
                                        <div>
                                            <h4>
                                                100
                                            </h4>
                                        </div>
                                        <div>
                                            FACILITIES
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-12 col-md-6 col-xxl-3 mb-4">
                                <div class="bs-card d-flex flex-row justify-content-between align-items-center p-3">
                                    <div class="svg-icon-xxl svg-stroke-pink">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                                          </svg>

                                    </div>
                                    <div class="d-flex flex-column align-items-end justify-content-center bs-card-desc">
                                        <div>
                                            <h4>
                                                4
                                            </h4>
                                        </div>
                                        <div>
                                            LOGS
                                        </div>
                                    </div>
                                </div>

                            </div>



                        </div>

                        <div class="row pt-3">
                            <div class="col-12 col-lg-6 mb-3">
                                <div class="bs-card col-12 d-flex flex-row justify-content-center align-items-center h-100 p-3 p-lg-4">
                                    <div class="w-100 h-100">
                                        <canvas id="pieChart"></canvas>
                                    </div>
                                </div>

                            </div>

                            <div class="col-12 col-lg-6 mb-3">
                                <div class="bs-card col-12 d-flex flex-row justify-content-center align-items-center h-100 p-3 p-lg-4">
                                    <div class="w-100 h-100">
                                        <canvas id="barChart" style="min-height: 320px;"></canvas>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.umd.js"></script>
    <script src="{{ asset('admin-resources/js/dashboard.js') }}"></script>
</body>

</html>
