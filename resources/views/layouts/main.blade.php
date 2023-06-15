<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  {{-- <link rel="shortcut icon" href="./assets/img/setting-3.svg"> --}}
  <title>DukMov</title>
  <link rel="stylesheet" href="../css/plugins.css">
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  {{-- navbar --}}
  @include('partials.nav')
  <div class="content-wrapper">
    @yield('container')
    <!-- /section -->
  </div>
  <!-- /.content-wrapper -->
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  @include('partials.footer')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
  <script src="../js/plugins.js"></script>
  <script src="../js/theme.js"></script>
</body>

</html>