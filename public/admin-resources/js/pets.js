import {
    swalConfirmation,
    swalPrompt,
    fetchApiGetData,
    fetchApiPostData,
} from "../js/jsHelpers.js";

$(function () {
    let petsTable = new DataTable("#petsTable", {
        processing: true,
        // serverSide: true,
        ajax: `${window.urlBase}/admin/pets/dt/all`,
        columns: [
            {
                data: null,
                render: function (data, type, row) {
                    let statusRow = `<span class="badge bg-warning">N/A</span>`;

                    if (row.status == 0) {
                        statusRow = `<span class="badge bg-info">Pending</span>`;
                    }

                    if (row.status == 1) {
                        statusRow = `<span class="badge bg-success">Approved</span>`;
                    }
                    return statusRow;
                },
            },
            { data: "pet_name" },
            { data: "pet_type" },

            { data: "owner" },
            { data: "iagd_number" },
            {
                data: null,
                orderable: false,
                searchable: false,
                width: "120px",
                render: function (data, type, row) {
                    return `
                    <div class="btn-group">
                        <button type="button" class="btn btn-secondary btn-sm d-flex flex-row align-items-center">
                            <div class="svg-icon me-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>

                            </div>
                            VIEW
                        </button>
                        <button
                            type="button"
                            class="btn btn-secondary btn-sm dropdown-toggle dropdown-toggle-split"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                        >
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item d-flex flex-row align-items-center btnUpdateStatus" href="javascript:void(0);" data-id="${row.id}">
                                <div class="svg-icon me-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
</svg>

                                </div>
                                Approved / Cancel / Reject
                            </a>
                            <a class="dropdown-item d-flex flex-row align-items-center btnDeletePet" href="javascript:void(0);" data-id="${row.id}">
                                <div class="svg-icon me-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
</svg>

                                </div>
                                Delete
                            </a>
                        </div>
                    </div>
                    `;
                },
            },
        ],
    });

    const populateDatatableWithPetsData = () => {
        fetchApiGetData(`${window.urlBase}/admin/pets/dt/all`).then((res) => {
            console.log(res);
        });
    };

    // populateDatatableWithPetsData();

    $(document).on("click", ".btnUpdateStatus", function () {
        alert($(this).attr("data-id"));
    });

    $(document).on("click", ".btnDeletePet", function () {
        let pet_id = $(this).attr("data-id");

        let swalTxt = "Do you want to delete this pet ?";
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

            fd.append("id", pet_id);

            fetchApiPostData(`${window.urlBase}/admin/pets/dt/delete`, fd);
        });
    });
});
