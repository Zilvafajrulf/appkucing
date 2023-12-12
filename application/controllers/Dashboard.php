<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('level') != '2') {
			redirect('welcome');
		}
	}

	public function index()
	{
		$data['title'] = 'Dashboard User';
		$data['kucing'] = $this->model_pembayaran->get('kucing')->result();
		$this->load->view('layout/user/header', $data);
		$this->load->view('dashboard', $data);
		$this->load->view('layout/user/footer');
	}

	public function cart($id)
	{

		$kucing = $this->model_pembayaran->find($id);
		
		$data = array(
			'id'      => $kucing->id_kucing,
			'qty'     => 1,
			'price'   => $kucing->biaya_adopsi,
			'name'    => $kucing->jenis_kucing,
			'options' => array(
				'id_shelter'   => $kucing->id_shelter,
				'nama_shelter' => $kucing->nama_shelter,
				'kota_shelter' => $kucing->kota_shelter,
				'usia'    => $kucing->usia_kucing,
				'gambar1' => $kucing->gambar1
			)
			);
		$this->cart->insert($data);
		$_SESSION["sukses"] = 'Pesanan telah disimpan di keranjang';
		redirect('dashboard');
		/*$kucing = $this->model_pembayaran->find($id);

		$data = array(
			'id'      => $kucing->id_kucing,
			'qty'     => 1,
			'price' 	=> $kucing->biaya_adopsi,
			'name' 	=> $kucing->jenis_kucing,
			'options' => array(
				'deskripsi' 	=> $kucing->deskripsi
				
			
			)
		);

		$this->->insert($data);
		$_SESSION["sukses"] = 'Pesanan telah disimpan di keranjang';
		redirect('dashboard'); */
			
			/*'id'      => $product->id_brg,
			'qty'     => 1,
			'price'   => $product->harga,
			'name'    => $product->nama_brg,
			'options' => array(
				'keterangan' => $product->keterangan,
				'kategori' => $product->kategori,
				'gambar' => $product->gambar
			)*/
		
	}

	public function detail_cart()
	{
		$data['title'] = 'Detail ';
		$this->load->view('layout/user/header', $data);
		$this->load->view('cart', $data);
		$this->load->view('layout/user/footer');
	}

	public function detail($id)
	{
		/*$where = array('id_kucing' => $id);
		$data['title'] = 'Detail Kucing';
		$data['kucing'] = $this->db->query("SELECT * FROM kucing WHERE id_kucing = '$id'")->result();
		$this->load->view('layout/user/header', $data);
        $this->load->view('detail', $data);
        $this->load->view('layout/user/footer');*/

		$where = array('id_kucing' => $id);
		$data['title'] = 'Detail Kucing';
		$data['kucing'] = $this->db->query("SELECT * FROM kucing WHERE id_kucing = '$id'")->result();
		$this->load->view('layout/user/header', $data);
		$this->load->view('detail', $data);
		$this->load->view('layout/user/footer');
	}

	
    /*public function detail($id_kucing){
         
        $dataWhere =array('id_kucing'=>$id_kucing);
        $data['adopsi_kucing'] = $this->model_pembayaran->get_by_id('kucing',$dataWhere)->row_object();
        $this->load->view('layout/user/header', $data);
        $this->load->view('detail', $data);
        $this->load->view('layout/user/footer');
    }*/

	public function checkout()
	{
		$data['title'] = 'Adopsi Kucing';
		$this->load->view('layout/user/header', $data);
		$this->load->view('checkout', $data);
		$this->load->view('layout/user/footer');
	}

	public function checkout_proccess()
	{
		$data['title'] = 'Payment Notification';
		$is_processed = $this->model_invoice->index();
		if ($is_processed) {
			$this->cart->destroy();
			$this->load->view('layout/user/header', $data);
			$this->load->view('success_pay', $data);
			$this->load->view('layout/user/footer');
		} else {
			echo "Maaf, Pesanan Anda Gagal Di Proses!";
		}
	}

	

	public function clear()
	{
		$this->cart->destroy();
		$_SESSION["sukses"] = 'Pesanan berhasil di hapus';
		redirect('dashboard');
	}
}
