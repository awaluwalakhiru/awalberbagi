<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_m extends CI_Model
{
    public function getUsers()
    {
        $users = $this->db->get('petugas')->result();
        return $users;
    }

    public function getUser()
    {
        $username = $this->input->post('username', true);
        $user = $this->db->get_where('petugas', ['username' => $username])->row();
        return $user;
    }

    public function daftar()
    {
        $data = [
            'username' => strtolower($this->input->post('username', true)),
            'nama_petugas' => $this->input->post('username', true),
            'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT)
        ];
        $result = $this->db->insert('petugas', $data);
        return $result;
    }
}
