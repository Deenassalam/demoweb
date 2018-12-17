<form action="<?php echo base_url() ?>index.php/Bencanacontroller/simpanbencana" method="post">
	<!-- <div class="form-group">
		<label>ID Bencana</label><br>
		<input type="text" name="id_bencana" class="form-control" placeholder="ID Bencana">
	</div> -->
	<div class="form-group">
		<label>Nama Bencana</label><br>
		<input type="text" name="nama_bencana" class="form-control" placeholder="Nama Bencana">
	</div>
	<div class="form-group">
		<label>Lokasi Bencana</label><br>
		<input type="text" name="lokasi_bencana" class="form-control" placeholder="Lokasi Bencana">
	</div>
	<div class="form-group">
		<label>Waktu Bencana</label><br>
		<input type="date" name="waktu_bencana" class="form-control" placeholder="Waktu Bencana">
	</div>
	<div class="form-group">
		<label>Deskripsi Bencana</label><br>
		<input type="area" name="desk_bencana" class="form-control" placeholder="desk_bencana">
	</div>
	<div class="form-group">
		<input type="submit" name="simpan" class="btn btn-primary" value="Simpan">
	</div>
</form>