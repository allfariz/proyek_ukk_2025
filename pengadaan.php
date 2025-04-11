<!DOCTYPE html>
<html>
<head>
    <title>BUKU TERBARU</title>
    <link rel="icon" type="image/png" href="../icon/rwby-icon2.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Roboto:400,700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        /* Gaya CSS yang ada sebelumnya */
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #e9ecef;
            margin: 0;
            padding: 20px;
        }

        .back-button {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            transition: background-color 0.3s;
        }

        .back-button:hover {
            background-color: #0056b3;
        }

        /* Gaya CSS untuk navigasi dan tabel */
        .topnav {
            background-color: #007bff;
            padding: 10px;
            text-align: center;
        }

        .topnav a {
            color: white;
            text-decoration: none;
            padding: 14px 20px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .topnav a:hover {
            background-color: #0056b3;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px auto;
            background-color: #ffffff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            border: 1px solid #dee2e6;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #343a40;
            color: white;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f8f9fa;
        }

        tr:hover {
            background-color: #e2e6ea;
        }
    </style>
</head>
<body>

<a href="index.php" class="back-button">
    <i class="material-icons">arrow_back</i> Kembali
</a> 

<?php
include 'koneksi.php';

$sql = "SELECT * FROM `tabel_buku` ORDER BY idbuku DESC";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr>";
    echo "<th>JUDUL NAMA</th>";
    echo "<th>NAMA PENERBIT</th>";
    echo "<th>STOK</th>";
    echo "</tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["namabuku"] . "</td>";
        echo "<td>" . $row["penerbit"] . "</td>";
        echo "<td>" . $row["stok"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "<p style='text-align: center;'>0 results</p>";
}

$db->close();
?>

</body>
</html>