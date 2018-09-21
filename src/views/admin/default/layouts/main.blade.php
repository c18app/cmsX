<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @if(App::environment('local'))
        <title>Admin - DEVELOPMENT</title>

        <link href="/vendor/c18app/cmsx/fontawesome/5.0.6/css/fontawesome-all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/vendor/c18app/cmsx/css/bootstrap.css">
        <script src="/vendor/c18app/cmsx/js/jquery-3.3.1.js"></script>
        <script src="/vendor/c18app/cmsx/js/bootstrap.bundle.js"></script>

        <link rel="stylesheet" href="/vendor/c18app/cmsx/css/admin/app.css?v={{ time() }}">
        <script src="/vendor/c18app/cmsx/js/admin/app.js?v={{ time() }}"></script>
    @else
        <title>Admin</title>

        <link href="/vendor/c18app/cmsx/fontawesome/5.0.6/css/fontawesome-all.min.css?v={{ config('cmsx.version') }}" rel="stylesheet">
        <link rel="stylesheet" href="/vendor/c18app/cmsx/css/bootstrap.min.css?v={{ config('cmsx.version') }}">
        <script src="/vendor/c18app/cmsx/js/jquery-3.3.1.min.js?v={{ config('cmsx.version') }}"></script>
        <script src="/vendor/c18app/cmsx/js/bootstrap.bundle.min.js?v={{ config('cmsx.version') }}"></script>

        <link rel="stylesheet" href="/vendor/c18app/cmsx/css/admin/app.css?v={{ config('cmsx.version') }}">
        <script src="/vendor/c18app/cmsx/js/admin/app.js?v={{ config('cmsx.version') }}"></script>
    @endif

</head>
<body class="admin">
@include(Config('cmsx.app.template-admin').'::@topmenu')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-2 sidebar">
            @include(Config('cmsx.app.template-admin').'::@leftmenu')
        </div>

        <div class="col-lg-10 col-lg-offset-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        @include(Config('cmsx.app.template-admin').'::flash')
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>