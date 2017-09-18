<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_admin_cl extends CI_Model {
		
		public function all(){
			$hasil =$this->db->where('id_user',$this->get_logged_id())
							 ->where('status','lost')
							 ->where('notif','n')
							 ->get('claim');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}

		public function all_cetak(){
			$hasil =$this->db->where('cetak','n')
							 ->limit(1)
							 ->get('claim');
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
							  ->get('lostitem');
			if($hasil->num_rows() > 0){
				return $hasil->row();
			}else{
				return array();
			}
		}

		public function ntf()
		{
			$hasil = $this->db->where('id_user',$this->get_logged_id())
							  ->where('notif','n')
							  ->where('status','lost')
							  ->get('claim');
				return $hasil->num_rows();

		}

		public function ntf_msg()
		{
			$hasil = $this->db->where('id_user_penerima',$this->get_logged_id())
							  ->where('notif','n')
							  ->get('komentar');
				return $hasil->num_rows();

		}

		public function hst()
		{
			$hasil = $this->db->where('id_user_claim',$this->get_logged_id())
							  ->where('cetak','c')
							  ->get('claim');
			return $hasil->num_rows();
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

		public function get_logged_id()
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
		
}