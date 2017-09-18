<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_admin_fi extends CI_Model {
		
		public function all(){
			$hasil =$this->db->where('id_user',$this->get_logged_user_id())
							 ->get('founditem');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}

		public function all_cetak(){
			$hasil =$this->db->where('id_user',$this->get_logged_user_id())
							 ->where('cetak','c')
							 ->get('founditem');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}

		public function find ($id){
			$hasil = $this->db->where('id',$id)
							  ->limit(1)
							  ->get('founditem');
			if($hasil->num_rows() > 0){
				return $hasil->row();
			}else{
				return array();
			}
		}
		
		public function create($data_berita){
			$this->db->insert('founditem',$data_berita);
		}
		
		public function update($id, $data_berita){
			$this->db->where('id',$id)
					 ->update('founditem',$data_berita);
		}
		
		public function delete($id){
			$this->db->where('id',$id)
					 ->delete('founditem'); 
		}
		
		public function details($id){
			$hasil =$this->db->where('id',$id)
						 ->limit(1)
						 ->get('founditem');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
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

	public function cetak_found($id)
	{
		$hasil =$this->db
					 ->where('id',$id)
					 ->get('founditem');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else{
			return array();
		}
	}
		
}