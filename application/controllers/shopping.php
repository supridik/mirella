<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Shopping extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//load model
		$this->load->model('billing_model');
                $this->load->library('cart');
	}

	public function index()
	{	
                //Get all data from database
		$data['makanan'] = $this->billing_model->get_makanan();
		/*$data['makanan'] = $this->billing_model->get_makanan();
		$data['chinese'] = $this->billing_model->get_chinese();
        */        //send all product data to "shopping_view", which fetch from database.		
		$this->load->view('index_view', $data);
	}
	
	public function get_makan()
	{	
	$this->load->database();
		$jumlah_data = $this->billing_model->jumlah_data();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'index.php/shopping/get_makan/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 8;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);		
		$data['makanan'] = $this->billing_model->datas($config['per_page'],$from);
		
	
                //Get all data from database
		//$data['makanan'] = $this->billing_model->get_makanan();
		$data['minuman'] = $this->billing_model->get_makanan();
                //send all product data to "shopping_view", which fetch from database.		
		$this->load->view('menu', $data);
	}
	/* public function get_m()
	{	
                //Get all data from database
		$data['makanan'] = $this->billing_model->get_makanan();
		
                //send all product data to "shopping_view", which fetch from database.		
		$this->load->view('menu', $data);
	}*/
	 
	  function add()
	{
              // Set array for send data.
		$insert_data = array(
			'id' => $this->input->post('id'),
			'name' => $this->input->post('name'),
			'price' => $this->input->post('price'),
			'qty' => 1
		);		

                 // This function add items into cart.
		$this->cart->insert($insert_data);
	      
                // This will show insert data in cart.
		redirect('shopping/get_makan');
	     }
		 
	 function remove($rowid) {
                    // Check rowid value.
		if ($rowid==="all"){
                       // Destroy data which store in  session.
			$this->cart->destroy();
		}else{
                    // Destroy selected rowid in session.
			$data = array(
				'rowid'   => $rowid,
				'qty'     => 0
			);
                     // Update cart data, after cancle.
			$this->cart->update($data);
		}
		
                 // This will show cancle data in cart.
		redirect('shopping/get_makan');
	}
	function update_cart(){
                
                // Recieve post values,calcute them and update
                $cart_info =  $_POST['cart'] ;
 		foreach( $cart_info as $id => $cart)
		{	
                    $rowid = $cart['rowid'];
                    $price = $cart['price'];
                    $amount = $price * $cart['qty'];
                    $qty = $cart['qty'];
                    
                    	$data = array(
				'rowid'   => $rowid,
                                'price'   => $price,
                                'amount' =>  $amount,
				'qty'     => $qty
			);
             
			$this->cart->update($data);
		}
		redirect('shopping/get_makan');        
	}	
	
	   function billing_view(){
                // Load "billing_view".
		$this->load->view('billing_view');
        }
        
		public function save_order()
	{
          // This will store all values which inserted  from user.
		$customer = array(
			'name' 		=> $this->input->post('name'),
			'email' 	=> $this->input->post('email'),
			'address' 	=> $this->input->post('address'),
			'phone' 	=> $this->input->post('phone')
		);		
                 // And store user imformation in database.
		$cust_id = $this->billing_model->insert_customer($customer);

		$order = array(
			'date' 			=> date('Y-m-d'),
			'customerid' 	=> $cust_id
		);		

		$ord_id = $this->billing_model->insert_order($order);
		
		if ($cart = $this->cart->contents()):
			foreach ($cart as $item):
				$order_detail = array(
					'orderid' 		=> $ord_id,
					'productid' 	=> $item['id'],
					'quantity' 		=> $item['qty'],
					'price' 		=> $item['price']
				);		

                            // Insert product imformation with order detail, store in cart also store in database. 
                
		         $cust_id = $this->billing_model->insert_order_detail($order_detail);
			endforeach;
		endif;
	      $this->cart->destroy();
                // After storing all imformation in database load "billing_success".
                $this->mail();
				$this->load->view('billing_success');
	}
	
	public function cek(){
	    $this->load->view('checkout');
	}
	
	public function mail(){
		$this->load->library('email');
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'ssl://smtp.gmail.com';
		$config['smtp_port'] = '465';
		$config['smtp_timeout'] = '7';
		$config['smtp_user'] = 'kironshare@gmail.com';
		$config['smtp_pass'] = '7737487irul';
		$config['charset'] = 'utf-8';
		$config['newline'] = "\r\n";
		$config['mailtype'] = 'html';
		$config['validation'] = TRUE;
		$this->email->initialize($config);

	
		$this->email->to('82331012716@telkomsel.com');
		$this->email->from('admin@mirellajaya.com','mirellaJaya');
		$this->email->subject('notif');
		$this->email->message('ada order mbak');
		$this->email->send();
	}	
}