<!DOCTYPE html>
<html>
<head>
  <title>Add buku</title>
  <link rel="icon" type="image/png" href="../icon/rwby-icon2.png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th, td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }

    th {
      background-color: #333;
      color: white;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    tr:hover {
      background-color: #ddd;
    }

    button {
      background-color: #4CAF50; /* Green */
      border: none;
      color: white;
      padding: 8px 16px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      margin: 4px 2px;
      cursor: pointer;
      border-radius: 4px;
    }

    button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="topnav">
  <a href="home.php">
        <i class="material-icons">arrow_back</i>Back
    </a>
  </div>
</div>

<div class="container">
  <table>
    <tr>
      <th>ID BUKU</th>
      <th>KATEGORI</th>
      <th>NAMA BUKU</th>
      <th>HARGA</th>
      <th>STOK</th>
      <th>PENERBIT</th>
      <th>OPERASI</th>
    </tr>
    <?php
    include 'koneksi.php';
    $sql = "SELECT * FROM tabel_buku";
    if($result = mysqli_query($db, $sql)){
      if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)) {
          echo "<tr>";
          echo "<td>" . $row["idbuku"]."</td>";
          echo "<td>" . $row["kategori"]."</td>";
          echo "<td>" . $row["namabuku"]."</td>";
          echo "<td>" . $row["harga"]."</td>";
          echo "<td>" . $row["stok"]."</td>";
          echo "<td>" . $row["penerbit"]."</td>";
          echo "<td>
                <a href='edit.php?idbuku=". $row["idbuku"]."'><button>EDIT</button></a>
                <a href='delete.php?idbuku=". $row["idbuku"]."'><button>DELETE</button></a>
                </td>";
          echo "</tr>";
        }
        mysqli_free_result($result);
      } else {
        echo "No records matching your query were found.";
      }
    } else {
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($koneksi);
    }
    mysqli_close($db);
    ?>
  </table>

    <a href= 'add.php'><button>Tambah Buku</button></a>
    
</div>

</body>
</html>
