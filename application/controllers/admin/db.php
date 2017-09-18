<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Db extends CI_Controller {
	public function __construct(){
		parent::__construct();
		
		if ($this->session->userdata('group') !='1'){
			$this->session->set_flashdata('error','Sorry you are not logged in !');
			redirect('login');
		}
		//load model -> model_admin_db
		$this->load->model('model_admin_db');
	}

	public function index()
		
	{
		$id = $this->input->post('cari');
		$data['fi'] =$this->model_admin_db->all_fi($id);
		$data['li'] =$this->model_admin_db->all_li();
		$data['usr'] =$this->model_admin_db->all_usr();
		$data['adm'] =$this->model_admin_db->all_adm();
		$this->load->view('backend/admin/dashboard',$data);
	}
	
	public function confirm()
	{
		$id = $this->input->post('cari');
		$data['clm'] = $this->model_admin_db->all_cl($id);
		$this->load->view('backend/admin/confirmation',$data);
	}

	public function message()
	{
		$data['usr'] = $this->model_admin_db->all_usr();
		$data['msg'] = $this->model_admin_db->all_komen();
		$this->load->view('backend/admin/discuss',$data);
	}
	

	public function message_filter($id)
	{
		$data['usr'] = $this->model_admin_db->all_usr();
		$data['msg'] = $this->model_admin_db->all_komen_filter($id);
		$this->load->view('backend/admin/discuss',$data);
	}

	public function update_li($id){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('judul', 'judul', 'required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
		
		
		//$this->form_validation->set_rules('userfile', 'Product Image', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$data['product'] = $this->model_admin_db->find_li($id);
			$this->load->view('backend/admin/edit-lostitems', $data);
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
					$data['ada'] = $this->model_admin_db->find_li($id);
					$this->load->view('backend/admin/edit-lostitems', $data);
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
						'tgl_update'		=> date('Y-m-d H:i:s'),
						'tgl_hilang'		=> set_value('tgl_hilang'),
						'notif'				=> 'n',
						'gambar'			=> $gambar['file_name']
					);
					$this->model_admin_db->update_li($id,$data_berita);
					redirect('admin/db');
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
					'tgl_update'		=> date('Y-m-d H:i:s'),
					'notif'				=> 'n'
					
				);
				$this->model_admin_db->update_li($id,$data_berita);
				redirect('admin/db');
			}
		
		}

	}
	
	public function delete_cl($id){
		$this->model_admin_db->delete_cl($id);
		redirect('admin/db'); 
	}



	public function update($id){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('judul', 'judul', 'required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
		
		
		//$this->form_validation->set_rules('userfile', 'Product Image', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$data['product'] = $this->model_admin_db->find_fi($id);
			$this->load->view('backend/admin/edit-founditems', $data);
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
					$data['ada'] = $this->model_admin_db->find_fi($id);
					$this->load->view('backend/admin/edit-founditems', $data);
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
						'notif'				=> 'n',
						'gambar'			=> $gambar['file_name']
					);
					$this->model_admin_db->update($id,$data_berita);
					redirect('admin/db');
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
					'tgl_update'		=> date('Y-m-d H:i:s'),
					'notif'				=> 'n'
					
				);
				$this->model_admin_db->update($id,$data_berita);
				redirect('admin/db');
			}
		
		}

	}
	
	public function delete($id){
		$this->model_admin_db->delete($id);
		redirect('admin/db'); 
	}



	public function create_user(){
		$this->form_validation->set_rules('username', 'User Name', 'required');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('password1','Re-type password','required|matches[password]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		//$this->form_validation->set_rules('userfile', 'Product Image', 'required');
		
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('backend/admin/adduser');
		}else{
				$data_users = array(
				'username'		=> set_value('username'),
				'nama'			=> set_value('name'),
				'npm'			=> set_value('npm'),
				'no_tlp'		=> set_value('no_tlp'),
				'password'		=> set_value('password'),
				'email'			=> set_value('email'),
				'groups'		=> '2'
			);
			$this->model_admin_db->create_user($data_users);
			redirect('admin/db');
			}
			
			
		}
 
 	public function create_admin()
 	{
		$this->form_validation->set_rules('username', 'User Name', 'required');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('password1','Re-type password','required|matches[password]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		//$this->form_validation->set_rules('userfile', 'Product Image', 'required');
		
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('backend/admin/addadmin');
		}else{
				$data_users = array(
				'username'		=> set_value('username'),
				'nama'			=> set_value('name'),
				'password'		=> set_value('password'),
				'email'			=> set_value('email'),
				'groups'		=> '1'
			);
			$this->model_admin_db->create_admin($data_users);
			redirect('admin/db');
			}
			
			
		}

		public function update_usr($id){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('no_tlp', 'No Phone', 'required');
		
		
		//$this->form_validation->set_rules('userfile', 'Product Image', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$data['product'] = $this->model_admin_db->find_usr($id);
			$this->load->view('backend/admin/edituser', $data);
		}else{
			if($_FILES['userfile']['name'] !=''){
				$config['upload_path'] = './images/slider';
				$config['allowed_types'] = 'jpg|png';
				$config['max_size']	= '2000000';
				$config['max_width']  = '2000';
				$config['max_height']  = '2000';

				$this->load->library('upload', $config);
			
				if ( ! $this->upload->do_upload())
				{
					$data['ada'] = $this->model_admin_db->find_usr($id);
					$this->load->view('backend/admin/edituser', $data);
				}else{
					$gambar = $this->upload->data();
					$data_berita = array(
						'nama'		=> set_value('name'),
						'npm'		=> set_value('npm'),
						'username'	=> set_value('username'),
						'password'	=> set_value('password'), 
						'email'		=> set_value('email'),
						'no_tlp'	=> set_value('no_tlp'),
						'foto'		=> $gambar['file_name']
					);
					$this->model_admin_db->update_usr($id,$data_berita);
					redirect('admin/db');
				}
			}else{
				$data_berita = array(
					'nama'		=> set_value('name'),
					'email'		=> set_value('email'),
					'no_tlp'	=> set_value('no_tlp'),
					'npm'		=> set_value('npm'),
					'username'	=> set_value('username'),
					'password'	=> set_value('password'),
				);
				$this->model_admin_db->update_usr($id,$data_berita);
				redirect('admin/db');
			}
		
		}

	}
	
	public function delete_usr($id){
		$this->model_admin_db->delete_usr($id);
		redirect('admin/db'); 
	}

	public function update_adm($id){
	$this->load->library('form_validation');
	$this->form_validation->set_rules('name', 'Name', 'required');
	$this->form_validation->set_rules('email', 'email', 'required');
	
	
	//$this->form_validation->set_rules('userfile', 'Product Image', 'required');

	if ($this->form_validation->run() == FALSE)
	{
		$data['product'] = $this->model_admin_db->find_adm($id);
		$this->load->view('backend/admin/editadmin', $data);
	}
	else{
		$data_berita = array(
			'nama'		=> set_value('name'),
			'email'		=> set_value('email'),
			'username'	=> set_value('username'),
			'password'	=> set_value('password'),
		);
		$this->model_admin_db->update_adm($id,$data_berita);
		redirect('admin/db');
	}
	
	}

	public function delete_adm($id){
		$this->model_admin_db->delete_adm($id);
		redirect('admin/db'); 
	}

	public function edit_status_penemu($id)
	
	{	
	$this->load->library('form_validation');
	$this->form_validation->set_rules('sp', 'Status penemu', 'required');
	
	//$this->form_validation->set_rules('userfile', 'Product Image', 'required');

	if ($this->form_validation->run() == FALSE)
	{
		$data['product'] = $this->model_admin_db->find_fi($id);
		$this->load->view('backend/admin/edit_status', $data);
	}
	else{
		$data_berita = array(
			'status'		=> set_value('sp'),
			
		);
		$this->model_admin_db->update_status_penemu($id,$data_berita);
		redirect('admin/db');
	}
	}

	public function edit_status_penerima($id)
	
	{	
		$this->load->library('form_validation');
	$this->form_validation->set_rules('sp', 'Status penemu', 'required');
	
	//$this->form_validation->set_rules('userfile', 'Product Image', 'required');

	if ($this->form_validation->run() == FALSE)
	{
		$data['product'] = $this->model_admin_db->find_clm($id);
		$this->load->view('backend/admin/edit_status_p', $data);
	}
	else{
		$data_berita = array(
			'status_penerima'		=> set_value('sp'),
			
		);
		$this->model_admin_db->update_status_penerima($id,$data_berita);
		redirect('admin/db/confirm');
	}
	}

	public function send_msg()
	{
		$this->model_admin_db->process();
		redirect('admin/db/message');
	}
	

}

 