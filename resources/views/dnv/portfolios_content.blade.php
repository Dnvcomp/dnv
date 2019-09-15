@if($portfolios)
    @foreach($portfolios as $portfolio)
<div class="col-lg-9 mb-md--50">
    <div class="row">
        <div class="col-12 mb--50">
            <div class="blog format-standard">
                <div class="blog__inner">
                    <div class="blog__media">
                        <figure class="image">
                            <img src="{{ asset(env('DNV')) }}/assets/img/articles/{{ $portfolio->img->max }}" height="800" alt="Author article">
                            <a href="{{ route('articles.show',['alias'=>$portfolio->alias]) }}" class="item-overlay"></a>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-3">
    <div class="blog-sidebar pl--15 pl-lg--0">
        <div class="inner">
            <div class="info">
                <h2 class="mb-5">{{ $portfolio->title }}</h2>
                <p class="mb--25">{!! str_limit($portfolio->text,200) !!}</p>
                <hr style="border: 1px solid #00FF7F">
                <h5>{{ $portfolio->created_at->format('d F, Y') }}</h5>
                <hr style="border: 1px solid #00FF7F"><br>
                <a href="{{ route('portfolios.show',['alias'=> $portfolio->alias]) }}" class="btn mb--50">{{ trans('ru.View') }}</a>
            </div>
        </div>
    </div>
</div>
@endforeach
    <!-- Pagination -->
    <div class="col-lg-9 mb-md--50">
        <div class="row">
            <div class="col-12 mb--50">
                <ul class="pagination">
                    @if($portfolios->lastPage() > 1)
                        @if($portfolios->currentPage() !== 1)
                            <li><a href="{{ $portfolios->url(($portfolios->currentPage() - 1)) }}" class="page-number">{{ trans('pagination.previous') }}</a></li>
                        @endif
                        @for($i = 1; $i <= $portfolios->lastPage(); $i++)
                            @if($portfolios->currentPage() == $i)
                                <li><a class="disabled">{{ $i }}</a></li>
                            @else
                                <li><a href="{{ $portfolios->url($i) }}" class="page-number">{{ $i }}</a></li>
                            @endif
                        @endfor
                        @if($portfolios->currentPage() !== $portfolios->lastPage())
                            <li><a href="{{ $portfolios->url(($portfolios->currentPage() + 1)) }}" class="page-number">{{ trans('pagination.next') }}</a></li>
                        @endif
                    @endif
                </ul>
            </div>
        </div>
    </div>
    <div class="mb--50"></div>
@endif