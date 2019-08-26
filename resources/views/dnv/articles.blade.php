@extends(env('DNV').'.layouts.dnv')

@section('headerTop')
    {!! $headerTop !!}
@endsection

@section('navigation')
    {!! $navigation !!}
@endsection

@section('content')
    {!! $content !!}
@endsection

@section('bar')
    {!! $rightBar or '' !!}
@endsection

@section('footer')
    {!! $footer !!}
@endsection

@section('offCanvas')
    {!! $offCanvas !!}
@endsection