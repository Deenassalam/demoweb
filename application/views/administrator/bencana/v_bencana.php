<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    
    <body>
<table class="table table-bordered">
  <thead>
    <tr style="text-align: center;">
      <th scope="col">ID Bencana</th>
      <th scope="col">Nama Bencana</th>
      <th scope="col">Lokasi Bencana</th>
      <th scope="col">Waktu Bencana</th>
      <th scope="col">Deskripsi Bencana</th>
      <th scope="col">Opsi</th>
      </tr>
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
        <a href="<?php echo base_url('index.php/Bencanacontroller/form_edit2/'.$data['id_bencana']) ?>"class="btn btn-primary">Edit</a> 
          <a href="<?php echo site_url('Bencanacontroller/Delete2/'.$data['id_bencana']) ?>" onclick="return confirm('Yakin mau di hapus?')"
            class="btn btn-danger">Hapus</a>
          
          
          
<!--
            <a href="<?php echo site_url('Bencanacontroller/form_editbencana') ?>"class="btn btn-info" onclick="return confirm('Apakah Anda mau mengirim notofikasi ini kepada relawan?')"> send notification </a>
         
          
          <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close"> Kirim Notifikasi</a>
    <strong>Success!</strong> Notofikasi berhasil dikirime Kepada relawan.
  </div>
          
          
-->
          
          
          
      </td>
    </tr>
        <?php } ?>


</table>
