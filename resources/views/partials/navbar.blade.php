<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ($active === "home*") ? 'active' : '' }}" href="/"><i class="ri-home-4-fill"></i></i>Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === "posts") ? 'active' : '' }}" href="/posts"><i class="ri-newspaper-line"></i></i>Blogs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === "category") ? 'active' : '' }}" href="/categories"><i class="ri-price-tag-3-line"></i>Category</a>
        </li>
      </ul>

      <ul class="navbar-nav ms-auto m3-1">
        @auth
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Welcome Back, {{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/dashboard"><i class="ri-layout-5-line"></i>My Dashboard</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item"><i class="ri-logout-box-r-line"></i>Logout</button>
                  </form>
              </ul>
          </li>
        @else
          <li class="nav-item">
            <a class="nav-link {{ ($active === "login") ? 'active' : '' }}" href="/login"><i class="ri-login-box-line"></i>Login</a>
          </li>
        @endauth
      </ul>
    </div>
</nav>