<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model {

	public function Login($username,$password)
	{
		$check_admin = $this->db->get_where('admin',['admin_username'=>$username,'admin_password'=>$password]);
		if ($check_admin->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
		
	}

	public function InsertProductName()
	{
		$pname = $this->input->post('product_name');
		// restrict duplicate 
		$check_pname = $this->db->get_where('items', ['item_name'=>$pname]);
		if ($check_pname->num_rows() > 0) {
			return false;
		} 
		else {
			$insert_product = $this->db->insert('items', ['item_name'=>$pname]);
			if ($insert_product) {
				return true;
			} 
			else {
				return false;
			}
		}
	}

	public function  GetAllItems()
	{
		$get_item = $this->db->select()
				 ->from('items')
				 ->get();
		if ($get_item->num_rows() > 0) {
			return $get_item->result();
		} else {
			return $get_item->result();
		}
		
	}

	public function InsertBrand($item,$brand)
	{
		$check_brand = $this->db->get_where('brands', ['item_id'=>$item,'brand_name'=>$brand]);
		if ($check_brand->num_rows() > 0) {
			return false;
		} else {
		
			$insert_brand = $this->db->insert('brands', ['item_id'=>$item,'brand_name'=>$brand]);
			if ($insert_brand) {
				return true;
			} else {
				return false;
			}
		}
	}

	public function GetMobileBrandName()
	{
		$get_item = $this->db->get_where('items',['item_name'=>'Mobiles']);
		if ($get_item->num_rows() > 0) {
			$item_id = $get_item->row('item_id');
			$get_brands = $this->db->order_by('brand_id', 'ASC')->get_where('brands',['item_id'=>$item_id]);
			if ($get_brands->num_rows() > 0) {
				return $get_brands->result();
			} else {
				return false;
			}
			
		} else {
			return false;
		}
		
	}

}

/* End of file AdminModel.php */
/* Location: ./application/models/Admin/AdminModel.php */

?>