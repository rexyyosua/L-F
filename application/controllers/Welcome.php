<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_opk');
	}

	public function index()
	{

		$this->load->view('welcome_message');
	}

	public function category()
	{

		if ($this->session->userdata('group') !='2'){
			$this->session->set_flashdata('error','Sorry you are not logged in !');
			redirect('login');
		}
		else{

		$data['ilang'] = $this->model_opk->all_ilang();
		$data['nemu'] = $this->model_opk->all_nemu();		
		$this->load->view('category',$data);
	}}

	public function categoory($ctg)
	{
		$data['nemu'] = $this->model_opk->ctg_nemu($ctg);
		$data['ilang'] = $this->model_opk->ctg_ilang($ctg);
		$this->load->view('category',$data);
	}

	public function header()
	{
		$data['ntf'] = $this->model_opk->hdr();
		$this->load->view('header1',$data);
	}

}
