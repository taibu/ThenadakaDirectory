<!DOCTYPE html>
<html lang="en">

<head>

    <?php $this->load->view("Templates/head") ?>

</head>

<body>

    <?php $this->load->view("Templates/header") ?>

    <section class="page-title bg-holder bg-overlay-black-50"
        style="background: url(<?php echo base_url('assets/images/bg/01.jpg') ?>);background-attachment:fixed;">
        <div class="container">
            <div class="row justify-content-center position-relative">
                <div class="col-lg-6 text-center">
                    <h1 class="text-white">Thanadaka Enterprises ltd</h1>
                    <p class="text-white lead"><i>Business brought to your door steps</i>
                    </p>

                </div>
            </div>
        </div>
    </section>
    <section class="space-pb mt-n5 position-relative z-index-1">
        <div class="container">
            <div class="row g-0 bg-white shadow">
                <div class="col-lg-7 bg-white">
                    <div class="contact-form p-md-5 p-4">
                        <h4 class="mb-4 text-primary">Let’s Get In Touch!</h4>
                        <form class="pt-3">
                            <div class="row">
                                <div class="mb-3 col-md-12">
                                    <label class="form-label">Your name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Your name">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Your email</label>
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Your email">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Your phone</label>
                                    <input type="text" class="form-control" id="phone" placeholder="Your phone">
                                </div>
                               
                                <div class="mb-3 col-md-12">
                                    <label class="form-label">Your message</label>
                                    <textarea class="form-control" rows="4" placeholder="Your message"></textarea>
                                </div>
                                <!-- <div class="mb-3 col-md-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label pe-5" for="customCheck1">I consent to having
                                            this website store my submitted information so they can respond to my
                                            inquiry.</label>
                                    </div>
                                </div> -->
                                <div class="col-md-12">
                                    <button class="btn btn-primary" href="contact-us.html#">Send message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 bg-primary p-md-5 p-4">
                    <h4 class="text-white mb-4">Contact information</h4>
                    <div class="contact-address pt-3">
                        <div class="d-flex mb-3">
                            <div class="contact-address-icon">
                                <i class="fa fa-map-marker text-white fa-3x"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="text-white">Address</h6>
                                <p class="text-white">214 West Arnold St. New York, NY 10002</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="contact-address-icon">
                                <i class="fa fa-envelope text-white fa-3x"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="text-white">Email</h6>
                                <p class="text-white">support@thenadaka.demo</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="contact-address-icon">
                                <i class="fa fa-phone text-white fa-3x"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="text-white">Phone Number</h6>
                                <a class="text-white mb-2" href="tel:(123) 345-6789">(256) 783-100703</a>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="contact-address-icon">
                                <i class="fa fa-fax fa-3x"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="text-white">Fax</h6>
                                <a class="text-white mb-2" href="tel:(456) 478-2589">(256) 783-100703</a>
                            </div>
                        </div>
                        <div class="social-icon-02 mt-4 mt-md-5">
                            <div class="d-flex align-items-center">
                                <h6 class="me-3 mb-0 text-white">Social :</h6>
                                <ul class="list-unstyled mb-0 d-flex">
                                    <li><a href="" class="text-white me-3"> <i
                                                class="fa fa-facebook-f"></i> </a></li>
                                    <li><a href="" class="text-white me-3"> <i
                                                class="fa fa-twitter"></i> </a></li>
                                    <li><a href="" class="text-white me-3"> <i
                                                class="fa fa-linkedin"></i> </a></li>
                                    
                                </ul>
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