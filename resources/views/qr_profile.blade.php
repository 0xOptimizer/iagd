<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <title>{{ $title }} — Manalo K9</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style_new.css') }}?v=2">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.0/dist/sweetalert2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.14.0/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.30.1/moment-with-locales.min.js" integrity="sha512-4F1cxYdMiAW98oomSLaygEwmCnIP38pb4Kx70yQYqRwLVCs3DbRumfBq82T08g/4LJ/smbFGFpmeFlQgoDccgg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body style="background-color: #141e1a;">
<div id="auth" style="background-color: rgba(0, 0, 0, 0.08);">
	<div class="row" style="height: 100vh;">
		<div class="loading-section">
			<div class="d-flex justify-content-center align-items-center vh-100 text-center">
				<h1 class="text-primary font-clemente">
					<i class="spinner-border text-outlined" style="font-size: 24px; width: 128px; height: 128px;"></i>
				</h1>
			</div>
		</div>
		<div class="invalid-section" style="display: none;">
			<div id="auth-left" class="tewi-container mt-5">
				<h1 class="text-center text-primary font-clemente text-outlined mt-2">We can't find this employee.</h1>
			</div>
		</div>
		<div class="id-section d-flex justify-content-center" style="display: none !important;">
			<!-- <div style="position: absolute; top: 82px; left: 80px; transform: scale(0.4); pointer-events: none;">
				<img class="claim-review-stamp-approved" src="assets/images/stamp_employed.png" style="display: none; width: 90%;">
			</div> -->
			<div id="auth-left" class="tewi-container mt-5">
				<div class="company-logo">
					<img src="{{ asset('images/mk9_logo_compressed.png') }}" style="position: absolute; top: -133px; right: -133px; height: 194px; width: 194px;">
				</div>
				<div class="profile-header-container" style="display: flex; align-items: center; justify-content: center; position: relative; border-radius: 8px; background-color: #873e6d8f; padding: 8px;">
					<div class="pfp-container rounded-circle" style="width: 192px; height: 192px; overflow: hidden; flex-shrink: 0;">
						<img src="" style="width: 100%; height: 100%; object-fit: contain; margin-right: 8px;">
					</div>
					<div style="width: 135px; height: 135px; flex-shrink: 0;">
						<img src="data:image/png;base64,{{ $qrcode }}" alt="QR Code" style="background-color: white; margin-left: 8px; width: 100%; height: 100%; object-fit: contain;">
					</div>
				</div>
				<h1 class="profile-details-name text-center text-primary font-clemente text-outlined mt-2">...</h1>
				<!-- <h6 class="text-center typewriter mb-1">
					<span class="employment-level success-banner-sm" data-level="1" style="display: none;"><i class="bi bi-check2-circle" style="vertical-align: 0px;"></i> Employed since <span class="profile-details-employed_since">...</span></span>
					<span class="employment-level warning-banner-sm" data-level="0" style="display: none;"><i class="bi bi-exclamation-triangle" style="vertical-align: 0px;"></i> Not Employed</span>
				</h6> -->
				<h6 class="text-center typewriter mb-4">
					<span class="verification-level success-banner-sm" data-level="1" style="display: none;"><i class="bi bi-check2-circle" style="vertical-align: 0px;"></i> Verified by HR</span>
					<span class="verification-level info-banner-sm" data-level="0" style="display: none;"><i class="bi bi-exclamation-circle" style="vertical-align: 0px;"></i> Pending Verification by HR</span>
					<span class="verification-level warning-banner-sm" data-level="-1" style="display: none;"><i class="bi bi-exclamation-triangle" style="vertical-align: 0px;"></i> Cannot be Verified by HR</span>
				</h6>
				<!-- <p class="login-group info-banner" style="font-size: 14px;"><i class="bi bi-exclamation-triangle-fill"></i></p> -->
				<hr>
				<div class="row">
					<div class="col-sm-6">
						<div class="tewi-card" style="padding-bottom: 20px; width: 98%; margin-left: 4px;">
							<div class="tewi-card-icon" style="font-size: 100px; left: 69%; bottom: 39%;">
								<i class="bi bi-person-fill-check"></i>
							</div>
							<div class="tewi-card-title">
								<span>I.D. No.</span>
							</div>
							<div class="tewi-card-body">
								<span style="font-size: 24px;"><span class="profile-details-assigned_id" style="font-size: 24px;">...</span></span>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="tewi-card" style="padding-bottom: 20px; width: 98%; margin-left: 4px;">
							<div class="tewi-card-icon" style="font-size: 84px; left: 72%; bottom: 25%;">
								<i class="bi bi-award-fill"></i>
							</div>
							<div class="tewi-card-title">
								<span class="profile-details-employed_since-title">Employed since</span>
							</div>
							<div class="tewi-card-body">
								<span style="font-size: 24px;"><span class="profile-details-employed_since" style="font-size: 24px;">...</span></span>
							</div>
						</div>
					</div>
				</div>
				<div class="row mt-2">
					<div class="col-sm-12">
						<div class="tewi-card" style="padding-bottom: 20px; margin-left: 4px;">
							<div class="tewi-card-icon" style="font-size: 84px; left: 84%; bottom: 25%;">
								<i class="profile-details-position-icon bi"></i>
							</div>
							<div class="tewi-card-title">
								<span class="profile-details-position_group">...</span>
							</div>
							<div class="tewi-card-body">
								<span style="font-size: 24px;"><span class="profile-details-position" style="font-size: 24px;">...</span></span>
							</div>
						</div>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-sm-12 text-center">
						<span class="text-muted">This I.D. serves as a proof that <span class="profile-details-name">...</span> works for Manalo Group of Companies.</span>
					</div>
				</div>
				<div class="row mt-5">
					<div class="col-sm-12 text-center">
						<b class="text-primary">Authorized Signature</b>
					</div>
				</div>
				<div class="row mt-2">
					<div class="col-sm-12 text-center">
						&nbsp;
					</div>
				</div>
				<div class="row mt-2">
					<div class="col-sm-12 text-center">
						<b class="text-default">Doc Abel Manalo</b>
					</div>
				</div>
				<div class="row mt-5">
					<div class="col-sm-12 text-center">
						<span class="text-muted">Remember to check if the domain is ours and is verified: "hris.manalok9.com".</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<ul class="circles">
        <li class="circles-animation-slow"></li>
        <li class="circles-animation-slow"></li>
        <li class="circles-animation-slow"></li>
        <li class="circles-animation-slow"></li>
        <li class="circles-animation-slow"></li>
		<li class="circles-animation-slow"></li>
        <li class="circles-animation-slow"></li>
        <li class="circles-animation-slow"></li>
        <li class="circles-animation-slow"></li>
        <li class="circles-animation-slow"></li>
    </ul>
