<html>
<body>
  <p id="demo"></p>

<script>
function myFunction() {
  var txt;
  if (confirm("Apakah anda ingin mengikuti kegiatan ini?")) {
    txt = "You pressed iyes!";
  } else {
    txt = "You pressed noo!";
  }
  document.getElementById("demo").innerHTML = txt;
}
</script>

<table class="table table-bordered">
  <thead>
    <tr style="text-align: center;">
      <th scope="col">ID Kegiatan</th>
      <th scope="col">Nama Kegiatan</th>
      <th scope="col">Lokasi Kegiatan</th>
      <th scope="col">Daerah Kegiatan</th>
      <th scope="col">Waktu Kegiatan</th>
      <th scope="col">Opsi</th>
      </tr>
    </thead>
  </thead>

<?php
    $id_k =1; 
    foreach ($kegiatan->result_array() as $data)
    {?>
    <tr style="text-align: center;">
      <td><?php echo $id_k++ ?></td>
      <td><?php echo $data['nm_keg'] ?></td>
      <td><?php echo $data['lokasi_keg'] ?></td>
      <td><?php echo $data['daerah_keg'] ?></td> 
      <td><?php echo $data['waktu_keg'] ?></td>
      <td>
         <button onclick="myFunction()"class="btn btn-primary">Accept</button>
          <a href="" onclick="return confirm('Yakin mau di hapus?')"class="btn btn-danger">Cancel</a>
    </tr>
        <?php } ?>


</table>
</body>
</html>
