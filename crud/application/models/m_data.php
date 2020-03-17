<?php 

class M_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('user');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
}//DISINI KITA AKAN MENGAMBIL DATA DARI DATABASENYA, DAN ADA BEBERAPA FUNCTION SEPERTI DIATAS SEPERTI:
/**
 * 1.TAMPILKAN
 * 2. INPUT
 * 3. EDIT
 * 4. UPDATE
 * 5. DELETE
 */