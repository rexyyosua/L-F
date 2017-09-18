<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_admin_db extends CI_Model {
		
		public function all_li(){
			$hasil =$this->db->get('lostitem');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}


		public function all_fi($id){
			$hasil =$this->db->where('id',$id)
							 ->get('founditem');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}


		public function all_usr(){
			$hasil =$this->db
							 ->where('groups','2')
							 ->get('user');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}

		public function all_adm(){
			$hasil =$this->db
							 ->where('groups','1')
							 ->get('user');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}

		public function all_cl($id){
			$hasil =$this->db->where('id',$id)
							 ->get('claim');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}

		public function all_komen(){
			$hasil =$this->db
							 ->get('komentar');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}

		public function all_komen_filter($id){
			$hasil =$this->db->where('id_convs',$id)

							 ->get('komentar');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}

		public function find_li($id){
			$hasil = $this->db->where('id',$id)
							  ->limit(1)
							  ->get('lostitem');
			if($hasil->num_rows() > 0){
				return $hasil->row();
			}else{
				return array();
			}
		}

		public function find_fi($id){
			$hasil = $this->db->where('id',$id)
							  ->limit(1)
							  ->get('founditem');
			if($hasil->num_rows() > 0){
				return $hasil->row();
			}else{
				return array();
			}
		}

		public function find_usr($id){
			$hasil = $this->db->where('id',$id)
							  ->limit(1)
							  ->get('user');
			if($hasil->num_rows() > 0){
				return $hasil->row();
			}else{
				return array();
			}
		}

		public function find_adm($id){
			$hasil = $this->db->where('id',$id)
							  ->limit(1)
							  ->get('user');
			if($hasil->num_rows() > 0){
				return $hasil->row();
			}else{
				return array();
			}
		}

		public function find_clm($id){
			$hasil = $this->db->where('id',$id)
							  ->limit(1)
							  ->get('claim');
			if($hasil->num_rows() > 0){
				return $hasil->row();
			}else{
				return array();
			}
		}
		
		
		public function create_user($data_user){
			$this->db->insert('user',$data_user);
		}
		public function create_admin($data_user){
			$this->db->insert('user',$data_user);
		}
		
		public function update($id, $data_berita){
			$this->db->where('id',$id)
					 ->update('founditem',$data_berita);
		}
		
		public function delete($id){
			$this->db->where('id',$id)
					 ->delete('founditem'); 
		}

		public function update_usr($id, $data_berita){
			$this->db->where('id',$id)
					 ->update('user',$data_berita);
		}
		
		public function delete_usr($id){
			$this->db->where('id',$id)
					 ->delete('user'); 
		}

		public function update_adm($id, $data_berita){
			$this->db->where('id',$id)
					 ->update('user',$data_berita);
		}
		
		public function delete_adm($id){
			$this->db->where('id',$id)
					 ->delete('user'); 
		}

		public function update_li($id, $data_berita){
			$this->db->where('id',$id)
					 ->update('lostitem',$data_berita);
		}
		
		public function delete_cl($id){
			$this->db->where('id',$id)
					 ->delete('claim'); 
		}
		
		
		public function details($id){
			$hasil =$this->db->where('id_berita',$id)
						 ->limit(1)
						 ->get('berita');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}

		public function update_status_penemu($id, $data_berita){
			$this->db->where('id',$id)
					 ->update('founditem',$data_berita);
		}

		public function update_status_penerima($id, $data_berita){
			$this->db->where('id',$id)
					 ->update('claim',$data_berita);
		}

			public function process()
	{
		$komen = $this->input->post('komen');
		$komentar = array(
			'komen'				=> $komen,
			'tanggal'			=> date('Y-m-d H:i:s'),
			'id_user'			=> $this->get_logged_user_id(),
			'id_user_penerima'	=> set_value('user'),
			'nama_user'			=> $this->get_logged_user_name(),
			'notif'				=> 'n',
			'id_convs'			=> set_value('user')
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
}
		
