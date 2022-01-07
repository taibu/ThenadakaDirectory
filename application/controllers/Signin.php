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
            $this->session->set_userdata('loggedinUser', $data);
           
            header('location:'.base_url('/AdminHome'));
        }
        else{
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
    $code=random_string('alnum', 20);
    $useradded = $this->Signin_Model->Add_User($code);
    if($useradded=='true'){
       
        $email=$this->input->get_post('email');	

        $html_content=
        '<div >
        <p >Hello, Your account was succefully created, use the link below to verify your account<br><br></p>
        <br>
   
        <h2 style="text-align:center;margin:5%;font-size:15px;">'.$code.'</h2>
         <br>
         <hr>
         <br>
         </div>';
        if($this->sendMail($html_content,$email)){
            $message="Account created,Please check your email for account verification link";
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



 public function  sendMail($htmlmsgbody,$msgreceiver)
 {
     //$this->unsetflashdatainfo();
     $this->load->library('email');

     $config['protocol'] = 'smtp';
     $config['smtp_host'] = 'ssl://smtp.gmail.com';
     $config['smtp_port'] = '465';
     $config['smtp_user'] = 'amtaibu@gmail.com';  //change it
     $config['smtp_pass'] = '1c7wimearepo.'; //change it
     $config['charset'] = 'utf-8';
     $config['newline'] = "\r\n";
     $config['mailtype'] = 'html';
     $config['wordwrap'] = TRUE;
     $this->email->initialize($config);

     $this->email->from('antheamarthy@gmail.com','WIMEA-ICT');   //change it
     $this->email->to($msgreceiver);       //change it
     $this->email->subject("THENADANA EMAIL VERIFICATION");
     $this->email->message($htmlmsgbody);

     if($this->email->send()) {
         return true;
     } else {
         return false;
    }
   

 }
public function logout()
	{
        unset($_SESSION['loggedinUser']);
        header('location:'.base_url());
	}

}