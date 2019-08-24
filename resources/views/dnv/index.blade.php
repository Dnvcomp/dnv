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
