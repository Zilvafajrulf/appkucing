<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Publishershelter extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('level') != '0') {
            redirect('shelteradmin');
        }
    }

    public function index()
    {
        $data['title'] = 'Dashboard Aktivasi';
        $id = $this->session->userdata('id_shelter');
        $data['shelter'] = $this->db->query("SELECT * FROM shelter 
			WHERE id_shelter='$id'")->result();
        $this->load->view('layout/publishershelter/header', $data);
        $this->load->view('publishershelter', $data);
        $this->load->view('layout/publishershelter/footer');
    }

    public function activation($id)
    {
        $this->db->update('shelter', ['level' => '1'], ['id_shelter' => $id]);
        $this->session->sess_destroy();
        redirect('shelteradmin');
    }
}
