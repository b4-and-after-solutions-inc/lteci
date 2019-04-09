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

}
