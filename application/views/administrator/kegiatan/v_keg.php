
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
        <a href="<?php echo base_url('index.php/Kegiatancontroller/form_edit3/'.$data['id_k']) ?>"class="btn btn-primary">Edit</a> 
          <a href="<?php echo site_url('Kegiatancontroller/Delete3/'.$data['id_k']) ?>" onclick="return confirm('Yakin mau di hapus?')"
            class="btn btn-danger">Hapus</a>
            <a href="<?php echo site_url('Kegiatancontroller/form_notif') ?>"class="btn btn-info" onclick="return confirm('Apakah Anda ingin Mengirimkan pesan ini?')"> send notification </a>
      </td>
    </tr>
        <?php } ?>


</table>
