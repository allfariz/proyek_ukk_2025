<!DOCTYPE html>
<html>

<head>
  <title>Perpustakaan</title>
  <link rel="icon" type="image/png" href="../icon/rwby-icon2.png">
  <link rel="stylesheet" type="text/css" href="index.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
  <div class="header">
  <a href="home.php" class="image-link">
    <img src="./img/logo.png" width="100px" height="110px">
</a>
    <h1>Admin Perpustakaan SMK TELEKOMUNIKASI TUNAS HARAPAN</h1>
  </div>

  <div class="topnav">
    <a href="add.php"><i class="material-icons">face</i>Tambahan Buku</a>
    <a href="admin.php"><i class="material-icons">book</i>perbaruhi</a>
    <a href="logout.php"><i class="material-icons">table</i>logout</a>
  </div>

  <div class="row">
    <div class="column side">
      <!-- Optional content for side column -->
    </div>

    <div class="column middle">
      <form action="home.php" method="get" id="namabuku">
        <input type="text" placeholder="Cari Buku" name="cari">

      </form>

      <?php
      // menghubungkan dengan koneksi
      include 'koneksi.php';

      if (isset($_GET['cari'])) {
        $cari = $_GET['cari'];
        $sql = "SELECT * FROM tabel_buku WHERE namabuku LIKE '%" . mysqli_real_escape_string($db, $cari) . "%'";
      } else {
        $sql = "SELECT * FROM tabel_buku";
      }

      if ($result = mysqli_query($db, $sql)) {
        if (mysqli_num_rows($result) > 0) {
          echo "<table border=1 width=80% align=center>";
          echo "<tr>";
          echo "<th>ID buku</th>";
          echo "<th>Kategori</th>";
          echo "<th>Nama Buku</th>";
          echo "<th>Harga</th>";
          echo "<th>Stok</th>";
          echo "<th>Penerbit</th>";
          echo "</tr>";

          while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['idbuku']) . "</td>";
            echo "<td>" . htmlspecialchars($row['kategori']) . "</td>";
            echo "<td>" . htmlspecialchars($row['namabuku']) . "</td>";
            echo "<td>" . htmlspecialchars($row['harga']) . "</td>";
            echo "<td>" . htmlspecialchars($row['stok']) . "</td>";
            echo "<td>" . htmlspecialchars($row['penerbit']) . "</td>";
            echo "</tr>";
          }
          echo "</table>";
          // Free result set
          mysqli_free_result($result);
        } else {
          echo "Tidak ada hasil pencarian.";
        }
      } else {
        echo "Terjadi kesalahan dalam eksekusi query: " . mysqli_error($db);
      }

      // Close connection
      mysqli_close($db);
      ?>
    </div>

    <div class="column side">
      <!-- Optional content for side column -->
    </div>
  </div>

  <div class="footer">
    <i class="material-icons">copyright</i>
    <p>Projek UKK Allfariz</p>
  </div>
</body>

</html>