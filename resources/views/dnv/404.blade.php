@extends(env('DNV').'.layouts.dnv')

@section('content')
<main class="main-content-wrapper">
    <div class="error-area pt--90 pt-xl--70 pb--120 pb-xl--100 pb-lg--95 pb-sm--90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8 text-center">
                    <div class="error">
                        <h1>404</h1>
                        <h2>{{ trans('ru.Page_not_be_found') }}</h2>
                        <p>{{ trans('ru.text-404') }}</p>

                        <a href="{{ url('/') }}" class="btn">{{ trans('ru.home-page') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection