<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Madmin');
		$this->load->model('Mrt');

		if ($this->session->userdata('login') != "berhasil") {
			$this->session->set_flashdata('notif', 'Silahkan login terlebih dahulu');
			$this->session->set_flashdata('type', 'error');
			redirect('syslogin','refresh');
		}
	}

	public function index(){
		$data['title']		= "Admin - Data Simarte";
		$data['subtitle']	= "Data Admin";
		$data['b1']				= "Master Data";
		$data['b1a']			= "#";
		$data['b2']				= "Admin";
		$data['b2a']			= "#";
		$data['jumlah']			= 2;
		$data['master']		= "active";
		$data['admin']			= "active";
		$data['content']	= "data-admin";
		$data['data']		= $this->Madmin->read()->result();
		$data['data_rt']	= $this->Mrt->read()->result();

		$this->load->view('sysadmin/index', $data);
	}

	public function insert(){
		$nama_lengkap = $this->input->post('nama_lengkap');
		$no_telepon = $this->input->post('no_telepon');
		$password = $this->input->post('password');
		$id_rt = $this->input->post('id_rt');

		$data = array(
			'nama_lengkap'		=> $nama_lengkap,
			'no_telepon'		=> $no_telepon,
			'password'			=> password_hash($password, PASSWORD_DEFAULT),
			'id_rt'				=> $id_rt
		);
		$this->Madmin->insert($data);
		$this->session->set_flashdata('notif', 'Data admin berhasil ditambah');
		$this->session->set_flashdata('type', 'success');
		redirect('sysadmin/admin','refresh');
	}

	public function update(){
		$nama_lengkap = $this->input->post('nama_lengkap');
		$no_telepon = $this->input->post('no_telepon');
		$password = $this->input->post('password');
		$id_rt = $this->input->post('id_rt');
		$id_admin = $this->input->post('id_admin');

		$data = array(
			'nama_lengkap'		=> $nama_lengkap,
			'no_telepon'		=> $no_telepon,
			'password'			=> password_hash($password, PASSWORD_DEFAULT),
			'id_rt'				=> $id_rt
		);
		$this->Madmin->update($data, $id_admin);
		$this->session->set_flashdata('notif', 'Data admin berhasil disimpan');
		$this->session->set_flashdata('type', 'success');
		redirect('sysadmin/admin','refresh');
	}

	public function delete($id){
		$this->Madmin->delete($id);
		$this->session->set_flashdata('notif', 'Data admin berhasil dihapus');
		$this->session->set_flashdata('type', 'success');
		redirect('sysadmin/admin','refresh');
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/sysadmin/Admin.php */