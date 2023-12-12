<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('level') != '1') {
			redirect('shelteradmin');
		}
	}

	public function index()
	{
		$data['title'] = 'Dashboard Admin';
		$id = $this->session->userdata('id_shelter');
        $data['shelter'] = $this->db->query("SELECT * FROM shelter 
			WHERE shelter.id_shelter='$id'")->result();
		$data['bill'] = $this->db->query("SELECT * FROM transaction
        WHERE transaction.id_shelter='$id' AND status='0' ORDER BY order_id DESC LIMIT 4")->result();
		$data['count'] = $this->model_pembayaran->count_order();
		//$data['count'] = $this->db->query("SELECT count(order_id) as order_id FROM transaction");
		//"SELECT count(order_id) as order_id FROM transaction"
		$data['pending'] = $this->model_pembayaran->count_pending();
		$data['sukses'] = $this->model_pembayaran->count_success();
		$this->load->view('layout/admin/header', $data);
		$this->load->view('admin/dashboard/dashboard', $data);
		$this->load->view('layout/admin/footer');
	}
}
