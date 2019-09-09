@if($portfolio)
    <div class="container">
        <div class="row justify-content-center mb--10pt">
            <div class="col-lg-12">
                <div class="row">
                    <article class="blog format-standard">
                        <div class="blog__inner">
                            <figure class="image">
                                <img src="{{ asset(env('DNV')) }}/assets/img/blog/{{ $portfolio->img->max }}" class="w-100 mb--25" alt="Author articles">
                                <a href="{{ route('portfolios.show',['alias'=>$portfolio->alias]) }}" class="item-overlay"></a>
                            </figure>
                        </div>
                        <div class="blog-info">
                            <h3 class="blog__title mb--5"><a href="{{ route('portfolios.show',['alias'=>$portfolio->alias]) }}">{{ $portfolio->title }}</a></h3>
                            <div class="blog__desc">
                                <p>{!! $portfolio->text !!}</p>
                                <hr style="border: 1px solid #00FF7F;">
                            </div>
                            <div class="blog-meta">
                                <span style="float: left;">{{ $portfolio->created_at->format('d F, Y') }}&nbsp;</span>
                                <span style="float: right;">{{ $portfolio->filter->title }}</span>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
@endif
<section class="blog-area mb--9pt3 mb-sm--8pt8">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="element-carousel"
                     data-slick-options='{
                                "spaceBetween": 30,
                                "slidesToShow": 3,
                                "autoplay": true
                            }'
                     data-slick-responsive='[
                                {"breakpoint": 1200, "settings": {"slidesToShow": 3}},
                                {"breakpoint": 992, "settings": {"slidesToShow": 2}},
                                {"breakpoint": 768, "settings": {"slidesToShow": 1}}
                            ]'>
                    @if(!$portfolios->isEmpty())
                        @foreach($portfolios as $portfolio)
                            <div class="item">
                                <article class="blog">
                                    <div class="blog__inner">
                                        <div class="blog__media">
                                            <figure class="image">
                                                <img src="{{ asset(env('DNV')) }}/assets/img/blog/{{ $portfolio->img->max }}" width="370" alt="Blog Image" class="w-100">
                                                <a href="{{ route('portfolios.show',['alias'=>$portfolio->alias]) }}" class="item-overlay"></a>
                                            </figure>
                                        </div>
                                        <div class="blog__info">
                                            <h3 class="blog__title"><a href="{{ route('portfolios.show',['alias'=>$portfolio->alias]) }}">{{ $portfolio->title }}</a></h3>
                                            <div class="blog__meta">
                                                <span class="posted-on">{{ $portfolio->created_at->format('d F, Y') }}</span>
                                                <span class="posted-by"><span>By: </span>{{ $portfolio->filter->title }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>