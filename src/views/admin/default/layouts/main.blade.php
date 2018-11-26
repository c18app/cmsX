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

        <link href="/vendor/c18app/cmsx/fontawesome/5.0.6/css/fontawesome-all.min.css?v={{ config('cmsx.version') }}"
              rel="stylesheet">
        <link rel="stylesheet" href="/vendor/c18app/cmsx/css/bootstrap.min.css?v={{ config('cmsx.version') }}">
        <script src="/vendor/c18app/cmsx/js/jquery-3.3.1.min.js?v={{ config('cmsx.version') }}"></script>
        <script src="/vendor/c18app/cmsx/js/bootstrap.bundle.min.js?v={{ config('cmsx.version') }}"></script>

        <link rel="stylesheet" href="/vendor/c18app/cmsx/css/admin/app.css?v={{ config('cmsx.version') }}">
        <script src="/vendor/c18app/cmsx/js/admin/app.js?v={{ config('cmsx.version') }}"></script>
    @endif
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=15atz047gmdimv7gcyfzwslilbkvedor863hcqd46cueig4h"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            height: 500,
            theme: 'modern',
            plugins: 'print preview fullpage paste powerpaste searchreplace autolink directionality advcode visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount tinymcespellchecker a11ychecker imagetools mediaembed  linkchecker contextmenu colorpicker textpattern help',
            toolbar1: 'image | formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
            image_advtab: true,
            templates: [
                { title: 'Test template 1', content: 'Test 1' },
                { title: 'Test template 2', content: 'Test 2' }
            ],
            content_css: [
                '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
                '//www.tinymce.com/css/codepen.min.css'
            ],
            images_upload_url: '/postAcceptor.php',
            images_upload_base_path: '/images',
            relative_urls : false,
            convert_urls : true,
            init_instance_callback: function (ed) {
                ed.execCommand('mceImage');
            }
        });

        tinymce.activeEditor.uploadImages(function(success) {
            $.post('ajax/post.php', tinymce.activeEditor.getContent()).done(function() {
                console.log("Uploaded images and posted content as an ajax request.");
            });
        });
    </script>
</head>
<body class="admin">
@include(Config('cmsx.app.template-admin').'::@topmenu')
<div class="container-fluid">
    <div class="row">
        <div class="col-6 col-sm-4 col-md-3 col-lg-2 sidebar">
            @include(Config('cmsx.app.template-admin').'::@leftmenu')
        </div>

        <div class="col-6 offset-6 col-sm-8 offset-sm-4 col-md-9 offset-md-3 col-lg-10 offset-lg-2">
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
