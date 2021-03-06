<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class employee_model extends CI_Model
{

  public function __construct()
  {
  	date_default_timezone_set('Asia/Manila');
  }

  public function get_user()
  {
    $result = [];
    
		$sql = "SELECT u.id, u.firstname,u.lastname,u.username, b.business_name  FROM tbl_user u JOIN tbl_business b ON u.business_id = b.id";
		$query = $this->db->query($sql);

    foreach ($query->result_array() as $row)
    {
      $result[] = array (
        $row['id'],
        $row['firstname'],
        $row['lastname'],
        '<button class="btn btn-sm warning" onclick="putaka('.$row["id"].')"><i class="fa fa-view"></i> Butchtaw</button>'
      );

    }

		return $result;
	}

}
