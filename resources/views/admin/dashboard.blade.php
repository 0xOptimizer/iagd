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
                <div class="page-contents p-3 w-100">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur quia excepturi repudiandae officia dolorum asperiores voluptatibus numquam eius similique quo, nesciunt repellendus distinctio mollitia molestias nemo ipsam alias! Accusamus, facilis?
                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur quia excepturi repudiandae officia dolorum asperiores voluptatibus numquam eius similique quo, nesciunt repellendus distinctio mollitia molestias nemo ipsam alias! Accusamus, facilis?
                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur quia excepturi repudiandae officia dolorum asperiores voluptatibus numquam eius similique quo, nesciunt repellendus distinctio mollitia molestias nemo ipsam alias! Accusamus, facilis?
                            </div>


                            <div class="col-12 col-md-6 col-lg-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur quia excepturi repudiandae officia dolorum asperiores voluptatibus numquam eius similique quo, nesciunt repellendus distinctio mollitia molestias nemo ipsam alias! Accusamus, facilis?
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

</body>

</html>
