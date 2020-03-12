<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Mkegiatan');

		if ($this->session->userdata('login') != "berhasil") {
			$this->session->set_flashdata('notif', 'Silahkan login terlebih dahulu');
			$this->session->set_flashdata('type', 'error');
			redirect('syslogin','refresh');
		}
	}

	public function index(){
		$data['title']		= "Kegiatan - Data Simarte";
		$data['subtitle']	= "Data Kegiatan";
		$data['b1']			= "Kegiatan";
		$data['b1a']		= "#";
		$data['b2']			= "Data Kegiatan";
		$data['b2a']		= "#";
		$data['jumlah']		= 2;
		$data['kegiatan']	= "active";
		$data['dkegiatan']	= "active";
		$data['content']	= "data-kegiatan";
		$data['data']		= $this->Mkegiatan->read()->result();

		$this->load->view('sysadmin/index', $data);
	}

	public function insert(){
		$this->Mkegiatan->insert($this->input->post());
		$this->session->set_flashdata('notif', 'Data Kegiatan berhasil ditambahkan');
		$this->session->set_flashdata('type', 'success');
		redirect('sysadmin/kegiatan','refresh');
	}

	public function update(){
		$this->Mkegiatan->update($this->input->post(), $this->input->post('id_kegiatan'));
		$this->session->set_flashdata('notif', 'Data Kegiatan berhasil disimpan');
		$this->session->set_flashdata('type', 'success');
		redirect('sysadmin/kegiatan','refresh');
	}

	public function delete($id){
		$this->Mkegiatan->delete($id);
		$this->session->set_flashdata('notif', 'Data Kegiatan berhasil dihapus');
		$this->session->set_flashdata('type', 'success');
		redirect('sysadmin/kegiatan','refresh');
	}

}

/* End of file Kegiatan.php */
/* Location: ./application/controllers/sysadmin/Kegiatan.php */