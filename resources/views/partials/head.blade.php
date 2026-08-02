<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
@php
    $seoPages = [
        'home' => [
            'title' => 'Novara Holidays | Sri Lanka Tours',
            'description' => 'Discover Sri Lanka with Novara Holidays. Explore private tours, customised holiday packages and reliable airport transfers.',
        ],
        'services' => [
            'title' => 'Sri Lanka Tours & Airport Transfers | Novara Holidays',
            'description' => 'Plan your Sri Lanka journey with customised tours, holiday packages, arrival transfers and departure transfers from Novara Holidays.',
        ],
        'about' => [
            'title' => 'About Novara Holidays | Your Sri Lanka Travel Partner',
            'description' => 'Learn about Novara Holidays and our commitment to creating safe, memorable and personalised travel experiences across Sri Lanka.',
        ],
        'gallery' => [
            'title' => 'Sri Lanka Travel Gallery | Novara Holidays',
            'description' => 'Explore Sri Lanka through the Novara Holidays gallery, featuring landscapes, culture, nature and unforgettable destinations.',
        ],
        'contact' => [
            'title' => 'Contact Novara Holidays | Plan Your Sri Lanka Journey',
            'description' => 'Contact Novara Holidays to discuss a Sri Lanka tour, customised itinerary, airport transfer or holiday package.',
        ],
    ];

    $routeName = request()->route()?->getName();
    $seo = $seoPages[$routeName] ?? [
        'title' => 'Novara Holidays | Sri Lanka Travel & Tour Agency',
        'description' => 'Explore Sri Lanka with Novara Holidays, your trusted partner for personalised tours, holiday packages and airport transfers.',
    ];
    $isPublicSeoPage = array_key_exists($routeName, $seoPages);
    $canonicalUrl = $isPublicSeoPage ? route($routeName) : null;
    $socialImage = asset('assets/img/hero/hero_bg_1_1.jpg');
    $travelAgencySchema = $routeName === 'home' ? [
        '@context' => 'https://schema.org',
        '@type' => 'TravelAgency',
        '@id' => route('home').'#organization',
        'name' => 'Novara Holidays',
        'url' => route('home'),
        'logo' => asset('assets/img/logo.svg'),
        'image' => $socialImage,
        'email' => 'info@novaraholidays.com',
        'telephone' => '+94 777 143 999',
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => 'Olinia Airport Hotel, No. 128, 18th Mile Post',
            'addressLocality' => 'Katunayake',
            'postalCode' => '11450',
            'addressCountry' => 'LK',
        ],
        'areaServed' => [
            '@type' => 'Country',
            'name' => 'Sri Lanka',
        ],
    ] : null;
@endphp

<title>{{ $seo['title'] }}</title>
<meta name="author" content="Novara Holidays">
<meta name="description" content="{{ $seo['description'] }}">
<meta name="robots" content="{{ $isPublicSeoPage ? 'index,follow,max-image-preview:large' : 'noindex,nofollow' }}">

@if ($canonicalUrl)
<link rel="canonical" href="{{ $canonicalUrl }}">
<meta property="og:type" content="website">
<meta property="og:site_name" content="Novara Holidays">
<meta property="og:title" content="{{ $seo['title'] }}">
<meta property="og:description" content="{{ $seo['description'] }}">
<meta property="og:url" content="{{ $canonicalUrl }}">
<meta property="og:image" content="{{ $socialImage }}">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $seo['title'] }}">
<meta name="twitter:description" content="{{ $seo['description'] }}">
<meta name="twitter:image" content="{{ $socialImage }}">
@endif

@if ($travelAgencySchema)
<script type="application/ld+json">{!! json_encode($travelAgencySchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
@endif

<!-- Mobile Specific Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Root-domain icons also brand non-HTML resources such as sitemap.xml. -->
<link rel="icon" href="{{ url('/favicon.ico') }}" sizes="any">
<link rel="icon" type="image/svg+xml" href="{{ url('/favicon.svg') }}">
<link rel="apple-touch-icon" href="{{ url('/apple-touch-icon.png') }}">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">

<!--==============================
 Google Fonts
 ============================== -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Manrope:wght@200..800&family=Montez&display=swap"
    rel="stylesheet">

<!--==============================
 All CSS File
 ============================== -->
<!-- Bootstrap -->
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<!-- Fontawesome Icon -->
<link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
<!-- Magnific Popup -->
<link rel="stylesheet" href="{{ asset('css/magnific-popup.min.css') }}">

<!-- Swiper css -->
<link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">

<!-- Theme Custom CSS -->
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/page/index.css') }}">

<meta name="csrf-token" content="{{ csrf_token() }}">
