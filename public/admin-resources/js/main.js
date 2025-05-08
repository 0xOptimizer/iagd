import {
    swalConfirmation,
    swalPrompt,
    fetchApiGetData,
    fetchApiPostData,
} from "../js/jsHelpers.js";

$(function () {
    /**
     * Handle sidebar events status
     * @returns {any}
     */
    const handleSidebarStatus = () => {
        const toggleStatus = localStorage.getItem("sidebar-toggle");


        if (!toggleStatus || toggleStatus == "false" || toggleStatus == null) {
            console.log('Sidebar is hidden');
            $(".floating-sidebar").addClass("hidden");
            $(".floating-sidebar").removeClass("show");

        } else {

            console.log('Sidebar is shown');
            $(".floating-sidebar").addClass("show");
            $(".floating-sidebar").removeClass("hidden");
        }
    };

    /**
     * Initialize "handleSidebarStatus"
     */
    handleSidebarStatus();

    /**
     * On toggle sidebar button click , Toggle sidebar status
     * @param {any} ".toggle-sidebar"
     * @returns {any}
     */
    $(".toggle-sidebar").on("click", function () {
        const toggleStatus = localStorage.getItem("sidebar-toggle");

        if (!toggleStatus || toggleStatus == "false" || toggleStatus == null) {

            $(".floating-sidebar").addClass("show");
            $(".floating-sidebar").removeClass("hidden");
            localStorage.setItem('sidebar-toggle',true);
        } else {

            $(".floating-sidebar").addClass("hidden");
            $(".floating-sidebar").removeClass("show");
            localStorage.setItem('sidebar-toggle',false);
        }

    });

    /**
     * On click button logout user
     * @param {any} '.btnLogoutAdmin'
     * @returns {any}
     */
    $('.btnLogoutAdmin').on('click', function () {
        let swalTxt = "Do you want to logout ?";
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

            fetchApiGetData(`${window.urlBase}/admin/logout`).then((res) => {
                if (typeof res === 'undefined' || typeof res.status === 'undefined') {
                    return;
                }

                swalPrompt(res.message, res.status, `Okay`).then((action) => {
                    if (action.isConfirmed && res.status == 'success') {

                        // Redirect to root
                        window.location.href = `${window.urlBase}/admin`;

                        return;

                    }
                });
            });
        });
    });
});
