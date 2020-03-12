<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mberita extends CI_Model {

	public function read(){
		return $this->db->get('tb_berita');
	}

	public function readById($id){
		$this->db->where('id_berita', $id);
		return $this->db->get('tb_berita');
	}

	public function insert($data){
		return $this->db->insert('tb_berita', $data);
	}

	public function update($data, $id){
		$this->db->where('id_berita', $id);
		return $this->db->update('tb_berita', $data);
	}

	public function delete($id){
		$this->db->where('id_berita', $id);
		return $this->db->delete('tb_berita');
	}

}

/* End of file Mberita.php */
/* Location: ./application/models/Mberita.php */