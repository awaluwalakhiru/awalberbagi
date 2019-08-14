<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_not_login();
        $this->load->model('anggota_m');
    }

    public function data()
    {
        $data['all'] = $this->anggota_m->allAnggota();
        $this->template->load('anggota/data', $data);
    }

    public function hapus($id)
    {
        $this->anggota_m->hapusId($id);
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
        redirect('anggota');
    }

    public function tambah()
    {
        $this->anggota_m->tambah();
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Selamat!</strong> Data anda berhasil ditambahkan.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>perhatian!</strong> Data anda gagal ditambahkan.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>');
        }
        redirect('anggota');
    }

    public function edit($id)
    {
        $this->anggota_m->editId($id);
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
        redirect('anggota');
    }

    public function ambil($id)
    {
        $ambil = $this->anggota_m->anggotaId($id)->row();
        echo json_encode($ambil);
    }
}
