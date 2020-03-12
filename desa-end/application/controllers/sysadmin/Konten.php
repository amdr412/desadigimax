<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konten extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Mkonten');

		if ($this->session->userdata('login') != "berhasil") {
			$this->session->set_flashdata('notif', 'Silahkan login terlebih dahulu');
			$this->session->set_flashdata('type', 'error');
			redirect('syslogin','refresh');
		}
	}

	public function index(){
		$data['title']		= "Konten - Data Simarte";
		$data['subtitle']	= "Data Konten";
		$data['b1']			= "Konten";
		$data['b1a']		= "#";
		$data['b2']			= "Data Konten";
		$data['b2a']		= "#";
		$data['jumlah']		= 2;
		$data['slider']		= "active";
		$data['dslider']	= "active";
		$data['content']	= "data-konten";
		$data['data']		= $this->Mkonten->read()->result();

		$this->load->view('sysadmin/index', $data);
	}

	public function insert(){
		$nm_file = "konten_".time(); //nama file + fungsi time
        $config['upload_path'] = './files/slider/'; //folder untuk meyimpan foto
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '3672';
        $config['max_width'] = '5000';
        $config['max_height'] = '5000';
        $config['file_name'] = $nm_file;

        $this->upload->initialize($config);
         if(isset($_FILES['image_konten_app']['name'])){
            if ($this->upload->do_upload('image_konten_app')) {
                $data_upload = $this->upload->data();
                $data = array(
                    'title_konten_app'    => $this->input->post('title_konten_app'),
                    'subtitle_konten_app'    => $this->input->post('subtitle_konten_app'),
                    'image_konten_app'	=> $data_upload['file_name']
                );
            }
        }
		$this->Mkonten->insert($data);
		$this->session->set_flashdata('notif', 'Data konten berhasil ditambah');
		$this->session->set_flashdata('type', 'success');
		redirect('sysadmin/konten','refresh');
	}

	public function update(){
		$nm_file = "konten_".time(); //nama file + fungsi time
        $config['upload_path'] = './files/slider/'; //folder untuk meyimpan foto
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '3672';
        $config['max_width'] = '5000';
        $config['max_height'] = '5000';
        $config['file_name'] = $nm_file;

        $this->upload->initialize($config);
         if(isset($_FILES['image_konten_app']['name'])){
            if ($this->upload->do_upload('image_konten_app')) {
                $data_upload = $this->upload->data();
                $data = array(
                    'title_konten_app'    => $this->input->post('title_konten_app'),
                    'subtitle_konten_app'    => $this->input->post('subtitle_konten_app'),
                    'image_konten_app'	=> $data_upload['file_name']
                );
                unlink($config['upload_path'].$this->input->post('konten_lama'));
            }else{
            	$data = array(
                    'title_konten_app'    => $this->input->post('title_konten_app'),
                    'subtitle_konten_app'    => $this->input->post('subtitle_konten_app')
                );
            }
        }
		$this->Mkonten->update($data, $this->input->post('id_konten_app'));
		$this->session->set_flashdata('notif', 'Data konten berhasil disimpan');
		$this->session->set_flashdata('type', 'success');
		redirect('sysadmin/konten','refresh');
	}

	public function delete($id){
		$path = './files/slider/';
		unlink($path.$this->input->get('image_konten_app'));
		$this->Mkonten->delete($id);
		$this->session->set_flashdata('notif', 'Data konten berhasil dihapus');
		$this->session->set_flashdata('type', 'success');
		redirect('sysadmin/konten','refresh');
	}


}

/* End of file Slider.php */
/* Location: ./application/controllers/sysadmin/Slider.php */