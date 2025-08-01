import {
    swalConfirmation,
    swalPrompt,
    fetchApiGetData,
    fetchApiPostData,
} from "../js/jsHelpers.js";

$(function () {
    /**
     * Fill datatable with pets data
     * @param {any} "#petsTable"
     * @param {any} {//processing:true
     * @param {any} //serverSide:true
     * @param {any} ajax:`${window.urlBase}/admin/pets/dt/all`
     * @param {any} columns:[{data:null
     * @param {any} render:function(data
     * @param {any} type
     * @param {any} row
     * @returns {any}
     */
    let petsTable = new DataTable("#petsTable", {
        order: [[0, 'desc']],
        // processing: true,
        // serverSide: true,
        ajax: {
            url: `${window.urlBase}/admin/pets/dt/all`,
            type: "GET",
            dataSrc: function (json) {
                console.log("DataSrc:", json);
                return json.data; // Make sure to return data array
            },
        },
        columns: [
            { data: 'id' , visible : false},
            {
                data: null,
                render: function (data, type, row) {
                    let statusRow = "";

                    if (row.status == 0) {
                        statusRow = `<span class="badge bg-danger">Deleted</span>`;
                    } else if (row.status == 1) {
                        statusRow = `<span class="badge bg-primary">Registered</span>`;
                    } else if (row.status == 2) {
                        statusRow = `<span class="badge bg-success">Approved</span>`;
                    } else if (row.status == 3) {
                        statusRow = `<span class="badge bg-danger">Rejected</span>`;
                    } else if (row.status == 4) {
                        statusRow = `<span class="badge bg-info">For use</span>`;
                    } else {
                        statusRow = `<span class="badge bg-warning">N/A</span>`;
                    }

                    return statusRow;
                },
            },
            {
                data: null,
                render: function (data, type, row) {
                    let pet_image = row.pet_image;
                    return pet_image
                        ? `<img src="${pet_image}" alt="${row.pet_name}'s Cute Photo" class="img-thumbnail" style="width: 50px; height: 50px;">`
                        : '';
                }
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
                    let rowClass;
                    let rowStatusLabel = "Unavailable";

                    if (row.status == 0) {
                        rowClass = "btnRestoreDeletedPet";

                        rowStatusLabel = `
                        <div class="svg-icon me-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
                            </svg>
                        </div> Restore`;
                    } else if (row.status == 1) {
                        rowClass = "btnApproveRegisteredPet";

                        rowStatusLabel = `
                        <div class="svg-icon me-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                        </div> Approve`;
                    } else if (row.status == 2) {
                        rowClass = "btnCancelApprovedPet";

                        rowStatusLabel = `
                        <div class="svg-icon me-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 18.364A9 9 0 0 0 5.636 5.636m12.728 12.728A9 9 0 0 1 5.636 5.636m12.728 12.728L5.636 5.636" />
                            </svg>
                        </div> Cancel Registration`;
                    } else if (row.status == 3) {
                        rowClass = "btnRejectPet";
                        rowStatusLabel = "Reject";
                    } else {
                        rowClass = "";
                    }

                    return `
                    <div class="btn-group">
                        <button type="button" class="btn btn-secondary btn-sm d-flex flex-row align-items-center viewEditPetDetails" data-id="${
                            row.id
                        }">
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
                            ${submenuUpdatePetStatus(
                                rowClass,
                                rowStatusLabel,
                                row
                            )}
                            <a class="dropdown-item d-flex flex-row align-items-center btnDeletePet" href="javascript:void(0);" data-id="${
                                row.id
                            }">
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
        rowCallback: function (row, data) {
            $(row).attr("data-id", data.id); // ✅ sets <tr data-id="...">
        },
    });

    /**
     * Update row status
     * @param {any} rowClass
     * @param {any} rowStatusLabel
     * @param {any} row
     * @returns {any}
     */
    const submenuUpdatePetStatus = (rowClass, rowStatusLabel, row) => {
        return `
        <a class="dropdown-item d-flex flex-row align-items-center ${rowClass}" href="javascript:void(0);" data-id="${row.id}" data-current-value="${row.status}">

                                ${rowStatusLabel}
                            </a>
        `;
    };

    /**
     * On click view or edit pet
     * @param {any} document
     * @returns {any}
     */
    $(document).on("click", ".viewEditPetDetails", function () {
        const id = $(this).attr("data-id");

        $("#offcanvas-pets-view").offcanvas("show");
        $("#view-pets-loading").show();

        fetchApiGetData(`${window.urlBase}/api/v1/search/pets/internal/${id}`).then(
            (res) => {
                if (
                    typeof res === "undefined" ||
                    typeof res.status === "undefined"
                ) {
                    console.log("Something's wrong! Please try again later.");
                    return;
                }

                $("#view-pets-loading").hide();
                $("#view-pets-container").html("");

                const data = res;
                const details = data.details;
                const meta = data.meta;

                const tableHtml = `
                    <div>
                        <img src="${data.primary_image || ""}" alt="${data.pet_name}'s Cute Photo" class="img-thumbnail mb-3" style="max-width: 384px; max-height: 384px;">
                    </div>
                    <table class="table table-bordered">
                        <tbody>
                            <tr><th>Pet Name</th><td>${data.pet_name || ""}</td></tr>
                            <tr><th>Pet Type</th><td>${data.pet_type || ""}</td></tr>
                            <tr><th>Status</th><td>${data.status}</td></tr>
                            <tr><th>Breed</th><td>${details.breed || ""}</td></tr>
                            <tr><th>IAGD Number</th><td>${details.iagd_number || ""}</td></tr>
                            <tr><th>Owner</th><td>${details.owner || ""}</td></tr>
                            <tr><th>Pet Location</th><td>${details.pet_location || ""}</td></tr>
                            <tr><th>Owner Location</th><td>${details.owner_location || ""}</td></tr>
                            <tr><th>Gender</th><td>${details.gender || ""}</td></tr>
                            <tr><th>Date of Birth</th><td>${details.date_of_birth || ""}</td></tr>
                            <tr><th>Markings</th><td>${details.markings || ""}</td></tr>
                            <tr><th>Body Color</th><td>${details.colors_body || ""}</td></tr>
                            <tr><th>Eye Color</th><td>${details.colors_eye || ""}</td></tr>
                            <tr><th>Weight</th><td>${details.weight || ""}</td></tr>
                            <tr><th>Height</th><td>${details.height || ""}</td></tr>
                            <tr><th>Male Parent</th><td>${details.male_parent || ""}</td></tr>
                            <tr><th>Female Parent</th><td>${details.female_parent || ""}</td></tr>
                            <tr><th>Display Status</th><td>${details.display_status || ""}</td></tr>
                            <tr><th>Inserted By</th><td>${meta.inserted_by || ""}</td></tr>
                            <tr><th>From System</th><td>${meta.from_system || ""}</td></tr>
                            <tr><th>Date Inserted</th><td>${meta.date_inserted || ""}</td></tr>
                        </tbody>
                    </table>
                `;

                $("#view-pets-container").html(tableHtml);

                if (Array.isArray(data.files) && data.files.length > 0) {
                    const filesHtml = `
                        <div class="mt-4">
                            <button class="btn btn-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#filesCollapse" aria-expanded="false" aria-controls="filesCollapse">
                                Show Attached Files (${data.files.length})
                            </button>
                            <div class="collapse mt-2" id="filesCollapse">
                                <ul class="list-group">
                                    ${data.files.map(file => {
                                        const url = `${window.urlBase}/${file.file_path}`;
                                        const label = `${file.file_name} (${Math.round(parseInt(file.file_size) / 1024)} KB)`;
                                        return `<li class="list-group-item">
                                                    <a href="${url}" target="_blank">${label}</a>
                                                </li>`;
                                    }).join("")}
                                </ul>
                            </div>
                        </div>
                    `;
                    $("#view-pets-container").append(filesHtml);
                }
            }
        );
    });

    /**
     * On click approve pet
     * @param {any} document
     * @returns {any}
     */
    $(document).on("click", ".btnApproveRegisteredPet", function () {
        const pet_id = $(this).attr("data-id");

        let swalTxt = "Do you want to approved this pet ?";
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
                console.log("User did not confirmed the action.");
                return;
            }

            const fd = new FormData();

            fd.append("id", pet_id);

            fetchApiPostData(`${window.urlBase}/admin/pets/dt/approve`, fd)
                .then((res) => {
                    if (
                        typeof res === "undefined" ||
                        typeof res.status === "undefined"
                    ) {
                        console.log(
                            "Somethings's wrong! Please try again later."
                        );

                        return;
                    }

                    console.log(res);

                    swalPrompt(res.message, res.status, `Okay`).then(
                        (response) => {
                            if (res.status == "success") {
                                var row = $(
                                    '#petsTable tbody tr[data-id="' +
                                        res.data.id +
                                        '"]'
                                );

                                petsTable
                                    .row(row)
                                    .data({
                                        status: res.data.status,
                                        pet_name: res.data.pet_name,
                                        pet_type: res.data.pet_type,
                                        owner: res.data.owner,
                                        iagd_number: res.data.iagd_number,
                                        status: res.data.status,
                                    })
                                    .draw(false);
                            }
                        }
                    );
                })
                .catch((error) => {
                    console.log(error);
                });
        });
    });

    /**
     * On click delete pet
     * @param {any} document
     * @returns {any}
     */
    $(document).on("click", ".btnDeletePet", function () {
        let thisBtn = $(this);
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

            fetchApiPostData(`${window.urlBase}/admin/pets/dt/delete`, fd).then(
                (result) => {
                    if (
                        typeof result === "undefined" ||
                        typeof result.status === "undefined"
                    ) {
                        console.error("Error! Invalid results");

                        return;
                    }

                    swalPrompt(result.message, result.status, `Okay`).then(
                        (action) => {
                            if (
                                action.isConfirmed &&
                                result.status == "success"
                            ) {
                                petsTable
                                    .row(thisBtn.closest("tr"))
                                    .remove()
                                    .draw();

                                return;
                            }
                        }
                    );
                }
            );
        });
    });
});
