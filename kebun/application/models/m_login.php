<?php

class M_login extends CI_Model
{
    function cek_login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }
}//di function cek login kita mengecek apakah data yang digunakan untuk login sudah benar/ tidak. 
//setelah itu akan dipanggil ke controller login.
