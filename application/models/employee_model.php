<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class employee_model extends CI_Model {

  public function __construct(){
  		$this->load->database();
  		date_default_timezone_set('Asia/Manila');
  }

  public function get_user(){
		$query = "SELECT u.id,u.user_name, concat(u.first_name,' ',u.last_name) as Fullname, b.business_name  FROM tbl_user u JOIN tbl_business b ON u.branch_id = b.business_id";
		$row = $this->db->query($query);
		return $row->result_array();
	}

}
