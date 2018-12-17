<table class="table table-bordered">
  <thead>
    <tr style="text-align: center;">
      <th scope="col">ID</th>
      <th scope="col">Nama Lengkap</th>
      <th scope="col">Nik</th>
      <th scope="col">Alamat Asal</th>
      <th scope="col">Tempat Lahir</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Kota</th>
      <th scope="col">Keahlian</th>
      <th scope="col">Deskripsi Keahlian</th>
      <th scope="col">Opsi</th>
      </tr>
  </thead>

<?php
    $id =1; 
    foreach ($relawan->result_array() as $data)
    {?>
    <tr style="text-align: center;">
      <td><?php echo $data['id'] ?></td>
      <td><?php echo $data['nama_lengkap'] ?></td>
      <td><?php echo $data['nik'] ?></td>
      <td><?php echo $data['asal'] ?></td> 
      <td><?php echo $data['tempat'] ?></td>
      <td><?php echo $data['tgl_lahir'] ?></td> 
      <td><?php echo $data['alamat'] ?></td>  
      <td><?php echo $data['keahlian'] ?></td> 
      <td><?php echo $data['desk_keahlian'] ?></td> 
      <td>
        <a href="<?php echo base_url('index.php/Administrator/form_edit1/'.$data['id']) ?>"class="btn btn-primary">Edit</a> 
          <a href="<?php echo site_url('Administrator/Delete1/'.$data['id']) ?>" onclick="return confirm('Yakin mau di hapus?')"
            class="btn btn-danger">Hapus</a><br/><br/>
            <a href="<?php echo site_url('Relawan_controller/form_input1') ?>"class="btn btn-info"> send notification </a>
      </td>
    </tr>
        <?php } ?>


</table>