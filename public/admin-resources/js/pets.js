import {
    swalConfirmation,
    swalPrompt,
    fetchApiGetData,
    fetchApiPostData,
} from "../js/jsHelpers.js";

$(function () {
    let petsTable = new DataTable("#petsTable", {
        processing: true,
        serverSide: true,
        ajax: `${window.urlBase}/admin/pets/all`,
    });

    const populateDatatableWithPetsData = () => {
        fetchApiGetData(`${window.urlBase}/admin/pets/all`).then((res) => {
            console.log(res);
        });
    };

    // populateDatatableWithPetsData();
});
