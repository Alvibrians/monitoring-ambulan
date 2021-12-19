<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		// $this->load->view('welcome_message');
		$this->load->view('template_landing/sidebar');
        $this->load->view('template_landing/header');
        $this->load->view('template_landing/footer');
	}
}
