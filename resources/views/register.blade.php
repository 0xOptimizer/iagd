<!DOCTYPE html>

<html>
<head>
    @include('components.header')
</head>
<style>


</style>
<body>
    <div class="phone-container">
        <div class="group-container" data-group="schedule">
            <div class="mb-5">
                <h4 class="text-center">Set an Appointment</h4>
                <h6 class="text-center">₱1,000 per 30 minutes</h6>
            </div>
            <form id="registrationForm" autocomplete="off">
                <div class="row">
                    <input class="form-control self-input-new-fields-fields" type="file" id="self-input-photo" name="file" accept="image/*" required="" style="display:none;">
                    <div class="drop-zone create-drop-zone">
                        <div class="drop-message">
                            <i class="bi bi-download text-primary" style="font-size: 20px;"></i>
                            <br>
                            <span style="font-size: 14px;">Drag and drop your pet's photo here,</span>
                                <br>
                            <span style="font-size: 14px;">or press to browse from your device</span>
                        </div>
                    </div>
                </div>
                <!-- Submit Button -->
                <div class="d-grid gap-2 mt-4 mb-3">
                    <div class="row">
                        <div class="form-floating col-sm-3 mb-3">
                            <button type="button" class="group-navigate-btn btn btn-outline-primary btn-lg" data-group="main" style="height: 100%; width: 100%;" disabled>Back</button>
                        </div>
                        <div class="form-floating col-sm-9 mb-3">
                            <button type="button" class="group-navigate-btn btn btn-primary btn-lg" data-group="iagd" style="height: 100%; width: 100%;">Continue</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="group-container" data-group="iagd" style="display: none;">
            <div class="mb-5">
                <h4 class="text-center">Your Appointment</h4>
                <h6 class="text-center">₱1,000 per 30 minutes</h6>
                <h6 class="text-center">March 20th, 2025</h6>
                <h6 class="text-center">12:30 PM to 1:00 PM</h6>
            </div>
            <form id="registrationForm" autocomplete="off">
                <!-- Pet Name -->
                <div class="row mb-3">
                    <div class="banner-info p-3 text-center">
                        <i class="bi bi-info-circle"></i> Let us help you find your pet's details online.
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="form-floating col-sm-12">
                        <input type="text" class="form-control" id="pet-name" placeholder="Is your pet an IAGD member?" value="IAGD-" required>
                        <label for="pet-name" style="margin-left: 12px;">Is your pet an IAGD member?</label>
                    </div>
                    <!-- <div class="col-sm-12 mt-2">
                        <a href="" target="_blank" style="font-size: 14px;">What is IAGD?</a>
                    </div> -->
                </div>
                <!-- Submit Button -->
                <div class="d-grid gap-2 mt-4 mb-3">
                    <div class="row">
                        <div class="form-floating col-sm-3 mb-3">
                            <button type="button" class="group-navigate-btn btn btn-outline-primary btn-lg" data-group="schedule" style="height: 100%; width: 100%;">Back</button>
                        </div>
                        <div class="form-floating col-sm-4 mb-3">
                            <button type="button" class="group-navigate-btn btn btn-outline-primary btn-lg" data-group="fill_up_pet" style="height: 100%; width: 100%;">Not a Member</button>
                        </div>
                        <div class="form-floating col-sm-5 mb-3">
                            <button type="button" class="btn btn-primary btn-lg" style="height: 100%; width: 100%;">Find Details</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="group-container" data-group="fill_up_pet" style="display: none;">
            <div class="mb-5">
                <h4 class="text-center">Your Appointment</h4>
                <h6 class="text-center">₱1,000 per 30 minutes</h6>
                <h6 class="text-center">March 20th, 2025</h6>
                <h6 class="text-center">12:30 PM to 1:00 PM</h6>
            </div>
            <form id="registrationForm" autocomplete="off">
                <!-- Pet Name -->
                <div class="row mb-4">
                    <div class="form-floating col-sm-8">
                        <input type="text" class="form-control" id="pet-name" placeholder="Pet Name" required>
                        <label for="pet-name" style="margin-left: 12px;">Pet Name</label>
                    </div>
                    <div class="form-floating col-sm-4">
                        <input type="text" class="form-control" id="pet-iagd" placeholder="IAGD Number">
                        <label for="pet-iagd" style="margin-left: 12px;">IAGD Number</label>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="form-floating col-sm-4">
                        <select class="form-control" id="pet-type" required>
                            <option value="cat">Cat</option>
                            <option value="dog">Dog</option>
                        </select>
                        <label for="pet-type" style="margin-left: 12px;">Pet Type</label>
                    </div>
                    <div class="form-floating col-sm-8">
                        <input type="text" class="form-control" id="pet-breed" placeholder="Pet Breed">
                        <label for="pet-breed" style="margin-left: 12px;">Pet Breed</label>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="form-floating col-sm-4">
                        <select class="form-control" id="pet-gender" required>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        <label for="pet-gender" style="margin-left: 12px;">Gender</label>
                    </div>
                    <div class="form-floating col-sm-4">
                        <input type="text" class="form-control" id="pet-age" placeholder="Age">
                        <label for="pet-age" style="margin-left: 12px;">Age</label>
                    </div>
                    <div class="form-floating col-sm-4">
                        <input type="text" class="form-control" id="pet-weight" placeholder="Weight">
                        <label for="pet-weight" style="margin-left: 12px;">Current Weight</label>
                    </div>
                </div>
                <!-- Reason -->
                <div class="row mb-3">
                    <div class="form-floating col-sm-12">
                        <textarea class="form-control" id="consultation-reason" placeholder="Briefly describe the reason for your consultation" rows="3" required></textarea>
                        <label for="consultation-reason" style="margin-left: 12px;">Please briefly describe the reason for consultation</label>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="form-floating col-sm-12">
                        <textarea class="form-control" id="consultation-food" placeholder="What are you feeding your pet?" rows="3"></textarea>
                        <label for="consultation-food" style="margin-left: 12px;">What are you feeding your pet?</label>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="form-floating col-sm-12">
                        <textarea class="form-control" id="consultation-medications" placeholder="Is your pet currently under any medications or vitamins?" rows="3"></textarea>
                        <label for="consultation-medications" style="margin-left: 12px;">Is your pet currently under any medications or vitamins?</label>
                    </div>
                </div>
                <!-- Submit Button -->
                <div class="d-grid gap-2 mt-4 mb-3">
                    <div class="row">
                        <div class="form-floating col-sm-3 mb-3">
                            <button type="button" class="group-navigate-btn btn btn-outline-primary btn-lg" data-group="iagd" style="height: 100%; width: 100%;">Back</button>
                        </div>
                        <div class="form-floating col-sm-9 mb-3">
                            <button type="button" class="group-navigate-btn btn btn-primary btn-lg" data-group="fill_up_owner" style="height: 100%; width: 100%;">Continue</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="group-container" data-group="fill_up_owner" style="display: none;">
            <div class="mb-5">
                <h4 class="text-center">Your Appointment</h4>
                <h6 class="text-center">₱1,000 per 30 minutes</h6>
                <h6 class="text-center">March 20th, 2025</h6>
                <h6 class="text-center">12:30 PM to 1:00 PM</h6>
                <h6 class="text-center">Loki</h6>
            </div>
            <form id="registrationForm" autocomplete="off">
                <!-- Pet Name -->
                <div class="row mb-4">
                    <div class="form-floating col-sm-12">
                        <input type="text" class="form-control" id="pet-name" placeholder="Pet Name" required>
                        <label for="pet-name" style="margin-left: 12px;">Owner Name</label>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="form-floating col-sm-8">
                        <input type="text" class="form-control" id="pet-breed" placeholder="Pet Breed">
                        <label for="pet-breed" style="margin-left: 12px;">Pet Breed</label>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="form-floating col-sm-8">
                        <input type="text" class="form-control" id="pet-breed" placeholder="Pet Breed">
                        <label for="pet-breed" style="margin-left: 12px;">Pet Breed</label>
                    </div>
                </div>
                <!-- Reason -->
                <div class="row mb-3">
                    <div class="form-floating col-sm-12">
                        <textarea class="form-control" id="consultation-reason" placeholder="Briefly describe the reason for your consultation" rows="3" required></textarea>
                        <label for="consultation-reason" style="margin-left: 12px;">Please briefly describe the reason for consultation</label>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="form-floating col-sm-12">
                        <textarea class="form-control" id="consultation-food" placeholder="What are you feeding your pet?" rows="3"></textarea>
                        <label for="consultation-food" style="margin-left: 12px;">What are you feeding your pet?</label>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="form-floating col-sm-12">
                        <textarea class="form-control" id="consultation-medications" placeholder="Is your pet currently under any medications or vitamins?" rows="3"></textarea>
                        <label for="consultation-medications" style="margin-left: 12px;">Is your pet currently under any medications or vitamins?</label>
                    </div>
                </div>
                <!-- Submit Button -->
                <div class="d-grid gap-2 mt-4 mb-3">
                    <div class="row">
                        <div class="form-floating col-sm-3 mb-3">
                            <button type="button" class="group-navigate-btn btn btn-outline-primary btn-lg" data-group="iagd" style="height: 100%; width: 100%;">Back</button>
                        </div>
                        <div class="form-floating col-sm-9 mb-3">
                            <button type="button" class="group-navigate-btn btn btn-primary btn-lg" data-group="fill_up_owner" style="height: 100%; width: 100%;">Continue</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Sales Entry</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editSalesForm">
                        <div class="form-floating mb-3">
                            <select class="form-control" id="edit-team">
                                <option value="default" hidden>Select</option>
                                <option value="extreme_aces">Extreme Aces</option>
                                <option value="unstoppable_closers">Unstoppable Closers</option>
                            </select>
                            <label for="edit-team">Team</label>
                        </div>

                        <div class="form-floating mb-3">
                            <select class="edit-sales-input type-select form-control" name="edit-type" id="edit-type">
                                <option value="default" selected hidden>Select</option>
                                <option value="distributors">Distributors</option>
                                <option value="dealers">Dealers</option>
                                <option value="iagd">IAGD</option>
                                <option value="mainstream">Mainstream</option>
                                <option value="mk9">MK9 Business Unit</option>
                                <option value="mrh_/_f&b">MRH / F&B</option>
                                <option value="retail">Retail</option>
                                <option value="osd">OSD</option>
                            </select>
                            <label for="creeditate-type">Type</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="edit-sales_amount" step="0.01" required>
                            <label for="edit-sales_amount">Sales Amount</label>
                        </div>

                        <div class="form-floating mb-3">
                            <select class="form-control" id="edit-currency">
                                <option value="php" selected>PHP</option>
                                <option value="usd" disabled>USD</option>
                                <option value="jpy" disabled>JPY</option>
                                <option value="cny" disabled>CNY</option>
                            </select>
                            <label for="edit-currency">Currency</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" id="edit-date" required>
                            <label for="edit-date">Date</label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger me-auto" id="deleteEntry" style="width: 50px;"><i class="bi bi-trash-fill"></i></button>
                    <button type="button" class="btn btn-primary" id="saveEdit" style="width: 225px;"><i class="bi bi-floppy2-fill"></i> Save Changes</button>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/luxon/3.4.3/luxon.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script>

