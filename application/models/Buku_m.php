
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buku_m extends CI_Model
{
    public function getAllBuku()
    {
        $this->db->join('kategori', 'kategori.id_kategori=buku.id_kategori');
        return $this->db->get('buku')->result();
    }

    public function getBuku($id)
    {
        $this->db->join('kategori', 'kategori.id_kategori=buku.id_kategori');
        return $this->db->get_where('buku', ['id_buku' => $id])->row();
    }

    public function tambah()
    {
        $data = ['judul_buku' => $this->input->post('judul', true), 'deskripsi_buku' => $this->input->post('deskripsi', true), 'jumlah_buku' => $this->input->post('jumlah', true), 'cover_buku' => $_FILES['cover']['name'], 'id_kategori' => $this->input->post('kategori', true)];
        $this->db->insert('buku', $data);
    }

    public function hapus($id)
    {
        $this->db->delete('buku', ['id_buku' => $id]);
    }

    public function edit($id)
    {
        $cover_lama = $this->buku_m->getBuku($id)->cover_buku;
        if (($_FILES['cover']['name'] != '')) {
            $cover_baru = $_FILES['cover']['name'];
            unlink('uploads/' . $cover_lama);
            $data = ['judul_buku' => $this->input->post('judul', true), 'deskripsi_buku' => $this->input->post('deskripsi', true), 'jumlah_buku' => $this->input->post('jumlah', true), 'cover_buku' => $cover_baru, 'id_kategori' => $this->input->post('kategori', true)];
            $this->db->where('id_buku', $id);
            $this->db->update('buku', $data);
        } else {
            $cover_baru = $cover_lama;
            $data = ['judul_buku' => $this->input->post('judul', true), 'deskripsi_buku' => $this->input->post('deskripsi', true), 'jumlah_buku' => $this->input->post('jumlah', true), 'id_kategori' => $this->input->post('kategori', true)];
            $this->db->where('id_buku', $id);
            $this->db->update('buku', $data);
        }
    }
}
