<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konten extends CI_Controller
{

	public function portfolio1()
	{
		$this->load->view('konten/portfolio1');
	}

	public function portfolio2()
	{
		$this->load->view('konten/portfolio2');
	}
}
