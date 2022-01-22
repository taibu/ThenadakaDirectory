<!DOCTYPE html>
<html lang="en">
  <head>
   
  <?php $this->load->view("Templates/head") ?>

  </head>

<body>

<?php $this->load->view("Templates/header") ?>





<!--=================================
Places -->
<section class="space-pb popup-gallery">
  <div class="container" style="width:98%;margin:auto;padding-top:80px;">
    <div class="row">
      <div class="col-12">
        <div class="section-title" style="text-align:center;margin-top:20px">
          <h2>Search Results </h2>
          
        </div>
      </div>
    </div>
    <div class="row">
     <?php if($addetails->num_rows()>0){
            $i=1;
          foreach($addetails->result() as $row){ 
            $imageone=base_url()."/assets/images/listing/".$row->photo; 
        ?>
        <div class="col-lg-3 col-sm-6 mb-4">
                    <a href="<?php echo base_url('listing/'.$row->ListingId) ?>" >
                        <div class="listing-item">
                          <div class="listing-image bg-overlay-half-bottom">
                            <img class="img-fluid" style="height:200px;width:100%;" src="<?php echo $imageone ?>" alt="">
                            <div class="listing-quick-box">
                                <a class="category" href="<?php echo base_url('listing/'.$row->ListingId) ?>"> <i class="fa fa-edit"></i> <?php echo $row->Category ?></a>
                                <a class="popup popup-single" href="<?php echo $imageone ?>" data-bs-toggle="tooltip" data-placement="top" title="Zoom"> <i class="fa fa-search-plus"></i> </a>
                            </div>
                          </div>
                          <div class="listing-details">
                            <div class="listing-details-inner">
                              <div class="listing-title">
                                <h6 style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 1;-webkit-box-orient: vertical;"><a href="<?php echo base_url('listing/'.$row->ListingId) ?>" ><?php echo $row->adName ?></a></h6>
                              </div>
                              <div class="listing-rating-call">
                                <a class="listing-rating" href="index.html#"><span><?php echo (empty($row->rating)?'0.0':$row->rating); ?></span> <?php echo $row->ratingcount ?> Ratings</a>
                                <a class="listing-call" href=""><i class="fa fa-list-alt" aria-hidden="true"></i> <?php echo $row->Category ?></a>
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




<!--=================================
footer-->
<?php $this->load->view("Templates/footer") ?>
<!--=================================
footer-->



</body>
</html>
