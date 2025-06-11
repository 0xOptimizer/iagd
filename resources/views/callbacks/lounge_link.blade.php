<!DOCTYPE html>

<html>
<head>
    @include('components.header')
</head>
<body>
<div class="phone-container">
    <!-- Success (if &return=true) -->
    @if (request()->get('return') == 'success')
    <div class="wrapper row text-center mt-5" style="display: none;">
        <div>
            <h1 class="text-success" style="font-size: 48px;"><i class="bi bi-check2-circle"></i> Success!</h1>
        </div>
        <div>
            <span>You have successfully linked your account from Lounge.</span>
        </div>
        <div>
            <span>You may now close this window.</span>
        </div>
        <div class="mt-2 mb-4">
            <a href="https://www.facebook.com/icgdpage" class="btn btn-primary me-2">Problem? Message us via <i class="bi bi-messenger" style="vertical-align: 0px;"></i> Messenger</a>
        </div>
        <hr class="my-4">
        <div class="mt-4">
            <button class="btn btn-secondary" onclick="window.close();"><i class="bi bi-x" style="vertical-align: 0px;"></i> Close Window</button>
        </div>
    </div>
    <!-- Failure (if &return=false) -->
    @else
    <div class="wrapper row text-center mt-5" style="display: none;">
        <div>
            <h1 class="text-danger" style="font-size: 48px;"><i class="bi bi-exclamation-triangle"></i> Error!</h1>
        </div>
        <div>
            <span class="font-size: 16px;">There was an error linking your account from Lounge.</span>
        </div>
        <div>
            <span class="font-size: 16px;">Please try again later.</span>
        </div>
        <div class="mt-2 mb-4">
            <a href="https://www.facebook.com/icgdpage" class="btn btn-primary me-2">Problem? Message us via <i class="bi bi-messenger" style="vertical-align: 0px;"></i> Messenger</a>
        </div>
        <hr class="my-4">
        <div class="mt-4">
            <button class="btn btn-secondary" onclick="window.close();"><i class="bi bi-x" style="vertical-align: 0px;"></i> Close Window</button>
        </div>
    </div>
    @endif
</div>
</body>
<script src="{{ asset('js/TweenMax.min.js') }}"></script>
<script src="{{ asset('js/confetti.browser.min.js') }}"></script>
<script>
$(document).ready(function() {
    let isSuccess = {{ request()->get('return') == 'true' ? 'true' : 'false' }};
    if (isSuccess) {
        setTimeout(function() {
            var count = 200;
            var defaults = {origin: {y: 0.7}};
            function fire(particleRatio, opts) {
                confetti({...defaults, ...opts, particleCount: Math.floor(count * particleRatio)});
            }
            fire(0.25, {spread: 26, startVelocity: 55});
            fire(0.2, {spread: 60});
            fire(0.35, {spread: 100, decay: 0.91, scalar: 0.8});
            fire(0.1, {spread: 120, startVelocity: 25, decay: 0.92, scalar: 1.2});
            fire(0.1, {spread: 120, startVelocity: 45});
        }, 50);
    }

    $('.wrapper').show();
    TweenMax.staggerFrom(".wrapper", 0.4, {opacity:0.0, transform: "translateY(20vh) scale(0)", delay: 0, transformOrigin:'50% 50%', ease:Circ.easeOut, force3D: true}, 0.06);
});
</script>
</html>
