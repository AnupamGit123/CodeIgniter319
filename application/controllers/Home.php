<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	public function index()
	{
		$this->load->view('Home/index');
	}

	public function mElectronicMenu()
	{
		$this->load->view('Home/mElectronicProductMenu');
	}

	public function mMenFashionMenu()
	{
		$this->load->view('Home/mMenFashionProductMenu');
	}

	public function mWomenFashionMenu()
	{
		$this->load->view('Home/mWomenFashionProductMenu');
	}

	

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */