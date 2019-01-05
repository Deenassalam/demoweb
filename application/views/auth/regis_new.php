<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Form Registrasi Relawan</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <!-- multistep form -->
<form id="msform">
  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active">Informasi data diri</li>
    <li>Informasi Alamat</li>
    <li>Akun Email</li>
  </ul>
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Ayo daftar sebagai relawan^^</h2>
    
    <input type="text" name="Nama Lengkap" placeholder="Nama Lengkap" />
    <input type="int" name="NIK" placeholder="NIK" />
	<input type="text" name="Tempat Lahir" placeholder="Tempat Lahir" />
	<input type="date" name="Tanggal Lahir" placeholder="Tanggal Lahir" />
	<input type="int" name="No HP/Telp" placeholder="No HP/Telp" />
	<input type="text" name="Keahlian" placeholder="Keahlian" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Informasi Alamat</h2>
    <textarea name="Alamat Lengkap" placeholder="Alamat Lengkap"></textarea>
    <input type="text" name="Provinsi" placeholder="Provinsi" />
    <input type="text" name="Kota/Kabupaten" placeholder="Kota/Kabupaten" />
	<input type="text" name="Kecamatan" placeholder="Kecamatan" />
	<input type="text" name="Kode Pos" placeholder="Kode Pos" />
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Akun Email</h2>
    <input type="email" name="Email" placeholder="Email" />
    <input type="password" name="Password" placeholder="Password" />
    <input type="password" name="Password" placeholder="Password" />
    
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="submit" name="submit" class="submit action-button" value="Submit" />
  </fieldset>
</form>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>
