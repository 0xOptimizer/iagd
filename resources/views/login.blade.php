<!DOCTYPE html>

<html>
<head>
    @include('components.header')
</head>
<style>


</style>
<body>
    <div class="center-image" style="position: fixed; pointer-events: none; z-index: -1; top: 50%; left: 50%; transform: translate(-50%, -50%); filter: grayscale(100); opacity: 0.04;"></div>
    <main>
        <div class="card" style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);">
            <img class="card-img-top" src="{{ asset('images/hris_logo_compressed.png') }}" style="width: 192px; height: 192px; margin: 0 auto; margin-top: -96px;">
            <div class="card-body" style="width: 325px;">
                <h4 class="font-clemente text-center mb-5">Vault Authorization</h4>
                <div class="row">
                    <div class="col-sm-12">
                        <label class="mb-1" style="font-size: 14px; opacity: 0.85;"><i class="bi bi-person-badge-fill" style="vertical-align: 0;"></i> Email or Username</label>
                        <input id="email_address" type="text" class="form-control" placeholder="hi@example.com">
                    </div>
                    <div class="col-sm-12 mt-3">
                        <label class="mb-1" style="font-size: 14px; opacity: 0.85;"><i class="bi bi-shield-lock-fill" style="vertical-align: 0;"></i> Password</label>
                        <input id="password" type="password" class="form-control">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-sm-12">
                        <button type="button" class="login-btn btn btn-primary w-100"><i class="bi bi-box-arrow-in-right" style="vertical-align: 0;"></i> Log In</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).ready(function() {
    $('.login-btn').on('click', function() {
        const _this = this
        let formData = new FormData();

        $(_this).attr('disabled', true);
        $(_this).html('<i class="spinner-border spinner-border-sm"></i>');

        formData.append('email_address', $('#email_address').val());
        formData.append('password', $('#password').val());

        $.ajax({
            url: 'https://mis.manalok9.com/api/v1/login/validation',
            type: 'post',
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                if (response.status == "success") {
                    setCookie("auth_token", response.token, 60);
                    let messageText = response.message;
                    let messageIcon = response.status;
                    
                    $.post('/auth/store-token', { token: response.token }, function () {
                        sweetAlertStatusMessage(response.message, response.status);
                        setTimeout(function () {
                            window.location.href = window.location.origin + '/profiling/records/all';
                        }, 750);
                    });
                } else {
                    let messageText = response.message;
                    let messageIcon = 'error';
                    sweetAlertStatusMessage(messageText, messageIcon);
                    $(_this).attr('disabled', false);
                    $(_this).html('Login');
                }

            },
            error: function (error) {
                let messageText = 'Test';
                let messageIcon = 'error';
                sweetAlertStatusMessage(messageText, messageIcon);
                setTimeout(function() {
                    $(_this).attr('disabled', false);
                    $(_this).html('Login');
                }, 750);
            }
        });
    });
});
</script>
</html>