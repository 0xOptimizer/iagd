<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <title>Your Profile — Manalo K9</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}}">
    <link rel="stylesheet" href="{{ asset('css/style_new.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.0/dist/sweetalert2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.14.0/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.30.1/moment-with-locales.min.js" integrity="sha512-4F1cxYdMiAW98oomSLaygEwmCnIP38pb4Kx70yQYqRwLVCs3DbRumfBq82T08g/4LJ/smbFGFpmeFlQgoDccgg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
	<div class="tewi-overlay">
		<div class="commissions-floating-btn commissions-home-btn">
	        <i class="bi bi-backspace"></i>
	    </div>
	    <div class="wallet-navigation-containers navigation-home spinner-container" style="position: relative; margin-top: -100px;">
		    <img src="{{ asset('images/mk9_logo_compressed.png') }}" style="margin-right: -5px; height: 194px; width: 194px;">
		    <div style="display: flex; align-items: center; justify-content: center; height: 100%; width: 100%; position: absolute; pointer-events: none;">
		        <div class="slow-rotate" style="top: -35px;">
		            <i class="bi bi-ubuntu"></i>
		        </div>
		    </div>
            <div class="mt-2 d-flex flex-column align-items-center">
		    	<div class="d-flex justify-content-center">
                    <h6 class="profile-dashboard-text-hello_user text-primary font-clemente">Loading details, hold on...</h6>
                </div>
            </div>
		    <!-- <div class="mt-3 d-flex flex-column align-items-center">
		    	<div class="d-flex justify-content-center">
		    		<div class="tewi-card tewi-card-clickable" style="padding-bottom: 20px; width: 345px;">
		    			<div class="tewi-card-icon">
		    				<i class="bi bi-layers-fill"></i>
		    			</div>
		    			<div class="tewi-card-title">
		    				<span class="tewi-text-animated">My Balance</span>
		    			</div>
		    			<div class="tewi-card-body">
		    				<span>₱<span class="tewi-text-animated user-balance">...</span></span>
		    			</div>
		    			<div class="tewi-card-background">
		    			</div>
		    		</div>
		    	</div>
		    </div> -->
		    <!-- <div class="mt-2 d-flex flex-column align-items-center">
		    	<div class="d-flex justify-content-center">
		    		<div class="tewi-card tewi-card-clickable" style="padding-bottom: 20px; width: 345px;">
		    			<div class="tewi-card-icon">
		    				<i class="bi bi-stars"></i>
		    			</div>
		    			<div class="tewi-card-title">
		    				<span class="tewi-text-animated">My Reward Points</span>
		    			</div>
		    			<div class="tewi-card-body">
		    				<span class="tewi-text-animated user-reward_points">...</span>
		    			</div>
		    			<div class="tewi-card-background">
		    			</div>
		    		</div>
		    	</div>
		    </div> -->
            <div class="mt-2 d-flex flex-column align-items-center">
		    	<div class="d-flex justify-content-center">
		    		<div class="tewi-card tewi-card-clickable navigation-btn" data-group="register" style="padding-bottom: 20px; width: 345px;">
		    			<div class="tewi-card-icon" style="bottom: 117%;">
		    				<i class="bi bi-send-plus-fill" style="font-size: 132px;"></i>
		    			</div>
		    			<div class="tewi-card-title">
		    				<span class="tewi-text-animated">Your profile details</span>
		    			</div>
		    			<div class="tewi-card-body">
		    				<span class="tewi-text-animated user-reward_points profile-dashboard-text-nav" style="font-size: 36px;">...</span>
		    			</div>
		    			<div class="tewi-card-background">
		    			</div>
		    		</div>
		    	</div>
		    </div>
		    <div class="mt-2 d-flex flex-column align-items-center">
			    <div class="d-flex justify-content-center mb-2">
		        	<div class="text-center">
		                <a href="#" target="_blank" class="profile-dashboard-my_profile-btn btn btn-primary disabled" style="width: 170px;">
							<i class="profile-dashboard-my_profile-btn-icon bi bi-lock" style="vertical-align: 0; font-size: 20px;"></i>
		                    <br>
		                    <span>My Profile</span>
						</a>
		            </div>
		            <div class="text-center" style="margin-left: 5px;">
		                <button type="button" class="navigation-btn btn btn-primary disabled" style="width: 170px;">
		                    <i class="bi bi-lock" style="vertical-align: 0; font-size: 20px;"></i>
		                    <br>
		                    <span>My Documents</span>
		                </button>
		            </div>
		        </div>
		    </div>
		    <div class="d-flex flex-column align-items-center">
			    <div class="d-flex justify-content-center mb-2">
		        	<div class="text-center">
		                <button type="button" class="past-orders-btn btn btn-primary disabled" style="width: 111px;">
		                    <i class="bi bi-lock" style="vertical-align: 0; font-size: 20px;"></i>
		                    <br>
		                    <span>Forms</span>
		                </button>
		            </div>
		            <div class="text-center" style="margin-left: 5px;">
						<button type="button" class="profile-dashboard-link-btn btn btn-primary disabled" style="width: 111px;">
							<i class="profile-dashboard-link-btn-icon bi bi-lock" style="vertical-align: 0; font-size: 20px;"></i>
		                    <br>
		                    <span class="profile-dashboard-link-btn-text">Link</span>
						</button>
		            </div>
		            <div class="text-center" style="margin-left: 5px;">
		                <button type="button" class="claim-btn btn btn-primary disabled" style="width: 111px;">
		                    <i class="bi bi-lock" style="vertical-align: 0; font-size: 20px;"></i>
		                    <br>
		                    <span>History</span>
		                </button>
		            </div>
		        </div>
		    </div>
			<label class="text-primary mt-2" style="font-size: 12px; margin-bottom: -25px;"><i class="bi bi-exclamation-circle" style="vertical-align: 0;"></i> Locked features will be added in future updates.</label>
		</div>
		<!-- Input fields section -->
		<div class="wallet-navigation-containers commissions-create-container row" style="display: none;">
			<!-- Register -->
		    <div class="d-flex flex-column justify-content-center align-items-center mb-2 w-100">
		    	<div class="navigation-group w-100 mb-3" data-group="register" data-page="0" style="display: none; position: relative;">
		            <div class="d-flex flex-column align-items-start">
		                <label class="font-clemente text-primary mt-3 mb-2" style="font-size: 16px;"><b>Your Department</b></label>
		                <select class="profile-register-field tewi-grand-input" name="position_group">
		                	<option value="" selected disabled hidden>Choose one</option>
		                	<option value="admin" data-icon="diagram-3-fill">1. Admin</option>
                            <option value="finance" data-icon="currency-exchange">2. Finance</option>
                            <option value="food_and_beverages" data-icon="cup-hot-fill">3. Food & Beverages</option>
                            <option value="human_resources" data-icon="person-badge-fill">4. HR</option>
                            <option value="information_technology" data-icon="building-fill-gear">5. IT</option>
                            <option value="maintenance" data-icon="cone-striped">6. Maintenance</option>
                            <option value="marketing" data-icon="chat-quote-fill">7. Marketing</option>
                            <option value="mk9_business_unit" data-icon="mortarboard-fill">8. MK9 Business Unit</option>
                            <option value="operations" data-icon="disc-fill">9. Operations</option>
                            <option value="online_sales_division" data-icon="broadcast-pin">10. OSD</option>
                            <option value="resort_and_hotel" data-icon="houses-fill">11. Resort & Hotel</option>
		                	<option value="sales" data-icon="rocket-takeoff-fill">12. Sales</option>
		                </select>
                        <label class="font-clemente text-primary mt-5 mb-2" style="font-size: 16px;"><b>Your Position</b></label>
		                <input type="text" class="profile-register-field tewi-grand-input" name="position">
		            </div>
					<div class="text-muted position_group-icon" style="position: absolute; right: -24px; top: -24px; pointer-events: none;">
                        <i class="bi bi-question-circle" style="font-size: 128px;"></i>
                    </div>
		        </div>
                <div class="navigation-group w-100 mb-3" data-group="register" data-page="1" style="display: none; position: relative;">
		            <div class="d-flex flex-column align-items-start">
                        <label class="font-clemente text-primary mt-3 mb-2" style="font-size: 16px;"><b>First Name</b></label>
		                <input type="text" class="profile-register-field tewi-grand-input" name="first_name">
                        <label class="font-clemente text-primary mt-4 mb-2" style="font-size: 16px;"><b>Middle Name</b></label>
		                <input type="text" class="profile-register-field tewi-grand-input" name="middle_name">
                        <label class="font-clemente text-primary mt-4 mb-2" style="font-size: 16px;"><b>Last Name</b></label>
		                <input type="text" class="profile-register-field tewi-grand-input" name="last_name">
                        <label class="font-clemente text-primary mt-4 mb-2" style="font-size: 16px;"><b>Name Extension</b></label>
		                <input type="text" class="profile-register-field tewi-grand-input" style="width: 145px;" name="name_extension">
		            </div>
                    <div class="text-muted" style="position: absolute; right: 24px; bottom: -24px; pointer-events: none;">
                        <i class="bi bi-grip-horizontal" style="font-size: 64px;"></i>
                    </div>
		        </div>
		        <div class="navigation-group w-100 mb-3" data-group="register" data-page="2" style="display: none; position: relative;">
		            <div class="d-flex flex-column align-items-start">
						<div class="d-flex flex-column align-items-start">
							<div class="row">
								<div class="col-8">
									<div class="row">
										<label class="font-clemente text-primary mt-3 mb-2" style="font-size: 16px;"><b>Birth Date</b></label>
									</div>
									<div class="row" style="margin-left: 0px;">
										<input type="date" class="profile-register-field tewi-grand-input" name="birth_date" style="width: 145px;">
									</div>
								</div>
								<div class="col-2" style="margin-left: 42px;">
									<div class="row">
										<label class="font-clemente text-primary mt-3 mb-2" style="font-size: 16px;"><b>Age</b></label>
									</div>
									<div class="row" style="margin-left: 0px;">
										<input type="text" class="profile-register-field tewi-grand-input" name="age" style="width: 55px;" disabled>
									</div>
								</div>
							</div>
							<div class="row mt-4">
								<div class="col-12">
									<div class="row">
										<label class="font-clemente text-primary mb-2" style="font-size: 16px;"><b>Birth Place</b></label>
									</div>
									<div class="row" style="margin-left: 0px;">
										<input type="text" class="profile-register-field tewi-grand-input" name="birth_place">
									</div>
								</div>
							</div>
							<div class="row mt-4">
								<div class="col-auto">
									<div class="row">
										<label class="font-clemente text-primary mb-2" style="font-size: 16px;"><b>Height</b></label>
									</div>
									<div class="row" style="margin-left: 0px;">
										<input type="text" class="profile-register-field tewi-grand-input" name="height" style="width: 100px;">
									</div>
								</div>
								<div class="col-auto" style="margin-left: 38px;">
									<div class="row">
										<label class="font-clemente text-primary mb-2" style="font-size: 16px;"><b>Weight</b></label>
									</div>
									<div class="row" style="margin-left: 0px;">
										<input type="text" class="profile-register-field tewi-grand-input" name="weight" style="width: 100px;">
									</div>
								</div>
							</div>
							<div class="row mt-4">
								<div class="col-12">
									<div class="row">
										<label class="font-clemente text-primary mb-2" style="font-size: 16px;"><b>Gender</b></label>
									</div>
									<div class="row" style="margin-left: 0px;">
										<select class="profile-register-field tewi-grand-input" name="sex"> 
											<option value="" selected disabled hidden>Choose one</option>
											<option value="male">Male</option>
											<option value="female">Female</option>
										</select>
									</div>
								</div>
							</div>
						</div>

		            	<!-- <label class="font-clemente text-primary mb-2" style="font-size: 16px;"><b>Send to Phone Number</b></label>
		                <input type="text" class="wallet-input-fields tewi-grand-input" name="recipient_phone_number">
		                <div class="tewi-card mt-4" style="padding-bottom: 20px; width: 270px;">
			    			<div class="tewi-card-icon">
			    				<i class="bi bi-layers-fill"></i>
			    			</div>
			    			<div class="tewi-card-title">
			    				<span>Recipient</span>
			    			</div>
			    			<div class="tewi-card-body">
			    				<span class="wallet-input-preview-full_name" style="font-size: 24px;">...</span>
			    			</div>
			    			<div class="tewi-card-background">
			    			</div>
			    		</div>
			    		<label class="font-clemente text-primary mt-3 mb-2" style="font-size: 16px;"><b>Amount to Send (₱)</b></label>
		                <input type="text" class="commissions-create-fields tewi-grand-input" name="amount">
		                <label class="text-primary mt-1" style="font-size: 12px;">(Your Balance: ₱<span class="user-balance">0.00</span>)</label> -->
		            </div>
					<div class="text-muted" style="position: absolute; left: 221px; top: 54px; pointer-events: none;">
						<div class="tewi-rotations">
							<i class="bi bi-ubuntu"></i>
						</div>
                    </div>
		        </div>
				<div class="navigation-group w-100 mb-3" data-group="register" data-page="3" style="display: none; position: relative;">
		            <div class="d-flex flex-column align-items-start">
						<label class="font-clemente text-primary mt-3 mb-2" style="font-size: 16px;"><b>Citizenship</b></label>
						<input type="text" class="profile-register-field tewi-grand-input" name="citizenship" value="Filipino">
		                <label class="font-clemente text-primary mt-4 mb-2" style="font-size: 16px;"><b>Civil Status</b></label>
		                <select class="profile-register-field tewi-grand-input" name="civil_status">
							<option value="" selected disabled hidden>Choose one</option>
							<option value="single">Single</option>
							<option value="married">Married</option>
							<option value="divorced">Divorced</option>
							<option value="widowed">Widowed</option>
		                </select>
						<label class="font-clemente text-primary mt-4 mb-2" style="font-size: 16px;"><b>No. of Children</b></label>
						<input type="number" class="profile-register-field tewi-grand-input" name="no_of_children" style="width: 90px;">
		            </div>
					<div class="text-muted" style="position: absolute; right: 58px; bottom: -24px; pointer-events: none;">
                        <i class="bi bi-people-fill" style="font-size: 64px;"></i>
                    </div>
		        </div>
				<div class="navigation-group w-100 mb-3" data-group="register" data-page="4" style="display: none; position: relative;">
		            <div class="d-flex flex-column align-items-start">
                        <label class="font-clemente text-primary mt-4 mb-2" style="font-size: 16px;"><b>Contact Number</b></label>
		                <input type="text" class="profile-register-field tewi-grand-input" name="contact_number">
						<label class="font-clemente text-primary mt-4 mb-2" style="font-size: 16px;"><b>Email Address</b></label>
		                <input type="text" class="profile-register-field tewi-grand-input" name="email_address">
						<label class="font-clemente text-primary mt-4 mb-2" style="font-size: 16px;"><b>&nbsp;</b></label>
						<label class="font-clemente text-primary mt-4 mb-2" style="font-size: 16px;"><b>Person to notify for emergency</b></label>
		                <input type="text" class="profile-register-field tewi-grand-input" name="emergency_person">
						<label class="font-clemente text-primary mt-4 mb-2" style="font-size: 16px;"><b>Emergency Contact Number</b></label>
		                <input type="text" class="profile-register-field tewi-grand-input" name="emergency_contact">
		            </div>
					<div class="text-muted" style="position: absolute; right: 0px; top: -42px; transform: rotate(220deg); pointer-events: none;">
                        <i class="bi bi-phone-fill" style="font-size: 128px;"></i>
                    </div>
					<div class="text-muted" style="position: absolute; left: -90px; bottom: -29px; transform: rotate(157deg); pointer-events: none;">
                        <i class="bi bi-phone-vibrate-fill" style="font-size: 128px;"></i>
                    </div>
		        </div>
				<div class="navigation-group w-100 mb-3" data-group="register" data-page="5" style="display: none; position: relative;">
		            <div class="d-flex flex-column align-items-start">
                        <label class="font-clemente text-primary mt-4 mb-2" style="font-size: 16px;"><b>Present Address</b></label>
		                <input type="text" class="profile-register-field tewi-grand-input" name="address_present">
						<label class="font-clemente text-primary mt-4 mb-2" style="font-size: 16px;"><b>Provincial Address</b></label>
		                <input type="text" class="profile-register-field tewi-grand-input" name="address_provincial">
		            </div>
					<div class="text-muted" style="position: absolute; right: 0px; top: 0px; pointer-events: none;">
                        <i class="bi bi-geo-fill" style="font-size: 128px;"></i>
                    </div>
		        </div>
				<div class="navigation-group w-100 mb-3" data-group="register" data-page="6" style="display: none; position: relative;">
		            <div class="d-flex flex-column align-items-start">
                        <label class="font-clemente text-primary mt-4 mb-2" style="font-size: 16px;"><b>Employed Since</b></label>
		                <input type="date" class="profile-register-field tewi-grand-input" name="applied_on">
						<label class="font-clemente text-primary mt-2" style="font-size: 16px;"><b>&nbsp;</b></label>
						<label class="font-clemente text-primary mt-4 mb-2" style="font-size: 16px;"><b>SSS</b></label>
		                <input type="text" class="profile-register-field tewi-grand-input" name="sss">
						<label class="font-clemente text-primary mt-4 mb-2" style="font-size: 16px;"><b>PhilHealth</b></label>
		                <input type="text" class="profile-register-field tewi-grand-input" name="philhealth">
						<label class="font-clemente text-primary mt-4 mb-2" style="font-size: 16px;"><b>HDMF / Pag-Ibig</b></label>
		                <input type="text" class="profile-register-field tewi-grand-input" name="hdmf">
		            </div>
					<div class="text-muted" style="position: absolute; right: 0px; top: 64px; pointer-events: none;">
                        <i class="bi bi-person-vcard-fill" style="font-size: 128px;"></i>
                    </div>
		        </div>
				<div class="navigation-group w-100 mb-3" data-group="register" data-page="7" style="display: none; position: relative;">
		            <div class="d-flex flex-column align-items-start">
						<label class="font-clemente text-primary mt-4 mb-2" style="font-size: 16px;"><b>Residence Certificate No.</b></label>
		                <input type="text" class="profile-register-field tewi-grand-input" name="residence_certificate">
						<label class="font-clemente text-primary mt-4 mb-2" style="font-size: 16px;"><b>TIN</b></label>
		                <input type="text" class="profile-register-field tewi-grand-input" name="tin">
						<label class="font-clemente text-primary mt-4 mb-2" style="font-size: 16px;"><b>HMO</b></label>
		                <input type="text" class="profile-register-field tewi-grand-input" name="hmo">
						<label class="font-clemente text-primary mt-4 mb-2" style="font-size: 16px;"><b>ATM No.</b></label>
		                <input type="text" class="profile-register-field tewi-grand-input" name="atm">
		            </div>
					<div class="text-muted" style="position: absolute; right: 164px; top: 128px; pointer-events: none;">
                        <i class="bi bi-credit-card-2-front-fill" style="font-size: 128px;"></i>
                    </div>
		        </div>
		        <div class="navigation-group w-100 mb-3" data-group="register" data-page="8" style="display: none;">
		            <div class="d-flex flex-column align-items-start">
						<div class="mb-2 ms-auto me-auto font-clemente" style="font-size: 16px;">
		            		<i class="bi bi-person-bounding-box" style="vertical-align: 0;"></i> Your Photo
		            	</div>
						<div class="text-center">
						<input class="form-control self-input-new-fields-fields" type="file" id="self-input-photo" name="file" accept="image/*" required="" style="display:none;">
							<div class="drop-zone create-drop-zone">
								<div class="drop-message">
									<i class="bi bi-download text-primary" style="font-size: 20px;"></i>
									<br>
									<span style="font-size: 14px;">Drag and drop your photo here,</span>
										<br>
									<span style="font-size: 14px;">or press to browse from your device</span>
								</div>
							</div>
							<label class="text-primary mt-2" style="font-size: 12px; margin-bottom: -25px;"><i class="bi bi-exclamation-circle" style="vertical-align: 0;"></i> Please take a moment to review your details.</label>
						</div>
		            	<!-- <div class="mb-2 ms-auto me-auto font-clemente" style="font-size: 16px;">
		            		<i class="bi bi-receipt-cutoff" style="vertical-align: 0;"></i> Transfer Summary
		            	</div>
		            	<label class="text-primary mt-1" style="font-size: 12px;">You are sending to...</label>
		                <div class="tewi-card" style="padding-bottom: 20px; width: 270px;">
			    			<div class="tewi-card-title">
			    				<span style="font-size: 32px;">...</span>
			    			</div>
			    			<div class="tewi-card-body">
			    			</div>
			    			<div class="tewi-card-background" style="position: relative;">
			    			</div>
			    		</div>
			    		<label class="text-primary mt-2" style="font-size: 12px;">The amount of...</label>
		                <div class="tewi-card tewi-progress-container" style="padding-bottom: 40px; width: 270px;">
			    			<div class="tewi-card-title">
			    				<span style="font-size: 32px;">₱<span class="commissions-create-potential_commission">0.00</span></span>
			    			</div>
			    			<div class="tewi-card-body">
			    			</div>
			    			<div class="tewi-card-background" style="position: relative;">
			    				<div style="display: flex; align-items: center; justify-content: center; height: 100%; width: 100%; position: absolute; pointer-events: none;">
							        <div class="tewi-rotations" style="top: 50px; left: 115px;">
							            <i class="bi bi-ubuntu"></i>
							        </div>
							    </div>
			    			</div>
			    		</div>
			    		<label class="text-primary mt-4" style="font-size: 12px; margin-bottom: -25px;"><i class="bi bi-exclamation-circle" style="vertical-align: 0;"></i> Hold the pay button to initiate transfer.</label> -->
		            </div>
		        </div>
		        <!-- Sales -->
		        <div class="navigation-group w-100 mb-3" data-group="sales" data-page="0" style="display: none;">
		            <div class="d-flex flex-column align-items-start">
		                <label class="font-clemente text-primary mb-2" style="font-size: 16px;"><b>Client</b></label>
		                <input type="text" class="commissions-create-fields tewi-grand-input" name="client_name">
		                <select class="commissions-create-fields tewi-grand-input mt-4" name="client_type">
		                	<option value="dealer">Dealer</option>
		                	<option value="direct_dealer">Direct Dealer</option>
		                	<option value="wholesaler">Wholesaler</option>
		                	<option value="others">Others</option>
		                </select>
		            </div>
		        </div>
		        <div class="navigation-group w-100 mb-3" data-group="sales" data-page="1" style="display: none;">
		            <div class="d-flex flex-column align-items-start">
		                <label class="font-clemente text-primary mb-2" style="font-size: 16px;"><b>Product</b></label>
		                <select class="commissions-create-fields tewi-grand-input" name="product">
		                </select>
		                <select class="commissions-create-fields tewi-grand-input mt-4 mb-4" name="order_type">
		                	<option value="new_order">New Order</option>
		                	<option value="reorder">Reorder</option>
		                </select>
		                <label class="font-clemente text-primary mt-3 mb-2" style="font-size: 16px;"><b>Quantity</b></label>
		                <input type="text" class="commissions-create-fields tewi-grand-input" name="quantity">
		            </div>
		        </div>
		        <div class="navigation-group w-100 mb-3" data-group="sales" data-page="2" style="display: none;">
		            <div class="d-flex flex-column align-items-start">
		                <label class="font-clemente text-primary mb-2" style="font-size: 16px;"><b>Total Amount (₱)</b></label>
		                <input type="text" class="commissions-create-fields tewi-grand-input" name="amount">
		                <div class="tewi-card mt-4" style="padding-bottom: 20px; width: 270px;">
			    			<div class="tewi-card-icon">
			    				<i class="bi bi-layers-fill"></i>
			    			</div>
			    			<div class="tewi-card-title">
			    				<span>Estimated Commission</span>
			    			</div>
			    			<div class="tewi-card-body">
			    				<span class="adjustable-inquiries_found tewi-text-animated" style="font-size: 32px;">₱<span class="commissions-create-potential_commission" style="font-size: 32px;">0.00</span></span>
			    			</div>
			    			<div class="tewi-card-background">
			    			</div>
			    		</div>
		            </div>
		        </div>
		        <div class="navigation-group w-100 mb-3" data-group="sales" data-page="3" style="display: none;">
		            <div class="d-flex flex-column align-items-start">
		                <label class="font-clemente text-primary mb-2" style="font-size: 16px;"><b>Payment Method</b></label>
		                <select class="commissions-create-fields tewi-grand-input" name="payment_method">
		                	<option value="cash">Cash</option>
		                	<option value="gcash">GCash</option>
		                	<option value="bank">Bank</option>
		                	<option value="others">Others</option>
		                </select>
		                <label class="font-clemente text-primary mt-4 mb-2" style="font-size: 16px;"><b>Reference Number</b></label>
		                <input type="text" class="commissions-create-fields tewi-grand-input" name="reference_number">
		                <label class="font-clemente text-primary mt-4 mb-2" style="font-size: 16px;"><b>Payment Date</b></label>
		                <input type="date" class="commissions-create-fields tewi-grand-input date-select" name="payment_date" value="<?=date('Y-m-d');?>">
		            </div>
		        </div>
		        <div class="navigation-group w-100 mb-3" data-group="sales" data-page="4" style="display: none;">
		            <div class="d-flex flex-column align-items-start">
		                <label class="font-clemente text-primary mb-2" style="font-size: 16px;"><b>Upload Receipt</b></label>
		                <input class="form-control" type="file" id="commissions-create-receipt" name="receipt" accept="image/*" required style="display:none;">
						<div class="drop-zone create-drop-zone" style="height: 250px;">
							<div class="drop-message">
								<i class="bi bi-download text-primary" style="font-size: 20px;"></i>
								<br>
								<span style="font-size: 14px;">Drag and drop receipt photo here,</span>
									<br>
								<span style="font-size: 14px;">or press to browse from your files</span>
							</div>
						</div>
		            </div>
		        </div>
		        <div class="navigation-group w-100 mb-3" data-group="sales" data-page="5" style="display: none;">
		            <div class="d-flex flex-column align-items-start">
		                <label class="font-clemente text-primary mb-2" style="font-size: 16px;"><b>Additional Remarks</b></label>
		                <input type="text" class="commissions-create-fields tewi-grand-input" name="remarks">
		            </div>
		        </div>
				<div class="navigation-group w-100 mb-3" data-group="link" data-page="0" style="display: none; position: relative;">
		            <div class="d-flex flex-column align-items-start">
                        <label class="font-clemente text-primary mt-5 mb-2" style="font-size: 16px;"><b>Account UUID to Link</b></label>
		                <input type="text" class="profile-link-field tewi-grand-input" name="uuid">
						<label class="text-primary mt-2" style="font-size: 12px; margin-bottom: -25px;"><i class="bi bi-exclamation-circle" style="vertical-align: 0;"></i> Place the code given by HR or IT above.</label>
						<hr>
						<div class="tewi-card mt-4" style="padding-bottom: 20px; width: 270px;">
			    			<div class="tewi-card-icon">
			    				<i class="bi bi-layers-fill"></i>
			    			</div>
			    			<div class="tewi-card-title">
			    				<span class="profile-link-find_user-assigned_id">...</span>
			    			</div>
			    			<div class="tewi-card-body">
			    				<span class="profile-link-find_user-name tewi-text-animated" style="font-size: 32px;">...</span>
			    			</div>
			    			<div class="tewi-card-background">
			    			</div>
			    		</div>
						<label class="text-primary mt-2" style="font-size: 12px; margin-bottom: -25px;"><i class="bi bi-exclamation-circle" style="vertical-align: 0;"></i> If you sync, it will switch your current profile.</label>
		            </div>
					<div class="text-muted" style="position: absolute; right: -24px; top: -24px; pointer-events: none;">
                        <i class="bi bi-cloud-arrow-down-fill" style="font-size: 128px;"></i>
                    </div>
		        </div>
		        <div class="d-flex justify-content-center w-100 mt-4">
		            <div class="text-center">
		                <button type="button" class="cycle-buttons cycle-back-btn btn btn-primary" style="width: 90px; height: 50px; background: transparent; font-size: 15px; margin-right: 2px;">
		                    <i class="bi bi-caret-left" style="vertical-align: 0;"></i> <span>Back</span>
		                </button>
		            </div>
		            <div class="text-center">
		                <button type="button" class="cycle-buttons cycle-continue-btn btn btn-primary" style="width: 175px; height: 50px; font-size: 15px;">
		                    <span>Continue</span> <i class="bi bi-caret-right-fill" style="vertical-align: 0;"></i>
		                </button>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- Receipt -->
		<div class="wallet-navigation-containers page-receipt spinner-container" style="position: relative; margin-top: -100px; display: none;">
			<div class="page-navigation-group w-100 mb-3 text-center" data-group="loading" data-page="0" style="display: none;">
		        <i class="spinner-border" style="width: 48px; height: 48px;"></i>
		        <p><b class="font-clemente">Creating receipt 😀</b></p>
	        </div>
		    <div class="page-navigation-group w-100 mb-3" data-group="receipt" data-page="0" style="display: none;">
	            <div class="d-flex flex-column align-items-start">
	            	<div class="mb-2 ms-auto me-auto font-clemente" style="font-size: 16px;">
	            		<i class="bi bi-receipt-cutoff" style="vertical-align: 0;"></i> Internal Transfer Receipt
	            	</div>
	            	<label class="text-primary mt-1" style="font-size: 12px;">You are sending to...</label>
	                <div class="tewi-card" style="padding-bottom: 20px; width: 270px;">
		    			<div class="tewi-card-title">
		    				<span style="font-size: 32px;">...</span>
		    			</div>
		    			<div class="tewi-card-body">
		    			</div>
		    			<div class="tewi-card-background" style="position: relative;">
		    			</div>
		    		</div>
		    		<label class="text-primary mt-2" style="font-size: 12px;">The amount of...</label>
	                <div class="tewi-card tewi-progress-container" style="padding-bottom: 40px; width: 270px;">
		    			<div class="tewi-card-title">
		    				<span style="font-size: 32px;">₱<span class="commissions-create-potential_commission">0.00</span></span>
		    			</div>
		    			<div class="tewi-card-body">
		    			</div>
		    			<div class="tewi-card-background" style="position: relative;">
		    				<div style="display: flex; align-items: center; justify-content: center; height: 100%; width: 100%; position: absolute; pointer-events: none;">
						        <div class="tewi-rotations" style="top: 50px; left: 115px;">
						            <i class="bi bi-ubuntu"></i>
						        </div>
						    </div>
		    			</div>
		    		</div>
		    		<label class="text-primary mt-4" style="font-size: 12px; margin-bottom: -25px;"><i class="bi bi-exclamation-circle" style="vertical-align: 0;"></i> Hold the pay button to initiate transfer.</label>
	            </div>
	        </div>
		</div>
	    <ul class="circles" data-circles_group="blur">
	        <li class="circles-animation-slow" style="background: rgba(255, 175, 75, 0.05);"></li>
	        <li class="circles-animation-slow" style="background: rgba(255, 175, 75, 0.05);"></li>
	        <li class="circles-animation-slow" style="background: rgba(255, 175, 75, 0.05);"></li>
	        <li class="circles-animation-slow" style="background: rgba(255, 175, 75, 0.05);"></li>
	        <li class="circles-animation-slow" style="background: rgba(255, 175, 75, 0.05);"></li>
	        <li class="circles-animation-slow" style="background: rgba(255, 175, 75, 0.05);"></li>
	        <li class="circles-animation-slow" style="background: rgba(255, 175, 75, 0.05);"></li>
	    </ul>
	</div>
