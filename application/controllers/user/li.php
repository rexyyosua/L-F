	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Li extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if ($this->session->userdata('group') !='2'){
			$this->session->set_flashdata('error','Sorry you are not logged in !');
			redirect('login');
		}
		
		
		//load model -> Model_admin_li
		$this->load->model('Model_admin_li');
		$this->load->model('Model_admin_cl');
			
	}

	public function index()
		
	{
		$data['cl'] =$this->Model_admin_cl->all();
		$data['li'] =$this->Model_admin_li->all();
		$data['ntf'] = $this->Model_admin_cl->ntf();
		$data['msg'] = $this->Model_admin_cl->ntf_msg();
		$data['hst'] = $this->Model_admin_cl->hst();
		$config['total_rows'] = $data['ntf'];
		$this->load->view('profile_lost',$data);
	}
	
	public function create(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('judul', 'Judul ', 'required');
		
		
		//$this->form_validation->set_rules('userfile', 'Product Image', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('backend/form_tambah_li');
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
				$this->load->view('backend/form_tambah_li');
			}else{
				$gambar = $this->upload->data();
				$data_berita = array(
				'kategori'			=> set_value('kategori'),
				'lokasi'			=> set_value('lokasi'),
				'lokasi_lengkap'	=> set_value('lokasi_lengkap'),
				'warna'				=> set_value('warna'),
				'merek'				=> set_value('merek'),
				'status'			=> set_value('sedang di proses'),
				'judul'				=> set_value('judul'),
				'deskripsi'			=> set_value('deskripsi'),
				'tgl_hilang'		=> set_value('tgl_hilang'),
				'tgl_update'		=> date('Y-m-d H:i:s'),
				'id_user'			=> $this->get_logged_user_id(),
				'nama_user'			=> $this->get_logged_user_name(),
				'notif'				=> 'n',
				'gambar'			=> $gambar['file_name']
			);
			$this->Model_admin_li->create($data_berita);
			redirect('user/li');
			}}else{
				$data_berita = array(
					'kategori'			=> set_value('kategori'),
					'lokasi'			=> set_value('lokasi'),
					'lokasi_lengkap'	=> set_value('lokasi_lengkap'),
					'warna'				=> set_value('warna'),
					'merek'				=> set_value('merek'),
					'status'			=> set_value('sedang di proses'),
					'judul'				=> set_value('judul'),
					'deskripsi'			=> set_value('deskripsi'),
					'tgl_hilang'		=> set_value('tgl_hilang'),
					'tgl_update'		=> date('Y-m-d H:i:s'),
					'id_user'			=> $this->get_logged_user_id(),
					'nama_user'			=> $this->get_logged_user_name(),
					'notif'				=> 'n'
					
				);
				$this->Model_admin_li->create($data_berita);
				redirect('user/li');
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
			$data['product'] = $this->Model_admin_li->find($id);
			$this->load->view('backend/form_edit_li', $data);
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
					$data['ada'] = $this->Model_admin_li->find($id);
					$this->load->view('backend/form_edit_li', $data);
				}else{
					$gambar = $this->upload->data();
					$data_berita = array(
						'kategori'			=> set_value('kategori'),
						'lokasi'			=> set_value('lokasi'),
						'lokasi_lengkap'	=> set_value('lokasi_lengkap'),
						'warna'				=> set_value('warna'),
						'merek'				=> set_value('merek'),
						'status'			=> set_value('sedang di proses'),
						'judul'				=> set_value('judul'),
						'deskripsi'			=> set_value('deskripsi'),
						'tgl_update'		=> date('Y-m-d H:i:s'),
						'tgl_hilang'		=> set_value('tgl_hilang'),
						'id_user'			=> $this->get_logged_user_id(),
						'nama_user'			=> $this->get_logged_user_name(),
						'notif'				=> 'n',
						'gambar'			=> $gambar['file_name']
					);
					$this->Model_admin_li->update($id,$data_berita);
					redirect('user/li');
				}
			}else{
				$data_product = array(
					'kategori'			=> set_value('kategori'),
					'lokasi'			=> set_value('lokasi'),
					'lokasi_lengkap'	=> set_value('lokasi_lengkap'),
					'warna'				=> set_value('warna'),
					'merek'				=> set_value('merek'),
					'status'			=> set_value('sedang di proses'),
					'judul'				=> set_value('judul'),
					'deskripsi'			=> set_value('deskripsi'),
					'tgl_hilang'		=> set_value('tgl_hilang'),
					'tgl_update'		=> date('Y-m-d H:i:s'),
					'id_user'			=> $this->get_logged_user_id(),
					'nama_user'			=> $this->get_logged_user_name(),
					'notif'				=> 'n'
					
				);
				$this->Model_admin_li->update($id,$data_berita);
				redirect('user/li');
			}
		
		}

	}
	
	public function delete($id){
		$this->Model_admin_li->delete($id);
		redirect('user/li'); 
	}

		public function get_logged_user_id()
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
}
 