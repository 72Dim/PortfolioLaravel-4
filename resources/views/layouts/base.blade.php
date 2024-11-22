<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
      
      {{-- <title> My site | @yield('title', 'Home Page')</title> --}}
      <title>
         @yield('title', 'Home Page')
      </title>
      {{-- <link rel="icon" type="image/x-icon" href="http://laravel-3-study.loc/storage/thumbnail/pear.png"> --}}
      <link rel="icon" type="image/x-icon" href="@yield('linkIcon')">

      <!-- include jQuery, Bootstrap_JS and JavaScript -->
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
      @stack('scripts')
      <!-- the end include jQuery and JavaScript -->
      <!-- Fonts -->
      <link rel="dns-prefetch" href="//fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
      <!-- CSS Bootstrap -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <!-- CSS -->
      @include('in_clude.style')
      @stack('otherStyles')
      @include('in_clude.styleFooterSection')
      @include('in_clude.stylePaginationSection')
      @include('in_clude.styleStartPageSection')
      
   </head>

   @yield('bodyHeader')

   @yield('bodyContent')

   @yield('footerSite')   
            </div><!-- <div style="order: 1;"> -->
         </div><!-- <div class="wrapper"> -->
      </div>
   </body>
</html>
  
