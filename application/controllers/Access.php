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

	public function get_names()
	{
		$result = array();
		$result["data"] = [["3","pelms","boogreet","pboog"],["4","tong","ass","tass"],["5","tata","boorneek","tboor"]];
		header('Content-Type: application/json');
		echo json_encode($result);
	}

	public function get_names_2()
	{
		$result = array();
		$result["data"] = [["6","felmar","llano","pboog"],["7","gyrome","tomas","tass"],["8","darren","comador","tboor"],["9","ej","pascual","ej"],["10","kenn","sagun","kenn"]];

		header('Content-Type: application/json');
		echo json_encode($result);
	}

}
