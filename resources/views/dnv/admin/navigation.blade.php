<div class="header__middle">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="header__middle-inner">
                    <div class="header__middle-left">
                        <div class="logo">
                            <a href="{{ url('/') }}" class="logo--normal">
                                <img src="{{ asset(env('DNV')) }}/assets/img/logo/logo.jpg" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="header__middle-center">
                        @if($menu)
                            <nav class="main-navigation text-center d-none d-lg-block">
                                <ul class="mainmenu">
                                    @include(env('DNV').'.admin.linkMenuItems',['items'=>$menu->roots()])
                                </ul>
                            </nav>
                        @endif
                    </div>
                    <div class="header-toolbar-wrap d-block d-lg-none">
                        <div class="header-toolbar">
                            <a href="#offcanvasMenu" class="header-toolbar__btn toolbar-btn menu-btn">
                                <div class="hamburger-icon">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>