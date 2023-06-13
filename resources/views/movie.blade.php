@extends('layouts.main')
@section('container')
  <div class="content-wrapper">
    <section class="wrapper bg-green">
      <div class="container py-14 py-md-16">
        <h2 class="display-5 mb-7 text-center">Cari Movie Apa?</h2>
        <div class="pricing-wrapper">
          <div class="container-fluid">
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" onkeypress="searchOnEnter(event)" aria-label="Search">
              {{-- <button class="btn btn-outline-primary bg-white" type="submit">Search</button> --}}
            </form>
          </div>
          <div class="row gx-0 gy-6 mt-2">
            <div class="row grid-view gx-md-8 gx-xl-10 gy-8 gy-lg-0">
              <div class="col-md-6 col-lg-3">
                <div class="position-relative">
                  <div class="shape rounded bg-soft-blue rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
                  <div class="card">
                    <figure class="card-img-top"><img class="img-fluid" src="./assets/img/avatars/t1.jpg" srcset="./assets/img/avatars/t1@2x.jpg 2x" alt="" /></figure>
                    <div class="card-body px-6 py-5">
                      <h4 class="mb-1">{{ $nama }}</h4>
                      <p class="mb-0">{{ $harga}}</p>
                    </div>
                    <!--/.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /div -->
              </div>
              <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!--/.pricing-wrapper -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
  </div>
@endsection