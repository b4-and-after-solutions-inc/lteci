<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller
{

  public function index()
  {
    $cihead['Title'] = 'Some Title'; $cihead['Description'] = 'Some Description'; $cihead['Menu1'] = 'Dashboard';

		$this->load->view('includes/cihead', $cihead);
		$this->load->view('includes/cifoot');
  }

  public function table() {
    $cihead['Title'] = 'DataTable Test'; $cihead['Description'] = ''; $cihead['Menu1'] = '';

    $this->load->view('includes/cihead', $cihead);
    $this->load->view('table');
    $this->load->view('includes/cifoot');
  }

}
