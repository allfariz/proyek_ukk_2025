<?php
// menghubungkan dengan koneksi
include 'koneksi.php';

// Attempt select query execution
$sql = "SELECT * FROM tabel_buku WHERE idbuku='".$_GET['idbuku']."'";
if($result = mysqli_query($db, $sql)){
	if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_array($result)){
			$idbuku = $row['idbuku'];
			$kategori = $row['kategori'];
			$namabuku = $row['namabuku'];
			$harga = $row['harga'];
			$stok = $row['stok'];
			$penerbit = $row['penerbit'];
		}
        // Free result set
		mysqli_free_result($result);
	} else{
		echo "No records matching your query were found.";
	}
} else{
	echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}

if (sizeof($_POST)!=0) {
	$idbuku = $_POST['idbuku'];
	$kategori = $_POST['kategori'];
	$namabuku = $_POST['namabuku'];
	$harga = $_POST['harga'];
	$stok = $_POST['stok'];
	$penerbit = $_POST['penerbit'];

	$sql = "UPDATE tabel_buku SET kategori='$kategori', namabuku='$namabuku', harga='$harga', stok='$stok', penerbit='$penerbit' WHERE idbuku='".$_POST['idbuku']."'";

	if (mysqli_query($db, $sql)) {
		echo "<div class='alert alert-success'>Record updated successfully</div>";
	} else {
		echo "<div class='alert alert-danger'>Error updating record: " . mysqli_error($db) . "</div>";
	}
}

// Close connection
mysqli_close($db);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Buku</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
	<!-- Tambahkan link ke Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
<div class="container">
  <div class="topnav">
    <a href="admin.php">
        <i class="fas fa-arrow-left"></i> Back
    </a>
  </div>
</div>

<div class="container mt-5">
	<h1 class="text-center">Edit Buku</h1>
	<div class="card">
		<div class="card-body">
			<form action="edit.php?idbuku=<?php echo $idbuku;?>" method="post">
				<div class="form-group">
					<label for="idbuku">ID Buku:</label>
					<input id="idbuku" type="text" name="idbuku" class="form-control" value="<?php echo $idbuku; ?>" readonly>
				</div>
				<div class="form-group">
					<label for="kategori">Kategori:</label>
					<input id="kategori" type="text" name="kategori" class="form-control" value="<?php echo $kategori;?>">
				</div>
				<div class="form-group">
					<label for="namabuku">Nama Buku:</label>
					<input id="namabuku" type="text" name="namabuku" class="form-control" value="<?php echo $namabuku;?>">
				</div>
				<div class="form-group">
					<label for="harga">Harga:</label>
					<input id="harga" type="number" name="harga" class="form-control" value="<?php echo $harga;?>">
				</div>
				<div class="form-group">
					<label for="stok">Stok:</label>
					<input id="stok" type="number" name="stok" class="form-control" value="<?php echo $stok;?>">
				</div>
				<div class="form-group">
					<label for="penerbit">Penerbit:</label>
					<input id="penerbit" type="text" name="penerbit" class="form-control" value="<?php echo $penerbit;?>">
				</div>
				<button type="submit" class="btn btn-primary">Edit</button>
			</form>
		</div>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>