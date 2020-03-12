<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Mberita');

		if ($this->session->userdata('login') != "berhasil") {
			$this->session->set_flashdata('notif', 'Silahkan login terlebih dahulu');
			$this->session->set_flashdata('type', 'error');
			redirect('syslogin','refresh');
		}
	}

	public function index(){
		$data['title']		= "Berita - Data Simarte";
		$data['subtitle']	= "Data Berita";
		$data['b1']			= "Berita";
		$data['b1a']		= "#";
		$data['b2']			= "Data Berita";
		$data['b2a']		= "#";
		$data['jumlah']		= 2;
		$data['berita']		= "active";
		$data['dberita']	= "active";
		$data['content']	= "data-berita";
		$data['data']		= $this->Mberita->read()->result();

		$this->load->view('sysadmin/index', $data);
	}

	public function tambah(){
		$data['title']		= "Tambah Berita - Data Simarte";
		$data['subtitle']	= "Tambah Data Berita";
		$data['b1']			= "Berita";
		$data['b1a']		= "#";
		$data['b2']			= "Data Berita";
		$data['b2a']		= site_url('sysadmin/berita');
		$data['b3']			= "Tambah Berita";
		$data['b3a']		= "#";
		$data['jumlah']		= 3;
		$data['berita']		= "active";
		$data['dberita']	= "active";
		$data['content']	= "tambah-data-berita";

		$this->load->view('sysadmin/index', $data);
	}

	public function edit($id){
		$data['title']		= "Edit Berita - Data Simarte";
		$data['subtitle']	= "Edit Data Berita";
		$data['b1']			= "Berita";
		$data['b1a']		= "#";
		$data['b2']			= "Data Berita";
		$data['b2a']		= site_url('sysadmin/berita');
		$data['b3']			= "Edit Berita";
		$data['b3a']		= "#";
		$data['jumlah']		= 3;
		$data['berita']		= "active";
		$data['dberita']	= "active";
		$data['content']	= "edit-data-berita";
		$data['data']		= $this->Mberita->readById($id)->result();

		$this->load->view('sysadmin/index', $data);
	}

	public function insert(){
		$nm_file = "berita_".time(); //nama file + fungsi time
        $config['upload_path'] = './files/berita/'; //folder untuk meyimpan foto
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '3672';
        $config['max_width'] = '5000';
        $config['max_height'] = '5000';
        $config['file_name'] = $nm_file;
        $this->upload->initialize($config);

        if(isset($_FILES['foto_berita']['name'])){
            if ($this->upload->do_upload('foto_berita')) {
                $data_upload = $this->upload->data();
                $data = array(
                    'id_admin'      => $this->session->userdata('id_admin'),
                    'judul_berita'	=> $this->input->post('judul_berita'),
                    'isi_berita'    => $this->input->post('isi_berita'),
                    'foto_berita'	=> $data_upload['file_name']
                );
            }
        }

		$this->Mberita->insert($data);
		$this->session->set_flashdata('notif', 'Data Berita berhasil ditambahkan');
		$this->session->set_flashdata('type', 'success');
		redirect('sysadmin/berita','refresh');
	}

	public function update(){
		$nm_file = "berita_".time(); //nama file + fungsi time
        $config['upload_path'] = './files/berita/'; //folder untuk meyimpan foto
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '3672';
        $config['max_width'] = '5000';
        $config['max_height'] = '5000';
        $config['file_name'] = $nm_file;
        $this->upload->initialize($config);

        if(isset($_FILES['foto_berita']['name'])){
            if ($this->upload->do_upload('foto_berita')) {
                $data_upload = $this->upload->data();
                $data = array(
                    'id_admin'      => $this->session->userdata('id_admin'),
                    'judul_berita'	=> $this->input->post('judul_berita'),
                    'isi_berita'    => $this->input->post('isi_berita'),
                    'foto_berita'	=> $data_upload['file_name']
                );
                unlink($config['upload_path'].$this->input->post('foto_berita_lama'));
            }else{
            	$data = array(
                    'id_admin'      => $this->session->userdata('id_admin'),
                    'judul_berita'	=> $this->input->post('judul_berita'),
                    'isi_berita'    => $this->input->post('isi_berita')
                );
            }
        }

		$this->Mberita->update($data, $this->input->post('id_berita'));
		$this->session->set_flashdata('notif', 'Data Berita berhasil disimpan');
		$this->session->set_flashdata('type', 'success');
		redirect('sysadmin/berita','refresh');
	}

	public function delete($id){
		$path = './files/berita/';
		unlink($path.$this->input->get('foto_berita'));
		$this->Mberita->delete($id);
		$this->session->set_flashdata('notif', 'Data Berita berhasil dihapus');
		$this->session->set_flashdata('type', 'success');
		redirect('sysadmin/berita','refresh');
	}

	public function publish($id){
		$data = array(
			'publish'	=> 1
		);
		$this->Mberita->update($data, $id);
		$this->session->set_flashdata('notif', 'Data Berita berhasil dipublish');
		$this->session->set_flashdata('type', 'success');
		redirect('sysadmin/berita','refresh');
	}

	public function unpublish($id){
		$data = array(
			'publish'	=> 0
		);
		$this->Mberita->update($data, $id);
		$this->session->set_flashdata('notif', 'Data Berita batal dipublish');
		$this->session->set_flashdata('type', 'success');
		redirect('sysadmin/berita','refresh');
	}

}

/* End of file Berita.php */
/* Location: ./application/controllers/sysadmin/Berita.php */