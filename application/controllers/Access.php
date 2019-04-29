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

	function get_names()
	{
		$result = array();
		$result["draw"] = $this->input->post('draw');
		$result["data"] = [];
		$result["recordsTotal"] = count($result["data"]);
		$result["recordsFiltered"] = count($result["data"]);
		header('Content-Type: application/json');
		echo json_encode($result);
	}

	function users()
	{
		$result = array();
		$result["draw"] = $this->input->post('draw');
		$result["data"] = $this->employee_model->get_user();
		$result["recordsTotal"] = count($result["data"]);
		$result["recordsFiltered"] = count($result["data"]);
		header('Content-Type: application/json');
		echo json_encode($result);
	}

	function validatecredentials()
	{
		$this->output->set_content_type("application/json")
		->set_output( json_encode( $this->access_model->validatecredentials( $this->input->post() ) ) );
	}

}
