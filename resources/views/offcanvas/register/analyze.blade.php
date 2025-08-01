<div class="offcanvas offcanvas-top" data-bs-scroll="true" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" id="offcanvas-register-analyze" aria-labelledby="offcanvas-register-analyze-label" style="height: auto; max-height: 100vh; width: 500px; margin: 0 auto;">
    <div class="offcanvas-body">
        <div class="tewi-banner mb-4 position-relative" style="display: none;">
            <img src="{{ asset('images/garfield_analyze.png') }}" width="156" height="156" class="position-absolute" style="top: -39px; left: -15px;">
            <div style="margin-left: 105px;">
                <h4 class="text-gradient-primary mt-2">Analyzing your photo...</h4>
                <p style="font-size: 14px;">
                    Please wait while our super cats are working.
                </p>
            </div>
        </div>
        <div class="cerebrate-analyze-images-container text-center mt-4 mb-2" style="display: none;">
            <div class="searchlight-container" style="display: none;">
                <div class="searchlight-bulb"></div>
                <div class="searchlight-beam"></div>
                <div class="searchlight-target"></div>
            </div>
            <i class="searchlight-processing outlined-text position-absolute spinner-border" style="font-size: 36px; width: 96px; height: 96px; top: 212px; left: 200px; color: var(--color-primary); z-index: 10;"></i>
            <i class="searchlight-done outlined-text position-absolute bi bi-check2-circle" style="font-size: 96px; width: 64px; height: 64px; top: 190px; left: 200px; color: gold; display: none; z-index: 10;"></i>
            <div class="cerebrate-analyze-image-card position-relative" style="margin-bottom: 10px; width: 364px; height: 242px; margin: 0 auto; z-index: 4;">
                <img src="#" style="width: 100%; height: 100%; object-fit: contain; filter: drop-shadow(5px 5px 10px #000000); filter: blur(4px); border: 2px solid var(--color-primary); border-radius: 4px; background-color: rgba(0, 0, 0, 0.8);">
            </div>
            @php
                $sectionCount = 12;
                $sections = collect(range(0, $sectionCount - 1))->map(function($i) {
                    return [
                        'class' => $i % 2 === 0 ? 'a-section' : 'b-section',
                        'top' => 67 + ($i * 20),
                        'delay' => $i * 0.2
                    ];
                });
            @endphp
            @foreach($sections as $section)
                <section class="{{ $section['class'] }}" style="top: {{ $section['top'] }}px;">
                    <div class="{{ $section['class'] }}-marquee-box">
                        @for($j = 0; $j < 16; $j++)
                            <h2 class="marquee-text" style="animation-delay: {{ $section['delay'] }}s;">IAGD</h2>
                        @endfor
                    </div>
                </section>
            @endforeach
        </div>
        <div class="cerebrate-analyze-field-container row pt-2" style="display: none;">
            <div class="cerebrate-analyze-field form-floating col-4 position-relative" style="display: none;"> 
                <input type="text" class="form-control w-100" id="cerebrate-analyze-species" readonly>
                <label for="cerebrate-analyze-species" style="color: #ffc500 !important; margin-left: 12px;">Species</label>
                <i class="bi bi-caret-right-fill" style="position: absolute; top: 25%; right: 1px; transform: translateY(-50%); font-size: 32px; color: #312c57;"></i>
                <button type="button" class="btn btn-secondary position-absolute cerebrate-analyze-toggle-discard" data-discarded="false" style="top: 8px; right: 20px;">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>
            <div class="cerebrate-analyze-field form-floating col-8 position-relative" style="display: none;"> 
                <input type="text" class="form-control w-100" id="cerebrate-analyze-primary_breed" readonly>
                <label for="cerebrate-analyze-primary_breed" style="color: #ffc500 !important; margin-left: 12px;">Primary Breed</label>
                <button type="button" class="btn btn-secondary position-absolute cerebrate-analyze-toggle-discard" data-discarded="false" style="top: 8px; right: 20px;">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>
            <div class="cerebrate-analyze-multibreed-group col-12 mt-2" style="display: none;">
                <div class="row cerebrate-analyze-multibreed-container">
                    
                </div>
            </div>
            <div class="cerebrate-analyze-field form-floating col-12 mt-2 position-relative" style="display: none;"> 
                <input type="text" class="form-control w-100" id="cerebrate-analyze-markings" readonly>
                <label for="cerebrate-analyze-markings" style="color: #ffc500 !important; margin-left: 12px;">Markings</label>
                <button type="button" class="btn btn-secondary position-absolute cerebrate-analyze-toggle-discard" data-discarded="false" style="top: 8px; right: 20px;">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>
            <div class="cerebrate-analyze-field form-floating col-12 mt-2 position-relative" style="display: none;"> 
                <input type="text" class="form-control w-100" id="cerebrate-analyze-body_color" readonly>
                <label for="cerebrate-analyze-body_color" style="color: #ffc500 !important; margin-left: 12px;">Body Color</label>
                <button type="button" class="btn btn-secondary position-absolute cerebrate-analyze-toggle-discard" data-discarded="false" style="top: 8px; right: 20px;">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>
            <div class="cerebrate-analyze-field form-floating col-12 mt-2 position-relative" style="display: none;"> 
                <input type="text" class="form-control w-100" id="cerebrate-analyze-eye_color" readonly>
                <label for="cerebrate-analyze-eye_color" style="color: #ffc500 !important; margin-left: 12px;">Eye Color</label>
                <button type="button" class="btn btn-secondary position-absolute cerebrate-analyze-toggle-discard" data-discarded="false" style="top: 8px; right: 20px;">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>
            <div class="cerebrate-analyze-field col-12 mt-2" style="display: none;">
                <div class="tewi-info_card-container tewi-info_card-primary p-3 text-center" style="width: 100%; font-size: 12px;">
                    <i class="tewi-info_card-icon bi bi-exclamation-triangle-fill"></i>
                    <span class="tewi-info_card-text"><img src="{{ asset('images/ai_mayor_icons.png') }}" class="me-2" style="width: 32px; height: 32px;"> AI suggestions, please verify thoroughly if correct.<br>You may revise it later or discard wrong suggestions now.</span>
                </div>
            </div>
            <div class="cerebrate-analyze-field col-12 mt-4" style="display: none;">
                <button type="button" class="cerebrate-analyze-proceed-btn btn btn-primary btn-lg" data-group="page_4" style="height: 100%; width: 100%;">Proceed</button>
            </div>
        </div>
    </div>
</div>