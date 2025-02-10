<div class="modal fade" id="new_applicant_modal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-xl " role="document" style="position: relative;">
		<div class="modal-content" style="margin-top: 100px; position: relative;">
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-12">
						<h6 class="header-horizontal-line-text-sm mt-4">
							<span>1. PERSONAL</span>
						</h6>
					</div>
					<div class="col-sm-8">
						<div class="row">
							<div class="col-sm-4">
								<label for="applicant-details-first_name" style="font-size: 12px;"><i class="bi bi-person-fill" style="vertical-align: 0;"></i> FIRST NAME</label>
								<input id="applicant-details-first_name" type="text" class="form-control create-applicant-fields" name="first_name">
							</div>
							<div class="col-sm-4">
								<label for="applicant-details-middle_name" style="font-size: 12px;"><i class="bi bi-record2-fill" style="vertical-align: 0;"></i> MIDDLE NAME</label>
								<input id="applicant-details-middle_name" type="text" class="form-control create-applicant-fields" name="middle_name">
							</div>
							<div class="col-sm-4">
								<label for="applicant-details-last_name" style="font-size: 12px;"><i class="bi bi-record2-fill" style="vertical-align: 0;"></i> LAST NAME</label>
								<input id="applicant-details-last_name" type="text" class="form-control create-applicant-fields" name="last_name">
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-sm-3">
								<label for="applicant-details-name_extension" style="font-size: 12px;"><i class="bi bi-record2-fill" style="vertical-align: 0;"></i> NAME EXTENSION</label>
								<input id="applicant-details-name_extension" type="text" class="form-control create-applicant-fields" name="name_extension">
							</div>
							<div class="col-sm-2">
								<label for="applicant-details-sex" style="font-size: 12px;"><i class="bi bi-balloon-fill" style="vertical-align: 0;"></i> SEX</label>
								<select id="applicant-details-sex" class="tewi-select text-primary create-applicant-fields" name="sex" style="display: block; width: 100%;">
									<option value="Male" selected>Male</option>
									<option value="Female">Female</option>
								</select>
							</div>
							<div class="col-sm-2">
								<label for="applicant-details-height" style="font-size: 12px;"><i class="bi bi-align-middle" style="vertical-align: 0;"></i> HEIGHT</label>
								<input id="applicant-details-height" type="text" class="form-control create-applicant-fields" name="height">
							</div>
							<div class="col-sm-2">
								<label for="applicant-details-weight" style="font-size: 12px;"><i class="bi bi-align-center" style="vertical-align: 0;"></i> WEIGHT</label>
								<input id="applicant-details-weight" type="text" class="form-control create-applicant-fields" name="weight">
							</div>
							<div class="col-sm-3">
								<label for="applicant-details-religion" style="font-size: 12px;"><i class="bi bi-ubuntu" style="vertical-align: 0;"></i> RELIGION</label>
								<input id="applicant-details-religion" type="text" class="form-control create-applicant-fields" name="religion">
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-sm-3">
								<label for="applicant-details-birth_date" style="font-size: 12px;"><i class="bi bi-brightness-alt-high-fill" style="vertical-align: 0;"></i> BIRTH DATE</label>
								<input id="applicant-details-birth_date" type="date" class="form-control create-applicant-fields tewi-select" name="birth_date">
							</div>
							<div class="col-sm-2">
								<label for="applicant-details-age" style="font-size: 12px;"><i class="bi bi-record2-fill" style="vertical-align: 0;"></i> AGE</label>
								<input id="applicant-details-age" type="text" class="form-control create-applicant-fields" name="age" readonly>
							</div>
							<div class="col-sm-7">
								<label for="applicant-details-birth_place" style="font-size: 12px;"><i class="bi bi-geo-fill" style="vertical-align: 0;"></i> BIRTH PLACE</label>
								<input id="applicant-details-birth_place" type="text" class="form-control create-applicant-fields" name="birth_place">
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-sm-6">
								<label for="applicant-details-citizenship" style="font-size: 12px;"><i class="bi bi-globe2" style="vertical-align: 0;"></i> CITIZENSHIP</label>
								<input id="applicant-details-citizenship" type="text" class="form-control create-applicant-fields" name="citizenship">
							</div>
							<div class="col-sm-3">
								<label for="applicant-details-civil_status" style="font-size: 12px;"><i class="bi bi-arrow-through-heart-fill" style="vertical-align: 0;"></i> CIVIL STATUS</label>
								<select id="applicant-details-civil_status" class="tewi-select text-primary create-applicant-fields" name="civil_status" style="display: block; width: 100%;">
									<option value="Single" selected>Single</option>
									<option value="Married">Married</option>
									<option value="Divorced">Divorced</option>
									<option value="Widowed">Widowed</option>
								</select>
							</div>
							<div class="col-sm-3">
								<label for="applicant-details-no_of_children" style="font-size: 12px;"><i class="bi bi-person-hearts" style="vertical-align: 0;"></i> NO. OF CHILDREN</label>
								<input id="applicant-details-no_of_children" type="text" class="form-control create-applicant-fields" name="no_of_children">
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-sm-6">
								<label for="applicant-details-contact_number" style="font-size: 12px;"><i class="bi bi-telephone-fill" style="vertical-align: 0;"></i> CONTACT NUMBER</label>
								<input id="applicant-details-contact_number" type="text" class="form-control create-applicant-fields" name="contact_number">
							</div>
							<div class="col-sm-6">
								<label for="applicant-details-email" style="font-size: 12px;"><i class="bi bi-at" style="vertical-align: 0;"></i> EMAIL ADDRESS</label>
								<input id="applicant-details-email" type="text" class="form-control create-applicant-fields" name="email">
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="row" style="padding-top: 5%;">
							<input class="form-control create-applicant-fields" type="file" id="create-applicant-photo" name="file" accept="image/*" required style="display:none;">
							<div class="col-sm-12 mt-1">
								<div class="drop-zone create-drop-zone" style="height: 250px;">
									<div class="drop-message">
										<i class="bi bi-download text-primary" style="font-size: 20px;"></i>
										<br>
										<span style="font-size: 14px;">Drag and drop photo here,</span>
											<br>
										<span style="font-size: 14px;">or click to browse from computer</span>
									</div>
								</div>
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-sm-3">
								<div class="create-applicant-photo-previews create-applicant-small-preview" style="height: 64px; border-radius: 100%; border: 1px solid var(--color-muted);"></div>
							</div>
							<div class="col-sm-3">
								<div class="create-applicant-photo-previews create-applicant-greyscaled-preview" style="height: 64px; border-radius: 100%; border: 1px solid var(--color-muted);"></div>
							</div>
							<div class="col-sm-3">
								<div class="create-applicant-photo-previews create-applicant-pixelated-preview" style="height: 64px; border-radius: 100%; border: 1px solid var(--color-muted);"></div>
							</div>
							<div class="col-sm-3">
								<div class="create-applicant-photo-previews create-applicant-pixelated-greyscaled-preview" style="height: 64px; border-radius: 100%; border: 1px solid var(--color-muted);"></div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 mt-2">
						<h6 class="header-horizontal-line-text-sm mt-4">
							<span>2. WORK</span>
						</h6>
					</div>
					<div class="col-sm-8">
						<div class="row">
							<div class="col-sm-5">
								<label for="applicant-details-position_desired" style="font-size: 12px;"><i class="bi bi-person-fill-gear" style="vertical-align: 0;"></i> POSITION DESIRED</label>
								<input id="applicant-details-position_desired" type="text" class="form-control create-applicant-fields" name="position_desired">
							</div>
							<div class="col-sm-4">
								<label for="applicant-details-position_group" style="font-size: 12px;"><i class="bi bi-building-fill-gear" style="vertical-align: 0;"></i> POSITION GROUP</label>
								<input id="applicant-details-position_group" type="text" class="form-control create-applicant-fields" name="position_group">
							</div>
							<div class="col-sm-3">
								<label for="applicant-details-applied_on" style="font-size: 12px;"><i class="bi bi-file-post" style="vertical-align: 0;"></i> APPLIED ON</label>
								<input id="applicant-details-applied_on" type="date" class="form-control create-applicant-fields tewi-select" name="applied_on">
							</div>
						</div>
						<div class="row mt-4">
							<div class="col-sm-4">
								<label for="applicant-details-sss" style="font-size: 12px;"><i class="bi bi-card-heading" style="vertical-align: 0;"></i> SSS</label>
								<input id="applicant-details-sss" type="text" class="form-control create-applicant-fields" name="sss">
							</div>
							<div class="col-sm-4">
								<label for="applicant-details-philhealth" style="font-size: 12px;"><i class="bi bi-card-heading" style="vertical-align: 0;"></i> PHILHEALTH</label>
								<input id="applicant-details-philhealth" type="text" class="form-control create-applicant-fields" name="philhealth">
							</div>
							<div class="col-sm-4">
								<label for="applicant-details-hdmf" style="font-size: 12px;"><i class="bi bi-card-heading" style="vertical-align: 0;"></i> HDMF / PAG-IBIG</label>
								<input id="applicant-details-hdmf" type="text" class="form-control create-applicant-fields" name="hdmf">
							</div>
						</div>
						<div class="row mt-2">
							<div class="col-sm-4">
								<label for="applicant-details-residence_certificate" style="font-size: 12px;"><i class="bi bi-card-heading" style="vertical-align: 0;"></i> RESIDENCE CERTIFICATE</label>
								<input id="applicant-details-residence_certificate" type="text" class="form-control create-applicant-fields" name="residence_certificate">
							</div>
							<div class="col-sm-4">
								<label for="applicant-details-tin" style="font-size: 12px;"><i class="bi bi-card-heading" style="vertical-align: 0;"></i> TIN</label>
								<input id="applicant-details-tin" type="text" class="form-control create-applicant-fields" name="tin">
							</div>
							<div class="col-sm-4">
								<label for="applicant-details-hmo" style="font-size: 12px;"><i class="bi bi-card-heading" style="vertical-align: 0;"></i> HMO</label>
								<input id="applicant-details-hmo" type="text" class="form-control create-applicant-fields" name="hmo">
							</div>
						</div>
						<div class="row mt-2">
							<div class="col-sm-12">
								<label for="applicant-details-atm" style="font-size: 12px;"><i class="bi bi-bank2" style="vertical-align: 0;"></i> ATM</label>
								<input id="applicant-details-atm" type="text" class="form-control create-applicant-fields" name="atm">
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="row">
							<div class="col-sm-12">
								<div class="row">
									<div class="col-sm-12">
										<label for="applicant-details-first_name" style="font-size: 12px;"><i class="bi bi-person-fill" style="vertical-align: 0;"></i> SOURCE OF APPLICATION / REFERRAL</label>
									</div>
									<input type="hidden" class="create-applicant-fields" name="referral">
									<div class="col-sm-12">
										<button type="button" class="create-applicant-referral-btn tewi-radio-btn btn btn-primary flex-grow-1" data-radio-group="create_applicant" data-radio-value="Walk In" data-radio-target=".create-applicant-fields[name='referral']" style="font-size: 12px; height: 33px;
										margin-left: 2px; margin-right: 2px;"><i class="bi bi-building-fill-check" style="vertical-align: 0;"></i> Walk In</button>
										<button type="button" class="create-applicant-referral-btn tewi-radio-btn btn btn-primary flex-grow-1" data-radio-group="create_applicant" data-radio-value="Job Fair" data-radio-target=".create-applicant-fields[name='referral']" style="font-size: 12px; height: 33px;
										margin-left: 2px; margin-right: 2px;"><i class="bi bi-flag-fill" style="vertical-align: 0;"></i> Job Fair</button>
										<button type="button" class="create-applicant-referral-btn tewi-radio-btn btn btn-primary flex-grow-1" data-radio-group="create_applicant" data-radio-value="Social Media" data-radio-target=".create-applicant-fields[name='referral']" style="font-size: 12px; height: 33px;
										margin-left: 2px; margin-right: 2px;"><i class="bi bi-messenger" style="vertical-align: 0;"></i> Soc. Med.</button>
										<button type="button" class="create-applicant-referral-btn tewi-radio-btn btn btn-primary flex-grow-1" data-radio-group="create_applicant" data-radio-value="Others" data-radio-target=".create-applicant-fields[name='referral']" style="font-size: 12px; height: 33px;
										margin-left: 2px; margin-right: 2px;"><i class="bi bi-stars" style="vertical-align: 0;"></i> Others</button>
									</div>
									<div class="col-sm-12 mt-2 create-applicant-referral_others-container" style="display: none;">
										<label for="applicant-details-referral_others" style="font-size: 12px;"><i class="bi bi-stars" style="vertical-align: 0;"></i> YOU'VE SELECTED <b>OTHERS</b>, PLEASE SPECIFY</label>
										<input id="applicant-details-referral_others" type="text" class="form-control create-applicant-fields" name="referral_others">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 mt-2">
						<h6 class="header-horizontal-line-text-sm mt-4">
							<span>3. ADDRESS</span>
						</h6>
					</div>
					<div class="col-sm-6">
						<div class="row">
							<div class="col-sm-12">
								<label for="applicant-details-address_present" style="font-size: 12px;"><i class="bi bi-geo-alt-fill" style="vertical-align: 0;"></i> PRESENT ADDRESS</label>
								<input id="applicant-details-address_present" type="text" class="form-control create-applicant-fields" name="address_present">
							</div>
							<div class="col-sm-12 mt-2">
								<label for="applicant-details-address_provincial" style="font-size: 12px;"><i class="bi bi-geo-fill" style="vertical-align: 0;"></i> PROVINCIAL ADDRESS</label>
								<input id="applicant-details-address_provincial" type="text" class="form-control create-applicant-fields" name="address_provincial">
							</div>
							<div class="col-sm-12 mt-2">
								<label for="applicant-details-address_manila" style="font-size: 12px;"><i class="bi bi-pin-map-fill" style="vertical-align: 0;"></i> MANILA ADDRESS</label>
								<input id="applicant-details-address_manila" type="text" class="form-control create-applicant-fields" name="address_manila">
							</div>
						</div>
					</div>
					<div class="col-sm-6" style="border-left: 1px solid var(--color-muted);">
						<div class="row">
							<div class="col-sm-12">
								<label for="applicant-details-emergency_person" style="font-size: 12px;"><i class="bi bi-person-check-fill" style="vertical-align: 0;"></i> PERSON TO NOTIFY IN CASE OF EMERGENCY</label>
								<input id="applicant-details-emergency_person" type="text" class="form-control create-applicant-fields" name="emergency_person">
							</div>
							<div class="col-sm-8 mt-2">
								<label for="applicant-details-emergency_contact" style="font-size: 12px;"><i class="bi bi-telephone-inbound-fill" style="vertical-align: 0;"></i> EMERGENCY CONTACT NUMBER</label>
								<input id="applicant-details-emergency_contact" type="text" class="form-control create-applicant-fields" name="emergency_contact">
							</div>
						</div>
					</div>
					<div class="col-sm-12 mt-2">
						<h6 class="header-horizontal-line-text-sm mt-4">
							<span>4. RECORDS</span>
						</h6>
					</div>
					<div class="col-sm-12 mt-1 ml-4">
						<h6 class="text-muted mt-1">
							<span style="font-size: 12px;">4.1. ACADEMIC</span>
						</h6>
					</div>
					<div class="col-sm-12">
						<table class="table tewi-table records-academic-table">
							<thead class="text-light" style="font-size: 11px;">
								<th style="width: 150px;">LEVEL</th>
								<th>SCHOOL NAME</th>
								<th>SCHOOL ADDRESS</th>
								<th style="width: 80px;">YEAR</th>
								<th style="width: 80px;"></th>
								<th style="font-size: 10px;">HIGHEST DEGREE / CERTIFICATE ATTAINED</th>
								<th style="width: 75px;"></th>
							</thead>
							<tbody>
								<tr>
									<td>
										<select class="tewi-select text-primary create-applicant-fields records-academic-fields" name="academic_level" style="display: block; width: 100%;">
											<option value="High School" selected>High School</option>
											<option value="College">College</option>
											<option value="Others">Other Courses / Special Training</option>
										</select>
									</td>
									<td>
										<input type="text" class="form-control create-applicant-fields records-academic-fields" name="school_name">
									</td>
									<td>
										<input type="text" class="form-control create-applicant-fields records-academic-fields" name="school_address">
									</td>
									<td style="position: relative;">
										<input type="text" class="form-control create-applicant-fields records-academic-fields" name="from_year">
										<div class="text-light" style="position: absolute; pointer-events: none; left: 77px; bottom: 15px;">
											-
										</div>
									</td>
									<td>
										<input type="text" class="form-control create-applicant-fields records-academic-fields" name="to_year">
									</td>
									<td>
										<input type="text" class="form-control create-applicant-fields records-academic-fields" name="highest_degree">
									</td>
									<td>
										<button type="button" class="academic_add_btn btn btn-success" style="font-size: 12px; height: 100%;" disabled><i class="bi bi-check2-circle" style="vertical-align: 0;"></i> Add</button>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-sm-12 mt-2 ml-4">
						<h6 class="text-muted mt-1">
							<span style="font-size: 12px;">4.2. EMPLOYMENT</span>
						</h6>
					</div>
					<div class="col-sm-12">
						<table class="table tewi-table records-employment-table">
							<thead class="text-light" style="font-size: 11px;">
								<th style="width: 180px;">EMPLOYER NAME</th>
								<th>ADDRESS</th>
								<th style="width: 140px;">PERIOD COVERED</th>
								<th style="width: 140px;">POSITION</th>
								<th style="width: 120px;">SALARY</th>
								<th style="width: 200px;">CAUSE OF SEPARATION</th>
								<th style="width: 75px;"></th>
							</thead>
							<tbody>
								<tr>
									<td>
										<input type="text" class="form-control create-applicant-fields records-employment-fields" name="employer_name">
									</td>
									<td>
										<input type="text" class="form-control create-applicant-fields records-employment-fields" name="address">
									</td>
									<td>
										<input type="text" class="form-control create-applicant-fields records-employment-fields" name="period_covered">
									</td>
									<td style="position: relative;">
										<input type="text" class="form-control create-applicant-fields records-employment-fields" name="position">
									</td>
									<td>
										<input type="text" class="form-control create-applicant-fields records-employment-fields" name="salary">
									</td>
									<td>
										<input type="text" class="form-control create-applicant-fields records-employment-fields" name="cause_of_separation">
									</td>
									<td>
										<button type="button" class="employment_add_btn btn btn-success" style="font-size: 12px; height: 100%;" disabled><i class="bi bi-check2-circle" style="vertical-align: 0;"></i> Add</button>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<!-- <div class="col-sm-12 mt-2 ml-4">
						<h6 class="text-muted mt-1">
							<span style="font-size: 12px;">4.3. MACHINE OPERATED</span>
						</h6>
					</div>
					<div class="col-sm-12">
						<table class="table tewi-table records-machine_operated-table">
							<thead class="text-light" style="font-size: 11px;">
								<th>MACHINE NAME</th>
								<th style="width: 75px;"></th>
							</thead>
							<tbody>
								<tr>
									<td>
										<input type="text" class="form-control create-applicant-fields records-machine_operated-fields" name="machine_name">
									</td>
									<td>
										<button type="button" class="machine_operated_add_btn btn btn-success" style="font-size: 12px; height: 100%;" disabled><i class="bi bi-check2-circle" style="vertical-align: 0;"></i> Add</button>
									</td>
								</tr>
							</tbody>
						</table>
					</div> -->
				</div>
			</div>
			<div class="error-banners warning-banner my-2 text-center" style="display: none;">
				<span class="text-center">
					<i class="bi bi-exclamation-diamond-fill" style="vertical-align: 0;"></i> Error: Failed to submit inquiry.
					<br>
					Please check your internet connection and try again.
				</span>
			</div>
			<div class="prompt-container">
			</div>
			<div class="feedback-form modal-footer" style="padding: 0;">
				<button type="button" class="modal-footer-btn create-applicant-btn"><i class="bi bi-check2-circle" style="vertical-align: 0; margin-right: 10px;"></i> SAVE RECORD</button>
			</div>
		</div>
	</div>
</div>