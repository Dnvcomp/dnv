@if($articles)
    <div class="blog-sidebar pl--15 pl-lg--0">
        <h3>{{ trans('ru.Latest_post') }}</h3><br>
        @foreach($articles as $article)
            <div class="bl-widget author">
                <div class="inner">
                    <div class="thumb">
                        <img src="{{ asset(env('DNV')) }}/assets/img/others/{{ $article->img->path }}" alt="Author image">
                    </div>
                    <div class="info">
                        <h5 class="mb--5">{{ $article->alias }}</h5>
                        <a href="{{ route('articles.show',['alias'=>$article->alias]) }}">
                            <p class="mb--25">{{ $article->title }}</p>
                        </a>
                    </div>
                </div>
            </div>
            <br>
        @endforeach
    </div>
@endif