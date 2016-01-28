@extends('main')

@section('content')

 <h1>Contact Page</h1>
    @if($first == 'Junaid')
    <h1>Hello {{ $first }}</h1>
    @else
        <h4> You don't have a name </h4>
    @endif
@stop

@section('footer')
    <script>alert("Hello to contact page");</script>
@stop