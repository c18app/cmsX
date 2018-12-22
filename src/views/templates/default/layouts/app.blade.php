<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @if(App::environment('local'))
        <title>{{ config('app.name', 'CmsX') }} - DEVELOPMENT</title>

        <link href="/vendor/c18app/cmsx/fontawesome/5.0.6/css/fontawesome-all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/vendor/c18app/cmsx/css/bootstrap.css">
        <script src="/vendor/c18app/cmsx/js/jquery-3.3.1.js"></script>
        <script src="/vendor/c18app/cmsx/js/bootstrap.bundle.js"></script>

        <link rel="stylesheet" href="/vendor/c18app/cmsx/css/app/app.css?v={{ time() }}">
        <script src="/css/app.css?v={{ time() }}"></script>
        <script src="/vendor/c18app/cmsx/js/app/app.js?v={{ time() }}"></script>
        <script src="/js/app.js?v={{ time() }}"></script>
    @else
        <title>{{ config('app.name', 'CmsX') }}</title>

        <link href="/vendor/c18app/cmsx/fontawesome/5.0.6/css/fontawesome-all.min.css?v={{ config('cmsx.version') }}"
              rel="stylesheet">
        <link rel="stylesheet" href="/vendor/c18app/cmsx/css/bootstrap.min.css?v={{ config('cmsx.version') }}">
        <script src="/vendor/c18app/cmsx/js/jquery-3.3.1.min.js?v={{ config('cmsx.version') }}"></script>
        <script src="/vendor/c18app/cmsx/js/bootstrap.bundle.min.js?v={{ config('cmsx.version') }}"></script>

        <link rel="stylesheet" href="/vendor/c18app/cmsx/css/app/app.css?v={{ config('cmsx.version') }}">
        <script src="/css/app.css?v={{ config('cmsx.version') . '.' . env('APP_VERSION') }}"></script>
        <script src="/vendor/c18app/cmsx/js/app/app.js?v={{ config('cmsx.version') }}"></script>
        <script src="/js/app.js?v={{ config('cmsx.version') . '.' . env('APP_VERSION') }}"></script>
    @endif
</head>
<body class="app">
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            @include(Config('cmsx.app.template').'::flash')
            @yield('content')
        </div>
    </div>
</div>
</body>
</html>
