<!DOCTYPE html>
<html lang="en">

<head>

    <?php $this->load->view("Templates/head") ?>

</head>

<body>

    <?php $this->load->view("Templates/header") ?>

    <!--=================================
banner -->
    <section class="banner bg-holder bg-overlay-black-50"
        style="background-image: url(assets/images/bg/01.jpg);background-size:cover;">
        <div class="container">
            <div class="row justify-content-center position-relative">
                <div class="col-lg-10 text-center">
                    <h1 class="text-white">Discover businesses and service globally </h1>
                    <p class="text-white banner-sub-title">Find the best places to visit, hotel, spa, cafe, and many
                        more from local experts.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <form class="home-search-02" action="Welcome/SearchListing" method="post">
                        <div class="row g-0 mt-2">
                            <div class="col-sm-6 col-lg-5">
                                <div class="form-group mb-3 mb-lg-0 form-location">
                                    <input type="text" class="form-control" name="keyword" placeholder="What are you looking for...">
                                    <a class="location-icon" href=""> <i
                                            class="fa fa-camera-retro"></i> </a>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="form-group mb-3 mb-lg-0 form-location">
                                    <input type="text" class="form-control" placeholder="Where..." name="location">
                                    <a class="location-icon" href=""> <i class="fa fa-map-marker"></i> </a>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-2">
                                <div class="form-group mb-3 mb-sm-0 select-border">
                                    <select class="form-control basic-select select2-hidden-accessible"
                                        data-select2-id="1" tabindex="-1" aria-hidden="true" name="category">
                                        <option data-select2-id="3" value="">All categories </option>
                                        
                                        <?php if($allcategories->num_rows()>0){
                                      
                                        foreach($allcategories->result() as $row){ ?>
                                        <option value="<?php echo $row->CategoryId ?>"><?php echo $row->Category ?></option>
                                        
                                        <?php } } ?>
                                    </select>
                                    
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-2 d-grid">
                            <button class="btn btn-secondary" type="submit" style="background:cadetblue;border:cadetblue;"> <i class="fa fa-search"></i> Search
                                    Liating
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- <div class="row justify-content-center">
                <div class="col-lg-12">
                    <form class="home-search" action="Welcome/SearchListing" method="post">
                        <div class="row mt-3 mt-lg-5">

                            <div class="col-sm-8 col-lg-8 col-xl-8">
                                <div class="form-group mb-3 mb-lg-0 form-location">
                                    <span>What ?</span>
                                    <input type="text" class="form-control" name="keyword"
                                        placeholder="Ex: Choose your city or location">
                                    <a class="location-icon" href=""> </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-4">
                                <button class="btn btn-secondary" type="submit"> <i class="fa fa-search"></i> Search
                                    Liating
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div> -->
        </div>
    </section>
    <!--=================================
banner -->

    <!--=================================
Category -->
    <section class="py-4 border-bottom" style="background:lavender;">
        <div class="containe" style="width:98%;margin:auto">
            <div class="row">
                <div class="col-lg-2 mb-lg-0 mb-2">
                    <div class="d-flex align-items-center">
                        <h6>Or Browse by category</h6>
                        <i class="fa fa-chevron-circle-right fa-3x" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="owl-carousel" data-nav-dots="false" data-nav-arrow="false" data-items="6"
                        data-md-items="5" data-sm-items="4" data-xs-items="2" data-xx-items="1" data-space="20"
                        data-autoheight="false">
                        <?php if($allcategories->num_rows()>0){
            $i=1;
          foreach($allcategories->result() as $row){ ?>
                        <div class="item">
                            <a class="category-item bg-holder bg-overlay-black-50 text-center"
                                style="background: cadetblue;"
                                href="<?php echo base_url('ViewCategory/'.$row->Category) ?>">
                                <span class="mb-0 text-white position-relative"
                                    style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;"><?php echo $row->Category ?></span>
                            </a>
                        </div>
                        <?php } } ?>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
 Category -->



    <!--=================================
Places -->
    <section class="space-pb popup-gallery">
        <div class="container" style="width:98%;margin:auto;padding-top:80px;">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Most Rated Listings <a class="btn btn-primary btnsm pull-right"
                         href="<?php echo base_url("MostRatedListing"); ?>" style="border-radius:0px;"> VIEW ALL </a></h2>
                        <div class="sub-title text-end"> <span> Browse top rated businesses and services</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php if($mostratedads->num_rows()>0){
                    $i=1;
                foreach($mostratedads->result() as $row){ 
                    $imageone=base_url()."/assets/images/listing/".$row->photo; 
                ?>
                <div class="col-lg-3 col-sm-6 mb-4">
                    <a href="<?php echo base_url('listing/'.$row->ListingId) ?>">
                        <div class="listing-item">
                            <div class="listing-image bg-overlay-half-bottom">
                                <img class="img-fluid" style="height:200px;width:100%;" src="<?php echo $imageone ?>"
                                    alt="">
                                <div class="listing-quick-box">
                                    <a class="category" href="<?php echo base_url('listing/'.$row->ListingId) ?>"> <i
                                            class="fa fa-edit"></i> <?php echo $row->Category ?></a>
                                    <a class="popup popup-single" href="<?php echo $imageone ?>"
                                        data-bs-toggle="tooltip" data-placement="top" title="Zoom"> <i
                                            class="fa fa-search-plus"></i> </a>
                                </div>
                            </div>
                            <div class="listing-details">
                                <div class="listing-details-inner">
                                    <div class="listing-title">
                                        <h6
                                            style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 1;-webkit-box-orient: vertical;">
                                            <a
                                                href="<?php echo base_url('listing/'.$row->ListingId) ?>"><?php echo $row->adName ?></a>
                                        </h6>
                                    </div>
                                    <div class="listing-rating-call">
                                        <a class="listing-rating"
                                            href="index.html#"><span><?php echo (empty($row->rating)?'0.0':$row->rating); ?></span>
                                            <?php echo $row->ratingcount ?> Ratings</a>
                                        <a class="listing-call" href=""><i class="fa fa-list-alt"
                                                aria-hidden="true"></i> <?php echo $row->Category ?></a>
                                    </div>
                                    <div class="listing-info">
                                        <!-- <img class="img-fluid" src="assets/images/listing-brand/02.png" alt=""> -->
                                        <p class="mb-0"
                                            style="text-align:justify;overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;">
                                            <?php echo $row->Description ?></p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </a>
                </div>
                <?php } } ?>



            </div>
        </div>
    </section>
    <!--=================================
