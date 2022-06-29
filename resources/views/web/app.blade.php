<!doctype html>
<html lang="{{ config('app.locale') }}">
    
    @include('web.layout.head', ['title' => 'Post Blog'])

    <body>
        @include('web.layout.header')


        @yield('content')


        @include('web.layout.footer')
    </body>
</html>