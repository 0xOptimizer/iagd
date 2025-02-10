<!DOCTYPE html>

<html>
<head>
    @include('components.header')
</head>
<style>


</style>
<body>
    <div class="row container-groups" data-group="home">
        <div class="col-sm-12 col-md-8 col-lg-4" style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);">
            <h4 class="font-clemente text-center py-2">HRIS Employee Database</h4>
            <div class="navigate-btn tewi-large-btn-container tewi-large-btn-success col-sm-12 mb-2 tewi-container" data-group="submit" style="margin-left: 10px;">
                <div class="tewi-large-btn-icon">
                    <i class="bi bi-plus-circle"></i>
                </div>
                <div class="tewi-large-btn-tooltip">
                    Submit New
                </div> 
            </div>
            <div class="navigate-btn tewi-large-btn-container tewi-large-btn-primary col-sm-12 mb-2 tewi-container" data-group="update" style="margin-left: 10px;">
                <div class="tewi-large-btn-icon">
                    <i class="bi bi-cloud-upload-fill"></i>
                </div>
                <div class="tewi-large-btn-tooltip">
                    Update Existing
                </div>
            </div>
        </div>
    </div>
    <div class="row container-groups" data-group="submit" style="display: none;">
        <div class="col-sm-12 col-md-8 col-lg-6 styled-container" style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);">
            <div class="row page-groups" data-page="1">
                <div class="col-sm-4 mb-4">
                    <label class="font-clemente text-primary mb-1"><i class="bi bi-person-fill" style="vertical-align: 0;"></i> FIRST NAME</label>
                    <input type="text" name="first_name" class="self-input-new-fields form-control w-100">
                </div>
                <div class="col-sm-4 mb-4">
                    <label class="font-clemente text-primary mb-1"><i class="bi bi-record2-fill" style="vertical-align: 0;"></i> MIDDLE NAME</label>
                    <input type="text" name="middle_name" class="self-input-new-fields form-control w-100">
                </div>
                <div class="col-sm-4 mb-4">
                    <label class="font-clemente text-primary mb-1"><i class="bi bi-record2-fill" style="vertical-align: 0;"></i>LAST NAME</label>
                    <input type="text" name="last_name" class="self-input-new-fields form-control w-100">
                </div>
                <div class="col-sm-3 mb-4">
                    <label class="font-clemente text-primary mb-1"><i class="bi bi-record2-fill" style="vertical-align: 0;"></i> NAME EXT.</label>
                    <input type="text" name="name_extension" class="self-input-new-fields form-control w-100">
                </div>

                <div class="col-sm-3 mb-4">
                    <label class="font-clemente text-primary mb-1"><i class="bi bi-balloon-fill" style="vertical-align: 0;"></i> SEX</label>
                    <select name="sex" class="form-control w-100">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
            </div>
            <div class="row page-groups" data-page="2" style="display: none;">
                <div class="col-sm-3 mb-4">
                    <label class="font-clemente text-primary mb-1"><i class="bi bi-align-middle" style="vertical-align: 0;"></i> HEIGHT</label>
                    <input type="text" name="height" class="self-input-new-fields form-control w-100">
                </div>
                <div class="col-sm-3 mb-4">
                    <label class="font-clemente text-primary mb-1"><i class="bi bi-align-center" style="vertical-align: 0;"></i> WEIGHT</label>
                    <input type="text" name="weight" class="self-input-new-fields form-control w-100">
                </div>

                <div class="col-sm-3 mb-4">
                    <label class="font-clemente text-primary mb-1"><i class="bi bi-brightness-alt-high-fill" style="vertical-align: 0;"></i> BIRTH DATE</label>
                    <input type="date" name="birth_date" class="self-input-new-fields form-control w-100">
                </div>
                <div class="col-sm-2 mb-4">
                    <label class="font-clemente text-primary mb-1"><i class="bi bi-record2-fill" style="vertical-align: 0;"></i> AGE</label>
                    <input type="text" name="age" class="self-input-new-fields form-control w-100" disabled>
                </div>
                <div class="col-sm-7 mb-4">
                    <label class="font-clemente text-primary mb-1"><i class="bi bi-geo-fill" style="vertical-align: 0;"></i> BIRTH PLACE</label>
                    <input type="text" name="birth_place" class="self-input-new-fields form-control w-100">
                </div>
            </div>
            <div class="row page-groups" data-page="3" style="display: none;">
                <div class="col-sm-3 mb-4">
                    <label class="font-clemente text-primary mb-1"><i class="bi bi-globe2" style="vertical-align: 0;"></i> CITIZENSHIP</label>
                    <input type="text" name="citizenship" class="self-input-new-fields form-control w-100" value="Filipino">
                </div>
                <div class="col-sm-3 mb-4">
                    <label class="font-clemente text-primary mb-1"><i class="bi bi-arrow-through-heart-fill" style="vertical-align: 0;"></i> CIVIL STATUS</label>
                    <select name="civil_status" class="form-control w-100">
                        <option value="single">Single</option>
                        <option value="married">Married</option>
                        <option value="divorced">Divorced</option>
                        <option value="widowed">Widowed</option>
                    </select>
                </div>
                <div class="col-sm-3 mb-4">
                    <label class="font-clemente text-primary mb-1"><i class="bi bi-person-hearts" style="vertical-align: 0;"></i> NO. OF CHILDREN</label>
                    <input type="text" name="no_of_children" class="self-input-new-fields form-control w-100">
                </div>
                <div class="col-sm-3 mb-4">
                    <label class="font-clemente text-primary mb-1"><i class="bi bi-telephone-fill" style="vertical-align: 0;"></i> CONTACT NUMBER</label>
                    <input type="text" name="contact_number" class="self-input-new-fields form-control w-100">
                </div>
                <div class="col-sm-3 mb-4">
                    <label class="font-clemente text-primary mb-1"><i class="bi bi-at" style="vertical-align: 0;"></i> EMAIL ADDRESS</label>
                    <input type="text" name="email_address" class="self-input-new-fields form-control w-100">
                </div>
            </div>
            <div class="row page-groups" data-page="4" style="display: none;">
                <div class="col-sm-3 mb-4">
                    <label class="font-clemente text-primary mb-1"><i class="bi bi-person-fill-gear" style="vertical-align: 0;"></i> CURRENT POSITION</label>
                    <input type="text" name="position" class="self-input-new-fields form-control w-100">
                </div>
                <div class="col-sm-3 mb-4">
                    <label class="font-clemente text-primary mb-1"><i class="bi bi-building-fill-gear" style="vertical-align: 0;"></i> DEPARTMENT</label>
                    <input type="text" name="department" class="self-input-new-fields form-control w-100">
                </div>
                <div class="col-sm-3 mb-4">
                    <label class="font-clemente text-primary mb-1"><i class="bi bi-person-fill" style="vertical-align: 0;"></i> REFERRED BY</label>
                    <input type="text" name="referral" class="self-input-new-fields form-control w-100">
                </div>
            </div>
            <div class="row page-groups" data-page="5" style="display: none;">
                <div class="col-sm-3 mb-4">
                    <label class="font-clemente text-primary mb-1"><i class="bi bi-file-post" style="vertical-align: 0;"></i> EMPLOYED SINCE</label>
                    <input type="date" name="applied_on" class="self-input-new-fields form-control w-100">
                </div>
                <div class="col-sm-3 mb-4">
                    <label class="font-clemente text-primary mb-1"><i class="bi bi-card-heading" style="vertical-align: 0;"></i> SSS</label>
                    <input type="text" name="sss" class="self-input-new-fields form-control w-100">
                </div>
                <div class="col-sm-3 mb-4">
                    <label class="font-clemente text-primary mb-1"><i class="bi bi-card-heading" style="vertical-align: 0;"></i> PHILHEALTH</label>
                    <input type="text" name="philhealth" class="self-input-new-fields form-control w-100">
                </div>
                <div class="col-sm-3 mb-4">
                    <label class="font-clemente text-primary mb-1"><i class="bi bi-card-heading" style="vertical-align: 0;"></i> HDMF / PAG-IBIG</label>
                    <input type="text" name="hdmf" class="self-input-new-fields form-control w-100">
                </div>
            </div>
            <div class="row page-groups" data-page="6" style="display: none;">
                <div class="col-sm-3 mb-4">
                    <label class="font-clemente text-primary mb-1"><i class="bi bi-card-heading" style="vertical-align: 0;"></i> RESIDENCE CERT.</label>
                    <input type="text" name="rcn" class="self-input-new-fields form-control w-100">
                </div>
                <div class="col-sm-3 mb-4">
                    <label class="font-clemente text-primary mb-1"><i class="bi bi-card-heading" style="vertical-align: 0;"></i> TIN</label>
                    <input type="text" name="tin" class="self-input-new-fields form-control w-100">
                </div>
                <div class="col-sm-3 mb-4">
                    <label class="font-clemente text-primary mb-1"><i class="bi bi-card-heading" style="vertical-align: 0;"></i> HMO</label>
                    <input type="text" name="hmo" class="self-input-new-fields form-control w-100">
                </div>
                <div class="col-sm-3 mb-4">
                    <label class="font-clemente text-primary mb-1"><i class="bi bi-bank2" style="vertical-align: 0;"></i> ATM</label>
                    <input type="text" name="atm" class="self-input-new-fields form-control w-100">
                </div>
            </div>
            <div class="row page-groups" data-page="7" style="display: none;">
                <div class="col-sm-3 mb-4">
                    <label class="font-clemente text-primary mb-1"><i class="bi bi-geo-alt-fill" style="vertical-align: 0;"></i> PRESENT ADDRESS</label>
                    <input type="text" name="address_present" class="self-input-new-fields form-control w-100">
                </div>
                <div class="col-sm-3 mb-4">
                    <label class="font-clemente text-primary mb-1"><i class="bi bi-geo-fill" style="vertical-align: 0;"></i> PROVINCIAL ADDRESS</label>
                    <input type="text" name="address_provincial" class="self-input-new-fields form-control w-100">
                </div>
                <div class="col-sm-3 mb-4">
                    <label class="font-clemente text-primary mb-1"><i class="bi bi-pin-map-fill" style="vertical-align: 0;"></i> MANILA ADDRESS</label>
                    <input type="text" name="address_manila" class="self-input-new-fields form-control w-100">
                </div>
                <div class="col-sm-12 mb-4">
                    <label class="font-clemente text-primary mb-1"><i class="bi bi-person-check-fill" style="vertical-align: 0;"></i> PERSON TO NOTIFY IN CASE OF EMERGENCY</label>
                    <input type="text" name="emergency_person" class="self-input-new-fields form-control w-100">
                </div>
                <div class="col-sm-12 mb-4">
                    <label class="font-clemente text-primary mb-1"><i class="bi bi-telephone-inbound-fill" style="vertical-align: 0;"></i> EMERGENCY CONTACT NUMBER</label>
                    <input type="text" name="emergency_contact" class="self-input-new-fields form-control w-100">
                </div>
            </div>
            <div class="row page-groups" data-page="8" style="display: none;">
                <div class="col-sm-12 mb-4">
                    <input class="form-control self-input-new-fields-fields" type="file" id="self-input-photo" name="file" accept="image/*" required="" style="display:none;">
                    <div class="drop-zone create-drop-zone">
                        <div class="drop-message">
                            <i class="bi bi-download text-primary" style="font-size: 20px;"></i>
                            <br>
                            <span style="font-size: 14px;">Drag and drop your photo here,</span>
                                <br>
                            <span style="font-size: 14px;">or press to browse from your device</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row paginate-buttons mt-3">
                <div class="col-sm-12">
                    <button type="button" class="paginate-btn btn btn-secondary" data-step="-1"><i class="bi bi-caret-left" style="vertical-align: 0;"></i> Back</button>
                    <button type="button" class="paginate-continue-btn paginate-btn btn btn-primary" data-step="1" style="float: right;">Continue (<span class="paginate-current-page"></span>/<span class="paginate-max-page"></span>) <i class="bi bi-caret-right" style="vertical-align: 0;"></i></button>
                    <button type="button" class="paginate-finish-btn paginate-btn btn btn-success" data-step="1" style="float: right; display: none;">Finish <i class="bi bi-flag" style="vertical-align: 0;"></i></button>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
