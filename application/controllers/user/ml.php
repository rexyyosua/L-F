	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ml extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if ($this->session->userdata('group') !='2'){
			$this->session->set_flashdata('error','Sorry you are not logged in !');
			redirect('login');
		}
		
		
		//load model -> Model_admin_li
		$this->load->model('Model_admin_ml');
			
	}

	public function index()
		
	{
		$this->load->model('Model_admin_ml');
		$ktg = $this->input->post('kategori');
		$lks = $this->input->post('lokasi');
		$tgl = $this->input->post('tgl_hilang');
		$warna = $this->input->post('warna');
		$records = $this->Model_admin_ml->getRecords($ktg, $lks, $tgl, $warna);
		
		$this->load->view('register_lost_a',['records'=>$records]);
	}
	
}
	

 