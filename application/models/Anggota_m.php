<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota_m extends CI_Model
{
    public function allAnggota()
    {
        $data = $this->db->get('anggota')->result();
        return $data;
    }

    public function anggotaId($id)
    {
        $data = $this->db->get_where('anggota', ['id_anggota' => $id]);
        return $data;
    }

    public function hapusId($id)
    {
        $this->db->delete('anggota', ['id_anggota' => $id]);
    }

    public function tambah()
    {
        $data = [
            "nama_anggota" => $this->input->post('nama', true),
            "alamat_anggota" => $this->input->post('alamat', true),
            "jk_anggota" => $this->input->post('jenis', true),
            "hp_anggota" =>  $this->input->post('telepon', true)
        ];
        $this->db->insert('anggota', $data);
    }

    public function editId($id)
    {
        $data = [
            "id_anggota" => $this->input->post('id', true),
            "nama_anggota" => $this->input->post('nama', true),
            "alamat_anggota" => $this->input->post('alamat', true),
            "jk_anggota" => $this->input->post('jenis', true),
            "hp_anggota" =>  $this->input->post('telepon', true)
        ];
        $this->db->where('id_anggota', $id);
        $this->db->update('anggota', $data);
    }
}
