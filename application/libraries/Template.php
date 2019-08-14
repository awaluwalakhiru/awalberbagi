<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Template
{
    public function load($konten = '', $data = [], $return = false)
    {
        $CI = &get_instance();
        $CI->load->view('templates/header');
        $CI->load->view($konten, $data, $return);
        $CI->load->view('templates/footer');
    }
}
