<!DOCTYPE html>
<html lang="{{ str_replace('-', '_', app()->getLocale() )}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel @yield('title')</title>
    @include('admin_default.layout.head')
    @stack('styles')
</head>
<body class="hold-transition skin-blue sidebar-mini">
    @include('admin_default.layout.header')
    @include('admin_default.layout.sidebar')
    @section('main')
        <div class="content-wrapper">
            <section class="content">
                @yield('content')
            </section>
        </div>
    @show
    @include('admin_default.layout.control-sidebar')
    @include('admin_default.layout.scripts')
    @stack('js')
</body>
</html>