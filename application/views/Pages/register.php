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
                            <form class="row t-sm-4 mt-2 mb-5 align-items-center" action="SubmitRegisterform" method="post">
                                <div class="mb-3 col-sm-12">
                                    <input type="text" class="form-control" placeholder="Your Name" name="name">
                                </div>
                                <div class="mb-3 col-sm-12">
                                    <input type="email" class="form-control" placeholder="Email Address" name="email">
                                </div>
                                <div class="mb-3 col-sm-12">
                                    <input type="test" class="form-control" placeholder="Phone Number" name="phone">
                                </div>
                                <div class="mb-3 col-sm-12">
                                    <input type="Password" class="form-control" placeholder="Password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                                </div>
                                <div class="mb-3 col-sm-12">
                                    <input type="Password" class="form-control" placeholder="Confirm Password" name="password2">
                                </div>
                                <div id="message" class="mb-3 col-sm-12">
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
var myInput = document.getElementById("password");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>

</body>

</html>