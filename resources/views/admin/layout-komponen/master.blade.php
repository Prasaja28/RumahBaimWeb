@if(\Session::has('user_id'))
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    @include('admin.layout-komponen.css-eksternal')
    <title>@yield('title')</title>
    @yield('css-internal')
    
  </head>
  <body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
                @include('admin.layout-komponen.topbar')
                @include('admin.layout-komponen.sidebar')
                @include('admin.layout-komponen.layout-konten')
                @include('admin.layout-komponen.footer')
                @include('admin.layout-komponen.js-eksternal')
                @yield('js-internal')
            </div>
        </div>
    </div>
  </body>
</html>
@else
    @include('admin.nologin')
@endif