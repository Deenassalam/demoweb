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

		<?php foreach ($bencana as $data) { ?>
				
<form action="<?php echo base_url() ?>index.php/Bencanacontroller/updatebencana" method="post">
	<table style="margin:20px auto;">
	<div class="display:none;">
		<label>ID Bencana</label><br>
		<input type="text" name="id_bencana" placeholder="ID" value="<?php echo $data->id_bencana ?>">
	</div>
	<div class="form-group">
		<label>Nama Bencana</label><br>
		<input type="text" name="nama_bencana" class="form-control" placeholder="Nama Bencana" value="<?php echo $data->nama_bencana ?>">
	</div>
	<div class="form-group">
		<label>Lokasi Bencana</label><br>
		<input type="text" name="lokasi_bencana" class="form-control" placeholder="lokasi bencana" value="<?php echo $data->lokasi_bencana ?>">
	</div>
	<div class="form-group">
		<label>Waktu Bencana</label><br>
		<input type="date" name="waktu_bencana" class="form-control" placeholder="waktu_bencana" value="<?php echo $data->waktu_bencana ?>">
	</div>
	<div class="form-group">
		<label>Deskripsi Bencana</label><br>
		<input type="area" name="desk_bencana" class="form-control" placeholder="desk_bencana" value="<?php echo $data->desk_bencana ?>">
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