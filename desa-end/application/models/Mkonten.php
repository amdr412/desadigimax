<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mkonten extends CI_Model {

	public function read(){
		return $this->db->get('tb_konten_app');
	}

	public function readById($id){
		$this->db->where('id_konten_app', $id);
		return $this->db->get('tb_konten_app');
	}

	public function insert($data){
		return $this->db->insert('tb_konten_app', $data);
	}

	public function update($data, $id){
		$this->db->where('id_konten_app', $id);
		return $this->db->update('tb_konten_app', $data);
	}

	public function delete($id){
		$this->db->where('id_konten_app', $id);
		return $this->db->delete('tb_konten_app');
	}

}

/* End of file Mslider.php */
/* Location: ./application/models/Mslider.php */