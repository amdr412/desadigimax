<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Mmenu');

		if ($this->session->userdata('login') != "berhasil") {
			$this->session->set_flashdata('notif', 'Silahkan login terlebih dahulu');
			$this->session->set_flashdata('type', 'error');
			redirect('syslogin','refresh');
		}
	}

	public function index(){
		$data['title']		= "Menu - Data Simarte";
		$data['subtitle']	= "Data Menu";
		$data['b1']			= "Menu";
		$data['b1a']		= "#";
		$data['b2']			= "Data Menu";
		$data['b2a']		= "#";
		$data['jumlah']		= 2;
		$data['slider']		= "active";
		$data['dslider']	= "active";
		$data['content']	= "data-menu";
		$data['data']		= $this->Mmenu->read()->result();

		$this->load->view('sysadmin/index', $data);
	}

	public function insert(){
		$nm_file = "menu_".time(); //nama file + fungsi time
        $config['upload_path'] = './files/slider/'; //folder untuk meyimpan foto
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '3672';
        $config['max_width'] = '5000';
        $config['max_height'] = '5000';
        $config['file_name'] = $nm_file;

        $this->upload->initialize($config);
         if(isset($_FILES['image_menu_app']['name'])){
            if ($this->upload->do_upload('image_menu_app')) {
                $data_upload = $this->upload->data();
                $data = array(
                    'title_menu_app'    => $this->input->post('title_menu_app'),
                    'subtitle_menu_app'    => $this->input->post('subtitle_menu_app'),
                    'image_menu_app'	=> $data_upload['file_name']
                );
            }
        }
		$this->Mmenu->insert($data);
		$this->session->set_flashdata('notif', 'Data menu berhasil ditambah');
		$this->session->set_flashdata('type', 'success');
		redirect('sysadmin/menu','refresh');
	}

	public function update(){
		$nm_file = "menu_".time(); //nama file + fungsi time
        $config['upload_path'] = './files/slider/'; //folder untuk meyimpan foto
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '3672';
        $config['max_width'] = '5000';
        $config['max_height'] = '5000';
        $config['file_name'] = $nm_file;

        $this->upload->initialize($config);
         if(isset($_FILES['image_menu_app']['name'])){
            if ($this->upload->do_upload('image_menu_app')) {
                $data_upload = $this->upload->data();
                $data = array(
                    'title_menu_app'    => $this->input->post('title_menu_app'),
                    'subtitle_menu_app'    => $this->input->post('subtitle_menu_app'),
                    'image_menu_app'	=> $data_upload['file_name']
                );
                unlink($config['upload_path'].$this->input->post('menu_lama'));
            }else{
            	$data = array(
                    'title_menu_app'    => $this->input->post('title_menu_app'),
                    'subtitle_menu_app'    => $this->input->post('subtitle_menu_app')
                );
            }
        }
		$this->Mmenu->update($data, $this->input->post('id_menu_app'));
		$this->session->set_flashdata('notif', 'Data menu berhasil disimpan');
		$this->session->set_flashdata('type', 'success');
		redirect('sysadmin/menu','refresh');
	}

	public function delete($id){
		$path = './files/slider/';
		unlink($path.$this->input->get('image_menu_app'));
		$this->Mmenu->delete($id);
		$this->session->set_flashdata('notif', 'Data menu berhasil dihapus');
		$this->session->set_flashdata('type', 'success');
		redirect('sysadmin/menu','refresh');
	}


}

/* End of file Slider.php */
/* Location: ./application/controllers/sysadmin/Slider.php */