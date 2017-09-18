	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mf extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if ($this->session->userdata('group') !='2'){
			$this->session->set_flashdata('error','Sorry you are not logged in !');
			redirect('login');
		}
		
		
		//load model -> Model_admin_li
		$this->load->model('Model_admin_mf');
			
	}

	public function index()
		
	{
		$this->load->model('Model_admin_mf');
		$getkategori = $this->Model_admin_mf->getkategori();
		$getlokasi = $this->Model_admin_mf->getlokasi();
		$this->load->view('match_found',['getkategori'=>$getkategori, 'getlokasi'=>$getlokasi]);
	}
	public function getRecords()
	{
		$this->load->model('Model_admin_mf');
		$ktg = $this->input->post('kategori');
		$lks = $this->input->post('lokasi');
		$tgl = $this->input->post('tgl_hilang');
		$getkategori = $this->Model_admin_mf->getkategori();
		$getlokasi = $this->Model_admin_mf->getlokasi();
		$gettgl = $this->Model_admin_mf->gettgl();
		$records = $this->Model_admin_mf->getRecords($ktg, $lks, $tgl);
		
		$this->load->view('match_foundd',['getkategori'=>$getkategori, 'getlokasi'=>$getlokasi, 'gettgl'=>$gettgl, 'records'=>$records]);
	}
}
	

 