Places -->


    <section class="space-ptb bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-light">
                        <h2>Why list your business us</h2>
                        <div class="sub-title text-end bg-transparent">
                            <span> Variuos reasons to list your business with us.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="feature-info-02 mb-lg-5 mb-4">
                        <div class="feature-icon">
                            <span>01</span>
                        </div>
                        <div class="feature-content">
                            <h5 class="feature-title">Excellent reputation</h5>
                            <p>Thenadaka enterprises limited has been providing excellent sales, marketing and Ict services for
                                its local and international customers.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feature-info-02 mb-lg-5 mb-4">
                        <div class="feature-icon">
                            <span>02</span>
                        </div>
                        <div class="feature-content">
                            <h5 class="feature-title">Global presence</h5>
                            <p>We do not only help you reach local consumers but the global market</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feature-info-02 mb-lg-5 mb-4">
                        <div class="feature-icon">
                            <span>03</span>
                        </div>
                        <div class="feature-content">
                            <h5 class="feature-title">Easy to use</h5>
                            <p>Our systems are easy to use and your listing will be up instantly.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feature-info-02 mb-4 mb-lg-0">
                        <div class="feature-icon">
                            <span>04</span>
                        </div>
                        <div class="feature-content">
                            <h5 class="feature-title">Free Listing services</h5>
                            <p class="mb-lg-0">It is completely free to list you business and services on thenadaka.com
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feature-info-02 mb-4 mb-lg-0">
                        <div class="feature-icon">
                            <span>05</span>
                        </div>
                        <div class="feature-content">
                            <h5 class="feature-title">27 /7 Support</h5>
                            <p class="mb-lg-0">Our team is readily available to serve our customers and partners at any
                                time.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feature-info-02">
                        <div class="feature-icon">
                            <span>06</span>
                        </div>
                        <div class="feature-content">
                            <h5 class="feature-title">Over 4 years experience</h5>
                            <p class="mb-0">we  have been in the field for more than  </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--=================================
Places -->
    <section class="space-pb popup-gallery">
        <div class="container" style="width:98%;margin:auto;padding-top:80px;">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Recently added Listings</h2>
                        <div class="sub-title text-end"> <span> Make a list of your achievements toward your long-term
                                goal</span></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php if($mostrecenttedads->num_rows()>0){
            $i=1;
          foreach($mostrecenttedads->result() as $row){ 
            $imageone=base_url()."/assets/images/listing/".$row->photo; 
        ?>
                <div class="col-lg-3 col-sm-6 mb-4">
                    <a href="<?php echo base_url('listing/'.$row->ListingId) ?>">
                        <div class="listing-item">
                            <div class="listing-image bg-overlay-half-bottom">
                                <img class="img-fluid" style="height:200px;width:100%;" src="<?php echo $imageone ?>"
                                    alt="">
                                <div class="listing-quick-box">
                                    <a class="category" href="<?php echo base_url('listing/1') ?>"> <i
                                            class="fa fa-edit"></i> <?php echo $row->Category ?></a>
                                    <a class="popup popup-single" href="<?php echo $imageone ?>"
                                        data-bs-toggle="tooltip" data-placement="top" title="Zoom"> <i
                                            class="fa fa-search-plus"></i> </a>
                                </div>
                            </div>
                            <div class="listing-details">
                                <div class="listing-details-inner">
                                    <div class="listing-title">
                                        <h6
                                            style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 1;-webkit-box-orient: vertical;">
                                            <a
                                                href="<?php echo base_url('listing/'.$row->ListingId) ?>"><?php echo $row->adName ?></a>
                                        </h6>
                                    </div>
                                    <div class="listing-rating-call">
                                        <a class="listing-rating"
                                            href="index.html#"><span><?php echo (empty($row->rating)?'0.0':$row->rating); ?></span>
                                            <?php echo $row->ratingcount ?> Ratings</a>
                                        <a class="listing-call" href=""><i class="fa fa-list-alt"
                                                aria-hidden="true"></i> <?php echo $row->Category ?></a>
                                    </div>
                                    <div class="listing-info">
                                        <!-- <img class="img-fluid" src="assets/images/listing-brand/02.png" alt=""> -->
                                        <p class="mb-0"
                                            style="text-align:justify;overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;">
                                            <?php echo $row->Description ?></p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </a>
                </div>
                <?php } } ?>



            </div>
        </div>
    </section>
    <!--=================================
Places -->


    <!--=================================
footer-->
    <?php $this->load->view("Templates/footer") ?>
    <!--=================================
footer-->



</body>

</html>