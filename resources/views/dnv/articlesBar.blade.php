
    <div class="blog-sidebar pl--15 pl-lg--0">
        <!-- Block RightBar -->
        <h5 class="title text-center">{{ trans('ru.Latest_articles') }}</h5>
        @if(!$portfolios->isEmpty())
            @foreach($portfolios as $portfolio)
                <div class="bl-widget author">
                    <div class="inner">
                        <div class="thumb">
                            <img src="{{ asset(env('DNV')) }}/assets/img/others/{{ $portfolio->img->path }}" alt="Author article">
                        </div>
                        <div class="info">
                            <h5 class="mb--5">{{ $portfolio->title }}</h5>
                            <p class="mb--25">{{ str_limit($portfolio->text,75) }}</p>
                            <a class="read-more-btn" href="{{ route('articles.show',['alias'=>$portfolio->alias]) }}">{{ trans('ru.Read_more') }}</a>
                            <div class="mb--20"></div>
                        </div>
                    </div>
                </div>
                <div class="mb--25"></div>
            @endforeach
        @endif
        <!-- // Block RightBar -->
        <!-- Block RightBar 2 -->
        @if(!$comments->isEmpty())
            <div class="bl-widget post mt--50">
                <h5 class="title text-center">{{ trans('ru.Latest_comments') }}</h5>
                <div class="inner">
                    @foreach($comments as $comment)
                        <ul class="post-list">
                            <li>
                                <a class="read-more-btn" href="{{ route('articles.show',['alias'=>$comment->article->alias]) }}"><i class="fa fa-user"></i>&nbsp;&nbsp;{{ isset($comment->user) ? $comment->user->name : $comment->name }}</a>
                                <div class="mb--20"></div>
                                <a class="page-title" href="{{ route('articles.show',['alias'=>$comment->article->alias]) }}">{{ $comment->article->title }}</a>
                                <div class="mb--5"></div>
                            </li>
                        </ul>
                    @endforeach
                </div>
            </div>
        @endif
        <!-- // Block RightBar 2 -->
    </div>