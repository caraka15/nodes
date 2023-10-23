<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Crxa Nodes Service</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
    <meta name="description" content="CRXA NODES is a premier individual enterprise dedicated to providing exceptional node and
                            validator services across various networks, with a primary focus on the thriving Cosmos
                            ecosystem. With an unwavering commitment to excellence, we have established ourselves as a
                            trusted partner for network participants, offering reliable infrastructure and comprehensive
                            support to ensure optimal performance, security, and growth">
    <meta charset="UTF-8" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://site-assets.fontawesome.com/releases/v6.4.2/css/all.css"
    >

    <link
      rel="stylesheet"
      href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-solid.css"
    >

    <link
      rel="stylesheet"
      href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-regular.css"
      >

    <link
      rel="stylesheet"
      href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-light.css"
    >
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <!-- Google tag (gtag.js) -->
    <style>
      .loader {
        width: 100%;
        height: 100%;
        position: absolute;
        padding-top: 19%;
        background: #ff8661;
        padding-left: 48%;
        margin: 0 auto;
        z-index: 999999;
      }
      .loader svg{
        width: 100px;
      }
      @media (max-width: 768px) {
        .loader {
          padding: 50% 36%;
        }
      }
    </style>
</head>
<body>
  <div class="loader">
    @yield('loader')
  </div>
  @include('partials.navbar')

  <div class="container">
      @yield('container')
  </div>

  @include('partials.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script>
  $(function(){
    setTimeout(() => {
      $(".loader").fadeOut(800);
    },800)
  })
</script>
</body>
</html>
