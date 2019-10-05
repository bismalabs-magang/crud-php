<!DOCTYPE html>
<html>
<head>
	<title>Tambah Dosen</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>


	<div class="container" style="margin-top: 100px">
		<div class="row">
			<div class="col-md-8 offset-md-2">

				<form action="simpan-dosen.php" method="POST">

				  <div class="form-group">
				    <label>NAMA DOSEN</label>
				    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Dosen" required>
				  </div>

				  <div class="form-group">
				    <label>ALAMAT DOSEN</label>
				    <textarea class="form-control" name="alamat" rows="4" placeholder="Masukkan Alamat Dosen" required></textarea>
				  </div>
				  
				  <button type="submit" class="btn btn-success">SIMPAN</button>

				</form>

			</div>
		</div>		
	</div>


</body>
</html>