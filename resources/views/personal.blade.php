@extends('layouts.main')
@section('container')
  <div class="content-wrapper">
    <section class="wrapper bg-green">
      <div class="container">
        <h2 class="display-5 mb-7 text-center p-3">Detail makanan<h2>
          <div class="row mt-3 justify-content-center p-6">
            {{-- @foreach ($data as $i) --}}
            {{-- <div  class="p-3 col"> --}}
              <div class="card 3" style="width: 18rem; ">
                {{-- <img src="https://unslplash." class="card-img-top" alt="..."> --}}
                <div class="card-body justify-content-center">
                  <p class="card-text">{{$data['nama']}}</p>
                  <h5 class="card-title">{{$data['deskripsi']}}</h5>
                  <h5 class="card-title">{{$data['harga']}}</h5>
                  {{-- <a href="/dukresto/{{$i["slug"]}}" class="btn btn-primary">Lihat</a> --}}
                </div>
              </div>
            {{-- </div> --}}
            {{-- @endforeach --}}
            <!--/column -->
        </div>
        <!--/.pricing-wrapper -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
  </div>
@endsection