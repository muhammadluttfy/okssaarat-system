<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Okssa Art | Tracking System</title>

    <!-- SEO Meta Tags -->
    <meta name="description"
        content="Okssa Art Studio - CV Okssa Art was founded by Widodo Santosa, S.Sn. in 1998. At first the company was established only as a home industry, but along with increasing consumer demand, in 2022 Okssa Art was registered as a business entity in the form of a CV.">
    <meta name="keywords" content="creative, furniture, craft, handicrafts, art products">
    <meta name="author" content="Okssa Art Studio">

    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon and Touch Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="assets/favicon/safari-pinned-tab.svg" color="#6366f1">
    <link rel="shortcut icon" href="assets/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#080032">
    <meta name="msapplication-config" content="assets/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <!-- Vendor Styles -->
    <link rel="stylesheet" media="screen" href="assets/vendor/boxicons/css/boxicons.min.css" />
    <link rel="stylesheet" media="screen" href="assets/vendor/swiper/swiper-bundle.min.css" />

    <!-- Main Theme Styles + Bootstrap -->
    <link rel="stylesheet" media="screen" href="assets/css/theme.min.css">

    <!-- Page loading styles -->
    <style>
        .page-loading {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            -webkit-transition: all .4s .2s ease-in-out;
            transition: all .4s .2s ease-in-out;
            background-color: #fff;
            opacity: 0;
            visibility: hidden;
            z-index: 9999;
        }

        .dark-mode .page-loading {
            background-color: #0b0f19;
        }

        .page-loading.active {
            opacity: 1;
            visibility: visible;
        }

        .page-loading-inner {
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            text-align: center;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            -webkit-transition: opacity .2s ease-in-out;
            transition: opacity .2s ease-in-out;
            opacity: 0;
        }

        .page-loading.active>.page-loading-inner {
            opacity: 1;
        }

        .page-loading-inner>span {
            display: block;
            font-size: 1rem;
            font-weight: normal;
            color: #9397ad;
        }

        .dark-mode .page-loading-inner>span {
            color: #fff;
            opacity: .6;
        }

        .page-spinner {
            display: inline-block;
            width: 2.75rem;
            height: 2.75rem;
            margin-bottom: .75rem;
            vertical-align: text-bottom;
            border: .15em solid #b4b7c9;
            border-right-color: transparent;
            border-radius: 50%;
            -webkit-animation: spinner .75s linear infinite;
            animation: spinner .75s linear infinite;
        }

        .dark-mode .page-spinner {
            border-color: rgba(255, 255, 255, .4);
            border-right-color: transparent;
        }

        @-webkit-keyframes spinner {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes spinner {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
    </style>

    <!-- Theme mode -->
    <script>
        let mode = window.localStorage.getItem('mode'),
            root = document.getElementsByTagName('html')[0];
        if (mode !== null && mode === 'dark') {
            root.classList.add('dark-mode');
        } else {
            root.classList.remove('dark-mode');
        }
    </script>

    <!-- Page loading scripts -->
    <script>
        (function() {
            window.onload = function() {
                const preloader = document.querySelector('.page-loading');
                preloader.classList.remove('active');
                setTimeout(function() {
                    preloader.remove();
                }, 1000);
            };
        })();
    </script>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WKV3GT5');
    </script>
</head>


<!-- Body -->

<body>

    <!-- Google Tag Manager (noscript)-->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WKV3GT5" height="0" width="0"
            style="display: none; visibility: hidden;"></iframe>
    </noscript>

    <!-- Page loading spinner -->
    <div class="page-loading active">
        <div class="page-loading-inner">
            <div class="page-spinner"></div><span>Loading...</span>
        </div>
    </div>


    <!-- Page wrapper for sticky footer -->
    <!-- Wraps everything except footer to push footer to the bottom of the page if there is little content -->
    <main class="page-wrapper">


        <!-- Navbar -->
        <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page -->
        <header class="header navbar navbar-expand-lg bg-light navbar-sticky">
            <div class="container px-3">
                <a href="{{ route('root') }}" class="navbar-brand pe-3">
                    <img src="https://okssaart.com/wp-content/uploads/2023/03/v1_original-165x52.webp" width=""
                        alt="Silicon">

                </a>
                <div id="navbarNav" class="offcanvas offcanvas-end">
                    <div class="offcanvas-header border-bottom">
                        <h5 class="offcanvas-title">Menu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="mx-auto offcanvas-body">
                        <ul class="mb-2 navbar-nav me-auto mb-lg-0">
                            <li class="nav-item">
                                <a href="https://okssaart.com" class="nav-link" target="_blank">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('root') }}" class="nav-link">Tracking</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">Product Catalog</a>
                            </li>

                        </ul>
                    </div>
                    <div class="offcanvas-header border-top">
                        <a href="https://themes.getbootstrap.com/product/silicon-business-technology-template-ui-kit/"
                            class="btn btn-primary w-100" target="_blank" rel="noopener">
                            {{-- <i class="bx bx-whatsapp fs-4 lh-1 me-1"></i> --}}
                            Contact Me
                        </a>
                    </div>
                </div>
                <div class="form-check form-switch mode-switch pe-lg-1 ms-auto me-4" data-bs-toggle="mode">
                    <input type="checkbox" class="form-check-input" id="theme-mode">
                    <label class="form-check-label d-none d-sm-block" for="theme-mode">Light</label>
                    <label class="form-check-label d-none d-sm-block" for="theme-mode">Dark</label>
                </div>
                <button type="button" class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a href="https://themes.getbootstrap.com/product/silicon-business-technology-template-ui-kit/"
                    class="rounded btn btn-primary btn-sm fs-sm d-none d-lg-inline-flex" target="_blank"
                    rel="noopener">
                    Contact Me
                </a>
            </div>
        </header>


        <!-- Hero section with layer parallax gfx -->
        <section class="py-5 position-relative">

            <!-- Gradient BG -->
            <div class="top-0 position-absolute start-0 w-100 h-100 bg-gradient-primary opacity-10"></div>

            <!-- Content -->
            <div class="container position-relative zindex-2 py-lg-4">
                <div class="row">
                    <div class="col-lg-5 d-flex flex-column pt-lg-4 pt-xl-5">
                        <h5 class="my-2">Welcome!</h5>
                        <h1 class="mb-4 display-3">Okssa Art <span class="text-primary">Tracking</span></h1>
                        <p class="mb-5 fs-lg">
                            Use the PO number that has been provided by our team to check where your goods have been
                            assembled!
                        </p>

                        <!-- Desktop form -->
                        <form class="mb-5 d-none d-sm-flex" method="GET" action="{{ route('root') }}">
                            <div class="input-group d-block d-sm-flex input-group-lg me-3">
                                <input type="text" name="search" class="form-control w-50"
                                    placeholder="Search by PO Number..." value="{{ request()->input('search') }}">
                            </div>
                            <button type="submit" class="btn btn-icon btn-primary btn-lg">
                                <i class="bx bx-search"></i>
                            </button>
                        </form>

                        <!-- Mobile form -->
                        <form class="mb-5 d-sm-none" method="GET" action="{{ route('root') }}">
                            <input type="text" name="search" class="mb-2 form-control form-control-lg"
                                placeholder="Search by PO Number..." value="{{ request()->input('search') }}">
                            <button type="submit" class="btn btn-icon btn-primary btn-lg w-100 d-sm-none">
                                <i class="bx bx-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>


        <!-- Work Tracking (Steps) -->
        <section class="container my-5">
            @if ($search && $trackings->count() > 0)
                <h2 class="mb-5 text-center h1">Work Progress Tracking</h2>
            @endif
            <div class="steps">
                @if ($search && $trackings->count() > 0)
                    <div class="row">
                        @foreach ($trackings as $tracking)
                            <div class="pt-0 pb-5 step pt-md-3">
                                <div class="step-number">
                                    <div class="step-number-inner">{{ $loop->iteration }}</div>
                                </div>
                                <div class="step-body d-flex align-items-center ps-xl-5">
                                    <div class="flex-shrink-0 mx-4 rellax d-none d-lg-block mx-xl-5"
                                        data-rellax-percentage="0.5" data-rellax-speed="-0.3"
                                        data-disable-parallax-down="lg">
                                        <img src="{{ asset('storage/' . $tracking->image) }}" class="d-dark-mode-none"
                                            width="306" alt="Illustration">
                                    </div>

                                    <div class="rellax ps-md-4 ps-xl-5" data-rellax-percentage="0.5"
                                        data-rellax-speed="0.4" data-disable-parallax-down="lg">
                                        <h3 class="h4">{{ $tracking->status->name }}</h3>
                                        <p class="mb-0">{{ $tracking->description }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @elseif ($search && $trackings->count() == 0)
                    <p>No results found</p>
                @endif
            </div>
        </section>


        <!-- FAQ (Accordion) -->
        {{-- <section class="container pt-1 mt-5 pt-lg-3">
            <div class="px-3 py-5 overflow-hidden position-relative bg-primary rounded-3 px-sm-4 px-md-0">

                <!-- Parallax patterns -->
                <div class="top-0 rellax position-absolute start-0 w-100 h-100 d-none d-lg-block"
                    data-rellax-percentage="0.5" data-rellax-speed="1.75">
                    <img src="assets/img/landing/online-courses/pattern-1.svg"
                        class="top-0 position-absolute start-100 translate-middle ms-n4" alt="Pattern">
                    <img src="assets/img/landing/online-courses/pattern-2.svg"
                        class="position-absolute top-50 start-0 mt-n5 ms-n5" alt="Pattern">
                    <img src="assets/img/landing/online-courses/pattern-3.svg"
                        class="position-absolute top-100 start-100 translate-middle ms-n5 mt-n5" alt="Pattern">
                </div>

                <div class="row justify-content-center position-relative zindex-2 py-lg-4">
                    <div class="py-2 col-xl-8 col-lg-9 col-md-10">
                        <h2 class="mb-4 text-center h1 text-light mt-n2 mt-lg-0 mb-lg-5">Frequently Asked Questions
                        </h2>
                        <div class="accordion" id="faq">

                            <!-- Item -->
                            <div class="mb-3 border-0 shadow-sm accordion-item rounded-3">
                                <h3 class="accordion-header">
                                    <button class="shadow-none accordion-button rounded-3" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#q-1" aria-expanded="true"
                                        aria-controls="q-1">What if I don't have any professional background?</button>
                                </h3>
                                <div class="accordion-collapse collapse show" id="q-1" data-bs-parent="#faq">
                                    <div class="pt-0 accordion-body fs-sm">
                                        <p>Nunc duis id aenean gravida tincidunt eu, tempor ullamcorper. Viverra aliquam
                                            arcu, viverra et, cursus. Aliquet pretium cursus adipiscing gravida et
                                            consequat lobortis arcu velit. Nibh pharetra fermentum duis accumsan lectus
                                            non. Massa cursus molestie lorem scelerisque pellentesque. Nisi, enim, arcu
                                            purus gravida adipiscing euismod montes, duis egestas. Vehicula eu etiam
                                            quam tristique tincidunt suspendisse ut consequat.</p>
                                        <p>Ornare senectus fusce dignissim ut. Integer consequat in eu tortor, faucibus
                                            et lacinia posuere. Turpis sit viverra lorem suspendisse lacus aliquam
                                            auctor vulputate. Quis egestas aliquam nunc purus lacus, elit leo elit
                                            facilisi. Dignissim amet adipiscing massa integer.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="mb-3 border-0 shadow-sm accordion-item rounded-3">
                                <h3 class="accordion-header">
                                    <button class="shadow-none accordion-button rounded-3 collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#q-2" aria-expanded="false"
                                        aria-controls="q-2">How is this different from other courses on the
                                        market?</button>
                                </h3>
                                <div class="accordion-collapse collapse" id="q-2" data-bs-parent="#faq">
                                    <div class="pt-0 accordion-body fs-sm">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in facilisis
                                            nibh. Vestibulum ac porttitor sapien. Curabitur laoreet malesuada gravida.
                                            Phasellus vehicula vestibulum consequat. Curabitur feugiat eget sem vitae
                                            laoreet. Fusce porttitor finibus tellus, quis condimentum nibh. Vestibulum
                                            ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;
                                            Vivamus vehicula malesuada magna at viverra. Fusce non est eget libero
                                            convallis fringilla suspendisse.</p>
                                        <p>Nunc dolor velit, interdum finibus bibendum vel, mattis a magna. Mauris
                                            mollis sapien ac mi aliquet varius. Proin nec est nibh. Dignissim amet
                                            adipiscing massa integer.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="mb-3 border-0 shadow-sm accordion-item rounded-3">
                                <h3 class="accordion-header">
                                    <button class="shadow-none accordion-button rounded-3 collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#q-3" aria-expanded="false"
                                        aria-controls="q-3">How much time does it take to do my homework per week? What
                                        if I don't like it?</button>
                                </h3>
                                <div class="accordion-collapse collapse" id="q-3" data-bs-parent="#faq">
                                    <div class="pt-0 accordion-body fs-sm">
                                        <p>Suspendisse viverra volutpat eros. Curabitur in scelerisque lacus, quis
                                            fringilla sem. Nunc rutrum vel magna et ullamcorper. Sed consectetur augue
                                            vitae ligula consectetur, eu dapibus justo molestie. Phasellus sit amet
                                            metus magna. Sed tincidunt tempus felis vitae commodo. Etiam lobortis justo
                                            in elit pretium, sit amet aliquet tellus euismod. Curabitur in purus sed
                                            turpis aliquet pretium. Nunc ut magna tempus, iaculis sem id, vulputate
                                            ipsum. Etiam fermentum malesuada quam, in tempus purus pulvinar at.
                                            Vestibulum auctor congue pharetra. Class aptent taciti sociosqu ad litora
                                            torquent per conubia nostra, per inceptos himenaeos. Nulla facilisi. Nunc
                                            dolor velit, interdum finibus bibendum vel, mattis a magna. Mauris mollis
                                            sapien ac mi aliquet varius. Proin nec est nibh. In hac habitasse platea
                                            dictumst. Nullam porta risus vitae lectus pellentesque interdum. Proin ac
                                            leo fermentum, volutpat odio ut, lacinia erat. Suspendisse potenti. Praesent
                                            vitae faucibus lectus. Sed tincidunt at ex id maximus. Morbi tristique
                                            ullamcorper velit, non cursus libero eleifend quis. Aliquam aliquam odio
                                            dui.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="mb-3 border-0 shadow-sm accordion-item rounded-3">
                                <h3 class="accordion-header">
                                    <button class="shadow-none accordion-button rounded-3 collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#q-4" aria-expanded="false"
                                        aria-controls="q-4">Is there any kind of certificate of completion?</button>
                                </h3>
                                <div class="accordion-collapse collapse" id="q-4" data-bs-parent="#faq">
                                    <div class="pt-0 accordion-body fs-sm">
                                        <p>Nunc duis id aenean gravida tincidunt eu, tempor ullamcorper. Viverra aliquam
                                            arcu, viverra et, cursus. Aliquet pretium cursus adipiscing gravida et
                                            consequat lobortis arcu velit. Nibh pharetra fermentum duis accumsan lectus
                                            non. Massa cursus molestie lorem scelerisque pellentesque. Nisi, enim, arcu
                                            purus gravida adipiscing euismod montes, duis egestas. Vehicula eu etiam
                                            quam tristique tincidunt suspendisse ut consequat.</p>
                                        <p>Ornare senectus fusce dignissim ut. Integer consequat in eu tortor, faucibus
                                            et lacinia posuere. Turpis sit viverra lorem suspendisse lacus aliquam
                                            auctor vulputate. Quis egestas aliquam nunc purus lacus, elit leo elit
                                            facilisi. Dignissim amet adipiscing massa integer.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="mb-3 border-0 shadow-sm accordion-item rounded-3">
                                <h3 class="accordion-header">
                                    <button class="shadow-none accordion-button rounded-3 collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#q-5" aria-expanded="false"
                                        aria-controls="q-5">YouTube is full of free tutorials, videos and courses. Why
                                        should I take any courses here?</button>
                                </h3>
                                <div class="accordion-collapse collapse" id="q-5" data-bs-parent="#faq">
                                    <div class="pt-0 accordion-body fs-sm">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in facilisis
                                            nibh. Vestibulum ac porttitor sapien. Curabitur laoreet malesuada gravida.
                                            Phasellus vehicula vestibulum consequat. Curabitur feugiat eget sem vitae
                                            laoreet. Fusce porttitor finibus tellus, quis condimentum nibh. Vestibulum
                                            ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;
                                            Vivamus vehicula malesuada magna at viverra. Fusce non est eget libero
                                            convallis fringilla suspendisse.</p>
                                        <p>Nunc dolor velit, interdum finibus bibendum vel, mattis a magna. Mauris
                                            mollis sapien ac mi aliquet varius. Proin nec est nibh. Dignissim amet
                                            adipiscing massa integer.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="border-0 shadow-sm accordion-item rounded-3">
                                <h3 class="accordion-header">
                                    <button class="shadow-none accordion-button rounded-3 collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#q-6" aria-expanded="false"
                                        aria-controls="q-6">What happens if I forget or lose my password?</button>
                                </h3>
                                <div class="accordion-collapse collapse" id="q-6" data-bs-parent="#faq">
                                    <div class="pt-0 accordion-body fs-sm">
                                        <p>Suspendisse viverra volutpat eros. Curabitur in scelerisque lacus, quis
                                            fringilla sem. Nunc rutrum vel magna et ullamcorper. Sed consectetur augue
                                            vitae ligula consectetur, eu dapibus justo molestie. Phasellus sit amet
                                            metus magna. Sed tincidunt tempus felis vitae commodo. Etiam lobortis justo
                                            in elit pretium, sit amet aliquet tellus euismod. Curabitur in purus sed
                                            turpis aliquet pretium. Nunc ut magna tempus, iaculis sem id, vulputate
                                            ipsum. Etiam fermentum malesuada quam, in tempus purus pulvinar at.
                                            Vestibulum auctor congue pharetra. Class aptent taciti sociosqu ad litora
                                            torquent per conubia nostra, per inceptos himenaeos. Nulla facilisi. Nunc
                                            dolor velit, interdum finibus bibendum vel, mattis a magna. Mauris mollis
                                            sapien ac mi aliquet varius. Proin nec est nibh. In hac habitasse platea
                                            dictumst. Nullam porta risus vitae lectus pellentesque interdum. Proin ac
                                            leo fermentum, volutpat odio ut, lacinia erat. Suspendisse potenti. Praesent
                                            vitae faucibus lectus. Sed tincidunt at ex id maximus. Morbi tristique
                                            ullamcorper velit, non cursus libero eleifend quis. Aliquam aliquam odio
                                            dui.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}


    </main>


    <!-- Footer -->
    <footer class="pt-5 pb-4 footer pb-lg-5">
        <div class="container d-flex justify-content-center pt-lg-4">
            <p class="pb-2 mb-0 text-center nav d-block fs-xs text-md-start pb-lg-0">
                &copy; All rights reserved. Made by
                <a class="p-0 nav-link d-inline-block" href="https://damirich.id/" target="_blank"
                    rel="noopener">Damirich Group</a>
            </p>
        </div>
    </footer>


    <!-- Back to top button -->
    <a href="landing-online-courses.html#top" class="btn-scroll-top" data-scroll>
        <span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span>
        <i class="btn-scroll-top-icon bx bx-chevron-up"></i>
    </a>


    <!-- Vendor Scripts -->
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="assets/vendor/parallax-js/dist/parallax.min.js"></script>
    <script src="assets/vendor/rellax/rellax.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main Theme Script -->
    <script src="assets/js/theme.min.js"></script>
</body>

</html>
