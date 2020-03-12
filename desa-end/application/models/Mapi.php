<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapi extends CI_Model {

	public function getDanaKegiatan($id_kegiatan){
		$this->db->select('*, (select sum(z.jumlah) from tb_penarikan_dana z, tb_warga x where z.id_warga = x.id_warga and x.id_rt = 1 group by x.id_rt) as jml_rt1, (select sum(z.jumlah) from tb_penarikan_dana z, tb_warga x where z.id_warga = x.id_warga and x.id_rt = 2 group by x.id_rt) as jml_rt2, (select sum(z.jumlah) from tb_penarikan_dana z, tb_warga x where z.id_warga = x.id_warga and x.id_rt = 3 group by x.id_rt) as jml_rt3, (select sum(z.jumlah) from tb_penarikan_dana z, tb_warga x where z.id_warga = x.id_warga and x.id_rt = 4 group by x.id_rt) as jml_rt4');
		$this->db->join('tb_warga c', 'a.id_warga = c.id_warga', 'right');
		$this->db->join('tb_kegiatan b', 'a.id_kegiatan = b.id_kegiatan', 'right');
		$this->db->where('a.id_kegiatan', $id_kegiatan);
		$this->db->order_by('a.id_kegiatan', 'desc');
		$this->db->group_by('a.id_kegiatan');
		return $this->db->get('tb_penarikan_dana a');
	}

	public function wargaByRT($rt){
		$this->db->join('tb_rt b', 'a.id_rt = b.id_rt');
		$this->db->join('tb_rw c', 'b.id_rw = c.id_rw');
		$this->db->where('a.id_rt', $rt);
		$this->db->order_by('a.id_warga', 'asc');
		return $this->db->get('tb_warga a');
	}

	public function rt(){
		return $this->db->get('tb_rt');
	}

	public function kegiatan(){
		$this->db->order_by('id_kegiatan', 'desc');
		return $this->db->get('tb_kegiatan');
	}

	public function berita(){
		$this->db->select('a.id_berita, a.judul_berita, a.foto_berita, a.isi_berita, a.dibuat, b.nama_lengkap as oleh');
		$this->db->join('tb_admin b', 'a.id_admin = b.id_admin');
		$this->db->where('a.publish', 1);
		$this->db->order_by('a.id_berita', 'desc');
		return $this->db->get('tb_berita a');
	}

	public function slider(){
		$this->db->where('aktif', 1);
		$this->db->order_by('id_slider', 'desc');
		return $this->db->get('tb_slider');
	}

	public function banner(){
		$this->db->where('aktif', 1);
		$this->db->order_by('id_slider', 'desc');
		return $this->db->get('tb_banner');
	}

	public function menu(){
		return $this->db->get('tb_menu_app');
	}

	public function submenu(){
		return $this->db->get('tb_submenu_app');
	}

	public function konten(){
		return $this->db->get('tb_konten_app');
	}

	public function telepon(){
		return $this->db->get('tb_telepon');
	}

}

/* End of file Mapi.php */
/* Location: ./application/models/Mapi.php */