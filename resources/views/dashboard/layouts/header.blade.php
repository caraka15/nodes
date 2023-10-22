<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
  <div class="container-fluid">
    <button class="btn btn-secondary" id="sidebarToggle">
      <i class="fa-duotone fa-sidebar fa-lg"></i>
    </button>
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="/"><i class="ri-home-4-line"><i class="fa-duotone fa-house fa-lg"></i> Home</a>
        </li>
        <li class="nav-item ms-3 dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa-duotone fa-bars fa-lg"></i>
          </a>
          <div
            class="dropdown-menu dropdown-menu-end"
            aria-labelledby="navbarDropdown"
          >
            <a class="dropdown-item" href="/dashboard/user/{{ auth()->user()->username }}/edit"><i class="fa-duotone fa-pen-to-square fa-lg"></i> Edit Profile</a>
            <a class="dropdown-item" href="/dashboard/password/{{ auth()->user()->username }}/edit"><i class="fa-duotone fa-lock fa-lg"></i> Change Password</a>
            <div class="dropdown-divider"></div>
            <form action="/logout" method="post">
              @csrf
              <button type="submit" class="dropdown-item"><i class="fa-duotone fa-arrow-right-from-bracket fa-lg"></i> Logout</span></button>
            </form>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>

{{-- <header class="navbar navbar-light sticky-top flex-md-nowrap p-0 shadow" style="background-color: #ff8661">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 d-block d-md-none" href="/">Crxa Nodes</a>
  <button class="navbar-toggler d-md-none" type="button" id="sidebarToggle">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <form action="/logout" method="post">
        @csrf
        <button type="submit" class="nav-link px-3 border-0" style="background-color: #ff8661">Logout<span data-feather="log-out"></span></button>
      </form>
    </div>
  </div>
</header> --}}