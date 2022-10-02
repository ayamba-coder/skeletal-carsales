<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand navbar-dark bg-dark" href="#">Learning Laravel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
      aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
      aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header bg-light navbar-dark">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body text-center bg-dark navbar-dark">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-5">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href={{route('homepage')}}><i class="fa fa-home"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{route('aboutpage')}}"><i class="fa fa-info-circle"></i> About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href={{route('contactpage')}}><i class="fa fa-phone-square"></i> Contact Us</a>
          </li>
          @auth
          <li class="nav-item">
            <a class="nav-link text-white" href={{route('user.dashboard')}}><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href={{route('user.dashboard.cart')}} style="padding: 0.7vh">
              <span class="fa-stack fa-1x has-badge" data-count='2'>
                <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
              </span>Cart
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href={{route('user.logout')}}><i class="fa fa-sign-out"></i> Logout</a>
          </li>
          @endauth

          @guest
          <li class="nav-item">
            <a class="nav-link " href={{route('register')}}>Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href={{route('login')}}><i class="fa fa-sign-in"></i> Login</a>
          </li>
          @endguest
        </ul>
      </div>
    </div>
  </div>
</nav>