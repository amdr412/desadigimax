<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Mbanner');

		if ($this->session->userdata('login') != "berhasil") {
			$this->session->set_flashdata('notif', 'Silahkan login terlebih dahulu');
			$this->session->set_flashdata('type', 'error');
			redirect('syslogin','refresh');
		}
	}

	public function index(){
		$data['title']		= "Banner - Data Simarte";
		$data['subtitle']	= "Data Banner";
		$data['b1']			= "Banner";
		$data['b1a']		= "#";
		$data['b2']			= "Data Banner";
		$data['b2a']		= "#";
		$data['jumlah']		= 2;
		$data['slider']		= "active";
		$data['dslider']	= "active";
		$data['content']	= "data-banner";
		$data['data']		= $this->Mbanner->read()->result();

		$this->load->view('sysadmin/index', $data);
	}

	public function insert(){
		$nm_file = "banner_".time(); //nama file + fungsi time
        $config['upload_path'] = './files/slider/'; //folder untuk meyimpan foto
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '3672';
        $config['max_width'] = '5000';
        $config['max_height'] = '5000';
        $config['file_name'] = $nm_file;

        $this->upload->initialize($config);
         if(isset($_FILES['slider']['name'])){
            if ($this->upload->do_upload('slider')) {
                $data_upload = $this->upload->data();
                $data = array(
                    'caption'    => $this->input->post('caption'),
                    'jenis'    => $this->input->post('jenis'),
                    'slider'	=> $data_upload['file_name']
                );
            }
        }
		$this->Mbanner->insert($data);
		$this->session->set_flashdata('notif', 'Data banner berhasil ditambah');
		$this->session->set_flashdata('type', 'success');
		redirect('sysadmin/banner','refresh');
	}

	public function update(){
		$nm_file = "banner_".time(); //nama file + fungsi time
        $config['upload_path'] = './files/slider/'; //folder untuk meyimpan foto
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '3672';
        $config['max_width'] = '5000';
        $config['max_height'] = '5000';
        $config['file_name'] = $nm_file;

        $this->upload->initialize($config);
         if(isset($_FILES['slider']['name'])){
            if ($this->upload->do_upload('slider')) {
                $data_upload = $this->upload->data();
                $data = array(
                    'caption'    => $this->input->post('caption'),
                    'jenis'    => $this->input->post('jenis'),
                    'slider'	=> $data_upload['file_name']
                );
                unlink($config['upload_path'].$this->input->post('slider_lama'));
            }else{
            	$data = array(
                    'caption'    => $this->input->post('caption'),
                    'jenis'    => $this->input->post('jenis')
                );
            }
        }
		$this->Mbanner->update($data, $this->input->post('id_slider'));
		$this->session->set_flashdata('notif', 'Data banner berhasil disimpan');
		$this->session->set_flashdata('type', 'success');
		redirect('sysadmin/banner','refresh');
	}

	public function delete($id){
		$path = './files/slider/';
		unlink($path.$this->input->get('slider'));
		$this->Mbanner->delete($id);
		$this->session->set_flashdata('notif', 'Data banner berhasil dihapus');
		$this->session->set_flashdata('type', 'success');
		redirect('sysadmin/banner','refresh');
	}

	public function aktif($id){
		$data = array(
			'aktif'	=> 1
		);
		$this->Mbanner->update($data, $id);
		$this->session->set_flashdata('notif', 'Data banner berhasil diaktifkan');
		$this->session->set_flashdata('type', 'success');
		redirect('sysadmin/banner','refresh');
	}

	public function nonaktif($id){
		$data = array(
			'aktif'	=> 0
		);
		$this->Mbanner->update($data, $id);
		$this->session->set_flashdata('notif', 'Data banner berhasil dinonaktifkan');
		$this->session->set_flashdata('type', 'success');
		redirect('sysadmin/banner','refresh');
	}

}

/* End of file Slider.php */
/* Location: ./application/controllers/sysadmin/Slider.php */