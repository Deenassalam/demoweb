<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatancontroller extends CI_Controller {

		public function indexkeg(){
		$data = array(
			//'title' => 'Relawan',
			'title_level1' => 'List kegiatan',
			'title_level2' =>'',
			'kegiatan' => $this->Model->getListKeg(),
			'konten' => 'administrator/kegiatan/v_keg',
			
		);
		$this->load->view('administrator/template',$data);
		}

		public function Delete3($id_k){
		$this->Model->hapusdata3('kegiatan', $id_k);
		redirect('Kegiatancontroller/indexkeg');
		}
		public function form_notif(){
			$this->load->view('notifikasi');
		}

		public function tambahkeg(){
		$data = array(
			//'title' => 'Relawan',
			'title_level1' => 'List kegiatan',
			'title_level2' =>'Tambah List kegiatan',
			'konten' => 'administrator/kegiatan/tambah_keg',
			
		);
		$this->load->view('administrator/template',$data);
		}

		public function form_edit3($id_k){
		$where = array('id_k' => $id_k);
		$data['kegiatan'] = $this->Model->editData3($where, 'kegiatan')->result();
		$this->load->view('administrator/kegiatan/edit_keg',$data);
		}

		public function updatekeg(){
		$id_k = $this->input->post('id_k');
      	$nm_keg = $this->input->post('nm_keg');
	    $lokasi_keg = $this->input->post('lokasi_keg');
	    $daerah_keg = $this->input->post('daerah_keg');
	    $waktu_keg = $this->input->post('waktu_keg');
			
	     $data = array(
      	'id_k' => $id_k,
      	'nm_keg' => $nm_keg,
      	'lokasi_keg' => $lokasi_keg,
      	'daerah_keg' => $daerah_keg,
      	'waktu_keg' => $waktu_keg,
      	);

    	$where = array('id_k' => $id_k);

    	$this->Model->update_data3($where, $data, 'kegiatan');
    	redirect('Kegiatancontroller/indexkeg');
		}

		public function simpankeg(){
		$id_k = $_POST['id_k'];
      	$nm_keg = $_POST['nm_keg'];
	    $lokasi_keg = $_POST['lokasi_keg'];
	    $daerah_keg = $_POST['daerah_keg'];
	    $waktu_keg = $_POST['waktu_keg'];
	      
	    $data = array(
      	'id_k' => $id_k,
      	'nm_keg' => $nm_keg,
      	'lokasi_keg' => $lokasi_keg,
      	'daerah_keg' => $daerah_keg,
      	'waktu_keg' => $waktu_keg
      	);

    	$tambahdt = $this->Model->tambahdata('kegiatan', $data);
    	if($tambahdt > 0){
    	redirect('Kegiatancontroller/indexkeg');
    	}else{
    	echo "Gagal disimpan";
    	}

	

		}
	}
?>
