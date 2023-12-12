<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_pembayaran extends CI_Model
{

	public function cek_login()
	{
		$email 		= set_value('email');
		$password 	= set_value('password');

		$result 	= $this->db->where('email', $email)
			->where('password', md5($password))
			->limit(1)
			->get('user');
		if ($result->num_rows() > 0) {
			return $result->row();
		} else {
			return FALSE;
		}
	}

	public function cek_login_shelter()
	{
		$email 		= set_value('email');
		$password 	= set_value('password');

		$result 	= $this->db->where('email', $email)
			->where('password', md5($password))
			->limit(1)
			->get('shelter');
		if ($result->num_rows() > 0) {
			return $result->row();
		} else {
			return FALSE;
		}
	}

	public function get($table)
	{
		return $this->db->get($table);
	}

	public function insert($data, $table)
	{
		$this->db->insert($table, $data);
	}

	public function update_image($data) {
        // Perbarui tabel database dengan informasi gambar
        $this->db->insert('gambar1','gambar2','gambar3','gambar4', array(
            'file_name' => $data['upload_data']['file_name'],
            'file_path' => $data['upload_data']['full_path']
        ));
    }
	

	public function get_by_id($tabel,$id){
        return $this->db->get_where($tabel,$id);
    }

	public function get_all_data($table){
        $this->db->get($table);
        return ;
    }

	public function update($table, $data, $where)
	{
		$this->db->where($where);
        $this->db->update($table, $data);
	}

	public function delete($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function find($id)
	{
		$result = $this->db->where('id_kucing', $id)
			->limit(1)
			->get('kucing');
		if ($result->num_rows() > 0) {
			return $result->row();
		} else {
			return array();
		}
	}

	public function count_order()
	{
		$id = $this->session->userdata('id_shelter');
		$sql = "SELECT count(order_id) as order_id FROM transaction WHERE transaction.id_shelter='$id'";
		$result = $this->db->query($sql);

		return $result->row()->order_id;
	}

	public function count_pending()
	{
		$id = $this->session->userdata('id_shelter');
		$sql = "SELECT count(order_id) as order_id FROM transaction WHERE transaction.id_shelter='$id' AND status='0'";
		$result = $this->db->query($sql);

		return $result->row()->order_id;
	}

	public function count_success()
	{
		$id = $this->session->userdata('id_shelter');
		$sql = "SELECT count(order_id) as order_id FROM transaction WHERE transaction.id_shelter='$id' AND status='1'";
		$result = $this->db->query($sql);

		return $result->row()->order_id;
	}
}
