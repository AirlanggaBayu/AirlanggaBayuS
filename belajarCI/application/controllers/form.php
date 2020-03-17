
<?php 

class Form extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}

	function index(){
		$this->load->view('v_form');
	}

	function aksi(){
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('konfir_email','Konfirmasi Email','required');
     //ISI FORMNYA HARUS DIISI / TIDAK BOLEH KOSONG, JADI HARUS ADA VALIDASI "REQUIRED"
        if($this->form_validation->run() != false){
            echo "Form validation oke";
        }else{
            $this->load->view('v_form');
        }//UNTUK MENAMPILKAN KITA GET ATAU KITA VIEW DULU "V_FORM"
    }
}