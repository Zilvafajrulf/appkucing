<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ShelterAdmin extends CI_Controller
{

	public function index()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
            
			$data['title'] = 'Login Shelter';
			$this->load->view('loginshelter', $data,);
		} else {
            
			$email 		= $this->input->post('email');
			$password 	= $this->input->post('password');

			
		

			$cek = $this->model_pembayaran->cek_login_shelter($email, $password) ;

			if ($cek == FALSE) {
				$_SESSION["gagal"] = 'Silahkan periksa username dan password anda';
				redirect('shelteradmin');
			} else {
				$this->session->set_userdata('level', $cek->level);
				$this->session->set_userdata('nama_shelter', $cek->nama_shelter);
				$this->session->set_userdata('id_shelter', $cek->id_shelter);
				$this->session->set_userdata('email', $cek->email);
				$this->session->set_userdata('logo', $cek->logo);
                switch ($cek->level) {
					case 1:
						redirect('admin/dashboard');
						break;
					case 0:
						redirect('publishershelter');
						break;

					default:
						break;
				}
			}
            
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('shelteradmin');
	}
}
