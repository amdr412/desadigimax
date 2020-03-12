<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Submenu extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Msubmenu');

		if ($this->session->userdata('login') != "berhasil") {
			$this->session->set_flashdata('notif', 'Silahkan login terlebih dahulu');
			$this->session->set_flashdata('type', 'error');
			redirect('syslogin','refresh');
		}
	}

	public function index(){
		$data['title']		= "Submenu - Data Simarte";
		$data['subtitle']	= "Data Submenu";
		$data['b1']			= "Submenu";
		$data['b1a']		= "#";
		$data['b2']			= "Data Submenu";
		$data['b2a']		= "#";
		$data['jumlah']		= 2;
		$data['slider']		= "active";
		$data['dslider']	= "active";
		$data['content']	= "data-submenu";
		$data['data']		= $this->Msubmenu->read()->result();

		$this->load->view('sysadmin/index', $data);
	}

	public function insert(){
		$nm_file = "submenu_".time(); //nama file + fungsi time
        $config['upload_path'] = './files/slider/'; //folder untuk meyimpan foto
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '3672';
        $config['max_width'] = '5000';
        $config['max_height'] = '5000';
        $config['file_name'] = $nm_file;

        $this->upload->initialize($config);
         if(isset($_FILES['image_submenu_app']['name'])){
            if ($this->upload->do_upload('image_submenu_app')) {
                $data_upload = $this->upload->data();
                $data = array(
                    'title_submenu_app'    => $this->input->post('title_submenu_app'),
                    'subtitle_submenu_app'    => $this->input->post('subtitle_submenu_app'),
                    'image_submenu_app'	=> $data_upload['file_name']
                );
            }
        }
		$this->Msubmenu->insert($data);
		$this->session->set_flashdata('notif', 'Data submenu berhasil ditambah');
		$this->session->set_flashdata('type', 'success');
		redirect('sysadmin/submenu','refresh');
	}

	public function update(){
		$nm_file = "submenu_".time(); //nama file + fungsi time
        $config['upload_path'] = './files/slider/'; //folder untuk meyimpan foto
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '3672';
        $config['max_width'] = '5000';
        $config['max_height'] = '5000';
        $config['file_name'] = $nm_file;

        $this->upload->initialize($config);
         if(isset($_FILES['image_submenu_app']['name'])){
            if ($this->upload->do_upload('image_submenu_app')) {
                $data_upload = $this->upload->data();
                $data = array(
                    'title_submenu_app'    => $this->input->post('title_submenu_app'),
                    'subtitle_submenu_app'    => $this->input->post('subtitle_submenu_app'),
                    'image_submenu_app'	=> $data_upload['file_name']
                );
                unlink($config['upload_path'].$this->input->post('submenu_lama'));
            }else{
            	$data = array(
                    'title_submenu_app'    => $this->input->post('title_submenu_app'),
                    'subtitle_submenu_app'    => $this->input->post('subtitle_submenu_app')
                );
            }
        }
		$this->Msubmenu->update($data, $this->input->post('id_submenu_app'));
		$this->session->set_flashdata('notif', 'Data submenu berhasil disimpan');
		$this->session->set_flashdata('type', 'success');
		redirect('sysadmin/submenu','refresh');
	}

	public function delete($id){
		$path = './files/slider/';
		unlink($path.$this->input->get('image_submenu_app'));
		$this->Msubmenu->delete($id);
		$this->session->set_flashdata('notif', 'Data submenu berhasil dihapus');
		$this->session->set_flashdata('type', 'success');
		redirect('sysadmin/submenu','refresh');
	}


}

/* End of file Slider.php */
/* Location: ./application/controllers/sysadmin/Slider.php */