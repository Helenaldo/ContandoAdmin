<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Contando | @yield('title')</title>
        <meta name="description" content="Description">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2">
        <link rel="icon" href="/assets/img/favicon/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="/assets/css/bootstrap-grid.css">
        <link rel="stylesheet" href="/assets/css/style.css">
        <link rel="preload" href="/assets/fonts/source-sans-pro-v21-latin/source-sans-pro-v21-latin-regular.woff2" as="font"
            type="font/woff2" crossorigin>
        <link rel="preload" href="/assets/fonts/source-sans-pro-v21-latin/source-sans-pro-v21-latin-700.woff2" as="font"
            type="font/woff2" crossorigin>
        <link rel="preload" href="/assets/fonts/montserrat-v25-latin/montserrat-v25-latin-700.woff2" as="font"
            type="font/woff2" crossorigin>
        <link rel="preload" href="/assets/fonts/montserrat-v25-latin/montserrat-v25-latin-600.woff2" as="font"
            type="font/woff2" crossorigin>
        <link rel="preload" href="/assets/fonts/material-icons/material-icons.woff2" as="font" type="font/woff2" crossorigin>
        <link rel="preload" href="/assets/fonts/material-icons/material-icons-outlined.woff2" as="font" type="font/woff2"
            crossorigin>
        @yield( 'css' )
    </head>
    <body>
        <main class="main">
            <div class="main-inner">
                <!-- Begin mobile main menu -->
                <nav class="mmm">
                    <div class="mmm-content">
                        <ul class="mmm-list">
                            <li>
                                <a href="/">Home</a>
                            </li>
                            <li>
                                <a href="{{ route('tenant.create')}}">Registrar</a>
                            </li>
                            {{--

                            <li>
                                <a href="services.html">Services</a>
                            </li>
                            <li>
                                <a href="typography.html">Typography</a>
                            </li>
                            <li>
                                <a href="tabs-and-accordions.html">Tabs & Accordions</a>
                            </li>
                            <li>
                                <a href="news.html">News</a>
                            </li>
                            <li>
                                <a href="contacts.html">Contacts</a>
                            </li>
                            --}}
                        </ul>
                    </div>
                </nav>
                <!-- End mobile main menu -->
                <header class="header header-minimal">
                    <nav class="header-fixed">
                        <div class="container">
                            <div class="row flex-nowrap align-items-center justify-content-between">
                                <div class="col-auto header-fixed-col logo-wrapper">
                                    <a href="/" class="logo" title="Contando">
                                    <img src="/assets/img/logo-contando.png" alt="Contando">
                                    </a>
                                </div>
                                <div class="col-auto col-xl col-static header-fixed-col d-none d-xl-block">
                                    <div class="row flex-nowrap align-items-center justify-content-end">
                                        <div class="col header-fixed-col d-none d-xl-block col-static">
                                            <!-- Begin main menu -->
                                            <nav class="main-mnu">
                                                <ul class="main-mnu-list">
                                                    <li>
                                                        <a href="/" data-title="Home">
                                                        <span>Home</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('tenant.create')}}" data-title="Registrar">
                                                        <span>Registrar</span>
                                                        </a>
                                                    </li>

                                                    {{--

                                                    <li>
                                                        <a href="services.html" data-title="Services">
                                                        <span>Services</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="typography.html" data-title="Typography">
                                                        <span>Typography</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="tabs-and-accordions.html" data-title="Tabs & Accordions">
                                                        <span>Tabs & Accordions</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="news.html" data-title="News">
                                                        <span>News</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="contacts.html" data-title="Contacts">
                                                        <span>Contacts</span>
                                                        </a>
                                                    </li>
                                                    --}}
                                                </ul>
                                            </nav>
                                            <!-- End main menu -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto d-block d-xl-none header-fixed-col">
                                    <div class="main-mnu-btn">
                                        <span class="bar bar-1"></span>
                                        <span class="bar bar-2"></span>
                                        <span class="bar bar-3"></span>
                                        <span class="bar bar-4"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </header>

                @yield( 'content' )


            </div>
            <!-- Begin footer -->
            <footer class="footer footer-minimal">
                <div class="footer-main">
                    <div class="container">
                        <div class="row items align-items-center">
                            <div class="col-lg-3 col-md-4 col-12 item">
                                <div class="widget-brand-info">
                                    <div class="widget-brand-info-main">
                                        <a href="/" class="logo" title="Contando">
                                        <img data-src="assets/img/logo-white.svg" class="lazy"
                                            src="/assets/img/logo-contando-sem-fundo.png" alt="Contando" data-loaded="true"
                                            style="opacity: 1;">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md item">
                                <div class="footer-item">
                                    <nav class="footer-nav">
                                        <ul class="footer-mnu footer-mnu-line">
                                            <li><a href="/" class="hover-link" data-title="Home"><span>Home</span></a></li>
                                            <li><a href="{{ route('tenant.create')}}" class="hover-link" data-title="Registrar"><span>Registrar</span></a></li>
                                            {{--
                                            <li><a href="#!" class="hover-link" data-title="Services"><span>Services</span></a></li>
                                            <li><a href="#!" class="hover-link" data-title="News"><span>News</span></a></li>
                                            <li><a href="#!" class="hover-link" data-title="Contacts"><span>Contacts</span></a></li>
                                            --}}
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="container">
                        <div class="row justify-content-between items">
                            <div class="col-md-auto col-12 item">
                                <nav class="footer-links">
                                    <ul>
                                        <li><a href="#">Termos e Condições de Uso</a></li>
                                        {{--
                                        <li><a href="terms-and-conditions.html">Terms and Conditions</a></li>
                                        --}}
                                        <li><a href="#">Politicas de privacidade</a></li>
                                        {{--
                                        <li><a href="privacy-policy.html">Politicas de privacidade</a></li>
                                        --}}
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-md-auto col-12 item">
                                <div class="copyright">© 2024 Contando. Todos os direitos Reservados.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End footer -->
        </main>
        <!-- End main -->

        <script src="/assets/libs/jquery/jquery.min.js"></script>
        <script src="/assets/libs/lozad/lozad.min.js"></script>
        <script src="/assets/libs/device/device.js"></script>
        <script src="/assets/libs/spincrement/jquery.spincrement.min.js"></script>
        <script src="/assets/libs/pristine/pristine.min.js"></script>
        <script src="/assets/js/custom.js"></script>
        <script src="/assets/js/forms.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

        {{-- <script src="/assets/js/mascaras.js" type="text/javascript"></script> --}}
        @yield( 'js' )

    </body>
</html>
