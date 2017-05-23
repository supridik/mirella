<?php
/**
*
*/
class Barang_model extends CI_Model
{

	function __construct()
	{
		$this->load->database();
	}

	
	function getData(){
		$query = $this->db->get('makanan');
		return $query->result_array();
	}
	
	public function set_barang($url)
	{
		//$this->load->helper('url');

		//$kode_barang = url_title($this->input->post('kode_barang'), 'dash', TRUE);

		$data = array(
			'nama' => $this->input->post('nama'),
			'harga' => $this->input->post('harga'),
			'kategori' => $this->input->post('kategori'),
			'pic' => $url
		);

		return $this->db->insert('makanan', $data);
	}

		public function get_barang($id=FALSE)
		{
			if ($id === FALSE)
			{
				$query = $this->db->get('makanan'); //SELECT * FROM table 'barang'

				return $query->result_array();
			}

			$query = $this->db->get_where('makanan', array('id' => $id));
	        return $query->row_array();
		}

		function delete($makanan){
        $this->db->where_in('id', $makanan);
		$this->db->delete('makanan');
    }

		public function update_barang($query){
			// $data = array(
			// 	'jumlah' => jumlah $angka
			// );
			$id = $this->input->post('id');
			$this->db->set('harga',$query, false);
			$this->db->where('id', $id);
			$this->db->update('makanan');
	 	}

	 	public function login_authen($username, $password){

	 		$this->db->select('*');
			$this->db->where('username', $username);
			$this->db->where('password', $password);
			$this->db->from('user');
			$this->db->limit(1);
			$query = $this->db->get();
			if ($query->num_rows() == 1) {
				return $query->result();
			}
			else{
				return false;
			}
		}

		public function delete_item($item){
			$this->db->where_in('id', $item);
			$this->db->delete('makanan');
		}

		public function wrong_password($username, $value){
				$this->db->set('authentication', $value);
				$this->db->where("username", $username);
				$this->db->update('user');
				}
		public function authen_user($username){
			$this->db->select('authentication');
			$this->db->where('username', $username);
			$this->db->from('user');
			$query = $this->db->get();
			return $query->result_array();
		}
		
		
		function delete_group($id, $picture)
        {
                $this->db->where('id', $id);

                unlink(FCPATH. "img/". $picture);

                $this->db->delete('makanan', array('id' => $id));
        }

		
	public function orderAll(){
			/*  $sql = sprintf("SELECT p.id, p.date, pm.name, pm.address, pm.phone, t.quantity, t.price, b.nama FROM
		orders p JOIN customers pm ON p.customerid=pm.id
		JOIN order_detail t ON p.id=t.orderid
		JOIN makanan b ON t.productid=b.id
        ORDER BY p.id ASC");
        $this->db->query($sql); */
		$query = $this->db->query('SELECT p.id, p.date, pm.name, pm.address, pm.phone, t.quantity, t.price, b.nama FROM
		orders p JOIN customers pm ON p.customerid=pm.id
		JOIN order_detail t ON p.id=t.orderid
		JOIN makanan b ON t.productid=b.id
        ORDER BY p.id ASC');
		//$query = $this->db->get();
			return $query->result_array();
							}
							
	function deletebarang($id){
        $this->db->where_in('id', $id);
		$this->db->delete('orders');
    }
	
}




?>
