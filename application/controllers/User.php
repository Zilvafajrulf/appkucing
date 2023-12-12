<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Madmin');
    }

    public function index(){
        $data['user']=$this->Madmin->get_all_data('user')->result();
        // $data['kategori']=$this->Madmin->get_all_data('tbl_kategori')->result();
        // $data['foto']=$this->Madmin->get_all_data('tbl_foto')->result();
        // $data['produk']=$this->Madmin->join_produk()->result();
        $this->load->view('adminsholeh/layout/header');
        $this->load->view('adminsholeh/layout/menu');
        $this->load->view('adminsholeh/user/tampil', $data);
        $this->load->view('adminsholeh/layout/footer');
    }

    /*public function add(){
        $data['kategori']=$this->Madmin->get_all_data('tbl_kategori')->result();
        $data['foto']=$this->Madmin->get_all_data('tbl_foto')->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/produk/formAdd', $data);
        $this->load->view('admin/layout/footer');
    }

    public function save(){
        // $id_kategori = $this->input->post('kategori');
        // $id_foto = $this->input->post('foto');
        $nama_produk = $this->input->post('nama_produk');
        $harga_produk = $this->input->post('harga_produk');
        $stok = $this->input->post('stok');
        $berat_produk = $this->input->post('berat_produk');
        $warna_produk = $this->input->post('warna_produk');
        $ukuran_produk = $this->input->post('ukuran_produk');
        $deskripsi_produk = $this->input->post('deskripsi_produk');

        // $config['upload_path'] = './assets/foto_produk/';
        // $config['allowed_types'] = 'jpg|png|jpeg';
        // $this->load->library('upload', $config);
        // if($this->upload->do_upload('gambar')){
        //     $data_file = $this->upload->data();
        //     $data_insert=array('idKat' => $idKategori,
        //                         'namaProduk' => $namaProduk,
        //                         'idToko' => $idToko,
        //                         'harga' => $hargaProduk,
        //                         'stok' => $jumlahProduk,
        //                         'berat' => $beratProduk,
        //                         'foto' => $data_file['file_name'],
        //                         'deskripsiProduk' => $deskripsi);
        //     $this->Madmin->insert('tbl_produk', $data_insert);
        //     redirect('produk/index/'.$idToko);
        // }else{
        //     redirect('produk/add/'.$idToko);
        // }

        $dataInput = array('nama_produk'=> $nama_produk,
                            'harga_produk' => $harga_produk,
                            'stok' => $stok,
                            'berat_produk' => $berat_produk,
                            'warna_produk' => $warna_produk,
                            'ukuran_produk' => $ukuran_produk,
                            'deskripsi_produk' => $deskripsi_produk);
        $this->Madmin->insert('tbl_produk', $dataInput);
        redirect('produk');
    }*/

    public function get_by_id($id){
        $dataWhere = array('id_user'=>$id);
        $data['user']=$this->Madmin->get_by_id('user', $dataWhere)->row_object();
        $this->load->view('adminsholeh/layout/header');
        $this->load->view('adminsholeh/layout/menu');
        $this->load->view('adminsholeh/layout/footer');
    }

    /*public function edit(){
        $id_user = $this->input->post('id_user');
        // $id_foto = $this->input->post('foto');
        $nama_user = $this->input->post('nama_user');
        $notlp_user = $this->input->post('notlp_user');
        $alamat_user = $this->input->post('alamat_user');
        
        $dataUpdate = array('nama_user'=>$nama_user,
                            'notlp_user' => $notlp_user,
                            'alamat_user' => $alamat_user,
        $this->Madmin->update('user', $dataUpdate, 'id_user', $id_user);
        redirect('produk');
    }*/

    public function delete($id){
        $this->Madmin->delete('user', 'id_user', $id);
        redirect('user');
    }
}