<nav class="navbar navbar-dark navbar-expand-lg bg-danger">
    <div class="container">
      <a class="navbar-brand" href="#">Asyraaf's Blog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Home") ? 'active' : ''}}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  {{ ($title === "About") ? 'active' : ''}}" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  {{ ($title === "Blog") ? 'active' : ''}}" href="/post">Blog</a>
          </li>
        </ul>


        @auth
        <div class="dropdown ms-auto">
          <button class="btn btn-danger dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome {{ auth()->user()->username }}
          </button>
          <ul class="dropdown-menu">
            <li><a href="/dashboard" class="dropdown-item">Dashboard</a></li>
            <li><a href="/profile" class="dropdown-item">Profile</a></li>
            <li>
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
              </form>
            </li>
          </ul>
        </div>
          
        @else
        <ul class="navbar-nav ms-auto">
          <li class="nav-item ">
            <a class="nav-link {{ ($title === "Login") ? 'active' : ''}}" href="/login">
            <i class="bi bi-box-arrow-right"></i>
            Login
          </a></li>
          <li class="nav-item">
           
            <a class="nav-link {{ ($title === "Sign Up") ? 'active' : ''}}" href="/signup">
              <i class="bi bi-person-add"></i>
              Sign Up
            </a>
          </li>

        </ul>
        @endauth
       
      </div>
    </div>
  </nav>