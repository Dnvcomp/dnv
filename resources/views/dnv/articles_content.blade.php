@if($articles)
    <div class="col-lg-9 mb-md--50">
        <div class="row">
            <div class="col-12 mb--50">
                <div class="blog format-standard">
                    <div class="blog__inner">
                        @foreach($articles as $article)
                            <div class="blog__media">
                                <figure class="image">
                                    <img src="{{ asset(env('DNV')) }}/assets/img/blog/{{ $article->img->max }}"alt="Blog-image" alt="Blog-image" class="w-100">
                                    <a href="{{ route('articles.show',['alias'=>$article->alias]) }}" class="item-overlay"></a>
                                </figure>
                            </div>
                            <div class="blog__info">
                                <a href="{{ route('articles.show',['alias'=>$article->alias]) }}"><h3 class="page__title">{{ $article->title }}</h3><br></a>
                                <div class="blog__desc">
                                    <p>{!! $article->desc !!}</p>
                                    <a href="{{ route('articles.show',['alias'=>$article->alias]) }}" class="btn mb--9pt5" data-animation="fadeInUp" data-duration=".3s" data-delay=".6s">{{ trans('ru.Read_more') }}</a>
                                </div>
                                <br>
                                <section class="feature-area mb--9pt5">
                                    <div class="container">
                                        <div class="row no-gutters gutter-lg-30 justify-content-between">

                                            <div class="col-xl-3 col-md-4 mb-sm--45">
                                                <div class="feature">
                                                    <div class="feature__icon text-center">
                                                        <span class="icon icon-box icon-outline">
                                                            <i class="fa fa-users" style="color: #002257;" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                    <div class="feature__info text-center">
                                                        <a href="#"><h3 class="feature__title">{{ $article->user->name }}</h3></a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-3 col-md-4 mb-sm--45">
                                                <div class="feature">
                                                    <div class="feature__icon text-center">
                                                        <span class="icon icon-box icon-outline">
                                                            <i class="fa fa-folder-open-o" style="color: #002257;" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                    <div class="feature__info text-center">
                                                        <a href="{{ route('articlesCat',['cat_alias'=> $article->category->alias]) }}"><h3 class="feature__title">{{ $article->category->title }}</h3></a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-3 col-md-4">
                                                <div class="feature">
                                                    <div class="feature__icon text-center">
                                                        <span class="icon icon-box icon-outline">
                                                            <i class="fa fa-comments-o" style="color: #002257;" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                    <div class="feature__info text-center">
                                                        <a href="{{ route('articles.show',['alias'=>$article->alias]) }}#respond"><h3 class="feature__title">{{ count($article->comments) ? count($article->comments) : '0' }}&nbsp;{{ Lang::choice('ru.comments',count($article->comments)) }}</h3></a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </section>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- Pagination -->
        <div class="row">
            <div class="col-12 text-center">
                <ul class="pagination">
                    @if($articles->lastPage() > 1)
                        @if($articles->currentPage() !== 1)
                            <li><a href="{{ $articles->url(($articles->currentPage() - 1)) }}" class="page-number">{{ trans('pagination.previous') }}</a></li>
                        @endif
                        @for($i = 1; $i <= $articles->lastPage(); $i++)
                                @if($articles->currentPage() == $i)
                                    <li><a class="disabled">{{ $i }}</a></li>
                                @else
                                    <li><a href="{{ $articles->url($i) }}" class="page-number">{{ $i }}</a></li>
                                @endif
                            @endfor
                            @if($articles->currentPage() !== $articles->lastPage())
                                <li><a href="{{ $articles->url(($articles->currentPage() + 1)) }}" class="page-number">{{ trans('pagination.next') }}</a></li>
                            @endif
                    @endif
                </ul>
            </div>
        </div>
        <div class="mb--50"></div>
    </div>
    @else
    {!! trans('ru.Articles_comment_no') !!}
@endif
