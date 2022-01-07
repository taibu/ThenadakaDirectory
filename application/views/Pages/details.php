<!DOCTYPE html>
<html lang="en">

<head>

    <?php $this->load->view("Templates/head") ?>
    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel="stylesheet" href="<?php echo base_url('css/font-awesome/all.min.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('css/flaticon/flaticon.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap/bootstrap.min.css') ?>" />

    <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
    <link rel="stylesheet" href="<?php echo base_url('css/select2/select2.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('css/owl-carousel/owl.carousel.min.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('css/magnific-popup/magnific-popup.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('css/slick/slick-theme.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('css/datetimepicker/datetimepicker.min.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('css/range-slider/ion.rangeSlider.css') ?>" />

</head>

<body>

    <?php $this->load->view("Templates/header") ?>

    <?php
                    $imageone=base_url()."/assets/images/listing/".$addetails['photo'];
                    $imagetwo=base_url()."/assets/images/listing/".$addetails['photo2'];
                    $imagethree=base_url()."/assets/images/listing/".$addetails['photo3'];
                    $imagefour=base_url()."/assets/images/listing/".$addetails['photo4'];
                    $imagefive=base_url()."/assets/images/listing/".$addetails['photo5'];
            ?>
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
                          }}else{
                            $average=number_format(0, 1, '.', '');   
                          }

                         ?>
    <section class="space-ptb bg-light">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-9">
                    <h2><?php echo $addetails['adName']; ?> <i class="fa fa-check-circle text-success ps-3"></i></h2>
                    <a class="listing-loaction text-dark mb-3 d-block"
                        href="listing-single-01.html#"><?php echo $addetails['Category']; ?></a>

                    <div class="d-sm-flex d-block">
                        <span
                            class="px-2 border text-success border-success border-radius d-inline-block me-2"><?php echo $average; ?></span>

                        <span class="d-inline-block ms-0 ms-sm-3">Rating</span>
                    </div>


                </div>
                <div class="col-md-3 text-md-end mt-0 mt-md-0">
                    <a class="btn btn-success" href="listing-single-01.html#"> <i class="far fa-check-circle pe-2"></i>
                        Verified Listing</a>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="listing-detail-page">
                        <div class="listing-detail-box mb-3">
                            <div class="slider-slick">
                                <div class="slider slider-for slick-initialized slick-slider"><button
                                        class="slick-prev slick-arrow" aria-label="Previous" type="button"
                                        style="">Previous</button>
                                    <div class="slick-list draggable">
                                        <div class="slick-track"
                                            style="opacity: 1; width: 12733px; transform: translate3d(-749px, 0px, 0px);">
                                            <div class="slick-slide slick-cloned" data-slick-index="-1" id=""
                                                aria-hidden="true" tabindex="-1" style="width: 749px;">
                                                <div><img class="img-fluid" src="<?php echo $imageone ?>" alt=""
                                                        style="width: 100%; display: inline-block;"></div>
                                            </div>
                                            <div class="slick-slide slick-current slick-active" data-slick-index="0"
                                                aria-hidden="false" style="width: 749px;">
                                                <div><img class="img-fluid" src="<?php echo $imageone ?>" alt=""
                                                        style="width: 100%; display: inline-block;"></div>
                                            </div>
                                            <div class="slick-slide" data-slick-index="1" aria-hidden="true"
                                                tabindex="-1" style="width: 749px;">
                                                <div><img class="img-fluid" src="<?php echo $imageone ?>" alt=""
                                                        style="width: 100%; display: inline-block;"></div>
                                            </div>
                                            <div class="slick-slide" data-slick-index="2" aria-hidden="true"
                                                tabindex="-1" style="width: 749px;">
                                                <div><img class="img-fluid" src="<?php echo $imageone ?>" alt=""
                                                        style="width: 100%; display: inline-block;"></div>
                                            </div>
                                            <div class="slick-slide" data-slick-index="3" aria-hidden="true"
                                                tabindex="-1" style="width: 749px;">
                                                <div><img class="img-fluid" src="<?php echo $imageone ?>" alt=""
                                                        style="width: 100%; display: inline-block;"></div>
                                            </div>
                                            <div class="slick-slide" data-slick-index="4" aria-hidden="true"
                                                tabindex="-1" style="width: 749px;">
                                                <div><img class="img-fluid" src="<?php echo $imageone ?>" alt=""
                                                        style="width: 100%; display: inline-block;"></div>
                                            </div>
                                            <div class="slick-slide" data-slick-index="5" aria-hidden="true"
                                                tabindex="-1" style="width: 749px;">
                                                <div><img class="img-fluid" src="<?php echo $imageone ?>" alt=""
                                                        style="width: 100%; display: inline-block;"></div>
                                            </div>
                                            <div class="slick-slide" data-slick-index="6" aria-hidden="true"
                                                tabindex="-1" style="width: 749px;">
                                                <div><img class="img-fluid" src="<?php echo $imageone ?>" alt=""
                                                        style="width: 100%; display: inline-block;"></div>
                                            </div>
                                            <div class="slick-slide" data-slick-index="7" aria-hidden="true"
                                                tabindex="-1" style="width: 749px;">
                                                <div><img class="img-fluid" src="<?php echo $imageone ?>" alt=""
                                                        style="width: 100%; display: inline-block;"></div>
                                            </div>
                                            <div class="slick-slide slick-cloned" data-slick-index="8" id=""
                                                aria-hidden="true" tabindex="-1" style="width: 749px;">
                                                <div><img class="img-fluid" src="<?php echo $imageone ?>" alt=""
                                                        style="width: 100%; display: inline-block;"></div>
                                            </div>
                                            <div class="slick-slide slick-cloned" data-slick-index="9" id=""
                                                aria-hidden="true" tabindex="-1" style="width: 749px;">
                                                <div><img class="img-fluid" src="<?php echo $imageone ?>" alt=""
                                                        style="width: 100%; display: inline-block;"></div>
                                            </div>
                                            <div class="slick-slide slick-cloned" data-slick-index="10" id=""
                                                aria-hidden="true" tabindex="-1" style="width: 749px;">
                                                <div><img class="img-fluid" src="<?php echo $imageone ?>" alt=""
                                                        style="width: 100%; display: inline-block;"></div>
                                            </div>
                                            <div class="slick-slide slick-cloned" data-slick-index="11" id=""
                                                aria-hidden="true" tabindex="-1" style="width: 749px;">
                                                <div><img class="img-fluid" src="<?php echo $imageone ?>" alt=""
                                                        style="width: 100%; display: inline-block;"></div>
                                            </div>
                                            <div class="slick-slide slick-cloned" data-slick-index="12" id=""
                                                aria-hidden="true" tabindex="-1" style="width: 749px;">
                                                <div><img class="img-fluid" src="<?php echo $imageone ?>" alt=""
                                                        style="width: 100%; display: inline-block;"></div>
                                            </div>
                                            <div class="slick-slide slick-cloned" data-slick-index="13" id=""
                                                aria-hidden="true" tabindex="-1" style="width: 749px;">
                                                <div><img class="img-fluid" src="<?php echo $imageone ?>" alt=""
                                                        style="width: 100%; display: inline-block;"></div>
                                            </div>
                                            <div class="slick-slide slick-cloned" data-slick-index="14" id=""
                                                aria-hidden="true" tabindex="-1" style="width: 749px;">
                                                <div><img class="img-fluid" src="<?php echo $imageone ?>" alt=""
                                                        style="width: 100%; display: inline-block;"></div>
                                            </div>
                                            <div class="slick-slide slick-cloned" data-slick-index="15" id=""
                                                aria-hidden="true" tabindex="-1" style="width: 749px;">
                                                <div><img class="img-fluid" src="<?php echo $imageone ?>" alt=""
                                                        style="width: 100%; display: inline-block;"></div>
                                            </div>
                                        </div>
                                    </div><button class="slick-next slick-arrow" aria-label="Next" type="button"
                                        style="">Next</button>
                                </div>
                                <div class="slider slider-nav d-none d-sm-block slick-initialized slick-slider"><button
                                        class="slick-prev slick-arrow" aria-label="Previous" type="button"
                                        style="">Previous</button>
                                    <div class="slick-list draggable" style="padding: 0px 50px;">
                                        <div class="slick-track"
                                            style="opacity: 1; width: 2860px; transform: translate3d(-520px, 0px, 0px);">
                                            <div class="slick-slide slick-cloned" data-slick-index="-6" id=""
                                                aria-hidden="true" tabindex="-1" style="width: 130px;">
                                                <div><img class="img-fluid"
                                                        src="<?php echo base_url('assets/images/gallery/06.jpg')?>"
                                                        alt="" style="width: 100%; display: inline-block;"></div>
                                            </div>
                                            <div class="slick-slide slick-cloned" data-slick-index="-5" id=""
                                                aria-hidden="true" tabindex="-1" style="width: 130px;">
                                                <div><img class="img-fluid"
                                                        src="<?php echo base_url('assets/images/gallery/06.jpg')?>"
                                                        alt="" style="width: 100%; display: inline-block;"></div>
                                            </div>
                                            <div class="slick-slide slick-cloned" data-slick-index="-4" id=""
                                                aria-hidden="true" tabindex="-1" style="width: 130px;">
                                                <div><img class="img-fluid"
                                                        src="<?php echo base_url('assets/images/gallery/06.jpg')?>"
                                                        alt="" style="width: 100%; display: inline-block;"></div>
                                            </div>
                                            <div class="slick-slide slick-cloned" data-slick-index="-3" id=""
                                                aria-hidden="true" tabindex="-1" style="width: 130px;">
                                                <div><img class="img-fluid"
                                                        src="<?php echo base_url('assets/images/gallery/06.jpg')?>"
                                                        alt="" style="width: 100%; display: inline-block;"></div>
                                            </div>
                                            <div class="slick-slide slick-cloned slick-active" data-slick-index="-2"
                                                id="" aria-hidden="false" tabindex="-1" style="width: 130px;">
                                                <div><img class="img-fluid"
                                                        src="<?php echo base_url('assets/images/gallery/06.jpg')?>"
                                                        alt="" style="width: 100%; display: inline-block;"></div>
                                            </div>
                                            <div class="slick-slide slick-cloned slick-active" data-slick-index="-1"
                                                id="" aria-hidden="false" tabindex="-1" style="width: 130px;">
                                                <div><img class="img-fluid"
                                                        src="<?php echo base_url('assets/images/gallery/06.jpg')?>"
                                                        alt="" style="width: 100%; display: inline-block;"></div>
                                            </div>
                                            <div class="slick-slide slick-current slick-active slick-center"
                                                data-slick-index="0" aria-hidden="false" style="width: 130px;">
                                                <div><img class="img-fluid"
                                                        src="<?php echo base_url('assets/images/gallery/06.jpg')?>"
                                                        alt="" style="width: 100%; display: inline-block;"></div>
                                            </div>
                                            <div class="slick-slide slick-active" data-slick-index="1"
                                                aria-hidden="false" style="width: 130px;">
                                                <div><img class="img-fluid"
                                                        src="<?php echo base_url('assets/images/gallery/06.jpg')?>"
                                                        alt="" style="width: 100%; display: inline-block;"></div>
                                            </div>
                                            <div class="slick-slide slick-active" data-slick-index="2"
                                                aria-hidden="false" style="width: 130px;">
                                                <div><img class="img-fluid"
                                                        src="<?php echo base_url('assets/images/gallery/06.jpg')?>"
                                                        alt="" style="width: 100%; display: inline-block;"></div>
                                            </div>
                                            <div class="slick-slide" data-slick-index="3" aria-hidden="true"
                                                style="width: 130px;">
                                                <div><img class="img-fluid"
                                                        src="<?php echo base_url('assets/images/gallery/06.jpg')?>"
                                                        alt="" style="width: 100%; display: inline-block;"></div>
                                            </div>
                                            <div class="slick-slide" data-slick-index="4" aria-hidden="true"
                                                style="width: 130px;">
                                                <div><img class="img-fluid"
                                                        src="<?php echo base_url('assets/images/gallery/06.jpg')?>"
                                                        alt="" style="width: 100%; display: inline-block;"></div>
                                            </div>
                                            <div class="slick-slide" data-slick-index="5" aria-hidden="true"
                                                tabindex="-1" style="width: 130px;">
                                                <div><img class="img-fluid"
                                                        src="<?php echo base_url('assets/images/gallery/06.jpg')?>"
                                                        alt="" style="width: 100%; display: inline-block;"></div>
                                            </div>
                                            <div class="slick-slide" data-slick-index="6" aria-hidden="true"
                                                tabindex="-1" style="width: 130px;">
                                                <div><img class="img-fluid"
                                                        src="<?php echo base_url('assets/images/gallery/06.jpg')?>"
                                                        alt="" style="width: 100%; display: inline-block;"></div>
                                            </div>
                                            <div class="slick-slide" data-slick-index="7" aria-hidden="true"
                                                tabindex="-1" style="width: 130px;">
                                                <div><img class="img-fluid"
                                                        src="<?php echo base_url('assets/images/gallery/06.jpg')?>"
                                                        alt="" style="width: 100%; display: inline-block;"></div>
                                            </div>
                                            <div class="slick-slide slick-cloned" data-slick-index="8" id=""
                                                aria-hidden="true" tabindex="-1" style="width: 130px;">
                                                <div><img class="img-fluid"
                                                        src="<?php echo base_url('assets/images/gallery/06.jpg')?>"
                                                        alt="" style="width: 100%; display: inline-block;"></div>
                                            </div>
                                            <div class="slick-slide slick-cloned" data-slick-index="9" id=""
                                                aria-hidden="true" tabindex="-1" style="width: 130px;">
                                                <div><img class="img-fluid"
                                                        src="<?php echo base_url('assets/images/gallery/06.jpg')?>"
                                                        alt="" style="width: 100%; display: inline-block;"></div>
                                            </div>
                                            <div class="slick-slide slick-cloned slick-center" data-slick-index="10"
                                                id="" aria-hidden="true" tabindex="-1" style="width: 130px;">
                                                <div><img class="img-fluid"
                                                        src="<?php echo base_url('assets/images/gallery/06.jpg')?>"
                                                        alt="" style="width: 100%; display: inline-block;"></div>
                                            </div>
                                            <div class="slick-slide slick-cloned" data-slick-index="11" id=""
                                                aria-hidden="true" tabindex="-1" style="width: 130px;">
                                                <div><img class="img-fluid"
                                                        src="<?php echo base_url('assets/images/gallery/06.jpg')?>"
                                                        alt="" style="width: 100%; display: inline-block;"></div>
                                            </div>
                                            <div class="slick-slide slick-cloned" data-slick-index="12" id=""
                                                aria-hidden="true" tabindex="-1" style="width: 130px;">
                                                <div><img class="img-fluid"
                                                        src="<?php echo base_url('assets/images/gallery/06.jpg')?>"
                                                        alt="" style="width: 100%; display: inline-block;"></div>
                                            </div>
                                            <div class="slick-slide slick-cloned" data-slick-index="13" id=""
                                                aria-hidden="true" tabindex="-1" style="width: 130px;">
                                                <div><img class="img-fluid"
                                                        src="<?php echo base_url('assets/images/gallery/06.jpg')?>"
                                                        alt="" style="width: 100%; display: inline-block;"></div>
                                            </div>
                                            <div class="slick-slide slick-cloned" data-slick-index="14" id=""
                                                aria-hidden="true" tabindex="-1" style="width: 130px;">
                                                <div><img class="img-fluid"
                                                        src="<?php echo base_url('assets/images/gallery/06.jpg')?>"
                                                        alt="" style="width: 100%; display: inline-block;"></div>
                                            </div>
                                            <div class="slick-slide slick-cloned" data-slick-index="15" id=""
                                                aria-hidden="true" tabindex="-1" style="width: 130px;">
                                                <div><img class="img-fluid"
                                                        src="<?php echo base_url('assets/images/gallery/06.jpg')?>"
                                                        alt="" style="width: 100%; display: inline-block;"></div>
                                            </div>
                                        </div>
                                    </div><button class="slick-next slick-arrow" aria-label="Next" type="button"
                                        style="">Next</button>
                                </div>
                            </div>
                            <div class="mt-sm-4 mt-0">
                                <div class="detail-title">
                                    <h5>Listing Description</h5>
                                </div>
                                <p><?php echo $addetails['Description']; ?></p>
                            </div>
                        </div>
                        <!-- <div class="listing-detail-box mb-3">
                            <div class="detail-title">
                                <h5>Listing Amenities</h5>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <ul class="list-unstyled mb-lg-0 mb-3">
                                        <li class="mb-3"> <i class="far fa-check-circle text-secondary me-2"></i> High
                                            quality food</li>
                                        <li class="mb-3"> <i class="far fa-check-circle text-secondary me-2"></i> Dining
                                            experience</li>
                                        <li class="mb-3"> <i class="far fa-check-circle text-secondary me-2"></i>
                                            Cleanliness</li>
                                        <li> <i class="far fa-check-circle text-secondary me-2"></i> Price factor</li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <ul class="list-unstyled mb-lg-0 mb-3">
                                        <li class="mb-3"> <i class="far fa-check-circle text-secondary me-2"></i> Serve
                                            good drinks</li>
                                        <li class="mb-3"> <i class="far fa-check-circle text-secondary me-2"></i> Wifi
                                        </li>
                                        <li class="mb-3"> <i class="far fa-check-circle text-secondary me-2"></i> No
                                            Smoking</li>
                                        <li> <i class="far fa-check-circle text-secondary me-2"></i> Air Conditioning
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-3"> <i class="far fa-check-circle text-secondary me-2"></i> All
                                            drinks</li>
                                        <li class="mb-3"> <i class="far fa-check-circle text-secondary me-2"></i> Pets
                                            Friendly</li>
                                        <li> <i class="far fa-check-circle text-secondary me-2"></i> Wireless Internet
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="listing-detail-box mb-3">
                            <div class="detail-title">
                                <h5>Listing Average Reviews</h5>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="bg-secondary px-4 py-3 border-radius d-flex align-items-center">
                                        <h6 class="rating text-white mb-0"><span
                                                class="bg-success text-white me-2">5.4</span> 12 Rating</h6>
                                        <ul class="ms-auto list-unstyled d-flex mb-0">
                                            <li><i class="fas fa-star text-primary ms-1"></i></li>
                                            <li><i class="fas fa-star text-primary ms-1"></i></li>
                                            <li><i class="fas fa-star text-primary ms-1"></i></li>
                                            <li><i class="fas fa-star text-primary ms-1"></i></li>
                                            <li><i class="fas fa-star text-primary ms-1"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mt-4">
                                        <div class="d-flex mb-2">
                                            <strong class="text-dark">Quality</strong>
                                            <span class="ms-auto">4.8</span>
                                        </div>
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar" role="progressbar" style="width:98%"
                                                aria-valuenow="98" aria-valuemin="0" aria-valuemax="100">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <div class="d-flex mb-2">
                                            <strong class="text-dark">Location</strong>
                                            <span class="ms-auto">4</span>
                                        </div>
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar" role="progressbar" style="width:80%"
                                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mt-4">
                                        <div class="d-flex mb-2">
                                            <strong class="text-dark">Space</strong>
                                            <span class="ms-auto">3%</span>
                                        </div>
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar" role="progressbar" style="width:30%"
                                                aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <div class="d-flex mb-2">
                                            <strong class="text-dark">Service</strong>
                                            <span class="ms-auto">1.5%</span>
                                        </div>
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar" role="progressbar" style="width:15%"
                                                aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mt-4">
                                        <div class="d-flex mb-2">
                                            <strong class="text-dark">Price</strong>
                                            <span class="ms-auto">2%</span>
                                        </div>
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar" role="progressbar" style="width:20%"
                                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <div class="d-flex mb-2">
                                            <strong class="text-dark">Cleanliness </strong>
                                            <span class="ms-auto">2.5%</span>
                                        </div>
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar" role="progressbar" style="width:25%"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
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
                                            <a class="bg-success-soft text-success border-radius px-3 py-1 ms-4 font-sm"
                                                href="listing-single-01.html#"> <i class="far fa-thumbs-up pe-1"></i> 56
                                                Votes</a>
                                            <a class="bg-danger-soft text-danger border-radius px-3 py-1 ms-4 font-sm"
                                                href="listing-single-01.html#"> <i class="far fa-thumbs-down pe-1"></i>
                                                06</a>
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
                                                class="full form-label" for="star5" title="Awesome - 5 stars"></label>
                                            <input type="radio" id="star4half" name="ratings" value="4.5"><label
                                                class="half form-label" for="star4half"
                                                title="Pretty good - 4.5 stars"></label>
                                            <input type="radio" id="star4" name="ratings" value="4"><label
                                                class="full form-label" for="star4"
                                                title="Pretty good - 4 stars"></label>
                                            <input type="radio" id="star3half" name="ratings" value="3.5"><label
                                                class="half form-label" for="star3half" title="Meh - 3.5 stars"></label>
                                            <input type="radio" id="star3" name="ratings" value="3"><label
                                                class="full form-label" for="star3" title="Meh - 3 stars"></label>
                                            <input type="radio" id="star2half" name="ratings" value="2.5"><label
                                                class="half form-label" for="star2half"
                                                title="Kinda bad - 2.5 stars"></label>
                                            <input type="radio" id="star2" name="ratings" value="2"><label
                                                class="full form-label" for="star2" title="Kinda bad - 2 stars"></label>
                                            <input type="radio" id="star1half" name="ratings" value="1.5"><label
                                                class="half form-label" for="star1half" title="Meh - 1.5 stars"></label>
                                            <input type="radio" id="star1" name="ratings" value="1"><label
                                                class="full form-label" for="star1"
                                                title="Sucks big time - 1 star"></label>
                                            <input type="radio" id="starhalf" name="ratings" value="0.5"><label
                                                class="half form-label" for="starhalf"
                                                title="Sucks big time - 0.5 stars"></label>
                                        </div>
                                    </div>
                                    <div class="form-group mb-12 col-md-12">
                                        <input type="hidden" name="Id" value="<?php echo $addetails['ListingId'] ?>">
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
                <div class="col-lg-4">
                    <div class="sidebar mb-0">

                        <div class="widget">
                            <div class="widget-title bg-primary">
                                <h6 class="text-white mb-0"> <i class="fa fa-clock"></i> Opening hours </h6>
                            </div>
                            <div class="widget-content">
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2 d-flex"><strong
                                            class="text-dark d-inline-block me-2">Monday:</strong> <span
                                            class="ms-auto"> <?php echo $addetails['MonworkHours']; ?></span></li>
                                    <li class="mb-2 d-flex"><strong
                                            class="text-dark d-inline-block me-2">Tuesday:</strong> <span
                                            class="ms-auto"> <?php echo $addetails['TueworkHours']; ?></span></li>
                                    <li class="mb-2 d-flex"><strong
                                            class="text-dark d-inline-block me-2">Wednesday:</strong> <span
                                            class="ms-auto"> <?php echo $addetails['WedworkHours']; ?></span></li>
                                    <li class="mb-2 d-flex"><strong
                                            class="text-dark d-inline-block me-2">Thursday:</strong> <span
                                            class="ms-auto"> <?php echo $addetails['ThursworkHours']; ?></span></li>
                                    <li class="mb-2 d-flex"><strong
                                            class="text-dark d-inline-block me-2">Friday:</strong> <span
                                            class="ms-auto"> <?php echo $addetails['FriworkHours']; ?></span></li>
                                    <li class="mb-2 d-flex"><strong
                                            class="text-dark d-inline-block me-2">Saturday:</strong> <span
                                            class="ms-auto"> <?php echo $addetails['SatworkHours']; ?></span></li>
                                    <li class="mb-2 d-flex"><strong
                                            class="text-dark d-inline-block me-2">Sunday:</strong> <span
                                            class="ms-auto"> <?php echo $addetails['SunworkHours']; ?></span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="widget-title bg-primary">
                                <h6 class="text-white mb-0"> <i class="fas fa-map-marker-alt"></i> Location </h6>
                            </div>
                            <div class="widget-content">

                                <ul class="list-unstyled mb-3 mt-4 d-block">
                                    <li class="mb-2"><strong
                                            class="text-dark d-inline-block me-2">Address:</strong><?php echo $addetails['Adress']; ?>
                                    </li>

                                    <li class="mb-2"><strong class="text-dark d-inline-block me-2">Phone:</strong>(123)
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
        </div>
    </section>



    <!-- JS Global Compulsory (Do not remove)-->
    <script src="<?php echo base_url('js/jquery-3.6.0.min.js') ?>"></script>
    <script src="<?php echo base_url('js/popper/popper.min.js') ?>"></script>
    <script src="<?php echo base_url('js/bootstrap/bootstrap.min.js') ?>"></script>

    <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
    <script src="<?php echo base_url('js/select2/select2.full.js') ?>"></script>
    <script src="<?php echo base_url('js/owl-carousel/owl.carousel.min.js') ?>"></script>
    <script src="<?php echo base_url('js/jarallax/jarallax.min.js') ?>"></script>
    <script src="<?php echo base_url('js/magnific-popup/jquery.magnific-popup.min.js') ?>"></script>
    <script src="<?php echo base_url('js/datetimepicker/moment.min.js') ?>"></script>
    <script src="<?php echo base_url('js/range-slider/ion.rangeSlider.min.js') ?>"></script>
    <script src="<?php echo base_url('js/slick/slick.min.js') ?>"></script>
    <script src="<?php echo base_url('js/datetimepicker/datetimepicker.min.js') ?>"></script>

    <!-- Template Scripts (Do not remove)-->
    <script src="<?php echo base_url('js/custom.js') ?>"></script>
    <!--=================================
footer-->
    <?php $this->load->view("Templates/footer") ?>
    <!--=================================
footer-->



</body>

</html>