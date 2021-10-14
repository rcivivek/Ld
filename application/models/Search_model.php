<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_model extends CI_Model
{
	public function get_search($search)
	{
       $q=$this->db->query("select*from products where tags like '%$search%'");
       return $q->result_array();
	}
}
?>