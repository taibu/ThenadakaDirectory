<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signin extends CI_Controller {

	public function __construct()
    {
            parent::__construct();
            $this->load->model('Signin_Model');
            $this->load->model('Admin_Model');
    }

	public function index()
	{
		
		 $this->load->view('pages/login');
	}

	public function verify_User()
    {


       

        $data = $this->Signin_Model->find_user();
    
        if($data){
            if($data['verified']=='TRUE'){
                $this->session->set_userdata('loggedinUser', $data);
                $this->session->set_flashdata('success', "Loggedin Successfully");
                header('location:'.base_url('/AdminHome'));
            }else{
             $this->session->set_flashdata('error', "You account has not been approved. Please check your email for verification link.");
             header('location:'.base_url('/login'));
            }
            
        }
        else{
            $this->session->set_flashdata('error', "Invalid User credentials");
            header('location:'.base_url('login'));
        } 
    }
 function Home(){
    $data["homestats"]=$this->Admin_Model->fetch_homestats();
    $data["pendingads"]=$this->Admin_Model->fetch_Pendinglisting();
    $this->load->view('Pages/adminHome',$data);
 }
 //FORGOT MY PASSWORD
 function forgot(){
    $this->load->view('templates/header');
    $this->load->view('request_passreset');
   $this->load->view('templates/footer');
 }

 function request(){
  $this->form_validation->set_rules('mail', 'Mail', 'required');

  if ($this->form_validation->run() === FALSE)
  {
  
  }
  else
  {
   //$this->Search_model->searched();
// $data['user'] = $this->Login_model->find_user();
$data = $this->Login_model->find_mail();
$user_mail=$this->input->get_post('mail');
if($data==0){
   
  $res['title']="The email <b>".$user_mail."</b> is not registered";
  $this->load->view('templates/header');
  $this->load->view('request_passreset',$res);
 $this->load->view('templates/footer');
}
else{
    $_SESSION['resetmail'] = $user_mail;
   $this->session->mark_as_temp('resetmail',720);
    $to = 'amtaibu@gmail.com';
    $subject = 'PASSWORD RESET LINK';
    $message = '<a href="taibusystems1.000webhostapp.com/login/Reset-password">CLICK HERE TO RESET PASSWORD</a>';
    'Reply-To: amtaibu@gmail.com' . "\r\n";
    $headers = "Content-type: text/html; charset=iso-8859-1\r\n";
         if(mail($to, $subject,$message,$headers)){
        $res['followlink']="Follow the link sent to <b>".$user_mail."</b> to reset your password.<br> The link expires in 20 minutes";
     }else{
        $res['followlink']="Operation failed try again";
     } 
  $this->load->view('templates/header');
  $this->load->view('request_passreset',$res);
 $this->load->view('templates/footer');
  } 
  
}

 }
 function resetpassform(){
 if(isset($_SESSION['resetmail'])){
  $this->load->view('templates/header');
  $this->load->view('resetPassword');
  $this->load->view('templates/footer');
 }else{
       echo 'Expired link';
   }
}

 function resetpassword(){
 if(isset($_SESSION['resetmail'])){
  $this->form_validation->set_rules('passone', 'Mail', 'required');

    if ($this->form_validation->run() === FALSE)
    {
    
    }
    else
    {
	$data = $this->Login_model->change_password();
 
	if($data){
    	$notify['reset']="Password reset successfully<br>Login with your new password";
    	$this->load->view('templates/header');
		 $this->load->view('templates/login',$notify);
        $this->load->view('templates/footer');
	}
	else{
	  $res['followlink']="Operation failed try again";
      $this->load->view('templates/header');
      $this->load->view('request_passreset',$res);
      $this->load->view('templates/footer');
		
    } 
    
  }
 }else{
       echo 'The link you are using is expired';
   }
}

public function register()
{
 $this->load->view('Pages/register');
}


public function Add_User()
{
   
    $passone=$this->input->get_post('password');
    $password2=$this->input->get_post('password2');
    if (strcmp($passone, $password2) !== 0) {
        $message="Password fields must match";
        $this->session->set_flashdata('error', $message);
        redirect(base_url('register'));
    }else{
	$userexist = $this->Signin_Model->find_mail();
 
	if($userexist==0){
    //	echo $userexist;
    $code=random_string('alnum', 60);
    $useradded = $this->Signin_Model->Add_User($code);
    if($useradded=='true'){
       
        $email=$this->input->get_post('email');	

        $html_content=
        '<div >
        <p >Hello, Your account was succefully created, use the link below to verify your account<br><br></p>
        <br> Please click the link below to very you email address. 
        You will not be able to access your account until you verify your email.'.
        
        '<p style="text-align:left;margin:5%;font-size:15px;">https://test4.techlab.click/verify_useremail/'.$code.'</p>

         <hr>
         <br>
         </div>';
        if($this->sendMail($html_content,$email)){
            $message="Your account was created successfully. Check your email for a verification link";
            $this->session->set_flashdata('success', $message);
            redirect(base_url('register'));
        }else{
            $message= "Account created but failed to send mail";
            $this->session->set_flashdata('error', $message);
            redirect(base_url('register'));
        }
    }
	}
	else{
    $email=$this->input->get_post('email');	
    $message= $email.' is already registered';
    $this->session->set_flashdata('error', $message);
    redirect(base_url('register'));
    } 
   }
 }

 public function Add_ApproverUser()
 {
    
     
     $userexist = $this->Signin_Model->find_mail();
  
     if($userexist==0){
     //	echo $userexist;
     $code=random_string('alnum', 60);
     $password=random_string('alnum', 8);
     $useradded = $this->Signin_Model->Add_ApproverUser($code,$password);
     if($useradded=='true'){
        
         $email=$this->input->get_post('email');	
        
         $html_content=
         '<div >
         <p >Hello, Your have been assigned a role of Approver on the Thenadaka Listing Platform, use the link below to verify your account anf the credentilas provided to logon<br><br></p>
         <br> '.
         
         '<p style="text-align:left;margin:5%;font-size:15px;">https://test4.techlab.click/verify_useremail/'.$code.'</p>
           <br><p>Username: '.$email.'</p>
           <br><p>Password: '.$password.'</p>
          <hr>
          <br>
          </div>';
         if($this->sendMail($html_content,$email)){
             $message="User account was created successfully. And credentials sent to user's email";
             $this->session->set_flashdata('success', $message);
             redirect(base_url('AddApprover'));
         }else{
             $message= "Account created but failed to send mail";
             $this->session->set_flashdata('error', $message);
             redirect(base_url('AddApprover'));
         }
     }else{
        
        $message= 'User creation failed. Please try again';
        $this->session->set_flashdata('error', $message);
        redirect(base_url('AddApprover'));
     }
    }else{
     $email=$this->input->get_post('email');	
     $message= $email.' is already registered';
     $this->session->set_flashdata('error', $message);
     redirect(base_url('AddApprover'));
     } 

  }


public function verify_useremail($code){
     $userapproved = $this->Signin_Model->Approve_User($code);
     if($userapproved){
         $message= "Your account has been approved. Please login from here";
            $this->session->set_flashdata('success', $message);
         $this->load->view('Pages/login');
     }else{
          $message= "Your account details were not found. please register from here";
            $this->session->set_flashdata('error', $message);
         $this->load->view('Pages/register');
     }
}

 public function  sendMail($htmlmsgbody,$email)
 {
      $headers = "Content-Type: text/html; charset=UTF-8\r\n";
            $to = $email;
           $subject = 'EMAIL VERIFICATION CODE';
           $message = $htmlmsgbody;
           $headers .= "Reply-to: info@samimotors.co.ug";
           $headers .= "From: info@techlab.click";
          if(mail($to, $subject,$message,$headers)){
            // $_SESSION['emailtoverify']=$to;
            $this->session->set_userdata('emailtoverify', $to);
            $this->session->set_flashdata('newmail', $to);    
           return true;
          }else{
            return false;
          }
   

 }
public function logout()
	{
        unset($_SESSION['loggedinUser']);
        header('location:'.base_url());
	}

}