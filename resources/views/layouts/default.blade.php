<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
@component('parts.common.head')
    @slot('title')
        @yield('title')
    @endslot

    @yield('head')
@endcomponent
</head>

<body>
    <div class="section">
        @component('parts.common.header')
        @endcomponent
    </div>

    <div class="app section">
        <div class="inner">
            @yield('content')
        </div>
    </div>

    <div class="section">
        @component('parts.common.footer')
        @endcomponent
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
    @yield('endBody')
</body>

</html>