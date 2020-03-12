<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Telepon extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Mtelepon');

		if ($this->session->userdata('login') != "berhasil") {
			$this->session->set_flashdata('notif', 'Silahkan login terlebih dahulu');
			$this->session->set_flashdata('type', 'error');
			redirect('syslogin','refresh');
		}
	}

	public function index(){
		$data['title']		= "Telepon - Data Simarte";
		$data['subtitle']	= "Data Telepon";
		$data['b1']			= "Telepon";
		$data['b1a']		= "#";
		$data['b2']			= "Data Telepon";
		$data['b2a']		= "#";
		$data['jumlah']		= 2;
		$data['telepon']	= "active";
		$data['dtelepon']	= "active";
		$data['content']	= "data-telepon";
		$data['data']		= $this->Mtelepon->read()->result();

		$this->load->view('sysadmin/index', $data);
	}

	public function insert(){
		$this->Mtelepon->insert($this->input->post());
		$this->session->set_flashdata('notif', 'Data telepon berhasil ditambah');
		$this->session->set_flashdata('type', 'success');
		redirect('sysadmin/telepon','refresh');
	}

	public function update(){
		$this->Mtelepon->update($this->input->post(), $this->input->post('id_telepon'));
		$this->session->set_flashdata('notif', 'Data telepon berhasil disimpan');
		$this->session->set_flashdata('type', 'success');
		redirect('sysadmin/telepon','refresh');
	}

	public function delete($id){
		$this->Mtelepon->delete($id);
		$this->session->set_flashdata('notif', 'Data telepon berhasil dihapus');
		$this->session->set_flashdata('type', 'success');
		redirect('sysadmin/telepon','refresh');
	}

}

/* End of file Telepon.php */
/* Location: ./application/controllers/sysadmin/Telepon.php */