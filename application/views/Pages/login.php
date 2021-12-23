<!DOCTYPE html>
<html lang="en">
  <head>
   
  <?php $this->load->view("Templates/head") ?>

  </head>

<body>

<?php $this->load->view("Templates/header") ?>


<section class="page-title bg-holder bg-overlay-black-50" style="background: url(images/bg/01.jpg);">
  <div class="container">
    <div class="row justify-content-center position-relative">
      <div class="col-lg-6 text-center">
        <h1 class="text-white">Create an account</h1>
        <p class="text-white lead">Having clarity of purpose and a clear picture of what you desire, is probably the single.</p>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create an account</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>
<section class="space-ptb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-7">
        <ul class="nav nav-tabs nav-tabs-02 justify-content-center" id="myTab" role="tablist">
          <li class="nav-item me-2">
            <a class="nav-link active" id="login-tab" data-bs-toggle="tab" href="login.html#login" role="tab" aria-controls="login" aria-selected="false"> <span> Log in</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="register-tab" data-bs-toggle="tab" href="login.html#register" role="tab" aria-controls="register" aria-selected="true"><span>Register</span></a>
          </li>
        </ul>
        <div class="tab-content border border-radius mt-4 p-sm-5 p-4" id="myTabContent">
          <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
            <form class="row t-sm-4 mt-2 align-items-center">
              <div class="mb-3 col-sm-12">
                <input type="text" class="form-control" placeholder="Username">
              </div>
              <div class="mb-3 col-sm-12">
                <input type="Password" class="form-control" placeholder="Password">
              </div>
              <div class="col-sm-6 d-grid">
                <button type="submit" class="btn btn-primary">Sign up</button>
              </div>
              <div class="col-sm-6">
                <ul class="list-unstyled d-flex mb-1 mt-sm-0 mt-3">
                  <li class="me-1"><a class="text-dark" href="login.html#"><b>Already Registered User? Click here to login</b></a></li>
                </ul>
              </div>
            </form>
            <div class="login-social-media border ps-4 pe-4 pb-4 pt-0 rounded mt-5">
              <div class="mb-4 d-block text-center"><p class="bg-white ps-2 pe-2 mt-3 d-block">Login or Sign in with</p></div>
              <form class="row">
                <div class="col-sm-6">
                  <a class="btn facebook-bg social-bg-hover text-white d-block mb-3" href="login.html#"><span><i class="fab fa-facebook-f"></i>Login with Facebook</span></a>
                </div>
                <div class="col-sm-6">
                  <a class="btn twitter-bg social-bg-hover text-white d-block mb-3" href="login.html#"><span><i class="fab fa-twitter"></i>Login with Twitter</span></a>
                </div>
                <div class="col-sm-6">
                  <a class="btn google-bg social-bg-hover text-white d-block mb-3 mb-sm-0" href="login.html#"><span><i class="fab fa-google"></i>Login with Google</span></a>
                </div>
                <div class="col-sm-6">
                  <a class="btn linkedin-bg social-bg-hover text-white d-block" href="login.html#"><span><i class="fab fa-linkedin-in"></i>Login with Linkedin</span></a>
                </div>
              </form>
            </div>
          </div>
          <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
            <form class="row t-sm-4 mt-2 mb-5 align-items-center">
              <div class="mb-3 col-sm-12">
                <input type="text" class="form-control" placeholder="Username">
              </div>
              <div class="mb-3 col-sm-12">
                <input type="email" class="form-control" placeholder="Email Address">
              </div>
              <div class="mb-3 col-sm-12">
                <input type="Password" class="form-control" placeholder="Password">
              </div>
              <div class="mb-3 col-sm-12">
                <input type="Password" class="form-control" placeholder="Confirm Password">
              </div>
              <div class="col-sm-6 d-grid">
                <button type="submit" class="btn btn-primary">Sign up</button>
              </div>
              <div class="col-sm-6">
                <ul class="list-unstyled d-flex mb-1 mt-sm-0 mt-3">
                  <li class="me-1"><a class="text-dark" href="login.html#"><b>Already Registered User? Click here to login</b></a></li>
                </ul>
              </div>
            </form>
            <div class="login-social-media border ps-4 pe-4 pb-4 pt-0 rounded mt-5">
              <div class="mb-4 d-block text-center"><p class="bg-white ps-2 pe-2 mt-3 d-block">Login or Sign in with</p></div>
              <form class="row">
                <div class="col-sm-6">
                  <a class="btn facebook-bg social-bg-hover text-white d-block mb-3" href="login.html#"><span><i class="fab fa-facebook-f"></i>Login with Facebook</span></a>
                </div>
                <div class="col-sm-6">
                  <a class="btn twitter-bg social-bg-hover text-white d-block mb-3" href="login.html#"><span><i class="fab fa-twitter"></i>Login with Twitter</span></a>
                </div>
                <div class="col-sm-6">
                  <a class="btn google-bg social-bg-hover text-white d-block mb-3 mb-sm-0" href="login.html#"><span><i class="fab fa-google"></i>Login with Google</span></a>
                </div>
                <div class="col-sm-6">
                  <a class="btn linkedin-bg social-bg-hover text-white d-block" href="login.html#"><span><i class="fab fa-linkedin-in"></i>Login with Linkedin</span></a>
                </div>
              </form>
            </div>
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



</body>
</html>
