<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('user_m');
    }

    public function daftar()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[petugas.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|matches[password2]|min_length[4]');
        $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'required|trim|matches[password]');

        $this->form_validation->set_message('required', '{field} harus diisi.');
        $this->form_validation->set_message('is_unique', '{field} sudah ada harap diganti.');
        $this->form_validation->set_message('matches', '{field} harus sesuai dengan {param}.');
        $this->form_validation->set_message('min_length', '{field} minimal berisi {param} karakter.');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/auth_header');
            $this->load->view('auth/daftar');
            $this->load->view('templates/auth_footer');
        } else {
            $query = $this->user_m->daftar();
            if ($query) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Selamat!</strong> Anda telah terdaftar silahkan masuk.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Maaf!</strong> Anda gagal mendaftar silahkan ulangi lagi.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
            }
            redirect('auth/daftar');
        }
    }

    public function masuk()
    {
        is_login();
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[4]');

        $this->form_validation->set_message('required', '{field} harus diisi.');
        $this->form_validation->set_message('min_length', '{field} minimal {param} karakter.');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/auth_header');
            $this->load->view('auth/masuk');
            $this->load->view('templates/auth_footer');
        } else {
            $hasil = $this->user_m->getUser();
            $username = $this->input->post('username', true);
            $password = $this->input->post('password', true);
            if ($hasil->username == $username) {
                $cek_password = password_verify($password, $hasil->password);
                if ($cek_password) {
                    $data = [
                        'id' => $hasil->id_petugas,
                        'username' => $hasil->username
                    ];
                    $this->session->set_userdata($data);
                    redirect('beranda');
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Maaf!</strong> Password yang anda masukkan tidak sesuai coba lagi.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
                    redirect('auth/masuk');
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Maaf!</strong> Username belum terdaftar.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
                redirect('auth/masuk');
            }
        }
    }

    public function keluar()
    {
        $this->session->unset_userdata('username', 'id_petugas');
        redirect('auth/masuk');
    }
}
