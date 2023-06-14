@extends('layouts.main')
@section('container')
  <div class="content-wrapper">
    <section class="wrapper bg-green">
      <div class="container">
        <h2 class="display-5 mb-7 text-center">makanan hari ini<h2>
          <div class="row mt-3 justify-content-center">
            @foreach ($data as $i)
            <div class="p-3 col">
              <div class="card" style="width: 18rem;">
                {{-- <img src="https://unslplash." class="card-img-top" alt="..."> --}}
                <div class="card-body col">
                  <p class="card-text">{{$i["nama"]}}</p>
                  <h5 class="card-title">{{$i["deskripsi"]}}</h5>
                  <p href="#" class="btn btn-primary">{{$i["harga"]}}</p>
                </div>
              </div>
            </div>
            @endforeach
            <!--/column -->
        </div>
        <!--/.pricing-wrapper -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
  </div>
@endsection