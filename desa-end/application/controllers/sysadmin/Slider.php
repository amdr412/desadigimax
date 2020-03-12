<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Mslider');

		if ($this->session->userdata('login') != "berhasil") {
			$this->session->set_flashdata('notif', 'Silahkan login terlebih dahulu');
			$this->session->set_flashdata('type', 'error');
			redirect('syslogin','refresh');
		}
	}

	public function index(){
		$data['title']		= "Slider - Data Simarte";
		$data['subtitle']	= "Data Slider";
		$data['b1']			= "Slider";
		$data['b1a']		= "#";
		$data['b2']			= "Data Slider";
		$data['b2a']		= "#";
		$data['jumlah']		= 2;
		$data['slider']		= "active";
		$data['dslider']	= "active";
		$data['content']	= "data-slider";
		$data['data']		= $this->Mslider->read()->result();

		$this->load->view('sysadmin/index', $data);
	}

	public function insert(){
		$nm_file = "slider_".time(); //nama file + fungsi time
        $config['upload_path'] = './files/slider/'; //folder untuk meyimpan foto
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '3672';
        $config['max_width'] = '5000';
        $config['max_height'] = '5000';
        $config['file_name'] = $nm_file;

        $this->upload->initialize($config);
         if(isset($_FILES['foto_slider']['name'])){
            if ($this->upload->do_upload('foto_slider')) {
                $data_upload = $this->upload->data();
                $data = array(
                    'caption'    => $this->input->post('caption'),
                    'foto_slider'	=> $data_upload['file_name']
                );
            }
        }
		$this->Mslider->insert($data);
		$this->session->set_flashdata('notif', 'Data slider berhasil ditambah');
		$this->session->set_flashdata('type', 'success');
		redirect('sysadmin/slider','refresh');
	}

	public function update(){
		$nm_file = "slider_".time(); //nama file + fungsi time
        $config['upload_path'] = './files/slider/'; //folder untuk meyimpan foto
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '3672';
        $config['max_width'] = '5000';
        $config['max_height'] = '5000';
        $config['file_name'] = $nm_file;

        $this->upload->initialize($config);
         if(isset($_FILES['foto_slider']['name'])){
            if ($this->upload->do_upload('foto_slider')) {
                $data_upload = $this->upload->data();
                $data = array(
                    'caption'    => $this->input->post('caption'),
                    'foto_slider'	=> $data_upload['file_name']
                );
                unlink($config['upload_path'].$this->input->post('foto_slider_lama'));
            }else{
            	$data = array(
                    'caption'    => $this->input->post('caption')
                );
            }
        }
		$this->Mslider->update($data, $this->input->post('id_slider'));
		$this->session->set_flashdata('notif', 'Data slider berhasil disimpan');
		$this->session->set_flashdata('type', 'success');
		redirect('sysadmin/slider','refresh');
	}

	public function delete($id){
		$path = './files/slider/';
		unlink($path.$this->input->get('foto_slider'));
		$this->Mslider->delete($id);
		$this->session->set_flashdata('notif', 'Data slider berhasil dihapus');
		$this->session->set_flashdata('type', 'success');
		redirect('sysadmin/slider','refresh');
	}

	public function aktif($id){
		$data = array(
			'aktif'	=> 1
		);
		$this->Mslider->update($data, $id);
		$this->session->set_flashdata('notif', 'Data slider berhasil diaktifkan');
		$this->session->set_flashdata('type', 'success');
		redirect('sysadmin/slider','refresh');
	}

	public function nonaktif($id){
		$data = array(
			'aktif'	=> 0
		);
		$this->Mslider->update($data, $id);
		$this->session->set_flashdata('notif', 'Data slider berhasil dinonaktifkan');
		$this->session->set_flashdata('type', 'success');
		redirect('sysadmin/slider','refresh');
	}

}

/* End of file Slider.php */
/* Location: ./application/controllers/sysadmin/Slider.php */