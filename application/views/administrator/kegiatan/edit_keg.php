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

		<?php foreach ($kegiatan as $data) { ?>
				
<form action="<?php echo base_url() ?>index.php/Kegiatancontroller/updatekeg" method="post">
	<table style="margin:20px auto;">
	<div class="display:none;">
		<label>ID Kegiatan</label><br>
		<input type="text" name="id_k" placeholder="ID Kegiatan" value="<?php echo $data->id_k ?>">
	</div>
	<div class="form-group">
		<label>Nama Kegiatan</label><br>
		<input type="text" name="nm_keg" class="form-control" placeholder="Nama Kegiatan" value="<?php echo $data->nm_keg ?>">
	</div>
	<div class="form-group">
		<label>Lokasi Kegiatan</label><br>
		<input type="text" name="lokasi_keg" class="form-control" placeholder="Lokasi Kegiatan" value="<?php echo $data->lokasi_keg ?>">
	</div>
	<div class="form-group">
		<label>Daerah Kegiatan</label><br>
		<input type="text" name="daerah_keg" class="form-control" placeholder="Daerah Kegiatan" value="<?php echo $data->daerah_keg ?>">
	</div>
	<div class="form-group">
		<label>Waktu Kegiatan</label><br>
		<input type="date" name="waktu_keg" class="form-control" placeholder="waktu kegiatan" value="<?php echo $data->waktu_keg ?>">
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