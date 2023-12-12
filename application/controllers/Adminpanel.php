<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminpanel extends CI_Controller{

	public function index(){
		$this->load->view('adminsholeh/login');
	}

	public function dashboard(){
		if(empty($this->session->userdata('username'))){
            redirect('adminpanel');
        }
		$this->load->view('adminsholeh/layout/header');
		$this->load->view('adminsholeh/layout/menu');
		$this->load->view('adminsholeh/dashboard');
		$this->load->view('adminsholeh/layout/footer');
	}

	public function login(){
		$this->load->model('Madmin');

		$this->form_validation->set_rules('username', 'Username', 'trim|required',
                                             array('required'=>'Username harus di isi !',));
        $this->form_validation->set_rules('password', 'Password', 'trim|required',
                                             array('required'=>'Password harus di isi !',));
		
		if ($this->form_validation->run() != false){
			$u= $this->input->post('username');
			$p= $this->input->post('password');
		
			$cek = $this->Madmin->cek_login($u, $p)->num_rows();

			if($cek==1){ 
				$data_session = array(
					'username' => $u,
					'password' => $p,
					'status' => 'login'
				);
				$this->session->set_userdata($data_session);
				redirect('adminpanel/dashboard');
			} else {
				redirect('adminpanel');
			}
		}else{  
            $this->load->view('adminsholeh/login');
        }
	}

	/*public function login(){
		$this->load->model('Madmin');
        // validasi form
        $this->form_validation->set_rules('username', 'Username', 'trim|required',
                                             array('required'=>'Username harus di isi !',));
        $this->form_validation->set_rules('password', 'Password', 'trim|required',
                                             array('required'=>'Password harus di isi !',));
        
        if ($this->form_validation->run() != false){
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$user = $this->db->get_where('admin',['username' =>$username])->row_array();
			if($user != null){
				//user ada
				// cek password
				if(password_verify($password, $user['password'])){
					// login berhasil
					$data_session = array(
						'username' => $username,
						'password' => $p,
						'status' => 'login'
						);
					$this->session->set_userdata($data_session);
					redirect('adminpanel/dashboard');
				}else{
					$this->session->set_flashdata('massage','<div class="alert alert-danger alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
						<h6><i> Password anda salah! </i></h6>
						</div>');
					redirect('adminpanel');
				}
			}else{
				// user tidak ada
				$this->session->set_flashdata('massage','<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
					<h6><i> username tidak terdaftar! </i></h6>
					</div>');
					redirect('dminpanel');
			}
        }else{  
            $this->load->view('admin/login');
        }
	}*/

	public function logout(){
		$this->session->sess_destroy();
		redirect('adminpanel');
	}
}

?>