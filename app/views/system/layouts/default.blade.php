<!DOCTYPE html>
<html lang="en">
  <head>
    @include('system.partials.head')
    @yield('style')
  </head>
  <body>
      <div id="wrapper">
          @include('system.partials.navigation')
          <div id="page-wrapper">
            @include('system.partials.blocks.message_alertbox')
              @yield('content')
          </div>
          <!-- /#page-wrapper -->
      </div>
      <!-- /#wrapper -->
      @include('system.partials.footer')
      @yield('script')
  </body>
</html>
