<nav class="navbar navbar-expand-lg p-0">
    <a class="navbar-brand" href="#"><img src="{{ asset('img/logo.png') }}" alt="Logo">
      Crxa Nodes</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/"><i class="fa-regular fa-house"></i>Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('posts*') ? 'active' : '' }}" href="/posts"><i class="fa-regular fa-newspaper"></i>Blogs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('categories') ? 'active' : '' }}" href="/categories"><i class="fa-regular fa-list"></i>Category</a>
        </li>
      </ul>

      <ul class="navbar-nav ms-auto m3-1 pe-4">
        @auth
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Welcome Back, {{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/dashboard/user"><i class="fa-regular fa-table-list fa-lg"></i>My Dashboard</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item btn-dark"><i class="fa-regular fa-arrow-right-from-bracket fa-lg"></i>Logout</button>
                  </form>
              </ul>
          </li>
        @else
          <li class="nav-item">
            <a class="nav-link {{ ($active === "login") ? 'active' : '' }}" href="/login"><i class="fa-regular fa-right-to-bracket fa-lg"></i>Login</a>
          </li>
        @endauth
      </ul>
    </div>
</nav>