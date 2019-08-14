<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori_m extends CI_Model
{
    public function getAllKategori()
    {
        return $this->db->get('kategori')->result();
    }
    public function getKategori($id)
    {
        return $this->db->get_where('kategori', ['id_kategori' => $id])->row();
    }
    public function tambah()
    {
        $data['nama_kategori'] = $this->input->post('nama_kategori', true);
        $this->db->insert('kategori', $data);
    }
    public function hapus($id)
    {
        $this->db->delete('kategori', ['id_kategori' => $id]);
    }
    public function edit()
    {
        $id = $this->input->post('id', true);
        $data['nama_kategori'] = $this->input->post('nama_kategori');
        $this->db->where('id_kategori', $id);
        $this->db->update('kategori', $data);
    }
}
