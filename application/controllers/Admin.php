<?php
defined('BASEPATH') or exit('no direct script acces allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('ModelUser'));
        $this->load->helper(array('url'));
        // cek_login();
    }

    public function index()
    {
        $data['judul'] = 'Profil Saya';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['user'] = $this->ModelUser->cekData(['nama' => $this->session->userdata('nama')])->row_array();

        $this->load->view('admin/index', $data);
    }

    public function profile()
    {
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['biodata'] = $this->ModelBiodata->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('admin/profile', $data);
    }

    public function data()
    {
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['biodata'] = $this->ModelBiodata->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('admin/data');
    }
}
