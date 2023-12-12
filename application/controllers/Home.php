<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'Sholeh Cats';
		$data['kucing'] = $this->model_pembayaran->get('kucing')->result();
		$this->load->view('layout/home/header', $data);
		$this->load->view('home', $data);
		$this->load->view('layout/home/footer');
	}
}
