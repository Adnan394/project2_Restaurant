
{{-- 
Nama : Muhammad Rifqi Lutfi
NIM  : 2440040412 
--}}

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ $title }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg bc-primary fixed-top fw-500">
        <div class="container">
          <a class="navbar-brand font-secondary fw-700 fs-secondary" href="#">The Rosa</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/">RESERVATION</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#menu">MENU</a>
              </li>
              <li class="nav-item">
                <a href="#about" class="nav-link">BLOG</a>
              </li>
              <li class="nav-item">
                <a href="/" class="nav-link">FEATURE</a>
              </li>
              <li class="nav-item">
                <a href="#culinery" class="nav-link">SHOP</a>
              </li>
              <li class="nav-item d-flex align-items-center">
                <a href="{{ route('daftar') }}" class="btn"><i class="bi bi-box-arrow-in-right me-2"></i>LOGIN</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      @yield('content')

      <footer>
        <p>Copyright © claimed by Muhammad Rifqi Lutfi</p>
      </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>