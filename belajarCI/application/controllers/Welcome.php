<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Welcome extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('html');
	}
 // KITA JUGA AKAN MEMANGGIL HELPER HTML
	public function index(){
		$this->load->view('welcome');
	}
}
//DI FUNCTION INDEX KITA AKAN MENAMPILKAN "WELCOME" JADI KITA HARUS MENULISKAN "WELCOME" DI VIEWNYA