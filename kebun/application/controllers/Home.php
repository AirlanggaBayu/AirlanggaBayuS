<?php

class Home extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
    }
    // function diatas digunakan untuk memanggil fungsi database
    public function index()
    {
        $data['judul'] = 'Halaman Home';
        $this->load->view('templates/header', $data);
        $this->load->view('home/index');
        $this->load->view('templates/footer');
        $this->load->view('v_home');

        //function index kita gunakan untuk memanggil halaman yang ingin kita tampilkan
    }
}
