<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Syslogin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Madmin');
	}

	public function index(){

		$data['title']		= "Login Simarte - ADMIN";
		$this->load->view('login', $data);
		
	}

	public function auth(){
		$username	= $this->input->post("no_telepon");
		$pass		= $this->input->post("pass");
		$ref		= $this->input->post("ref");
		$auth		= $this->Madmin->auth($username);

		if (empty($ref)) {
			redirect('','refresh');
		}else{
			if ($auth->num_rows() == 1) {
				foreach ($auth->result() as $row) {
					$pss = $row->password;
					$aktif = $row->aktif;
				}
				if ($aktif == 1) {
					if (password_verify($pass, $pss)) {
						foreach ($auth->result() as $key) {
							$data_session = array(
								'id_admin'			=> $key->id_admin,
								'nama_admin'		=> $key->nama_lengkap,
								'rt'				=> $key->id_rt,
								'login'				=> "berhasil"
							);						
						}
						$data_last_login = array(
							'login'	=> date("Y-m-d H:i:s")
						);
						$this->Madmin->update($data_last_login, $key->id_admin);
						$this->session->set_userdata($data_session);
						redirect('sysadmin','refresh');
						// if ($key->level == "administrator") {
						// 	redirect('admin','refresh');
						// }elseif($key->level == "penatausahaan"){
						// 	redirect('penatausahaan','refresh');
						// }elseif ($key->level == "anggaran") {
						// 	redirect('anggaran','refresh');
						// }elseif ($key->level == "akuntansi") {
						// 	redirect('akuntansi','refresh');
						// }
					}else{
						$this->session->set_flashdata('notif', 'Nomor Hp & Kata sandi tidak cocok. Silahkan coba lagi.');
						$this->session->set_flashdata('type', 'error');
						redirect('syslogin','refresh');
					}
				}else{
					$this->session->set_flashdata('notif', 'Akun anda telah dinonaktifkan. Silahkan hubungi administrator');
					$this->session->set_flashdata('type', 'error');
					redirect('syslogin','refresh');
				}
			}else{
				$this->session->set_flashdata('notif', 'Nomor Hp & Kata sandi tidak cocok. Silahkan coba lagi.');
				$this->session->set_flashdata('type', 'error');
				redirect('syslogin','refresh');
			}
		}
	}

	public function logout(){
		$data_session = array(
			'id_admin',
			'nama_admin',
			'rt',
			'login'
		);
		$this->session->unset_userdata($data_session);
		redirect('syslogin','refresh');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */