<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title> STARK</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="<?php echo base_url(); ?>/assets/bootstrap/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>/assets/bootstrap/js/bootstrap.js"></script>
</head>
<body>
	<center>
		<br><br><br>
		<h3> Edit Data</h3>
	</center>

	<div class="container">
	<div id="body">

		<?php foreach ($relawan as $data) { ?>
				
<form action="<?php echo base_url() ?>index.php/Administrator/update1" method="post">
	<table style="margin:20px auto;">
	<div class="form-group">
		<label>ID</label><br>
		<input type="text" name="id" placeholder="ID" value="<?php echo $data->id ?>">
	</div>
	<div class="form-group">
		<label>Nama Lengkap</label><br>
		<input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap" value="<?php echo $data->nama_lengkap ?>">
	</div>
	<div class="form-group">
		<label>NIK</label><br>
		<input type="text" name="nik" class="form-control" placeholder="nik" value="<?php echo $data->nik ?>">
	</div>
	<div class="form-group">
		<label>Email</label><br>
		<input type="email" name="email" class="form-control" placeholder="email" value="<?php echo $data->email ?>">
	</div>
	<div class="form-group">
		<label>Password</label><br>
		<input type="password" name="password" class="form-control" placeholder="password" value="<?php echo $data->password ?>">
	</div>
	<div class="form-group">
		<label>Re-type Password</label><br>
		<input type="password" name="repassword" class="form-control" placeholder="Re-type Password" value="<?php echo $data->password ?>">
	</div>
	<div class="form-group">
		<label>Alamat Asal</label><br>
		<input type="area" name="asal" class="form-control" placeholder="Alamat Asal" value="<?php echo $data->asal ?>">
	</div>
	<div class="form-group">
		<label>Tempat Lahir</label><br>
		<input type="text" name="tempat" class="form-control" placeholder="Tempat Lahir" value="<?php echo $data->tempat ?>">
	</div>
	<div class="form-group">
		<label>Tanggal Lahir</label><br>
		<input type="date" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir" value="<?php echo $data->tgl_lahir ?>">
	</div>
	<div class="form-group">
		<label>Kota Tinggal</label><br>
		<input type="text" name="alamat" class="form-control" placeholder="Kota Tinggal" value="<?php echo $data->alamat ?>">
	</div>
	<div class="form-group">
		<label>Keahlian</label><br>
		<input type="text" name="keahlian" class="form-control" placeholder="Keahlian" value="<?php echo $data->keahlian ?>">
	</div>
	<div class="form-group">
		<label>Deskripsi Keahlian</label><br>
		<input type="area" name="desk_keahlian" class="form-control" placeholder="Deskripsi Keahlian" value="<?php echo $data->desk_keahlian ?>">
	</div>
	<div class="form-group">
		<input type="submit" name="simpan" class="btn btn-primary" value="Simpan">
	</div>
</table>
</form>
<?php } ?>
</div>
</div>
</body>
</html>