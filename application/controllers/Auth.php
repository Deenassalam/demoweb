<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$this->load->view('Menu');
	}
	public function index1()
	{
		$this->load->view('auth/login');
	}
	public function index2()
	{
		$this->load->view('kalender');
	}

	public function index3()
	{
		$this->load->view('mailbox/mailbox');
	}

	public function index4()
	{
		$this->load->view('mailbox/compose');
	}

	public function insertdata(){ 
      $this->load->view('Form_daftar');
    }

	public function register()
	{
		$this->load->view('auth/register');
	}

	public function pengaturan_profil(){
		$data = array(
			//'title' => 'Relawan',
			'title_level1' => 'Pengaturan Profil',
			'title_level2' =>'',
			'bencana' => $this->Model->getProfil(),
			'konten' => 'administrator/pengaturan/profilbnpb',
			
		);
		$this->load->view('administrator/template',$data);
		}

	public function reg_action()
	{
		$nama_lengkap = $_POST['nama_lengkap'];
	    $nik = $_POST['nik'];
	    $email = $_POST['email'];
	    $password = $this->input->post('password');
		$repassword = $this->input->post('repassword');
	    $asal = $_POST['asal'];
	    $tempat = $_POST['tempat'];
	    $tgl_lahir = $_POST['tgl_lahir'];
	    $alamat = $_POST['alamat'];
	    $keahlian = $_POST['keahlian'];
	    $desk_keahlian = $_POST['desk_keahlian'];
		

		if ($password != $repassword) {
			echo "Password tidak sama";
		}else{

			$data = array(
				'nama_lengkap' => $nama_lengkap,
      			'nik' => $nik,
			    'email' => $email,
				'password'=>md5($password),
			    'asal' => $asal,
			    'tempat'=>$tempat,
			    'tgl_lahir'=>$tgl_lahir,
			    'alamat'=>$alamat,
			    'keahlian'=>$keahlian,
			    'desk_keahlian'=>$desk_keahlian
			);

				$result=$this->Model->simpan('relawan',$data);
			if ($result > 0) {
				echo "Data User berhasil disimpan";
			}else{
				echo "Data User gagal disimpan";
			}
		}
	}

	public function login_action()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$check_login_r = $this->Model->getLogin($email, $password)->num_rows();
		$check_login_bnpb=$this->Model->getLoginbnpb($email,$password)->num_rows();
		if ($check_login_r > 0) {
			$relawan = $this->Model->getLogin($email, $password)->row_array();
			$sessions = array(
				'id' => $relawan['id'],
				'namarelawan' => $relawan['nama_lengkap'],
				'email' => $relawan['email'],
				'status'=>'ok'
			);
			$this->session->set_userdata($sessions);
			redirect('Relawancontroller/indexkegrelawan');
		}else if($check_login_bnpb > 0){
			$bnpb = $this->Model->getLoginbnpb($email, $password)->row_array();
				$sessions = array(
				'id' => $bnpb['id_bnpb'],
				'namabnpb' => $bnpb['nama_bnpb'],
				'email' => $bnpb['email_bnpb'],
				'status'=>'ok'
			);
			$this->session->set_userdata($sessions);
			redirect('administrator');	
		
		}else{
			echo "<scrip>alert('Login Gagal')";
			$this->index();
		}
	}

	public function logout_action()
	{
		$this->session->sess_destroy();
		redirect('auth');
	}


}
