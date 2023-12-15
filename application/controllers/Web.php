<?php

class Web extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('indexpage');
    }

    public function about()
    {
        $this->load->view('about');
    }

    public function contact()
    {
        if ($this->session->userdata('email')) {
            redirect('user');
        }

        $this->form_validation->set_rules('nama', 'Nama*', 'required', [
            'required' => 'Nama Belum diisi!!'
        ]);
        $this->form_validation->set_rules('email', 'E-mail*', 'required', [
            'required' => 'E-mail Belum diisi!!'
        ]);
        $this->form_validation->set_rules('no_telp', 'Nomor Telepon*', 'required|numeric', [
            'required' => 'Nomor Telepon Belum diisi!!',
            'numeric' => 'Yang anda masukan bukan angka'
        ]);
        $this->form_validation->set_rules('pesan', 'Pesan Anda*', 'required', [
            'required' => 'Pesan Belum diisi!!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('contact');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'no_telp' => $this->input->post('no_telp', true),
                'pesan' => htmlspecialchars($this->input->post('pesan', true))
            ];

            $this->ModelPesan->simpanData($data); //menggunakan model

            $this->session->set_flashdata('message', '<div class="alert alert-success alert-message" role="alert">Pesan Anda Telah Terkirim!!</div>');
            redirect('web/contact');
        }
    }

    public function lowongan()
    {
        $this->load->view('lowongan');
    }
}
