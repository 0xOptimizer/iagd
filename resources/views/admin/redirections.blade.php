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
                                        <li class="breadcrumb-item active">
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
                                                    Redirections
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
                                    <div class="d-flex justify-content-end mb-3">
                                        <a href="#" type="button" class="btn btn-primary btn d-flex flex-row justify-content-center align-items-center" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasFormCreateRedirections"
                                        aria-controls="Id1">
                                            <div class="svg-icon-sm me-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                                  </svg>
                                            </div>

                                            <span>Create</span>
                                        </a>

                                    </div>

                                    <div class="table-responsive">
                                        <table id="redirectionTable" class="table table-condensed table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Request From</th>
                                                    <th>Redirect to</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('admin.pages.redirections.offcanvas-create-redirections')

    </div>

    {{-- Laravel PHP to javascript variables footer --}}
    @include('jsVars')

    {{-- Scripts --}}
    @include('admin.sections.jsscripts')

    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.bootstrap5.js"></script>

    <script type="module" src="{{ asset("admin-resources/js/redirection.js") }}"></script>
</body>

</html>
