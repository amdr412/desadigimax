<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Msurat');

		if ($this->session->userdata('login') != "berhasil") {
			$this->session->set_flashdata('notif', 'Silahkan login terlebih dahulu');
			$this->session->set_flashdata('type', 'error');
			redirect('syslogin','refresh');
		}
	}

	public function index(){
		$data['title']		= "Surat - Data Simarte";
		$data['subtitle']	= "Data Surat";
		$data['b1']			= "Surat";
		$data['b1a']		= "#";
		$data['b2']			= "Data Surat";
		$data['b2a']		= "#";
		$data['jumlah']		= 2;
		$data['telepon']	= "active";
		$data['dsurat']		= "active";
		$data['content']	= "data-surat";
		$data['data']		= $this->Msurat->read()->result();

		$this->load->view('sysadmin/index', $data);
	}

	public function insert(){
		$this->Msurat->insert($this->input->post());
		$this->session->set_flashdata('notif', 'Data telepon berhasil ditambah');
		$this->session->set_flashdata('type', 'success');
		redirect('sysadmin/surat','refresh');
	}

	public function update(){
		$this->Msurat->update($this->input->post(), $this->input->post('id_surat'));
		$this->session->set_flashdata('notif', 'Data telepon berhasil disimpan');
		$this->session->set_flashdata('type', 'success');
		redirect('sysadmin/surat','refresh');
	}

	public function delete($id_surat){
		$this->Msurat->delete($id_surat);
		$this->session->set_flashdata('notif', 'Data telepon berhasil dihapus');
		$this->session->set_flashdata('type', 'success');
		redirect('sysadmin/surat','refresh');
	}


}

/* End of file Surat.php */
/* Location: ./application/controllers/sysadmin/Surat.php */