<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clm extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if ($this->session->userdata('group') !='2'){
			$this->session->set_flashdata('error','Sorry you are not logged in !');
			redirect('login');
		}
		
		
		//load model -> model_admin_clm
		$this->load->model('model_admin_clm');
	}

	public function index()
		
	{
		$data['clm'] =$this->model_admin_clm->all();
		$this->load->view('profile_found',$data);
	}

	public function konfirm($id)
	{
		
		$this->db->where('id',$id)->update('claim',array('notif'=>'y','status_penerima'=>'Barang di konfirmasi','status_penemu'=>'Barang di konfirmasi'));
		$this->db->where('id',$this->get_logged_id_barang($id))->update('founditem',array('notif'=>'y'));
		redirect('user/rpt');
	}
	
	public function create($id){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('judul', 'Judul ', 'required');
		
		
		//$this->form_validation->set_rules('userfile', 'Product Image', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$data['product'] = $this->model_admin_clm->find_id_barang($id);
			$this->load->view('backend/form_tambah_clm',$data);
		}else{
			if($_FILES['userfile']['name'] !=''){
			$config['upload_path'] = './images/slider';
			$config['allowed_types'] = 'jpg|png';
			$config['max_size']	= '200000000';
			$config['max_width']  = '2000000000';
			$config['max_height']  = '20000000000';

			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload())
			{
				$this->load->view('backend/form_tambah_clm');
			}else{
				$gambar = $this->upload->data();
				$data_berita = array(
				'kategori'			=> set_value('kategori'),
				'lokasi'			=> set_value('lokasi'),
				'lokasi_lengkap'	=> set_value('lokasi_lengkap'),
				'warna'				=> set_value('warna'),
				'merek'				=> set_value('merek'),
				'judul'				=> set_value('judul'),
				'deskripsi'			=> set_value('deskripsi'),
				'tgl_hilang'		=> set_value('tgl_hilang'),
				'status'			=> 'found',
				'id_barang'			=> $id,
				'cetak'				=> 'c',
				'id_user'			=> $this->get_logged_user_id($id),
				'id_user_claim'		=> $this->get_logged_id(),
				'nama_user'			=> $this->get_logged_user_name(),
				'notif'				=> 'n',
				'gambar'			=> $gambar['file_name'],
				'kategori_f'		=> $this->get_logged_kategori($id),
				'lokasi_f'			=> $this->get_logged_lokasi($id),
				'lokasi_lengkap_f'	=> $this->get_logged_lokasi_lengkap($id),
				'warna_f'			=> $this->get_logged_warna($id),
				'merek_f'			=> $this->get_logged_merek($id),
				'deskripsi_f'		=> $this->get_logged_deskripsi($id),
				'tgl_hilang_f'		=> $this->get_logged_tgl_hilang($id),
				'nama_user_f'		=> $this->get_logged_nama_user($id),
				'gambar_f'			=> $this->get_logged_gambar($id),
			);
			$this->model_admin_clm->create($data_berita);
			$data['product'] = $this->model_admin_clm->find_id_barang($id);
			redirect('user/rpt/lost_report/');
			}	
		}else{
			$data_berita = array(
				'kategori'			=> set_value('kategori'),
				'lokasi'			=> set_value('lokasi'),
				'lokasi_lengkap'	=> set_value('lokasi_lengkap'),
				'warna'				=> set_value('warna'),
				'merek'				=> set_value('merek'),
				'judul'				=> set_value('judul'),
				'deskripsi'			=> set_value('deskripsi'),
				'tgl_hilang'		=> set_value('tgl_hilang'),
				'status'			=> 'found',
				'id_barang'			=> $id,
				'cetak'				=> 'c',
				'id_user'			=> $this->get_logged_user_id($id),
				'id_user_claim'		=> $this->get_logged_id(),
				'nama_user'			=> $this->get_logged_user_name(),
				'notif'				=> 'n',
				'kategori_f'		=> $this->get_logged_kategori($id),
				'lokasi_f'			=> $this->get_logged_lokasi($id),
				'lokasi_lengkap_f'	=> $this->get_logged_lokasi_lengkap($id),
				'warna_f'			=> $this->get_logged_warna($id),
				'merek_f'			=> $this->get_logged_merek($id),
				'deskripsi_f'		=> $this->get_logged_deskripsi($id),
				'tgl_hilang_f'		=> $this->get_logged_tgl_hilang($id),
				'nama_user_f'		=> $this->get_logged_nama_user($id),
				'gambar_f'			=> $this->get_logged_gambar($id),
				);
			$this->model_admin_clm->create($data_berita);
			$data['product'] = $this->model_admin_clm->find_id_barang($id);
			redirect('user/rpt/lost_report/');
			}	
	}
}
	
	public function update($id){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('judul', 'judul', 'required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
		
		
		//$this->form_validation->set_rules('userfile', 'Product Image', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$data['product'] = $this->model_admin_clm->find($id);
			$this->load->view('backend/form_edit_clm', $data);
		}else{
			if($_FILES['userfile']['name'] !=''){
				$config['upload_path'] = './images/slider';
				$config['allowed_types'] = 'jpg|png';
				$config['max_size']	= '200000000';
				$config['max_width']  = '20000000000';
				$config['max_height']  = '2000000000';

				$this->load->library('upload', $config);
			
				if ( ! $this->upload->do_upload())
				{
					$data['ada'] = $this->model_admin_clm->find($id);
					$this->load->view('backend/form_edit_clm', $data);
				}else{
					$gambar = $this->upload->data();
					$data_berita = array(
						'kategori'			=> set_value('kategori'),
						'lokasi'			=> set_value('lokasi'),
						'lokasi_lengkap'	=> set_value('lokasi_lengkap'),
						'warna'				=> set_value('warna'),
						'merek'				=> set_value('merek'),
						'judul'				=> set_value('judul'),
						'deskripsi'			=> set_value('deskripsi'),
						'tgl_hilang'		=> set_value('tgl_hilang'),
						'status'			=> 'found',
						'id_barang'			=> $this->get_logged_barang_id(),
						'id_user'			=> $this->get_logged_user_id($id),
						'id_user_claim'		=> $this->get_logged_id(),
						'nama_user'			=> $this->get_logged_user_name(),
						'notif'				=> 'n',
						'gambar'			=> $gambar['file_name']
					);
					$this->model_admin_clm->update($id,$data_berita);
					redirect('user/fi');
				}
			}else{
				$data_product = array(
					'kategori'			=> set_value('kategori'),
					'lokasi'			=> set_value('lokasi'),
					'lokasi_lengkap'	=> set_value('lokasi_lengkap'),
					'warna'				=> set_value('warna'),
					'merek'				=> set_value('merek'),
					'judul'				=> set_value('judul'),
					'deskripsi'			=> set_value('deskripsi'),
					'tgl_hilang'		=> set_value('tgl_hilang'),
					'status'			=> 'found',
					'id_barang'			=> $this->get_logged_barang_id(),
					'id_user'			=> $this->get_logged_user_id($id),
					'id_user_claim'		=> $this->get_logged_id(),
					'nama_user'			=> $this->get_logged_user_name(),
					'notif'				=> 'n'
					
				);
				$this->model_admin_clm->update($id,$data_berita);
				redirect('user/fi');
			}
		
		}

	}
	
	public function delete($id){
		$this->model_admin_clm->delete($id);
		redirect('user/fi'); 
	}

	public function get_logged_user_id($id)
	{
		$hasil = $this->db
						->select('id_user')
						->where('id',$id)
						->limit(1)
						->get('founditem');
		if($hasil->num_rows()>0){
			return $hasil->row()->id_user;
		}else{
			return 0;
		}
	}

	public function get_logged_id_barang($id)
	{
		$hasil = $this->db
						->select('id_barang')
						->where('id',$id)
						->limit(1)
						->get('claim');
		if($hasil->num_rows()>0){
			return $hasil->row()->id_barang;
		}else{
			return 0;
		}
	}

	public function get_logged_kategori($id)
	{
		$hasil = $this->db
						->select('kategori')
						->where('id',$id)
						->limit(1)
						->get('founditem');
		if($hasil->num_rows()>0){
			return $hasil->row()->kategori;
		}else{
			return 0;
		}
	}

	public function get_logged_lokasi($id)
	{
		$hasil = $this->db
						->select('lokasi')
						->where('id',$id)
						->limit(1)
						->get('founditem');
		if($hasil->num_rows()>0){
			return $hasil->row()->lokasi;
		}else{
			return 0;
		}
	}

	public function get_logged_lokasi_lengkap($id)
	{
		$hasil = $this->db
						->select('lokasi_lengkap')
						->where('id',$id)
						->limit(1)
						->get('founditem');
		if($hasil->num_rows()>0){
			return $hasil->row()->lokasi_lengkap;
		}else{
			return 0;
		}
	}

	public function get_logged_warna($id)
	{
		$hasil = $this->db
						->select('warna')
						->where('id',$id)
						->limit(1)
						->get('founditem');
		if($hasil->num_rows()>0){
			return $hasil->row()->warna;
		}else{
			return 0;
		}
	}

	public function get_logged_merek($id)
	{
		$hasil = $this->db
						->select('merek')
						->where('id',$id)
						->limit(1)
						->get('founditem');
		if($hasil->num_rows()>0){
			return $hasil->row()->merek;
		}else{
			return 0;
		}
	}

	public function get_logged_deskripsi($id)
	{
		$hasil = $this->db
						->select('deskripsi')
						->where('id',$id)
						->limit(1)
						->get('founditem');
		if($hasil->num_rows()>0){
			return $hasil->row()->deskripsi;
		}else{
			return 0;
		}
	}

	public function get_logged_tgl_hilang($id)
	{
		$hasil = $this->db
						->select('tgl_hilang')
						->where('id',$id)
						->limit(1)
						->get('founditem');
		if($hasil->num_rows()>0){
			return $hasil->row()->tgl_hilang;
		}else{
			return 0;
		}
	}
	public function get_logged_gambar($id)
	{
		$hasil = $this->db
						->select('gambar')
						->where('id',$id)
						->limit(1)
						->get('founditem');
		if($hasil->num_rows()>0){
			return $hasil->row()->gambar;
		}else{
			return 0;
		}
	}
	public function get_logged_nama_user($id)
	{
		$hasil = $this->db
						->select('nama_user')
						->where('id',$id)
						->limit(1)
						->get('founditem');
		if($hasil->num_rows()>0){
			return $hasil->row()->nama_user;
		}else{
			return 0;
		}
	}

	public function get_logged_id()
	{
		$hasil = $this->db
						->select('id')
						->where('username',$this->session->userdata('username'))
						->limit(1)
						->get('user');
		if($hasil->num_rows()>0){
			return $hasil->row()->id;
		}else{
			return 0;
		}
	}


	public function get_logged_user_name()
	{
		$hasil = $this->db
						->select('nama')
						->where('username',$this->session->userdata('username'))
						->limit(1)
						->get('user');
		if($hasil->num_rows()>0){
			return $hasil->row()->nama;
		}else{
			return 0;
		}
	}

	public function tolak($id)
	{
		$komentar = array(
		'komen'				=> 'Konfirmasi yang anda lakukan di tolak karena barang tidak sesuai',
		'tanggal'			=> date('Y-m-d H:i:s'),
		'id_user'			=> $this->get_logged_id(),
		'nama_user'			=> $this->get_logged_user_name(),
		'id_user_penerima'	=> $this->get_logged_user_penerima($id),
		'notif'				=> 'n',
		);
		$this->db->insert('komentar', $komentar);
		$this->db->where('id',$id)->update('claim',array('notif'=>'t'));
		redirect('user/fi');
	}
		
	public function get_logged_user_penerima($id)
	{
		$hasil = $this->db
						->select('id_user_claim')
						->where('id',$id)
						->limit(1)
						->get('claim');
		if($hasil->num_rows()>0){
			return $hasil->row()->id_user_claim;
		}else{
			return 0;
		}
	}

}
 