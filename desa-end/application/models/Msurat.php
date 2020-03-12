<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Msurat extends CI_Model {

	public function read(){
		return $this->db->get('tb_surat');
	}

	public function readById($id){
		$this->db->where('id_surat', $id);
		return $this->db->get('tb_surat');
	}

	public function insert($data){
		return $this->db->insert('tb_surat', $data);
	}

	public function update($data, $id){
		$this->db->where('id_surat', $id);
		return $this->db->update('tb_surat', $data);
	}

	public function delete($id){
		$this->db->where('id_surat', $id);
		return $this->db->delete('tb_surat');
	}

}

/* End of file Mtelepon.php */
/* Location: ./application/models/Mtelepon.php */