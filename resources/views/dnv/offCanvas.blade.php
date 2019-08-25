@if($menu)
<div class="offcanvas-menu-wrapper" id="offcanvasMenu">
    <div class="offcanvas-menu-inner">
        <a href="" class="btn-close">
            <img src="{{ asset(env('DNV')) }}/assets/img/icons/icon-cross.png" alt="Cross">
        </a>
        <nav class="offcanvas-navigation">
            <ul class="offcanvas-menu">
                @include(env('DNV').'.linkOffCanvasItems',['items'=>$menu->roots()])
            </ul>

            <!-- div class="site-info vertical">
                <div class="site-info__item">
                    <a href="tel:+01223566678"><strong>+01 2235 666 78</strong></a>
                    <a href="mailto:Support@contixs.com">Support@contixs.com</a>
                </div>
            </div -->
        </nav>
    </div>
</div>
@endif