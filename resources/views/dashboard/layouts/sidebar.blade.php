<div class="border-end bg-white" id="sidebar-wrapper">
  <div class="sidebar-heading border-bottom bg-light">
    Crxa Dashboard
  </div>
  <div class="list-group list-group-flush">
    <a class="list-group-item list-group-item-action list-group-item-light p-3 {{ Request::is('dashboard/user*') ? 'active' : '' }}"
      href="/dashboard/user"><i class="ri-home-4-line"></i>Dashboard
    </a>
    <a class="list-group-item list-group-item-action list-group-item-light p-3 {{ Request::is('dashboard/posts*') ? 'active' : '' }}"
      href="/dashboard/posts"><i class="ri-file-text-line"></i>My Posts
    </a>

    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
      <span>Administrator</span>
    </h6>

    @can('admin')
    <a class="list-group-item list-group-item-action list-group-item-light p-3 {{ Request::is('dashboard/categories*') ? 'active' : '' }}"
      href="/dashboard/categories"><i class="ri-layout-grid-fill"></i>Post Categories
    </a>
    <a class="list-group-item list-group-item-action list-group-item-light p-3 {{ Request::is('dashboard/chainds*') ? 'active' : '' }}"
      href="/dashboard/chainds"><i class="ri-list-check"></i>Chaind Lists
    </a>
    @endcan
    
  </div>
</div>


{{-- <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
  <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/user') ? 'active' : '' }}" aria-current="page" href="/dashboard/user">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
            <span data-feather="file-text"></span>
            My Posts
          </a>
        </li>
      </ul>


      @can('admin')
      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>Administrator</span>
      </h6>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" href="/dashboard/categories">
            <span data-feather="grid"></span>
            Post Categories
          </a>
        </li>
      </ul>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/chainds*') ? 'active' : '' }}" href="/dashboard/chainds">
            <span data-feather="grid"></span>
            Chaind List
          </a>
        </li>
      </ul>
      @endcan

    </div>
  </nav> --}}