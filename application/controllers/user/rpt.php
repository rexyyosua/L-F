	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rpt extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if ($this->session->userdata('group') !='2'){
			$this->session->set_flashdata('error','Sorry you are not logged in !');
			redirect('login');
		}
		
		
		//load model -> model_admin_rpt
		$this->load->model('model_admin_rpt');
		$this->load->model('Model_admin_cl');
	}

	public function index()
		
	{
		$data['msg'] = $this->Model_admin_cl->ntf_msg();
		$data['hst'] = $this->Model_admin_cl->hst();
		$data['rpt'] =$this->model_admin_rpt->all();
		$this->load->view('profile_report',$data);
	}
	
	public function create($id){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('judul', 'Judul ', 'required');
		
		
		//$this->form_validation->set_rules('userfile', 'Product Image', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$data['product'] = $this->model_admin_rpt->find_id_barang($id);
			$this->load->view('backend/form_tambah_rpt',$data);
		}else{
			
			$config['upload_path'] = './images/slider';
			$config['allowed_types'] = 'jpg|png';
			$config['max_size']	= '200000000';
			$config['max_width']  = '2000000000';
			$config['max_height']  = '20000000000';

			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload())
			{
				$this->load->view('backend/form_tambah_rpt');
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
				'id_user'			=> $this->get_logged_user_id($id),
				'nama_user'			=> $this->get_logged_user_name(),
				'notif'				=> 'n',
				'gambar'			=> $gambar['file_name']
			);
			$this->model_admin_rpt->create($data_berita);
			redirect('user/fi');
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
			$data['product'] = $this->model_admin_rpt->find($id);
			$this->load->view('backend/form_edit_rpt', $data);
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
					$data['ada'] = $this->model_admin_rpt->find($id);
					$this->load->view('backend/form_edit_rpt', $data);
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
						'id_user'			=> $this->get_logged_user_id(),
						'nama_user'			=> $this->get_logged_user_name(),
						'notif'				=> 'n',
						'gambar'			=> $gambar['file_name']
					);
					$this->model_admin_rpt->update($id,$data_berita);
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
					'id_user'			=> $this->get_logged_user_id(),
					'nama_user'			=> $this->get_logged_user_name(),
					'notif'				=> 'n'
					
				);
				$this->model_admin_rpt->update($id,$data_berita);
				redirect('user/fi');
			}
		
		}

	}
	
	public function delete($id){
		$this->model_admin_rpt->delete($id);
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

	public function cetak($id)
		
	{

		$data['rpt'] =$this->model_admin_rpt->cetak($id);
		$this->load->library('pdf',$data);
		$this->load->view('profile_report_cetak',$data);
	}

	public function found_report($id)
	{	
		$data['ctk'] = $this->Model_admin_cl->all_cetak();
		$this->load->view('report_found',$data);
	}

	public function lost_report(){
		$this->load->view('report_lost');
	}
	
	public function inbox(){
		$data['msg'] = $this->Model_admin_cl->ntf_msg();
		$data['hst'] = $this->Model_admin_cl->hst();
		$data['komen'] = $this->model_admin_rpt->all_komen();
		$this->load->view('chat',$data);
	}
	public function outbox(){
		$data['msg'] = $this->Model_admin_cl->ntf_msg();
		$data['hst'] = $this->Model_admin_cl->hst();
		$data['komen'] = $this->model_admin_rpt->all_outbox();
		$this->load->view('chat_outbox_list',$data);
	}

	public function detail_inbox($id){
		$data['komen'] = $this->model_admin_rpt->find_komen($id);
		$this->db->where('id',$id)->update('komentar',array('notif'=>'y'));
		$this->load->view('chat-detail',$data);
	}
	public function detail_outbox($id){
		$data['komen'] = $this->model_admin_rpt->find_komen($id);
		$this->db->where('id',$id)->update('komentar',array('notif'=>'y'));
		$this->load->view('chat_outbox',$data);
	}
	public function delete_msg($id){
		$this->model_admin_rpt->delete_msg($id);
		redirect('user/rpt/inbox'); 
	}

	public function history(){
		$data['msg'] = $this->Model_admin_cl->ntf_msg();
		$data['hst'] = $this->Model_admin_cl->hst();
		$data['history'] = $this->model_admin_rpt->history();
		$this->load->view('history',$data);
	}

	public function cetak_claim($id)
	{	
		$this->db->where('id',$id)->update('claim',array('cetak'=>'t'));
		$data['rpt'] = $this->model_admin_rpt->cetak_claim($id);
		$this->load->library('pdf',$data);
		$this->load->view('report_claim_cetak',$data);
	}

	public function box_message($id)
	{	
		$this->load->view('message_box');
	}

}
 