<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registershelter extends CI_Controller
{

    public function index()
    {
        $this->form_validation->set_rules('nama_shelter', 'Nama Shelter', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('notlp_shelter', 'No. Telepon', 'required');
        $this->form_validation->set_rules('alamat_shelter', 'Alamat Shelter', 'required');
        $this->form_validation->set_rules('password_1', 'Password', 'required|matches[password_2]');
        $this->form_validation->set_rules('password_2', 'Password', 'required|matches[password_1]');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Register Shelter';
            $this->load->view('registershelter', $data);
        } else {
            $data = array(
                'id_shelter'       => '',
                'nama_shelter'     => $this->input->post('nama_shelter'),
                'email'            => $this->input->post('email'),
                'notlp_shelter'    => $this->input->post('notlp_shelter'),
                'alamat_shelter'   => $this->input->post('alamat_shelter'),
                'password'         => md5($this->input->post('password_1')),
                'level'            => 0,
                'logo'             => 'user.png',
            );

            $this->db->insert('shelter', $data);
            $_SESSION["sukses"] = 'Anda berhasil melakukan registrasi';
            redirect('shelteradmin');
        }
    }
}
