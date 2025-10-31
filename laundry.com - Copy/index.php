<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dika Laundry</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar">
    <div class="logo">
      <img src="image/logo.png" alt="logo">
    </div>
    <ul class="nav-links">
      <li><a href="#home">Home</a></li>
      <li><a href="#menu">Menu</a></li>
      <li><a href="#service">Contact</a></li>
    </ul>
    <div class="login">
      <a href="login.php"><button class="btn-login">Login</button></a>
      <a href="register.php"><button class="btn-register">Register</button></a>
    </div>
  </nav>

  <!-- Home Section -->
  <section class="home" id="home">
    <div class="home-background">
      <img src="image/logo.png" alt="Laundry Background">
    </div>
    <div class="home-text">
      <h1>Welcome to Dika Laundry</h1>
      <p>
        Dika Laundry hadir untuk memberikan layanan laundry terbaik dengan hasil bersih, 
        rapi, dan wangi tahan lama. Kami menggunakan deterjen berkualitas, peralatan modern, 
        serta penanganan yang teliti agar pakaian tetap terawat. Dengan harga terjangkau 
        dan pelayanan cepat, kami siap menjadi pilihan utama Anda untuk laundry yang nyaman 
        dan memuaskan.
      </p>
    </div>
    <div class="home-slide">
      <div class="border">
        <div class="foto1">
          <img src="image/images.jpg" alt="Laundry Slide 1">
        </div>
        <div class="foto2">
          <img src="image/images2.jpeg" alt="Laundry Slide 2">
        </div>
      </div>
    </div>
  </section>
  <!-- End Home -->

  <!-- Menu Section -->
  <section class="menu" id="menu">
    <div class="menu-background">
      <img src="image/logo.png" alt="">
    </div>
    <h2>Daftar Pricelist</h2>

<div class="menu-container">

  <!-- Paket Kilat -->
  <div class="menu-box" >
    <h3>Cuci Kilat</h3>z
    <ul>
      <li><span>Cuci Lipat</span> <span>Rp 5.000</span></li>
      <li><span>Cuci Setrika</span> <span>Rp 6.000</span></li>
      <li><span>Setrika</span> <span>Rp 5.000</span></li>
      <li><span>Gorden</span> <span>Rp 10.000</span></li>
    </ul>
  </div>

  <!-- Paket Express -->
  <div class="menu-box" >
    <h3>Express</h3>
    <ul>
      <li><span>Cuci Lipat</span> <span>Rp 8.000</span></li>
      <li><span>Cuci Setrika</span> <span>Rp 9.000</span></li>
      <li><span>Setrika</span> <span>Rp 8.000</span></li>
    </ul>
  </div>

  <!-- Paket Kilat -->
  <div class="menu-box" >
    <h3>Kilat</h3>
    <ul>
      <li><span>Cuci Lipat</span> <span>Rp 10.000</span></li>
      <li><span>Celana Jeans</span> <span>Rp 20.000</span></li>
      <li><span>Jaket Jeans</span> <span>Rp 20.000</span></li>
    </ul>
  </div>

  <!-- Cuci Satuan 1 -->
  <div class="menu-box">
    <h3>Cuci Satuan 1</h3>
    <ul>
      <li><span>Bedcover 120</span> <span>Rp 20.000</span></li>
      <li><span>Bedcover 160</span> <span>Rp 25.000</span></li>
      <li><span>Bedcover 180</span> <span>Rp 30.000</span></li>
      <li><span>Selimut Single</span> <span>Rp 15.000</span></li>
      <li><span>Selimut Double</span> <span>Rp 20.000</span></li>
      <li><span>Sprei</span> <span>Rp 12.000</span></li>
    </ul>
  </div>

  <!-- Cuci Satuan 2 -->
  <div class="menu-box" data-aos="zoom-in-up" data-aos-duration="800" data-aos-delay="400">
    <h3>Cuci Satuan 2</h3>
    <ul>
      <li><span>Sprei 1 Set</span> <span>Rp 15.000</span></li>
      <li><span>Handuk Besar</span> <span>Rp 15.000</span></li>
      <li><span>Celana/Rok Pendek</span> <span>Rp 13.000</span></li>
      <li><span>Jaket Kain/Parasut</span> <span>Rp 20.000</span></li>
      <li><span>Gamis</span> <span>Rp 20.000</span></li>
      <li><span>Celana Jeans</span> <span>Rp 15.000</span></li>
    </ul>
  </div>

  <!-- Cuci Satuan 3 -->
  <div class="menu-box" data-aos="zoom-in-left" data-aos-duration="800" data-aos-delay="500">
    <h3>Cuci Satuan 3</h3>
    <ul>
      <li><span>Jaket Jeans</span> <span>Rp 20.000</span></li>
      <li><span>Kemeja</span> <span>Rp 10.000</span></li>
      <li><span>Dress</span> <span>Rp 30.000</span></li>
      <li><span>Blouse</span> <span>Rp 15.000</span></li>
      <li><span>Celana/Rok Panjang</span> <span>Rp 15.000</span></li>
      <li><span>Jaket Kain/Parasut</span> <span>Rp 18.000</span></li>
      <li><span>Sweater</span> <span>Rp 20.000</span></li>
    </ul>
  </div>

</div>

  </section>
  <!-- End Menu -->
  <!-- Service Contact -->
  <section class="service-contak" id="service">
    <div class="service-background">
      <img src="image/logo.png" alt="">
    </div>
    <h1>Hubungi jika ingin melaundry</h1>
    <input type="text" id="nomor" placeholder="Masukan nomor hp anda">
    <input type="text" id="nama" placeholder="Masukan nama anda">
    <input type="text" id="alamat" placeholder="Masukan alamat anda">
    <button type="submit" onclick="kirimWa()">Kirim</button>
  </section>
  <!-- End Service Contact -->
    <script>
    // Navbar muncul saat scroll
    window.addEventListener("scroll", function () {
      const navbar = document.querySelector(".navbar");
      navbar.classList.toggle("visible", window.scrollY > 50);
    });

    // Fungsi kirim ke WhatsApp
    function kirimWa() {
      const nomor = document.getElementById("nomor").value;
      const nama = document.getElementById("nama").value;
      const alamat = document.getElementById("alamat").value;

      if (!nomor || !nama || !alamat) {
        alert("Harap isi semua kolom terlebih dahulu!");
        return;
      }

      const pesan = `Halo, saya ingin melaundry.\n\nNama: ${nama}\nNomor: ${nomor}\nAlamat: ${alamat}`;
      const url = `https://wa.me/6285770835729?text=${encodeURIComponent(pesan)}`;
      window.open(url, "_blank");
    }
  </script>
</body>
</html>
