@foreach($items as $item)
    <li id="li-comment-{{ $item->id }}" class="{{ ($item->user_id == $article->user_id) ? 'bypostauthor odd' : ''}}">
        <div id="comment-{{ $item->id }}" class="single-comment">
            <figure class="comment-avatar">
                @set($hash, isset($item->email) ? md5($item->email) : md5($item->user->email))
                <img src="https://gravatar.com/avatar/{{ $hash }}?d=mm&s=90" alt="Avatar">
            </figure>
            <div class="comment-info">
                <div class="comment-meta">
                    <h4>{{ $item->user->name or $item->name }}</h4>
                    <div class="metadata">
                        <!-- <a class="comment-reply-link" href="#respond"><span># 1</span><br> Reply</a>-->
                        <a class="comment-reply-link" href="#respond" onclick="return addComment.moveForm(&quot;comment-{{$item->id}}&quot;, &quot;{{$item->id}}&quot;, &quot;respond&quot;, &quot;{{$item->article_id}}&quot;)"><span># 1</span><br>{{ trans('ru.Reply') }}</a>
                    </div>
                </div>
                <div class="comment-content">
                    <p>{!! $item->text !!}</p>
                </div>
                <span class="comment-date">{{ is_object($item->created_at) ? $item->created_at->format('d F, Y \a\t H:i') : ''}}</span>
            </div>
        </div>
        @if(isset($com[$item->id]))
            <ul class="children">
                @include(env('DNV').'.comment',['items'=>$com[$item->id]])
            </ul>
        @endif
    </li>
@endforeach