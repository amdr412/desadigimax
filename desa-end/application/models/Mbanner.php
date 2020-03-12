<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mbanner extends CI_Model {

	public function read(){
		return $this->db->get('tb_banner');
	}

	public function readById($id){
		$this->db->where('id_slider', $id);
		return $this->db->get('tb_banner');
	}

	public function insert($data){
		return $this->db->insert('tb_banner', $data);
	}

	public function update($data, $id){
		$this->db->where('id_slider', $id);
		return $this->db->update('tb_banner', $data);
	}

	public function delete($id){
		$this->db->where('id_slider', $id);
		return $this->db->delete('tb_banner');
	}

}

/* End of file Mslider.php */
/* Location: ./application/models/Mslider.php */