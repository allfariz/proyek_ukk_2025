<?php
// menghubungkan dengan koneksi
include 'koneksi.php';

$idbuku = $_GET['idbuku'];

// sql to delete a record
$sql = "DELETE FROM tabel_buku WHERE idbuku='".$idbuku."'";


if (mysqli_query($db, $sql)) {
    header("location:admin.php?pesan=berhasil_hapus_buku");
} else {
    echo "Error deleting record: ";
}

// Close connection
mysqli_close($db);
?>