let current_page = 0;
function paginateUpdate(container) {
    if (!container) {
        return;
    }

    $(container).find('.paginate-current-page').text(current_page);
    $(container).find('.paginate-continue-btn').show();
    $(container).find('.paginate-finish-btn').hide();

    let max_page = 0;
    $(container).find('.page-groups').each(function(e) {
        max_page++;
    });
    $(container).find('.paginate-max-page').text(max_page);
};
$(document).ready(function() {
    $('.navigate-btn').on('click', function() {
        $('.navigate-btn').attr('disabled', true);
        const _this = this;
        const group = $(this).data('group');

        $(this).find('.tewi-large-btn-icon').animate({
            left: '+=1250',
            duration: 75,                                            
            easing: 'cubic-bezier(0.25, 0.1, 0.25, 1)'
        });

        setTimeout(function() {
            $('.container-groups').fadeOut('fast');
        }, 85);
        setTimeout(function() {
            $(`.container-groups[data-group="${group}"]`).fadeIn('fast');
            $('.navigate-btn').attr('disabled', false);
            current_page = 1;
            $('.page-groups').hide();
            $(`.container-groups[data-group="${group}"]`).find(`.page-groups[data-page="${current_page}"]`).fadeIn('fast');
            $(_this).find('.tewi-large-btn-icon').animate({
                left: '-=1250',
                duration: 0
            });
            paginateUpdate(`.container-groups[data-group="${group}"]`);
        }, 145);
    });
    $('.paginate-btn').on('click', function() {
        // $('.paginate-btn').attr('disabled', true);
        $(this).blur();
        const _this = this;
        const step = $(this).data('step');
        current_page += step;

        let max_page = 0;
        $(_this).closest('.container-groups').find('.page-groups').each(function(e) {
            max_page++;
        });

        console.table('current_page', current_page);
        console.table('max_page', max_page);
        console.log(current_page == max_page - 1);

        if (current_page > 0) {
            setTimeout(function() {
                $('.page-groups').hide();
                $(_this).closest('.container-groups').find(`.page-groups[data-page="${current_page}"]`).fadeIn('fast');
                // $('.paginate-btn').attr('disabled', false);

                if (current_page == max_page) {
                    $(_this).closest('.container-groups').find('.paginate-continue-btn').hide();
                    $(_this).closest('.container-groups').find('.paginate-finish-btn').show();
                } else {
                    paginateUpdate($(_this).closest('.container-groups'));
                }
            }, 75);
        } else {
            setTimeout(function() {
                $('.container-groups').hide();
                $(`.container-groups[data-group="home"]`).fadeIn('fast');
                $('.navigate-btn').attr('disabled', false);
                // $('.paginate-btn').attr('disabled', false);
            }, 75);
        }
    });
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
                    sweetAlertStatusMessage(messageText, messageIcon);
                    setTimeout(function() {
                        window.location.href = window.location.origin + '/profiling/records/all';
                    }, 750);
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

    // Handle form submission
    $(".paginate-finish-btn").click(function () {
        const formData = new FormData();

        // Gather all input data
        $(".self-input-new-fields").each(function () {
            const inputName = $(this).attr("name");
            const inputValue = $(this).val();

            if ($(this).attr("type") === "file") {
                const file = $(this)[0].files[0];
                formData.append(inputName, file);
            } else {
                formData.append(inputName, inputValue);
            }
        });

        formData.append("created_by", "self");

        // Send the AJAX request
        $.ajax({
            url: "https:/mis.manalok9.com/api/v1/no-auth/hris/applicants/create/self",
            method: "POST",
            data: formData,
            processData: false,
            contentType: false,
            beforeSend: function () {
                // Optional: Add a loading spinner or disable buttons
            },
            success: function (response) {
                alert("Applicant created successfully!");
                console.log(response);
            },
            error: function (xhr) {
                alert("An error occurred: " + xhr.responseJSON.message);
                console.log(xhr.responseJSON);
            },
            complete: function () {
                // Optional: Remove loading spinner or enable buttons
            }
        });
    });
});
</script>
</html>