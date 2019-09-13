<!doctype html>
<html class="no-js" lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $title or 'Dnvcomp - Web разработка' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <script src="//cdn.ckeditor.com/4.12.1/full/ckeditor.js"></script>
    <link rel="stylesheet" href="{{ asset(env('DNV')) }}/assets/css/vendor.css">
    <link rel="stylesheet" href="{{ asset(env('DNV')) }}/assets/css/main.css">
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
        <!-- // Header End -->
        <!-- Main Content Wrapper Start -->
        @if (count($errors) > 0)
            <div class="box error-box">

                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach

            </div>
        @endif

        @if (session('status'))
            <div class="box success-box">
                {{ session('status') }}
            </div>
        @endif

        @if (session('error'))
            <div class="box error-box">
                {{ session('error') }}
            </div>
        @endif
        <main class="main-content-wrapper">
            <!-- Content -->
            <div class="inner-page-content mt--9pt4">
                <div class="container">
                    <div class="row mb--10pt-{{ isset($bar) ? $bar : 'no' }}">
                        @yield('content')
                    </div>
                </div>
            </div>
            <!-- // Content -->
        </main>
        <!-- Footer -->
            @yield('footer')
        <!-- // Footer End-->
        <!-- OffCanvas Menu Start -->
            @yield('offCanvas')
        <!-- // OffCanvas Menu End -->
        <!-- Global Overlay Start -->
            <div class="global-overlay"></div>
        <!-- // Global Overlay End -->
        <!-- Global Overlay Start -->
            <a class="scroll-to-top" href=""><i class="fa fa-angle-up"></i></a>
        <!-- // Global Overlay End -->
    </div>
    <!-- Main Wrapper End -->
    <!-- *** JS Files **  -->
    <script src="{{ asset(env('DNV')) }}/assets/js/vendor.js"></script>
    <script src="{{ asset(env('DNV')) }}/assets/js/main.js"></script>
    <script src="{{ asset(env('DNV')) }}/assets/js/jquery.js"></script>
    <script src="{{ asset(env('DNV')) }}/assets/js/bootstrap-filestyle.min.js"></script>
</body>
</html>