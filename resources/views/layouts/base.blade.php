<!DOCTYPE html>
<html lang="en">
@include('layouts/includes.head')
<body>
@include('layouts/includes.headerbody')

  <section id="main" >
  	 @yield('content')

  </section><!-- fin main -->
  
@include('layouts/includes.footer')
@include('layouts/includes.scriptfooter')
</body>

</html>