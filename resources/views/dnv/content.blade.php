@if($portfolios && count($portfolios) > 0)
<div class="col-lg-9 mb-md--50">
    <div class="row">
        <div class="col-12 mb--50">
            <div class="blog format-standard">
                <div class="blog__inner">
                    <h3 class="text-left">{{ trans('ru.Latest_articles') }}</h3><br>
                    @foreach($portfolios as $key=>$item)
                        @if($key == 0)
                            <div class="blog__media">
                                <figure class="image">
                                    <img src="{{ asset(env('DNV')) }}/assets/img/articles/{{ $item->img->max }}" alt="Blog-image" class="w-100">
                                    <a href="{{ route('portfolios.show',['alias'=>$item->alias]) }}" class="item-overlay"></a>
                                </figure>
                            </div>
                            <div class="blog__info">
                                <h3 class="blog__title"><a href="{{ route('portfolios.show',['alias'=>$item->alias]) }}">{{ $item->title }}</a></h3>
                                <div class="blog__meta">
                                    <a href="#">{{ $item->filter->title }}</a>
                                </div>
                                <div class="blog__desc">
                                    <p>{{ str_limit($item->text,200) }}</p>
                                    <a href="{{ route('portfolios.show',['alias'=>$item->alias]) }}" class="btn" data-animation="fadeInUp" data-duration=".3s" data-delay=".6s">{{ trans('ru.Read_more') }}</a>
                                </div>
                            </div>
                            @continue
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <section class="testimonial-area mb--9pt5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="element-carousel slick-dot-mt-40" data-slick-options='{
                                "spaceBetween": 30,
                                "slidesToShow": 3,
                                "slidesToScroll": 1,
                                "dots": true
                            }' data-slick-responsive='[
                                {"breakpoint": 992, "settings": {"slidesToShow": 2}},
                                {"breakpoint": 768, "settings": {"slidesToShow": 1}}
                            ]'>
                            @foreach($portfolios as $key=>$item)
                            <div class="item">
                                <div class="testimonial testimonial-style-2">
                                    <div class="testimonial__inner">
                                        <div class="testimonial__desc">
                                            <p>{{ str_limit($item->text,135) }}</p>
                                        </div>
                                        <div class="testimonial__author">
                                            <figure class="testimonial__author--img">
                                                <img src="{{ asset(env('DNV')) }}/assets/img/others/{{ $item->img->mini }}" alt="client">
                                            </figure>
                                            <div class="testimonial__author--info">
                                                <h3 class="testimonial__author--name">{{ $item->title }}</h3>
                                                <p class="testimonial__author--role">{{ $item->filter->title }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@else
    <h2>{{ trans('ru.Articles_comment_no') }}</h2>
@endif