<?php

defined('BASEPATH') OR exit('No direct script access allowed');

  class Admin extends CI_Controller
  {
  	public function __construct()
  	{
  		parent::__construct();
  		if(!$this->session->userdata('admin'))
  		{
  			header("Location:".base_url('valid_admin'));
  		}
  	}
  	public function index($page='dashboard')
	{
 		if(!file_exists(APPPATH.'views/admin/'.$page.'.php'))
 		{
 			show_404();
 		}


    $data['categories']=$this->ld_model->get_categories();
 		$data['title']=ucfirst($page);
 		$this->load->view('admin/templates/header');
 		$this->load->view('admin/'.$page,$data);
 		$this->load->view('admin/templates/footer');
	}
  public function dashboard()
  {
    if($this->input->get('id')!=" ")
    {
     $this->ld_model->get_touch($this->input->get('id'));
    }
    $data['categories']=$this->ld_model->get_categories();
    $data['title']='Dashboard';
    $data['contacts']=$this->ld_model->get_contacts();
    $this->load->view('admin/templates/header');
    $this->load->view('admin/dashboard',$data);
    $this->load->view('admin/templates/footer');

  }
  public function del_contact()
  {
    $id=$this->input->post('id');
    echo "<script> var a; a=confirm('Are you sure to delete this?'); console.log(a);</script>";
  }


  public function product()
  {

    // $this->form_validation->set_rules('name','Username','required|alpha');
    // $this->form_validation->set_rules('description','Description','required|alpha');

    // $this->form_validation->set_rules('price','Price','required|alpha');
    // $this->form_validation->set_rules('category','Category','alpha|required');

    // $this->form_validation->set_rules('pfile','File','required');
    if(!$this->form_validation->run())
    {
      $data['name']=$this->input->post('name');
      $data['description']=$this->input->post('description');
      $data['price']=$this->input->post('price');
      $data['tags']=$this->input->post('tags');
      $data['category']=$this->input->post('category');
      $config['upload_path']   = './assets/images/';
                $config['allowed_types']   = 'gif|jpg|png';
                $config['max_size']        = 2210000;
                $config['max_width']       = 1024;
                $config['max_height']      =786;

                if ( ! $this->upload->do_upload('pfile'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        print_r($error);
                }
                else
                {
                       $upload_data=$this->upload->data();
                       $data['img_path']=base_url().'assets/upload/'.$upload_data['file_name'];
                  
                       if($this->ld_model->getProduct($data))
                       {
                        
                           $this->load->view('admin/templates/header');
                           $this->load->view('admin/all_products');
                           $this->load->view('admin/templates/footer');
                            
                       }
                       else
                        {
                           $this->session->set_flashdata('msg',"Something Went Wrong");


                           $data['categories']=$this->ld_model->get_categories();
                           $data['title']=ucfirst($page);
                           $this->load->view('admin/templates/header');
                           $this->load->view('admin/add_product',$data);
                           $this->load->view('admin/templates/footer');
                    
                        }
       
                 }
        
      }
      else
      {
       /*$data['categories']=$this->ld_model->get_categories() ;                                   
       $this->load->view('admin/templates/header');
       $this->load->view('admin/add_product',$data);
       $this->load->view('admin/templates/footer');*/

      }
       
                          

    }
    public function all_products($id=null)
    {
      $data['products']=$this->ld_model->get_products();
      $data['id']=NULL;
      if($id>0)
      {
        $data['categories']=$this->ld_model->get_categories();
         $data['id']=$id;
         $this->load->view('admin/templates/header');
         $this->load->view('admin/all_products',$data);
         $this->load->view('admin/templates/footer');
      }
        
      else
      {
        $this->load->view('admin/templates/header');
        $this->load->view('admin/all_products',$data);
        $this->load->view('admin/templates/footer');
      }
        

    }
    public function update()
    {
      $data['id']=$this->input->post('id');
      $data['name']=$this->input->post('name');
      $data['description']=$this->input->post('description');
      $data['price']=$this->input->post('price');
      $data['category']=$this->input->post('category');
      if($this->ld_model->get_updated($data))
      {

       $products=$this->ld_model->get_products();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/all_products',['products'=>$products,'id'=>NULL]);
        $this->load->view('admin/templates/footer');
      }
      else 
      {
        $this->load->view('admin/templates/header');
        $this->load->view('admin/all_products',$data);
        $this->load->view('admin/templates/footer');
      }

    }

    public function edit_product()
    {
        $data['products']=$this->ld_model->get_products();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/all_products',$data);
        $this->load->view('admin/templates/footer');
    }
    public function del_product()
    {
      $data['products']=$this->ld_model->get_products();
      $id=$this->input->post('id');
      $data['id']=0;
      if($this->ld_model->del_product($id))
      {
        $this->load->view('admin/templates/header');
        $this->load->view('admin/all_products',$data);
        $this->load->view('admin/templates/footer');
      }
      else
      {
        $this->session->set_flashdata("msg","Something went wrong");
        $this->load->view('admin/templates/header');
        $this->load->view('admin/all_products',$data);
        $this->load->view('admin/templates/footer');
      }
    }

  public function logout()
  {
    $this->session->unset_userdata('admin');
    header('Location:'.base_url('valid_admin'));
  }

  }

?>
