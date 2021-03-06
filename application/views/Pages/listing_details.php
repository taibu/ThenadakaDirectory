<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Directro - Directory and Listing Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Thenandaka </title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/logthena.jpg') ?>" />

    <!-- Google Font -->
    <link rel="stylesheet" href="../../fonts.googleapis.com/css2.css') ?>">

    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome/all.min.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/flaticon/flaticon.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap/bootstrap.min.css') ?>" />

    <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/select2/select2.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl-carousel/owl.carousel.min.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/magnific-popup/magnific-popup.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/slick/slick-theme.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/datetimepicker/datetimepicker.min.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/range-slider/ion.rangeSlider.css') ?>" />

    <!-- Template Style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <!--=================================
header -->
    <?php $this->load->view("Templates/header") ?>
    <!--=================================
 header -->



    <!--=================================
Page title -->
    <section class="page-title bg-holder bg-overlay-black-50"
        style="background: url(<?php echo base_url('assets/images/bg/01.jpg')?>);">
        <div class="container">
            <div class="row justify-content-center position-relative">
                <div class="col-lg-10 text-center">
                    <h1 class="text-white"><?php echo $addetails['adName']; ?> </h1>
                    <p class="text-white lead"><?php echo $addetails['Category']; ?> </p>

                </div>
            </div>
        </div>
    </section>

    <?php if(isset($ratings)){
                        if($ratings->num_rows()>0){
                            $rating=0;
                            foreach($ratings->result() as $row){ 
                            $rating+=$row->Rating;
                            } 
                            $average=( $rating/$ratings->num_rows());
                            $average=number_format($average, 1, '.', '');
                          }else{
                            $average=number_format(0, 1, '.', '');  
                          }
                        }else{
                            $average=number_format(0, 1, '.', '');   
                          }

                         ?>

    <?php
                                $imageone=base_url()."/assets/images/listing/".$addetails['photo'];
                                $imagetwo=base_url()."/assets/images/listing/".((empty($addetails['photo2']))?"placeholder2.jpg":$addetails['photo2']);
                                $imagethree=base_url()."/assets/images/listing/".((empty($addetails['photo3']))?"placeholder2.jpg":$addetails['photo3']);
                                $imagefour=base_url()."/assets/images/listing/".((empty($addetails['photo4']))?"placeholder2.jpg":$addetails['photo4']);
                                $imagefive=base_url()."/assets/images/listing/".((empty($addetails['photo5']))?"placeholder2.jpg":$addetails['photo5']);
                        ?>
    <!--=================================
Page title -->

    <!--=================================
