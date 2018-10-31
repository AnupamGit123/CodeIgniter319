<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin/AdminModel','am');
	}

	public function index()
	{
		if ($this->session->userdata('admin_username') == "" && $this->session->userdata('admin_password') == "") {
			$this->load->view('Admin/index');
		}else {
			return redirect('Admin/Dashboard');
		}
		// $this->load->view('Admin/index');
	}

	public function Login()
	{
		$username = $this->input->post('admin_username');
		$password = $this->input->post('admin_password');
		$result = $this->am->Login($username,$password);
		if ($result) {
			$admin_session = [
				'admin_username' => $username,
				'admin_password' => $password
			];
			$this->session->set_userdata( $admin_session);	
			return redirect('Admin/Dashboard');
		} 
		else {
			$this->session->set_flashdata('msg', 'Your Username & Password do not match any Account');
			return redirect('Admin/index');
		}
		
	}	

	public function Dashboard()
	{
		if ($this->session->userdata('admin_username') == "" && $this->session->userdata('admin_password') == "") {
			return redirect('Admin/index');
		} else {
			$this->load->view('Admin/Dashboard');
		}
		
	}		

	public function logout()
	{
		$this->session->unset_userdata('admin_username');
		$this->session->unset_userdata('admin_password');
		return redirect('Admin/index');
	}

	public function InsertProductName()
	{
		if ($this->session->userdata('admin_username') == "" && $this->session->userdata('admin_password') == "") {
				return redirect('Admin/index');
		}
		else{
			$result = $this->am->InsertProductName();
			if ($result) {
				//return true;
				echo json_encode($result);
			}
			
		}
	}

	public function GetAllItems()
	{
		if ($this->session->userdata('admin_username') == "" && $this->session->userdata('admin_password') == "") {
			return redirect('Admin/index');
		} else {
			$output = "";
			$result = $this->am->GetAllItems();
			if ($result) {
				$output .= '<select name="items" id="items">';
				foreach ($result as $item) {
					$output .= '<option value='.$item->item_id.'>'.$item->item_name.'</option>';
				}
				$output .= '</select>';
			}
		}
		echo $output;
	}

	public function InsertBrand()
	{
		if ($this->session->userdata('admin_username') == "" && $this->session->unset_userdata('admin_password') == "") {
			return redirect('Admin/index');
		} else {
			$item = $this->input->post('items');
			$brand = $this->input->post('brand_name');
			$result = $this->am->InsertBrand($item,$brand);
			if($result){
				echo json_encode($result);
			}
		}
		
	}

	public function GetMobileBrandName()
	{
		// This if part is not there in the video only the else part
		if ($this->session->userdata('seller_username') == "" && $this->session->userdata('seller_password') == "") {
			$this->load->view('seller/index');	
		} else {
			$output = '';
			$result = $this->am->GetMobileBrandName();
			if($result){
				if (count($result)) {
					$output .= '<select name="mobile_brand" id="mobile_brand">';
					foreach ($result as $brand) {
						$output .= '<option>'.$brand->brand_name.'</option>';
					}
					$output .= '</select>';
				} else {
					$output .= '<select disabled><option>No Brand Found.</option></select>';
				}
			}
			echo $output;
		}
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */