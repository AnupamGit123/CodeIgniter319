<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SellerModel extends CI_Model {

	public function CreateAccount()
	{
		$cname = $this->input->post('company_name');
		$email = $this->input->post('email');
		$pword = $this->input->post('password');
		$mob = $this->input->post('mobile_no');
		$pcode = $this->input->post('pincode');
		$pno = $this->input->post('panno');
		$gno = $this->input->post('gstno');

		$insert_seller = $this->db->insert('seller',['seller_cname'=>$cname,'seller_email'=>$email,'seller_password'=>$pword,'seller_mobile'=>$mob,'seller_pcode'=>$pcode,'seller_pno'=>$pno,'seller_gno'=>$gno,'create_date'=>date('Y-m-d'),'seller_month'=>date('m'),'seller_year'=>date('Y')]);
		if ($insert_seller) {
			return true;
		} else {
			return false;
		}
		
	}

	public function Login()
	{
		$susername = $this->input->post('seller_username');
		$spassword = $this->input->post('seller_password');
		$check_user = $this->db->get_where('seller',['seller_email'=>$susername,'seller_password'=>$spassword]);
		if ($check_user->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
		
	}

	public function CheckContact()
	{
		$username = $this->session->userdata('seller_username');
		$password = $this->session->userdata('seller_password');
		$check_seller = $this->db->get_where('seller',['seller_email'=>$username,'seller_password'=>$password]);
		if($check_seller->num_rows() > 0){
			$seller_id = $check_seller->row('seller_id');
			$check_address = $this->db->get_where('seller',['seller_id'=>$seller_id,'seller_address'=>'']);	
			if ($check_address->num_rows() > 0) {
				return true;
			} else {
				return false;
			}
		} 
		else{
			return false;
		}
		
	}

	public function InsertSellerContact()
	{
		$sfname = $this->input->post('seller_fname');
		$slname = $this->input->post('seller_lname');
		$saddress = $this->input->post('seller_address');
		$scity = $this->input->post('seller_city');

		$uname = $this->session->userdata('seller_username');
		$pword = $this->session->userdata('seller_password');
		$check_seller = $this->db->get_where('seller',['seller_email'=>$uname,'seller_password'=>$pword]);
		if ($check_seller->num_rows() > 0) {
			$seller_id = $check_seller->row('seller_id');
			$update_seller = $this->db->where('seller_id',$seller_id)->update('seller',['seller_fname'=>$sfname,'seller_lname'=>$slname,'seller_address'=>$saddress,'seller_city'=>$scity]);
			if ($update_seller) {
				return true;
			} else {
				return false;
			}
			
		} else {
			return false;
		}
		
	}

}

/* End of file SellerModel.php */
/* Location: ./application/models/Seller/SellerModel.php */