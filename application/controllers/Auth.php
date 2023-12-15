<?php
defined('BASEPATH') or exit('no direct script acces allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('user');
        }
        $this->form_validation->set_rules('email', 'Alamat Email', 'required|trim|valid_email', [
            'required' => 'Email Harus Diiisi!',
            'valid_email' => 'Email Tidak Benar!!'
        ]);
        $this->form_validation->set_rules('password', 'password', 'required|trim', [
            'required' => 'Password Harus Diisi!'
        ]);
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'login';
            $data['user'] = '';

            $this->load->view('auth/login');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = htmlspecialchars($this->input->post('email', true));
        $password = $this->input->post('password', true);
        $user = $this->ModelUser->cekData(['email' => $email])->row_array();
        //jika user ada
        if ($user) {
            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);

                    if ($user['role_id'] == 1) {
                        redirect('admin');
                    } else {
                        if ($user['image'] == 'default.jpg') {
                            $this->session->set_flashdata(
                                'pesan',
                                '<div class="alert alert-info alert-message" role="alert">Silahkan
                            Ubah Profile Anda Untuk Ubah Photo Profil</div>'
                            );
                        }
                        redirect('user');
                    }
                } else {
                    $this->session->set_flashdata(
                        'pesan',
                        '<div class="alert alert-info alert-message" role="alert">Password
                    Salah!!</div>'
                    );
                    redirect('autentifikasi');
                }
            } else {
                $this->session->set_flashdata(
                    'pesan',
                    '<div class="alert alert-info alert-message" role="alert">User
                belum diaktivasi</div>'
                );
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-info alert-message" role="alert">Email tidak
                terdaftar!!</div>'
            );
            redirect('auth');
        }
    }

    public function registrasi()
    {
        if ($this->session->userdata('email')) {
            redirect('user');
        }

        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required', [
            'required' => 'Nama Belum Diisi!'
        ]);

        $this->form_validation->set_rules('email', 'Alamat Email', 'required|trim|valid_email|is_unique[user.email]', [
            'valid_email' => 'Email Tidak Benar!',
            'required' => 'Email Belum Diisi!',
            'is_unique' => 'Email Sudah Terdaftar'
        ]);

        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password Tidak Sama!',
            'min_length' => 'Password Terlalu Pendek'
        ]);

        $this->form_validation->set_rules('password2', 'Repeat Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Registrasi Member';
            $this->load->view('auth/registrasi');
        } else {
            $email = $this->input->post('email', true);
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($email),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 0,
                'tanggal_input' => time()
            ];

            $this->ModelUser->simpanData($data);

            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-succes alert-message" role="alert">Selamat!! akun member
            anda sudah dibuat. Silahkan Aktivasi Akun Anda</div>'
            );
            redirect('auth');
        }
    }

    public function logout()
    {
        session_start();
        session_destroy();

        redirect('web');
    }
}
