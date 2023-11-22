<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FishApp</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
       body {
    background-size: cover;
    background-repeat: no-repeat;
    margin: 0;
    color: white;
    background-attachment: fixed; /* Menetapkan background agar tetap pada posisinya */
}
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body style="background-image: url('img/bgbunga.jpg')">
    <div class="rectangle">
      <img src="img/logo.png" alt="logo">
        <div class="user-actions">
          <a href="{{ route('login') }}">Log-In</a>
         <button id="registerBtn">Register</button>
     </div>
     <nav class="navbar navbar-expand-lg">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active"> <!-- Tambahkan class 'active' pada link yang sesuai dengan halaman saat ini -->
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/produk">Produk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Berita</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Tentang Kami</a>
          </li>
        </ul>
      </div>
    </nav>   
      </div>
      <img src="img/Titik-titik.svg" alt="Titik-titik" class="dot-image1">
      <div class="slide-judul">
        <div id="overflow">
          <div class="inner">
              <div class="slide-content slide_1">
                  <h1>
                      Selamat Datang di FloriShop <br> Teman Terbaik <br> para pecinta bunga
                  </h1>
                  <p>tempat di mana keindahan bunga bersatu dengan kemudahan belanja online.<br>
                      Temukan rangkaian bunga unik, buket indah, dan dekorasi floral untuk <br>
                      setiap kesempatan spesial. <br></p>
              </div>
              <div class="slide-content slide_2">
                  <h1>
                      FloriShop adalah destinasi <br> online terbaik Anda
                  </h1>
                  <p>semua kebutuhan bunga dan rangkaian bunga indah. <br>
                      Dengan koleksi kami yang luas dan pilihan bunga segar berkualitas tinggi, <br>
                      FloriShop membawa keindahan alam langsung ke pintu Anda.</p>
              </div>
              <div class="slide-content slide_3">
                  <h1>
                      Di FloriShop, kami memahami <br> betapa pentingnya setiap momen berharga.
                  </h1>
                  <p>Dengan pelayanan pelanggan yang ramah dan profesional, serta kemudahan pembelian online,<br>
                      kami berkomitmen untuk membuat pengalaman belanja bunga Anda tak terlupakan...</p>
              </div>

              <div id="controls">
                  <label for="slide_1"></label>
                  <label for="slide_2"></label>
                  <label for="slide_3"></label>
              </div>
              <div id="bullets">
                  <label for="slide_1"></label>
                  <label for="slide_2"></label>
                  <label for="slide_3"></label>
              </div>
          </div>
      </div>
    </div>
    <div class="tombol_geser">
        <img src="img/Expand_left.png" alt="geser kiri" id="geser_kiri">
        <img src="img/Expand_right.png" alt="geser kanan" id="geser_kanan">
    </div>
    <footer>
      <div class="kotakfooter">
          <img src="img/Group 240.svg" alt="elemen">
      </div>
      <div class="contentfooter">
          <p>solusi inovatif yang dirancang <br>untuk membantu Pemilik Bunga<br>guna meningkatkan Tanaman Mereka</p>
      </div>
      <div class="buton1">
          <button id="registersekarang">Register Sekarang</button>
          <a href="#">Pelajari Selengkapnya</a>
      </div>
      <div class="ul1">
          <ul class="menufooter">
              <li><a href="#">About</a></li>
              <li><a href="#">Solution</a></li>
              <li><a href="#">Pricing</a></li>
              <li><a href="#">Resources</a></li>
          </ul>
      </div>

      <div class="ul2">
          <ul class="menufooter">
              <li><a href="#">Jobs</a></li>
              <li><a href="#">Case Studies</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Out Team</a></li>
              <li><a href="#">Press Realese</a></li>
          </ul>
      </div>
      <div class="ul3">
          <ul class="menufooter">
              <li><a href="#">Term Ofuse</a></li>
              <li><a href="#">Cookies Use</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="#">Login</a></li>
          </ul>
      </div>
      <div class="ul4">
          <ul class="menufooter">
              <li><a href="#">fajarrosyidi80@gmail.com</a></li>
          </ul>
      </div>
      <div class="ul5">
          <ul class="menufooter">
              <li><a href="#"><img src="img/Vector.png" alt="instagram"></a></li>
              <li><a href="#"><img src="img/Vector (1).png" alt="instagram"></a></li>
              <li><a href="#"><img src="img/Vector (2).png" alt="instagram"></a></li>
              <li><a href="#"><img src="img/Vector (3).png" alt="instagram"></a></li>
          </ul>
      </div>
  </footer>
  <script src="js/slider.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
      document.getElementById('registerBtn').addEventListener('click', function() {
          window.location.href = "{{ route('register') }}";
      });
  </script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
