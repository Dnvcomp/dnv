<li class="borBlue" id="li-comment-{{ $data['id'] }}">
    <div id="comment-{{ $data['id'] }}" class="single-comment">
        <figure class="comment-avatar">
            <img src="https://gravatar.com/avatar/{{ $data['hash'] }}?d=mm&s=90" alt="Avatar">
        </figure>
        <div class="comment-info">
            <div class="comment-meta">
                <h4>{{ $data['name'] }}</h4>
            </div>
            <div class="comment-content">
                <p>{!! $data['text'] !!}</p>
            </div>
        </div>
    </div>
</li>