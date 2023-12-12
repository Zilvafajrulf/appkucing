<?php

class Madmin extends CI_Model{

    public function cek_login($u,$p){
        $q=$this->db->get_where('admin',array('username'=>$u,'password'=>$p));
        return $q;
    }

    public function get_all_data($tabel){
		$q=$this->db->get($tabel);
		return $q;
	}

	public function insert($tabel, $data){
		$this->db->insert($tabel, $data);
	}

	public function get_by_id($tabel, $id){
		return $this->db->get_where($tabel, $id);
	}

	public function update($tabel, $data, $pk, $id){
		$this->db->where($pk, $id);
		$this->db->update($tabel, $data);
	}

	public function delete($tabel, $id, $val){
		$this->db->delete($tabel, array($id => $val));
	}

	/*public function join_order(){
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->join('tbl_order','tbl_order.id_user = tbl_user.id_user');
		$this->db->join('tbl_detail_order','tbl_detail_order.id_order = tbl_order.id_order');
		return $this->db->get('');
	}

	public function join_produk(){
		$this->db->select('*');
		$this->db->from('tbl_kategori');
		$this->db->join('tbl_produk','tbl_produk.id_kategori = tbl_kategori.id_kategori');
		$this->db->join('tbl_foto','tbl_foto.id_produk = tbl_produk.id_produk');
		return $this->db->get('');
	}*/

	// public function join_produk(){
	// 	$this->db->select('*');
	// 	$this->db->from('tbl_foto');
	// 	$this->db->join('tbl_produk','tbl_produk.id_foto = tbl_foto.id_foto');
	// 	return $this->db->get('');
	// }

}