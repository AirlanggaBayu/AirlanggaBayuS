<?php 
 
class M_data extends CI_Model{
	function ambil_data(){
		return $this->db->get('user');
	}
}
//DISINI KITA AKAN MENGAMBIL DATA USER, OLEH KARENA ITU KITA GET(USER)