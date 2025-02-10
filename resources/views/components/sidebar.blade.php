<div id="sidebar" class="active">
	<div class="sidebar-wrapper active">
		<div class="sidebar-header">
			<div class="d-flex justify-content-between">
				<div class="logo" style="margin: 0 auto;">
					<a href="#"><img src="{{ asset('images/hris_logo_compressed.png') }}" width="96" height="96"></a>
				</div>
				<div class="toggler">
					<a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
				</div>
			</div>
		</div>
		<div class="sidebar-menu">
			<ul class="menu">
				<!-- <li class="text-center" style="list-style-image: none;"><span class="text-primary info-banner-sm"><?='TEST SUBTEXT';?></span></li> -->
				<li class="sidebar-title text-center">- PROFILING -</li>

				<li class="sidebar-item unclickable sidebar-admin-dashboard">
					<a href="{{ route('profiling.all_records') }}" class='sidebar-link'>
						<i class="bi bi-person-vcard-fill" style="vertical-align: 0;"></i>
						<span>All Records</span>
					</a>
				</li>
				<li class="sidebar-item unclickable sidebar-admin-dashboard">
					<a href="{{ route('profiling.qr_codes') }}" class='sidebar-link'>
						<i class="bi bi-qr-code" style="vertical-align: 0;"></i>
						<span>QR Codes</span>
					</a>
				</li>

				<li class="sidebar-item unclickable sidebar-profile pt-3">
					<a href="<?='#'.'profile'?>" class='sidebar-link'>
						<img class="rounded-circle" src="<?='#';?>" width="24" height="24">
						<span>Hello, {{ isset($data['user']) ? $data['user']['first_name'] : 'Guest' }}!</span>
					</a>
				</li>
				<li class="sidebar-item unclickable">
					<a href="<?='#'.'logout'?>" class='sidebar-link'>
						<i class="bi bi-door-open-fill" style="color: #dc3545;"></i>
						<span style="color: #dc3545;">Logout</span>
					</a>
				</li>
			</ul>
		</div>
	<button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
	</div>
</div>
<div class="blur-overlay" style="display: none;">
	<div class="edge-borders">
		<div class="triangle triangle-left"></div>
		<div class="triangle triangle-right"></div>
	</div>
</div>
<script>
$(document).ready(function() {
	console.log('test');
	$('.nav-link').on('click', function() {
		console.log(this);
		$('.nav-link').each(function() {
			$(this).addClass('link-dark').removeClass('active');
		});
		$(this).addClass('active').removeClass('link-dark');
		const wrapper = $('.wrapper').html('<div class="wrapper-loading" style="display: none; position: fixed; pointer-events: none; z-index: -1; top: 50%; left: 50%; transform: translate(-50%, -50%);"><i class="spinner-border" style="width: 256px; height: 256px; font-size: 32px;"></i></div>')
		$('body').find('.wrapper-loading').fadeIn('fast');
	});
});
</script>