<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/framework/halfmoon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://kit.fontawesome.com/e785ddfc20.js" crossorigin="anonymous"></script>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />

    <!-- JAVASCRIPT -->
    <script src="{{ asset('js/framework/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/framework/halfmoon.min.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script src="{{ asset('js/framework/gsap.min.js') }}"></script>
    <script src="{{ asset('js/framework/ScrollTrigger.js') }}"></script>
    <script src="{{ asset('js/gsap_script.js') }}" defer></script>



    <title>{{ $title ?? config('app.name', 'Laravel') }}</title>
</head>

<body>

    <div class="spinner-wrapper">
        <svg>
            <text x="50%" y="50%" dy=".35em" text-anchor="middle">
                GuardianExpress
            </text>
        </svg>
    </div>

    <script>
        $(window).on('load', function() {
            var preloaderFadeOutTime = 500;

            function hidePreloader() {
                var preloader = $('.spinner-wrapper');
                setTimeout(function() {
                    preloader.fadeOut(preloaderFadeOutTime);
                }, 500);
            }
            hidePreloader();
        });
    </script>


    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-md"
        style="background-color: var(--bs-content-bg); border-bottom: var(--bs-border-width) solid var(--bs-content-border-color);">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('img/logo.png') }}" alt="Logo" width="24" height="24"
                    class="d-inline-block align-text-top">
                <span style="color: var(--accent)">Guardian</span>Express
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-collapse-2"
                aria-controls="navbar-collapse-2" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar-collapse-2">
                <ul class="navbar-nav ms-auto" style="display: flex; align-items: center;">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}"
                            aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() == 'shop' ? 'active' : '' }}"
                            href="{{ route('shop') }}">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() == 'report' ? 'active' : '' }}"
                            href="{{ route('report') }}">Support</a>
                    </li>


                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a href="{{ route('login') }}"
                                    class="btn btn-secondary me-1 {{ Route::currentRouteName() == 'login' ? 'active' : '' }}">Sign
                                    in</a>
                            </li>
                        @endif

                        {{-- @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif --}}
                    @else
                        <li class="nav-item dropdown">
                            <a class="nav-link profile-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                                <div class="profile-pic">
                                    @if (Auth::user()->profile_path)
                                        <img src="{{ asset('img/profile/' . Auth::user()->profile_path) }}" alt="">
                                    @else
                                        <img src="{{ asset('img/pic.jpg') }}" alt="">
                                    @endif
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end mt-md-2 rounded-top-0">
                                <li><a class="dropdown-item" href="{{ route('soon') }}">Profile</a></li>


                                @if (Auth::user()->usertype == 'admin')
                                    <li><a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a></li>
                                @endif
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest

                    <li class="nav-item mode-select">
                        <div class="mode-toggle" onclick="toggleMode()" id="toggle-theme-btn">
                            <i class="fa-solid fa-sun"></i>
                            <i class="fa-solid fa-moon"></i>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <script>
        function toggleMode() {
            const html = document.querySelector('html');
            const sun = document.querySelector('.fa-solid.fa-sun');
            const moon = document.querySelector('.fa-solid.fa-moon');

            if (html.getAttribute('data-bs-theme') == 'dark') {
                sun.style.display = 'flex';
                moon.style.display = 'none';

            } else {
                moon.style.display = 'flex';
                sun.style.display = 'none';
            }
        }


        function setTheme(theme) {
            document.documentElement.setAttribute('data-bs-theme', theme);
            localStorage.setItem('theme', theme);
        }

        function toggleTheme() {
            const currentTheme = document.documentElement.getAttribute('data-bs-theme');
            const newTheme = currentTheme === 'light' ? 'dark' : 'light';
            setTheme(newTheme);
        }
        const savedTheme = localStorage.getItem('theme');
        if (savedTheme) {
            setTheme(savedTheme);
        }
        document.getElementById('toggle-theme-btn').addEventListener('click', toggleTheme);
    </script>
    @yield('content')

    {{-- <script>
        const toastTrigger = document.getElementById("live-toast-btn");
        const toastLiveExample = document.getElementById("live-toast");
        if (toastTrigger) {
            const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample);
            toastTrigger.addEventListener("click", () => {
                toastBootstrap.show();
            });
        }
    </script> --}}
    <script>
        window.addEventListener("scroll", () => {
            var reveals = document.querySelectorAll(".reveal");
            for (var i = 0; i < reveals.length; i++) {
                var windowHeight = window.innerHeight;
                var elementTop = reveals[i].getBoundingClientRect().top;
                var elementVisible = 150;

                if (elementTop < windowHeight - elementVisible) {
                    reveals[i].classList.add("active");
                } else {
                    reveals[i].classList.remove("active");
                }
            }
        });
    </script>
    <script src="https://npmcdn.com/imagesloaded@4.1/imagesloaded.pkgd.min.js"></script>
    <script>
        const tooltipTriggerList = document.querySelectorAll(
            "[data-bs-toggle='tooltip']"
        );
        const tooltipList = [...tooltipTriggerList].map(
            (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
        );
    </script>

    <div class="container-fluid">
        <div class="newsletter">
            <div class="title">Subscribe to our Newsletter</div>
            <div class="subtitle">
                Stay Connected, Stay Inspired: Receive Angelic Insights Directly to Your Inbox
            </div>
            <form action="">
                <input type="text" class="form-control" placeholder="your email">
                <a href="{{ route('home') }}" class="custom-btn"></a>
            </form>
        </div>
    </div>




    <button id="back-to-top-btn" title="Back to Top">
        <i class="fa-solid fa-chevron-up"></i>
    </button>





    <style>
        #back-to-top-btn {
            width: 50px;
            height: 50px;
            display: none;
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 99;
            font-size: 16px;
            border: none;
            outline: none;
            background-color: var(--accent);
            color: white;
            cursor: pointer;
            padding: 10px;
            border-radius: 50%;
        }

        #back-to-top-btn:hover {
            background-color: #555;
        }
    </style>


    <script>
        window.addEventListener("scroll", function() {
            var backToTopBtn = document.getElementById("back-to-top-btn");
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                backToTopBtn.style.display = "block";
            } else {
                backToTopBtn.style.display = "none";
            }
        });

        document.getElementById("back-to-top-btn").addEventListener("click", function() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        });
    </script>




    <div class="background footer">
        <div class="container-fluid">
            <div class="footer">
                <div class="website-logo">
                    <img src="img/logo.png" alt="">
                </div>
                <div class="website-title">
                    <span>Guardian</span>Express
                </div>
                <div class="designer-link">
                    <i class="fa-brands fa-github"></i>
                    <i class="fa-brands fa-discord"></i>
                    <i class="fa-brands fa-linkedin"></i>
                    <i class="fa-brands fa-instagram"></i>
                </div>
                <div class="footer-links">
                    <div class="row">
                        <div class="col">
                            Privacy Policy
                        </div>
                        <div class="col">
                            Terms of service
                        </div>
                        <div class="col">
                            Contact us
                        </div>
                        <div class="col">
                            News
                        </div>
                        <div class="col">
                            Search
                        </div>
                    </div>
                </div>
                <div class="website-detail">
                    © 2023 GuardianExpress All Right Reserved.
                </div>
            </div>
        </div>
    </div>
