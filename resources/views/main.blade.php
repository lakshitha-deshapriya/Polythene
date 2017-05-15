<!DOCTYPE html>


<html lang="en">
  <head>
    @include('partials._head')
  </head>
  <body style="padding-top:50px">
    @include('partials._nav')

    <div class="container" style="padding:15px">
      @include('partials._message')

      @yield('body_content')
    </div>

    @include('partials._footer')
    
    @include('partials._scripts')   

  </body>

</html>