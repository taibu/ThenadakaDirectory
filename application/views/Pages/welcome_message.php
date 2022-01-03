<!DOCTYPE html>
<html lang="en">
  <head>
   
  <?php $this->load->view("Templates/head") ?>

  </head>

<body>

<?php $this->load->view("Templates/header") ?>

<!--=================================
banner -->
<section class="banner bg-holder bg-overlay-black-50" style="background-image: url(assets/images/bg/01.jpg);background-size:cover;">
  <div class="container">
    <div class="row justify-content-center position-relative">
      <div class="col-lg-10 text-center">
        <h1 class="text-white">Discover secret places in the city</h1>
        <p class="text-white banner-sub-title">Find the best places to visit, hotel, spa, cafe, and many more from local experts.</p>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <form class="home-search">
          <div class="row mt-3 mt-lg-5">
            <div class="col-sm-6 col-lg-5 col-xl-5">
              <div class="form-group mb-3 mb-lg-0">
                <span>What?</span>
                <input type="text" class="form-control" placeholder="Ex: restaurants, hotels, cares, bars">
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-5">
              <div class="form-group mb-3 mb-lg-0 form-location">
                <span>Whare?</span>
                <input type="text" class="form-control" placeholder="Ex: Choose your city or location">
                <a class="location-icon" href="index.html#"> <i class="far fa-compass"></i> </a>
              </div>
            </div>
            <div class="col-lg-3 col-xl-2">
              <a class="btn btn-secondary" href="index.html#"> <i class="fas fa-search-location"></i> Search </a>
            </div>
          </div>
        </form>
      </div>
    </div>
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
        <div class="owl-carousel" data-nav-dots="false" data-nav-arrow="false" data-items="6" data-md-items="5" data-sm-items="4" data-xs-items="2" data-xx-items="1" data-space="20" data-autoheight="false">
        <?php if($allcategories->num_rows()>0){
            $i=1;
          foreach($allcategories->result() as $row){ ?>
            <div class="item">
              <a class="category-item bg-holder bg-overlay-black-50 text-center" style="background: cadetblue;" href="">
                <span class="mb-0 text-white position-relative" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;"><?php echo $row->Category ?></span>
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
  <div class="containe" style="width:98%;margin:auto;padding-top:80px;">
    <div class="row">
      <div class="col-12">
        <div class="section-title">
          <h2>Most Common places near you</h2>
          <div class="sub-title text-end"> <span> Make a list of your achievements toward your long-term goal</span></div>
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
       <a href="<?php echo base_url('listing/'.$row->ListingId) ?>" >
          <div class="listing-item">
            <div class="listing-image bg-overlay-half-bottom">
              <img class="img-fluid" style="height:200px;width:100%;" src="<?php echo $imageone ?>" alt="">
              <div class="listing-quick-box">
                  <a class="category" href="<?php echo base_url('listing/1') ?>"> <i class="fa fa-edit"></i> <?php echo $row->Category ?></a>
                  <a class="popup popup-single" href="<?php echo $imageone ?>" data-bs-toggle="tooltip" data-placement="top" title="Zoom"> <i class="fa fa-search-plus"></i> </a>
              </div>
            </div>
            <div class="listing-details">
              <div class="listing-details-inner">
                <div class="listing-title">
                  <h6 style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 1;-webkit-box-orient: vertical;"><a href="<?php echo base_url('listing/'.$row->ListingId) ?>" ><?php echo $row->adName ?></a></h6>
                </div>
                <div class="listing-rating-call">
                  <a class="listing-rating" href="index.html#"><span>4.6</span> 10 Rating</a>
                  <!-- <a class="listing-call" href="index.html#"><i class="fas fa-phone-volume"></i> +444 656 326</a> -->
                </div>
                <div class="listing-info">
                  <!-- <img class="img-fluid" src="assets/images/listing-brand/02.png" alt=""> -->
                  <p class="mb-0" style="text-align:justify;overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;"><?php echo $row->Description ?></p>
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
          <h2>Why choose us</h2>
          <div class="sub-title text-end bg-transparent"> <span> Do it today. Remind yourself of someone you know who died.</span></div>
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
            <p>Let success motivate you. Find a picture of what epitomizes success to you and then pull it out when.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="feature-info-02 mb-lg-5 mb-4">
          <div class="feature-icon">
            <span>02</span>
          </div>
          <div class="feature-content">
            <h5 class="feature-title">Best local agents</h5>
            <p>Reflect and experiment until you find the right combination of motivators for your personality goals..</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="feature-info-02 mb-lg-5 mb-4">
          <div class="feature-icon">
            <span>03</span>
          </div>
          <div class="feature-content">
            <h5 class="feature-title">Peace of mind</h5>
            <p>Success isn’t really that difficult. There is a significant portion of the population here in North America.</p>
          </div>
        </div>
      </div>
       <div class="col-lg-4">
        <div class="feature-info-02 mb-4 mb-lg-0">
          <div class="feature-icon">
            <span>04</span>
          </div>
          <div class="feature-content">
            <h5 class="feature-title">Tons of options</h5>
            <p class="mb-lg-0">For those of you who are serious about having more, doing more, giving more and being more.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="feature-info-02 mb-4 mb-lg-0">
          <div class="feature-icon">
            <span>05</span>
          </div>
          <div class="feature-content">
            <h5 class="feature-title">Explore best places</h5>
            <p class="mb-lg-0">Success is achievable with some understanding of what to do, some discipline around planning.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="feature-info-02">
          <div class="feature-icon">
            <span>06</span>
          </div>
          <div class="feature-content">
            <h5 class="feature-title">Make a listing</h5>
            <p class="mb-0">The first thing to remember about success is that it is a process – nothing more, nothing less..</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- <section class="space-pb popup-gallery overflowx-h">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title">
          <h2>Most visited places</h2>
          <div class="sub-title text-end"> <span> Make a list of your achievements toward your long-term goal</span></div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="owl-carousel testimonial-center owl-loaded owl-drag" data-nav-dots="true" data-nav-arrow="false" data-items="3" data-md-items="3" data-sm-items="2" data-xs-items="2" data-xx-items="1" data-space="20" data-autoheight="false">
          
          
          
          
          
          
        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-3232px, 0px, 0px); transition: all 1s ease 0s; width: 4849px;"><div class="owl-item cloned" style="width: 384.078px; margin-right: 20px;"><div class="item">
            <div class="listing-item">
              <div class="listing-image bg-overlay-half-bottom">
                <img class="img-fluid" src="assets/images/listing/grid/04.jpg" alt="">
                <div class="listing-quick-box">
                  <a class="category" href="index-02.html#"> <i class="flaticon-customer"></i> Art &amp; Museums</a>
                  <a class="popup popup-single" href="images/listing/grid/04.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Zoom"> <i class="fas fa-search-plus"></i> </a>
                  <a class="like" href="index-02.html#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Like"> <i class="far fa-heart"></i> </a>
                </div>
              </div>
              <div class="listing-details">
                <div class="listing-details-inner">
                  <div class="listing-title">
                    <h6><a href="index-02.html#">The Vatican Museums</a></h6>
                    <span class="listing-price">$$$</span>
                  </div>
                  <div class="listing-rating-call">
                    <a class="listing-rating" href="index-02.html#"><span>4.9</span> 03 Rating</a>
                    <a class="listing-call" href="index-02.html#"><i class="fas fa-phone-volume"></i> +222 356 457</a>
                  </div>
                  <div class="listing-info">
                    <img class="img-fluid" src="assets/images/listing-brand/04.png" alt="">
                    <p class="mb-0">If success is a process with a number of defined steps.</p>
                  </div>
                </div>
                <div class="listing-bottom">
                  <a class="listing-loaction" href="index-02.html#"> <i class="fas fa-map-marker-alt"></i> West Division Street</a>
                  <span class="listing-close">Closed</span>
                </div>
              </div>
            </div>
          </div></div><div class="owl-item cloned" style="width: 384.078px; margin-right: 20px;"><div class="item">
            <div class="listing-item">
              <div class="listing-image bg-overlay-half-bottom">
                <img class="img-fluid" src="assets/images/listing/grid/05.jpg" alt="">
                <div class="listing-quick-box">
                  <a class="category" href="index-02.html#"> <i class="flaticon-wine"></i> Nightclub</a>
                  <a class="popup popup-single" href="images/listing/grid/05.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Zoom"> <i class="fas fa-search-plus"></i> </a>
                  <a class="like" href="index-02.html#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Like"> <i class="far fa-heart"></i> </a>
                </div>
              </div>
              <div class="listing-details">
                <div class="listing-details-inner">
                  <div class="listing-title">
                    <h6><a href="index-02.html#">Liberty Club</a></h6>
                    <span class="listing-price">$$$</span>
                  </div>
                  <div class="listing-rating-call">
                    <a class="listing-rating" href="index-02.html#"><span>4.6</span> 15 Rating</a>
                    <a class="listing-call" href="index-02.html#"><i class="fas fa-phone-volume"></i> +333 659 856</a>
                  </div>
                  <div class="listing-info">
                    <img class="img-fluid" src="assets/images/listing-brand/05.png" alt="">
                    <p class="mb-0">For those of you who are serious about having more, doing more,</p>
                  </div>
                </div>
                <div class="listing-bottom">
                  <a class="listing-loaction" href="index-02.html#"> <i class="fas fa-map-marker-alt"></i> Fort Wayne, IN 46804</a>
                  <span class="listing-open">Open</span>
                </div>
              </div>
            </div>
          </div></div><div class="owl-item cloned" style="width: 384.078px; margin-right: 20px;"><div class="item">
            <div class="listing-item">
              <div class="listing-image bg-overlay-half-bottom">
                <img class="img-fluid" src="assets/images/listing/grid/06.jpg" alt="">
                <div class="listing-quick-box">
                  <a class="category" href="index-02.html#"> <i class="flaticon-food-serving"></i> Restaurant</a>
                  <a class="popup popup-single" href="images/listing/grid/06.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Zoom"> <i class="fas fa-search-plus"></i> </a>
                  <a class="like" href="index-02.html#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Like"> <i class="far fa-heart"></i> </a>
                </div>
              </div>
              <div class="listing-details">
                <div class="listing-details-inner">
                  <div class="listing-title">
                    <h6><a href="index-02.html#">Honey Restaurant</a></h6>
                    <span class="listing-price">$$$</span>
                  </div>
                  <div class="listing-rating-call">
                    <a class="listing-rating" href="index-02.html#"><span>4.2</span> 08 Rating</a>
                    <a class="listing-call" href="index-02.html#"><i class="fas fa-phone-volume"></i> +999 784 578</a>
                  </div>
                  <div class="listing-info">
                    <img class="img-fluid" src="assets/images/listing-brand/06.png" alt="">
                    <p class="mb-0">So, make the decision to move forward commit your.</p>
                  </div>
                </div>
                <div class="listing-bottom">
                  <a class="listing-loaction" href="index-02.html#"> <i class="fas fa-map-marker-alt"></i> 442 Glenholme Street</a>
                  <span class="listing-open">Open</span>
                </div>
              </div>
            </div>
          </div></div><div class="owl-item" style="width: 384.078px; margin-right: 20px;"><div class="item">
            <div class="listing-item">
              <div class="listing-image bg-overlay-half-bottom">
                <img class="img-fluid" src="assets/images/listing/grid/01.jpg" alt="">
                <div class="listing-quick-box">
                  <a class="category" href="index-02.html#"> <i class="flaticon-coffee-cup"></i> Cafe</a>
                  <a class="popup popup-single" href="images/listing/grid/01.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Zoom"> <i class="fas fa-search-plus"></i> </a>
                  <a class="like" href="index-02.html#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Like"> <i class="far fa-heart"></i> </a>
                </div>
              </div>
              <div class="listing-details">
                <div class="listing-details-inner">
                  <div class="listing-title">
                    <h6><a href="index-02.html#">Espresso macchiato</a></h6>
                    <span class="listing-price">$$$</span>
                  </div>
                  <div class="listing-rating-call">
                    <a class="listing-rating" href="index-02.html#"><span>4.2</span> 12 Rating</a>
                    <a class="listing-call" href="index-02.html#"><i class="fas fa-phone-volume"></i> +666 658 447</a>
                  </div>
                  <div class="listing-info">
                    <img class="img-fluid" src="assets/images/listing-brand/01.png" alt="">
                    <p class="mb-0">For those of you who are serious about having more.</p>
                  </div>
                </div>
                <div class="listing-bottom">
                  <a class="listing-loaction" href="index-02.html#"> <i class="fas fa-map-marker-alt"></i> Piper Drive Zion</a>
                  <span class="listing-open">Open</span>
                </div>
              </div>
            </div>
          </div></div><div class="owl-item" style="width: 384.078px; margin-right: 20px;"><div class="item">
            <div class="listing-item">
              <div class="listing-image bg-overlay-half-bottom">
                <img class="img-fluid" src="assets/images/listing/grid/02.jpg" alt="">
                <div class="listing-quick-box">
                  <a class="category" href="index-02.html#"> <i class="flaticon-megaphone"></i> Nightlife</a>
                  <a class="popup popup-single" href="images/listing/grid/02.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Zoom"> <i class="fas fa-search-plus"></i> </a>
                  <a class="like" href="index-02.html#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Like"> <i class="far fa-heart"></i> </a>
                </div>
              </div>
              <div class="listing-details">
                <div class="listing-details-inner">
                  <div class="listing-title">
                    <h6><a href="index-02.html#">Fantastic Fridaze</a></h6>
                    <span class="listing-price">$$$</span>
                  </div>
                  <div class="listing-rating-call">
                    <a class="listing-rating" href="index-02.html#"><span>4.6</span> 10 Rating</a>
                    <a class="listing-call" href="index-02.html#"><i class="fas fa-phone-volume"></i> +444 656 326</a>
                  </div>
                  <div class="listing-info">
                    <img class="img-fluid" src="assets/images/listing-brand/02.png" alt="">
                    <p class="mb-0">Let success motivate you. Find a picture of what epitomizes success to you.</p>
                  </div>
                </div>
                <div class="listing-bottom">
                  <a class="listing-loaction" href="index-02.html#"> <i class="fas fa-map-marker-alt"></i> 472 Carpenter Rd</a>
                  <span class="listing-open">Open</span>
                </div>
              </div>
            </div>
          </div></div><div class="owl-item" style="width: 384.078px; margin-right: 20px;"><div class="item">
            <div class="listing-item">
              <div class="listing-image bg-overlay-half-bottom">
                <img class="img-fluid" src="assets/images/listing/grid/03.jpg" alt="">
                <div class="listing-quick-box">
                  <a class="category" href="index-02.html#"> <i class="flaticon-guitar"></i> Sound &amp; music</a>
                  <a class="popup popup-single" href="images/listing/grid/03.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Zoom"> <i class="fas fa-search-plus"></i> </a>
                  <a class="like" href="index-02.html#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Like"> <i class="far fa-heart"></i> </a>
                </div>
              </div>
              <div class="listing-details">
                <div class="listing-details-inner">
                  <div class="listing-title">
                    <h6><a href="index-02.html#">Bike Tours Hollywood</a></h6>
                    <span class="listing-price">$$$</span>
                  </div>
                  <div class="listing-rating-call">
                    <a class="listing-rating" href="index-02.html#"><span>4.1</span> 06 Rating</a>
                    <a class="listing-call" href="index-02.html#"><i class="fas fa-phone-volume"></i> +888 235 956</a>
                  </div>
                  <div class="listing-info">
                    <img class="img-fluid" src="assets/images/listing-brand/03.png" alt="">
                    <p class="mb-0">There are basically six key areas to higher achievement.</p>
                  </div>
                </div>
                <div class="listing-bottom">
                  <a class="listing-loaction" href="index-02.html#"> <i class="fas fa-map-marker-alt"></i> Lincolnton, NC 28092</a>
                  <span class="listing-close">Closed</span>
                </div>
              </div>
            </div>
          </div></div><div class="owl-item" style="width: 384.078px; margin-right: 20px;"><div class="item">
            <div class="listing-item">
              <div class="listing-image bg-overlay-half-bottom">
                <img class="img-fluid" src="assets/images/listing/grid/04.jpg" alt="">
                <div class="listing-quick-box">
                  <a class="category" href="index-02.html#"> <i class="flaticon-customer"></i> Art &amp; Museums</a>
                  <a class="popup popup-single" href="images/listing/grid/04.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Zoom"> <i class="fas fa-search-plus"></i> </a>
                  <a class="like" href="index-02.html#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Like"> <i class="far fa-heart"></i> </a>
                </div>
              </div>
              <div class="listing-details">
                <div class="listing-details-inner">
                  <div class="listing-title">
                    <h6><a href="index-02.html#">The Vatican Museums</a></h6>
                    <span class="listing-price">$$$</span>
                  </div>
                  <div class="listing-rating-call">
                    <a class="listing-rating" href="index-02.html#"><span>4.9</span> 03 Rating</a>
                    <a class="listing-call" href="index-02.html#"><i class="fas fa-phone-volume"></i> +222 356 457</a>
                  </div>
                  <div class="listing-info">
                    <img class="img-fluid" src="assets/images/listing-brand/04.png" alt="">
                    <p class="mb-0">If success is a process with a number of defined steps.</p>
                  </div>
                </div>
                <div class="listing-bottom">
                  <a class="listing-loaction" href="index-02.html#"> <i class="fas fa-map-marker-alt"></i> West Division Street</a>
                  <span class="listing-close">Closed</span>
                </div>
              </div>
            </div>
          </div></div><div class="owl-item" style="width: 384.078px; margin-right: 20px;"><div class="item">
            <div class="listing-item">
              <div class="listing-image bg-overlay-half-bottom">
                <img class="img-fluid" src="assets/images/listing/grid/05.jpg" alt="">
                <div class="listing-quick-box">
                  <a class="category" href="index-02.html#"> <i class="flaticon-wine"></i> Nightclub</a>
                  <a class="popup popup-single" href="images/listing/grid/05.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Zoom"> <i class="fas fa-search-plus"></i> </a>
                  <a class="like" href="index-02.html#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Like"> <i class="far fa-heart"></i> </a>
                </div>
              </div>
              <div class="listing-details">
                <div class="listing-details-inner">
                  <div class="listing-title">
                    <h6><a href="index-02.html#">Liberty Club</a></h6>
                    <span class="listing-price">$$$</span>
                  </div>
                  <div class="listing-rating-call">
                    <a class="listing-rating" href="index-02.html#"><span>4.6</span> 15 Rating</a>
                    <a class="listing-call" href="index-02.html#"><i class="fas fa-phone-volume"></i> +333 659 856</a>
                  </div>
                  <div class="listing-info">
                    <img class="img-fluid" src="assets/images/listing-brand/05.png" alt="">
                    <p class="mb-0">For those of you who are serious about having more, doing more,</p>
                  </div>
                </div>
                <div class="listing-bottom">
                  <a class="listing-loaction" href="index-02.html#"> <i class="fas fa-map-marker-alt"></i> Fort Wayne, IN 46804</a>
                  <span class="listing-open">Open</span>
                </div>
              </div>
            </div>
          </div></div><div class="owl-item active" style="width: 384.078px; margin-right: 20px;"><div class="item">
            <div class="listing-item">
              <div class="listing-image bg-overlay-half-bottom">
                <img class="img-fluid" src="assets/images/listing/grid/06.jpg" alt="">
                <div class="listing-quick-box">
                  <a class="category" href="index-02.html#"> <i class="flaticon-food-serving"></i> Restaurant</a>
                  <a class="popup popup-single" href="images/listing/grid/06.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Zoom"> <i class="fas fa-search-plus"></i> </a>
                  <a class="like" href="index-02.html#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Like"> <i class="far fa-heart"></i> </a>
                </div>
              </div>
              <div class="listing-details">
                <div class="listing-details-inner">
                  <div class="listing-title">
                    <h6><a href="index-02.html#">Honey Restaurant</a></h6>
                    <span class="listing-price">$$$</span>
                  </div>
                  <div class="listing-rating-call">
                    <a class="listing-rating" href="index-02.html#"><span>4.2</span> 08 Rating</a>
                    <a class="listing-call" href="index-02.html#"><i class="fas fa-phone-volume"></i> +999 784 578</a>
                  </div>
                  <div class="listing-info">
                    <img class="img-fluid" src="assets/images/listing-brand/06.png" alt="">
                    <p class="mb-0">So, make the decision to move forward commit your.</p>
                  </div>
                </div>
                <div class="listing-bottom">
                  <a class="listing-loaction" href="index-02.html#"> <i class="fas fa-map-marker-alt"></i> 442 Glenholme Street</a>
                  <span class="listing-open">Open</span>
                </div>
              </div>
            </div>
          </div></div><div class="owl-item cloned active" style="width: 384.078px; margin-right: 20px;"><div class="item">
            <div class="listing-item">
              <div class="listing-image bg-overlay-half-bottom">
                <img class="img-fluid" src="assets/images/listing/grid/01.jpg" alt="">
                <div class="listing-quick-box">
                  <a class="category" href="index-02.html#"> <i class="flaticon-coffee-cup"></i> Cafe</a>
                  <a class="popup popup-single" href="images/listing/grid/01.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Zoom"> <i class="fas fa-search-plus"></i> </a>
                  <a class="like" href="index-02.html#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Like"> <i class="far fa-heart"></i> </a>
                </div>
              </div>
              <div class="listing-details">
                <div class="listing-details-inner">
                  <div class="listing-title">
                    <h6><a href="index-02.html#">Espresso macchiato</a></h6>
                    <span class="listing-price">$$$</span>
                  </div>
                  <div class="listing-rating-call">
                    <a class="listing-rating" href="index-02.html#"><span>4.2</span> 12 Rating</a>
                    <a class="listing-call" href="index-02.html#"><i class="fas fa-phone-volume"></i> +666 658 447</a>
                  </div>
                  <div class="listing-info">
                    <img class="img-fluid" src="assets/images/listing-brand/01.png" alt="">
                    <p class="mb-0">For those of you who are serious about having more.</p>
                  </div>
                </div>
                <div class="listing-bottom">
                  <a class="listing-loaction" href="index-02.html#"> <i class="fas fa-map-marker-alt"></i> Piper Drive Zion</a>
                  <span class="listing-open">Open</span>
                </div>
              </div>
            </div>
          </div></div><div class="owl-item cloned" style="width: 384.078px; margin-right: 20px;"><div class="item">
            <div class="listing-item">
              <div class="listing-image bg-overlay-half-bottom">
                <img class="img-fluid" src="assets/images/listing/grid/02.jpg" alt="">
                <div class="listing-quick-box">
                  <a class="category" href="index-02.html#"> <i class="flaticon-megaphone"></i> Nightlife</a>
                  <a class="popup popup-single" href="images/listing/grid/02.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Zoom"> <i class="fas fa-search-plus"></i> </a>
                  <a class="like" href="index-02.html#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Like"> <i class="far fa-heart"></i> </a>
                </div>
              </div>
              <div class="listing-details">
                <div class="listing-details-inner">
                  <div class="listing-title">
                    <h6><a href="index-02.html#">Fantastic Fridaze</a></h6>
                    <span class="listing-price">$$$</span>
                  </div>
                  <div class="listing-rating-call">
                    <a class="listing-rating" href="index-02.html#"><span>4.6</span> 10 Rating</a>
                    <a class="listing-call" href="index-02.html#"><i class="fas fa-phone-volume"></i> +444 656 326</a>
                  </div>
                  <div class="listing-info">
                    <img class="img-fluid" src="assets/images/listing-brand/02.png" alt="">
                    <p class="mb-0">Let success motivate you. Find a picture of what epitomizes success to you.</p>
                  </div>
                </div>
                <div class="listing-bottom">
                  <a class="listing-loaction" href="index-02.html#"> <i class="fas fa-map-marker-alt"></i> 472 Carpenter Rd</a>
                  <span class="listing-open">Open</span>
                </div>
              </div>
            </div>
          </div></div><div class="owl-item cloned" style="width: 384.078px; margin-right: 20px;"><div class="item">
            <div class="listing-item">
              <div class="listing-image bg-overlay-half-bottom">
                <img class="img-fluid" src="assets/images/listing/grid/03.jpg" alt="">
                <div class="listing-quick-box">
                  <a class="category" href="index-02.html#"> <i class="flaticon-guitar"></i> Sound &amp; music</a>
                  <a class="popup popup-single" href="images/listing/grid/03.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Zoom"> <i class="fas fa-search-plus"></i> </a>
                  <a class="like" href="index-02.html#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Like"> <i class="far fa-heart"></i> </a>
                </div>
              </div>
              <div class="listing-details">
                <div class="listing-details-inner">
                  <div class="listing-title">
                    <h6><a href="index-02.html#">Bike Tours Hollywood</a></h6>
                    <span class="listing-price">$$$</span>
                  </div>
                  <div class="listing-rating-call">
                    <a class="listing-rating" href="index-02.html#"><span>4.1</span> 06 Rating</a>
                    <a class="listing-call" href="index-02.html#"><i class="fas fa-phone-volume"></i> +888 235 956</a>
                  </div>
                  <div class="listing-info">
                    <img class="img-fluid" src="assets/images/listing-brand/03.png" alt="">
                    <p class="mb-0">There are basically six key areas to higher achievement.</p>
                  </div>
                </div>
                <div class="listing-bottom">
                  <a class="listing-loaction" href="index-02.html#"> <i class="fas fa-map-marker-alt"></i> Lincolnton, NC 28092</a>
                  <span class="listing-close">Closed</span>
                </div>
              </div>
            </div>
          </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><i class="fas fa-chevron-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="fas fa-chevron-right"></i></button></div><div class="owl-dots"><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot active"><span></span></button></div></div>
      </div>
    </div>
  </div>
</section> -->

<section class="space-ptb bg-holder bg-overlay-black-50" style="background: url(images/bg/04.jpg);">
  <div class="container">
    <div class="row position-relative">
      <div class="col-12 text-center">
        <h2 class="text-white">Sell or Advertise anything online</h2>
        <p class="text-white mb-4 mb-md-5">Buy and sell everything from used cars to mobile phones and computers, or search for property, jobs and more</p>
        <a class="btn btn-primary mt-2 mt-sm-0 me-sm-2 mx-1" href="index-02.html#"> <i class="fas fa-plus-circle"></i> Add your  directory</a>
        <a class="btn btn-light mt-2 mt-sm-0 ms-sm-2 mx-1" href="index-02.html#"><i class="fas fa-plus-circle"></i> Browse our  directory</a>
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
