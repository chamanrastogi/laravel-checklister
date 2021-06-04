<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand d-lg-down-none"> 
      <svg class="c-sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
      <use xlink:href="{{asset('assets/brand/coreui.svg#full')}}"></use>
      </svg> <svg class="c-sidebar-brand-minimized" width="46" height="46" alt="CoreUI Logo">
      <use xlink:href="assets/brand/coreui.svg#signet"></use>
      </svg> </div>
    <ul class="c-sidebar-nav">
      <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{route('home')}}"> <svg class="c-sidebar-nav-icon">
        <use xlink:href="{{asset('vendors/@coreui/icons/svg/free.svg#cil-speedometer')}}"></use>
        </svg> Dashboard</li></a>
     
      <li class="c-sidebar-nav-title">Admin</li>
      <li class="c-sidebar-nav-item c-sidebar-nav-dropdown c-show"><a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#"> <svg class="c-sidebar-nav-icon">
        <use xlink:href="{{asset('vendors/@coreui/icons/svg/free.svg#cil-puzzle')}}"></use>
        </svg> Pages</a>
        <ul class="c-sidebar-nav-dropdown-items">
          <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{route('admin.pages.index')}}"><span class="c-sidebar-nav-icon"></span> Breadcrumb</a></li>
          
          </ul>
      </li>
      
      <li class="c-sidebar-nav-item c-sidebar-nav-dropdown"><a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#"> <svg class="c-sidebar-nav-icon">
        <use xlink:href="{{asset('vendors/@coreui/icons/svg/free.svg#cil-puzzle')}}"></use>
        </svg> Base</a>
        <ul class="c-sidebar-nav-dropdown-items">
          <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/breadcrumb.html"><span class="c-sidebar-nav-icon"></span> Breadcrumb</a></li>
          <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/cards.html"><span class="c-sidebar-nav-icon"></span> Cards</a></li>
          </ul>
      </li>
      <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();"> <svg class="c-sidebar-nav-icon">
        <use xlink:href="{{asset('vendors/@coreui/icons/svg/free.svg#cil-account-logout')}}"></use>
        </svg> {{ __('Logout') }}</a></li>
    </ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
  </div>