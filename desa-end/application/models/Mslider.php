<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mslider extends CI_Model {

	public function read(){
		return $this->db->get('tb_slider');
	}

	public function readById($id){
		$this->db->where('id_slider', $id);
		return $this->db->get('tb_slider');
	}

	public function insert($data){
		return $this->db->insert('tb_slider', $data);
	}

	public function update($data, $id){
		$this->db->where('id_slider', $id);
		return $this->db->update('tb_slider', $data);
	}

	public function delete($id){
		$this->db->where('id_slider', $id);
		return $this->db->delete('tb_slider');
	}

}

/* End of file Mslider.php */
/* Location: ./application/models/Mslider.php */