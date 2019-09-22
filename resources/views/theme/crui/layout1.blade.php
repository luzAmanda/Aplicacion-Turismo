<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.1.15
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>OziPlace</title>
    <!-- Icons-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="{{ asset('coreui/node_modules/@coreui/icons/css/coreui-icons.min.css')}}" rel="stylesheet">
    <link href="{{ asset('coreui/node_modules/flag-icon-css/css/flag-icon.min.css')}}" rel="stylesheet">
    <link href="{{ asset('coreui/node_modules/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ asset('coreui/node_modules/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="{{ asset('coreui/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('coreui/vendors/pace-progress/css/pace.min.css')}}" rel="stylesheet">
    <link href="{{ asset('coreui/css/fontawesome-iconpicker.min.css')}}" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>

      @include('theme/crui/styleIcon')

  </head>
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    
   
    


     


     <br>
     <br>
     <br>
     <br>
     <br>

      
            @yield('contenid')    
   
   
    
      
       
     
    


    
    <!-- CoreUI and necessary plugins-->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
	<script src="icos.js"></script>

    <script src="{{asset('coreui/node_modules/jquery/dist/jquery.min.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="{{asset('coreui/node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('coreui/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('coreui/node_modules/pace-progress/pace.min.js')}}"></script>
    <script src="{{asset('coreui/node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('coreui/node_modules/@coreui/coreui/dist/js/coreui.min.js')}}"></script>
    <script src="{{asset('coreui/js/fontawesome-iconpicker.min.js')}}"></script>

   @include('theme/crui/script')
         
            
  </body>
</html>