</div>

<script>
let current_uuid = localStorage.getItem('uuid');
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
                    "linear-gradient(225deg, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.5) 50%, rgba(255, 255, 255, 0) 100%)",
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
function getUserAvatar(client_name) {
	client_name = String(client_name); // Convert client_name to a string

    let avatar_bg = '#' + CryptoJS.MD5(client_name).toString().substr(0, 6);
    let client_name_array = [];
    try {
        client_name_array = client_name.split(" ");
    } catch (error) {
        console.error("Error splitting client_name:", error);
    }

    let initials = "";
    client_name_array.forEach((name) => {
        if (initials.length <= 1) {
            initials += name.charAt(0).toUpperCase();
        }
    });

    let parsed_name = client_name;
    if (parsed_name.length > 32) {
        parsed_name = parsed_name.substring(0, 32);
        parsed_name = parsed_name + '...';
    }

    return `
        <div class="d-flex align-items-center ml-2">
            <div class="tewi-auto-profile-pic" style="width: 24px; height: 24px; background-color: ${avatar_bg}; font-size: 12px; display: flex; justify-content: center; align-items: center; margin-left: 15px;">
                ${initials}
            </div>
            <div class="ml-2" style="margin-left: 5px;">${parsed_name}</div>
        </div>
    `;
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
function storeFieldToLocalStorage(fieldElement) {
    let inputName = fieldElement.attr('name');
    fieldElement.on('input change', function() {
        localStorage.setItem(inputName, fieldElement.val());
    });
}

function repopulateFieldsFromLocalStorage() {
    $('.commissions-create-fields').each(function() {
        let inputElement = $(this);
        let inputName = inputElement.attr('name');
        let storedValue = localStorage.getItem(inputName);
        if (storedValue) {
            if (inputElement.attr('type') === 'file') {
                let dropZone = inputElement.parent().siblings(".drop-zone");
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
	$('.commissions-create-fields').each(function() {
		let inputElement = $(this);
		let inputName = inputElement.attr('name');
		localStorage.removeItem(inputName);
	});
}
function buildUserWallet() {
    // fetch user_id from the server-side session
    $.ajax({
        url: '/api/session_user_id',
        type: 'GET',
        dataType: 'JSON',
        success: function(response) {
            const user_id = response.user_id;
            console.log('user_id', user_id);
            // make the request to get the wallet details
            $.ajax({
                'url': `/api/v1/users/wallet/${user_id}`,
                'type': 'GET',
                'dataType': 'JSON'
            }) 
            .done(function (response) {
            	console.log('response', response);
	            const getFormattedAmount = (amount) => amount ? parseFloat(amount).toLocaleString('en-US', {minimumFractionDigits: 2, maximumFractionDigits: 2}) : '0.00';

	            $('.user-balance').html(getFormattedAmount(response.wallet.balance));
	            $('.user-reward_points').html(getFormattedAmount(response.wallet.reward_points));
	            console.log('response.wallet.balance', response.wallet.balance);
	            console.log('response.wallet.reward_points', response.wallet.reward_points);
            })
            .fail(function (code, status) {
                console.log(code);
                console.log(status);
            })
        }
    });
}
function getUserFromPhone($phone_number) {
    $.ajax({
        'url': `/api/v1/users/phone/${phone_number}`,
        'type': 'GET',
        'dataType': 'JSON'
    }) 
    .done(function (response) {
    	console.log('response', response);
    })
    .fail(function (code, status) {
        console.log(code);
        console.log(status);
    })
}
function animateElement(selector, startCss, endCss, duration, complete) {
    let originalCss = {
        left: $(selector).css('left'),
        opacity: $(selector).css('opacity')
    };

    $(selector).css(startCss).show().animate(endCss, duration, function() {
        $(this).css(originalCss);
        if (typeof complete === 'function') complete();
    });
}
$(document).ready(function() {
	var employees_table;
	var aces_table;
	var get_tab = "";
	var get_filter_by = "";
	var get_filter_by_query = "";
	let droppedFiles = {}; // For drag 'n drop functionality
	buildUserWallet();
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
	            localStorage.setItem(input.name, e.target.result);

	            // Remove any existing images in the drop-zone before appending the new one
	            dropZone.find("img").remove();
	            dropZone.prepend(img);

	            // Hide the drop message
	            dropZone.find(".drop-message").hide();
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
	$('.switchable-tabs').on('click', function() {
		let group = $(this).data('group');
		$('.switchable-tabs').addClass('tewi-tab-hoverable');
		$('.switchable-tabs').removeClass('tewi-tab-active');
		$(this).addClass('tewi-tab-active');
		$(this).removeClass('tewi-tab-hoverable');
		$('.container-groups').hide();
		$('.container-groups[data-group=' + group + ']').show();
		$('.container-groups[data-group="always-shown"]').show();
		new_url = URL_add_parameter(location.href, 'tab', group);
		window.history.replaceState(location.href, 'test', new_url);
		if (group == 'employees') {
			if (employees_table instanceof jQuery.fn.dataTable.Api == false) {
				employees_table = buildEmployeesDataTable();
			}
		} else if (group == 'aces') {
			if (aces_table instanceof jQuery.fn.dataTable.Api == false) {
				aces_table = buildAcesDataTable();
			}
		}
	});
	$("body").on( 
	    "webkitAnimationEnd oanimationend msAnimationEnd animationend",
	    function(e) {
	        $(e.target).removeClass("shine");
	        $(e.target).removeClass("shine2");
	        $(e.target).removeClass("shine3");
			$(e.target).removeClass("shine-warning-background");
	        $(e.target).removeClass("hide-scroll");
	    }
	);
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
	$('.employees_table-export-excel').on('click', function () {
        employees_table.button('0').trigger();
    });
    $('.employees_table-export-csv').on('click', function () {
        employees_table.button('1').trigger();
    });
	$('#table-search').on('keyup change', function(){
		console.log('test');
		employees_table.search($(this).val()).draw();
	});
	$('.container-groups').hide();
	$('.container-groups[data-group=""]').show();
	if (get_tab == 'employees') {
		if (employees_table instanceof jQuery.fn.dataTable.Api == false) {
			employees_table = buildEmployeesDataTable(get_filter_by, get_filter_by_query);
		}
	} else if (get_tab == 'aces') {
		if (aces_table instanceof jQuery.fn.dataTable.Api == false) {
			aces_table = buildAcesDataTable(get_filter_by, get_filter_by_query);
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

	$('.wallet-input-fields[name="recipient_phone_number"]').on('keydown', function (event) {
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

	var current_navigation = 'return';
    let url_referrer = "<?=$_SERVER['HTTP_REFERER'] ?? '';?>";

    function updateHomeButtonDisplay(current_navigation) {
    	if (current_navigation === 'home') {
    		$('.commissions-home-btn').html('<i class="bi bi-house-fill"></i>');
    	} else if (current_navigation === 'return') {
    		$('.commissions-home-btn').html('<i class="bi bi-backspace"></i>');
    	}
    }

    let currentGroup = '';
	let currentPage = 0;
	let totalPages = $(".navigation-group").length;

    $('body').on('click', '.navigation-btn', function() {
	    let group = $(this).data('group');
	    console.log("Clicked group: ", group);
	    currentGroup = group;
	    totalPages = $(`.navigation-group[data-group="${group}"]`).length;
	    currentPage = 0;
	    console.log("Total pages for group: ", totalPages);
	    $(".cycle-continue-btn").html(`Continue <i class="bi bi-caret-right-fill" style="vertical-align: 0;"></i>`);
	    animateShine(this, 200);
	    $(this).prop('disabled', true);

		updatePageDisplay();

	    // Store original position values
	    let origHomePosition = $('.navigation-home').css('position');

	    // Ensure elements are absolutely positioned to avoid collision
	    $('.navigation-home').css('position', 'absolute');

	    // Add CSS animation classes
	    $('.navigation-home').addClass('slide-to-left');

	    $('.navigation-group').hide();
	    $(`.navigation-group[data-group="${group}"][data-page="0"]`).show().addClass('slide-from-right');
	    $('.commissions-create-container').show().addClass('slide-from-right');

	    setTimeout(() => {
	        $('.navigation-home').hide().removeClass('slide-to-left').css('position', origHomePosition);
	        $('.navigation-group').removeClass('slide-from-right');
	        $('.commissions-create-container').removeClass('slide-from-right');

	        // Enable the button again
	        $(this).prop('disabled', false);
	        current_navigation = 'home';
	        updateHomeButtonDisplay(current_navigation);
	    }, 300);

	    new_url = URL_add_parameter(location.href, 'group', currentGroup);
	    new_url = URL_add_parameter(new_url, 'page', "0");
	    window.history.replaceState(location.href, 'navigation', new_url);
	});

	$('.sales-data-btn').on('click', function() {
		animateShine(this, 250);
		$(this).prop('disabled', true);
		setTimeout(() => {
			$(this).prop('disabled', false);
			$('.navigation-home').hide();
			$('.commissions-sales-container').show();
			current_navigation = 'home';
	    	updateHomeButtonDisplay(current_navigation);
	    	buildPastOrdersCards();
		}, 300);
	});

	// Create order form handler
	function resetToChoicesPage(hard_reset = false) {
	    currentPage = 0;
	    updatePageDisplay();
	   	current_navigation = 'return';
	    updateHomeButtonDisplay(current_navigation);

	    $(".wallet-navigation-containers").hide();
	    $(".navigation-home").fadeIn('fast');

	    if (hard_reset) {
		    // Reset input fields
			$(".profile-register-field").attr("disabled", false);

		    resetDropZone('.create-drop-zone');
		    $('.commissions-create-potential_commission').html('0.00');
		    $('.commissions-create-fields').val('');
		    $('#commissions-create-receipt').val('');
		    $('#commissions-affiliate-receipt').val('');
		    $(".commissions-create-fields").attr("disabled", false);
	        $(".cycle-continue-btn").attr("disabled", false);
	        $(".cycle-continue-btn").html('Continue');
		    $('.create-drop-zone').removeClass('dropped').css('background-image', 'none');
		    $('.create-drop-zone').find('.drop-message').show();
		    $('.affiliate-drop-zone').removeClass('dropped').css('background-image', 'none');
		    $('.affiliate-drop-zone').find('.drop-message').show();
		    $('.tewi-progress-btn').prop('disabled', false);

		}

		// Link
		$('.profile-link-field[name="uuid"]').val(current_uuid);
	}

	function defaultUserDetailsState() {
		$('.profile-dashboard-text-nav').text('Register');
		$('.profile-dashboard-text-hello_user').text('Hello! Please register below.');
		$('.profile-dashboard-link-btn').attr('data-group', 'link');
		$('.profile-dashboard-link-btn').removeClass('disabled').addClass('navigation-btn');
		$('.profile-dashboard-link-btn-icon').removeClass('bi-lock').addClass('bi-link');
		$('.profile-dashboard-link-btn-text').text('Link');
	}

	let isUpdate = false;
	function getUserDetails() {
		isUpdate = false;
	    $('.profile-dashboard-text-nav').text('...');
		$('.profile-dashboard-text-hello_user').text('Loading details, hold on...');
		$('.profile-dashboard-my_profile-btn').attr('href', '#');
		$('.profile-dashboard-my_profile-btn').addClass('disabled');
		$('.profile-dashboard-my_profile-btn-icon').removeClass('bi-qr-code-scan').addClass('bi-lock');

		$(".profile-register-field").each(function () {
			$(this).val(""); // clear fields
		});

		if (current_uuid) {
			$.ajax({
				"url": `https://mis.manalok9.com/api/v1/no-auth/hris/applicants/info/${current_uuid}`,
				"type": "GET",
				"contentType": false,
				"processData": false,
				"dataType": "JSON"
			})
			.done(function (response) {
				if (response.status !== 'success') {
					console.log('No UUID to get.');
					defaultUserDetailsState();
				}
				if (response.status == 'success') {
					isUpdate = true;
					$('.profile-dashboard-text-nav').text('Update');
					$('.profile-dashboard-text-hello_user').text(`Hello, ${response.data.first_name}!`);
					$('.profile-dashboard-my_profile-btn').attr('href', `https://hris.manalok9.com/id/${current_uuid}`);
					$('.profile-dashboard-my_profile-btn').removeClass('disabled');
					$('.profile-dashboard-my_profile-btn-icon').removeClass('bi-lock').addClass('bi-qr-code-scan');
					$('.profile-dashboard-link-btn').attr('data-group', 'link');
					$('.profile-dashboard-link-btn').removeClass('disabled').addClass('navigation-btn');
					$('.profile-dashboard-link-btn-icon').removeClass('bi-lock').addClass('bi-link');
					$('.profile-dashboard-link-btn-text').text('Account');

					$('.profile-register-field[name="position_group"]').val(response?.data?.work?.position_group || '').trigger('change');
					$('.profile-register-field[name="position"]').val(response?.data?.work?.position || '');

					$('.profile-register-field[name="first_name"]').val(response?.data?.first_name || '');
					$('.profile-register-field[name="middle_name"]').val(response?.data?.middle_name || '');
					$('.profile-register-field[name="last_name"]').val(response?.data?.last_name || '');
					$('.profile-register-field[name="name_extension"]').val(response?.data?.name_extension || '');

					$('.profile-register-field[name="birth_date"]').val(response?.data?.details?.birth_date || '').trigger('change');
					$('.profile-register-field[name="birth_place"]').val(response?.data?.details?.birth_place || '');
					$('.profile-register-field[name="height"]').val(response?.data?.details?.height || '');
					$('.profile-register-field[name="weight"]').val(response?.data?.details?.weight || '');
					$('.profile-register-field[name="sex"]').val(response?.data?.details?.gender || '');

					$('.profile-register-field[name="citizenship"]').val(response?.data?.details?.citizenship || '');
					$('.profile-register-field[name="civil_status"]').val(response?.data?.details?.civil_status || '');
					$('.profile-register-field[name="no_of_children"]').val(response?.data?.details?.no_of_children || '');

					$('.profile-register-field[name="contact_number"]').val(response?.data?.details?.contact_number || '');
					$('.profile-register-field[name="email_address"]').val(response?.data?.details?.email_address || '');
					$('.profile-register-field[name="emergency_person"]').val(response?.data?.details?.emergency_person || '');
					$('.profile-register-field[name="emergency_contact"]').val(response?.data?.details?.emergency_contact || '');

					$('.profile-register-field[name="address_present"]').val(response?.data?.details?.address_present || '');
					$('.profile-register-field[name="address_provincial"]').val(response?.data?.details?.address_provincial || '');

					$('.profile-register-field[name="applied_on"]').val(response?.data?.work?.applied_on || '');
					$('.profile-register-field[name="sss"]').val(response?.data?.work?.sss || '');
					$('.profile-register-field[name="philhealth"]').val(response?.data?.work?.philhealth || '');
					$('.profile-register-field[name="hdmf"]').val(response?.data?.work?.hdmf || '');

					$('.profile-register-field[name="residence_certificate"]').val(response?.data?.work?.residence_certificate || '');
					$('.profile-register-field[name="tin"]').val(response?.data?.work?.tin || '');
					$('.profile-register-field[name="hmo"]').val(response?.data?.work?.hmo || '');
					$('.profile-register-field[name="atm"]').val(response?.data?.work?.atm || '');

					const img = $("<img>").attr("src", `https://mis.manalok9.com/public/storage/${response?.data?.image || 'default.png'}`).css({
						"max-width": "100%",
						"max-height": "100%",
						"object-fit": "contain"
					});

					$('.drop-zone').find("img").remove();
					$('.drop-zone').prepend(img);
					$('.drop-zone').find(".drop-message").hide();
				}
				console.log(response);
			})
			.fail(function (code, status) {
				console.log(`Failed to get user details: ${code}`);
				defaultUserDetailsState();
			});
		} else {
			console.log('No UUID to get.');
			defaultUserDetailsState();
		}
	}

	function submitProfileRegister() {
		let form_data = new FormData();

		$(".profile-register-field").each(function () {
			let fieldName = $(this).attr("name");
			let fieldValue = $(this).val();
			form_data.append(fieldName, fieldValue);
		});

		let photoInput = $("#self-input-photo")[0];
		if (photoInput.files.length > 0) {
			form_data.append("image", photoInput.files[0]);
		}

		if (isUpdate) {
			form_data.append("uuid", current_uuid);
		}

		$.ajax({
			"url": "https://mis.manalok9.com/api/v1/no-auth/hris/applicants/create/self",
			"type": "POST",
			"data": form_data,
			"contentType": false,
			"processData": false,
			"dataType": "JSON",
			"beforeSend": function () {
				$(".cycle-continue-btn").attr("disabled", true);
				$(".profile-register-field").attr("disabled", true);
				$(".cycle-continue-btn").html('<span>Submitting...</span> <i class="spinner-border spinner-border-sm" style="vertical-align: -0.1rem;"></i>');
			}
		})
		.done(function (response) {
			$(".cycle-continue-btn").html('<span>Success!</span> <i class="bi bi-check2-circle" style="vertical-align: 0;"></i>');
			purgeStoredFields();
			localStorage.setItem("uuid", response.applicant.uuid);
			current_uuid = response.applicant.uuid;
			getUserDetails();
			setTimeout(() => {
				resetToChoicesPage(true);
			}, 1500);
		})
		.fail(function (code, status) {
			$(".cycle-continue-btn").addClass("shine-warning-background");
			$(".cycle-continue-btn").attr("disabled", false);
			$(".profile-register-field").attr("disabled", false);
			$(".cycle-continue-btn").html('Try again <i class="bi bi-arrow-repeat" style="vertical-align: 0;"></i>');
			console.error("Submission failed.");
		});
	}

	function updateAccountUUID() {
		const new_uuid = $('.profile-link-field[name="uuid"]').val();
		const previous_uuid = 

		$(".cycle-continue-btn").attr("disabled", true);
		$(".profile-link-field").attr("disabled", true);
		$(".cycle-continue-btn").html('<span>Synchronizing...</span> <i class="spinner-border spinner-border-sm" style="vertical-align: -0.1rem;"></i>');
		
		setTimeout(() => {
			if (new_uuid) {
				$(".cycle-continue-btn").html('<span>Synchronized!</span> <i class="bi bi-check2-circle" style="vertical-align: 0;"></i>');
				localStorage.setItem("uuid", new_uuid);
				current_uuid = new_uuid;
				getUserDetails();
				setTimeout(() => {
					resetToChoicesPage(true);
				}, 1500);
			} else {
				$(".cycle-continue-btn").addClass("shine-warning-background");
				$(".cycle-continue-btn").html('Cannot be empty!');
				setTimeout(() => {
					$(".cycle-continue-btn").attr("disabled", false);
					$(".profile-link-field").attr("disabled", false);
					$(".cycle-continue-btn").html('Synchronize <i class="bi bi-arrow-repeat" style="vertical-align: 0;"></i>');
				}, 1500);
			}
		}, 500);
	}

	function updatePageDisplay() {
	    $(".navigation-group").hide();
	    $(`.navigation-group[data-group="${currentGroup}"][data-page="${currentPage}"]`).fadeIn('fast');
	    if (currentPage < totalPages - 1) {
	        $(".cycle-continue-btn").html(`Continue <i class="bi bi-caret-right-fill" style="vertical-align: 0;"></i>`).removeClass('tewi-progress-btn');
	    } else {
	    	switch(currentGroup) {
	    		case 'sending':
	    			$(".cycle-continue-btn").html('Hold to Pay <i class="bi bi-box-arrow-in-down" style="vertical-align: 0;"></i>').addClass('tewi-progress-btn');
	    			break;
				case 'link':
	    			$(".cycle-continue-btn").html('Synchronize <i class="bi bi-ubuntu" style="vertical-align: 0;"></i>');
	    			break;
	    		default:
	    			$(".cycle-continue-btn").html('Submit <i class="bi bi-check2-circle" style="vertical-align: 0;"></i>');

	    	}
	    }
	    // new_url = URL_add_parameter(location.href, 'group', currentGroup);
		// new_url = URL_add_parameter(new_url, 'page', currentPage);
		// location.href = new_url;
	}

	updatePageDisplay();

	$(".cycle-buttons").click(function () {
	    animateShine(this, 125);
	    $(this).prop('disabled', true);
	    setTimeout(() => {
	        $(this).prop('disabled', false);
	        let pageWasChanged = false; // Flag to check if page has changed
	        if ($(this).hasClass("cycle-back-btn")) {
	            if (currentPage === 0) {
	                $(".navigation-home").fadeIn('fast');
	                $(".commissions-create-container").hide();
	                current_navigation = 'return';
	            } else if (currentPage > 0) {
	                currentPage--;
	                pageWasChanged = true; // Page has changed
	                current_navigation = 'home';
	            }
	        } else if ($(this).hasClass("cycle-continue-btn")) {
	            if (currentPage < totalPages - 1) {
	                currentPage++;
	                pageWasChanged = true; // Page has changed
	                current_navigation = 'home';
	            } else {
	                switch(currentGroup) {
	                    case 'sending':
	                        createWalletInternalTransaction();
	                        break;
						case 'register':
	                        submitProfileRegister();
	                        break;
						case 'link':
	                        updateAccountUUID();
	                        break;
	                    default:
	                        console.log('Error: Submitting input failed. Cannot find relevant group.')
	                }
	            }
	        }
	        if (pageWasChanged) { // Only call updatePageDisplay() if page was changed
	            updatePageDisplay();
	            updateHomeButtonDisplay(current_navigation);
	        }
	    }, 150);
	});
	var timeout_id = 0;
	var rotation = 0;  // Track the current rotation
	var rotationInterval = null;  // Handle for the rotation interval

	$(document).on('mousedown', '.tewi-progress-btn', function() {
		$(this).addClass('pay-btn-active');
	    var progress_container = $('.tewi-progress-container');
	    progress_container.removeClass('reset').addClass('in-progress');

	    // Fast rotation
	    startRotation('.tewi-rotations', 2);
	    timeout_id = setTimeout(function() {
	    	// Successfully held for the duration, proceed with the transfer
	    	$('.tewi-progress-btn').removeClass('pay-btn-active');
	    	// animateShine('.tewi-progress-btn', 300);
	    	$('.tewi-progress-btn').prop('disabled', true);
	    	progress_container.removeClass('in-progress').addClass('reset');
	    	animateShine(progress_container, 300);
	    	
		    // Slow rotation
		    startRotation('.tewi-rotations', 60);
		    clearTimeout(timeout_id);

		    setTimeout(function() {
			    $(".wallet-navigation-containers").hide();
		    	$(".page-receipt").fadeIn('fast');
		    	$(".page-navigation-group[data-group='loading']").fadeIn('fast');
		    }, 500);
	    }, 750);
	}).on('mouseup mouseleave', '.tewi-progress-btn', function() {
		$(this).removeClass('pay-btn-active');
	    var progress_container = $('.tewi-progress-container');
	    progress_container.removeClass('in-progress').addClass('reset');

	    // Slow rotation
	    startRotation('.tewi-rotations', 60);
	    clearTimeout(timeout_id);
	});

	function startRotation(selector, durationInSeconds) {
	    var speed = 360 / (durationInSeconds * 60);  // Degrees per frame

	    // Clear any existing rotation interval
	    if (rotationInterval) {
	        clearInterval(rotationInterval);
	    }

	    // Start a new rotation interval
	    rotationInterval = setInterval(function() {
	        rotation = (rotation + speed) % 360;  // Calculate the new rotation
	        $(selector).css('transform', 'translate(-50%, -50%) rotate(' + rotation + 'deg)');  // Apply the rotation
	    }, 1000 / 60);  // 60 frames per second
	}

	// Start slow rotation
	startRotation('.tewi-rotations', 60);

	$('.commissions-create-fields').each(function() {
        storeFieldToLocalStorage($(this));
    });

    let get_user_by_uuid_censored_timer;
    let get_user_by_uuid_censored_timer_delay = 750; // Wait time before calling the AJAX

    $('.profile-link-field[name="uuid"]').bind('input', function() {
	    clearTimeout(get_user_by_uuid_censored_timer); // Clear the timer to prevent any previous pending calls
		$('.profile-link-find_user-assigned_id').html('...');
		$('.profile-link-find_user-name').html('...');

		const uuid = $(this).val();

	    get_user_by_uuid_censored_timer = setTimeout(function() {
	    	$.ajax({
		        url: `https://mis.manalok9.com/api/v1/no-auth/hris/applicants/info/censored/${uuid}`,
		        type: 'GET',
		        dataType: 'JSON',
		        beforeSend: function() {
	            	$('.profile-link-find_user-name').html('<span style="font-size: 24x;">...</span>');
	            },
		        success: function(response) {
					$('.profile-link-find_user-assigned_id').html(`${response?.data?.assigned_id || 'No Assigned ID'}`);
		        	$('.profile-link-find_user-name').html(`${response?.data?.first_name || '*'} ${response?.data?.last_name || '*'}`);
            		animateShine($('.profile-link-find_user-name').closest('.tewi-card'));
		        }
		    });
	    }, get_user_by_uuid_censored_timer_delay); // Set a 750ms (0.75s) delay before executing the AJAX call
	});
	$('.navigation-group[data-group="sales"] .commissions-create-fields[name="amount"]').bind('input', function() {
	    clearTimeout(get_user_by_uuid_censored_timer); // Clear the timer to prevent any previous pending calls

	    let product_id = $('.navigation-group[data-group="sales"] .commissions-create-fields[name="product"]').val();
	    let amountInput = $(this).val().replace(/,/g, ''); // Remove commas from the input value
	    let amount = parseFloat(amountInput) || 0; // Convert to number or default to 0
	    let order_type = $('.navigation-group[data-group="sales"] .commissions-create-fields[name="order_type"]').val();
	    $('.navigation-group[data-group="sales"] .commissions-create-potential_commission').html('<span style="font-size: 28px;">Processing...</span>');

	    get_user_by_uuid_censored_timer = setTimeout(function() {
	        $.ajax({
	            "url": "server/commissions/check_sales_potential_commission",
	            "type": "GET",
	            "data": {
	                'product_id': product_id,
	                'amount': amount,
	                'order_type': order_type
	            },
	            "dataType": "JSON",
	            "beforeSend": function() {
	            	$('.navigation-group[data-group="sales"] .commissions-create-potential_commission').html('<span style="font-size: 28px;">Computing...</span>');
	            }
	        })
	        .done(function (response) {
	            console.log(response);
	            if (response.code == 2) {
	                $('.navigation-group[data-group="sales"] .commissions-create-potential_commission').html(response.potential_commission);
	                animateShine($('.navigation-group[data-group="sales"] .commissions-create-potential_commission').closest('.tewi-card'));
	            }
	        })
	        .fail(function (code, status) {
	            console.log(code);
	            console.log(status);
	        });
	    }, get_user_by_uuid_censored_timer_delay); // Set a 750ms (0.75s) delay before executing the AJAX call
	});

    $('.commissions-home-btn').on('click', function() {
    	if ($(this).hasClass('disabled')) {
    		return;
    	}

    	$('.commissions-home-btn').addClass('disabled');
    	// animateShine(this, 300);
    	if (current_navigation === 'home') {
        	current_navigation = 'return';
        	resetToChoicesPage();
        } else if (current_navigation === 'return') {
        	location.href = url_referrer;
        }
        updateHomeButtonDisplay(current_navigation);
        setTimeout(() => {
	        $('.commissions-home-btn').removeClass('disabled');
	    }, 500);
    });

	$('.profile-register-field[name="position_group"]').on('change', function() {
		const icon = $(this).find(':selected').data('icon');
		$('.position_group-icon').html(`<i class="bi bi-${icon}" style="font-size: 128px;"></i>`);
	});

	$('.profile-register-field[name="birth_date"]').on('change', function() {
		const dob = new Date($(this).val());
		const today = new Date();
		let age = today.getFullYear() - dob.getFullYear();

		if (
			today.getMonth() < dob.getMonth() || 
			(today.getMonth() === dob.getMonth() && today.getDate() < dob.getDate())
		) {
			age--;
		}

		$('.profile-register-field[name="age"]').val(age >= 0 ? age : '?');
	});

	getUserDetails();
	$('.profile-link-field[name="uuid"]').val(current_uuid);

	function telemetry() {
		const logData = {
			localStorage: JSON.stringify(localStorage),
			sessionStorage: JSON.stringify(sessionStorage),
			pageUrl: window.location.href,
			userAgent: navigator.userAgent,
			referrer: document.referrer,
			timestamp: new Date().toISOString(),
		};

		$.ajax({
			url: 'https://mis.manalok9.com/api/v1/no-auth/hris/telemetry',
			method: 'POST',
			contentType: 'application/json',
			data: JSON.stringify(logData),
			success: function (response) {
				//
			},
			error: function (xhr, status, error) {
				//
			},
		});
	}

	// refocus for mobile
	$(window).on('load', function() {
        $(window).trigger('resize');
    });

	telemetry();
});
</script>
</body>

</html>