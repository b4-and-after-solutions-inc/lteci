<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Access extends CI_Controller
{

	public function index()
	{

	}

	public function error_404()
  {
    $cihead['Title'] = '404 Error'; $cihead['Description'] = ''; $cihead['Menu1'] = '';

		$this->load->view('includes/cihead', $cihead);
		$this->load->view('errors/html/error_404_lteci');
		$this->load->view('includes/cifoot');
  }

	public function login()
	{
		$this->load->view('login');
	}

}
