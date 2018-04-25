@extends('layouts.app')
@section('content')
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Google Maps</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        {!! $map['js'] !!}
    </head>
    <body>
        <div style="margin-bottom:10px;">
            <a href="/direction">Direction</a> | <a href="/circle">Circle</a>
        </div>
        {!! $map['html'] !!}
        <div id="directionsDiv"></div>
    </body>
</html>
@endsection
