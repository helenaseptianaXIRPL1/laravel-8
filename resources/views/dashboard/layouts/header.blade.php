<header class="navbar navbar-dark sticky-top  flex-md-nowrap p-0 shadow bg-success">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">
        <img src="{{ url('images/logo12.png') }}" width="80" alt="logo_lamara">
    </a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-light w-100" type="text" placeholder="Search" aria-label="Search">
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <form action="/logout" method="post">
          @csrf
            <button type="submit" class="nav-link px-3 bg-success border-0">Logout<span data-feather="log-out"></span></button>
        </form>
      </div>
    </div>
  </header>
