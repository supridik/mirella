<?php
/**
*
*/
class Barang extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('barang_model');
		$this->load->helper('url_helper');
	}

	public function view(){
		if (!$this->session->userdata('loggedin')) {
			redirect('barang/viewlogin');
		}else{
		$data['barang'] = $this->barang_model->get_barang();
		$data['title'] = "List Barang";

		$this->load->view('barang/view', $data);
		}
	}
	public function index()
	{
		$data['title'] = "login";
		$data['err_message'] = "";
		$this->load->view('barang/login', $data);
	
	}

	public function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('pass');
		$isLogin = $this->barang_model->login_authen($username, $password);
		if($isLogin){
			$data=array('id' => $isLogin[0]->id, 'username' =>$isLogin[0]->username);
			$this->session->set_userdata('loggedin',$data);
			$this->home();
		}else{
			$this->session->set_flashdata('gagal','username atau password salah');
			$this->viewlogin();
		}
	}	
	
	public function viewlogin(){
		$this->load->view('barang/login');
	}
	public function logout(){
			$this->session->unset_userdata('loggedin');
			$this->session->sess_destroy();
			$this->viewlogin();
	}
		
		
		
		
		/*$i = $this->barang_model->authen_user($username);

		if ($isLogin == FALSE) {

			if ($i[0]['authentication'] < 3) {
			$update = $this->barang_model->wrong_password($username, $i[0]['authentication']+1);
			$data['err_message'] = "GAGAL LOGIN " . ($i[0]['authentication']+1);
			$this->load->view('barang/login', $data);
			}
		else{
			$data['err_message'] = "AKUN ANDA TERBLOCK";
			$this->load->view('barang/login', $data);
			}
		}

		else{

		 $this->home();
		}*/
	

	public function home(){
		if (!$this->session->userdata('loggedin')) {
			redirect('barang/viewlogin');
		}else{
		$this->order();
		}
	}


	/*public function test(){

		$this->load->view('barang/test');
	}*/

	public function update(){
		if (!$this->session->userdata('loggedin')) {
			redirect('barang/viewlogin');
		}else{
				$angka;
				$this->load->helper('form');
				$this->load->library('form_validation');

				$this->form_validation->set_rules('id', 'id', 'required');
				$this->form_validation->set_rules('harga', 'harga', 'required');

				$data['title'] = "Update barang";

				if ($this->form_validation->run() == FALSE)
				{
				$this->load->view('barang/update');
				}

				else {

					if ($this->input->post('operasi') == 1	){
						$query = 'harga+'.$this->input->post('harga');
					}
					else {
						$query = 'harga-'.$this->input->post('harga');
					}
					$this->barang_model->update_barang($query);
					$this->view();

				}
		}
	}

	public function delete_barang(){
		if (!$this->session->userdata('loggedin')) {
			redirect('barang/viewlogin');
		}else{
			
			//$data['makanan'] = $this->billing_model->get_minuman();
			$id = $this->input->post('id');
            $picture = $this->input->post('pic');

            $this->barang_model->delete_group($id, $picture);
            redirect('barang/view');
		}
	}

	public function create(){
		if (!$this->session->userdata('loggedin')) {
			redirect('barang/viewlogin');
		}else{
			$this->load->helper('form');
			$this->load->library('form_validation');

			$data['title'] = 'Create new barang';

		  	$this->form_validation->set_rules('nama', 'nama', 'required');
				$this->form_validation->set_rules('harga', 'harga', 'required');
			//	$this->form_validation->set_rules('pic', 'Pic', 'required');



			if ($this->form_validation->run() === FALSE)
			{
				$this->load->view('barang/create');
			}
			else
			{
				$url = substr($this->do_upload(),1);
				$this->barang_model->set_barang($url);
				$this->load->view('barang/success');
			}
		}
	}

	public function delete() {
		if (!$this->session->userdata('loggedin')) {
			redirect('barang/viewlogin');
		}else{
		$didi=$this->input->post('tetet');
 		$this->barang_model->delete($didi);
 		$this->view();
		}
	}

	public function do_upload(){
		if (!$this->session->userdata('loggedin')) {
		redirect('barang/viewlogin');
		}else{
			$type = explode('.', $_FILES["pic"]["name"]);
			$type = $type[count($type)-1];
			//echo var_dump($type);
			$location = "./img/";
			$url = $location.uniqid(rand()).".".$type;
			if(in_array($type, array("jpg","jpeg","gif","png")))
			 	if(is_uploaded_file($_FILES["pic"]["tmp_name"]))
			 	if(move_uploaded_file($_FILES["pic"]["tmp_name"],$url))
					return $url;
			return "";
		}
	}
	
	public function order(){
		if (!$this->session->userdata('loggedin')) {
			redirect('barang/viewlogin');
		}else{
			$dataf['psn'] = $this->barang_model->orderAll();
			//$dataf['ord'] = $this->barang_model->getOrder();
			
			$this->load->view('barang/customer', $dataf);
		}
	}
	
	public function deletebarang() {
		//$this->load->model('barang_model');
		//$data['makanan'] = $this->barang_model->getData();
		$kimci = $this->input->post('tomer');
		    //$picture = $this->input->post('jancok');
            //$this->barang_model->delete_group($kimcil, $picture);
 		$this->barang_model->deletebarang($kimci);
		//echo ($id);
 		$this->order();
	}
	
	
}
?>
