 <!-- main sidebar start -->
 <div class="main-sidebar">
     <div class="main-menu">
         <ul class="sidebar-menu scrollable">
             <li class="sidebar-item open">
                 <a role="button" class="sidebar-link-group-title has-sub">Dashboard</a>
                 <ul class="sidebar-link-group">
                     <li class="sidebar-dropdown-item">
                         <a href="/master" class="sidebar-link"><span class="nav-icon"><i
                                     class="fa-light fa-cart-shopping-fast"></i></span> <span
                                 class="sidebar-txt">Dashboard</span></a>
                     </li>
{{--                     <li class="sidebar-dropdown-item">--}}
{{--                         <a href="" class="sidebar-link"><span class="nav-icon"><i--}}
{{--                                     class="fa-light fa-shopping-cart"></i></span> <span class="sidebar-txt">Pending--}}
{{--                                 Orders</span></a>--}}
{{--                     </li>--}}

                 </ul>
             </li>


             <li class="sidebar-item">
                 <a role="button" class="sidebar-link-group-title has-sub">System Settings</a>
                 <ul class="sidebar-link-group">
                     <li class="sidebar-dropdown-item">
                         <a href="{{ route('data.preview') }}" class="sidebar-link ">
                             <span class="nav-icon"><i class="fa-light fa-credit-card"></i></span>
                             <span class="sidebar-txt">Mpesa Credentials</span>
                         </a>
                     </li>
                     <li class="sidebar-dropdown-item">
                         <a href="{{ route('webdata') }}" class="sidebar-link ">
                             <span class="nav-icon"><i class="fa-light fa-globe"></i></span>
                             <span class="sidebar-txt">Web Data</span>
                         </a>
                     </li>
                 </ul>
             </li>

{{--             <li class="sidebar-item">--}}
{{--                 <a role="button" class="sidebar-link-group-title has-sub">Policy Settings</a>--}}
{{--                 <ul class="sidebar-link-group">--}}
{{--                     <li class="sidebar-dropdown-item">--}}
{{--                         <a href="{{ route('admin.policy') }}" class="sidebar-link ">--}}
{{--                             <span class="nav-icon"><i class="fa-light fa-lock"></i></span>--}}
{{--                             <span class="sidebar-txt">Privacy Policy</span>--}}
{{--                         </a>--}}
{{--                     </li>--}}
{{--                     <li class="sidebar-dropdown-item">--}}
{{--                         <a href="{{ route('admin.terms') }}" class="sidebar-link">--}}
{{--                             <span class="nav-icon"><i class="fa-light fa-institution"></i></span>--}}
{{--                             <span class="sidebar-txt">Terms & Conditions</span>--}}
{{--                         </a>--}}
{{--                     </li>--}}

{{--                 </ul>--}}
{{--             </li>--}}
         </ul>
     </div>
 </div>

 <!-- main sidebar end -->
