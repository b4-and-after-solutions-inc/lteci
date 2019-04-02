<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Access extends CI_Controller
{

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function test()
	{
		$this->load->view('includes/cihead');
		$this->load->view('includes/cifoot');
	}

}
