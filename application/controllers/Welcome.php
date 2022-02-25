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
		$data["mostrecenttedads"]=$this->Admin_Model->fetch_mostrecentlisting(8);
		
		$this->load->view('Pages/welcome_message',$data);
	}
    public function load_allcategories(){
		$data["allcategories"]=$this->Admin_Model->fetch_categories();
	}
	public function login()
	{
		$this->load->view('Pages/login');
	}

	public function listing($id)
	{
		$data["addetails"]=$this->Admin_Model->fetch_mostratedlisting($id);
		$data["ratings"]=$this->Admin_Model->fetch_ratings($id);
		$data["services"]=$this->Admin_Model->fetch_listingproducts($id);
		$category=$data["addetails"]["Category"];
		$data["mostratedads"]=$this->Admin_Model->ViewBy_CategoryAndLimit($category,4);
		$data["mostrecenttedads"]=$this->Admin_Model->fetch_mostrecentlisting(4);
		$this->load->view('Pages/listing_details',$data);
	}

	public function aboutus(){
		$this->load->view('Pages/aboutus');
	}

	public function blog(){
		$this->load->view('Pages/blog');
	}

	public function contactus(){
		$this->load->view('Pages/contactus');
	}
	//Searching Listing
	public function SearchListing()
	{
		$data["addetails"]=$this->Admin_Model->Search_Listing();
		$this->load->view('Pages/searchListing',$data);
	}
	public function ViewByCategory($id)
	{
		$key = str_replace(array("%20"), ' ', $id); //preg_replace('/[0-9\@\.\;\%""]+/', '', $id);
		//echo $key;
		$data["category"]=$key;
		$data["addetails"]=$this->Admin_Model->ViewBy_Category($key);
		$this->load->view('Pages/viewByCategory',$data);
	}
	public function ViewMostRatedListings()
	{
		$data["category"]="Most Recent Lisitngs";
		$data["addetails"]=$this->Admin_Model->fetch_mostratedlistingwithLimit(16);
		$this->load->view('Pages/viewByCategory',$data);
	}
	public function ViewMostRecentListings()
	{
		$data["category"]="Most Rated Listings";
		$data["addetails"]=$this->Admin_Model->fetch_mostrecentlisting(16);
		$this->load->view('Pages/viewByCategory',$data);
	}
}