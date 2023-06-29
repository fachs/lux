<x-app-layout title="Kepanitiaan" is-header-blur="true">
    <div class="content-wrapper">
      <section class="wrapper bg-soft-primary position-relative">
        <div class="container pt-10 pb-17 pt-md-14 text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto mb-5 mt-15">
              <h3 class="display-1 mb-6">Berkontribusi dalam kepanitiaan. 
                Perluas jaringan. Bawa perubahan.</h3>
              
            </div>
            <!-- /column -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
        <div class="overflow-hidden">
          <div class="divider text-light mx-n2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60">
              <path fill="currentColor" d="M0,0V60H1440V0A5771,5771,0,0,1,0,0Z" />
            </svg>
          </div>
        </div>
      </section>
    <section class="wrapper bg-light position-relative">
        <div class="container pb-15 pb-md-17">

          <!--/.row -->
          
          <!--/.row -->

          <!-- /.row -->
          <div class="row">
            <div class="col-xl-10 mx-auto">
              <form class="filter-form mb-10">
                <div class="row">
                  <div class="col-md-4 mb-3">
                    <div class="form-select-wrapper">
                      <select class="form-select" aria-label="">
                        <option selected>Divisi</option>
                        <option value="position1">Acara</option>
                        <option value="position2">PDDD</option>
                        <option value="position3">Humas</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <div class="form-select-wrapper">
                      <select class="form-select" aria-label="">
                        <option selected>Bidang</option>
                        <option value="type1">Kominfo</option>
                        <option value="type3">Mikat</option>
                        <option value="type4">PSDO</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <div class="form-select-wrapper">
                      <select class="form-select" aria-label="">
                        <option selected>Penyelenggaraan</option>
                        <option value="location1">Luring</option>
                        <option value="location3">Daring</option>
                      </select>
                    </div>
                  </div>
                </div>
              </form>
              <div class="job-list mb-10">
                <h3 class="mb-4">Acara</h3>
                <a href="{{ route('kepanitiaanDetail') }}" class="card mb-4 lift">
                  <div class="card-body p-5">
                    <span class="row justify-content-between align-items-center">
                      <span class="col-md-5 mb-2 mb-md-0 d-flex align-items-center text-body">
                        <span class="avatar bg-red text-white w-9 h-9 fs-17 me-3">GD</span> Senior Graphic Designer </span>
                      <span class="col-5 col-md-3 text-body d-flex align-items-center">
                         Mikat </span>
                      <span class="col-7 col-md-4 col-lg-3 text-body d-flex align-items-center">
                         Luring </span>
                      <span class="d-none d-lg-block col-1 text-center text-body">
                        <i class="uil uil-angle-right-b"></i>
                      </span>
                    </span>
                  </div>
                  <!-- /.card-body -->
                </a>
                <!-- /.card -->
                <a href="{{ route('kepanitiaanDetail') }}" class="card mb-4 lift">
                  <div class="card-body p-5">
                    <span class="row justify-content-between align-items-center">
                      <span class="col-md-5 mb-2 mb-md-0 d-flex align-items-center text-body">
                        <span class="avatar bg-green text-white w-9 h-9 fs-17 me-3">UX</span> UI/UX Designer </span>
                      <span class="col-5 col-md-3 text-body d-flex align-items-center">
                         Kominfo </span>
                      <span class="col-7 col-md-4 col-lg-3 text-body d-flex align-items-center">
                         Daring </span>
                      <span class="d-none d-lg-block col-1 text-center text-body">
                        <i class="uil uil-angle-right-b"></i>
                      </span>
                    </span>
                  </div>
                  <!-- /.card-body -->
                </a>
                <!-- /.card -->
                <a href="{{ route('kepanitiaanDetail') }}" class="card mb-4 lift">
                  <div class="card-body p-5">
                    <span class="row justify-content-between align-items-center">
                      <span class="col-md-5 mb-2 mb-md-0 d-flex align-items-center text-body">
                        <span class="avatar bg-yellow text-white w-9 h-9 fs-17 me-3">AN</span> Multimedia Artist &amp; Animator </span>
                      <span class="col-5 col-md-3 text-body d-flex align-items-center">
                         Mikat </span>
                      <span class="col-7 col-md-4 col-lg-3 text-body d-flex align-items-center">
                         Luring </span>
                      <span class="d-none d-lg-block col-1 text-center text-body">
                        <i class="uil uil-angle-right-b"></i>
                      </span>
                    </span>
                  </div>
                  <!-- /.card-body -->
                </a>
                <!-- /.card -->
              </div>
              <div class="job-list">
                <h3 class="mb-4">PDDD</h3>
                <a href="{{ route('kepanitiaanDetail') }}" class="card mb-4 lift">
                  <div class="card-body p-5">
                    <span class="row justify-content-between align-items-center">
                      <span class="col-md-5 mb-2 mb-md-0 d-flex align-items-center text-body">
                        <span class="avatar bg-purple text-white w-9 h-9 fs-17 me-3">FE</span> Front End Developer </span>
                      <span class="col-5 col-md-3 text-body d-flex align-items-center">
                         Mikat </span>
                      <span class="col-7 col-md-4 col-lg-3 text-body d-flex align-items-center">
                         Daring </span>
                      <span class="d-none d-lg-block col-1 text-center text-body">
                        <i class="uil uil-angle-right-b"></i>
                      </span>
                    </span>
                  </div>
                  <!-- /.card-body -->
                </a>
                <!-- /.card -->
                <a href="{{ route('kepanitiaanDetail') }}" class="card mb-4 lift">
                  <div class="card-body p-5">
                    <span class="row justify-content-between align-items-center">
                      <span class="col-md-5 mb-2 mb-md-0 d-flex align-items-center text-body">
                        <span class="avatar bg-orange text-white w-9 h-9 fs-17 me-3">MD</span> Mobile Developer </span>
                      <span class="col-5 col-md-3 text-body d-flex align-items-center">
                         PSDO </span>
                      <span class="col-7 col-md-4 col-lg-3 text-body d-flex align-items-center">
                         Luring </span>
                      <span class="d-none d-lg-block col-1 text-center text-body">
                        <i class="uil uil-angle-right-b"></i>
                      </span>
                    </span>
                  </div>
                  <!-- /.card-body -->
                </a>
                <!-- /.card -->

                <!-- /.card -->
              </div>
            </div>
            <!-- /column -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section>
    </div>
</x-app-layout>