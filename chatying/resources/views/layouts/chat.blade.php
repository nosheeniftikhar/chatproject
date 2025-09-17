<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Chatying - Free Chat Rooms, Connect Online Without Registration')</title>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="@yield('description', 'Join Chatying\'s free chat rooms to meet new friends globally. No registration, no downloads, just instant online chatting.')">
    <meta name="keywords" content="@yield('keywords', 'free chat rooms, online chat, Chatying, meet new friends, no registration chat, anonymous chat')">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Chatying Team">
    <link rel="canonical" href="@yield('canonical', url('/'))" >

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="@yield('og_title', 'Chatying - Free Chat Rooms, Connect Online Without Registration')">
    <meta property="og:description" content="@yield('og_description', 'Join Chatying to chat online with people worldwide. No registration or downloads needed for instant connections.')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="@yield('og_url', url('/'))">
    <meta property="og:image" content="@yield('og_image', asset('images/logo.png'))">
    <meta property="og:site_name" content="Chatying">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('twitter_title', 'Chatying - Free Chat Rooms, Connect Online Without Registration')">
    <meta name="twitter:description" content="@yield('twitter_description', 'Join Chatying to chat online with people worldwide. No registration or downloads needed for instant connections.')">
    <meta name="twitter:image" content="@yield('twitter_image', asset('images/logo.png'))">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

    <!-- Preload Critical Resources -->
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" as="style">
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" as="style">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #1a237e;
            --secondary-color: #7b1fa2;
            --accent-color: #00bcd4;
            --accent-hover: #ff5722;
            --light-bg: #f5f7fa;
            --white: #FFFFFF;
            --text-color: #333333;
            --card-shadow: 0 4px 12px rgba(0,0,0,0.08);
            --hover-shadow: 0 8px 24px rgba(0,0,0,0.12);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--light-bg);
            color: var(--text-color);
            line-height: 1.6;
        }

        /* Navbar Styles */
        .navbar {
            background: rgb(20, 20, 49);
            box-shadow: 0 4px 12px rgba(204, 188, 188, 0.1); 
            padding: 0;
            transition: all 0.3s ease;
        }

        .navbar-brand {
            font-weight: 700;
            color: var(--white) !important;
            font-size: 1.8rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .navbar-brand i {
            font-size: 2rem;
            color: var(--accent-color);
        }

        .navbar-text {
            color: var(--white) !important;
            font-weight: 500;
            font-size: 1rem;
        }

        .navbar-nav .nav-link {
            color: var(--white) !important;
            font-weight: 500;
            margin: 0 8px;
            border-radius: 20px;
            padding: 6px 15px !important;
            transition: all 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            background-color: rgba(255,255,255,0.15);
            transform: translateY(-2px);
        }

        /* Footer */
        .footer {
            background: rgb(20, 20, 49);
            color: var(--white);
            padding: 0;
            margin-top: 0;
            line-height: 1;
        }

        .footer-logo {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--white);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .footer-logo i {
            font-size: 2rem;
            color: var(--accent-color);
        }

        .footer a {
            color: var(--white);
            text-decoration: none;
            margin: 0 18px;
            font-weight: 300;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .footer a:hover {
            color: var(--accent-color);
            transform: translateY(-3px);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .navbar {
                padding: 0px 0;
            }

            .navbar-brand {
                font-size: 1.5rem;
            }

            .footer-logo {
                font-size: 1.5rem;
                text-align: center;
                margin-bottom: 10px;
                justify-content: center;
            }

            .footer {
                text-align: center;
            }

            .footer a {
                margin: 5px 10px;
            }
        }

        @yield('page-styles')
    </style>
</head>
<body>
    <!-- Header/Navbar -->
    <nav class="navbar navbar-expand-lg" aria-label="Main navigation">
        <div class="container">
            <!-- Left: Logo + Chatying text -->
            <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center me-4" style="text-decoration: none;">
                <img src="{{ asset('images/logo2.png') }}" alt="Chatying logo" style="width: 48px; height: 48px; margin-right: 8px;">
                <span style="font-weight: bold; font-size: 1.5rem;">Chatying</span>
            </a>
            <!-- Center/Right: Nav links spaced out -->
            <div class="d-flex flex-grow-1 justify-content-end align-items-center">
                <a href="{{ route('about') }}" aria-label="About Chatying" style="margin: 0 18px;color: var(--white);">About Us</a>
                <a href="{{ route('privacy') }}" aria-label="Chatying Privacy Policy" style="margin: 0 18px;color: var(--white);">Privacy Policy</a>
                <a href="{{ route('terms') }}" aria-label="Chatying Terms of Service" style="margin: 0 18px;color: var(--white);">Terms of Service</a>
                <a href="{{ route('contact') }}" aria-label="Contact Chatying" style="margin: 0 18px;color: var(--white);">Contact</a>
                <a href="{{ route('help') }}" aria-label="Chatying Help" style="margin: 0 18px;color: var(--white);">Help</a>
                <a href="{{ route('safety') }}" aria-label="Chatying Safety Guidelines" style="margin: 0 18px;color: var(--white);">Safety Guidelines</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    @yield('content')

    <!-- Footer -->
    <footer class="footer" aria-label="Footer navigation">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <a href="{{ route('home') }}" class="footer-logo" style="text-decoration: none;">
                        <img src="{{ asset('images/logo2.png') }}" alt="Chatying footer logo" style="width: 80px; height: 80px;">
                        Chatying
                    </a>
                </div>
                <div class="col-md-9 text-md-end text-center">
                    <a href="{{ route('about') }}" aria-label="About Chatying" style="margin: 0 18px;">About Us</a>
                    <a href="{{ route('privacy') }}" aria-label="Chatying Privacy Policy" style="margin: 0 18px;">Privacy Policy</a>
                    <a href="{{ route('terms') }}" aria-label="Chatying Terms of Service" style="margin: 0 18px;">Terms of Service</a>
                    <a href="{{ route('contact') }}" aria-label="Contact Chatying" style="margin: 0 18px;">Contact</a>
                    <a href="{{ route('help') }}" aria-label="Chatying Help" style="margin: 0 18px;">Help</a>
                    <a href="{{ route('safety') }}" aria-label="Chatying Safety Guidelines" style="margin: 0 18px;">Safety Guidelines</a>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 text-center">
                    <small>&copy; 2025 Chatying. All rights reserved.</small>
                </div>
            </div>
        </div>
    </footer>

    @yield('structured-data')

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>

    @yield('scripts')
</body>
</html>
