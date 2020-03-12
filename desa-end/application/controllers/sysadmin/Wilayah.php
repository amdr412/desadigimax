<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wilayah extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Mwilayah');

		if ($this->session->userdata('login') != "berhasil") {
			$this->session->set_flashdata('notif', 'Silahkan login terlebih dahulu');
			$this->session->set_flashdata('type', 'error');
			redirect('syslogin','refresh');
		}
	}

	public function index(){
		$data['title']		= "Wilayah - Data Simarte";
		$data['subtitle']	= "Data Wilayah";
		$data['b1']			= "Wilayah";
		$data['b1a']		= "#";
		$data['b2']			= "Data Wilayah";
		$data['b2a']		= "#";
		$data['jumlah']		= 2;
		$data['telepon']	= "active";
		$data['dsurat']		= "active";
		$data['content']	= "data-wilayah";
		$data['data']		= $this->Mwilayah->read()->result();

		$this->load->view('sysadmin/index', $data);
	}

	public function insert(){
		$this->Mwilayah->insert($this->input->post());
		$this->session->set_flashdata('notif', 'Data wilayah berhasil ditambah');
		$this->session->set_flashdata('type', 'success');
		redirect('sysadmin/wilayah','refresh');
	}

	public function update(){
		$this->Mwilayah->update($this->input->post(), $this->input->post('id_wilayah'));
		$this->session->set_flashdata('notif', 'Data wilayah berhasil disimpan');
		$this->session->set_flashdata('type', 'success');
		redirect('sysadmin/wilayah','refresh');
	}

	public function delete($id_wilayah){
		$this->Mwilayah->delete($id_wilayah);
		$this->session->set_flashdata('notif', 'Data wilayah berhasil dihapus');
		$this->session->set_flashdata('type', 'success');
		redirect('sysadmin/wilayah','refresh');
	}


}

/* End of file Wilayah.php */
/* Location: ./application/controllers/sysadmin/Wilayah.php */