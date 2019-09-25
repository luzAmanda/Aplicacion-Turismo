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
    <!--<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
    --><link href="{{ asset('coreui/node_modules/@coreui/icons/css/coreui-icons.min.css')}}" rel="stylesheet">
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
    <header class="app-header navbar">
      <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">
  <!-- <img class="navbar-brand-full" src="{{ asset('coreui/img/brand/logo.svg')}}" width="89" height="25" alt="CoreUI Logo">
 
   <img class="navbar-brand-full" src="{{ asset('coreui/img/brand/logo.svg')}}" width="89" height="25" alt="CoreUI Logo">
        <img class="navbar-brand-minimized" src="{{ asset('coreui/img/brand/sygnet.svg')}}" width="30" height="30" alt="CoreUI Logo">
     -->      </a>
      <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <ul class="nav navbar-nav d-md-down-none">
        <li class="nav-item px-3">
          <a class="nav-link" href="categoria">Home</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="#">Users</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="#">Settings</a>
         
        </li>

        <li>
        
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }} 
            </a>
  
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
       
          </li>
        
      </ul>
      <ul class="nav navbar-nav ml-auto">
       
        
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <img class="img-avatar" src="{{asset('coreui/img/avatars/im1.jpg')}}" alt="admin@bootstrapmaster.com">
          </a>
        </li>
        <li class="nav-item d-md-down-none">
            <a class="nav-link" href="#">
              <i class="icon-settings"></i>
            <!--  <span class="badge badge-pill badge-danger">5</span>-->
            </a>
          </li>
      </ul>
    </header>
    <div class="app-body">


       @include("theme/crui/aside")


      <main class="main">
        <div class="container-fluid">
          <div class="animated fadeIn">

            @yield('contenid')    


          </div>
        </div>
      </main>
      <aside class="aside-menu">
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#timeline" role="tab">
              <i class="icon-list"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#messages" role="tab">
              <i class="icon-speech"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#settings" role="tab">
              <i class="icon-settings"></i>
            </a>
          </li>
        </ul>
       
     
      </aside>
    </div>

    @include('theme/crui/footer')
    
    <!-- CoreUI and necessary plugins-->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
	<script src="icos.js"></script>

    <script src="{{asset('coreui/node_modules/jquery/dist/jquery.min.js')}}"></script>
  <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  --> <script src="{{asset('coreui/node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('coreui/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('coreui/node_modules/pace-progress/pace.min.js')}}"></script>
    <script src="{{asset('coreui/node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('coreui/node_modules/@coreui/coreui/dist/js/coreui.min.js')}}"></script>
    <script src="{{asset('coreui/js/fontawesome-iconpicker.min.js')}}"></script>

   @include('theme/crui/script')
         
            
  </body>
</html>
