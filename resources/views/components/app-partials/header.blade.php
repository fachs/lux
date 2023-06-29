<header>
    <nav class="navbar navbar-expand-lg center-nav transparent position-absolute navbar-light caret-none">
      <div class="container flex-lg-row flex-nowrap align-items-center">
        <div class="navbar-brand w-10">
          <a href="{{ route('home') }}">
            <img class="w-10" src="/logo-bem.png" alt="" />
          </a>
        </div>
        <div class="navbar-brand w-2">

        </div>
        <div class="navbar-brand w-20">
          <a href="{{ route('home') }}">
            <h3 class="fs-15 mb-0">BEM KEMA FPMIPA</h3>
          </a>
        </div>
        <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
          <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
            <ul class="navbar-nav">
              <li class="nav-item dropdown dropdown-mega">
                <a class="nav-link dropdown-toggle" href="{{ route('keuangan') }}">Laporan Keuangan</a>
                <!--/.dropdown-menu -->
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="{{ route('kepanitiaan') }}">Kepanitiaan</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="{{ route('sptbh') }}">SPTB</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="{{ route('kontak') }}" >Hubungi Kami</a>
              </li>
            </ul>
            <!-- /.navbar-nav -->

            <!-- /.offcanvas-footer -->
          </div>
          <!-- /.offcanvas-body -->
        </div>
        <!-- /.navbar-collapse -->

        <!-- /.navbar-other -->
      </div>
      <!-- /.container -->
    </nav>
    <!-- /.navbar -->

    <!-- /.offcanvas -->
  </header>