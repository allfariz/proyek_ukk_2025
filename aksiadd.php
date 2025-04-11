<?php 
include 'koneksi.php';

// menampilkan data yang sudah di input di dalam form
$idbuku = $_POST['idbuku'];
$kategori = $_POST['kategori'];
$namabuku = $_POST['namabuku'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$penerbit = $_POST['penerbit'];

$sql = "INSERT INTO tabel_buku (idbuku, kategori, namabuku, harga, stok, penerbit) VALUES ('$idbuku', '$kategori', '$namabuku', '$harga', '$stok', '$penerbit')";
if(mysqli_query($db, $sql)) {
	echo "Buku berhasil ditambahkan";	
	header("location:admin.php?pesan=berhasil_tambah_buku");
}
else 
{
	echo "Buku gagal ditambahkan";
}

// Close connection
mysqli_close($db);
?>