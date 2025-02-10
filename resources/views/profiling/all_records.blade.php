<!DOCTYPE html>

<html>
<head>
    @include('components.header')
</head>
<style>


</style>
<body>
	<div id="app">
        @include('components.sidebar')
		<div id="main">
			<header>
				<a href="#" class="burger-btn d-block d-xl-none">
					<i class="bi bi-justify fs-3"></i>
				</a>
			</header>

			<div class="page-heading">
				<div class="page-title">
					<div class="row">
						<div class="col-12 col-md-6">
							<h3>
								<span class="font-clemente text-primary">All Records</span>
							</h3>
						</div>
					</div>
					<div class="row mt-2">
						<div class="col-12 col-md-7 sticky-top">
							<button type="button" class="switchable-tabs tewi-tab-primary tewi-tab-active" data-group="stats" style="width: 125px;"><i class="bi bi-graph-up" style="vertical-align: 0; font-size: 13px;"></i> Stats</button>
							<button type="button" class="switchable-tabs tewi-tab-primary tewi-tab-hoverable" data-group="roles" style="width: 125px;"><i class="bi bi-card-checklist" style="vertical-align: 0; font-size: 13px;"></i> Employees</button>
							<button type="button" class="switchable-tabs tewi-tab-primary tewi-tab-hoverable" data-group="categories" style="width: 125px;"><i class="bi bi-circle-square" style="vertical-align: 0; font-size: 13px;"></i> Applicants</button>
						</div>
						<div class="col-sm-12 col-md-2 mr-auto sticky-top">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="bi bi-search"></i></span>
								</div>
								<input type="text" id="tableSearch" class="form-control" placeholder="Search" style="font-size: 14px;">
							</div>
						</div>
					</div>
				</div>
				<section class="section mt-1">
					<div class="row">
						<div class="col-sm-12 col-lg-9">
							<div class="container-groups row" data-group="stats">
								<div class="col-sm-12 tewi-container">
									<h4 class="header-horizontal-line-text mt-4">
										<span>Summary</span>
									</h4>
									<div class="row mt-4">
										<div class="col-sm-6 col-md-3">
											<div class="tewi-card tewi-card-hoverable stats-roles-card roles-mcdao" data-group="mcdao">
												<div class="tewi-card-title">
													<span>Employees</span>
												</div>
												<div class="tewi-card-body">
													<span>-</span>
												</div>
												<div class="tewi-card-footer">
													<span class="text-success"><i class="bi bi-plus"></i>5000</span>
													<span class="text-muted"><i class="bi bi-dash"></i>5000</span>
												</div>
												<div class="tewi-card-background">
												</div>
											</div>
										</div>
										<div class="col-sm-6 col-md-3">
											<div class="tewi-card tewi-card-hoverable stats-roles-card roles-mcgamers" data-group="mcgamers">
												<div class="tewi-card-title">
													<span>On Probation</span>
												</div>
												<div class="tewi-card-body">
													<span>-</span>
												</div>
												<div class="tewi-card-footer">
													<span class="text-success"><i class="bi bi-plus"></i>5000</span>
													<span class="text-muted"><i class="bi bi-dash"></i>5000</span>
												</div>
												<div class="tewi-card-background">
												</div>
											</div>
										</div>
										<div class="col-sm-6 col-md-3">
											<div class="tewi-card tewi-card-hoverable stats-roles-card roles-web2" data-group="web2gamers">
												<div class="tewi-card-title">
													<span>Resigned</span>
												</div>
												<div class="tewi-card-body">
													<span>-</span>
												</div>
												<div class="tewi-card-footer">
													<span class="text-success"><i class="bi bi-plus"></i>5000</span>
													<span class="text-muted"><i class="bi bi-dash"></i>5000</span>
												</div>
												<div class="tewi-card-background">
												</div>
											</div>
										</div>
										<div class="col-sm-6 col-md-3">
											<div class="tewi-card tewi-card-hoverable stats-roles-card roles-list" data-group="web2roles">
												<div class="tewi-card-title">
													<span>Suspended</span>
												</div>
												<div class="tewi-card-body">
													<span>-</span>
												</div>
												<div class="tewi-card-footer">
													<span class="text-success"><i class="bi bi-plus"></i>5000</span>
													<span class="text-muted"><i class="bi bi-dash"></i>5000</span>
												</div>
												<div class="tewi-card-background">
												</div>
											</div>
										</div>
									</div>
									<div class="row mt-4">
										<div class="col-sm-12 col-md-9">
											<div class="tewi-card selfroles-chart-container">
												<canvas id="selfroles-chart"></canvas>
											</div>
										</div>
										<div class="col-sm-12 col-md-3">
										</div>
									</div>
								</div>
							</div>
							<div class="container-groups row" data-group="roles" style="display: none;">
								<div class="col-sm-12 tewi-container">
									<div class="table-responsive">
										<table id="employees-table" class="table standard-table-nodesign">
											<thead style="font-size: 12px;">
												<th>ID #</th>
												<th>NAME</th>
												<th>POSITION</th>
                                                <th>PERSONAL CONTACT</th>
												<th>EMERGENCY CONTACT</th>
												<th></th>
											</thead>
											<tbody>
												
											</tbody>
										</table>
									</div>
								</div>
								<form action="" method="POST" enctype="multipart/form-data">
								<!-- <div class="new-inquiry-group row" style="display: none;">
									<div class="col-sm-3">
										<label for="order">INQUIRY ID</label>
										<input type="text" class="form-control" name="inquiry_id" value="System Generated" disabled>
									</div>
									<div class="col-sm-3">
										<label for="order">CCA</label>
										<input type="text" class="form-control" name="cca" value="System Generated" disabled>
									</div>
									<div class="col-sm-6">
										<label for="order">DATE</label>
										<input type="datetime-local" class="form-control" name="date" value="<?php echo date("Y-m-d h:i:s");?>">
									</div>
									<div class="col-sm-8 mt-4">
										<label for="order">CX LINK</label>
										<input type="text" class="form-control" name="cx_link" value="">
									</div>
									<div class="col-sm-4 mt-4">
										<label for="order">SOURCE</label>
										<select class="form-control" name="source">
											<option value="IASCOM">IASCOM</option>
											<option value="Messenger">Messenger</option>
											<option value="Meta Animals">Meta Animals</option>
										</select>
									</div>
									<div class="col-sm-4 mt-4">
										<label for="order">CLIENT NAME</label>
										<input type="text" class="form-control" name="client_name" value="">
									</div>
									<div class="col-sm-4 mt-4">
										<label for="order">CONTACT NUMBER</label>
										<input type="text" class="form-control" name="contact_number" value="">
									</div>
									<div class="col-sm-4 mt-4">
										<label for="order">FACEBOOK</label>
										<input type="text" class="form-control" name="facebook" value="">
									</div>
									<div class="col-sm-5 mt-4">
										<label for="order">NATURE OF CONCERNS</label>
										<input type="text" class="form-control" name="nature_of_concerns" value="">
									</div>
									<div class="col-sm-5 mt-4">
										<label for="order">TYPE OF CONCERNS</label>
										<input type="text" class="form-control" name="type_of_concerns" value="">
									</div>
									<div class="col-sm-2 mt-4">
										<label for="order">STATUS</label>
										<input type="text" class="form-control" name="status" value="">
									</div>
									<div class="col-sm-6 mt-4">
										<label for="order">VERBATIM</label>
										<textarea class="form-control" rows="6" name="verbatim" value=""></textarea>
									</div>
									<div class="col-sm-6 mt-4">
										<label for="order">RESPONSE
										</label>
										<textarea class="form-control" rows="6" name="response" value=""></textarea>
									</div>
									<div class="col-sm-12 mt-4">
										<button type="submit" class="btn btn-primary w-100" style="font-size: 22px; height: 48px;"><i class="bi bi-send-plus-fill"></i> Submit</button>
									</div>
								</div> -->
								</form>
							</div>
						</div>
						<div class="col-sm-12 col-lg-3">
							<div class="row text-center">
                                <div class="new-record-btn tewi-large-btn-container tewi-large-btn-success col-sm-12 mb-2 tewi-container" style="margin-left: 10px;">
                                    <div class="tewi-large-btn-icon">
                                        <i class="bi bi-plus-circle"></i>
                                    </div>
                                    <div class="tewi-large-btn-tooltip">
                                        New Record
                                    </div>
                                </div>
                                <div class="refresh-data-btn tewi-large-btn-container tewi-large-btn-primary col-sm-12 mb-2 tewi-container" style="margin-left: 10px;">
                                    <div class="tewi-large-btn-icon">
                                        <i class="bi bi-arrow-clockwise"></i>
                                    </div>
                                    <div class="tewi-large-btn-tooltip">
                                        Refresh Data
                                    </div>
                                </div>
								<a href="#" class="tewi-large-btn-container tewi-large-btn-primary col-sm-12 mt-4 mb-2 tewi-container" style="margin-left: 10px;">
                                    <div class="tewi-large-btn-icon">
                                        <i class="bi bi-qr-code"></i>
                                    </div>
                                    <div class="tewi-large-btn-tooltip">
                                        QR Codes
                                    </div>
								</a>
							</div>
							<!-- <div class="container-groups row sticky-top" data-group="roles" style="display: none;">
								<div class="col-sm-12 input-preview-container" style="margin-left: 10px;">
									<div class="row pb-2 tewi-container">
										<div class="col-sm-12 mt-3">
											<button type="button" class="new-btn tewi-tab-success tewi-tab-hoverable" style="width: 100px; color: #3ce586;"><i class="bi bi-plus-square-fill" style="vertical-align: 0.15em; font-size: 12px;"></i> New</button>
											<button type="button" class="new-btn tewi-tab-primary tewi-tab-active" style="width: 100px;"><i class="bi bi-pencil-square" style="vertical-align: 0.15em; font-size: 12px;"></i> Existing</button>
										</div>
										<hr class="mt-1">
										<div class="col-sm-4 input-new-group" style="display: none;">
											<label for="input-new-database-id">DATABASE ID</label>
											<input id="input-new-database-id" type="text" class="form-control w-100" value="NEW" disabled>
										</div>
										<div class="col-sm-8 input-new-group" style="display: none;">
											<label for="input-new-category">CATEGORY</label>
											<input id="input-new-category" name="input-new-category" type="text" class="form-control w-100">
										</div>
										<div class="col-sm-12 input-new-group mt-2" style="display: none;">
											<label for="input-new-name">NAME</label>
											<input id="input-new-name" name="input-new-name" type="text" class="form-control w-100">
										</div>
										<div class="col-sm-8 mt-2 input-new-group" style="display: none;">
											<label for="input-new-emoji">EMOJI</label>
											<input id="input-new-emoji" name="input-new-emoji" type="text" class="form-control w-100" style="font-size: 14px;">
										</div>
										<div class="col-sm-4 mt-2 input-new-group" style="display: none; margin-left: -10px;">
											<img class="input-new-emoji-preview" src="intentionallyleftblank.png" width="64" height="64" style="object-fit: contain;">
											<img class="input-new-emoji-preview" src="intentionallyleftblank.png" width="32" height="32" style="object-fit: contain;">
										</div>
										<div class="col-sm-12 mt-2 input-new-group" style="display: none;">
											<label for="input-new-role">ROLE</label>
											<div class="input-group flex-nowrap">
												<span class="input-group-text" id="input-new-role-prefix" style="color: #fff700;">@</span>
												<input id="input-new-role" name="input-new-role" type="text" class="form-control w-100" aria-describedby="input-new-role-prefix" style="color: #fff700;">
											</div>
										</div>
										<div class="col-sm-12 col-lg-12 mt-4 input-new-group" style="display: none;">
											<button type="button" class="new-btn btn btn-success w-100"><i class="bi bi-check-circle-fill" style="vertical-align: 0;"></i> Create New </button>
										</div>
										<div class="col-sm-4 input-existing-group">
											<label for="input-database-id">DATABASE ID</label>
											<input id="input-database-id" name="input-database-id" type="number" class="form-control w-100">
										</div>
										<div class="col-sm-8 input-existing-group">
											<label for="input-category">CATEGORY</label>
											<input id="input-category" name="input-category" type="text" class="form-control w-100">
										</div>
										<div class="col-sm-12 input-existing-group mt-2">
											<label for="input-name">NAME</label>
											<input id="input-name" name="input-name" type="text" class="form-control w-100">
										</div>
										<div class="col-sm-8 mt-2 input-existing-group">
											<label for="input-emoji">EMOJI</label>
											<input id="input-emoji" name="input-emoji" type="text" class="form-control w-100" style="font-size: 14px;">
										</div>
										<div class="col-sm-4 mt-2 input-existing-group" style="margin-left: -10px;">
											<img class="input-emoji-preview" src="intentionallyleftblank.png" width="64" height="64" style="object-fit: contain;">
											<img class="input-emoji-preview" src="intentionallyleftblank.png" width="32" height="32" style="object-fit: contain;">
										</div>
										<div class="col-sm-12 mt-2 input-existing-group">
											<label for="input-role">ROLE</label>
											<div class="input-group flex-nowrap">
												<span class="input-group-text" id="input-role-prefix" style="color: #fff700;">@</span>
												<input id="input-role" name="input-role" type="text" class="form-control w-100" aria-describedby="input-role-prefix" style="color: #fff700;">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12 col-lg-2 input-existing-group tewi-container pb-3" style="border-top: none;">
											<button type="button" class="new-btn btn btn-danger w-100 mt-2"><i class="bi bi-trash-fill" style="vertical-align: 0;"></i> </button>
										</div>
										<div class="col-sm-12 col-lg-3 input-existing-group pb-4">
											
										</div>
										<div class="col-sm-12 col-lg-2 input-existing-group tewi-container pb-3" style="border-top: none; border-right: none;">
											<button type="button" class="new-btn btn btn-primary w-100 mt-2"><i class="bi bi-arrow-repeat" style="vertical-align: 0;"></i> </button>
										</div>
										<div class="col-sm-12 col-lg-5 input-existing-group tewi-container pb-3" style="border-top: none; border-left: none;">
											<button type="button" class="new-btn btn btn-primary w-100 mt-2"><i class="bi bi-check-circle-fill" style="vertical-align: 0;"></i> Save Changes </button>
										</div>
									</div>
								</div>
							</div> -->
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</div>
@include('modals.profiling.new_applicant')
<script>
function getFullName(applicant) {
    const firstName = applicant?.first_name || '';
    const middleInitial = applicant?.middle_name ? `${applicant.middle_name[0]}.` : '';
    const lastName = applicant?.last_name || '';
    return `${firstName} ${middleInitial} ${lastName}`.trim();
}
function animateShine(selector, duration = 400, delay = 0) {
    setTimeout(function () {
        // Calculate dimensions and offset of the target element
        let targetElement = $(selector);
        let width = targetElement.outerWidth();
        let height = targetElement.outerHeight();
        let offset = targetElement.offset();

        // Calculate the diagonal length of the target element
        let diagonalLength = Math.sqrt(width * width + height * height);

        // Normalize the duration based on the diagonal length
        let normalizedDuration = (duration * diagonalLength) / (width + height);

        // Make the target element's position relative
        targetElement.css("position", "relative");

        // Create a wrapper element and set its style
        let shineWrapper = $("<div>")
            .css({
                position: "absolute",
                top: 0,
                left: 0,
                overflow: "hidden",
                width: width,
                height: height,
                pointerEvents: "none",
            })
            .appendTo(targetElement);

        let shine = $("<div>")
            .css({
                position: "absolute",
                top: -diagonalLength / 2, // Adjust top position based on diagonal length
                left: -diagonalLength, // Adjust left position to ensure off-screen start
                width: diagonalLength * 2, // Adjust width based on the diagonal length
                height: diagonalLength, // Adjust height based on the diagonal length
                background:
                    "linear-gradient(225deg, rgba(135, 255, 87, 0) 0%, rgba(135, 255, 87, 0.5) 50%, rgba(135, 255, 87, 0) 100%)",
                transform: "rotate(45deg)",
                pointerEvents: "none",
            })
            .appendTo(shineWrapper);

        shine.animate(
            {
                left: diagonalLength, // Adjust left position for the animation based on diagonal length
            },
            normalizedDuration,
            function () {
                shine.remove();
                shineWrapper.remove();
            }
        );
    }, delay);
}
function removeCommas(value) {
	return value.replace(/,/g, '');
}
$(document).ready(function() {
    $('.create-applicant-btn').on('click', function (e) {
        const _this = $(this);
        _this.attr('disabled', true);
        _this.html('<i class="spinner-border spinner-border-sm" style="font-size: 16px; width: 32px; height: 32px";></i>');

        const first_name = $('#applicant-details-first_name').val();
        const middle_name = $('#applicant-details-middle_name').val();
        const last_name = $('#applicant-details-last_name').val();
        const name_extension = $('#applicant-details-name_extension').val();
        const sex = $('#applicant-details-sex').val();
        const height = $('#applicant-details-height').val();
        const weight = $('#applicant-details-weight').val();
        const religion = $('#applicant-details-religion').val();
        const birth_date = $('#applicant-details-birth_date').val();
        const age = $('#applicant-details-age').val();
        const birth_place = $('#applicant-details-birth_place').val();
        const citizenship = $('#applicant-details-citizenship').val();
        const civil_status = $('#applicant-details-civil_status').val();
        const no_of_children = $('#applicant-details-no_of_children').val();
        const contact_number = $('#applicant-details-contact_number').val();
        const email = $('#applicant-details-email').val();
        const position_desired = $('#applicant-details-position_desired').val();
        const position_group = $('#applicant-details-position_group').val();
        const applied_on = $('#applicant-details-applied_on').val();
        const sss = $('#applicant-details-sss').val();
        const philhealth = $('#applicant-details-philhealth').val();
        const hdmf = $('#applicant-details-hdmf').val();
        const residence_certificate = $('#applicant-details-residence_certificate').val();
        const tin = $('#applicant-details-tin').val();
        const hmo = $('#applicant-details-hmo').val();
        const atm = $('#applicant-details-atm').val();
        const referral = $('input.create-applicant-fields[name="referral"]').val();

        const fd = new FormData();
        
        fd.append('first_name', first_name);
        fd.append('middle_name', middle_name);
        fd.append('last_name', last_name);
        fd.append('name_extension', name_extension);
        fd.append('gender', sex);
        fd.append('height', height);
        fd.append('weight', weight);
        fd.append('religion', religion);
        fd.append('birth_date', birth_date);
        fd.append('age', age);
        fd.append('birth_place', birth_place);
        fd.append('citizenship', citizenship);
        fd.append('civil_status', civil_status);
        fd.append('no_of_children', no_of_children);
        fd.append('contact_number', contact_number);
        fd.append('email', email);
        fd.append('position', position_desired);
        fd.append('position_group', position_group);
        fd.append('applied_on', applied_on);
        fd.append('sss', sss);
        fd.append('philhealth', philhealth);
        fd.append('hdmf', hdmf);
        fd.append('residence_certificate', residence_certificate);
        fd.append('tin', tin);
        fd.append('hmo', hmo);
        fd.append('atm', atm);
        fd.append('referral', referral);

        const auth_token = getCookie('auth_token');
        if (!auth_token) {
            return;
        }

        $.ajax({
            url: 'https://mis.manalok9.com/api/v1/hris/applicants/create',
            type: 'post',
            data: fd,
            processData: false,
            contentType: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                'Authorization': 'Bearer ' + auth_token
            },
            success: function (response) {
                const res = response;
                console.log(res);

                $('.create-applicant-fields').val(''); // Clear all input fields
                _this.html('<i class="bi bi-check2-circle" style="vertical-align: 0;"></i> SAVED!');
                setTimeout(function() {
                    _this.attr('disabled', false);
                    _this.html('<i class="bi bi-check2-circle" style="vertical-align: 0;"></i> SAVE RECORD');
                    $('#applicant-details-first_name').focus();
                    retrieveApplicants();
                }, 750);
            },
            error: function (error) {
                let messageText = JSON.parse(error.message);
                let messageIcon = 'error';
                sweetAlertStatusMessage(messageText, messageIcon);
                setTimeout(function() {}, 1500);
                _this.attr('disabled', false);
                _this.html('<i class="bi bi-check2-circle" style="vertical-align: 0;"></i> SAVE RECORD');
            }
        });
    });

    function retrieveApplicants() {
		const auth_token = getCookie('auth_token');
		if (!auth_token) {
			return Promise.reject();  // Return a rejected promise if there's no auth token
		}

		return new Promise(function(resolve, reject) {
			$.ajax({
				url: 'https://mis.manalok9.com/api/v1/hris/applicants/get/all',
				type: 'get',
				processData: false,
				contentType: 'application/json',
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
					'Authorization': 'Bearer ' + auth_token
				},
				success: function(response) {
					$('#employees-table tbody').html('');
					response.data.forEach(applicant => {
						const relative_date = moment(applicant.created_at, "YYYY-MM-DD").fromNow();
						const full_name = getFullName(applicant);
						let is_verified = `<span class="info-banner-sm"><i class="bi bi-exclamation-circle" style="vertical-align: 0px;"></i></span>`;
						let is_signed = `<span class="info-banner-sm"><i class="bi bi-exclamation-circle" style="vertical-align: 0px;"></i></span>`;
						if (applicant?.meta?.is_verified === 1) {
							is_verified = `<span class="success-banner-sm"><i class="bi bi-check2-circle" style="vertical-align: 0px;"></i></span>`;
						}
						if (applicant?.meta?.is_signed === 1) {
							is_signed = `<span class="success-banner-sm"><i class="bi bi-check2-circle" style="vertical-align: 0px;"></i></span>`;
						}
						let department = applicant?.work?.position_group || 'null';

						const department_map = {
							'null': { name: 'No Department', icon: 'question-circle' },
							'admin': { name: 'Admin', icon: 'diagram-3' },
							'finance': { name: 'Finance', icon: 'currency-exchange' },
							'food_and_beverages': { name: 'Food & Beverages', icon: 'cup-hot' },
							'human_resources': { name: 'HR', icon: 'person-badge' },
							'information_technology': { name: 'IT', icon: 'building-gear' },
							'maintenance': { name: 'Maintenance', icon: 'cone-striped' },
							'marketing': { name: 'Marketing', icon: 'chat-quote' },
							'mk9_business_unit': { name: 'MK9 Business Unit', icon: 'mortarboard' },
							'operations': { name: 'Operations', icon: 'disc' },
							'online_sales_division': { name: 'OSD', icon: 'broadcast-pin' },
							'resort_and_hotel': { name: 'Resort & Hotel', icon: 'houses' },
							'sales': { name: 'Sales', icon: 'rocket-takeoff' }
						};

						const department_info = department_map[String(department)] || { name: 'No Department', icon: 'question-circle' };
						const department_icon = department_info.icon;
						const department_name = department_info.name;

						$('#employees-table tbody').append(`
							<tr class="hoverable-row" style="height: 100px;">
								<td>${applicant.assigned_id ?? 'No ID'}</td>
								<td>
									<div style="display: flex; align-items: center;">
										<div style="position: relative; width: 48px; height: 48px; flex-shrink: 0;">
											<img 
												src="https://mis.manalok9.com/public/storage/${applicant.image}" 
												class="rounded-circle" 
												style="width: 100%; height: 100%; object-fit: contain;"
											>
											<div style="position: absolute; bottom: -12px; left: -3px;" data-bs-toggle="tooltip" data-bs-placement="top" title="${is_verified ? 'Verified by HR.' : 'Not verified by HR.'}">
												${is_verified}
											</div>
											<div style="position: absolute; bottom: -12px; right: -3px;" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">
												${is_signed}
											</div>
										</div>
										<b style="font-size: 18px; margin-left: 12px;">${full_name}</b>
									</div>
								</td>
								<td>
									<i class="text-muted bi bi-${department_icon}" style="vertical-align: 0px;"></i>&nbsp;${department_name}
									<br>
									<i class="text-muted bi bi-arrow-return-right" style="vertical-align: 0px;"></i>&nbsp;<b>${applicant?.work?.position || '--'}</b>
								</td>
								<td>
									<i class="text-muted bi bi-phone" style="vertical-align: 0px;"></i>&nbsp;${applicant?.details?.contact_number || '--'}
									<br>
									<i class="text-muted bi bi-at" style="vertical-align: 0px;"></i>&nbsp;${applicant?.details?.email_address || '--'}
								</td>
								<td>
									<i class="text-muted bi bi-phone-vibrate" style="vertical-align: 0px;"></i>&nbsp;${applicant?.details?.emergency_contact || '--'}
									<br>
									<i class="text-muted bi bi-person-exclamation" style="vertical-align: 0px;"></i>&nbsp;${applicant?.details?.emergency_person || '--'}
								</td>
								<td>
									<div class="user-actions-container" style="visibility: hidden;">
										<button type="button" class="btn btn-sm-success" style="width: 65px; margin-bottom: 4px;"><i class="bi bi-check2-circle" style="vertical-align: 0px;"></i> Verify</button>
										<br>
										<button type="button" class="btn btn-sm-success" style="width: 65px; margin-bottom: 4px;"><i class="bi bi-feather" style="vertical-align: 0px;"></i> Sign</button>
										<br>
										<button type="button" class="btn btn-sm-primary" style="width: 65px;"><i class="bi bi-person-vcard-fill" style="vertical-align: 0px;"></i> Info</button>
									</div>
								</td>
							</tr>
						`);
					});
					resolve();
				},
				error: function(error) {
					let messageText = JSON.parse(error.responseText);
					let messageIcon = 'error';
					sweetAlertStatusMessage(messageText, messageIcon);
					setTimeout(function() {
						reject();
					}, 1500);
				}
			});
		});
	}
    
    let new_inquiry_visible = false;
	$('.new-btn').on('click', function() {
		if (new_inquiry_visible) {
			// hide
			new_inquiry_visible = false;
			$(this).html('<i class="bi bi-plus-square-fill"></i> New');
			$('.input-new-group').hide();
			$('.input-existing-group').show();
		} else {
			// show
			new_inquiry_visible = true;
			$(this).html('<i class="bi bi-backspace"></i> Go Back');
			$('.input-new-group').show();
			$('.input-existing-group').hide();
		}
	});

    $('.new-record-btn').on('click', function() {
        $('#new_applicant_modal').modal('toggle');
    });
    
    retrieveApplicants();

	$('.refresh-data-btn').on('click', function() {
		const _this = this;
		$(_this).addClass('tewi-large-btn-disabled');
		$(_this).find('.tewi-large-btn-icon').html(`
			<i class="spinner-border" style="width: 76px; height: 76px; font-size: 32px;"></i>
		`);

		retrieveApplicants().then(function() {
			setTimeout(function() {
				$(_this).removeClass('tewi-large-btn-disabled');
				$(_this).find('.tewi-large-btn-icon').html(`
					<i class="bi bi-arrow-clockwise"></i>
				`);
			}, 125);
		}).catch(function() {
			setTimeout(function() {
				$(_this).removeClass('tewi-large-btn-disabled');
				$(_this).find('.tewi-large-btn-icon').html(`
					<i class="bi bi-arrow-clockwise"></i>
				`);
				$(_this).find('.tewi-large-btn-tooltip').html(`
					Error: No Internet Connection
				`);
			}, 500);
		});
	});

	$('.stats-roles-card .tewi-card-body span.tewi-text-animated').each(function () {
	    $(this).prop('Counter',0).animate({
	        Counter: $(this).text()
	    }, {
	        duration: 850,
	        easing: 'swing',
	        step: function (now) {
	            $(this).text(Math.ceil(now).toLocaleString('en-US'));
	        }
	    });
	});
	function URL_add_parameter(url, param, value){
		var hash       = {};
		var parser     = document.createElement('a');

		parser.href    = url;

		var parameters = parser.search.split(/\?|&/);

		for(var i=0; i < parameters.length; i++) {
			if(!parameters[i])
				continue;

			var ary      = parameters[i].split('=');
			hash[ary[0]] = ary[1];
		}

		hash[param] = value;

		var list = [];  
		Object.keys(hash).forEach(function (key) {
			list.push(key + '=' + hash[key]);
		});

		parser.search = '?' + list.join('&');
		return parser.href;
	}
	function generateApplicantNote(first_name, last_name, timestamp, note_message, admin_id, database_id) {
		let admin_name = first_name + ' ' + last_name;
		admin_name = String(admin_name); // Convert admin_name to a string

		let avatar_bg = '#' + CryptoJS.MD5(admin_name).toString().substr(0, 6);

		let initials = first_name.charAt(0).toUpperCase() + last_name.charAt(0).toUpperCase();

		// Create formatted name
		let parsed_name = first_name + ' ' + last_name.charAt(0).toUpperCase() + '.';

		// Use moment.js to parse timestamp and format as relative time
		let relativeTime = moment(timestamp, 'Y-M-D h:mm:ss A').fromNow();

		let delete_button = '';
		if (admin_id === 'TODO: ADD ADMIN_ID') {
			delete_button = `<span style="margin-left: 8px;"><button type="button" class="applicant-preview-notes-delete-btn btn btn-primary" data-database_id="${database_id}" style="font-size: 12px; padding: 2px 4px 2px 4px;"><i class="bi bi-trash-fill"></i></button></span>`;
		}

		return `
			<div class="d-flex flex-column mt-2 mb-3" style="font-size: 12px;">
				<div class="d-flex align-items-center">
					<div class="tewi-auto-profile-pic" style="width: 16px; height: 16px; background-color: ${avatar_bg}; font-size: 10px; display: flex; justify-content: center; align-items: center;">
						${initials}
					</div>
					<div class="ml-2" style="margin-left: 5px;"><b>${parsed_name}</b> <span class="timestamp" style="font-size: 11px; margin-left: 8px; opacity: 0.8;">${relativeTime}</span>${delete_button}</div>
				</div>
				<div class="d-flex" style="margin-left: 15px; margin-top: 5px;">
					${note_message} <!-- Note message -->
				</div>
			</div>
		`;
	}
	function buildApplicantNotes(applicant_id) {
		let notes_container = $('.applicant-preview-notes-container');
		notes_container.html('');
		$('.applicant-preview-notes-container-loading').show();
		$('.applicant-preview-notes-container-empty').hide();
		$.ajax({
			'url': '',
			'type': 'GET',
			'data': {
				'applicant_id': applicant_id
			},
			'dataType': 'JSON'
		})
		.done(function (response) {
			if (response.code == 1) {
				console.log(response);
			} else if (response.code == 2) {
				$('.applicant-preview-notes-container-loading').hide();
				let maxHeight = 0;
				let notes_count = 0;
				$.each(response.data, function (index, data) {
					// Populate the product container
					let applicant_note = generateApplicantNote(data.first_name, data.last_name, data.date_added, data.note_message, data.admin_id, data.database_id)

					notes_container.append(applicant_note);
					notes_count++;
				});

				if (notes_count <= 0) {
					$('.applicant-preview-notes-container-empty').show();
				}
			}
		})
		.fail(function (code, status) {
			console.log(code);
			console.log(status);
		})
	}
	function set_update_history_relative_time() {
		$('.update-history-relative_time').each(function() {
			let time = $(this).data('time');
			let relative_time = moment(time, "YYYY-MM-DD hh:mm:ss A").fromNow();
			$(this).text(relative_time);
		});
	}
	setInterval(function() {
		// Relative time management (1 second interval)
		$('.tewi-table-relative_time').each(function() {
			let time = $(this).data('time');
			let relative_time = moment(time, "YYYY-MM-DD hh:mm:ss A").fromNow();
			$(this).text(relative_time);
		});
	}, 1000);
	function formatWithCommas(inputElement) {
		let $inputElement = $(inputElement);
		let cursorPosition = inputElement.selectionStart;
		let originalLength = $inputElement.val().length;

		let sanitizedValue = $inputElement.val().replace(/[^0-9.]/g, "");

		// Handle the case where the user inputs a decimal point at the beginning
		if (sanitizedValue.length > 0 && sanitizedValue[0] === ".") {
			sanitizedValue = "0" + sanitizedValue;
		}

		if (sanitizedValue.length > 1 && sanitizedValue[0] === "0" && sanitizedValue[1] !== ".") {
			sanitizedValue = sanitizedValue.slice(1);
		}

		let decimalSplit = sanitizedValue.split(".");
		let wholePart = decimalSplit[0];
		let decimalPart = decimalSplit.length > 1 ? decimalSplit[1].slice(0, 2) : "";
		let shouldRoundUp = decimalSplit.length > 1 && decimalSplit[1].length > 2;
		let hasTrailingDecimal = sanitizedValue[sanitizedValue.length - 1] === ".";

		if (shouldRoundUp) {
			let tempDecimal = Number("0." + decimalPart) + 0.01;
			decimalPart = Math.round(tempDecimal * 100);
		}

		$inputElement.val(wholePart.replace(/\B(?=(\d{3})+(?!\d))/g, ",") + (decimalPart !== "" ? "." + decimalPart : "") + (hasTrailingDecimal ? "." : ""));

		let newLength = $inputElement.val().length;
		cursorPosition += (newLength - originalLength);
		inputElement.setSelectionRange(cursorPosition, cursorPosition);
	}
	function validateAcesSaveButton() {
		let statusValue = $('.aces-fields-group[name="status"]').val().trim();
		let monthlySalaryValue = $('.aces-fields-group[name="monthly_salary"]').val().trim();
		let saveButton = $('.aces-save-btn');

		if (statusValue !== '' && monthlySalaryValue !== '') {
			saveButton.prop('disabled', false);
		} else {
			saveButton.prop('disabled', true);
		}
	}
	function storeFieldToLocalStorage(fieldElement) {
		let inputName = fieldElement.attr('name');
		fieldElement.on('input change', function() {
			localStorage.setItem(inputName, fieldElement.val());
		});
	}

	function repopulateFieldsFromLocalStorage() {
		$('.create-applicant-fields').each(function() {
			let inputElement = $(this);
			let inputName = inputElement.attr('name');
			let storedValue = localStorage.getItem(inputName);
			if (storedValue) {
				if (inputElement.attr('type') === 'file') {
					let dropZone = inputElement.siblings().find(".drop-zone");
					let img = $("<img>").attr("src", storedValue).css({
						"max-width": "100%",
						"max-height": "100%",
						"object-fit": "contain"
					});

					// Remove any existing images in the drop-zone before appending the new one
					dropZone.find("img").remove();
					dropZone.prepend(img);

					// Hide the drop message
					dropZone.find(".drop-message").hide();
				} else {
					inputElement.val(storedValue);
				}
			}
		});
	}

	function purgeStoredFields() {
		$('.create-applicant-fields').each(function() {
			let inputElement = $(this);
			let inputName = inputElement.attr('name');
			localStorage.removeItem(inputName);
		});
		// Purge records
		localStorage.removeItem('academic_records_data');
		localStorage.removeItem('employment_records_data');
		localStorage.removeItem('machine_operated_data');
	}
	function trimText(text, length) {
		if (text.length > length) {
			return text.substring(0, length) + "...";
		} else {
			return text;
		}
	}
	function dataURLToBlob(dataURL) {
		let parts = dataURL.split(';base64,');
		let contentType = parts[0].split(":")[1];
		let raw = window.atob(parts[1]);
		let rawLength = raw.length;
		let uInt8Array = new Uint8Array(rawLength);

		for (let i = 0; i < rawLength; ++i) {
			uInt8Array[i] = raw.charCodeAt(i);
		}

		return new Blob([uInt8Array], { type: contentType });
	}
	let droppedFiles = {}; // For drag 'n drop functionality
	function previewImage(input, dropZone) {
	    if (input.files && input.files[0]) {
	        let reader = new FileReader();
	        reader.onload = function(e) {
	            let img = new Image();
	            img.onload = function() {
	                let canvas = document.createElement('canvas');
	                let ctx = canvas.getContext('2d');

	                // Resize image
	                let maxSize = 64; // size for small-preview
	                let width = img.width;
	                let height = img.height;

	                if (width > height) {
	                    if (width > maxSize) {
	                        height *= maxSize / width;
	                        width = maxSize;
	                    }
	                } else {
	                    if (height > maxSize) {
	                        width *= maxSize / height;
	                        height = maxSize;
	                    }
	                }
	                canvas.width = width;
	                canvas.height = height;
	                ctx.drawImage(img, 0, 0, width, height);

	                // Populate small preview
	                populatePreview('.create-applicant-small-preview', canvas.toDataURL());

	                // Apply grayscale
	                let imageData = ctx.getImageData(0, 0, canvas.width, canvas.height);
	                let data = imageData.data;
	                for (var i = 0; i < data.length; i += 4) {
	                    let avg = (data[i] + data[i + 1] + data[i + 2]) / 3;
	                    data[i]     = avg; // red
	                    data[i + 1] = avg; // green
	                    data[i + 2] = avg; // blue
	                }
	                ctx.putImageData(imageData, 0, 0);

	                // Populate greyscaled preview
	                populatePreview('.create-applicant-greyscaled-preview', canvas.toDataURL());

	                // Apply pixelation (mosaic effect)
	                let pixelation = 5; // Adjust this to change the level of pixelation
	                let scaledWidth = Math.ceil(width / pixelation);
	                let scaledHeight = Math.ceil(height / pixelation);
	                let scaledCanvas = document.createElement('canvas');
	                scaledCanvas.width = scaledWidth;
	                scaledCanvas.height = scaledHeight;
	                let scaledCtx = scaledCanvas.getContext('2d');
	                scaledCtx.drawImage(img, 0, 0, scaledWidth, scaledHeight);
	                ctx.clearRect(0, 0, width, height);
	                ctx.imageSmoothingEnabled = false; // This will create the mosaic effect when we scale back up
	                ctx.drawImage(scaledCanvas, 0, 0, scaledWidth, scaledHeight, 0, 0, width, height);

	                // Populate pixelated preview
	                populatePreview('.create-applicant-pixelated-preview', canvas.toDataURL());

	                // Apply grayscale again
	                imageData = ctx.getImageData(0, 0, canvas.width, canvas.height);
	                data = imageData.data;
	                for (var i = 0; i < data.length; i += 4) {
	                    let avg = (data[i] + data[i + 1] + data[i + 2]) / 3;
	                    data[i]     = avg; // red
	                    data[i + 1] = avg; // green
	                    data[i + 2] = avg; // blue
	                }
	                ctx.putImageData(imageData, 0, 0);

	                // Populate pixelated and greyscaled preview
	                populatePreview('.create-applicant-pixelated-greyscaled-preview', canvas.toDataURL());
	            };

	            img.src = e.target.result;

	            // Remove any existing images in the drop-zone before appending the new one
	            dropZone.find("img").remove();
	            dropZone.prepend(img);

	            // Hide the drop message
	            dropZone.find(".drop-message").hide();

	            // Store the original image in localStorage
	            localStorage.setItem(input.name, e.target.result);
	        };
	        reader.readAsDataURL(input.files[0]);
	    } else {
	        // Show the drop message when no image is selected
	        dropZone.find(".drop-message").show();
	    }
	}

	function populatePreview(selector, dataUrl) {
	    let previewDiv = $(selector);
	    let img = $("<img>").attr("src", dataUrl).css({
	        "width": "calc(100% - 2px)",
	        "height": "calc(100% - 2px)",
	        "object-fit": "contain"
	    });
	    previewDiv.find("img").remove();
	    previewDiv.append(img);
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
	    let input = dropZone.parent().siblings("input[type='file']")[0];

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
	        $(this).parent().siblings("input[type='file']").click();
	    });

	    $("input[type='file']").on("change", function () {
	        let dropZone = $(this).siblings().find(dropZoneSelector);
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
	function readURL(input, identifier) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
				$('.photo-preview[data-identifier="' + identifier + '"]').attr('src', e.target.result);
				// localStorage.setItem('profileImage', e.target.result);
			}
			reader.readAsDataURL(input.files[0]);
		}
	}
	function formatPhoneNumber(inputElement) {
	    let $inputElement = $(inputElement);
	    let cursorPosition = inputElement.selectionStart;
	    let originalValue = $inputElement.val();
	    let originalLength = originalValue.length;

	    let sanitizedValue = originalValue.replace(/\D/g, "");

	    let formattedValue = "";
	    if (sanitizedValue.startsWith("09") && sanitizedValue.length > 2) {
	        formattedValue = sanitizedValue.slice(0, 4) + " " + sanitizedValue.slice(4, 7) + " " + sanitizedValue.slice(7, 11);
	    } else {
	        formattedValue = sanitizedValue;
	    }

	    let newLength = formattedValue.length;
	    $inputElement.val(formattedValue);

	    // Adjust the cursor position
	    let changeInLength = newLength - originalLength;
	    cursorPosition += changeInLength;

	    // Allow backspacing over formatting spaces
	    if (changeInLength < 0 && (cursorPosition === 4 || cursorPosition === 8)) {
	        cursorPosition--;
	    } else if (originalValue[cursorPosition - 1] === " " && changeInLength >= 0) {
	        cursorPosition++;
	    }

	    inputElement.setSelectionRange(cursorPosition, cursorPosition);
	}

	$('.create-applicant-fields[name="contact_number"], .create-applicant-fields[name="emergency_contact_number"]').on('keydown', function (event) {
	    if (event.key === 'Backspace') {
	        let cursorPosition = this.selectionStart;
	        let originalValue = this.value;
	        if (originalValue[cursorPosition - 1] === " ") {
	            event.preventDefault();
	            this.value = originalValue.slice(0, cursorPosition - 2) + originalValue.slice(cursorPosition);
	            this.setSelectionRange(cursorPosition - 2, cursorPosition - 2);
	        }
	    }
	}).on('input', function () {
	    formatPhoneNumber(this);
	});

	$(document).on('click', '.tewi-radio-btn[data-radio-group="create_applicant"]', function(e) {
	    let group = $(this).data('radio-group');
	    let value = $(this).data('radio-value');
	    let target = $(this).data('radio-target');
	    let referral_others = '.create-applicant-referral_others-container';
		$('.tewi-radio-btn[data-radio-group="create_applicant"]').addClass('tewi-inactive').removeClass('tewi-active');
		$(this).addClass('tewi-active').removeClass('tewi-inactive');

	    if (value === 'Others') {
	    	$(referral_others).show();
	    	animateShine(referral_others, 300);
	    	$(referral_others).prop('disabled', false);
	    	localStorage.setItem('referral', $(referral_others).val());
	    } else {
	    	$(referral_others).hide();
	    	$(referral_others).prop('disabled', true);
	    	localStorage.setItem('referral', value);
	    }
	});

	let stored_referral = localStorage.getItem('referral');
	let referral_others = '.create-applicant-referral_others-container';
	switch (stored_referral) {
		case 'Walk In':
			$('.tewi-radio-btn[data-radio-group="create_applicant"]').addClass('tewi-inactive').removeClass('tewi-active');
			$('.tewi-radio-btn[data-radio-group="create_applicant"][data-radio-value="Walk In"]').addClass('tewi-active').removeClass('tewi-inactive');
			$('.create-applicant-fields[name="referral"]').val('Walk In');
			break;
		case 'Job Fair':
			$('.tewi-radio-btn[data-radio-group="create_applicant"]').addClass('tewi-inactive').removeClass('tewi-active');
			$('.tewi-radio-btn[data-radio-group="create_applicant"][data-radio-value="Job Fair"]').addClass('tewi-active').removeClass('tewi-inactive');
			$('.create-applicant-fields[name="referral"]').val('Job Fair');
			break;
		case 'Social Media':
			$('.tewi-radio-btn[data-radio-group="create_applicant"]').addClass('tewi-inactive').removeClass('tewi-active');
			$('.tewi-radio-btn[data-radio-group="create_applicant"][data-radio-value="Social Media"]').addClass('tewi-active').removeClass('tewi-inactive');
			$('.create-applicant-fields[name="referral"]').val('Social Media');
			break;
		case 'Others':
			$('.tewi-radio-btn[data-radio-group="create_applicant"]').addClass('tewi-inactive').removeClass('tewi-active');
			$('.tewi-radio-btn[data-radio-group="create_applicant"][data-radio-value="Others"]').addClass('tewi-active').removeClass('tewi-inactive');
			$('.create-applicant-fields[name="referral"]').val('Others');
			$(referral_others).show();
	    	$(referral_others).prop('disabled', false);
		default:
			$('.tewi-radio-btn[data-radio-group="create_applicant"]').addClass('tewi-inactive').removeClass('tewi-active');
			$('.tewi-radio-btn[data-radio-group="create_applicant"][data-radio-value="Others"]').addClass('tewi-active').removeClass('tewi-inactive');
			$('.create-applicant-fields[name="referral"]').val('Others');
			$(referral_others).show();
	    	$(referral_others).prop('disabled', false);
			break;
	}

	// Data structures for holding records
	var academic_records_data = [];
	var employment_records_data = [];
	var machine_operated_data = [];

	// Repopulate fields from localStorage on page load
	repopulateFieldsFromLocalStorage();

	$('.create-applicant-fields').each(function() {
        storeFieldToLocalStorage($(this));
    });

	// Check if there's any stored data in localStorage
    let stored_academic_records_data = localStorage.getItem('academic_records_data');

    if (stored_academic_records_data) {
        // Parse the string back to an array
        academic_records_data = JSON.parse(stored_academic_records_data);

        // Repopulate the table with stored data
        for (let i = 0; i < academic_records_data.length; i++) {
            let record = academic_records_data[i];

            let school_name_trimmed = trimText(record.school_name, 32);
            let school_address_trimmed = trimText(record.school_address, 32);
            let highest_degree_trimmed = trimText(record.highest_degree, 32);

            let year_text = '';
            if (record.from_year && record.to_year) {
                year_text = `${record.from_year} to ${record.to_year}`;
            } else {
                year_text = record.from_year ? record.from_year : record.to_year;
            }

            // Create new row
            let newRow = `<tr style="font-size: 12px;">
                            <td><div>${record.academic_level}</div></td>
                            <td><div>${school_name_trimmed}</div></td>
                            <td><div>${school_address_trimmed}</div></td>
                            <td colspan="2"><div>${year_text}</div></td>
                            <td><div>${highest_degree_trimmed}</div></td>
                            <td>
                                <button type="button" class="academic_discard_btn btn btn-primary" style="font-size: 11px; height: 100%;" data-index="${i}">Discard</button>
                            </td>
                        </tr>`;

            // Add new row to table
            $('.records-academic-table').append(newRow);
        }
    }

    // Load employment records from localStorage
    let stored_employment_records_data = localStorage.getItem('employment_records_data');
    if (stored_employment_records_data) {
        employment_records_data = JSON.parse(stored_employment_records_data);
        employment_records_data.forEach((record, index) => {
            let employer_name_trimmed = trimText(record.employer_name, 32);
            let address_trimmed = trimText(record.address, 32);
            let position_trimmed = trimText(record.position, 32);
            let salary_trimmed = trimText(record.salary, 32);
            let cause_of_separation_trimmed = trimText(record.cause_of_separation, 32);
            
            let newRow = `<tr style="font-size: 12px;">
                            <td><div>${employer_name_trimmed}</div></td>
                            <td><div>${address_trimmed}</div></td>
                            <td><div>${record.period_covered}</div></td>
                            <td><div>${position_trimmed}</div></td>
                            <td><div>${salary_trimmed}</div></td>
                            <td><div>${cause_of_separation_trimmed}</div></td>
                            <td>
                                <button type="button" class="employment_discard_btn btn btn-primary" style="font-size: 11px; height: 100%;" data-index="${index}">Discard</button>
                            </td>
                          </tr>`;

            // Add row to table
            $('.records-employment-table').append(newRow);
        });
    }

	// Function to handle adding a new row
    $('.academic_add_btn').click(function() {
        // Get values from input fields
        var academic_level = $('.records-academic-fields[name="academic_level"]').val();
        var school_name = $('.records-academic-fields[name="school_name"]').val();
        var school_address = $('.records-academic-fields[name="school_address"]').val();
        var from_year = $('.records-academic-fields[name="from_year"]').val();
        var to_year = $('.records-academic-fields[name="to_year"]').val();
        var highest_degree = $('.records-academic-fields[name="highest_degree"]').val();

        // Create JSON object and append to array
        var academic_record = {
            "academic_level": academic_level,
            "school_name": school_name,
            "school_address": school_address,
            "from_year": from_year,
            "to_year": to_year,
            "highest_degree": highest_degree
        };

        academic_records_data.push(academic_record);

        // Save to localStorage
    	localStorage.setItem('academic_records_data', JSON.stringify(academic_records_data));

        let school_name_trimmed = trimText(school_name, 32);
        let school_address_trimmed = trimText(school_address, 32);
        let highest_degree_trimmed = trimText(highest_degree, 32);

        let year_text = '';
        if (from_year && to_year) {
        	year_text = `${from_year} to ${to_year}`;
        } else {
        	year_text = from_year ? from_year : to_year;
        }

        // Create new row
        var newRow = `<tr style="font-size: 12px;">
                        <td><div>${academic_level}</div></td>
                        <td><div>${school_name_trimmed}</div></td>
                        <td><div>${school_address_trimmed}</div></td>
                        <td colspan="2"><div>${year_text}</div></td>
                        <td><div>${highest_degree_trimmed}</div></td>
                        <td>
                            <button type="button" class="academic_discard_btn btn btn-primary" style="font-size: 11px; height: 100%;" data-index="${academic_records_data.length - 1}">Discard</button>
                        </td>
                      </tr>`;

        animateShine('.records-academic-table tr:last', 300);

        // Reset fields
        $('.records-academic-fields[name="academic_level"]').val('High School');
        $('.records-academic-fields[name="school_name"]').val('');
        $('.records-academic-fields[name="school_address"]').val('');
        $('.records-academic-fields[name="from_year"]').val('');
        $('.records-academic-fields[name="to_year"]').val('');
        $('.records-academic-fields[name="highest_degree"]').val('');
        $('.academic_add_btn').prop('disabled', true);

        // Add new row to table
        $('.records-academic-table').append(newRow);
    });

    // Add keyup event listeners to necessary fields
    $('.records-academic-fields[name="school_name"], .records-academic-fields[name="from_year"], .records-academic-fields[name="to_year"], .records-academic-fields[name="highest_degree"]').on('keyup change', function() {
    	// Get values from input fields
    	var school_name = $('.records-academic-fields[name="school_name"]').val();
    	var from_year = $('.records-academic-fields[name="from_year"]').val();
    	var to_year = $('.records-academic-fields[name="to_year"]').val();
    	var highest_degree = $('.records-academic-fields[name="highest_degree"]').val();

    	// Check if all necessary fields have values
    	if (school_name && (from_year || to_year) && highest_degree) {
        	// If they do, enable the button
    		$('.academic_add_btn').prop('disabled', false);
    	} else {
        	// If they don't, disable the button
    		$('.academic_add_btn').prop('disabled', true);
    	}
    });

    // Function to handle discarding a row
    $(document).on('click', '.academic_discard_btn', function() {
        // Get index from data attribute
        var index = $(this).data('index');

        // Remove record from array
        academic_records_data.splice(index, 1);

        // Save updated array to localStorage
    	localStorage.setItem('academic_records_data', JSON.stringify(academic_records_data));

        // Remove row
        $(this).closest('tr').remove();

        // Update indices
        $('.academic_discard_btn').each(function(i) {
            $(this).data('index', i);
        });
    });

    // Function to add a new row
	$('.employment_add_btn').click(function() {
	    // Get values from input fields
	    var employer_name = $('.records-employment-fields[name="employer_name"]').val();
	    var address = $('.records-employment-fields[name="address"]').val();
	    var period_covered = $('.records-employment-fields[name="period_covered"]').val();
	    var position = $('.records-employment-fields[name="position"]').val();
	    var salary = $('.records-employment-fields[name="salary"]').val();
	    var cause_of_separation = $('.records-employment-fields[name="cause_of_separation"]').val();

	    // Create JSON object and append to array
	    var employment_record = {
	        "employer_name": employer_name,
	        "address": address,
	        "period_covered": period_covered,
	        "position": position,
	        "salary": salary,
	        "cause_of_separation": cause_of_separation
	    };

	    employment_records_data.push(employment_record);

	    // Save to localStorage
	    localStorage.setItem('employment_records_data', JSON.stringify(employment_records_data));

	    // Trim text for display
	    let employer_name_trimmed = trimText(employer_name, 32);
	    let address_trimmed = trimText(address, 32);
	    let position_trimmed = trimText(position, 32);
	    let salary_trimmed = trimText(salary, 32);
	    let cause_of_separation_trimmed = trimText(cause_of_separation, 32);

	    // Create new row
	    var newRow = `<tr style="font-size: 12px;">
	                    <td><div>${employer_name_trimmed}</div></td>
	                    <td><div>${address_trimmed}</div></td>
	                    <td><div>${period_covered}</div></td>
	                    <td><div>${position_trimmed}</div></td>
	                    <td><div>${salary_trimmed}</div></td>
	                    <td><div>${cause_of_separation_trimmed}</div></td>
	                    <td>
	                        <button type="button" class="employment_discard_btn btn btn-primary" style="font-size: 11px; height: 100%;" data-index="${employment_records_data.length - 1}">Discard</button>
	                    </td>
	                  </tr>`;

	    animateShine('.records-employment-table tr:last', 300);

	    // Reset fields
	    $('.records-employment-fields').val('');

	    // Disable the add button
	    $('.employment_add_btn').prop('disabled', true);

	    // Add new row to table
	    $('.records-employment-table').append(newRow);
	});

	// Function to discard a row
	$(document).on('click', '.employment_discard_btn', function() {
	    let index = $(this).data('index');

	    // Remove record from data structure
	    employment_records_data.splice(index, 1);

	    // Remove row from table
	    $(this).closest('tr').remove();

	    // Save updated array to localStorage
	    localStorage.setItem('employment_records_data', JSON.stringify(employment_records_data));
	});

	$('.records-employment-fields').on('input change', function() {
	    var employer_name = $('.records-employment-fields[name="employer_name"]').val();
	    var period_covered = $('.records-employment-fields[name="period_covered"]').val();
	    var position = $('.records-employment-fields[name="position"]').val();

	    if (employer_name && period_covered && position) {
	        $('.employment_add_btn').prop('disabled', false);
	    } else {
	        $('.employment_add_btn').prop('disabled', true);
	    }
	});

	$('.machine_operated_add_btn').click(function() {
	    var machine_name = $('.records-machine_operated-fields[name="machine_name"]').val();

	    var machine_record = {
	        "machine_name": machine_name,
	    };

	    machine_operated_data.push(machine_record);

	    // Save to localStorage
	    localStorage.setItem('machine_operated_data', JSON.stringify(machine_operated_data));

	    let machine_name_trimmed = trimText(machine_name, 32);

	    var newRow = `<tr style="font-size: 12px;">
	                    <td><div>${machine_name_trimmed}</div></td>
	                    <td>
	                        <button type="button" class="machine_operated_discard_btn btn btn-primary" style="font-size: 11px; height: 100%;" data-index="${machine_operated_data.length - 1}">Discard</button>
	                    </td>
	                  </tr>`;

	    animateShine('.records-machine_operated-table tr:last', 300);

	    $('.records-machine_operated-fields[name="machine_name"]').val('');
	    $('.machine_operated_add_btn').prop('disabled', true);

	    $('.records-machine_operated-table').append(newRow);
	});

	$('.records-machine_operated-fields').on('input change', function() {
	    var machine_name = $('.records-machine_operated-fields[name="machine_name"]').val();

	    if (machine_name) {
	        $('.machine_operated_add_btn').prop('disabled', false);
	    } else {
	        $('.machine_operated_add_btn').prop('disabled', true);
	    }
	});

	$('body').on('click', '.machine_operated_discard_btn', function() {
	    var index = $(this).data('index');
	    machine_operated_data.splice(index, 1);
	    $(this).closest('tr').fadeOut(300, function() { $(this).remove(); });

	    // Save updated array to localStorage
	    localStorage.setItem('machine_operated_data', JSON.stringify(machine_operated_data));
	});

	// Load machine operated records from localStorage
	let stored_machine_operated_data = localStorage.getItem('machine_operated_data');
	if (stored_machine_operated_data) {
	    machine_operated_data = JSON.parse(stored_machine_operated_data);
	    machine_operated_data.forEach((record, index) => {
	        let machine_name_trimmed = trimText(record.machine_name, 32);
	        
	        let newRow = `<tr style="font-size: 12px;">
	                        <td><div>${machine_name_trimmed}</div></td>
	                        <td>
	                            <button type="button" class="machine_operated_discard_btn btn btn-primary" style="font-size: 11px; height: 100%;" data-index="${index}">Discard</button>
	                        </td>
	                      </tr>`;

	        // Add row to table
	        $('.records-machine_operated-table').append(newRow);
	    });
	}

	$('body').on('mouseenter', '#employees-table tr.hoverable-row', function() {
		const container = $(this).find('.user-actions-container');
		container.css({ visibility: 'visible', opacity: 0, transform: 'scale(0.9)' });
		$({ scale: 0.9, opacity: 0 }).animate({ scale: 1, opacity: 1 }, {
			duration: 300,
			easing: 'easeOutCubic',
			step: function(now, fx) {
				if (fx.prop === 'scale') {
					container.css('transform', `scale(${now})`);
				} else if (fx.prop === 'opacity') {
					container.css('opacity', now);
				}
			}
		});
	});

	$('body').on('mouseleave', '#employees-table tr.hoverable-row', function() {
		const container = $(this).find('.user-actions-container');
		container.css({ visibility: 'hidden', opacity: 0, transform: 'scale(0.9)' });
	});

	// Add the cubic bezier easing function if it's not already available
	jQuery.easing.easeOutCubic = function (x, t, b, c, d) {
		return c * ((t = t / d - 1) * t * t + 1.2) + b;
	};

	// Initialize tooltips (from Bootstrap 5 documentation)
	var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
	var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
		return new bootstrap.Tooltip(tooltipTriggerEl)
	})
});
</script>
</html>
