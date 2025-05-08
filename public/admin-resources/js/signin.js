import {
    swalConfirmation,
    swalPrompt,
    fetchApiGetData,
    fetchApiPostData,
} from "../js/jsHelpers.js";

$(function () {
    /**
     * On click submit credentials email address and password
     * @param {any} "#btnSubmitCredentials"
     * @returns {any}
     */
    $("#btnSubmitCredentials").on("click", function () {
        let swalTxt = "Submit credentials ?";
        let swalIcon = "info";
        let confirmBtnTxt = "YES";
        let cancelBtnTxt = "CANCEL";
        let classConfirmBtn = "btn btn-primary";
        let classCancelBtn = "btn btn-danger";
        swalConfirmation(
            swalTxt,
            swalIcon,
            confirmBtnTxt,
            cancelBtnTxt,
            classConfirmBtn,
            classCancelBtn
        ).then((action) => {
            if (!action.isConfirmed) {

                return;

            }

            const fd = new FormData();

            fd.append('email_address', $('#email_address').val());
            fd.append('password', $('#password').val());

            fetchApiPostData(`${window.urlBase}/admin/login`,fd).then((res) => {


                if (typeof res === 'undefined' || typeof res.status === 'undefined') {

                    console.log(res);

                    return;

                }

                swalPrompt(res.message, res.status, `Okay`).then((action) => {
                    if (action.isConfirmed && res.status == 'success') {

                        // Redirect to dashboard
                        window.location.href = `${window.urlBase}/admin/dashboard`;

                        return;

                    }
                });
            });
        });
    });
});
