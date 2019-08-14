<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_not_login();
        $this->load->model('kategori_m');
        $this->load->library('form_validation');
    }
    public function data()
    {
        $data['kategori'] = $this->kategori_m->getAllKategori();
        $this->template->load('kategori/data', $data);
    }
    public function f_tambah()
    {
        $data['judul'] = 'Kategori';
        $this->template->load('kategori/f_tambah', $data);
    }
    public function tambah()
    {
        $this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'required|trim|is_unique[kategori.nama_kategori]');
        $this->form_validation->set_message('required', '{field} harus diisi.');
        $this->form_validation->set_message('is_unique', '{field} telah ada mohon diganti.');

        if ($this->form_validation->run() == FALSE) {
            $this->f_tambah();
        } else {
            $this->kategori_m->tambah();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Selamat!</strong> Data anda berhasil ditambahkan.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('kategori');
        }
    }
    public function hapus($id)
    {
        $this->kategori_m->hapus($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Selamat!</strong> Data anda berhasil dihapus.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Perhatian!</strong> Data anda gagal dihapus.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
        }
        redirect('kategori');
    }
    public function f_edit($id)
    {
        $data['pId'] = $this->kategori_m->getKategori($id);
        $this->template->load('kategori/f_edit', $data);
    }
    public function edit()
    {
        $this->kategori_m->edit();
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Selamat!</strong> Data anda berhasil diedit.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Perhatian!</strong> Data anda gagal diedit.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
        }
        redirect('kategori');
    }
}
