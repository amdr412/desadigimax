<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mrt extends CI_Model {

	public function read(){
		return $this->db->get('tb_rt');
	}

	public function insert($data){
		return $this->db->insert('tb_rt', $data);
	}

	public function update($data, $id){
		$this->db->where('id_rt', $id);
		return $this->db->update('tb_rt', $data);
	}

	public function delete($id){
		$this->db->where('id_rt', $id);
		return $this->db->delete('tb_rt');
	}

}

/* End of file Mrt.php */
/* Location: ./application/models/Mrt.php */