<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

    {{-- j'ai rajouté pour le front-end --}}
    <link href="{{ asset('css/availability-calendar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/ion.rangeSlider.css') }}" rel="stylesheet">
    <link href="{{ asset('css/ion.rangeSlider.skinFlat.css') }}" rel="stylesheet"> 
    <link href="{{ asset('css/jquerysctipttop.css') }}" rel="stylesheet">
    <link href="{{ asset('css/linearicon.css') }}" rel="stylesheet">
    <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('css/nouislider.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/themify-icons.css') }}" rel="stylesheet">


    <title>Hello, world!</title>
  </head>
  <body>
    @include('incs.navbar')

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/61762510c5.js" crossorigin="anonymous"></script>


    {{-- fichiers js rajoutés pour le front-end  --}}

     <script src="{{ asset('js/vendor/jquery-2.2.4.min.js') }}"></script>
     <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
     <script src="{{ asset('js/gmaps.min.js') }}"></script>
     <script src="{{ asset('js/ion.rangeSlider.js') }}"></script>
     <script src="{{ asset ('js/jquery.ajaxchimp.min.js') }}"></script>
     <script src="{{ asset ('js/jquery.magnific-popup.min.js') }}"></script>
     <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
     <script src="{{ asset('js/jquery.sticky.js') }}"></script>
     <script src="{{ asset('js/main.js') }}"></script>
     <script src="{{ asset('js/nouislider.min.js') }}"></script>
     <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
     <script src="{{ asset ('js/parallax.min.js') }}"></script>

   
  </body>
</html>