<?php 

class M_login extends CI_Model{	
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	
}//DISINI KITA GUNAKAN UNTUK MENGAMBIL DATA DARI DATABASE UNTUK MELAKUKAN LOGIN