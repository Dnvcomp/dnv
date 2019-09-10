@extends(env('DNV').'.layouts.dnv')

@section('content')
    <section class="contact-area mb--9pt5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="{{ url('login') }}" method="post" id="form" class="form">
						{{ csrf_field() }}
                        <input type="text" name="login" id="login" class="form__input mb--30" placeholder="{{ trans('ru.Login_name') }}">
                        <input type="password" name="password" id="password" class="form__input mb--30" placeholder="{{ trans('ru.password') }}">
                        <button type="submit" class="btn btn-shape-round form__submit">{{ trans('ru.Entrance') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection