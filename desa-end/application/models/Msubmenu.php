<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Msubmenu extends CI_Model {

	public function read(){
		return $this->db->get('tb_submenu_app');
	}

	public function readById($id){
		$this->db->where('id_submenu_app', $id);
		return $this->db->get('tb_submenu_app');
	}

	public function insert($data){
		return $this->db->insert('tb_submenu_app', $data);
	}

	public function update($data, $id){
		$this->db->where('id_submenu_app', $id);
		return $this->db->update('tb_submenu_app', $data);
	}

	public function delete($id){
		$this->db->where('id_submenu_app', $id);
		return $this->db->delete('tb_submenu_app');
	}

}

/* End of file Mslider.php */
/* Location: ./application/models/Mslider.php */