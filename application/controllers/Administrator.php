<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->ceklogin();
	}

	private function ceklogin()
	{
		$id = $this->session->userdata('id');
		$status = $this->session->userdata('status');
		if ($id == null OR $status != 'ok') {
			redirect("auth");
		}
	}

	public function index(){
		$data = array(
			//'title' => 'Relawan',
			'title_level1' => 'Data Relawan',
			'title_level2' =>'',
			'relawan' => $this->Model->getUsers(),
			'konten' => 'administrator/users/v_users',
			
		);
		$this->load->view('administrator/template',$data);
	}

	public function tambah(){
		$data = array(
			//'title' => 'Relawan',
			'title_level1' => 'Data Relawan',
			'title_level2' =>'Tambah User',
			'konten' => 'administrator/users/tambah_user',
			
		);
		$this->load->view('administrator/template',$data);
	}


	public function form_edit1($id){
		$where = array('id' => $id);
		$data['relawan'] = $this->Model->editData1($where, 'relawan')->result();
		$this->load->view('administrator/users/edit_user',$data);
	}

	public function update1()
	{
		$id = $this->input->post('id');
      	$nama_lengkap = $this->input->post('nama_lengkap');
	      $nik = $this->input->post('nik');
	      $email = $this->input->post('email');
	      $password = $this->input->post('password');
	      $asal = $this->input->post('asal');
	      $tempat = $this->input->post('tempat');
	      $tgl_lahir = $this->input->post('tgl_lahir');
	      $alamat = $this->input->post('alamat');
	      $keahlian = $this->input->post('keahlian');
	      $desk_keahlian = $this->input->post('desk_keahlian');
			
	      $data = array(
      'id' => $id,
      'nama_lengkap' => $nama_lengkap,
      'nik' => $nik,
      'email' => $email,
      'password' => $password,
      'asal' => $asal,
      'tempat'=>$tempat,
      'tgl_lahir'=>$tgl_lahir,
      'alamat'=>$alamat,
      'keahlian'=>$keahlian,
      'desk_keahlian'=>$desk_keahlian
      );

    $where = array('id' => $id);

    $this->Model->update_data1($where, $data, 'relawan');
    redirect('Administrator/index');
	}

	public function simpan()
	{
      	$nama_lengkap = $_POST['nama_lengkap'];
	      $nik = $_POST['nik'];
	      $email = $_POST['email'];
	      $password = $_POST['password'];
	      $asal = $_POST['asal'];
	      $tempat = $_POST['tempat'];
	      $tgl_lahir = $_POST['tgl_lahir'];
	      $alamat = $_POST['alamat'];
	      $keahlian = $_POST['keahlian'];
	      $desk_keahlian = $_POST['desk_keahlian'];
			
	      $data = array(
      'id' => $id,
      'nama_lengkap' => $nama_lengkap,
      'nik' => $nik,
      'email' => $email,
      'password' => $password,
      'asal' => $asal,
      'tempat'=>$tempat,
      'tgl_lahir'=>$tgl_lahir,
      'alamat'=>$alamat,
      'keahlian'=>$keahlian,
      'desk_keahlian'=>$desk_keahlian
      );

    $tambahdt = $this->Model->tambahdata('relawan', $data);
    if($tambahdt > 0){
    	redirect('Administrator/index');
    }else{
    	echo "Gagal disimpan";
    }
	}

	public function Delete1($id){
		$this->Model->hapusdata1('relawan', $id);
		redirect('Administrator/index');
	}
}
?>