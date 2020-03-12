<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Mwarga');
		$this->load->model('Mkegiatan');

		if ($this->session->userdata('login') != "berhasil") {
			$this->session->set_flashdata('notif', 'Silahkan login terlebih dahulu');
			$this->session->set_flashdata('type', 'error');
			redirect('syslogin','refresh');
		}
	}

	public function index(){
		$data['title']		= "Dashboard - Data Simarte";
		$data['subtitle']	= "Dashboard";
		$data['dashboard']	= "active";
		$data['content']	= "dashboard";
		$data['rt1']		= $this->Mwarga->readByRt(1)->num_rows();
		$data['rt2']		= $this->Mwarga->readByRt(2)->num_rows();
		$data['rt3']		= $this->Mwarga->readByRt(3)->num_rows();
		$data['rt4']		= $this->Mwarga->readByRt(4)->num_rows();
		$data['kegiatan']	= $this->Mkegiatan->read()->num_rows();

		$this->load->view('sysadmin/index', $data);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/sysadmin/Dashboard.php */