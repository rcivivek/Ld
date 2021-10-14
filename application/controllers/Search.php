<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Search extends CI_Controller
{
	public function index()
	{
		$search=$this->input->post('search');

        $data['search']=$search;
 		$data['categories']=$this->ld_model->get_categories();

 		$data['products']=$this->search_model->get_search($search);

        $data['condition']=1;
 		$this->load->view('templates/header');
 		$this->load->view('pages/products',$data);
 		$this->load->view('templates/footer');

    }
}
?>