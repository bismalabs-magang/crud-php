<?php

	$id = $_GET['id'];

	//include koneksi
	include('config/koneksi.php');

	$sql = "SELECT * FROM tbl_dosen WHERE id_dosen = $id LIMIT 1 ";

	$result = mysqli_query($connection, $sql);
	$row = mysqli_fetch_array($result);

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Edit Dosen</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>


	<div class="container" style="margin-top: 100px">
		<div class="row">
			<div class="col-md-8 offset-md-2">

				<form action="update-dosen.php" method="POST">

				  <div class="form-group">
				    <label>NAMA DOSEN</label>
				    <input type="text" name="nama" value="<?php echo $row['nama_dosen'] ?>" class="form-control" placeholder="Masukkan Nama Dosen" required>

				    <input type="hidden" name="id_dosen" value="<?php echo $row['id_dosen'] ?>">
				  
				  </div>

				  <div class="form-group">
				    <label>ALAMAT DOSEN</label>
				    <textarea class="form-control" name="alamat" rows="4" placeholder="Masukkan Alamat Dosen" required><?php echo $row['alamat'] ?></textarea>
				  </div>
				  
				  <button type="submit" class="btn btn-success">UPDATE</button>

				</form>

			</div>
		</div>		
	</div>


</body>
</html>