@extends('layouts.main')
@section('container')
  <div class="content-wrapper">
    <section class="wrapper bg-green">
      <div class="container">
        <h2 class="display-5 mb-7 text-center">makanan hari ini<h2>
          <div class="row mt-3 justify-content-center">
            @foreach ($data as $i)
            <div  class="p-3 col">
              <div class="card" style="width: 18rem;">
                {{-- <img src="https://unslplash." class="card-img-top" alt="..."> --}}
                <a href="/dukresto/{{$i["id"]}}" class="card-body col">
                  <p class="card-text">{{$i["nama"]}}</p>
                  <h5 class="card-title">{{$i["harga"]}}</h5>
                  {{-- <a href="/dukresto/{{$i["slug"]}}" class="btn btn-primary">Lihat</a> --}}
                </a>
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