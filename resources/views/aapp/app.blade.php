<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="icon" href="{{asset('asset/img/log.png')}}">

  <title>@yield('title')</title>

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/materialize.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/animation.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('asset/font-awesome/css/font-awesome.min.css')}}">

  @yield('css-plus')

  <style type="text/css">
    body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    }

    main {
      flex: 1 0 auto;
    }
  </style>
</head>

<body>

  @yield('app-login')

  @yield('nav-siswa')
  @yield('app-siswa')
  
  @yield('nav-guru')
  @yield('app-guru')

  @yield('app-admin-sekolah')

  @yield('app-admin')

  {{-- <footer class="page-footer rb-trans">
    <div class="footer-copyright">
      <div class="container center">
        Rumah Belajar © Copyright 2020.All rights reserved.
      </div>
    </div>
  </footer> --}}

  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="{{asset('asset/js/materialize.min.js')}}"></script>

  <script>
    $(document).ready(function() {
      $(".carousel.carousel-slider").carousel({
        dist: 0,
        padding: 0,
        fullWidth: true,
        indicators: true,
        duration: 100,
      });

      autoplay()   
      function autoplay() {
        $('.carousel').carousel('next');
        setTimeout(autoplay, 6000);
      }

      $(document).ready(function(){
        $('.sidenav').sidenav();
      });
    });

    $('.dropdown-trigger').dropdown();

    $(window).scroll(function() {
      if ($(document).scrollTop() > 100) {
        $('.asu').addClass('asu2');
        $('.col-menu').addClass('col-menu2');
        $('.navbar-fixed .asu .nav-wrapper .brand-logo img').attr('src','asset/img/logo3.png');
      } else {
        $('.asu').removeClass('asu2');
        $('.col-menu').removeClass('col-menu2');
        $('.navbar-fixed .asu .nav-wrapper .brand-logo img').attr('src','asset/img/logo2.png');
      }
    });

    $(document).ready(function(){
      $('.tabs').tabs();
    });

    $(document).ready(function(){
      $('select').formSelect();
    });

    $(document).ready(function(){
      $('.slider').slider();
    });

    $(document).ready(function(){
      $('.collapsible').collapsible();
    });

    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.collapsible');
      var instances = M.Collapsible.init(elems, options);
    });

    $(document).ready(function(){
      $('.modal').modal();
    });

    var currYear = (new Date()).getFullYear();

    $(document).ready(function() {
      $(".datepicker").datepicker({
        defaultDate: new Date(currYear-5,1,31),
    // setDefaultDate: new Date(2000,01,31),

    format: "yyyy-mm-dd"    
  });
    });


    $(document).ready(function(){
      $('.timepicker').timepicker({
       timeFormat: 'h:mm p'
     });
    });

    $(document).ready(function(){
      $('.fixed-action-btn').floatingActionButton();
    });

  </script>

  @yield('js-plus')

</body>
</html>