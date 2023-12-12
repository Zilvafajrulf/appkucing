<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Madmin');
    }

    public function index(){
        $this->load->view('adminsholeh/layout/header');
        $this->load->view('adminsholeh/layout/menu');
        $this->load->view('adminsholeh/laporan/tampil');
        $this->load->view('adminsholeh/layout/footer');
    }

    public function get_by_id($id){
        $dataWhere = array('id_order'=>$id);
        $data['order']=$this->Madmin->get_by_id('tbl_order', $dataWhere)->row_object();
        $this->load->view('adminsholeh/layout/header');
        $this->load->view('adminsholeh/layout/menu');
        $this->load->view('adminsholeh/order/formEdit', $data);
        $this->load->view('adminsholeh/layout/footer');
    }

    /*public function edit(){
        $id = $this->input->post('id_order');
        $nama_user = $this->input->post('nama_user');
        $alamat_user = $this->input->post('alamat_user');
        $harga = $this->input->post('harga');
        $ongkir = $this->input->post('ongkir');
        $kurir = $this->input->post('kurir');
        $status_pembayaran = $this->input->post('status_pembayaran');
        $status_pemesanan = $this->input->post('status_pemesanan');
        $resi_pemesanan = $this->input->post('resi_pemesanan');
        $dataUpdate = array('status_pembayaran'=>$status_pembayaran,
                            'status_pemesanan'=>$status_pemesanan,
                            'ongkir'=>$ongkir,
                            'kurir'=>$kurir,
                            'resi_pemesanan'=>$resi_pemesanan
                            );
        $this->Madmin->update('tbl_order', $dataUpdate, 'id_order', $id);
        redirect('order');
    }*/

}