<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Builder</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="stylesheet" href="/addons/slick/slick.css">
    <link rel="stylesheet" href="/addons/slick/slick-theme.css">
    <style>
        .editor-content>.sections-wrapper {
            width: {{ get_altrp_setting('container_width', '1440') }}px;
        }

        .altrp-section--boxed {
            padding-left: calc((100vw - {{ get_altrp_setting('container_width', '1440') }}px) / 2);
            padding-right: calc((100vw - {{ get_altrp_setting('container_width', '1440') }}px) / 2);
        }

    </style>
    <script>
        window.ALTRP_DEBUG = {!! json_encode(!!get_altrp_setting('altrp_debug', false)) !!};
        let ALTRP_CONTAINER_WIDTH = {{ get_altrp_setting('container_width', '1440') }};
        window.altrpMenus = [];

    </script>
</head>

<body>
    <div id="editor-content">

    </div>
</body>
<style id="styled"></style>

</html>
