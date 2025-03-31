<!doctype html>
<html lang="en">

<head>

    @include('admin.sections.metatags')

    @include('admin.sections.stylesheets')
</head>

<body id="login-page">
    <div class="d-flex flex-row justify-content-center align-items-center" style="height: 100vh;">
        <div class="login-container padd-m">
            <div class="col-12">
                <div class="mb-3">
                    <img class="img-fluid" src="{{ asset('admin-resources/img/iagd_logo_large.png') }}" alt="IAGD">
                </div>
            </div>
            <div class="col-12">
                <div class="form-floating mb-3">
                    <input id="email_address" type="email" class="form-control" placeholder="Email address" autocomplete="off"/>
                    <label for="email_address">
                        Email address
                    </label>
                </div>


            </div>

            <div class="col-12">
                <div class="form-floating mb-3">
                    <input id="password" type="password" class="form-control" placeholder="Password" autocomplete="off"/>
                    <label for="password">
                        Password
                    </label>
                </div>

            </div>

            <div class="col-12">
                <div class="mb-3">
                    <button id="btnSubmitCredentials" type="button" class="btn btn-primary w-100">
                        SIGN-IN
                    </button>

                </div>
            </div>

        </div>
    </div>

    @include('jsVars')

    @include('admin.sections.jsscripts')
    <script type="module" src="{{ asset('admin-resources/js/signin.js') }}"></script>
</body>

</html>
