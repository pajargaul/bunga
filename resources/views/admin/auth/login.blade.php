<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style1.css">
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
          <li class="nav-item"> <!-- Tambahkan class 'active' pada link yang sesuai dengan halaman saat ini -->
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Produk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Berita</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Tentang kami</a>
          </li>
        </ul>
      </div>
    </nav>   
      </div>
      <div class="kotak">
        <h1>Login</h1>
        <p>Masukkan email dan password</p>
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />
        <form method="POST" action="{{ route('admin.login') }}">
            @csrf
            <!-- Email Address -->
            <div class="custom-form-group">
                <x-input-label for="email" :value="__('Masukan Email')" />
                <x-text-input id="email" class="cmt-4" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            
            <!-- Password -->
            <div class="mt-4 custom-form-group">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" class="cmt-4" type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            
    
            <!-- Remember Me -->
            <div class="flex-container mt-4">
                <div class="block">
                    <label for="remember_me" class="inline-flex items-center custom-checkbox">
                        <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                        <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                    </label>
                </div>
            
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                        {{ __('lupa kata sandi?') }}
                    </a>
                @endif
            </div>                    
                <button class="ms-3">
                    {{ __('Login') }}
                </button>
            </div>
        </form>  
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
  <script>
      document.getElementById('registerBtn').addEventListener('click', function() {
          window.location.href = "{{ route('register') }}";
      });
  </script>
</body>
</html>