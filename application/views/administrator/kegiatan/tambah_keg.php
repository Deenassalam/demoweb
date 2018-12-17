<form action="<?php echo base_url() ?>index.php/Kegiatancontroller/simpankeg" method="post">
	<!-- <div class="form-group">
		<label>ID Kegiatan</label><br>
		<input type="text" name="id_k" class="form-control" placeholder="ID Kegiatan">
	</div> -->
	<div class="form-group">
		<label>Nama Kegiatan</label><br>
		<input type="text" name="nm_keg" class="form-control" placeholder="Nama Kegiatan">
	</div>
	<div class="form-group">
		<label>Lokasi Kegiatan</label><br>
		<input type="text" name="lokasi_keg" class="form-control" placeholder="Lokasi Kegiatan">
	</div>
	<div class="form-group">
		<label>Daerah Kegiatan</label><br>
		<input type="text" name="daerah_keg" class="form-control" placeholder="Daerah Kegiatan">
	</div>
	<div class="form-group">
		<label>Waktu Kegiatan</label><br>
		<input type="date" name="waktu_keg" class="form-control" placeholder="waktu kegiatan">
	</div>
	<div class="form-group">
		<input type="submit" name="simpan" class="btn btn-primary" value="Simpan">
	</div>
</form>