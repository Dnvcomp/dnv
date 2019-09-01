<!doctype html>
<html class="no-js" lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="{{ (isset($description)) ? $description : '' }}">
        <meta name="keywords" content="{{ (isset($keywords)) ? $keywords : '' }}">
        <meta name="author" content="Mikolai Dziamko">
        <meta name="email" content="dnvcomp@hotmail.com">
        <title>{{ $title or 'Dnvcomp - Web разработка' }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        <link rel="stylesheet" href="{{ asset(env('DNV')) }}/assets/css/vendor.css">
        <link rel="stylesheet" href="{{ asset(env('DNV')) }}/assets/css/main.css">
        <script src="{{ asset(env('DNV')) }}/assets/js/comment-reply.js"></script>
    </head>
    <body>
        <!-- Main Wrapper Start -->
        <div class="wrapper">
            <!-- Header Start -->
            <header class="header">
                <div class="header__inner fixed-header">
                    <!-- Header top -->
                    @yield('headerTop')
                    <!-- Header top end-->
                    <!-- Header navigation -->
                    @yield('navigation')
                    <!-- Header navigation end -->
                </div>
            </header>
            <!-- Header End -->
            <!-- Main Content Wrapper Start -->
            <main class="main-content-wrapper">
                <!-- Slider area Start -->
                @yield('slider')
                <!-- Slider area End -->
                <!-- Content -->
                <div class="inner-page-content mt--9pt4">
                    <div class="container">
                        <div class="row mb--10pt-{{ isset($bar) ? $bar : 'no' }}">
                            <!-- content -->
                            @yield('content')
                            <!-- / content -->

                            <!-- Block right 1 -->
                            @yield('bar')
                        <!-- / Block right 1 -->
                        </div>
                    </div>
                </div>
                <!-- / Content -->
            </main><!-- / Main Content Wrapper -->
            <!-- Footer -->
            @yield('footer')
            <!-- Footer End-->
            <!-- OffCanvas Menu Start -->
            @yield('offCanvas')
            <!-- OffCanvas Menu End -->
            <!-- Global Overlay Start -->
            <div class="global-overlay"></div>
            <!-- Global Overlay End -->
            <!-- Global Overlay Start -->
            <a class="scroll-to-top" href=""><i class="fa fa-angle-up"></i></a>
            <!-- Global Overlay End -->
        </div>
        <!-- Main Wrapper End -->
        <!-- *** JS Files **  -->
        <script src="{{ asset(env('DNV')) }}/assets/js/vendor.js"></script>
        <script src="{{ asset(env('DNV')) }}/assets/js/main.js"></script>
    </body>
</html>