<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buku extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_not_login();
        $this->load->model('buku_m');
        $this->load->library('form_validation');
        $this->load->helper('form');
    }

    public function data()
    {
        $data['buku'] = $this->buku_m->getAllBuku();
        $this->template->load('buku/data', $data);
    }

    public function f_tambah()
    {
        $this->load->model('kategori_m');
        $data['kategori'] = $this->kategori_m->getAllKategori();
        $this->template->load('buku/tambah', $data);
    }

    public function f_edit($id)
    {
        $this->load->model('kategori_m');
        $data['kategori'] = $this->kategori_m->getAllKategori();
        $data['buku'] = $this->buku_m->getBuku($id);
        $this->template->load('buku/edit', $data);
    }

    public function tambah()
    {
        $this->form_validation->set_rules('judul', 'Judul', 'trim|required|is_unique[buku.judul_buku]');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'trim|required|numeric|integer|is_natural');
        $this->form_validation->set_rules('kategori', 'Kategori', 'trim|required');

        $this->form_validation->set_message('required', '{field} harus diisi');
        $this->form_validation->set_message('is_unique', '{field} sudah ada harap diganti');
        $this->form_validation->set_message('numeric,integer,is_natural', '{field} harus berupa {param}');

        if ($this->form_validation->run() == FALSE) {
            $this->f_tambah();
        } else {
            $this->buku_m->tambah();
            if ($this->db->affected_rows() > 0) {
                if (isset($_FILES['cover']['name'])) {
                    $config['upload_path'] = './uploads/';
                    $config['allowed_types'] = 'gif|jpeg|jpg|png';

                    $this->load->library('upload', $config);

                    $this->upload->do_upload('cover');
                }
                $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Selamat!</strong> Data anda berhasil ditambahkan.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
                redirect('buku/data');
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Perhatian!</strong> Data anda gagal ditambahkan.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
                redirect('buku/f_tambah');
            }
        }
    }

    public function hapus($id)
    {
        $data['buku'] = $this->buku_m->getBuku($id);
        $nama = $data['buku']->cover_buku;
        $this->buku_m->hapus($id);
        if ($this->db->affected_rows() > 0) {
            unlink('uploads/' . $nama);
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
        redirect('buku/data');
    }

    public function edit()
    {
        $id = $this->input->post('id_buku', true);

        $this->buku_m->edit($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Selamat!</strong> Data anda berhasil diedit.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            if ($_FILES['cover']['name'] != '') {
                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'gif|jpeg|jpg|png';

                $this->load->library('upload', $config);

                $this->upload->do_upload('cover');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Perhatian!</strong> Data anda gagal diedit.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        }
        redirect('buku/data');
    }
}
