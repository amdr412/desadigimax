<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mwilayah extends CI_Model {

	public function read(){
		return $this->db->get('tb_wilayah');
	}

	public function readById($id){
		$this->db->where('id_wilayah', $id);
		return $this->db->get('tb_wilayah');
	}

	public function insert($data){
		return $this->db->insert('tb_wilayah', $data);
	}

	public function update($data, $id){
		$this->db->where('id_wilayah', $id);
		return $this->db->update('tb_wilayah', $data);
	}

	public function delete($id){
		$this->db->where('id_wilayah', $id);
		return $this->db->delete('tb_wilayah');
	}

}

/* End of file Mtelepon.php */
/* Location: ./application/models/Mtelepon.php */