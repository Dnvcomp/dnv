<li id="li-comment-{{ $data->id }}" class="borBlue">
    <div id="comment-{{ $data->id }}" class="single-comment">
        <figure class="comment-avatar">
            <img src="https://gravatar.com/avatar/{{ $data['hash'] }}?d=mm&s=90" alt="Avatar">
        </figure>
        <div class="comment-info">
            <div class="comment-meta">
                <h4>{{ $data->name }}</h4>
            </div>
            <div class="comment-content">
                <p>{!! $data->text !!}</p>
            </div>
            <span class="comment-date">{{ is_object($data->created_at) ? $data->created_at->format('d F, Y \a\t H:i') : ''}}</span>
        </div>
    </div>
</li>