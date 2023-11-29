<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  @vite(["resources/scss/app.scss","resources/js/app.js"])

</head>
<body>
   <div>
         @yield('menu')
   </div>

   <div class="content">
        @yield('content')
   </div>

   <div>
      @yield('footer')
   </div>

    @include('components.btn_totop')

</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>