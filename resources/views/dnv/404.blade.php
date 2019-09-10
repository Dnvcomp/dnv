@extends(env('DNV').'.layouts.dnv')

@section('content')
<main class="main-content-wrapper">
    <div class="error-area pt--90 pt-xl--70 pb--120 pb-xl--100 pb-lg--95 pb-sm--90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8 text-center">
                    <div class="error">
                        <h1>404</h1>
                        <h2>OPPS! PAGE NOT BE FOUND</h2>
                        <p>Sorry but the page you are looking for does not exist, have been removed, name changed or is temporarity unavailable.</p>
                        <form action="#" class="search-form mb--50">
                            <input type="text" name="search" id="error_search" placeholder="Search..." class="search-form__input">
                            <button type="submit" class="search-form__submit">Search</button>
                        </form>
                        <a href="{{ url('/') }}" class="btn">Back to home page</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection