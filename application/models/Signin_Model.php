<?php
class Signin_Model extends CI_Model

{
function find_user(){
	$this->load->database();
	$this->db;
    $user_mail=$this->input->get_post('mail');
    $user_pass=base64_encode($this->input->get_post('pass'));
    echo $user_mail;
    $q = $this->db->query("SELECT * FROM users u inner join roles r on u.role=r.RoleCode where email = '".$this->db->escape_str($user_mail)."' AND password= '".$this->db->escape_str($user_pass)."'");
    return $q->row_array();
}
function find_mail(){
    $this->load->database();
	$this->db;
    $user_mail=$this->input->get_post('email');
    $q = $this->db->query("SELECT * FROM users where email = '".$this->db->escape_str($user_mail)."'");
    //return $q;
    return $q->num_rows();   
}
function change_password(){
  	$this->load->database();
	$this->db;
	    if(isset($_SESSION['resetmail'])){
    $passone=$this->input->get_post('passone');
    $passtwo=$this->input->get_post('passtwo');
        $mail=$_SESSION['resetmail'];
    $q = $this->db->query("update users set password='".$passone."' where email = '".$mail."'");
    //return $q;
    return $q; 
  }
}

function Add_User($code){
    $email=$this->input->get_post('email');
    $name=$this->input->get_post('name');  
    $phone=$this->input->get_post('phone');
    $passone=base64_encode($this->input->get_post('password'));
    $password2=$this->input->get_post('password2');
    $date=date("d/m/Y/-h:i:sa");
    //$code=random_string('alnum', 6);
    $code=$code;
    $today = date("Y-m-d H:i:s");
    $q = $this->db->query("insert into users(name,email,password,verification_code,phone,role,VerifiedBy,RecordDate) 
                                       values('$name','$email','$passone','$code','$phone','03','1','$today')");
    return $q;
}
}

?>