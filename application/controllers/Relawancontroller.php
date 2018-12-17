<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Relawancontroller extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->ceklogin();
	}

	public function ceklogin()
	{
		$id = $this->session->userdata('id');
		$status = $this->session->userdata('status');
		if ($id == null OR $status != 'ok') {
			redirect("auth");
		}
	}

	public function indexkalender()
	{
		$this->load->view('Kalender_relawan');
	}

	public function indexbencanarelawan(){
		$data = array(
			//'title' => 'Relawan',
			'title_level1' => 'List Bencana',
			'title_level2' =>'',
			'bencana' => $this->Model->getListBencana(),
			'konten' => 'relawan/bencana_r/bencana_relawan',
			
		);
		$this->load->view('relawan/templaterelawan',$data);
		}

	public function indexkegrelawan(){
		$data = array(
			//'title' => 'Relawan',
			'title_level1' => 'List kegiatan',
			'title_level2' =>'',
			'kegiatan' => $this->Model->getListKeg(),
			'konten' => 'relawan/kegiatan_r/kegiatan_relawan',
			
		);
		$this->load->view('relawan/templaterelawan',$data);
		}


		public function pengaturan_p(){
		$data = array(
			//'title' => 'Relawan',
			'title_level1' => 'Pengaturan Profil',
			'title_level2' =>'',
			'bencana' => $this->Model->getProfil(),
			'konten' => 'relawan/pengaturan/profil',
			
		);
		$this->load->view('relawan/templaterelawan',$data);
		}
		
	// public function indexrelawan(){
	// 	$data = array(
	// 		//'title' => 'Relawan',
	// 		'title_level1' => 'Data Relawan',
	// 		'title_level2' =>'',
	// 		'relawan' => $this->Model->getUsers(),
	// 		'konten' => 'relawan/kegiatan_r/kegiatan_relawan',
			
	// 	);
	// 	$this->load->view('relawan/templaterelawan',$data);
	// }

	public function logout_actionrelawan()
	{
		$this->session->sess_destroy();
		redirect('Auth/index');
	}

	public function indexmailbox()
	{
		$this->load->view('mailbox_relawan/mailboxrelawan');
	}

}