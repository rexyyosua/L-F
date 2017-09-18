<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_opk extends CI_Model {

		public function all_ilang(){
			$hasil =$this->db->where('notif','n')
							 ->order_by('tgl_hilang','DESC')
							 ->get('lostitem');

			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}


		public function ctg_ilang ($ctg){
			$hasil = $this->db->where('notif','n')
							  ->where('kategori',$ctg)
							  ->get('lostitem');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}

		public function all_nemu(){
			$hasil =$this->db->where('notif','n')
							 ->order_by('tgl_hilang','DESC')
							 ->get('founditem');

			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}


		public function ctg_nemu ($ctg){
			$hasil = $this->db->where('notif','n')
							  ->where('kategori',$ctg)
							  ->get('founditem');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}
		
		public function find_komen ($k_id){
			$hasil = $this->db->where('berita_id',$k_id)
							  ->get('komentar');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}
		public function find_user($u_id){
			$hasil = $this->db->where('id',$this->get_logged_user_id())
							  ->get('user');
			if($hasil->num_rows()>0){
				return $hasil->result();
			}else{
				return array();
			}
		}
		public function get_logged_user_id(){
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