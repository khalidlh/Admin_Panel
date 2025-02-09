  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ asset('assets/img/logo.jpg') }}"
          data-toggle="modal" data-target="#exampleModal">
          <div class="sidebar-brand-icon rotate-n-15">
              {{-- <i class="fas fa-laugh-wink"></i> --}}
              <img src="{{ asset('assets/img/logo.jpg') }}" alt="..." class="rounded" width="50%" height="50%">
              {{-- Launch demo modal --}}
          </div>
          <div class="sidebar-brand-text mx-3">KH LAHMIDI</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
          <a class="nav-link" href="{{ route('/') }}">
              <i class="fas fa-fw fa-tachometer-alt"></i>
              <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
          Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
              aria-expanded="true" aria-controls="collapseTwo">
              <i class="fas fa-fw fa-cog"></i>
              <span>Components</span>
          </a>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                  <h6 class="collapse-header">Custom Components:</h6>
                  <a class="collapse-item" href="buttons.html">Modal</a>
                  <a class="collapse-item" href="buttons.html">Buttons</a>
                  <a class="collapse-item" href="cards.html">Cards</a>
              </div>
          </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
              aria-expanded="true" aria-controls="collapseUtilities">
              <i class="fas fa-fw fa-wrench"></i>
              <span>Utilities</span>
          </a>
          <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
              data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                  <h6 class="collapse-header">Custom Utilities:</h6>
                  <a class="collapse-item" href="utilities-color.html">Colors</a>
                  <a class="collapse-item" href="utilities-border.html">Borders</a>
                  <a class="collapse-item" href="utilities-animation.html">Animations</a>
                  <a class="collapse-item" href="utilities-other.html">Other</a>
              </div>
          </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
          Addons
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
              aria-expanded="true" aria-controls="collapsePages">
              <i class="fas fa-fw fa-folder"></i>
              <span>Pages</span>
          </a>
          <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                  <h6 class="collapse-header">Login Screens:</h6>
                  <a class="collapse-item" href="{{ route('login.auth') }}">Authentification complet</a>
                  <div class="collapse-divider"></div>
                  <h6 class="collapse-header">Other Pages:</h6>
                  <a class="collapse-item" href="404.html">404 Page</a>
                  <a class="collapse-item" href="blank.html">Blank Page</a>
              </div>
          </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages1"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>E-commerce</span>
        </a>
        <div id="collapsePages1" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="404.html">Product</a>
                <a class="collapse-item" href="blank.html">paiment</a>
            </div>
        </div>
    </li>
      <!-- Nav Item - Charts -->
      <li class="nav-item">
          <a class="nav-link" href="{{ route('charts') }}">
              <i class="fas fa-fw fa-chart-area"></i>
              <span>Charts</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
          <a class="nav-link" href="{{ route('users') }}">
              <i class="fas fa-fw fa-table"></i>
              <span>Users</span></a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="#">
              <i class="fa-solid fa-database"></i>
              <span>Analyse data</span></a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="{">
              <i class="fa-solid fa-table-columns"></i>
              <span>Multi form</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

  </ul>
