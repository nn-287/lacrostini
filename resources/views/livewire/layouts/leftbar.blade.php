<aside class="col-lg-3 ">
    <!--  COMPONENT MENU LIST  -->
    <div class="card p-3 h-100 bg-dark-50">
       <nav class="nav flex-column nav-pills">
          <a class="nav-link text-light  {{ Request::route()->getName() == 'account' ? 'active' : '' }}" href="{{ route('account') }}">Account</a>
          <a class="nav-link text-light  {{ Request::route()->getName() == 'order.new' ? 'active' : '' }}" href="{{ route('order.new') }}">New orders</a>
          <a class="nav-link text-light  {{ Request::route()->getName() == 'order.history' ? 'active' : '' }}" href="{{ route('order.history') }}">Orders history</a>
          <a class="nav-link text-light  {{ Request::route()->getName() == 'wishlist' ? 'active' : '' }}" href="{{ route('wishlist') }}">My wishlist</a>
          <a class="nav-link text-light  {{ Request::route()->getName() == 'profile.profile' ? 'active' : '' }}" href="{{ route('profile.profile') }}">Profile setting</a>
          <a class="nav-link text-light " href="">Log out</a>
        </nav>
    </div>
    <!--   COMPONENT MENU LIST END .//   -->
    <style>
        .nav-pills .nav-link.active {
                color: white !important;
                background-color: #e84e10 !important;
                font-weight: bold;
        }
    </style>
</aside>