Listing single -->
    <section class=" bg-light">
        <div class="container">

            <div class="row">
                <div class="col-lg-8"><br><br>
                    <ul class="list-unstyled listing-detail-meta mb-4">
                        <li><a href="#" onclick="hideShowTab('overviewTab')"><i class="fa fa-eye"></i>OVERVIEW</a></li>
                        <li><a href="#" onclick="hideShowTab('editTab')"><i class="fa fa-edit"></i>CONTACT & WORK
                                HOURS</a></li>
                        <li><a href="#" onclick="hideShowTab('deactivateTab')"><i class="fa fa-remove"></i>PRODUCTS &
                                SERVICES</a>
                        </li>

                    </ul>
                    <div id="overviewTab">
                        <div class="row mb-4">
                            <div class="col-md-9">
                                <h5><?php echo $addetails['adName']; ?> <span style="font-size:25px;">(
                                        <?php echo $addetails['Adress']; ?> ) </span> </h5>
                                <a class="listing-loaction text-dark mb-3 d-block"
                                    href=""><?php echo $addetails['Category']; ?></a>
                            </div>

                        </div>
                        <div class="listing-detail-page">
                            <div class="listing-detail-box mb-3">
                                <div class="slider-slick">
                                    <div class="slider slider-for">
                                        <img class="img-fluid" src="<?php echo $imageone ?>" alt=""
                                            style="max-height:400px;">
                                        <img class="img-fluid" src="<?php echo $imagetwo ?>" alt=""
                                            style="max-height:400px;">
                                        <img class="img-fluid" src="<?php echo $imagethree ?>" alt=""
                                            style="max-height:400px;">
                                        <img class="img-fluid" src="<?php echo $imagefour ?>" alt=""
                                            style="max-height:400px;">
                                        <img class="img-fluid" src="<?php echo $imagefive ?>" alt=""
                                            style="max-height:400px;">
                                        <img class="img-fluid" src="<?php echo $imageone ?>" alt=""
                                            style="max-height:400px;">
                                        <img class="img-fluid" src="<?php echo $imageone ?>" alt=""
                                            style="max-height:400px;">
                                        <img class="img-fluid" src="<?php echo $imageone ?>" alt=""
                                            style="max-height:400px;">
                                    </div>
                                    <div class="slider slider-nav d-none d-sm-block">
                                        <img class="img-fluid" src="<?php echo $imageone ?>" alt=""
                                            style="max-height:100px;">
                                        <img class="img-fluid" src="<?php echo $imagetwo ?>" alt=""
                                            style="max-height:100px;">
                                        <img class="img-fluid" src="<?php echo $imagethree ?>" alt=""
                                            style="max-height:100px;">
                                        <img class="img-fluid" src="<?php echo $imagefour ?>" alt=""
                                            style="max-height:100px;">
                                        <img class="img-fluid" src="<?php echo $imagefive ?>" alt=""
                                            style="max-height:100px;">
                                        <img class="img-fluid" src="<?php echo $imageone ?>" alt=""
                                            style="max-height:100px;">
                                        <img class="img-fluid" src="<?php echo $imageone ?>" alt=""
                                            style="max-height:100px;">
                                        <img class="img-fluid" src="<?php echo $imageone ?>" alt=""
                                            style="max-height:100px;">
                                    </div>
                                </div>
                                <div class="mt-sm-4 mt-0">
                                    <div class="detail-title">
                                        <h5>Listing Description</h5>
                                    </div>
                                    <p><?php echo $addetails['Description']; ?></p>
                                </div>
                            </div>
                            <?php if(isset($ratings) && ($ratings->num_rows()>0)){ ?>
                            <div class="listing-detail-box mb-3">
                                <div class="detail-title">
                                    <h5>Listing 5 Recent Reviews <span style="padding:4px;border-radius:5px;"
                                            class="bg-success text-white me-2 pull-right"><?php echo $average ?>
                                            Rating</span> </h5>
                                </div>
                                <?php if($ratings->num_rows()>0){
                                $i=1;
                            foreach($ratings->result() as $row){ 
                                //$imageone=base_url()."/assets/images/listing/".$row->photo; 
                            ?>
                                <div class="row border-bottom pb-4 mb-4">
                                    <div class="col-md-1">
                                        <div class="avatar avatar-lg">
                                            <img src="<?php echo base_url('assets/images/avatar/01.png') ?>"
                                                class="img-fluid rounded-circle" alt="...">
                                        </div>
                                    </div>
                                    <div class="col-md-11">
                                        <div class="px-md-4 mt-3 mt-md-0">
                                            <div class="d-flex align-items-center">
                                                <h6 class="mt-0"><?php echo $row->User ?></h6>
                                                <div class="d-flex ms-auto mb-3">
                                                    <span
                                                        class="px-2 border text-success border-radius d-inline-block me-2"><?php echo $row->Rating ?></span>
                                                    <ul class="list-unstyled d-flex mb-0">
                                                        <?php for($i=0;$i<floor($row->Rating);$i++){ ?>
                                                        <li><i class="fa fa-star text-warning"></i></li>
                                                        <?php } ?>
                                                        <?php for($i=0;$i<(5-floor($row->Rating));$i++){ ?>
                                                        <li><i class="fa fa-star text-light"></i></li>
                                                        <?php } ?>
                                                        <!-- <li><i class="fa fa-star text-warning"></i></li>
                                                    <li><i class="fa fa-star text-warning"></i></li>
                                                    <li><i class="fa fa-star text-warning"></i></li>
                                                    <li><i class="fa fa-star text-light"></i></li> -->
                                                    </ul>
                                                </div>
                                            </div>
                                            <p><?php echo $row->Description ?></p>
                                            <div class="d-flex">
                                                <!-- <a class="bg-light text-dark border-radius px-3 py-1 font-sm"
                                                href="listing-single-01.html#"> <i class="fas fa-reply pe-1"></i> Reply
                                                Review </a> -->
                                                <!-- <a class="bg-success-soft text-success border-radius px-3 py-1 ms-4 font-sm"
                                                href="listing-single-01.html#"> <i class="far fa-thumbs-up pe-1"></i> 56
                                                Votes</a>
                                            <a class="bg-danger-soft text-danger border-radius px-3 py-1 ms-4 font-sm"
                                                href="listing-single-01.html#"> <i class="far fa-thumbs-down pe-1"></i>
                                                06</a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } } ?>


                            </div>
                            <?php } ?>
                            <div class="listing-detail-box mb-3">
                                <div class="detail-title">
                                    <h5>Add Your review / Rating</h5>
                                </div>
                                <form action="<?php echo base_url('Admin/Submitrating') ?>" method="post">
                                    <div class="row">
                                        <div class="form-group mb-3 col-md-12">
                                            <div class="ratings">
                                                <input type="radio" id="star5" name="ratings" value="5"><label
                                                    class="full form-label" for="star5"
                                                    title="Awesome - 5 stars"></label>
                                                <input type="radio" id="star4half" name="ratings" value="4.5"><label
                                                    class="half form-label" for="star4half"
                                                    title="Pretty good - 4.5 stars"></label>
                                                <input type="radio" id="star4" name="ratings" value="4"><label
                                                    class="full form-label" for="star4"
                                                    title="Pretty good - 4 stars"></label>
                                                <input type="radio" id="star3half" name="ratings" value="3.5"><label
                                                    class="half form-label" for="star3half"
                                                    title="Meh - 3.5 stars"></label>
                                                <input type="radio" id="star3" name="ratings" value="3"><label
                                                    class="full form-label" for="star3" title="Meh - 3 stars"></label>
                                                <input type="radio" id="star2half" name="ratings" value="2.5"><label
                                                    class="half form-label" for="star2half"
                                                    title="Kinda bad - 2.5 stars"></label>
                                                <input type="radio" id="star2" name="ratings" value="2"><label
                                                    class="full form-label" for="star2"
                                                    title="Kinda bad - 2 stars"></label>
                                                <input type="radio" id="star1half" name="ratings" value="1.5"><label
                                                    class="half form-label" for="star1half"
                                                    title="Meh - 1.5 stars"></label>
                                                <input type="radio" id="star1" name="ratings" value="1"><label
                                                    class="full form-label" for="star1"
                                                    title="Sucks big time - 1 star"></label>
                                                <input type="radio" id="starhalf" name="ratings" value="0.5"><label
                                                    class="half form-label" for="starhalf"
                                                    title="Sucks big time - 0.5 stars"></label>
                                            </div>
                                        </div>
                                        <div class="form-group mb-12 col-md-12">
                                            <input type="hidden" name="Id"
                                                value="<?php echo $addetails['ListingId'] ?>">
                                            <label class="form-label">Your name</label>
                                            <input type="text" class="form-control" name="name" placeholder="Your name">
                                        </div>

                                        <div class="form-group mb-3 col-md-12">
                                            <label class="form-label">Your message</label>
                                            <textarea class="form-control" name="message" rows="4"
                                                placeholder="Your message"></textarea>
                                        </div>

                                        <div class="col-md-12">
                                            <button class="btn btn-primary" type="submit">Submit Review</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="row">
                                    <div class="mt-3 col-sm-12">
                                        <?php require_once(APPPATH . 'views/Templates/error.php'); ?>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div id="editTab">
                        <div class="col-lg-12" style="background:white;padding:20px;">
                            <div class="row">

                                <div class="col-md-6" style="padding:20px;">
                                    <div class="widget-title ">
                                        <h4 class="mb-0"> <b>Working hours</b> </h4>
                                    </div>
                                    <div class="widget-content">
                                        <ul class="list-unstyled mb-0">
                                            <li class="mb-2 d-flex"><strong
                                                    class="text-dark d-inline-block me-2">Monday:</strong>
                                                <span class="ms-auto">
                                                    <?php echo $addetails['MonworkHours']; ?></span>
                                            </li>
                                            <li class="mb-2 d-flex"><strong
                                                    class="text-dark d-inline-block me-2">Tuesday:</strong>
                                                <span class="ms-auto">
                                                    <?php echo $addetails['TueworkHours']; ?></span>
                                            </li>
                                            <li class="mb-2 d-flex"><strong
                                                    class="text-dark d-inline-block me-2">Wednesday:</strong>
                                                <span class="ms-auto">
                                                    <?php echo $addetails['WedworkHours']; ?></span>
                                            </li>
                                            <li class="mb-2 d-flex"><strong
                                                    class="text-dark d-inline-block me-2">Thursday:</strong>
                                                <span class="ms-auto">
                                                    <?php echo $addetails['ThursworkHours']; ?></span>
                                            </li>
                                            <li class="mb-2 d-flex"><strong
                                                    class="text-dark d-inline-block me-2">Friday:</strong>
                                                <span class="ms-auto">
                                                    <?php echo $addetails['FriworkHours']; ?></span>
                                            </li>
                                            <li class="mb-2 d-flex"><strong
                                                    class="text-dark d-inline-block me-2">Saturday:</strong>
                                                <span class="ms-auto">
                                                    <?php echo $addetails['SatworkHours']; ?></span>
                                            </li>
                                            <li class="mb-2 d-flex"><strong
                                                    class="text-dark d-inline-block me-2">Sunday:</strong>
                                                <span class="ms-auto">
                                                    <?php echo $addetails['SunworkHours']; ?></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6" style="padding:20px;">
                                    <div class="widget-title ">
                                        <h4 class=" mb-0"> <b>Address & Contacts</b></h4>
                                    </div>
                                    <div class="widget-content">

                                        <ul class="list-unstyled mb-3 mt-4 d-block">
                                            <li class="mb-2"><strong
                                                    class="text-dark d-inline-block me-2">Address:</strong><?php echo $addetails['Adress']; ?>
                                            </li>

                                            <li class="mb-2"><strong
                                                    class="text-dark d-inline-block me-2">Phone:</strong>(123)
                                                345-6789</li>
                                            <li class="mb-2"><strong
                                                    class="text-dark d-inline-block me-2">Facebook:</strong><?php echo $addetails['facebooklink']; ?>
                                            </li>
                                            <li class="mb-2"><strong
                                                    class="text-dark d-inline-block me-2">Instagram:</strong><?php echo $addetails['instalink']; ?>
                                            </li>
                                            <li class="mb-2"><strong
                                                    class="text-dark d-inline-block me-2">Twitter:</strong><?php echo $addetails['twitterlink']; ?>
                                            </li>
                                        </ul>

                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div id="deactivateTab">
                        <div class="widget" style="padding:20px;background:white;">

                            <div class="widget-content">
                                <?php if($services->num_rows()>0){
                                        foreach($services->result() as $row){
                                       ?>
                                <div class="d-flex mb-3 align-items-top">
                                    <div class="avatar avatar-xl h-auto">
                                        <img class="img-fluid"
                                            src="<?php echo base_url('assets/images/listing/'.$row->photo) ?>"
                                            alt="">
                                    </div>
                                    <div class="ms-3">
                                        <h5 class="text-dark"> <?php echo $row->ProductName ?> </h5>
                                        <p class="d-flex font-sm text-dark" href="blog-single.html#">
                                            <?php echo $row->ProductDescription ?></p>
                                    </div>
                                </div>
                                <?php } }else{ ?>
                                <h5 style="margin:3em;"><i>Content creater did not add products/services to this listing</i></h5>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div id="RatingsTab">

                    </div>
                    <div id="addproductTab">

                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="sidebar mb-0">
                        <br><br>
                        <div class="widget" >
                            <div class="widget-title">
                                <h4 class="text-dark mb-0"> Related listing
                                <a class="btn btn-primary btn-sm pull-right" href="<?php echo base_url("ViewCategory/".$addetails['Category']); ?>" style="border-radius:0px;"> VIEW ALL </a>
                                </h4>
                            </div>
                            <div class="widget-content">
                            <?php if($mostratedads->num_rows()>0){
                                    $i=1;
                                foreach($mostratedads->result() as $row){ 
                                    $imageone=base_url()."/assets/images/listing/".$row->photo; 
                                ?>
                                 <div class="recent-list-item d-flex mb-3" style="padding-bottom:40px;">
                                    
                                    <img class="img-fluid w-25" style="height:70px;" src="<?php echo $imageone ?>" alt="">
                                    <div class="recent-list-item-info ms-3">
                                        <h6 style="Max-width:90%;text-align:justify;overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 1;-webkit-box-orient: vertical;" class=" address text-primary mb-2 d-block"><a href="<?php echo base_url('listing/'.$row->ListingId) ?>"><?php echo $row->adName ?></a></h6>
                                        <p class=" mb-0" style="Max-width:90%;text-align:justify;overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;">
                                            <?php echo $row->Description ?></p>
                                    </div>
                                   
                                </div>
                                 <?php } } ?>
                                
                                
                            </div>
                        </div>
                        <div class="widget" >
                            <div class="widget-title">
                                <h4 class="text-dark mb-0"> Recent listing 
                                <a class="btn btn-primary btn-sm pull-right" href="<?php echo base_url("RecentListing"); ?>" style="border-radius:0px;"> VIEW ALL </a>
                                </h4>
                            </div>
                            <div class="widget-content">
                            <?php if($mostrecenttedads->num_rows()>0){
                                    $i=1;
                                foreach($mostrecenttedads->result() as $row){ 
                                    $imageone=base_url()."/assets/images/listing/".$row->photo; 
                                ?>
                                 <div class="recent-list-item d-flex mb-3" style="padding-bottom:40px;">
                                    
                                    <img class="img-fluid w-25" style="height:70px;" src="<?php echo $imageone ?>" alt="">
                                    <div class="recent-list-item-info ms-3">
                                        <h6 style="Max-width:90%;text-align:justify;overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 1;-webkit-box-orient: vertical;" class=" address text-primary mb-2 d-block"><a href="<?php echo base_url('listing/'.$row->ListingId) ?>"><?php echo $row->adName ?></a></h6>
                                        <p class=" mb-0" style="Max-width:90%;text-align:justify;overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;">
                                            <?php echo $row->Description ?></p>
                                    </div>
                                   
                                </div>
                                 <?php } } ?>
                                
                                
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
Listing single -->

    <!--=================================
footer-->
    <?php $this->load->view("Templates/footer") ?>
    <!--=================================
footer-->

    <!--=================================
Back To Top-->

    <div id="back-to-top" class="back-to-top">
        <a href=""> <i class="fas fa-angle-up"></i></a>
    </div>

    <!--=================================
Back To Top-->

    <!--=================================
Javascript -->
    <script>
    //var a = document.getElementById("overviewTab").style.display = "none";
    var b = document.getElementById("editTab").style.display = "none";
    var c = document.getElementById("deactivateTab").style.display = "none";
    var d = document.getElementById("RatingsTab").style.display = "none";
    var e = document.getElementById("addproductTab").style.display = "none";

    function hideShowTab(id) {
        var a = document.getElementById("overviewTab").style.display = "none";
        var b = document.getElementById("editTab").style.display = "none";
        var c = document.getElementById("deactivateTab").style.display = "none";
        var d = document.getElementById("RatingsTab").style.display = "none";
        var e = document.getElementById("addproductTab").style.display = "none";
        var y = document.getElementById(id).style.display = "block";
    }
    </script>
    <!-- JS Global Compulsory (Do not remove)-->
    <script src="<?php echo base_url('assets/js/jquery-3.6.0.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/popper/popper.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap/bootstrap.min.js') ?>"></script>

    <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
    <script src="<?php echo base_url('assets/js/select2/select2.full.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/owl-carousel/owl.carousel.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/jarallax/jarallax.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/magnific-popup/jquery.magnific-popup.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/datetimepicker/moment.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/range-slider/ion.rangeSlider.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/slick/slick.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/datetimepicker/datetimepicker.min.js') ?>"></script>

    <!-- Template Scripts (Do not remove)-->
    <script src="<?php echo base_url('assets/js/custom.js') ?>"></script>

</body>

</html>