<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_cek extends CI_Model {
	
	public function process()
	{
		$komen = $this->input->post('komen');
		$komentar = array(
			'komen'			=> $komen,
			'tanggal'		=> date('Y-m-d H:i:s'),
			'id_user'		=> $this->get_logged_user_id(),
			'nama_user'		=> $this->get_logged_user_name(),
			'notif'			=> 'n',
			'id_convs'	=> $this->get_logged_user_id(),
		);
		$this->db->insert('komentar', $komentar);
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


	public function get_user_by_id($user_id)
	{
		$hasil = $this->db->where('id',$user_id)
						  ->get('user');
						  
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else{
			return false;
		}
	}
	
}