$(document).ready(function() {

    $('.group-navigate-btn').on('click', function() {
        const group = $(this).data('group');

        if (group == 'analytics') {
            fetchLeaderboardData();
            fetchWeeklyChartData();
            fetchMonthlyChartData();
        } else if (group == 'create') {
            refreshLatestSalesContainer();
            fetchLatestSales(1, 1);
        } else if (group == 'history') {
            refreshLatestSalesContainer();
            fetchLatestSales(1, 50);
        }
    });

    
    $('.subgroup-navigate-btn').on('click', function() {
        const subgroup = $(this).data('group');
        $('.subgroup-container').hide();
        $(`.subgroup-container[data-group="${subgroup}"]`).show();

        $('.subgroup-navigate-btn').removeClass('btn-primary').addClass('btn-outline-primary');
        $(this).removeClass('btn-outline-primary').addClass('btn-primary');
    });
    $(".generate-report-btn").on("click", function () {
        let reportType = $(this).data("report");
        let startDate = $("#startDate").val();
        let endDate = $("#endDate").val();

        if (!startDate || !endDate) {
            alert("Error: Start date or end date not found.");
            return;
        }

        let sanitizeFileName = (str) => str.replace(/[^\w\-]/g, "-");

        startDate = sanitizeFileName(startDate);
        endDate = sanitizeFileName(endDate);

        let randomHex = Math.floor(Math.random() * 0xFFFFFFFF).toString(16).padStart(8, "0");
        let fileName = `${reportType}_${startDate}_${endDate}_0x${randomHex}.png`;

        let targetElement = $(`.printable-container[data-report="${reportType}"]`);

        if (targetElement.length === 0) {
            alert("Error: No printable container found for this report.");
            return;
        }

        html2canvas(targetElement[0]).then((canvas) => {
            let link = document.createElement("a");
            link.href = canvas.toDataURL("image/png");
            link.download = fileName;
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        }).catch((error) => {
            console.error("Error generating image:", error);
            alert("An error occurred while generating the report.");
        });
    });

    let droppedFiles = {}; // For drag 'n drop functionality

	function previewImage(input, dropZone) {
	    if (input.files && input.files[0]) {
	        let reader = new FileReader();
	        reader.onload = function(e) {
	            let img = $("<img>").attr("src", e.target.result).css({
	                "max-width": "100%",
	                "max-height": "100%",
	                "object-fit": "contain"
	            });

	            // Store the base64 image in localStorage
	            // localStorage.setItem(input.name, e.target.result);

	            // Remove any existing images in the drop-zone before appending the new one
	            dropZone.find("img").remove();
	            dropZone.prepend(img);

	            // Hide the drop message
	            dropZone.find(".drop-message").hide();

                // Send the image to the API
                let formData = new FormData();
                formData.append("file", input.files[0]);

                $.ajax({
                    url: "https://iagd-api.metaanimals.org/classify/",
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        console.log("Detected species:", response.species);
                    },
                    error: function (xhr, status, error) {
                        console.error("Error:", error);
                    }
                });
	        };
	        reader.readAsDataURL(input.files[0]);
	    } else {
	        // Show the drop message when no image is selected
	        dropZone.find(".drop-message").show();
	    }
	}

	function handleDragging(e) {
	    e.preventDefault();
	    e.stopPropagation();
	}

	function handleDragEnterLeave(e) {
	    e.preventDefault();
	    e.stopPropagation();
	    let dropZone = $(e.target).closest(".drop-zone");
	    dropZone.toggleClass("dragging", e.type === "dragenter");
	}

	function handleDrop(e) {
	    e.preventDefault();
	    e.stopPropagation();
	    let dropZone = $(e.target).closest(".drop-zone");
	    let files = e.originalEvent.dataTransfer.files;
	    let input = dropZone.siblings("input[type='file']")[0];

	    // Store the dropped files in the droppedFiles variable
	    droppedFiles[input.id] = files;

	    dropZone.removeClass("dragging");

	    // Call the previewImage function to show the image preview
	    if (files.length) {
	        // Modify the input's files property to store the dropped files
	        input.files = files;

	        // Call previewImage with the input and dropZone elements
	        previewImage(input, dropZone);
	    } else {
	        dropZone.html(`<div class="drop-message">
	            <i class="bi bi-download text-primary" style="font-size: 20px;"></i>
	            <br>
	            <span style="font-size: 14px;">Drag and drop receipt photo here,</span>
	            <br>
	            <span style="font-size: 14px;">or press to browse from your files</span>
	            </div>`);
	    }
	}

	function setupDropZone(dropZoneSelector) {
	    let dropZones = $(dropZoneSelector);

	    dropZones.on("dragenter", handleDragEnterLeave);
	    dropZones.on("dragleave", handleDragEnterLeave);
	    dropZones.on("dragover", handleDragging);
	    dropZones.on("drop", handleDrop);

	    dropZones.on("click", function () {
	        $(this).siblings("input[type='file']").click();
	    });

	    $("input[type='file']").on("change", function () {
	        let dropZone = $(this).siblings(dropZoneSelector);
	        if (this.files.length) {
	            previewImage(this, dropZone);
	        } else {
	            dropZone.html(`<div class="drop-message">
	                <i class="bi bi-download text-primary" style="font-size: 20px;"></i>
	                <br>
	                <span style="font-size: 14px;">Drag and drop receipt photo here,</span>
	                <br>
	                <span style="font-size: 14px;">or press to browse from your files</span>
	                </div>`);
	        }
	    });
	}

	setupDropZone(".create-drop-zone");
	setupDropZone(".affiliates-drop-zone");

	function resetDropZone(dropZoneSelector) {
	    let dropZones = $(dropZoneSelector);
	    
	    dropZones.each(function() {
	        let dropZone = $(this);

	        // Remove any existing images in the drop-zone
	        dropZone.find("img").remove();

	        // Show the drop message
	        dropZone.html(`<div class="drop-message">
	            <i class="bi bi-download text-primary" style="font-size: 20px;"></i>
	            <br>
	            <span style="font-size: 14px;">Drag and drop receipt photo here,</span>
	            <br>
	            <span style="font-size: 14px;">or press to browse from your files</span>
	            </div>`);
	    });

	    // Clear input files
	    $("input[type='file']").val('');
	}
});
</script>
</html>
