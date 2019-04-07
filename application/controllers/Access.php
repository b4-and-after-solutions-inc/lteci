<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Access extends CI_Controller
{
	// TODO Testing
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function test()
	{
		$cihead['Title'] = 'Some Title'; $cihead['Description'] = 'Some Description';
		
		$this->load->view('includes/cihead', $cihead);
		$this->load->view('includes/cifoot');
	}

}
