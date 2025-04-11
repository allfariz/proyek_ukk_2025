<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ADD Book</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f9f9f9;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 400px;
      margin: 50px auto;
      background-color: #fff;
      border-radius: 10px;
      padding: 30px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    h1 {
      text-align: center;
      color: #333;
      margin-bottom: 30px;
    }
    label {
      color: #555;
      font-size: 16px;
      margin-bottom: 10px;
      display: block;
    }
    input[type="text"],
    input[type="number"],
    button {
      width: 100%;
      padding: 12px;
      margin-bottom: 20px;
      border: 1px solid #ddd;
      border-radius: 6px;
      box-sizing: border-box;
      font-size: 16px;
    }
    button {
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
    }
    button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Pertambahan Buku</h1>
    <form action="aksiadd.php" method="post">
      <div class="row">
        <label for="idbuku">ID Buku:</label>
        <input id="idbuku" type="text" name="idbuku">
      </div>
      <div class="row">
        <label for="kategori">Kategori:</label>
        <input id="kategori" type="text" name="kategori">
      </div>
      <div class="row">
        <label for="namabuku">Nama Buku:</label>
        <input id="namabuku" type="text" name="namabuku">
      </div>
      <div class="row">
        <label for="harga">Harga:</label>
        <input id="harga" type="number" name="harga">
      </div>
      <div class="row">
        <label for="stok">Stok:</label>
        <input id="stok" type="number" name="stok">
      </div>
      <div class="row">
        <label for="penerbit">Penerbit:</label>
        <input id="penerbit" type="text" name="penerbit">
      </div>
      <div class="row">
        <button>ADD</button>
      </div>
    </form>
  </div>
</body>
</html>
