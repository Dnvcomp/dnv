@extends(env('DNV').'.layouts.dnv')

@section('content')
    <section class="contact-area mb--9pt5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="{{ url('login') }}" method="post" id="form" class="form">
                        <input type="text" name="name" id="name" class="form__input mb--30" placeholder="{{ trans('ru.Login_name') }}">
                        <input type="password" name="password" id="password" class="form__input mb--30" placeholder="{{ trans('ru.password') }}">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-shape-round form__submit">{{ trans('ru.Entrance') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection