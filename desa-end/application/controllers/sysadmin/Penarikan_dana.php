<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penarikan_dana extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('MpenarikanDana');
		$this->load->model('Mwarga');
		$this->load->model('Mrt');

		if ($this->session->userdata('login') != "berhasil") {
			$this->session->set_flashdata('notif', 'Silahkan login terlebih dahulu');
			$this->session->set_flashdata('type', 'error');
			redirect('syslogin','refresh');
		}
	}

	public function index(){
		$data['title']		= "Penarikan Dana - Data Simarte";
		$data['subtitle']	= "Data Penarikan Dana";
		$data['b1']			= "Penarikan Dana";
		$data['b1a']		= "#";
		$data['b2']			= "Data Penarikan Dana";
		$data['b2a']		= "#";
		$data['jumlah']		= 2;
		$data['penarikan_dana']	= "active";
		$data['dpenarikan_dana']	= "active";
		$data['content']	= "data-penarikan-dana";
		$data['data']		= $this->MpenarikanDana->readByKegiatan()->result();

		$this->load->view('sysadmin/index', $data);
	}

	public function input(){
		$rt = $this->input->get('rt');

		$data['title']		= "Input Penarikan Dana - Bubak Smart Dusun";
		$data['subtitle']	= "Input Penarikan Dana";
		$data['b1']			= "Input Penarikan Dana";
		$data['b1a']		= "#";
		$data['b2']			= "Data Penarikan Dana";
		$data['b2a']		= "#";
		$data['b1a']		= "#";
		$data['b3']			= "Input Penarikan Dana";
		$data['b3a']		= "#";
		$data['jumlah']		= 3;
		$data['penarikan_dana']	= "active";
		$data['dpenarikan_dana']	= "active";
		$data['content']	= "input-penarikan-dana";
		$data['data_rt']		= $this->Mrt->read()->result();
		if (empty($rt)) {
			$data['data']		= array();
		}else{
			$data['data']		= $this->Mwarga->readByRt($rt)->result();
		}

		$this->load->view('sysadmin/index', $data);
	}

	public function save(){
		$id_rt = $this->input->post('id_rt');
		$id_kegiatan = $this->input->post('id_kegiatan');

		$dataw = $this->Mwarga->readByRt($id_rt)->result();

		foreach ($dataw as $key) {
			$data = array(
				'id_kegiatan'	=> $id_kegiatan,
				'id_warga'		=> $key->id_warga,
				'jumlah'		=> $this->input->post('jumlah'.$key->id_warga),
				'tanggal'		=> date("Y-m-d H:i:s"),
				'id_admin'		=> 1
			);
			$this->MpenarikanDana->insert($data);
		}

		$this->session->set_flashdata('notif', 'Data RT '.$id_rt.' berhasil disimpan');
		$this->session->set_flashdata('type', 'success');
		redirect('sysadmin/penarikan-dana','refresh');
	}

	public function rinci(){
		$id = $this->input->get('id_kegiatan');
		$data['title']		= "Penarikan Dana - Data Simarte";
		$data['subtitle']	= "Data Penarikan Dana";
		$data['b1']			= "Penarikan Dana";
		$data['b1a']		= "#";
		$data['b2']			= "Data Penarikan Dana";
		$data['b2a']		= base_url('sysadmin/penarikan-dana');
		$data['b3']			= "Rincian Penarikan Dana";
		$data['b3a']		= "#";
		$data['jumlah']		= 3;
		$data['penarikan_dana']	= "active";
		$data['dpenarikan_dana']	= "active";
		$data['content']	= "data-rinci-penarikan-dana";
		$data['data']		= $this->MpenarikanDana->readByRt($id)->result();

		$this->load->view('sysadmin/index', $data);
	}

	public function rinci_warga(){
		$id_kegiatan = $this->input->get('id_kegiatan');
		$id_rt = $this->input->get('id_rt');

		$data['title']		= "Penarikan Dana - Data Simarte";
		$data['subtitle']	= "Data Penarikan Dana";
		$data['b1']			= "Penarikan Dana";
		$data['b1a']		= "#";
		$data['b2']			= "Data Penarikan Dana Per RT";
		$data['b2a']		= base_url('sysadmin/penarikan-dana');
		$data['b3']			= "Rincian Penarikan Dana";
		$data['b3a']		= base_url('sysadmin/penarikan-dana/rinci?id_kegiatan='.$id_kegiatan);
		$data['b4']			= "Rincian Penarikan Dana Per Warga";
		$data['b4a']		= "#";
		$data['jumlah']		= 4;
		$data['penarikan_dana']	= "active";
		$data['dpenarikan_dana']	= "active";
		$data['content']	= "data-rinci-penarikan-dana-warga";
		$data['data']		= $this->MpenarikanDana->readByWarga($id_kegiatan, $id_rt)->result();

		$this->load->view('sysadmin/index', $data);
	}

	public function delete(){
		$id_kegiatan = $this->input->get('id_kegiatan');
		$this->MpenarikanDana->delete($id_kegiatan);
		$this->session->set_flashdata('notif', 'Data penarikan dana berhasil dihapus');
		$this->session->set_flashdata('type', 'success');
		redirect('sysadmin/penarikan-dana/rinci?id_kegiatan='.$id_kegiatan,'refresh');
	}


}

/* End of file Penarikan_dana.php */
/* Location: ./application/controllers/sysadmin/Penarikan_dana.php */