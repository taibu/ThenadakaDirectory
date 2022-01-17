<!DOCTYPE html>
<html lang="en">

<head>

    <?php $this->load->view("Templates/head") ?>

</head>

<body>

    <?php $this->load->view("Templates/header") ?>


    <section class="page-title bg-holder bg-overlay-black-50" style="background: url(assets/images/bg/01.jpg);">
        <div class="container">
            <div class="row justify-content-center position-relative">
                <div class="col-lg-6 text-center">
                    <h1 class="text-white">Create an account</h1>
                   
                    
                </div>
            </div>
        </div>
    </section>
    <section class="space-ptb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    
                    <div class="tab-content border border-radius mt-4 p-sm-5 p-4" id="myTabContent">
                        <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                            <form class="row t-sm-4 mt-2 mb-5 align-items-center" onsubmit ="return verifyPassword()"  action="SubmitRegisterform" method="post">
                                <div class="mb-3 col-sm-12">
                                    <input type="text" class="form-control" placeholder="Your Name" name="name" required>
                                </div>
                                <div class="mb-3 col-sm-12">
                                    <input type="email" class="form-control" placeholder="Email Address" name="email" required>
                                </div>
                                <div class="mb-3 col-sm-12">
                                    <input type="test" class="form-control" placeholder="Phone Number" name="phone" required>
                                </div>
                                <div class="mb-3 col-sm-12">
                                    <input type="Password" id="password"  class="form-control" placeholder="Password" name="password"  required>
                                </div>
                                <div class="mb-3 col-sm-12">
                                    <input type="Password" id="password2" class="form-control" placeholder="Confirm Password" name="password2" required>
                                </div>
                                <div  class="mb-3 col-sm-12">
                                <p id="message"></p>
                            <p>Password must contain  a lowercase letter,capital (uppercase),a number and Minimum length of 8 characters
                                
                            </p>
                            </div>
                                <div class="mb-3 col-sm-12">
                                  <?php require_once(APPPATH . 'views/Templates/error.php'); ?>
                                </div>
                                <div class="col-sm-12 d-grid">
                                    <button type="submit" class="btn btn-primary">Sign up</button>
                                </div>

                                <div class="col-sm-12">
                                    <ul class="list-unstyled d-flex mb-1 mt-sm-0 mt-3" style="padding-top:30px;padding-bottom:50px;">
                                        <li class="me-1"><a class="text-dark" href="<?php echo base_url("login") ?>"><b>Already Registered
                                                    User? Click here to login</b></a></li>
                                    </ul>
                                </div>
                            </form>
                            
                            
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=================================
footer-->
    <?php $this->load->view("Templates/footer") ?>
    <!--=================================
footer-->

<script>  
function verifyPassword() {  
  var pw = document.getElementById("password").value; 
  var pw2 = document.getElementById("password2").value;   
  //check empty password field  
  if(pw == "") {  
     document.getElementById("message").innerHTML = "**Fill the password please!";  
     return false;  
  }  
   //minimum password length validation  
  if(pw.localeCompare(pw2)!=0) {  
     document.getElementById("message").innerHTML = "**Password Mismatch detected";  
     return false;  
  } 
 //minimum password length validation  
  if(pw.length < 8) {  
     document.getElementById("message").innerHTML = "**Password length must be atleast 8 characters";  
     return false;  
  }  
  
//maximum length of password validation  
  if(pw.length > 15) {  
     document.getElementById("message").innerHTML = "**Password length must not exceed 15 characters";  
     return false;  
  } else {  
     alert("Password is correct");  
  }  
}  
</script>
</body>

</html>