<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class settings extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Madmin');
    }

    public function index(){
        // if(empty($this->session->userdata('userName'))){
        //     redirect('adminpanel');
        // }
        $data['admin']=$this->Madmin->get_all_data('tbl_admin')->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/settings/tampil', $data);
        $this->load->view('admin/layout/footer');
    }

    public function get_by_id($id){
        $dataWhere = array('id_admin'=>$id);
        $data['admin']=$this->Madmin->get_by_id('tbl_admin', $dataWhere)->row_object();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/settings/editProfileAdmin', $data);
        $this->load->view('admin/layout/footer');
    }

    public function edit(){
        $id = $this->session->userdata('id_user');
        $nama_user = $this->input->post('nama_user');
        $alamat_user = $this->input->post('alamat_user');
        $kodepos = $this->input->post('kodepos');
        $tlp_user = $this->input->post('tlp_user');
        $dataUpdate = array(
            'nama_user' => $nama_user, 
            'alamat_user' => $alamat_user,
            'kodepos' => $kodepos,  
            'tlp_user' => $tlp_user 
        );
        $this->Madmin->update('tbl_user', $dataUpdate, 'id_user', $id);
        redirect('user');
    }
}