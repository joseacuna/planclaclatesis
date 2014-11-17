<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>@yield('title', 'planclaseclase')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    {{ HTML::style('assets/css/bootstrap.min.css', array('media' => 'screen')) }}

    @yield('javascript')


</head>
<body>
<div id="wrap">
    <div class="contenido">
        @yield('content')
    </div>
</div>

</body>
</html>