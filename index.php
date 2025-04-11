
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Perpustakaan SMK TELEKOMUNIKASI TUNAS HARAPAN</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link href="assets/style/main.css" rel="stylesheet" />

  <style>
    .store-adventeges {
      padding: 40px;
      background-color: #f7f7e8;
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-secondary fixed-top" data-aos="fade-down">
    <div class="container">
        <a href="index.php" class="navbar-brand d-flex align-items-center">
            <img src="./img/logo.png" width="70" alt="logo" />
            <span class="ms-2 text-white">PERPUSTAKAAN SMK TELEKOMUNIKASI TUNAS HARAPAN</span> <!-- Tambahkan tulisan di sini -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="index.php" class="nav-link active">Home</a>
                </li>
                <li class="nav-item">
                    <a href="pengadaan.php" class="nav-link">All Products</a>
                </li>
                <li class="nav-item">
                    <a href="#adventeges" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="#adventeges" class="nav-link">Beli</a>
                </li>
                <?php if (!isset($_SESSION["login"]) && !isset($_SESSION["user"])) : ?>
                    <li class="nav-item">
                        <a href="login.php" class="btn btn-success nav-link px-4 text-black">Sign In</a>
                    </li>
                <?php else : ?>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Hi, <?= $user["name"]; ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php if ($user["roles"] == 'ADMIN') : ?>
                                <li><a href="admin" class="dropdown-item">Dashboard</a></li>
                            <?php else : ?>
                                <li><a href="user" class="dropdown-item">Dashboard</a></li>
                            <?php endif; ?>
                            <li><hr class="dropdown-divider"></li>
                            <li><a href="logout.php" class="dropdown-item">Logout</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="cart.php" class="nav-link">
                            <img src="assets/images/<?= $carts >= 1 ? 'shopping-cart-filled.svg' : 'icon-cart-empty.svg'; ?>" alt="cart" />
                            <?php if ($carts >= 1) : ?>
                                <span class="badge bg-danger rounded-pill"><?= $carts; ?></span>
                            <?php endif; ?>
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>

  <!-- Page Content -->
  <div class="page-content page-home" data-aos="zoom-in" style="margin-top: 80px;">
    <section class="store-landing py-5">
        <div class="container">
            <div class="row align-items-center mt-5 justify-content-between">
                <div class="col-md-5">
                    <img src="./img/Laut_Tengah.avif" class="img-fluid" alt="Logo" />
                </div>
                <div class="col-md-6">
                    <h1 class="fw-bold mb-3">Laut Tengah</h1>
                    <p class="text-muted mb-4">menceritakan perjuangan Haia (Yoriko Angeline) yang ingin melanjutkan S2 di Korea Selatan, namun beasiswanya ditutup. Ia kemudian menerima tawaran tak terduga dari dosennya untuk menjadi istri kedua Bhumi (Ibrahim Risyad), suami keponakannya, demi bisa kuliah di Korea.</p>
                    <a href="pengadaan.php" class="btn btn-success px-4 py-2">
                        <i class="bi bi-cart-fill me-2"></i> Cek Ketersediaan
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="store-adventeges py-5" id="adventeges">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="fw-semibold">Kelebihan Perpustakaan Disini</h2>
            </div>
            <div class="row">
                <div class="col-12 col-md-6" data-aos="fade-down" data-aos-delay="100">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="./img/buku.png" width="70" class="mb-3" alt="Fast Delivery" />
                            <h5>Akses Buku</h5>
                            <p class="text-muted">Akses ke berbagai koleksi menarik yang bisa dipinjam. </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6" data-aos="fade-down" data-aos-delay="200">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="./img/membaca.png" width="70" class="mb-3" alt="More Efficient" />
                            <h5>Produk Berkualitas</h5>
                            <p class="text-muted">Akses buku gratis untuk semua pengguna dari penerbit berkualitas </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="store-products-kilogram py-5">
    <style>
        .card {
            border-radius: 10px; /* Membuat sudut kartu lebih bulat */
            overflow: hidden; /* Menghindari konten melampaui batas kartu */
            transition: transform 0.3s; /* Efek transisi saat hover */
            height: 100%; /* Mengatur tinggi kartu agar sama */
        }

        .card-img-top {
            height: 200px; /* Tinggi gambar */
            background-size: cover; /* Mengatur ukuran gambar */
            background-position: center; /* Memusatkan gambar */
        }

        .card:hover {
            transform: scale(1.05); /* Efek zoom saat hover */
        }

        .sold-out {
            position: relative;
        }

        .sold-out .card-img-top {
            position: relative;
        }

        .sold-out .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.75); /* Latar belakang gelap */
            color: white;
            font-weight: bold;
        }

        .row {
            display: flex; /* Menggunakan Flexbox untuk baris */
            flex-wrap: wrap; /* Membungkus kolom jika diperlukan */
        }

        .col-md-3 {
            display: flex; /* Menggunakan Flexbox untuk kolom */
            flex-direction: column; /* Mengatur arah kolom */
        }
    </style>

    <div class="container">
        <div class="text-center mb-4">
            <h2 class="fw-semibold">New Book</h2>
        </div>
        <div class="row">
            <!-- Card 1 -->
            <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                <a href="details.php?id=" class="text-decoration-none">
                    <div class="card shadow-sm border-0">
                        <div class="card-img-top" style="background-image: url('./img/laut_bercerita.avif');"></div>
                        <div class="card-body">
                            <h5 class="card-title text-dark">Laut Bercerita</h5>
                            <p class="card-text text-muted">Buku Laut Bercerita menceritakan terkait perilaku kekejaman dan kebengisan yang dirasakan oleh kelompok aktivis mahasiswa di masa Orde Baru...</p>
                        </div>
                    </div>
                </a>
            </div>

            
            <div class="col-md-3 mb-4 sold-out" data-aos="fade-up" data-aos-delay="200">
                <div class="card shadow-sm border-0">
                    <div class="card-img-top" style="background-image: url('./img/mieayam.avif');"></div>
                    <div class="card-body">
                        <h5 class="card-title text-dark">Seporsi Mie Ayam Sebelum Mati</h5>
                        <p class="card-text text-muted">Ale, seorang pria berusia 37 tahun memiliki tinggi badan 189 cm dan berat 138 kg...</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-4 sold-out" data-aos="fade-up" data-aos-delay="200">
                <div class="card shadow-sm border-0">
                    <div class="card-img-top" style="background-image: url('./img/cantik.avif');"></div>
                    <div class="card-body">
                        <h5 class="card-title text-dark">Cantik Itu Luka</h5>
                        <p class="card-text text-muted">Hidup di era kolonialisme bagi para wanita dianggap sudah setara seperti hidup di neraka....</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-4 sold-out" data-aos="fade-up" data-aos-delay="200">
                <div class="card shadow-sm border-0">
                    <div class="card-img-top" style="background-image: url('./img/tengah.avif');"></div>
                    <div class="card-body">
                        <h5 class="card-title text-dark">Tengah-Tengah</h5>
                        <p class="card-text text-muted">Maika selalu berada di tengah-tengah dunia. Jadi anak tengah di keluarga besarnya,...</p>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
</div>

  <!-- Footer -->
  <footer class="bg-light py-4">
    <div class="container text-center">
      <p class="mb-0">&copy; Projek UKK Allfariz </p>
    </div>
  </footer>

  <!-- Scripts -->
   <script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>
