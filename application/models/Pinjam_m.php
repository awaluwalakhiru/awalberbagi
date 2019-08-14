<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pinjam_m extends CI_Model
{
    public function getAll()
    {
        $this->db->join('buku', 'buku.id_buku=pinjam.id_buku');
        $this->db->join('anggota', 'anggota.id_anggota=pinjam.id_anggota');
        $this->db->join('kembali', 'kembali.id_pinjam=pinjam.id_pinjam');
        return $this->db->get('pinjam')->result();
    }
}
