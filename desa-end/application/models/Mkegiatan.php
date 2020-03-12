<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mkegiatan extends CI_Model {

	public function read(){
		return $this->db->get('tb_kegiatan');
	}

	public function insert($data){
		return $this->db->insert('tb_kegiatan', $data);
	}

	public function update($data, $id){
		$this->db->where('id_kegiatan', $id);
		return $this->db->update('tb_kegiatan', $data);
	}

	public function delete($id){
		$this->db->where('id_kegiatan', $id);
		return $this->db->delete('tb_kegiatan');
	}


}

/* End of file Mkegiatan.php */
/* Location: ./application/models/Mkegiatan.php */