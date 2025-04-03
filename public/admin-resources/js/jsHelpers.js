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

export const fetchApiGetData = async (url) => {
    try {
        const response = await fetch(url, {
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf_token"]').attr("content"),
            },
        });

        const data = await response.json();

        return data;
    } catch (error) {
        return error;
    }
};

export const fetchApiPostData = async (url,fd) => {
    try {
        const response = await fetch(url, {
            method: "POST",

            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf_token"]').attr("content")
            },

            body: fd,
        });

        const data = await response.json();

        return data;

    } catch (error) {

        return error;

    }
};
