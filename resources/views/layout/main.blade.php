<!DOCTYPE html>
<html lang="en">
@include('layoutStyle.header')
  <body class="app sidebar-mini">
    @include('layoutStyle.top-nav')
    @include('layoutStyle.side-nav')
    <main class="app-content">
       @yield('content')
        
    </main> 
    @include('layoutStyle.footer')
    @include('layoutStyle.scripts-include')
      @yield('add_scripts')
  </body>
</html>

