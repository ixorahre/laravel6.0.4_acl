<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ URL::to('/') }}/imgs/ixora-logo-small.png" alt="Ixora logo" class="brand-image elevation-"
           style="opacity: .8">


      <span class="brand-text font-weight-light text-center">ixora solution</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ URL::to('/') }}/imgs/avatar.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info" style="color: #fff;">
            Logged in user
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <!-- when force password change, menu links will be hidden -->

            <li class="nav-item">
                <a href="#" class="nav-link">
{{--                    <i class="fas fa-search"></i>--}}
                    <p>Menu one</p>
                </a>
            </li>
       </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
