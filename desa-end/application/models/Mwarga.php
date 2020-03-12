<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mwarga extends CI_Model {

	public function read(){
		$this->db->join('tb_rt b', 'a.id_rt = b.id_rt');
		$this->db->join('tb_rw c', 'b.id_rw = c.id_rw');
		return $this->db->get('tb_warga a');
	}

	public function readById($id){
		$this->db->join('tb_rt b', 'a.id_rt = b.id_rt');
		$this->db->join('tb_rw c', 'b.id_rw = c.id_rw');
		$this->db->where('a.id_warga', $id);
		return $this->db->get('tb_warga a');
	}


	public function readByRT($rt){
		$this->db->join('tb_rt b', 'a.id_rt = b.id_rt');
		$this->db->join('tb_rw c', 'b.id_rw = c.id_rw');
		$this->db->where('a.id_rt', $rt);
		return $this->db->get('tb_warga a');
	}

	public function insert($data){
		return $this->db->insert('tb_warga', $data);
	}

	public function update($data, $id){
		$this->db->where('id_warga', $id);
		return $this->db->update('tb_warga', $data);
	}

	public function delete($id){
		$this->db->where('id_warga', $id);
		return $this->db->delete('tb_warga');
	}

}

/* End of file Mwarga.php */
/* Location: ./application/models/Mwarga.php */