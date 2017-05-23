<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Billing_model extends CI_Model {
    
	function datas($number,$offset){
		
		$query = $this->db->get('makanan',$number,$offset);
		return $query->result_array();		
	}
 
	function jumlah_data(){
		return $this->db->get('makanan')->num_rows();
	}
	
     // Get all details ehich store in "products" table in database.
        public function get_makanan()
	{
		$query = $this->db->get('makanan');
		return $query->result_array();
	}
	 public function get_minuman()
	{
		$query = $this->db->get('minuman');
		return $query->result_array();
	}
	 public function get_chinese()
	{
		$query = $this->db->get('chinese');
		return $query->result_array();
	}
    
    // Insert customer details in "customer" table in database.
	public function insert_customer($data)
	{
		$this->db->insert('customers', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;		
	}
	
        // Insert order date with customer id in "orders" table in database.
	public function insert_order($data)
	{
		$this->db->insert('orders', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;
	}
	
        // Insert ordered product detail in "order_detail" table in database.
	public function insert_order_detail($data)
	{
		$this->db->insert('order_detail', $data);
	}
       
}