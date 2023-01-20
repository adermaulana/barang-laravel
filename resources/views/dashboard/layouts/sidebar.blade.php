<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <div>
        <ul class="nav flex-column mb-2">
        <li class="nav-item">
            <a style="" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/barang*') ? 'active' : '' }}" href="/dashboard/barang">
              <span data-feather="users"></span>
              Barang
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/supplier*') ? 'active' : '' }}" href="/dashboard/supplier">
              <span data-feather="users"></span>
              Supplier
            </a>
          </li>
        </ul>

      </div>
    </nav>

    