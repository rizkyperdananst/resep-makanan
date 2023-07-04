<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>

  <style>
    .row {
      width: 100%
    }

    #home {
      background-image: url("./../img/bg-coffee.jpg");
      background-size: cover;
      background-repeat: no-repeat
    }

    .bg-hero {
      padding-top: 100px;
      padding-bottom: 100px;
      padding-left: -70px;
      padding-right: 100px;
    }
  </style>

  @stack('styles')
  <body>
        
    <header>
      {{-- Start Nav --}}
      <nav class="navbar navbar-expand-lg" style="background-color: rgb(134, 117, 18)">
        <div class="container-fluid">
             <a class="navbar-brand" href="{{ route('home') }}">Resep Makanan</a>
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
               <div class="navbar-nav ms-auto">
                 <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                 <a class="nav-link" href="#makanan">Makanan</a>
                 <a class="nav-link" href="#about">About</a>
                 <a class="nav-link" href="#maps">Maps</a>
                 <a class="nav-link" href="{{ route('login') }}">Login</a>
               </div>
             </div>
        </div>
      </nav>
      {{-- End Nav --}}

      {{-- Start Hero --}}
      <div class="row mb-3" id="home">
        <div class="col-md-6" style="padding: 100px">
          <img src="{{ url('img/2.jpg') }}" alt="Coffee" width="400px" height="400px">
        </div>
        <div class="col-md-6 bg-hero">
          <h1>Selamat Datang Di Resep Makanan Kami</h1>
          <p>Website ini menyediakan berbagai macam resep makanan, dari mulai makanan yang berjenis berat hingga yang ringan.</p>
          <p>Jika anda menyukai website ini silahkan berikan ulasan terbaik anda disini. Dan kami sangat menanti ulasan anda serta saran dan kritik dari anda.</p>
        </div>
        
      </div>
      {{-- End Hero --}}
    </header>

          {{-- Start Makanan --}}
          @yield('content')
          {{-- End Makanan --}}

          {{-- Start About --}}
          <div class="row mb-3 bg-light" id="about" style="background-image: url(./../img/bg-coffee.jpg)">
            <h2 class="text-center mb-3">About We</h2>
            <div class="col-md-6">
              <img src="{{ url('img/coffee.png') }}" alt="Coffee" class="img img-fluid">
            </div>
            <div class="col-md-6" style="padding: 20px">
              <h4>About We</h4>
              <p>Website ini berisi tentang berbagai resep makanan yang mudah dan praktis. Kami sengaja membuat website ini agar publik atau khalayak dapat membuat masakan yang lezat dan mudah dengan melihat resep masakan yang telah kami sajikan dalam website ini. Dan jika anda mempunyai saran atau request untuk resep masakannya di publish silahkan hubungi kontak kami. Kami sangat senang jika ada yang berpartisipasi dalam website resep masakan kami ini.</p>
            </div>
          </div>
          {{-- End About --}}

          <footer class="p-2 text-center" style="background-color: rgb(134, 117, 18)">
            <p>&copy; copyright <b>Stara</b></p>
          
            {{-- <div class="col-md-12 d-flex justify-content-center">
              <a href="#" class="me-3"><i class="fa-brands fa-whatsapp fs-2"></i></a>
              <a href="#" class="me-3"><i class="fa-regular fa-envelope fs-2"></i></a>
              <a href="#" class="me-3"><i class="fa-brands fa-instagram fs-2"></i></a>
              <a href="#" class="me-3"><i class="fa-solid fa-phone-volume fs-4 mt-1"></i></a>
            </div> --}}
          
          </footer>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
     
     <script src="https://kit.fontawesome.com/e7f5845a19.js" crossorigin="anonymous"></script>
  </body>
</html>