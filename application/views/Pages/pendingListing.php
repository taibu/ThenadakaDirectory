<!DOCTYPE html>
<html lang="en">
<?php
  $getdata= $this->session->userdata('loggedinUser');
   
?>

<head>

    <?php $this->load->view("Templates/head") ?>

</head>

<body >

    <?php $this->load->view("Templates/headerAdmin") ?>


    <?php
                    $imageone=base_url()."/assets/images/listing/".$ad['photo'];
                    $imagetwo=base_url()."/assets/images/listing/".$ad['photo2'];
                    $imagethree=base_url()."/assets/images/listing/".$ad['photo3'];
                    $imagefour=base_url()."/assets/images/listing/".$ad['photo4'];
                    $imagefive=base_url()."/assets/images/listing/".$ad['photo5'];
            ?>

    <section class="space-ptb bg-light">
        <div class="containe" style="width:98%;margin:auto;">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <?php $this->load->view("Templates/adminsidebar") ?>
                </div>
                <div class="col-lg-9 col-md-8" style="background-color:white;">
                    <div class="container">
                        <div class="row mb-4">
                            <div class="col-md-9 ">
                                <h2><?php echo $ad['adName']; ?> <i class="fa fa-check-circle text-success ps-3"></i>
                                </h2>
                                <a class="listing-loaction text-dark mb-3 d-block"
                                    href="listing-single-01.html#"><?php echo $ad['Category']; ?></a>

                                <div class="d-sm-flex d-block">

                                </div>


                            </div>
                            <div class="col-md-3 text-md-end mt-0 mt-md-0">
                                <a class="btn btn-info" href=""> 
                                    Pending Listing</a>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-sm-12">
                                <div class="listing-detail-page">
                                    <div class="listing-detail-box mb-3">
                                        <div class="slider-slick">
                                            <div class="slider slider-for slick-initialized slick-slider"><button
                                                    class="slick-prev slick-arrow" aria-label="Previous" type="button"
                                                    style="">Previous</button>
                                                <div class="slick-list draggable">
                                                    <div class="slick-track"
                                                        style="opacity: 1; width: 12733px; transform: translate3d(-749px, 0px, 0px);">
                                                        <div class="slick-slide slick-cloned" data-slick-index="-1"
                                                            id="" aria-hidden="true" tabindex="-1"
                                                            style="width: 749px;">
                                                            <div><img class="img-fluid" src="<?php echo $imageone ?>"
                                                                    alt="" style="width: 100%; display: inline-block;">
                                                            </div>
                                                        </div>
                                                        <div class="slick-slide slick-current slick-active"
                                                            data-slick-index="0" aria-hidden="false"
                                                            style="width: 749px;">
                                                            <div><img class="img-fluid" src="<?php echo $imageone ?>"
                                                                    alt="" style="width: 100%; display: inline-block;">
                                                            </div>
                                                        </div>
                                                        <div class="slick-slide" data-slick-index="1" aria-hidden="true"
                                                            tabindex="-1" style="width: 749px;">
                                                            <div><img class="img-fluid" src="<?php echo $imageone ?>"
                                                                    alt="" style="width: 100%; display: inline-block;">
                                                            </div>
                                                        </div>
                                                        <div class="slick-slide" data-slick-index="2" aria-hidden="true"
                                                            tabindex="-1" style="width: 749px;">
                                                            <div><img class="img-fluid" src="<?php echo $imageone ?>"
                                                                    alt="" style="width: 100%; display: inline-block;">
                                                            </div>
                                                        </div>
                                                        <div class="slick-slide" data-slick-index="3" aria-hidden="true"
                                                            tabindex="-1" style="width: 749px;">
                                                            <div><img class="img-fluid" src="<?php echo $imageone ?>"
                                                                    alt="" style="width: 100%; display: inline-block;">
                                                            </div>
                                                        </div>
                                                        <div class="slick-slide" data-slick-index="4" aria-hidden="true"
                                                            tabindex="-1" style="width: 749px;">
                                                            <div><img class="img-fluid" src="<?php echo $imageone ?>"
                                                                    alt="" style="width: 100%; display: inline-block;">
                                                            </div>
                                                        </div>
                                                        <div class="slick-slide" data-slick-index="5" aria-hidden="true"
                                                            tabindex="-1" style="width: 749px;">
                                                            <div><img class="img-fluid" src="<?php echo $imageone ?>"
                                                                    alt="" style="width: 100%; display: inline-block;">
                                                            </div>
                                                        </div>
                                                        <div class="slick-slide" data-slick-index="6" aria-hidden="true"
                                                            tabindex="-1" style="width: 749px;">
                                                            <div><img class="img-fluid" src="<?php echo $imageone ?>"
                                                                    alt="" style="width: 100%; display: inline-block;">
                                                            </div>
                                                        </div>
                                                        <div class="slick-slide" data-slick-index="7" aria-hidden="true"
                                                            tabindex="-1" style="width: 749px;">
                                                            <div><img class="img-fluid" src="<?php echo $imageone ?>"
                                                                    alt="" style="width: 100%; display: inline-block;">
                                                            </div>
                                                        </div>
                                                        <div class="slick-slide slick-cloned" data-slick-index="8" id=""
                                                            aria-hidden="true" tabindex="-1" style="width: 749px;">
                                                            <div><img class="img-fluid" src="<?php echo $imageone ?>"
                                                                    alt="" style="width: 100%; display: inline-block;">
                                                            </div>
                                                        </div>
                                                        <div class="slick-slide slick-cloned" data-slick-index="9" id=""
                                                            aria-hidden="true" tabindex="-1" style="width: 749px;">
                                                            <div><img class="img-fluid" src="<?php echo $imageone ?>"
                                                                    alt="" style="width: 100%; display: inline-block;">
                                                            </div>
                                                        </div>
                                                        <div class="slick-slide slick-cloned" data-slick-index="10"
                                                            id="" aria-hidden="true" tabindex="-1"
                                                            style="width: 749px;">
                                                            <div><img class="img-fluid" src="<?php echo $imageone ?>"
                                                                    alt="" style="width: 100%; display: inline-block;">
                                                            </div>
                                                        </div>
                                                        <div class="slick-slide slick-cloned" data-slick-index="11"
                                                            id="" aria-hidden="true" tabindex="-1"
                                                            style="width: 749px;">
                                                            <div><img class="img-fluid" src="<?php echo $imageone ?>"
                                                                    alt="" style="width: 100%; display: inline-block;">
                                                            </div>
                                                        </div>
                                                        <div class="slick-slide slick-cloned" data-slick-index="12"
                                                            id="" aria-hidden="true" tabindex="-1"
                                                            style="width: 749px;">
                                                            <div><img class="img-fluid" src="<?php echo $imageone ?>"
                                                                    alt="" style="width: 100%; display: inline-block;">
                                                            </div>
                                                        </div>
                                                        <div class="slick-slide slick-cloned" data-slick-index="13"
                                                            id="" aria-hidden="true" tabindex="-1"
                                                            style="width: 749px;">
                                                            <div><img class="img-fluid" src="<?php echo $imageone ?>"
                                                                    alt="" style="width: 100%; display: inline-block;">
                                                            </div>
                                                        </div>
                                                        <div class="slick-slide slick-cloned" data-slick-index="14"
                                                            id="" aria-hidden="true" tabindex="-1"
                                                            style="width: 749px;">
                                                            <div><img class="img-fluid" src="<?php echo $imageone ?>"
                                                                    alt="" style="width: 100%; display: inline-block;">
                                                            </div>
                                                        </div>
                                                        <div class="slick-slide slick-cloned" data-slick-index="15"
                                                            id="" aria-hidden="true" tabindex="-1"
                                                            style="width: 749px;">
                                                            <div><img class="img-fluid" src="<?php echo $imageone ?>"
                                                                    alt="" style="width: 100%; display: inline-block;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><button class="slick-next slick-arrow" aria-label="Next"
                                                    type="button" style="">Next</button>
                                            </div>
                                            <div
                                                class="slider slider-nav d-none d-sm-block slick-initialized slick-slider">
                                                <button class="slick-prev slick-arrow" aria-label="Previous"
                                                    type="button" style="">Previous</button>
                                                <div class="slick-list draggable" style="padding: 0px 50px;">
                                                    <div class="slick-track"
                                                        style="opacity: 1; width: 2860px; transform: translate3d(-520px, 0px, 0px);">
                                                        <div class="slick-slide slick-cloned" data-slick-index="-6"
                                                            id="" aria-hidden="true" tabindex="-1"
                                                            style="width: 130px;">
                                                            <div><img class="img-fluid"
                                                                    src="<?php echo base_url('assets/images/gallery/06.jpg')?>"
                                                                    alt="" style="width: 100%; display: inline-block;">
                                                            </div>
                                                        </div>
                                                        <div class="slick-slide slick-cloned" data-slick-index="-5"
                                                            id="" aria-hidden="true" tabindex="-1"
                                                            style="width: 130px;">
                                                            <div><img class="img-fluid"
                                                                    src="<?php echo base_url('assets/images/gallery/06.jpg')?>"
                                                                    alt="" style="width: 100%; display: inline-block;">
                                                            </div>
                                                        </div>
                                                        <div class="slick-slide slick-cloned" data-slick-index="-4"
                                                            id="" aria-hidden="true" tabindex="-1"
                                                            style="width: 130px;">
                                                            <div><img class="img-fluid"
                                                                    src="<?php echo base_url('assets/images/gallery/06.jpg')?>"
                                                                    alt="" style="width: 100%; display: inline-block;">
                                                            </div>
                                                        </div>
                                                        <div class="slick-slide slick-cloned" data-slick-index="-3"
                                                            id="" aria-hidden="true" tabindex="-1"
                                                            style="width: 130px;">
                                                            <div><img class="img-fluid"
                                                                    src="<?php echo base_url('assets/images/gallery/06.jpg')?>"
                                                                    alt="" style="width: 100%; display: inline-block;">
                                                            </div>
                                                        </div>
                                                        <div class="slick-slide slick-cloned slick-active"
                                                            data-slick-index="-2" id="" aria-hidden="false"
                                                            tabindex="-1" style="width: 130px;">
                                                            <div><img class="img-fluid"
                                                                    src="<?php echo base_url('assets/images/gallery/06.jpg')?>"
                                                                    alt="" style="width: 100%; display: inline-block;">
                                                            </div>
                                                        </div>
                                                        <div class="slick-slide slick-cloned slick-active"
                                                            data-slick-index="-1" id="" aria-hidden="false"
                                                            tabindex="-1" style="width: 130px;">
                                                            <div><img class="img-fluid"
                                                                    src="<?php echo base_url('assets/images/gallery/06.jpg')?>"
                                                                    alt="" style="width: 100%; display: inline-block;">
                                                            </div>
                                                        </div>
                                                        <div class="slick-slide slick-current slick-active slick-center"
                                                            data-slick-index="0" aria-hidden="false"
                                                            style="width: 130px;">
                                                            <div><img class="img-fluid"
                                                                    src="<?php echo base_url('assets/images/gallery/06.jpg')?>"
                                                                    alt="" style="width: 100%; display: inline-block;">
                                                            </div>
                                                        </div>
                                                        <div class="slick-slide slick-active" data-slick-index="1"
                                                            aria-hidden="false" style="width: 130px;">
                                                            <div><img class="img-fluid"
                                                                    src="<?php echo base_url('assets/images/gallery/06.jpg')?>"
                                                                    alt="" style="width: 100%; display: inline-block;">
                                                            </div>
                                                        </div>
                                                        <div class="slick-slide slick-active" data-slick-index="2"
                                                            aria-hidden="false" style="width: 130px;">
                                                            <div><img class="img-fluid"
                                                                    src="<?php echo base_url('assets/images/gallery/06.jpg')?>"
                                                                    alt="" style="width: 100%; display: inline-block;">
                                                            </div>
                                                        </div>
                                                        <div class="slick-slide" data-slick-index="3" aria-hidden="true"
                                                            style="width: 130px;">
                                                            <div><img class="img-fluid"
                                                                    src="<?php echo base_url('assets/images/gallery/06.jpg')?>"
                                                                    alt="" style="width: 100%; display: inline-block;">
                                                            </div>
                                                        </div>
                                                        <div class="slick-slide" data-slick-index="4" aria-hidden="true"
                                                            style="width: 130px;">
                                                            <div><img class="img-fluid"
                                                                    src="<?php echo base_url('assets/images/gallery/06.jpg')?>"
                                                                    alt="" style="width: 100%; display: inline-block;">
                                                            </div>
                                                        </div>
                                                        <div class="slick-slide" data-slick-index="5" aria-hidden="true"
                                                            tabindex="-1" style="width: 130px;">
                                                            <div><img class="img-fluid"
                                                                    src="<?php echo base_url('assets/images/gallery/06.jpg')?>"
                                                                    alt="" style="width: 100%; display: inline-block;">
                                                            </div>
                                                        </div>
                                                        <div class="slick-slide" data-slick-index="6" aria-hidden="true"
                                                            tabindex="-1" style="width: 130px;">
                                                            <div><img class="img-fluid"
                                                                    src="<?php echo base_url('assets/images/gallery/06.jpg')?>"
                                                                    alt="" style="width: 100%; display: inline-block;">
                                                            </div>
                                                        </div>
                                                        <div class="slick-slide" data-slick-index="7" aria-hidden="true"
                                                            tabindex="-1" style="width: 130px;">
                                                            <div><img class="img-fluid"
                                                                    src="<?php echo base_url('assets/images/gallery/06.jpg')?>"
                                                                    alt="" style="width: 100%; display: inline-block;">
                                                            </div>
                                                        </div>
                                                        <div class="slick-slide slick-cloned" data-slick-index="8" id=""
                                                            aria-hidden="true" tabindex="-1" style="width: 130px;">
                                                            <div><img class="img-fluid"
                                                                    src="<?php echo base_url('assets/images/gallery/06.jpg')?>"
                                                                    alt="" style="width: 100%; display: inline-block;">
                                                            </div>
                                                        </div>
                                                        <div class="slick-slide slick-cloned" data-slick-index="9" id=""
                                                            aria-hidden="true" tabindex="-1" style="width: 130px;">
                                                            <div><img class="img-fluid"
                                                                    src="<?php echo base_url('assets/images/gallery/06.jpg')?>"
                                                                    alt="" style="width: 100%; display: inline-block;">
                                                            </div>
                                                        </div>
                                                        <div class="slick-slide slick-cloned slick-center"
                                                            data-slick-index="10" id="" aria-hidden="true" tabindex="-1"
                                                            style="width: 130px;">
                                                            <div><img class="img-fluid"
                                                                    src="<?php echo base_url('assets/images/gallery/06.jpg')?>"
                                                                    alt="" style="width: 100%; display: inline-block;">
                                                            </div>
                                                        </div>
                                                        <div class="slick-slide slick-cloned" data-slick-index="11"
                                                            id="" aria-hidden="true" tabindex="-1"
                                                            style="width: 130px;">
                                                            <div><img class="img-fluid"
                                                                    src="<?php echo base_url('assets/images/gallery/06.jpg')?>"
                                                                    alt="" style="width: 100%; display: inline-block;">
                                                            </div>
                                                        </div>
                                                        <div class="slick-slide slick-cloned" data-slick-index="12"
                                                            id="" aria-hidden="true" tabindex="-1"
                                                            style="width: 130px;">
                                                            <div><img class="img-fluid"
                                                                    src="<?php echo base_url('assets/images/gallery/06.jpg')?>"
                                                                    alt="" style="width: 100%; display: inline-block;">
                                                            </div>
                                                        </div>
                                                        <div class="slick-slide slick-cloned" data-slick-index="13"
                                                            id="" aria-hidden="true" tabindex="-1"
                                                            style="width: 130px;">
                                                            <div><img class="img-fluid"
                                                                    src="<?php echo base_url('assets/images/gallery/06.jpg')?>"
                                                                    alt="" style="width: 100%; display: inline-block;">
                                                            </div>
                                                        </div>
                                                        <div class="slick-slide slick-cloned" data-slick-index="14"
                                                            id="" aria-hidden="true" tabindex="-1"
                                                            style="width: 130px;">
                                                            <div><img class="img-fluid"
                                                                    src="<?php echo base_url('assets/images/gallery/06.jpg')?>"
                                                                    alt="" style="width: 100%; display: inline-block;">
                                                            </div>
                                                        </div>
                                                        <div class="slick-slide slick-cloned" data-slick-index="15"
                                                            id="" aria-hidden="true" tabindex="-1"
                                                            style="width: 130px;">
                                                            <div><img class="img-fluid"
                                                                    src="<?php echo base_url('assets/images/gallery/06.jpg')?>"
                                                                    alt="" style="width: 100%; display: inline-block;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><button class="slick-next slick-arrow" aria-label="Next"
                                                    type="button" style="">Next</button>
                                            </div>
                                        </div>
                                        <div class="mt-sm-4 mt-0">
                                            <div class="detail-title">
                                                <h5>Listing Description</h5>
                                            </div>
                                            <p><?php echo $ad['Description']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-12">
                            <div class="sidebar mb-0">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="widget">
                                            <div class="widget-title bg-primary">
                                                <h6 class="text-white mb-0"> <i class="fa fa-clock"></i> Opening hours
                                                </h6>
                                            </div>
                                            <div class="widget-content">
                                                <ul class="list-unstyled mb-0">
                                                    <li class="mb-2 d-flex"><strong
                                                            class="text-dark d-inline-block me-2">Monday:</strong> <span
                                                            class="ms-auto"> <?php echo $ad['MonworkHours']; ?></span>
                                                    </li>
                                                    <li class="mb-2 d-flex"><strong
                                                            class="text-dark d-inline-block me-2">Tuesday:</strong>
                                                        <span class="ms-auto"> <?php echo $ad['TueworkHours']; ?></span>
                                                    </li>
                                                    <li class="mb-2 d-flex"><strong
                                                            class="text-dark d-inline-block me-2">Wednesday:</strong>
                                                        <span class="ms-auto"> <?php echo $ad['WedworkHours']; ?></span>
                                                    </li>
                                                    <li class="mb-2 d-flex"><strong
                                                            class="text-dark d-inline-block me-2">Thursday:</strong>
                                                        <span class="ms-auto">
                                                            <?php echo $ad['ThursworkHours']; ?></span></li>
                                                    <li class="mb-2 d-flex"><strong
                                                            class="text-dark d-inline-block me-2">Friday:</strong> <span
                                                            class="ms-auto"> <?php echo $ad['FriworkHours']; ?></span>
                                                    </li>
                                                    <li class="mb-2 d-flex"><strong
                                                            class="text-dark d-inline-block me-2">Saturday:</strong>
                                                        <span class="ms-auto"> <?php echo $ad['SatworkHours']; ?></span>
                                                    </li>
                                                    <li class="mb-2 d-flex"><strong
                                                            class="text-dark d-inline-block me-2">Sunday:</strong> <span
                                                            class="ms-auto"> <?php echo $ad['SunworkHours']; ?></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="widget">
                                            <div class="widget-title bg-primary">
                                                <h6 class="text-white mb-0"> <i class="fas fa-map-marker-alt"></i>
                                                    Location </h6>
                                            </div>
                                            <div class="widget-content">

                                                <ul class="list-unstyled mb-3 mt-4 d-block">
                                                    <li class="mb-2"><strong
                                                            class="text-dark d-inline-block me-2">Address:</strong><?php echo $ad['Adress']; ?>
                                                    </li>

                                                    <li class="mb-2"><strong
                                                            class="text-dark d-inline-block me-2">Phone:</strong>(123)
                                                        345-6789</li>
                                                    <li class="mb-2"><strong
                                                            class="text-dark d-inline-block me-2">Facebook:</strong><?php echo $ad['facebooklink']; ?>
                                                    </li>
                                                    <li class="mb-2"><strong
                                                            class="text-dark d-inline-block me-2">Instagram:</strong><?php echo $ad['instalink']; ?>
                                                    </li>
                                                    <li class="mb-2"><strong
                                                            class="text-dark d-inline-block me-2">Twitter:</strong><?php echo $ad['twitterlink']; ?>
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="listing-detail-box mb-3">
                            <div class="detail-title">
                                <h5>APPROVE OR REJECT</h5>
                            </div>
                            <div class="row" style="padding-bottom:30px;padding-top:20px;">
                                <div class="col-md-6">
                                    <a href="<?php echo base_url('ApprovePendingListing/'.$ad['ListingId']) ?>" class="btn btn-primary" type="submit">Approve Listing</a>
                                </div>
                                <div class="col-md-6">
                                    <a class="btn btn-primary" type="submit">Reject Listing</a>
                                </div>
                            </div>
                            <form action="<?php echo base_url('Admin/Submitrating') ?>" method="post"> 
                                <div class="row">
                                    
                                    <div class="form-group mb-12 col-md-12">
                                        <input type="hidden"  name="Id" value="<?php echo $ad['ListingId'] ?>">   
                                       
                                       
                                    </div>
                                    
                                    <div class="form-group mb-3 col-md-12">
                                        <label class="form-label">Your message</label>
                                        <textarea class="form-control" name="message" rows="4" placeholder="Your message"></textarea>
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