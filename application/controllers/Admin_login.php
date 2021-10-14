<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_login extends CI_Controller
{
	
	function __construct()
	{
        parent::__construct();
        if($this->session->userdata('admin'))
			header('Location:'.base_url().'dashboard');
	}
	public function signup()
	{
		$this->load->view('admin/registration');
	}
	public function login()
	{
		$this->load->view("admin/login");
	}
	public function validate()
	{
		$uname=$this->input->post('username');
		$pass=$this->input->post('password');
		if($this->form_validation->run('set_admin_login_rules'))
		{
			if($this->ld_model->getValidate($uname,$pass))
			{
				$this->session->set_userdata('admin',$uname);
				header("Location:".base_url('admin'));
			}
			else
			{
				$this->session->set_flashdata('msg','Invalid Username or Password');
				$this->load->view('admin/login');
			}

		}
		else
		{
			$this->load->view("admin/login");
		}
	}
}
?>