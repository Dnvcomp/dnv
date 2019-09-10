<div class="container">
@if(count($errors) > 0)
    <div class="box error-box">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif
@if(session('status'))
    <div class="box info-box">
        {{ session('status') }}
    </div>
@endif
</div>

<section class="contact-area mb--9pt5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-5 mb-md--50">
                <div class="heading mb--42">
                    <h2>{{ trans('ru.My_address') }}</h2>
                </div>
                <div class="contact-info mb--30">
                    <p><i class="fa fa-phone"></i> +375 44 55-25-367</p>
                    <p><i class="fa fa-envelope-o"></i> dnvcomp@hotmail.com</p>
                    <p><i class="fa fa-clock-o"></i> Mon – Fri : 9:00 – 18:00</p>
                </div>
            </div>

            <div class="col-md-7 offset-lg-1">
                <div class="heading mb--42">
                    <h2 class="text-center">{{ trans('ru.Write_to_us') }}</h2>
                </div>
                <form action="{{ route('contacts') }}" method="post" id="form" enctype="multipart/form-data" class="form">
                    <input type="text" name="name" id="name" class="form__input mb--30" placeholder="{{ trans('ru.Name') }}">
                    <input type="email" name="email" id="email" class="form__input mb--30" placeholder="{{ trans('ru.Email') }}">
                    <textarea class="form__input form__input--textarea mb--30" placeholder="{{ trans('ru.Your_message') }}" id="text" name="text"></textarea>
                    {{ csrf_field() }}
                     <button type="submit" class="btn btn-shape-round form__submit">{{ trans('ru.Send') }}</button>
                 </form>
            </div>
            <script type="text/javascript">
                var messages_form_126 = {
                    name: "{{ trans('ru.Enter_name') }}",
                    email: "{{ trans('ru.Enter_email') }}",
                    message: "{{ trans('ru.Enter_message') }}"
                };
            </script>
        </div>
    </div>
</section>