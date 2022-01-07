<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Signin_Model');
        $this->load->model('Admin_Model');
    }
	public function index()
	{
		$data["allcategories"]=$this->Admin_Model->fetch_categories();
		$data["mostratedads"]=$this->Admin_Model->fetch_mostratedlisting();
		
		$this->load->view('Pages/welcome_message',$data);
	}

	public function login()
	{
		$this->load->view('Pages/login');
	}

	public function listing($id)
	{
		$data["addetails"]=$this->Admin_Model->fetch_mostratedlisting($id);
		$data["ratings"]=$this->Admin_Model->fetch_ratings($id);
		$this->load->view('Pages/details',$data);
	}

	public function SearchListing()
	{
		$data["addetails"]=$this->Admin_Model->Search_Listing();
		$this->load->view('Pages/searchListing',$data);
	}
	public function ViewByCategory($id)
	{
		$data["addetails"]=$this->Admin_Model->ViewBy_Category($id);
		$this->load->view('Pages/ViewByCategory',$data);
	}
}