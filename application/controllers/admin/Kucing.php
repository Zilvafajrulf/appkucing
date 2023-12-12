<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kucing extends CI_Controller
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
		$data['title'] = 'Daftar Kucing';
		//$data['kucing'] = $this->model_pembayaran->get('kucing')->result();
		$id = $this->session->userdata('id_shelter');
		$data['kucing'] = $this->db->query("SELECT * FROM kucing 
			WHERE kucing.id_shelter='$id'")->result();
        $data['shelter'] = $this->db->query("SELECT * FROM shelter 
			WHERE shelter.id_shelter='$id'")->result();
		$this->load->view('layout/admin/header', $data);
		$this->load->view('admin/kucing/view', $data);
		$this->load->view('layout/admin/footer');
	}

	public function add($id)
	{
		$where = array('id_shelter' => $id);
		$data['title'] = 'Add Kucing';
		$data['shelter'] = $this->db->query("SELECT * FROM shelter WHERE id_shelter = '$id'")->result();
		$this->load->view('layout/admin/header', $data);
		$this->load->view('admin/kucing/add', $data);
		$this->load->view('layout/admin/footer');
	}

	public function insert()
	{
		$id_shelter = $this->input->post('id_shelter');
		$nama_shelter = $this->input->post('nama_shelter');
		$kota_shelter = $this->input->post('kota_shelter');
		$jenis_kucing = $this->input->post('jenis_kucing');
		$usia_kucing  = $this->input->post('usia_kucing');
		$jk_kucing    = $this->input->post('jk_kucing');
		$deskripsi 		= $this->input->post('deskripsi');
		$biaya_adopsi	= $this->input->post('biaya_adopsi');
		
		$gambar1	= $_FILES['gambar1']['name'];
		if ($gambar1 = '') {
		} else {
			$config['upload_path'] = './gambar_kucing';
			$config['allowed_types'] = 'jpg|jpeg|png';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar1')) {
				echo "File tidak dapat di upload!";
			} else {
				$gambar1 = $this->upload->data('file_name');
			}
		}
		$gambar2	= $_FILES['gambar2']['name'];
		if ($gambar2 = '') {
		} else {
			$config['upload_path'] = './gambar_kucing';
			$config['allowed_types'] = 'jpg|jpeg|png';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar2')) {
				echo "File tidak dapat di upload!";
			} else {
				$gambar2 = $this->upload->data('file_name');
			}
		}
		$gambar3	= $_FILES['gambar3']['name'];
		if ($gambar3 = '') {
		} else {
			$config['upload_path'] = './gambar_kucing';
			$config['allowed_types'] = 'jpg|jpeg|png';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar3')) {
				echo "File tidak dapat di upload!";
			} else {
				$gambar3 = $this->upload->data('file_name');
			}
		}
		$gambar4	= $_FILES['gambar4']['name'];
		if ($gambar4 = '') {
		} else {
			$config['upload_path'] = './gambar_kucing';
			$config['allowed_types'] = 'jpg|jpeg|png';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar4')) {
				echo "File tidak dapat di upload!";
			} else {
				$gambar4 = $this->upload->data('file_name');
			}
		}
		$data = array(
			
			'nama_shelter' 	=> $nama_shelter,
			'kota_shelter' 	=> $kota_shelter,
			'id_shelter' 	=> $id_shelter,
			'jenis_kucing' 	=> $jenis_kucing,
			'usia_kucing' 	=> $usia_kucing,
			'jk_kucing' 	=> $jk_kucing,
			'deskripsi' 	=> $deskripsi,
			'biaya_adopsi' 	=> $biaya_adopsi,
			'gambar1' 	=> $gambar1,
			'gambar2' 	=> $gambar2,
			'gambar3' 	=> $gambar3,
			'gambar4' 	=> $gambar4,
			
			
		);

		
		

		$this->model_pembayaran->insert($data, 'kucing');
		$_SESSION["sukses"] = 'Kucing berhasil di tambahkan';
		redirect('admin/kucing');
	}

	public function update($id)
	{
		$where = array('id_kucing' => $id);
		$data['title'] = 'Update Kucing';
		$data['kucing'] = $this->db->query("SELECT * FROM kucing WHERE id_kucing = '$id'")->result();
		$this->load->view('layout/admin/header', $data);
		$this->load->view('admin/kucing/update', $data);
		$this->load->view('layout/admin/footer');
	}

	/*public function do_upload() {
        // Konfigurasi upload gambar
        $config['upload_path']   = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']      = 2048; // 2MB

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            // Jika gagal mengunggah gambar
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('upload_form', $error);
        } else {
            // Jika berhasil mengunggah gambar, perbarui model untuk menyimpan informasi gambar
            $data = array('upload_data' => $this->upload->data());
            $this->ImageModel->update_image($data);

            // Tampilkan pesan sukses
            $this->load->view('upload_success', $data);
        }
    }*/

	/*public function do_upload() {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png';
        $config['max_size']             = 2048; // 2MB max size
        $config['max_width']            = 0;
        $config['max_height']           = 0;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('idgambar')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('upload_form', $error);
        } else {
            $data = array('upload_data' => $this->upload->data());
            $images = $data['upload_data']['file_name'];
            $this->ImageModel->insert_images($images);
            $this->load->view('upload_success', $data);
        }
    }*/

	/*public function insert_update(){
		
		$id = $this->input->post('id_kucing');
		$jenis_kucing = $this->input->post('jenis_kucing');
		$usia_kucing = $this->input->post('usia_kucing');
		$jk_kucing = $this->input->post('jk_kucing');
		$deskripsi = $this->input->post('deskripsi');
		$biaya_adopsi = $this->input->post('biaya_adopsi');
	
		// Upload gambar1
		$config['upload_path'] = './uploads';
		$config['allowed_types'] = 'jpg|jpeg|png';
		$this->load->library('upload', $config);
		if($this->upload->do_upload('gambar1')){
		$data_file = $this->upload->data();
		$data_update = array(
			'jenis_kucing' => $jenis_kucing,
			'usia_kucing' => $usia_kucing,
			'jk_kucing' => $jk_kucing,
			'deskripsi' => $deskripsi,
			'biaya_adopsi' => $biaya_adopsi,
			'gambar1' => $data_file['file_name']
			);
			$this->model_pembayaran->update('kucing', $data_update,'id_kucing',$id);
		redirect('admin/kucing');
		} else {
			$data_update = array(
				'jenis_kucing' => $jenis_kucing,
				'usia_kucing' => $usia_kucing,
				'jk_kucing' => $jk_kucing,
				'deskripsi' => $deskripsi,
				'biaya_adopsi' => $biaya_adopsi
				);
				$this->model_pembayaran->update('kucing', $data_update,'id_kucing',$id);
			redirect('admin/kucing');
	
		}
	}*/

	public function insert_update()
{
    $id = $this->input->post('id_kucing');
    $jenis_kucing = $this->input->post('jenis_kucing');
    $usia_kucing = $this->input->post('usia_kucing');
    $jk_kucing = $this->input->post('jk_kucing');
    $deskripsi = $this->input->post('deskripsi');
    $biaya_adopsi = $this->input->post('biaya_adopsi');
    // Upload gambar1
    
    $this->load->library('upload', $config);
	if ($gambar1 == '') {
		// Tidak perlu melakukan apa-apa jika $gambar1 kosong
	} else {
		$config['upload_path'] = './gambar_kucing';
		$config['allowed_types'] = 'jpg|jpeg|png';
	
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('gambar1')) {
			echo "File tidak dapat diupload!";
		} else {
			$gambar1 = $this->upload->data('file_name');
		}
	}
    $data = array(
        'jenis_kucing' => $jenis_kucing,
        'usia_kucing' => $usia_kucing,
        'jk_kucing' => $jk_kucing,
        'deskripsi' => $deskripsi,
        'biaya_adopsi' => $biaya_adopsi,
        'gambar1' => $gambar1,
    );
    $where = array(
        'id_kucing' => $id
    );
    $this->model_pembayaran->update('kucing', $data, $where);
    redirect('admin/kucing');
}



	/*public function insert_update()
	{
		$id				= $this->input->post('id_kucing');
		$jenis_kucing = $this->input->post('jenis_kucing');
		$usia_kucing  = $this->input->post('usia_kucing');
		$jk_kucing    = $this->input->post('jk_kucing');
		$deskripsi 		= $this->input->post('deskripsi');
		$biaya_adopsi	= $this->input->post('biaya_adopsi');
		$gambar1	= $_FILES['gambar1']['name'];
		if ($gambar1 = '') {
		} else {
			$config['upload_path'] = './uploads';
			$config['allowed_types'] = 'jpg|jpeg|png';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar1')) {
				echo "File tidak dapat di upload!";
			} else {
				$data = array('upload_data' => $this->upload->data());
				$this->model_pembayaran->update_image($data);
			}
		}
		$gambar2	= $_FILES['gambar2']['name'];
		if ($gambar2 = '') {
		} else {
			$config['upload_path'] = './uploads';
			$config['allowed_types'] = 'jpg|jpeg|png';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar2')) {
				echo "File tidak dapat di upload!";
			} else {
				$data = array('upload_data' => $this->upload->data());
				$this->model_pembayaran->update_image($data);
			}
		}
		$gambar3	= $_FILES['gambar3']['name'];
		if ($gambar3 = '') {
		} else {
			$config['upload_path'] = './uploads';
			$config['allowed_types'] = 'jpg|jpeg|png';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar3')) {
				echo "File tidak dapat di upload!";
			} else {
				$ $data = array('upload_data' => $this->upload->data());
				$this->model_pembayaran->update_image($data);
			}
		}
		$gambar4	= $_FILES['gambar4']['name'];
		if ($gambar4 = '') {
		} else {
			$config['upload_path'] = './uploads';
			$config['allowed_types'] = 'jpg|jpeg|png';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar4')) {
				echo "File tidak dapat di upload!";
			} else {
				$data = array('upload_data' => $this->upload->data());
				$this->model_pembayaran->update_image($data);
			}
		}

		$data = array(
			'jenis_kucing' 	=> $jenis_kucing,
			'usia_kucing' 	=> $usia_kucing,
			'jk_kucing' 	=> $jk_kucing,
			'deskripsi' 	=> $deskripsi,
			'biaya_adopsi' 	=> $biaya_adopsi,
			'gambar1' 	=> $gambar1,
			'gambar2' 	=> $gambar2,
			'gambar3' 	=> $gambar3,
			'gambar4' 	=> $gambar4,
		);

		$where = array(
			'id_kucing' => $id
		);

		$this->model_pembayaran->update('kucing', $data, $where);
		redirect('admin/kucing');
	}*/

	public function delete($id)
	{
		$where = array('id_kucing' => $id);
		$this->model_pembayaran->delete($where, 'kucing');
		redirect('admin/kucing');
	}
}
