    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Adit</a>
        </div>
      </div> --}}

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        {{-- <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div> --}}
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Content
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/form-input" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form Input</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/datatable" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Table</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{asset('admin/index3.html')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                CRUD
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/cast" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cast</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/film" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Film</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/peran" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Peran</p>
                </a>
              </li>
            </ul>
          </li>

                <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>