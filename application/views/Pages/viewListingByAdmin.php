<!DOCTYPE html>
<html lang="en">
<?php
  $getdata= $this->session->userdata('loggedinUser');
   
?>

<head>

    <?php $this->load->view("Templates/head") ?>

</head>

<body>

    <?php $this->load->view("Templates/headerAdmin") ?>

  

   
    <section class="space-ptb bg-light">
        <div class="containe" style="width:98%;margin:auto;">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <?php $this->load->view("Templates/adminsidebar") ?>
                </div>
            <?php if($type=="list"){ ?>
                <?php if($getdata['RoleCode']=="01"){ ?>
                <div class="col-lg-9 col-md-8">
                 
                    <div class="row">
                        <div class="col-12">
                            <div class="bg-white p-4 shadow-sm border-radius">
                                <h5 class="mb-4">Recent Listings</h5>
                                <div class=" table-responsive ">
                                    <table class="table ">
                                        <thead>
                                            <tr>
                                                <th> ID </th>
                                                <th> Name</th>
                                                <th> Category</th>
                                                <th> Address </th>
                                                <th> Status</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if($pendingads->num_rows()>0){
                                                $i=1;
                                            foreach($pendingads->result() as $row){ 
                                                $imageone=base_url()."/assets/images/listing/".$row->photo; 
                                            ?>
                                            <tr>
                                                <td>
                                                    <div>
                                                        <img class="img-fluid" style="height:50px;width:60%;"
                                                            src="<?php echo $imageone ?>" alt="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <?php echo $row->adName ?>
                                                </td>
                                                <td>
                                                    <?php echo $row->Category ?>
                                                </td>
                                                <td>
                                                    <?php echo $row->Adress ?>
                                                </td>
                                                <td>
                                                    <?php echo $row->Approved ?>
                                                </td>

                                            </tr>
                                            <?php $i++;}  }  ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>


            <?php if($getdata['RoleCode']=="02"){ ?>
            <div class="col-lg-9 col-md-8">
                <!-- <h4 class="mb-4">Howdy, Directro</h4> -->
                <div class="row">
                    <div class="col-12">
                        <div class="bg-white p-4 shadow-sm border-radius">
                            <h5 class="mb-4">Recent Listings</h5>
                            <div class=" table-responsive ">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th> ID </th>
                                            <th> Name</th>
                                            <th> Category</th>
                                            <th> Address </th>
                                            <th> Status</th>
                                            <th> Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if($pendingads->num_rows()>0){
                                                $i=1;
                                            foreach($pendingads->result() as $row){ 
                                                $imageone=base_url()."/assets/images/listing/".$row->photo; 
                                            ?>
                                        <tr>
                                            <td>
                                                <div>
                                                    <img class="img-fluid" style="height:50px;width:60%;"
                                                        src="<?php echo $imageone ?>" alt="">
                                                </div>
                                            </td>
                                            <td>
                                                <?php echo $row->adName ?>
                                            </td>
                                            <td>
                                                <?php echo $row->Category ?>
                                            </td>
                                            <td>
                                                <?php echo $row->Adress ?>
                                            </td>
                                            <td>
                                                <?php echo $row->Approved ?>
                                            </td>
                                            <td> <a class="badge mb-0 bg-success"
                                                    href="<?php echo base_url('PendingListing/'.$row->ListingId) ?>">VIEW
                                                    DETAILS</a>
                                            </td>
                                        </tr>
                                        <?php $i++;}  }  ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>

            <?php if($getdata['RoleCode']=="03"){ ?>
            <div class="col-lg-9 col-md-8">
                <!-- <h4 class="mb-4">Howdy, Directro</h4> -->
               
                <div class="row">
                    <div class="col-12">
                        <div class="bg-white p-4 shadow-sm border-radius">
                            <h5 class="mb-4">Recent Listings</h5>
                            <div class=" table-responsive ">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th> ID </th>
                                            <th> Name</th>
                                            <th> Category</th>
                                            <th> Address </th>
                                            <th> Status</th>
                                            <th> Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if($adslist->num_rows()>0){
                                                $i=1;
                                            foreach($adslist->result() as $row){ 
                                                $imageone=base_url()."/assets/images/listing/".$row->photo; 
                                            ?>
                                        <tr>
                                            <td>
                                                <div>
                                                    <img class="img-fluid" style="height:50px;width:60%;"
                                                        src="<?php echo $imageone ?>" alt="">
                                                </div>
                                            </td>
                                            <td>
                                                <?php echo $row->adName ?>
                                            </td>
                                            <td>
                                                <?php echo $row->Category ?>
                                            </td>
                                            <td>
                                                <?php echo $row->Adress ?>
                                            </td>
                                            <td>
                                                <?php echo $row->Approved ?>
                                            </td>
                                            <td> <a class="badge mb-0 bg-success"
                                                    href="<?php echo base_url('ViewListingDetails/'.$row->ListingId) ?>">EDIT
                                                    DETAILS</a>
                                            </td>
                                        </tr>
                                        <?php $i++;}  }  ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>


            <?php } ?>

            <?php if($type=="details"){ ?>
                
                <div class="col-lg-9 col-md-8">
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
                                $imagetwo=base_url()."/assets/images/listing/".((empty($addetails['photo2']))?$addetails['photo']:$addetails['photo2']);
                                $imagethree=base_url()."/assets/images/listing/".((empty($addetails['photo3']))?$addetails['photo']:$addetails['photo3']);
                                $imagefour=base_url()."/assets/images/listing/".((empty($addetails['photo4']))?$addetails['photo']:$addetails['photo4']);
                                $imagefive=base_url()."/assets/images/listing/".((empty($addetails['photo5']))?$addetails['photo']:$addetails['photo5']);
                        ?>
                <!--=================================
            Page title -->
            
                <!--=================================
            Listing single -->
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
                                            <div class="slider slider-for">
                                                <img class="img-fluid" src="<?php echo $imageone ?>" alt="">
                                                <img class="img-fluid" src="<?php echo $imagetwo ?>" alt="">
                                                <img class="img-fluid" src="<?php echo $imagethree ?>" alt="">
                                                <img class="img-fluid" src="<?php echo $imagefour ?>" alt="">
                                                <img class="img-fluid" src="<?php echo $imagefive ?>" alt="">
                                                <img class="img-fluid" src="<?php echo $imageone ?>" alt="">
                                                <img class="img-fluid" src="<?php echo $imageone ?>" alt="">
                                                <img class="img-fluid" src="<?php echo $imageone ?>" alt="">
                                            </div>
                                            <div class="slider slider-nav d-none d-sm-block">
                                                <img class="img-fluid" src="<?php echo $imageone ?>" alt="">
                                                <img class="img-fluid" src="<?php echo $imagetwo ?>" alt="">
                                                <img class="img-fluid" src="<?php echo $imagethree ?>" alt="">
                                                <img class="img-fluid" src="<?php echo $imagefour ?>" alt="">
                                                <img class="img-fluid" src="<?php echo $imagefive ?>" alt="">
                                                <img class="img-fluid" src="<?php echo $imageone ?>" alt="">
                                                <img class="img-fluid" src="<?php echo $imageone ?>" alt="">
                                                <img class="img-fluid" src="<?php echo $imageone ?>" alt="">
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
                                            <h5>Listing 5 Recent Reviews <span style="padding:4px;border-radius:5px;" class="bg-success text-white me-2 pull-right"><?php echo $average ?>  Rating</span> </h5>
                                        </div>
                                        <?php if($ratings->num_rows()>0){
                                            $i=1;
                                        foreach($ratings->result() as $row){ 
                                            //$imageone=base_url()."/assets/images/listing/".$row->photo; 
                                        ?>
                                        <div class="row border-bottom pb-4 mb-4">
                                            <div class="col-md-1">
                                                <div class="avatar avatar-lg">
                                                    <img src="<?php echo base_url('assets/images/avatar/01.png') ?>" class="img-fluid rounded-circle" alt="...">
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
                                                            class="full form-label" for="star5" title="Awesome - 5 stars"></label>
                                                        <input type="radio" id="star4half" name="ratings"
                                                            value="4.5"><label class="half form-label" for="star4half"
                                                            title="Pretty good - 4.5 stars"></label>
                                                        <input type="radio" id="star4" name="ratings" value="4"><label
                                                            class="full form-label" for="star4"
                                                            title="Pretty good - 4 stars"></label>
                                                        <input type="radio" id="star3half" name="ratings"
                                                            value="3.5"><label class="half form-label" for="star3half"
                                                            title="Meh - 3.5 stars"></label>
                                                        <input type="radio" id="star3" name="ratings" value="3"><label
                                                            class="full form-label" for="star3" title="Meh - 3 stars"></label>
                                                        <input type="radio" id="star2half" name="ratings"
                                                            value="2.5"><label class="half form-label" for="star2half"
                                                            title="Kinda bad - 2.5 stars"></label>
                                                        <input type="radio" id="star2" name="ratings" value="2"><label
                                                            class="full form-label" for="star2" title="Kinda bad - 2 stars"></label>
                                                        <input type="radio" id="star1half" name="ratings"
                                                            value="1.5"><label class="half form-label" for="star1half"
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
                                                    <input type="hidden"  name="Id" value="<?php echo $addetails['ListingId'] ?>">   
                                                    <label class="form-label">Your name</label>
                                                    <input type="text" class="form-control" name="name" placeholder="Your name">
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
                                                <li class="mb-2"><strong class="text-dark d-inline-block me-2">Address:</strong><?php echo $addetails['Adress']; ?></li>
                                                
                                                <li class="mb-2"><strong class="text-dark d-inline-block me-2">Phone:</strong>(123)
                                                    345-6789</li>
                                                <li class="mb-2"><strong class="text-dark d-inline-block me-2">Facebook:</strong><?php echo $addetails['facebooklink']; ?></li>
                                                <li class="mb-2"><strong class="text-dark d-inline-block me-2">Instagram:</strong><?php echo $addetails['instalink']; ?></li>
                                                <li class="mb-2"><strong class="text-dark d-inline-block me-2">Twitter:</strong><?php echo $addetails['twitterlink']; ?></li>
                                            </ul>
                                            
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--=================================
            Listing single -->
            
                <?php } ?>
            </div>
        </div>
        </div>
    </section>
  



    <!--=================================
footer-->
    <?php $this->load->view("Templates/footerAdmin") ?>
    <!--=================================
footer-->



</body>

</html>