<!doctype html>
<html lang="en">
 <head>
 
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- CoreUI CSS -->
 <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css" crossorigin="anonymous">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/perfect-scrollbar.min.js" integrity="sha512-yUNtg0k40IvRQNR20bJ4oH6QeQ/mgs9Lsa6V+3qxTj58u2r+JiAYOhOW0o+ijuMmqCtCEg7LZRA+T4t84/ayVA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <title>{{ config('app.name', 'Laravel') }}</title>
 </head>
 <body class="c-app">
  <x-sidebar></x-sidebar>
    
      <div class="c-wrapper c-fixed-components">
      <header class="c-header c-header-light c-header-fixed c-header-with-subheader">
        <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show"> <svg class="c-icon c-icon-lg">
        <use xlink:href="{{asset('vendors/@coreui/icons/svg/free.svg#cil-menu')}}"></use>
        </svg> </button>
        <a class="c-header-brand d-lg-none" href="#"> <svg width="118" height="46" alt="CoreUI Logo">
        <use xlink:href="{{asset('assets/brand/coreui.svg#full')}}"></use>
        </svg></a>
        <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true"> <svg class="c-icon c-icon-lg">
        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-menu')}}"></use>
        </svg> </button>
        <ul class="c-header-nav d-md-down-none">
          <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Dashboard</a></li>
          <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Users</a></li>
          <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Settings</a></li>
        </ul>
        <ul class="c-header-nav ml-auto mr-4">
          <li class="c-header-nav-item d-md-down-none mx-2"><a class="c-header-nav-link" href="#"> <svg class="c-icon">
            <use xlink:href="{{asset('vendors/@coreui/icons/svg/free.svg#cil-bell')}}"></use>
            </svg></a></li>
          <li class="c-header-nav-item d-md-down-none mx-2"><a class="c-header-nav-link" href="#"> <svg class="c-icon">
            <use xlink:href="{{asset('vendors/@coreui/icons/svg/free.svg#cil-list-rich')}}"></use>
            </svg></a></li>
          <li class="c-header-nav-item d-md-down-none mx-2"><a class="c-header-nav-link" href="#"> <svg class="c-icon">
            <use xlink:href="{{asset('vendors/@coreui/icons/svg/free.svg#cil-envelope-open')}}"></use>
            </svg></a></li>
          <li class="c-header-nav-item dropdown"><a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <div class="c-avatar"><img class="c-avatar-img" src="{{asset('assets/img/avatars/1.jpg')}}" alt="user@email.com"></div>
            </a>
            <div class="dropdown-menu dropdown-menu-right pt-0">
              <div class="dropdown-header bg-light py-2"><strong>Account</strong></div>
              <a class="dropdown-item" href="#"> <svg class="c-icon mr-2">
              <use xlink:href="{{asset('vendors/@coreui/icons/svg/free.svg#cil-bell')}}"></use>
              </svg> Updates<span class="badge badge-info ml-auto">42</span></a>
              <div class="dropdown-header bg-light py-2"><strong>Settings</strong></div>
              <a class="dropdown-item" href="#"> <svg class="c-icon mr-2">
              <use xlink:href="{{asset('vendors/@coreui/icons/svg/free.svg#cil-user')}}"></use>
              </svg> Profile</a>
              
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#"> <svg class="c-icon mr-2">
              <use xlink:href="{{asset('vendors/@coreui/icons/svg/free.svg#cil-lock-locked')}}"></use>
              </svg> Lock Account</a><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> <svg class="c-icon mr-2">
              <use xlink:href="{{asset('vendors/@coreui/icons/svg/free.svg#cil-account-logout')}}"></use>
              </svg> {{ __('Logout') }}</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                     </div>
          </li>
          
        </ul>
        
      </header>
      <div class="c-body">
      <main class="c-main">
        <div class="container-fluid">
          @yield('content')
        </div>
      </main>
      

 <!-- Optional JavaScript -->
 <!-- Popper.js first, then CoreUI JS -->
 <script src="https://unpkg.com/@popperjs/core@2"></script>
 <script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/perfect-scrollbar.js" integrity="sha512-4ejaN8M2YXbJ7KVP13DaCS0fZOoNCUPukqOMumr8r32Xz1/2wRw4nCKJrNmTxstfH5Gf2oLe27YpAPiQr2OnTQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 </body>
</html>