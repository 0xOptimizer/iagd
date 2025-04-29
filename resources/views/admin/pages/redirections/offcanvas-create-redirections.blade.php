<div class="offcanvas offcanvas-end offcanvas-custom p-3" data-bs-scroll="true" tabindex="-1"
    id="offcanvasFormCreateRedirections">
    <div class="offcanvas-custom-container bg-light p-3">
        <div class="offcanvas-header mb-3">
            <h5 class="offcanvas-title" id="Enable both scrolling & backdrop">
                Create redirection
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="form-floating mb-3">
                            <input id="request_from" type="text" class="form-control form-control-sm" placeholder="" />
                            <label for="request_from">
                                Request from URL
                            </label>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-floating mb-3">
                            <input id="redirect_to" type="text" class="form-control form-control-sm" placeholder="" />
                            <label for="redirect_to">
                                Redirect to URL
                            </label>
                        </div>
                    </div>

                    <div class="col-12">
                        <button id="btnSubmitFormRedirection" type="button"
                            class="btn btn-primary d-flex flex-row justify-content-center align-items-center">
                            <div class="svg-icon-sm me-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                            </div>
                            <span>Save</span>

                        </button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
