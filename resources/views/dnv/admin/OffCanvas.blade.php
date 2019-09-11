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
            </nav>
        </div>
    </div>
@endif