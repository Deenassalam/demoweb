<table class="table table-bordered">
  <thead>
    <tr style="text-align: center;">
      <th scope="col">ID Bencana</th>
      <th scope="col">Nama Bencana</th>
      <th scope="col">Lokasi Bencana</th>
      <th scope="col">Waktu Bencana</th>
      <th scope="col">Deskripsi Bencana</th>
      </tr>
    </thead>
  </thead>

<?php
    $id_bencana =1; 
    foreach ($bencana->result_array() as $data)
    {?>
    <tr style="text-align: center;">
      <td><?php echo $id_bencana++ ?></td>
      <td><?php echo $data['nama_bencana'] ?></td>
      <td><?php echo $data['lokasi_bencana'] ?></td>
      <td><?php echo $data['waktu_bencana'] ?></td> 
      <td><?php echo $data['desk_bencana'] ?></td>
      <td>
        <!-- <a href="<?php echo base_url('index.php/Bencanacontroller/form_edit2/'.$data['id_bencana']) ?>"class="btn btn-primary">Edit</a> 
          <a href="<?php echo site_url('Bencanacontroller/Delete2/'.$data['id_bencana']) ?>" onclick="return confirm('Yakin mau di hapus?')"
            class="btn btn-danger">Hapus</a>
            <a href="<?php echo site_url('Bencanacontroller/form_editbencana') ?>"class="btn btn-info"> send notification </a> -->
      </td>
    </tr>
        <?php } ?>


</table>
