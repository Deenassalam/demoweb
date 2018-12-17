<form action="<?php echo base_url() ?>index.php/administrator/simpan" method="post">
	<!-- <div class="form-group">
		<label>ID</label><br>
		<input type="text" name="id" class="form-control" placeholder="ID">
	</div> -->
	<div class="form-group">
		<label>Nama Lengkap</label><br>
		<input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap">
	</div>
	<div class="form-group">
		<label>NIK</label><br>
		<input type="text" name="nik" class="form-control" placeholder="nik">
	</div>
	<div class="form-group">
		<label>Email</label><br>
		<input type="email" name="email" class="form-control" placeholder="email">
	</div>
	<div class="form-group">
		<label>Password</label><br>
		<input type="password" name="password" class="form-control" placeholder="password">
	</div>
	<div class="form-group">
		<label>Re-type Password</label><br>
		<input type="password" name="repassword" class="form-control" placeholder="Re-type Password">
	</div>
	<div class="form-group">
		<label>Alamat Asal</label><br>
		<input type="area" name="asal" class="form-control" placeholder="Alamat Asal">
	</div>
	<div class="form-group">
		<label>Tempat Lahir</label><br>
		<input type="text" name="tempat" class="form-control" placeholder="Tempat Lahir">
	</div>
	<div class="form-group">
		<label>Tanggal Lahir</label><br>
		<input type="date" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir">
	</div>
	<div class="form-group">
		<label>Kota Tinggal</label><br>
		<input type="text" name="alamat" class="form-control" placeholder="Kota Tinggal">
	</div>
	<div class="form-group">
		<label>Keahlian</label><br>
		<input type="text" name="keahlian" class="form-control" placeholder="Keahlian">
	</div>
	<div class="form-group">
		<label>Deskripsi Keahlian</label><br>
		<input type="area" name="desk_keahlian" class="form-control" placeholder="Deskripsi Keahlian">
	</div>
	<div class="form-group">
		<input type="submit" name="simpan" class="btn btn-primary" value="Simpan">
	</div>
</form>