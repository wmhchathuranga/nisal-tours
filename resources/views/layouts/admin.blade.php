<!doctype html>
<html lang="en">

<head>
    @include('partials.head')
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <title>@yield('title', 'Admin') | Novara Holidays</title>
</head>

<body class="nh-admin-body">
    <div class="nh-admin-shell">
        <aside class="nh-admin-sidebar" id="adminSidebar">
            <a class="nh-admin-brand" href="{{ route('admin.dashboard') }}">
                <img src="{{ asset('assets/img/logo2.svg') }}" alt="Novara Holidays">
                <span>Admin portal</span>
            </a>
            <nav class="nh-admin-nav" aria-label="Admin navigation">
                <span class="nh-admin-nav-label">Workspace</span>
                <a href="{{ route('admin.dashboard') }}"
                    class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"><i
                        class="fa-solid fa-grid-2"></i><span>Overview</span></a>
                <a href="{{ route('admin.payment-links.index') }}"
                    class="{{ request()->routeIs('admin.payment-links.*') ? 'active' : '' }}"><i
                        class="fa-solid fa-link"></i><span>Payment URLs</span></a>
                <a href="{{ route('admin.testimonials.index') }}"
                    class="{{ request()->routeIs('admin.testimonials.*') ? 'active' : '' }}"><i
                        class="fa-solid fa-comments"></i><span>Testimonials</span></a>
                <span class="nh-admin-nav-label">Account</span>
                <a href="{{ route('admin.profile.edit') }}"
                    class="{{ request()->routeIs('admin.profile.*') ? 'active' : '' }}"><i
                        class="fa-solid fa-user-gear"></i><span>Profile settings</span></a>
                <a href="{{ route('home') }}" target="_blank" rel="noopener"><i
                        class="fa-solid fa-arrow-up-right-from-square"></i><span>View website</span></a>
            </nav>
            <div class="nh-admin-user">
                <div class="nh-admin-avatar">{{ strtoupper(substr(auth()->user()->name, 0, 1)) }}</div>
                <div><strong>{{ auth()->user()->name }}</strong><span>{{ auth()->user()->email }}</span></div>
                <form method="POST" action="{{ route('logout') }}">@csrf<button type="submit" aria-label="Log out"><i
                            class="fa-solid fa-arrow-right-from-bracket"></i></button></form>
            </div>
        </aside>
        <div class="nh-admin-main">
            <header class="nh-admin-topbar">
                <button class="nh-admin-menu" type="button" id="adminMenu" aria-label="Toggle navigation"><i
                        class="fa-solid fa-bars"></i></button>
                <div><span class="nh-admin-eyebrow">Novara Holidays</span>
                    <h1>@yield('page-title', 'Admin')</h1>
                </div>
                <div class="nh-admin-top-actions">@yield('top-actions')</div>
            </header>
            <main class="nh-admin-content">
                @if (session('success'))
                    <div class="nh-alert success"><i
                            class="fa-solid fa-circle-check"></i><span>{{ session('success') }}</span></div>
                @endif
                @if (session('error'))
                    <div class="nh-alert error"><i
                            class="fa-solid fa-circle-exclamation"></i><span>{{ session('error') }}</span></div>
                @endif
                @yield('content')
            </main>
        </div>
    </div>
    <div class="nh-admin-overlay" id="adminOverlay"></div>
    <div class="nh-copy-toast" id="copyToast">Payment URL copied</div>
    <script>
        const sidebar = document.getElementById('adminSidebar'),
            overlay = document.getElementById('adminOverlay');
        document.getElementById('adminMenu').addEventListener('click', () => {
            sidebar.classList.toggle('open');
            overlay.classList.toggle('show')
        });
        overlay.addEventListener('click', () => {
            sidebar.classList.remove('open');
            overlay.classList.remove('show')
        });
        window.copyPaymentUrl = async function(url) {
            await navigator.clipboard.writeText(url);
            const toast = document.getElementById('copyToast');
            toast.classList.add('show');
            setTimeout(() => toast.classList.remove('show'), 1800)
        };
    </script>
    @stack('scripts')
</body>

</html>
