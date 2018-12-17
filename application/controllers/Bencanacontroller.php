<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bencanacontroller extends CI_Controller {

		public function indexbencana(){
		$data = array(
			//'title' => 'Relawan',
			'title_level1' => 'List Bencana',
			'title_level2' =>'',
			'bencana' => $this->Model->getListBencana(),
			'konten' => 'administrator/bencana/v_bencana',
			
		);
		$this->load->view('administrator/template',$data);
		}
		public function Delete2($id_bencana){
		$this->Model->hapusdata2('bencana', $id_bencana);
		redirect('Bencanacontroller/indexbencana');
		}

		public function tambahbencana1(){
		$data = array(
			//'title' => 'Relawan',
			'title_level1' => 'List Bencana',
			'title_level2' =>'Tambah List Bencana',
			'konten' => 'administrator/bencana/tambah_bencana',
			
		);
		$this->load->view('administrator/template',$data);
		}
		

		public function form_edit2($id_bencana){
		$where = array('id_bencana' => $id_bencana);
		$data['bencana'] = $this->Model->editData2($where, 'bencana')->result();
		$this->load->view('administrator/bencana/edit_bencana',$data);
		}

		public function updatebencana(){
		$id_bencana = $this->input->post('id_bencana');
      	$nama_bencana = $this->input->post('nama_bencana');
	    $lokasi_bencana = $this->input->post('lokasi_bencana');
	    $waktu_bencana = $this->input->post('waktu_bencana');
	    $desk_bencana = $this->input->post('desk_bencana');
			
	     $data = array(
      	'id_bencana' => $id_bencana,
      	'nama_bencana' => $nama_bencana,
      	'lokasi_bencana' => $lokasi_bencana,
      	'waktu_bencana' => $waktu_bencana,
      	'desk_bencana' => $desk_bencana,
      	);

    	$where = array('id_bencana' => $id_bencana);

    	$this->Model->update_data2($where, $data, 'bencana');
    	redirect('Bencanacontroller/indexbencana');
		}

		public function simpanbencana(){
		$id_bencana = $_POST['id_bencana'];
      	$nama_bencana = $_POST['nama_bencana'];
	    $lokasi_bencana = $_POST['lokasi_bencana'];
	    $waktu_bencana = $_POST['waktu_bencana'];
	    $desk_bencana = $_POST['desk_bencana'];
	      
	    $data = array(
      	'id_bencana' => $id_bencana,
      	'nama_bencana' => $nama_bencana,
      	'lokasi_bencana' => $lokasi_bencana,
      	'waktu_bencana' => $waktu_bencana,
      	'desk_bencana' => $desk_bencana
      	);

    	$tambahdt = $this->Model->tambahdata('bencana', $data);
    	if($tambahdt > 0){
    	redirect('Bencanacontroller/indexbencana');
    	}else{
    	echo "Gagal disimpan";
    	}

	

		}
	}
?>
