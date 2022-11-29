<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ config('app.name') }} - The easiest way to control business accurately and efficiently
  </title>
  <link rel="shortcut icon" href="{{ asset('img/landing-page/favicon.ico') }}" type="image/x-icon">

  <meta name="description"
    content="Cung cấp sản phẩm và dịch vụ đem lại LỢI NHUẬN TỨC THÌ và xây dựng kế hoạch GIA TĂNG LỢI NHUẬN lâu dài!">
  <meta property="og:title"
    content="BossStack - The easiest way to control business accurately and efficiently">
  <meta property="og:site_name" content="BossStack">
  <link rel="canonical" href="https://bossstack.vn" />
  <meta name="google-site-verification" content="-k2SmRCFohBmfol7XucRrxczosxFvyGEsHG9WVmd8-A" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous">
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

  <link rel="stylesheet" href="{{ asset('css/web/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/web/font.css') }}">
  <link rel="stylesheet" href="{{ asset('css/web/global.css') }}">
  <link rel="stylesheet" href="{{ asset('css/web/component.css') }}">

  <link rel="stylesheet" href="{{ asset('css/web/header.css') }}">
  <link rel="stylesheet" href="{{ asset('css/web/footer.css') }}">
  <link rel="stylesheet" href="{{ asset('css/web/banner.css') }}">
  @yield('head')
  {{-- @laravelPWA --}}
</head>

<body>
  @include('home.header')

  <div class="main">
    @yield('content')
  </div>

  @include('home.footer')

  <div class="backtotop animate__animated animate__zoomOut">
    <i class="fa-solid fa-arrow-up"></i>
  </div>

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-Y2LMZ9Y78H"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-Y2LMZ9Y78H');
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
    integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="{{ asset('js/web/main.js') }}"></script>
  <script src="{{ asset('js/web/carousel.js') }}"></script>
  <script src="{{ asset('js/commons.js') }}"></script>
  @yield('scripts')
</body>

</html>
