<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller
{
	public function index($page='home')
	{
 		if(!file_exists(APPPATH.'views/pages/'.$page.'.php'))
 		{
 			show_404();
 		}
 		$data['title']=ucfirst($page);
 		$this->load->view('templates/header',$data);
 		$this->load->view('pages/'.$page,$data);
 		$this->load->view('templates/footer');
	}
	public function products()
	{
		/*
        $config["base_url"] = base_url() . "admin/";
$total_row = $this->pagination_model->record_count();
$config["total_rows"] = $total_row;
$config["per_page"] = 1;
$config['use_page_numbers'] = TRUE;
$config['num_links'] = $total_row;
$config['cur_tag_open'] = '&nbsp;<a class="current">';
$config['cur_tag_close'] = '</a>';
$config['next_link'] = 'Next';
$config['prev_link'] = 'Previous';

$this->pagination->initialize($config);
if($this->uri->segment(3)){
$page = ($this->uri->segment(3)) ;
}
else{
$page = 1;
}
$data["results"] = $this->pagination_model->fetch_data($config["per_page"], $page);
$str_links = $this->pagination->create_links();
$data["links"] = explode('&nbsp;',$str_links );

// View data according to array.
$this->load->view("pagination_view", $data);

		$this->pagination->initialize($config);
	   // $articles=$this->login->articleList($config['per_page'],$this->uri->segment(3));*/
 		$data['categories']=$this->ld_model->get_categories();

 		$data['products']=$this->ld_model->get_products();

        $data['condition']=1;
 		$this->load->view('templates/header');
 		$this->load->view('pages/products',$data);
 		$this->load->view('templates/footer');

	}

	public function view($id=NULL)
	{

 		$data['product']=$this->ld_model->get_products($id);

 	    if(empty($data['product']))
 	    {
 	    	show_404();
 	    }

 		$this->load->view('templates/header');
 		$this->load->view('pages/product',$data);
 		$this->load->view('templates/footer');

	}

	public function filter($id)
	{

 		$data['product']=$this->ld_model->get_products($id);
 		$category=$data['product']['category'];
 		$data['categories']=$this->ld_model->get_categories();
        if($data['product'])
        {
        	$data['condition']=1;
           $data['products']=$this->ld_model->get_categories($category);
 		   $this->load->view('templates/header');
 		   $this->load->view('pages/products',$data);
 		   $this->load->view('templates/footer');
        }
        else
        {
           $data['condition']=0;
           $this->session->set_flashdata('msg','There is no product in this category');
           $data['products']=$this->ld_model->get_categories($category);
 		   $this->load->view('templates/header');
 		   $this->load->view('pages/products',$data);
 		   $this->load->view('templates/footer');
        }

	}

	public function cart()
	{
		$rowid=$this->input->post('rowid');
		$data=['rowid'=>$rowid,'qty'=>0];
		$this->cart->update($data);

 		$this->load->view('templates/header');
 		$this->load->view('shop/cart',$data);
 		$this->load->view('templates/footer');

	}


	


}
?>