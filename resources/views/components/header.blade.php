@include('components.meta')

<title>{{ $title }}</title>

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

@include('components.imports-cdn')

<link href="{{ asset('css/app.css') }}" rel="stylesheet">

@if (Agent::isMobile())
    <link href="{{ asset('css/style_m_iagd.css?v=5') }}" rel="stylesheet">
@else
    <link href="{{ asset('css/style_m_iagd.css?v=5') }}" rel="stylesheet">
@endif
<link href="{{ asset('css/helix.css') }}" rel="stylesheet">

@include('components.scripts')