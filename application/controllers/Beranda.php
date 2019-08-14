<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        is_not_login();
        $this->template->load('beranda/index');
    }
}
