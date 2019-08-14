<?php
defined('BASEPATH') or exit('No direct script access allowed');
function is_login()
{
    $CI = &get_instance();
    $CI->load->library('session');
    $user_session = $CI->session->userdata('username');
    if ($user_session) {
        redirect('beranda');
    }
}
function is_not_login()
{
    $CI = &get_instance();
    $CI->load->library('session');
    $user_session = $CI->session->userdata('username');
    if (!$user_session) {
        redirect('auth/masuk');
    }
}
function selisih($kembali, $tempo)
{
    if (strtotime($kembali) > strtotime($tempo)) {
        $kembali = new DateTime($kembali);
        $tempo = new DateTime($tempo);

        $selisih = $kembali->diff($tempo);
        $hari = $selisih->format('%d');
        $denda = $hari * 2000;
    } else {
        $denda = 0;
    }
    return $denda;
}
