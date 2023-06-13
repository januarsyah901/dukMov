<nav class="navbar navbar-expand-lg center-nav navbar-light navbar-bg-light">
    <div class="container flex-lg-row flex-nowrap align-items-center">
      <div class="navbar-brand w-100">
        <a href="./index.html">
          {{-- <img src="./assets/img/logo.png" srcset="./assets/img/logo@2x.png 2x" alt="" /> --}}
          <h1>{{ $title }}</h1>
        </a>
      </div>
      <div class="navbar-collapse offcanvas-nav">
        <div class="offcanvas-header d-lg-none d-xl-none">
          <button type="button" class="btn-close btn-close-white offcanvas-close offcanvas-nav-close" aria-label="Close"></button>
        </div>
        <ul class="navbar-nav ">
          <li class="nav-item"><a class="nav-link {{ ($title === "DukResto") ? 'active' : ''}}" href="/dukresto">Resto</a></li>
          <li class="nav-item"><a class="nav-link {{ ($title === "DukMovie") ? 'active' : ''}}" href="/dukmovie">Movie</a></li>
        </ul>
        <!-- /.navbar-nav -->
      </div>
      <!-- /.navbar-other -->
    </div>
    <!-- /.container -->
    </nav>
  <!-- /.navbar -->