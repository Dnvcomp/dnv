@if($article)
    <div class="col-lg-9 mb-md--50">
        <div class="row">
            <div class="col-12 mb--50">
                <div class="blog format-standard">
                    <div class="blog__inner">
                        <div class="blog__media">
                            <figure class="image">
                                <img src="{{ asset(env('DNV')) }}/assets/img/blog/{{ $article->img->max }}" alt="Blog image">
                                <a href="{{ route('articles.show',['alias'=>$article->alias]) }}" class="item-overlay"></a>
                            </figure>
                        </div>
                        <div class="blog__info">
                            <a href="{{ route('articles.show',['alias'=>$article->alias]) }}"><h3 class="page__title">{{ $article->title }}</h3></a>
                            <div class="blog__desc">
                                <p>{!! $article->desc !!}</p>
                            </div>
                            <br><br>

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
                            <!-- Start form comments -->
                            <div class="row mt--50">
                                <div class="container">
                                    <section class="comment">
                                        <h2 class="comment-title mb--25"><i class="fa fa-comments">&nbsp;</i>{{ count($article->comments) ? count($article->comments) : '0' }} {{ Lang::choice('ru.comments',count($article->comments)) }}</h2>
                                        <ul class="comment-list mb--45">
                                            <li>
                                                <div class="single-comment">

                                                    <div class="comment-info">
                                                        <div class="comment-meta">
                                                            <figure class="comment-avatar">
                                                                <img src="{{ asset(env('DNV')) }}/assets/img/others/avatar-large-2.png" alt="Comment avatar">
                                                            </figure>
                                                            <h4>Carlos</h4>
                                                            <div class="metadata">
                                                                <span class="comment-date">February 07, 2019</span>
                                                                <a href="#" class="comment-reply-link"># Reply</a>
                                                            </div>
                                                        </div>
                                                        <div class="comment-content">
                                                            <p>Hi, this is a comment.<br> To delete a comment, just log in and view the post's comments. There you will have the option to edit or delete them.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                        <div class="comment-respond" id="comments">
                                            <h3 class="comment-reply-title">{{ trans('ru.reply_and_comment') }}</h3>
                                            <form action="#" class="form comm-form">
                                                <div class="form__group mb--25 mb-sm--20">
                                                    <div class="form-row">
                                                        <div class="col-md-4 mb-sm--20">
                                                            <input type="text" name="comment_name" id="comment_name" class="form__input" placeholder="{{ trans('ru.name') }}">
                                                        </div>
                                                        <div class="col-md-4 mb-sm--20">
                                                            <input type="email" name="comment_email" id="comment_email" class="form__input" placeholder="{{trans('ru.email')}}">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <input type="url" name="comment_website" id="comment_website" class="form__input" placeholder="{{ trans('ru.web_site') }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form_group mb--25 mb-sm--20">
                                                    <div class="form-row">
                                                        <div class="col-12">
                                                            <textarea name="review" id="review" class="form__input form__input--textarea" placeholder="{{ trans('ru.comment') }}"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form__group">
                                                    <div class="form-row">
                                                        <div class="col-12">
                                                            <button type="submit" class="btn">{{ trans('ru.submit') }}</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                    </section>
                                </div>
                            </div>
                            <!-- End form comments -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    {!! trans('ru.Articles_comment_no') !!}
@endif