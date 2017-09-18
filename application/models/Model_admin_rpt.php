<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_admin_rpt extends CI_Model {
		
		public function all(){
			$hasil =$this->db
							 ->where('id_user',$this->get_logged_barang_id())
							 ->where('notif','y')
							 ->get('claim');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}
		public function all_komen(){
			$hasil =$this->db
							 ->where('id_user_penerima',$this->get_logged_barang_id())
							 ->get('komentar');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}

		public function all_outbox(){
			$hasil =$this->db
							 ->where('id_user',$this->get_logged_barang_id())
							 ->get('komentar');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}

		public function history(){
			$hasil =$this->db
							 ->where('id_user_claim',$this->get_logged_barang_id())
							 ->get('claim');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}
		
		public function find_komen ($id){
			$hasil = $this->db->where('id',$id)
							  ->limit(1)
							  ->get('komentar');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}

		public function find ($id){
			$hasil = $this->db->where('id',$id)
							  ->limit(1)
							  ->get('claim');
			if($hasil->num_rows() > 0){
				return $hasil->row();
			}else{
				return array();
			}
		}

		
		public function find_id_barang ($id){
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
			$this->db->insert('claim',$data_berita);
		}
		
		public function update($id, $data_berita){
			$this->db->where('id',$id)
					 ->update('claim',$data_berita);
		}
		
		public function delete($id){
			$this->db->where('id',$id)
					 ->delete('claim'); 
		}
		
		public function details($id){
			$hasil =$this->db->where('id',$id)
						 ->limit(1)
						 ->get('claim');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}

		public function get_logged_barang_id()
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

	public function cetak($id){
			$hasil =$this->db
							 ->where('id_user',$this->get_logged_barang_id())
							 ->where('notif','y')
							 ->where('id',$id)
							 ->get('claim');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}

	public function cetak_claim($id)
	{
		$hasil =$this->db
					 ->where('id',$id)
					 ->get('claim');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else{
			return array();
		}
	}

	public function get_logged_id_barang($id)
	{
		$hasil = $this->db
						->select('id')
						->where('id_barang',$id)
						->limit(1)
						->get('claim');
		if($hasil->num_rows()>0){
			return $hasil->row()->id;
		}else{
			return 0;
		}
	}

	public function delete_msg($id){
			$this->db->where('id',$id)
					 ->delete('komentar'); 
		}


		
}