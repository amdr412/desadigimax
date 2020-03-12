<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mtelepon extends CI_Model {

	public function read(){
		return $this->db->get('tb_telepon');
	}

	public function readById($id){
		$this->db->where('id_telepon', $id);
		return $this->db->get('tb_telepon');
	}

	public function insert($data){
		return $this->db->insert('tb_telepon', $data);
	}

	public function update($data, $id){
		$this->db->where('id_telepon', $id);
		return $this->db->update('tb_telepon', $data);
	}

	public function delete($id){
		$this->db->where('id_telepon', $id);
		return $this->db->delete('tb_telepon');
	}

}

/* End of file Mtelepon.php */
/* Location: ./application/models/Mtelepon.php */