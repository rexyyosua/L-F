<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_admin_mf extends CI_Model {
		
	public function getkategori(){
		$hasil =$this->db->select('kategori')
						 ->get('founditem');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else{
			return array();
		}
	}

	public function getlokasi(){
		$hasil =$this->db->select('lokasi')
						 ->get('founditem');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else{
			return array();
		}
	}


	public function gettgl(){
		$hasil =$this->db->select('tgl_hilang')
						 ->get('founditem');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else{
			return array();
		}
	}

	
	public function getRecords($ktg,$lks,$tgl){
		$hasil = $this->db->where(['kategori'=>$ktg])
						  ->where(['lokasi'=>$lks])
						  ->where(['tgl_hilang'=>$tgl])
						  ->get('founditem');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else{
			return array();
		}
	}		
		
}