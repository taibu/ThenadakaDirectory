<!--=================================
header -->
<header class="header">
    <nav class="navbar navbar-static-top navbar-expand-lg header-sticky">
        <div class="container-fluid">
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target=".navbar-collapse"><i
                    class="fa fa-bars"></i></button>
            <a class="navbar-brand" href="<?php echo base_url() ?>">
                <img class="img-fluid" src="<?php echo base_url('assets/images/logthena.jpg') ?>" alt="logo">
            </a>
           
            <div class="d-block d-md-flex align-items-center">
                <div class="call me-4 d-inline-block">
                    <a class="text-white" href="<?php echo base_url('aboutus') ?>">About Us </a>
                </div>
                <div class="call me-4 d-inline-block">
                    <a class="text-white" href="<?php echo base_url('contactus') ?>">Contact Us </a>
                </div>
                <div class="login d-inline-block me-4">
                    <a class="text-white" data-bs-toggle="modal" data-bs-target="#loginModal" href="index.html#">
                        Signin/Register</a>
                </div>
                <div class="add-listing d-none d-sm-block">
                    <a class="btn btn-primary btn-md" href="<?php echo base_url('login') ?>"> <i
                            class="fa fa-plus-circle"></i>Add listing </a>
                </div>
            </div>
        </div>
    </nav>
</header>
<!--=================================
 header -->

<!--=================================
 Modal login -->
<div class="modal login fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="loginModalLabel">Log in & Register</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                        <form class="row mt-4 align-items-center" action="<?php echo base_url('SubmitLoginform') ?>" method="post">
                            <div class="form-group mb-3 col-sm-12">
                                <input type="email" class="form-control" placeholder="Email" name="mail">
                            </div>
                            <div class="form-group mb-3 col-sm-12">
                                <input type="Password" class="form-control" placeholder="Password" name="pass">
                            </div>
                            <div class="col-sm-12 d-grid">
                                <button type="submit" class="btn btn-primary">Sign up</button>
                            </div>
                            <div class="col-sm-12">
                                <ul class="list-unstyled d-flex mb-1 mt-sm-0 mt-3" style="padding-top:30px;padding-bottom:50px;">
                                    <li class="me-1"><b>Not Registered User? </b><a class="" href="<?php echo base_url("register") ?>">
                                                Click here.</a></li>
                                </ul>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!--=================================
Modal login -->