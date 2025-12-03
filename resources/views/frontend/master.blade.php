<!DOCTYPE html>
<html lang="en">



<head>

    @include('frontend.includes.style')

</head>
 
<body>

    <!-- Header navbar start -->
   @include('frontend.includes.navbar')
    <!-- Header navbar end -->
    @yield('content')
   
    <!-- Footer Style start -->
    @include('frontend.includes.footer')
    <!-- Footer Style End -->

  
    <a href="#" class="scrollup"><i class="pe-7s-up-arrow" aria-hidden="true"></i></a>
    <!-- jQuery -->
    @include('frontend.includes.script')

</body>



</html>

