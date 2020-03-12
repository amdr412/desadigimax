<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Mwarga');
		$this->load->model('Mkegiatan');
		$this->load->model('MpenarikanDana');
	}

	public function index(){
		$data['title']		= "Data Simarte - Beranda";
		$data['content']	= "beranda";
		$data['subtitle']	= "Data Warga";
		$data['rt1']		= $this->Mwarga->readByRt(1)->num_rows();
		$data['rt2']		= $this->Mwarga->readByRt(2)->num_rows();
		$data['rt3']		= $this->Mwarga->readByRt(3)->num_rows();
		$data['rt4']		= $this->Mwarga->readByRt(4)->num_rows();
		$data['kegiatan']	= $this->Mkegiatan->read()->num_rows();
		$data['dana']		= $this->MpenarikanDana->readByKegiatan()->result();

		$this->load->view('home/index', $data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home/Home.php */