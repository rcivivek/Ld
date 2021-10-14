<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Janta extends CI_Controller
{
	public function contact()
	{
      $data['name']=$this->input->post('name');
      $data['email']=$this->input->post('email');
      $data['subject']=$this->input->post('subject');
      $data['message']=$this->input->post('message');
      if($this->ld_model->get_contact($data))
      {
      	$this->session->set_flashdata('msg','Thank you for Contact us');

      	$this->session->set_flashdata('msg_class','success');
 		$data['title']='contact';
 		$this->load->view('templates/header',['title'=>$data['title']]);
 		$this->load->view('pages/contact');
 		$this->load->view('templates/footer');
      }		
      else
      {
      	$this->session->set_flashdata('msg','Thank you for Contact us');

      	$this->session->set_flashdata('msg_class','success');
 		$data['title']='contact';
 		$this->load->view('templates/header',['title'=>$data['title']]);
 		$this->load->view('pages/contact');
 		$this->load->view('templates/footer');

      }
	}

      public function report()
      {
      $data['name']=$this->input->post('name');
      $data['email']=$this->input->post('email');
      $data['productid']=$this->input->post('productId');
      $data['message']=$this->input->post('message');
      if($this->ld_model->get_report($data))
      {
            $this->session->set_flashdata('msg','Thank you for Contact us. ');

            $this->session->set_flashdata('msg_class','success');
            $data['title']='contact';
            $this->load->view('templates/header',['title'=>$data['title']]);
            $this->load->view('pages/contact');
            $this->load->view('templates/footer');
      }           
      else
      {
            $this->session->set_flashdata('msg','Given Info is not in database');

            $this->session->set_flashdata('msg_class','danger');
            $data['title']='contact';
            $this->load->view('templates/header',['title'=>$data['title']]);
            $this->load->view('pages/contact');
            $this->load->view('templates/footer');

      }
      }
}
?>