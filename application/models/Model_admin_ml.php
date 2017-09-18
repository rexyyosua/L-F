<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_admin_ml extends CI_Model {
		
	public function getkategori(){
		$hasil =$this->db->select('kategori')
						 ->get('lostitem');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else{
			return array();
		}
	}

	public function geterror(){
			$hasil =$this->db->where('notif','z')
							 ->order_by('tgl_hilang','DESC')
							 ->get('lostitem');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}

	public function getlokasi(){
		$hasil =$this->db->select('lokasi')
						 ->get('lostitem');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else{
			return array();
		}
	}

	public function gettgl(){
		$hasil =$this->db->select('tgl_hilang')
						 ->get('lostitem');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else{
			return array();
		}
	}

	public function getRecords($ktg,$lks,$tgl,$warna){
		$hasil = $this->db
						  ->where('status !=','Sudah Dikembalikan')
						  ->where(['kategori'=>$ktg])
						  ->or_where(['lokasi'=>$lks])
						  ->or_where(['warna'=>$warna])
						  ->or_where(['tgl_hilang'=>$tgl])
						  ->get('founditem');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else{
			return array();
		}
	}		
		
}