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
                                    <input type="Password" class="form-control" placeholder="Password" name="password">
                                </div>
                                <div class="mb-3 col-sm-12">
                                    <input type="Password" class="form-control" placeholder="Confirm Password" name="password2">
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



</body>

</html>