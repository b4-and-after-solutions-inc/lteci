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
		$this->load->view('table');
		$this->load->view('includes/cifoot');
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
