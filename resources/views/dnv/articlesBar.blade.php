
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
                                <div class="mb--20"></div>
                                @set($hash,($comment->email) ? md5($comment->email) : $comment->user->email)
                                <img src="https://www.gravatar.com/avatar/{{ $hash }}?d=mm&s=55" alt="Avatar" style="float: left; margin-right: 10px; margin-top: 11px; margin-bottom: 4px; border-radius: 26px;"><br>
                                <a class="page-title mb--5" href="{{ route('articles.show',['alias'=>$comment->article->alias]) }}">{{ $comment->article->title }}</a>
                                <a class="read-more-btn" href="{{ route('articles.show',['alias'=>$comment->article->alias]) }}">{{ isset($comment->user) ? $comment->user->name : $comment->name }}</a>
                            </li>
                        </ul>
                    @endforeach
                </div>
                <div class="mb-md--7pt7"></div>
            </div>
            <div class="mb--50"></div>
        @endif
        <!-- // Block RightBar 2 -->
    </div>