</div>
</body>
<script src="{{ asset('js/VanillaQR.min.js') }}"></script>
<script src="{{ asset('js/luxon.min.js') }}"></script>
<script>
function safeCombineName(firstName, middleName, lastName, extension) {
    function clean(input) {
        return typeof input === 'string' && input.trim() ? input.trim() : null;
    }

    const first = clean(firstName);
    const middleInitial = clean(middleName) ? clean(middleName).charAt(0).toUpperCase() + '.' : null;
    const last = clean(lastName);
    const ext = clean(extension);

    const parts = [first, middleInitial, last, ext].filter(part => part);
    return parts.length > 0 ? parts.join(' ').trim() : 'Unknown Name';
}
function getUserDetails() {
	$('.profile-dashboard-text-nav').text('...');
	$('.profile-dashboard-text-hello_user').text('Loading details, hold on...');
	$('.profile-dashboard-my_profile-btn').attr('src', '#');
	$('.profile-dashboard-my_profile-btn').addClass('disabled');
	$('.profile-dashboard-my_profile-btn-icon').removeClass('bi-qr-code-scan').addClass('bi-lock');
	$('.employment-level').hide();
	$('.verification-level').hide();

	const uuid = "{{ $id ?? 'null' }}";

	if (uuid) {
		$.ajax({
			"url": `https://mis.manalok9.com/api/v1/no-auth/hris/applicants/info/${uuid}`,
			"type": "GET",
			"contentType": false,
			"processData": false,
			"dataType": "JSON"
		})
		.done(function (response) {
			$('.loading-section').hide();
			if (response.status !== 'success') {
				console.log('No UUID to get.');
				$('.invalid-section').show();
				$('.profile-dashboard-text-nav').text('Register');
				$('.profile-dashboard-text-hello_user').text('Hello! Please register below.');
			}
			if (response?.status === 'success') {
				// Fill up details
				const imageUrl = response?.data?.image 
					? `https://mis.manalok9.com/public/storage/${response.data.image}` 
					: 'https://mis.manalok9.com/public/storage/default.png';
				$('.pfp-container img').attr('src', imageUrl);

				const safeName = safeCombineName(
					response?.data?.first_name || '', 
					response?.data?.middle_name || '', 
					response?.data?.last_name || '', 
					response?.data?.name_extension || ''
				);
				$('.profile-details-name').text(safeName);

				if (response?.data?.work?.applied_on) {
					$('.employment-level[data-level="1"]').show();
				} else {
					$('.employment-level[data-level="0"]').show();
				}

				const verification_level = response?.data?.meta?.is_verified ?? -1;
				$(`.verification-level[data-level="${verification_level}"]`).show();

				$('.profile-details-assigned_id').text(response?.data?.assigned_id || 'No ID assigned');

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

				const position_group_key = response?.data?.work?.position_group || '';
				const position_group = department_map[position_group_key].name || 'No Department';
				$('.profile-details-position-icon').addClass(`bi-${department_map[position_group_key].icon}`);
				$('.profile-details-position_group').text(position_group);
				$('.profile-details-position').text(response?.data?.work?.position || 'No Position');

				const employed_since = response?.data?.work?.applied_on?.trim() ? response.data.work.applied_on : 'N/A';
				const employed_since_readable = luxon.DateTime.fromFormat(employed_since, "yyyy-MM-dd").toFormat("MMM dd, yyyy");
				$('.profile-details-employed_since').text(employed_since_readable);
				$('title').text(`${safeName} — Manalo K9`)
				
				$('.id-section').show();
			}
			console.log(response);
		})
		.fail(function (code, status) {
			console.log(`Failed to get user details: ${code}`);
			$('.loading-section').hide();
			$('.invalid-section').show();
		});
	} else {
		console.log('No UUID to get.');
		$('.profile-dashboard-text-nav').text('Register');
		$('.profile-dashboard-text-hello_user').text('Hello! You may register your company profile below.');
	}
}
getUserDetails();
$(document).ready(function() {
	$("body").on(
	    "webkitAnimationEnd oanimationend msAnimationEnd animationend",
	    function(e) {
	        $(e.target).removeClass("shake");
	        // $(e.target).attr('disabled', true);
	    }
	);
	const qr_url = "https://hris.manalok9.com/id/{{ $id }}"
	const qr = new VanillaQR({
		
		url: qr_url,
		size: 128,
		
		colorLight: "#ffffff",
		colorDark: "#000000",
		toTable: false,
		ecclevel: 1,
		noBorder: false,
		borderSize: 4
	});
	
	// $('#qrcode').append(qr.domElement);
	let approved_stamp_img = $('.pfp-container img');

	// Animations
	approved_stamp_img.show();
	approved_stamp_img.css('animation', 'none');
	approved_stamp_img[0].offsetHeight;
	setTimeout(function() {
		approved_stamp_img.css('animation', 'dropAnimation 0.4s cubic-bezier(.22,.68,0,1.71)');
	}, 10);
	approved_stamp_img.on('animationend', function() {
		animateShine(approved_stamp_img, 300);
		approved_stamp_img.off('animationend');
	});
});
</script>
</html>