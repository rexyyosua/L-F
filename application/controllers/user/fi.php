	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fi extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if ($this->session->userdata('group') !='2'){
			$this->session->set_flashdata('error','Sorry you are not logged in !');
			redirect('login');
		}
		
		
		//load model -> model_admin_fi
		$this->load->model('model_admin_fi');
		$this->load->model('model_admin_clm');
	}

	public function index()
		
	{
		$data['clm'] =$this->model_admin_clm->all();
		$data['fi'] =$this->model_admin_fi->all();
		$data['ntf'] = $this->model_admin_clm->ntf();
		$data['msg'] = $this->model_admin_clm->ntf_msg();
		$data['hst'] = $this->model_admin_clm->hst();
		$config['total_rows'] = $data['msg'];
		$this->load->view('profile_found',$data);
	}
	
	public function create(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('judul', 'Judul ', 'required');
		
		
		//$this->form_validation->set_rules('userfile', 'Product Image', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('backend/form_tambah_fi');
		}else{
			
			$config['upload_path'] = './images/slider';
			$config['allowed_types'] = 'jpg|png';
			$config['max_size']	= '200000000';
			$config['max_width']  = '2000000000';
			$config['max_height']  = '20000000000';

			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload())
			{
				$this->load->view('backend/form_tambah_fi');
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
				'cetak'				=> 'c',
				'gambar'			=> $gambar['file_name']
			);
			$this->model_admin_fi->create($data_berita);
			redirect('user/fi/report_found_item');
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
			$data['product'] = $this->model_admin_fi->find($id);
			$this->load->view('backend/form_edit_fi', $data);
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
					$data['ada'] = $this->model_admin_fi->find($id);
					$this->load->view('backend/form_edit_fi', $data);
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
						'tgl_update'		=> date('Y-m-d H:i:s'),
						'id_user'			=> $this->get_logged_user_id(),
						'nama_user'			=> $this->get_logged_user_name(),
						'notif'				=> 'n',
						'gambar'			=> $gambar['file_name']
					);
					$this->model_admin_fi->update($id,$data_berita);
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
					'tgl_update'		=> date('Y-m-d H:i:s'),
					'id_user'			=> $this->get_logged_user_id(),
					'nama_user'			=> $this->get_logged_user_name(),
					'notif'				=> 'n'
					
				);
				$this->model_admin_fi->update($id,$data_berita);
				redirect('user/fi');
			}
		
		}

	}
	
	public function delete($id){
		$this->model_admin_fi->delete($id);
		redirect('user/fi'); 
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

	public function cetak_found($id)
	{	
		$this->db->where('id',$id)->update('founditem',array('cetak'=>'t'));
		$data['rpt'] = $this->model_admin_fi->cetak_found($id);
		$this->load->library('pdf',$data);
		$this->load->view('report_found_cetak',$data);
	}

	public function report_found_item(){
		$data['ctk'] =$this->model_admin_fi->all_cetak();
		$this->load->view('report_found_item',$data);
	}
}
 