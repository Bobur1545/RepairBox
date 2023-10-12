<!DOCTYPE html>
<html lang="{{ config('app.locale', 'en') }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Repair Box') }}</title>
    <link rel="shortcut icon" href="{{ $fav_icon }}">
    <link href="{{ url(mix('css/app.css')) }}" rel="stylesheet">
    <link href="{{asset('/css/custom-style.css')}}" rel="stylesheet">
    <script type="text/javascript" src="https://2pay-js.2checkout.com/v1/2pay.js"></script>
    @if($app_data['square_state'])
        @if($app_data['square_sandbox'])
            <script src="https://sandbox.web.squarecdn.com/v1/square.js"></script>
        @else
             <script src="https://web.squarecdn.com/v1/square.js"></script>
        @endif
    @endif
</head>
<body>
    <div id="app"></div>
        <script>
            window.app = {!! json_encode( $app_data, JSON_THROW_ON_ERROR) !!};
        </script>
        @routes
        <script src="{{ url(mix('js/app.js')) }}"></script>
    </body>
</html>
