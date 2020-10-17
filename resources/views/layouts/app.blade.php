<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.loginlayout.head')
<body>
  <main>
      <div class="darker"></div>
@include('layouts.nav')



            @yield('content')
        </main>

</body>
</html>
