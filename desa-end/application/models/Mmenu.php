<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mmenu extends CI_Model {

	public function read(){
		return $this->db->get('tb_menu_app');
	}

	public function readById($id){
		$this->db->where('id_menu_app', $id);
		return $this->db->get('tb_menu_app');
	}

	public function insert($data){
		return $this->db->insert('tb_menu_app', $data);
	}

	public function update($data, $id){
		$this->db->where('id_menu_app', $id);
		return $this->db->update('tb_menu_app', $data);
	}

	public function delete($id){
		$this->db->where('id_menu_app', $id);
		return $this->db->delete('tb_menu_app');
	}

}

/* End of file Mslider.php */
/* Location: ./application/models/Mslider.php */