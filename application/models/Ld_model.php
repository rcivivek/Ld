<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ld_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	public function get_products($id=FALSE)
	{
		if($id==FALSE)
		{
			$q=$this->db->get('products');
			return $q->result_array();
		}

		$q=$this->db->get_where('products',array('id'=>$id));
		return $q->row_array();
	}
    
    public function get_touch($id)
    {
       return $this->db->where('id',$id)
    	          ->delete('contact');
    }



	public function get_categories($category=NULL)
	{
		if($category==NULL)
		{
			$q=$this->db->get('category');
			return $q->result_array();
		}

		$q=$this->db->get_where('products',array('category'=>$category));
		return $q->result_array();
	}
	
	public function getProduct($array)
	{
      $this->load->database();
      return $this->db->insert('products',$array);
	}

    public function get_updated($array)
    {
    	return $this->db->where('id',$array['id'])
    	            ->update('products',$array);
    }


	public function del_product($id)
	{
	   return  $this->db->where('id',$id)
	             ->delete('products');

	}

	public function get_contact($array)
	{
		return $this->db->insert('contact',$array);
	}
	public function get_report($array)
	{
		$q=$this->db->get_where('place_order',['email'=>$array['email'],'productid'=>$array['productid']]);
			return $q->num_rows();
	}

	public function get_contacts()
	{
		$q=$this->db->get('contact');
		return $q->result_array();
	}
	public function place_order($array)
	{
		return $this->db->insert($array);
	}
	public function getValidate($username,$password)
	{
		$this->load->database();
		$q=$this->db->where(['admin'=>$username,'password'=>$password])
		         ->get('admin');
		return $q->num_rows();
	}
	public function num_rows(){

    	$q=$this->db->query("select*from products");
    	return $q->num_rows();
      }

}
?>