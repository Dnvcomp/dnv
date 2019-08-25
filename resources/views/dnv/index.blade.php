@extends(env('DNV').'.layouts.dnv')

@section('headerTop')
{!! $headerTop !!}
@endsection

@section('navigation')
    {!! $navigation !!}
@endsection

@section('slider')
    {!! $sliders !!}
@endsection

@section('content')
    {!! $content !!}
@endsection

@section('bar')
    {!! $rightBar !!}
@endsection

@section('footer')
    {!! $footer !!}
@endsection

@section('offCanvas')
    {!! $offCanvas !!}
@endsection


