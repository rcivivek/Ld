<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('cart');
	}
	public function index($id=NULL)
	{
		$product=$this->ld_model->get_products($id);
		
 		$data = array(
        'id'      => $product['id'],
        'qty'     => 1,
        'price'   => $product['price'],
        'name'    => $product['name'],
        'img_path'    => $product['img_path']
        );
        $this->cart->insert($data);

 		$this->load->view('templates/header');
 		$this->load->view('shop/cart');
 		$this->load->view('templates/footer');

	}
	public function checkout()
	{
		$data['name']=$this->input->post("name");
		$data['mobile_no']=$this->input->post("mobile_no");
		$data['email']=$this->input->post("email");
		$data['address']=$this->input->post("address");
		$key=[];$i=0;$k=0;$sum=0;
       foreach($this->cart->contents() as $items)
       {
       	$k++;
       	$data['product_name']=$items['name'];
       	$data['qty']=$items['qty'];
       	$data['productid']=$items['rowid'];
       	$data['total']=$items['subtotal'];
       	if($this->ld_model->place_order($data))
       	  {$key['i']=1;
         	$sum=$sum+$key['i'];
       	   $i++;}
       }
       if($sum==$k)
       {
		foreach($this->cart->contents() as $items)
		{
			$array['rowid']=$items['rowid'];
			$array['qty']=0;
			$this->cart->update($array);
		}

		$this->load->view('templates/header');
 		$this->load->view('shop/cart');
 		$this->load->view('templates/footer');
 	}
	}

	public function update()
	{
		$data['rowid']=$this->input->post('rowid');
		$data['qty']=$this->input->post('qty');
		$this->cart->update($data);
		$this->load->view('templates/header');
 		$this->load->view('shop/cart');
 		$this->load->view('templates/footer');
        
	}
}
?>