<!DOCTYPE html>

<html>
<head>
    @include('components.header')
</head>
<style>


</style>
<body>
    @include('components.nav')
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: -1; display: flex; align-items: center; justify-content: center; pointer-events: none;">
        <img src="{{ asset('images/map.svg') }}" style="max-width: 100%; max-height: 100%; object-fit: contain;">
    </div>
    <main class="p-3" style="position: relative;">
        <div class="mt-5">
            <div class="image-container text-center">
                @php
                    $file = $pet->files->first();
                @endphp
                @if ($file)
                    <img src="{{ asset('uploads/pets/' . $file->attached_to_uuid . '/' . $file->uuid . '.' . $file->file_extension) }}" class="rounded-circle" alt="" width="192" height="192">
                @else
                    <img src="{{ asset('uploads/pets/default.png') }}" class="rounded-circle" alt="Default Image" width="192" height="192">
                @endif
            </div>
            <div class="mt-3 text-center">
                <h1 class="h1wrap">
                    <span class="text-gradient-primary">{{ $pet->pet_name }}</span>
                </h1>
            </div>
            <div class="pet-tabs-container text-center justify-content-center mt-3">
                <button class="pet-tab btn @if(!request()->has('tab') || request()->get('tab') == 'details') btn-primary @else btn-secondary @endif" style="width: 130px;"><i class="bi bi-info-circle"></i> Details</button>
                <button class="pet-tab btn @if(request()->get('tab') == 'pedigree') btn-primary @else btn-secondary @endif" style="width: 130px;"></i><i class="bi bi-diagram-2"></i> Pedigree</button>
                <button class="pet-tab btn @if(request()->get('tab') == 'gallery') btn-primary @else btn-secondary @endif" style="width: 130px;"><i class="bi bi-images"></i> Gallery</button>
                <button class="pet-tab btn @if(request()->get('tab') == 'documents') btn-primary @else btn-secondary @endif" style="width: 130px;"><i class="bi bi-stack"></i> Documents</button>
                <button class="pet-tab btn @if(request()->get('tab') == 'settings') btn-primary @else btn-secondary @endif"><i class="bi bi-gear"></i></button>
                <button class="pet-tab btn @if(request()->get('tab') == 'export') btn-primary @else btn-secondary @endif"><i class="bi bi-file-earmark-arrow-down"></i></button>
                <!-- <button class="pet-tab btn btn-secondary"><i class="bi bi-flag" style="color: red;"></i></button> -->
            </div>
            <div class="mt-3" style="width: 1000px; overflow-x: auto;">
                <pre style="color: #fff; white-space: pre-wrap; word-wrap: break-word;">
                    {{ $pet }}
                </pre>
            </div>
        </div>
    </main>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js"></script>
<script>
$(document).ready(function() {
    $('.card-hoverable').on('mouseover', function() {
        $(this).find('.card-title').addClass('text-gradient-primary');
    });
    $('.card-hoverable').on('mouseout', function() {
        $(this).find('.card-title').removeClass('text-gradient-primary');
    });

    $.ajax({
        url: '{{ route("api.v1.pets.count") }}',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            // Update the pet counts
            $.each(data.pet_counts, function(group, count) {
                $('.iagd-total-count[data-group="' + group + '"]').text(count.toLocaleString());
            });

            // Update the newest registry dates
            $.each(data.latest_pets, function(group, date) {
                $('.iagd-newest-registry[data-group="' + group + '"]').text(moment(date).fromNow());
            });

            setTimeout(function() {
                $('.loading-group').fadeOut(100, function() {
                    $(this).removeClass('animate__animated animate__fadeOut');
                });
            }, 200);
            setTimeout(function() {
                $('.iagd-containers').fadeIn(100, function() {
                    $(this).removeClass('animate__animated animate__fadeIn');
                });
                afterLoading();
            }, 300);
        },
        error: function(xhr, status, error) {
            console.error('Error fetching pet counts:', error);
        }
    });

    $('.h1wrap').each(function(){
        $(this).find("h1").html( $(this).find("h1").html().replace(/./g, "<span>$&</span>").replace(/\s/g, "&nbsp;"));
    });

    function introOpen(){  
      //Using ex. transform:"translate3d(x,x,x)" instead of (y:__) or (top:__) to maintain vh or em units responsiveness
    //   TweenMax.staggerFrom("h1 > span", 1.2, {opacity:0, transform: "translateY(16vh) scaleY(-0.382)", transformOrigin:'50% 20%', ease:Expo.easeOut, force3D: true},0.035)
      
    //   TweenMax.from("h1", 3.6, {transform: "translateY(16vh)", ease:Expo.easeOut, force3D: true})
      $('.nucleobase').show();
      $('.skeleton').show();
      TweenMax.staggerFrom(".nucleobase", 1.2, {opacity:0.0, transform: "translateY(20vh) scale(0)", delay: 0.333, transformOrigin:'50% 50%', ease:Circ.easeOut, force3D: true},0.06)
      TweenMax.staggerFrom(".skeleton", 0.5, {opacity:0.0, transform: "translateY(20vh) scale(0)", delay: 0.333, transformOrigin:'50% 50%', ease:Circ.easeOut, force3D: true},0.04)
    };

    function afterLoading(){  
        $('.iagd-containers .card').show();
        TweenMax.staggerFrom(".iagd-containers .card", 0.4, {opacity:0.0, transform: "translateY(20vh) scale(0)", delay: 0.333, transformOrigin:'50% 50%', ease:Circ.easeOut, force3D: true},0.04)
    };
  
    introOpen();
});
</script>
</html>
