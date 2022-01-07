<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
        {
            parent::__construct();
             $this->load->model('Signin_Model');
             $this->load->model('Admin_Model');
        }

	public function AddListing()
	{
        $data["allcategories"]=$this->Admin_Model->fetch_categories();
         $this->load->view('Pages/addListing',$data);    
	}
        public function AddListingCategories(){
           $data["displaytype"]="form";
           $this->load->view('Pages/listing_categories',$data); 
        }
        public function ListingCategories(){
          $data["displaytype"]="all";
          $data["allcategories"]=$this->Admin_Model->fetch_categories();
          $this->load->view('Pages/listing_categories',$data);  
        }

        public function EditListingCategories($id){
                $data["displaytype"]="form";
                $data["allcategories"]=$this->Admin_Model->fetch_categories($id);
                $this->load->view('Pages/listing_categories',$data);    
        }
        public function SubmitCategory(){
                $useradded = $this->Admin_Model->Add_Category();
                if($useradded=='true'){
                  $this->session->set_flashdata('success', "Category created Successfully");
                }else{
                  $this->session->set_flashdata('error', "Operation failed please try again");
                }
                redirect(base_url('addlistingcategories'), 'refresh');
        }

        public function SubmitListing(){
                $listingadded = $this->Admin_Model->Add_Listing();
                if($listingadded=='true'){
                  $this->session->set_flashdata('success', "Listing created Successfully");
                }else{
                  $this->session->set_flashdata('error', "Operation failed please try again");
                }
                redirect( base_url('addListing'), 'refresh');  
        }
        public function SubmitRating(){
                $ratingadded = $this->Admin_Model->Add_Rating();
                if($ratingadded=='true'){
                  $this->session->set_flashdata('success', "Rating saved Successfully");
                }else{
                  $this->session->set_flashdata('error', "Operation failed please try again");
                }
                //redirect( base_url('addListing'), 'refresh');  
                header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
      public function PendingListing($id){
       
        $data["ad"]=$this->Admin_Model->fetch_Pendinglisting($id);
        $this->load->view('Pages/pendingListing',$data); 
      }
      public function ApprovePendingListing($id){
        $ratingadded = $this->Admin_Model->Approve_Listing($id);
                if($ratingadded=='true'){
                  $this->session->set_flashdata('success', "Listing Approved Successfully");
                }else{
                  $this->session->set_flashdata('error', "Operation failed please try again");
                }
                redirect( base_url('AdminHome'), 'refresh'); 
      }

}