/**
 * Export function sweet alert confirmation
 * @param {any} swalTxt
 * @param {any} swalIcon
 * @param {any} confirmBtnTxt
 * @param {any} cancelBtnTxt
 * @param {any} classConfirmBtn
 * @param {any} classCancelBtn
 * @returns {any}
 */
export const swalConfirmation = (
    swalTxt,
    swalIcon,
    confirmBtnTxt,
    cancelBtnTxt,
    classConfirmBtn,
    classCancelBtn
) => {
    return Swal.fire({
        text: `${swalTxt}`,
        icon: `${swalIcon}`,
        showCancelButton: true,
        confirmButtonText: `${confirmBtnTxt}`,
        cancelButtonText: `${cancelBtnTxt}`,
        customClass: {
            confirmButton: `${classConfirmBtn}`, // Apply Bootstrap styling
            cancelButton: `${classCancelBtn}`, // Apply Bootstrap styling
        },
    });
};

/**
 * Export function sweet alert prompt
 * @param {any} swalTxt
 * @param {any} swalIcon
 * @param {any} confirmBtnTxt
 * @returns {any}
 */
export const swalPrompt = (swalTxt, swalIcon, confirmBtnTxt) => {
    return Swal.fire({
        text: `${swalTxt}`,
        icon: `${swalIcon}`,
        confirmButtonText: `${confirmBtnTxt}`,
        customClass: {
            confirmButton: "btn btn-primary",
        },
    });
};

/**
 * Export function fetch api get using URL with CSRF token
 * @param {any} url
 * @returns {any}
 */
export const fetchApiGetData = async (url) => {
    try {
        const response = await fetch(url, {
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });

        const data = await response.json();

        return data;
    } catch (error) {
        return error;
    }
};

/**
 * Export function fetch api post using URL with CSRF token & formdata
 * @param {any} url
 * @param {any} fd
 * @returns {any}
 */
export const fetchApiPostData = async (url,fd) => {
    try {
        const response = await fetch(url, {
            method: "POST",

            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
            },

            body: fd,
        });

        const data = await response.json();

        return data;

    } catch (error) {

        return error;

    }
};
