<?php
defined('BASEPATH') or exit('no direct script acces allowed');

class User extends CI_Controller
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

        $this->load->view('user/index', $data);
    }

    public function profile()
    {
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['biodata'] = $this->ModelBiodata->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('user/profile', $data);
    }

    public function anggota()
    {
        $data['judul'] = 'Data Anggota';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->db->where('role_id', 1);
        $data['anggota'] = $this->db->get('user')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/anggota', $data);
        $this->load->view('templates/footer');
    }

    public function ubahProfil()
    {
        $data['judul'] = 'Ubah Profil';
        $data['user'] = $this->ModelUser->cekData(['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim', [
            'required' => 'Nama tidak boleh kosong'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/ubah-profile', $data);
            $this->load->view('templates/footer');
        } else {
            $nama = $this->input->post('nama', true);
            $email = $this->input->post('email', true);

            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['upload_path'] = './assets/img/profile/';
                $config['allowed_types'] = 'gif|jpg|png';
                // $config['max-size'] = '3000';
                // $config['max-width'] = '1024';
                // $config['max-height'] = '1000';
                $config['file_name'] = 'pro' . time();

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $gambar_lama = $data['user']['image'];
                    if ($gambar_lama != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/profile/' . $gambar_lama);
                    }

                    $gambar_baru = $this->upload->data('file_name');
                    $this->db->set('image', $gambar_baru);
                } else {
                }
            }

            $this->db->set('nama', $nama);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">
            profil berhasil diubah </div>');

            redirect('user');
        }
    }

    public function biodata()
    {
        if ($this->session->userdata('id')) {
            redirect('user');
        }

        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required', [
            'required' => 'Nama Belum diisi!!'
        ]);
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required', [
            'required' => 'Tempat Lahir Belum diisi!!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required', [
            'required' => 'Email Belum diisi!!'
        ]);
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required', [
            'required' => 'Tanggal Lahir Belum diisi!!'
        ]);
        $this->form_validation->set_rules('notelp', 'No Telepon', 'required', [
            'required' => 'No Telepon Belum diisi!!'
        ]);
        $this->form_validation->set_rules('agama', 'Agama', 'required', [
            'required' => 'Mohon diisi!!'
        ]);
        $this->form_validation->set_rules('jenjang', 'Jenjang', 'required', [
            'required' => 'Jenjang Belum diisi!!'
        ]);
        $this->form_validation->set_rules('thn_mulai', 'Tahun Mulai', 'required', [
            'required' => 'Tahun Mulai Belum diisi!!'
        ]);
        $this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required', [
            'required' => 'Pendidikan Belum diisi!!'
        ]);
        $this->form_validation->set_rules('thn_selesai', 'Tahun Selesai', 'required', [
            'required' => 'Tahun Selesai Belum diisi!!'
        ]);
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required', [
            'required' => 'Jurusan Belum diisi!!'
        ]);
        $this->form_validation->set_rules('negara', 'Negara', 'required', [
            'required' => 'Negara Belum diisi!!'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
            'required' => 'Alamat Belum diisi!!'
        ]);
        $this->form_validation->set_rules('provinsi', 'Provinsi', 'required', [
            'required' => 'Provinsi Belum diisi!!'
        ]);
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required', [
            'required' => 'Kecamatan Belum diisi!!'
        ]);
        $this->form_validation->set_rules('kelurahan', 'Kelurahan', 'required', [
            'required' => 'kelurahan Belum diisi!!'
        ]);
        $this->form_validation->set_rules('kode', 'Kode Pos', 'required', [
            'required' => 'negara Belum diisi!!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('user/biodata');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'tgl_lahir' => htmlspecialchars($this->input->post('tgl_lahir', true)),
                'notelp' => $this->input->post('notelp', true),
                'agama' => htmlspecialchars($this->input->post('agama', true)),
                'jenjang' => htmlspecialchars($this->input->post('jenjang', true)),
                'thn_mulai' => htmlspecialchars($this->input->post('thn_mulai', true)),
                'pendidikan' => htmlspecialchars($this->input->post('pendidikan', true)),
                'thn_selesai' => htmlspecialchars($this->input->post('thn_selesai', true)),
                'negara' => htmlspecialchars($this->input->post('negara', true)),
                'alamat' => htmlspecialchars($this->input->post('alamat', true)),
                'provinsi' => htmlspecialchars($this->input->post('provinsi', true)),
                'kecamatan' => htmlspecialchars($this->input->post('kecamatan', true)),
                'kelurahan' => htmlspecialchars($this->input->post('kelurahan', true)),
                'kode' => htmlspecialchars($this->input->post('kode', true))
            ];

            $this->ModelBiodata->simpanData($data); //menggunakan model

            $this->session->set_flashdata('message', '<div class="alert alert-success alert-message" role="alert">Pesan Anda Telah Terkirim!!</div>');
            redirect('user/biodata');
        }
    }
}
