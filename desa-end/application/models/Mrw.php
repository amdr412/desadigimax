<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mrw extends CI_Model {

	public function read(){
		return $this->db->get('tb_rw');
	}

	public function insert($data){
		return $this->db->insert('tb_rw', $data);
	}

	public function update($data, $id){
		$this->db->where('id_rw', $id);
		return $this->db->update('tb_rw', $data);
	}

	public function delete($id){
		$this->db->where('id_rw', $id);
		return $this->db->delete('tb_rw');
	}


}

/* End of file Mrw.php */
/* Location: ./application/models/Mrw.php */