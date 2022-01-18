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
                <section class=" bg-light">
                    <div class="container">

                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="list-unstyled listing-detail-meta mb-4">
                                    <li><a href="#" onclick="hideShowTab('overviewTab')"><i
                                                class="fas fa-phone-volume"></i> OVERVIEW</a></li>
                                    <li><a href="#" onclick="hideShowTab('editTab')"><i class="far fa-heart"></i>
                                            EDITs</a></li>
                                    <li><a href="#" onclick="hideShowTab('deactivateTab')"><i
                                                class="far fa-bookmark"></i>
                                            DEACTIVATE</a>
                                    </li>
                                    <li><a href="#" onclick="hideShowTab('RatingsTab')"><i class="far fa-star"></i>
                                            RATINGS</a></li>

                                    <li><a href="#" onclick="hideShowTab('addproductTab')"><i class="far fa-star"></i>
                                            ADD PRODUCTS</a></li>

                                </ul>
                                <div id="overviewTab">
                                    <div class="row mb-4">
                                        <div class="col-md-9">
                                            <h5><?php echo $addetails['adName']; ?> <br> <span style="font-size:25px;">(
                                                    <?php echo $addetails['Adress']; ?> ) </span> </h5>
                                            <a class="listing-loaction text-dark mb-3 d-block"
                                                href=""><?php echo $addetails['Category']; ?></a>

                                           

                                        </div>

                                    </div>
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


                                    </div>
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
                                                    <h4 class=" mb-0"> <b>Working hours</b></h4>
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
                                <div id="editTab">
                                    <div class="col-lg-12 col-md-12">
                                        <form action="Admin/SubmitListing" enctype="multipart/form-data" method="post">
                                            <h4 class="mb-4">Add Listing</h4>
                                            <div class="sidebar mb-0">
                                                <div class="row">
                                                    <div class="mt-3 col-sm-12">
                                                        <?php require_once(APPPATH . 'views/Templates/error.php'); ?>
                                                    </div>
                                                </div>
                                                <div class="widget">
                                                    <div class="widget-title bg-primary">
                                                        <h6 class="text-white mb-0"> <i class="far fa-address-book"></i>
                                                            General
                                                            Information:
                                                        </h6>
                                                    </div>
                                                    <div class="widget-content">
                                                        <div class="row">
                                                            <div class="mb-3 col-lg-12">
                                                                <label class="form-label">Business name *</label>
                                                                <input type="text" class="form-control"
                                                                    name="businessname" placeholder="Business name"
                                                                    required>
                                                            </div>
                                                            <div class="mb-3 col-lg-6 select-border">
                                                                <label class="form-label">Category *</label>
                                                                <select class="form-control basic-select"
                                                                    name="category" required>
                                                                    <option value="" selected="selected">Select Category
                                                                    </option>

                                                                </select>
                                                            </div>
                                                            <div class="mb-3 col-lg-6">
                                                                <label class="form-label">Search keywords</label>
                                                                <input type="text" class="form-control" name="keywords"
                                                                    placeholder="keywords">
                                                            </div>

                                                            <div class="col-12 mb-0">
                                                                <label class="form-label">Description</label>
                                                                <textarea class="form-control" name="description"
                                                                    rows="4" placeholder="Description"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget">
                                                    <div class="widget-title bg-primary">
                                                        <h6 class="text-white mb-0"> <i
                                                                class="fas fa-map-marked-alt"></i> Location: </h6>
                                                    </div>
                                                    <div class="widget-content">

                                                        <div class="row mt-4">
                                                            <div class="mb-3 col-md-6">
                                                                <label class="form-label">Business Maps Address </label>
                                                                <input type="text" name="address" class="form-control"
                                                                    placeholder="" id="autocomplete">
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget">
                                                    <div class="widget-title bg-primary">
                                                        <h6 class="text-white mb-0"> <i class="far fa-clock"></i>
                                                            Opening Hours: </h6>
                                                    </div>
                                                    <div class="widget-content">
                                                        <div class="row mt-4">
                                                            <div class="col-12">
                                                                <h6 class="font-md">Monday: </h6>
                                                            </div>
                                                            <div class="mb-3 col-md-6 select-border">
                                                                <select class="form-control basic-select"
                                                                    name="monopenning">
                                                                    <option value="" selected="selected">Opening Time
                                                                    </option>
                                                                    <option value="02:00">Closed</option>
                                                                    <option value="03:00">01:00</option>
                                                                    <option value="03:00">02:00</option>
                                                                    <option value="04:00">04:00</option>
                                                                    <option value="05:00">05:00</option>
                                                                    <option value="06:00">06:00</option>
                                                                    <option value="07:00">07:00</option>
                                                                    <option value="08:00">08:00</option>
                                                                    <option value="03:00">09:00</option>
                                                                    <option value="03:00">10:00</option>
                                                                    <option value="04:00">11:00</option>
                                                                    <option value="05:00">12:00</option>
                                                                    <option value="03:00">13:00</option>
                                                                    <option value="03:00">14:00</option>
                                                                    <option value="04:00">15:00</option>
                                                                    <option value="05:00">16:00</option>
                                                                    <option value="06:00">17:00</option>
                                                                    <option value="07:00">19:00</option>
                                                                    <option value="08:00">20:00</option>
                                                                    <option value="03:00">21:00</option>
                                                                    <option value="03:00">22:00</option>
                                                                    <option value="04:00">23:00</option>
                                                                    <option value="05:00">24:00</option>

                                                                </select>
                                                            </div>
                                                            <div class="mb-3 col-md-6 select-border">
                                                                <select class="form-control basic-select"
                                                                    name="monclosing">
                                                                    <option value="value 01" selected="selected">Closing
                                                                        Time</option>
                                                                    <option value="02:00">Closed</option>
                                                                    <option value="03:00">01:00</option>
                                                                    <option value="03:00">02:00</option>
                                                                    <option value="04:00">04:00</option>
                                                                    <option value="05:00">05:00</option>
                                                                    <option value="06:00">06:00</option>
                                                                    <option value="07:00">07:00</option>
                                                                    <option value="08:00">08:00</option>
                                                                    <option value="03:00">09:00</option>
                                                                    <option value="03:00">10:00</option>
                                                                    <option value="04:00">11:00</option>
                                                                    <option value="05:00">12:00</option>
                                                                    <option value="03:00">13:00</option>
                                                                    <option value="03:00">14:00</option>
                                                                    <option value="04:00">15:00</option>
                                                                    <option value="05:00">16:00</option>
                                                                    <option value="06:00">17:00</option>
                                                                    <option value="07:00">19:00</option>
                                                                    <option value="08:00">20:00</option>
                                                                    <option value="03:00">21:00</option>
                                                                    <option value="03:00">22:00</option>
                                                                    <option value="04:00">23:00</option>
                                                                    <option value="05:00">24:00</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-2">
                                                            <div class="col-12">
                                                                <h6 class="font-md">Tuesday: </h6>
                                                            </div>
                                                            <div class="mb-3 col-md-6 select-border">
                                                                <select class="form-control basic-select"
                                                                    name="tuesopening">
                                                                    <option value="value 01" selected="selected">Opening
                                                                        Time</option>
                                                                    <option value="02:00">Closed</option>
                                                                    <option value="03:00">01:00</option>
                                                                    <option value="03:00">02:00</option>
                                                                    <option value="04:00">04:00</option>
                                                                    <option value="05:00">05:00</option>
                                                                    <option value="06:00">06:00</option>
                                                                    <option value="07:00">07:00</option>
                                                                    <option value="08:00">08:00</option>
                                                                    <option value="03:00">09:00</option>
                                                                    <option value="03:00">10:00</option>
                                                                    <option value="04:00">11:00</option>
                                                                    <option value="05:00">12:00</option>
                                                                    <option value="03:00">13:00</option>
                                                                    <option value="03:00">14:00</option>
                                                                    <option value="04:00">15:00</option>
                                                                    <option value="05:00">16:00</option>
                                                                    <option value="06:00">17:00</option>
                                                                    <option value="07:00">19:00</option>
                                                                    <option value="08:00">20:00</option>
                                                                    <option value="03:00">21:00</option>
                                                                    <option value="03:00">22:00</option>
                                                                    <option value="04:00">23:00</option>
                                                                    <option value="05:00">24:00</option>
                                                                </select>
                                                            </div>
                                                            <div class="mb-3 col-md-6 select-border">
                                                                <select class="form-control basic-select"
                                                                    name="tuesclosing">
                                                                    <option value="value 01" selected="selected">Closing
                                                                        Time</option>
                                                                    <option value="02:00">Closed</option>
                                                                    <option value="03:00">01:00</option>
                                                                    <option value="03:00">02:00</option>
                                                                    <option value="04:00">04:00</option>
                                                                    <option value="05:00">05:00</option>
                                                                    <option value="06:00">06:00</option>
                                                                    <option value="07:00">07:00</option>
                                                                    <option value="08:00">08:00</option>
                                                                    <option value="03:00">09:00</option>
                                                                    <option value="03:00">10:00</option>
                                                                    <option value="04:00">11:00</option>
                                                                    <option value="05:00">12:00</option>
                                                                    <option value="03:00">13:00</option>
                                                                    <option value="03:00">14:00</option>
                                                                    <option value="04:00">15:00</option>
                                                                    <option value="05:00">16:00</option>
                                                                    <option value="06:00">17:00</option>
                                                                    <option value="07:00">19:00</option>
                                                                    <option value="08:00">20:00</option>
                                                                    <option value="03:00">21:00</option>
                                                                    <option value="03:00">22:00</option>
                                                                    <option value="04:00">23:00</option>
                                                                    <option value="05:00">24:00</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-2">
                                                            <div class="col-12">
                                                                <h6 class="font-md">Wednesday: </h6>
                                                            </div>
                                                            <div class="mb-3 col-md-6 select-border">
                                                                <select class="form-control basic-select"
                                                                    name="wedopening">
                                                                    <option value="value 01" selected="selected">Opening
                                                                        Time</option>
                                                                    <option value="02:00">Closed</option>
                                                                    <option value="03:00">01:00</option>
                                                                    <option value="03:00">02:00</option>
                                                                    <option value="04:00">04:00</option>
                                                                    <option value="05:00">05:00</option>
                                                                    <option value="06:00">06:00</option>
                                                                    <option value="07:00">07:00</option>
                                                                    <option value="08:00">08:00</option>
                                                                    <option value="03:00">09:00</option>
                                                                    <option value="03:00">10:00</option>
                                                                    <option value="04:00">11:00</option>
                                                                    <option value="05:00">12:00</option>
                                                                    <option value="03:00">13:00</option>
                                                                    <option value="03:00">14:00</option>
                                                                    <option value="04:00">15:00</option>
                                                                    <option value="05:00">16:00</option>
                                                                    <option value="06:00">17:00</option>
                                                                    <option value="07:00">19:00</option>
                                                                    <option value="08:00">20:00</option>
                                                                    <option value="03:00">21:00</option>
                                                                    <option value="03:00">22:00</option>
                                                                    <option value="04:00">23:00</option>
                                                                    <option value="05:00">24:00</option>
                                                                </select>
                                                            </div>
                                                            <div class="mb-3 col-md-6 select-border">
                                                                <select class="form-control basic-select"
                                                                    name="wedclosing">
                                                                    <option value="value 01" selected="selected">Closing
                                                                        Time</option>
                                                                    <option value="02:00">Closed</option>
                                                                    <option value="03:00">01:00</option>
                                                                    <option value="03:00">02:00</option>
                                                                    <option value="04:00">04:00</option>
                                                                    <option value="05:00">05:00</option>
                                                                    <option value="06:00">06:00</option>
                                                                    <option value="07:00">07:00</option>
                                                                    <option value="08:00">08:00</option>
                                                                    <option value="03:00">09:00</option>
                                                                    <option value="03:00">10:00</option>
                                                                    <option value="04:00">11:00</option>
                                                                    <option value="05:00">12:00</option>
                                                                    <option value="03:00">13:00</option>
                                                                    <option value="03:00">14:00</option>
                                                                    <option value="04:00">15:00</option>
                                                                    <option value="05:00">16:00</option>
                                                                    <option value="06:00">17:00</option>
                                                                    <option value="07:00">19:00</option>
                                                                    <option value="08:00">20:00</option>
                                                                    <option value="03:00">21:00</option>
                                                                    <option value="03:00">22:00</option>
                                                                    <option value="04:00">23:00</option>
                                                                    <option value="05:00">24:00</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-2">
                                                            <div class="col-12">
                                                                <h6 class="font-md">Thursday: </h6>
                                                            </div>
                                                            <div class="mb-3 col-md-6 select-border">
                                                                <select class="form-control basic-select"
                                                                    name="thursdayopening">
                                                                    <option value="value 01" selected="selected">Opening
                                                                        Time</option>
                                                                    <option value="02:00">Closed</option>
                                                                    <option value="03:00">01:00</option>
                                                                    <option value="03:00">02:00</option>
                                                                    <option value="04:00">04:00</option>
                                                                    <option value="05:00">05:00</option>
                                                                    <option value="06:00">06:00</option>
                                                                    <option value="07:00">07:00</option>
                                                                    <option value="08:00">08:00</option>
                                                                    <option value="03:00">09:00</option>
                                                                    <option value="03:00">10:00</option>
                                                                    <option value="04:00">11:00</option>
                                                                    <option value="05:00">12:00</option>
                                                                    <option value="03:00">13:00</option>
                                                                    <option value="03:00">14:00</option>
                                                                    <option value="04:00">15:00</option>
                                                                    <option value="05:00">16:00</option>
                                                                    <option value="06:00">17:00</option>
                                                                    <option value="07:00">19:00</option>
                                                                    <option value="08:00">20:00</option>
                                                                    <option value="03:00">21:00</option>
                                                                    <option value="03:00">22:00</option>
                                                                    <option value="04:00">23:00</option>
                                                                    <option value="05:00">24:00</option>
                                                                </select>
                                                            </div>
                                                            <div class="mb-3 col-md-6 select-border">
                                                                <select class="form-control basic-select"
                                                                    name="thursdayclosing">
                                                                    <option value="value 01" selected="selected">Closing
                                                                        Time</option>
                                                                    <option value="02:00">Closed</option>
                                                                    <option value="03:00">01:00</option>
                                                                    <option value="03:00">02:00</option>
                                                                    <option value="04:00">04:00</option>
                                                                    <option value="05:00">05:00</option>
                                                                    <option value="06:00">06:00</option>
                                                                    <option value="07:00">07:00</option>
                                                                    <option value="08:00">08:00</option>
                                                                    <option value="03:00">09:00</option>
                                                                    <option value="03:00">10:00</option>
                                                                    <option value="04:00">11:00</option>
                                                                    <option value="05:00">12:00</option>
                                                                    <option value="03:00">13:00</option>
                                                                    <option value="03:00">14:00</option>
                                                                    <option value="04:00">15:00</option>
                                                                    <option value="05:00">16:00</option>
                                                                    <option value="06:00">17:00</option>
                                                                    <option value="07:00">19:00</option>
                                                                    <option value="08:00">20:00</option>
                                                                    <option value="03:00">21:00</option>
                                                                    <option value="03:00">22:00</option>
                                                                    <option value="04:00">23:00</option>
                                                                    <option value="05:00">24:00</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-2">
                                                            <div class="col-12">
                                                                <h6 class="font-md">Friday: </h6>
                                                            </div>
                                                            <div class="mb-3 col-md-6 select-border">
                                                                <select class="form-control basic-select"
                                                                    name="fridayopenning">
                                                                    <option value="value 01" selected="selected">Opening
                                                                        Time</option>
                                                                    <option value="02:00">Closed</option>
                                                                    <option value="03:00">01:00</option>
                                                                    <option value="03:00">02:00</option>
                                                                    <option value="04:00">04:00</option>
                                                                    <option value="05:00">05:00</option>
                                                                    <option value="06:00">06:00</option>
                                                                    <option value="07:00">07:00</option>
                                                                    <option value="08:00">08:00</option>
                                                                    <option value="03:00">09:00</option>
                                                                    <option value="03:00">10:00</option>
                                                                    <option value="04:00">11:00</option>
                                                                    <option value="05:00">12:00</option>
                                                                    <option value="03:00">13:00</option>
                                                                    <option value="03:00">14:00</option>
                                                                    <option value="04:00">15:00</option>
                                                                    <option value="05:00">16:00</option>
                                                                    <option value="06:00">17:00</option>
                                                                    <option value="07:00">19:00</option>
                                                                    <option value="08:00">20:00</option>
                                                                    <option value="03:00">21:00</option>
                                                                    <option value="03:00">22:00</option>
                                                                    <option value="04:00">23:00</option>
                                                                    <option value="05:00">24:00</option>
                                                                </select>
                                                            </div>
                                                            <div class="mb-3 col-md-6 select-border">
                                                                <select class="form-control basic-select"
                                                                    name="fridayclosing">
                                                                    <option value="value 01" selected="selected">Closing
                                                                        Time</option>
                                                                    <option value="02:00">Closed</option>
                                                                    <option value="03:00">01:00</option>
                                                                    <option value="03:00">02:00</option>
                                                                    <option value="04:00">04:00</option>
                                                                    <option value="05:00">05:00</option>
                                                                    <option value="06:00">06:00</option>
                                                                    <option value="07:00">07:00</option>
                                                                    <option value="08:00">08:00</option>
                                                                    <option value="03:00">09:00</option>
                                                                    <option value="03:00">10:00</option>
                                                                    <option value="04:00">11:00</option>
                                                                    <option value="05:00">12:00</option>
                                                                    <option value="03:00">13:00</option>
                                                                    <option value="03:00">14:00</option>
                                                                    <option value="04:00">15:00</option>
                                                                    <option value="05:00">16:00</option>
                                                                    <option value="06:00">17:00</option>
                                                                    <option value="07:00">19:00</option>
                                                                    <option value="08:00">20:00</option>
                                                                    <option value="03:00">21:00</option>
                                                                    <option value="03:00">22:00</option>
                                                                    <option value="04:00">23:00</option>
                                                                    <option value="05:00">24:00</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-2">
                                                            <div class="col-12">
                                                                <h6 class="font-md">Saturday: </h6>
                                                            </div>
                                                            <div class="mb-3 col-md-6 select-border">
                                                                <select class="form-control basic-select"
                                                                    name="saturdayopening">
                                                                    <option value="value 01" selected="selected">Opening
                                                                        Time</option>
                                                                    <option value="02:00">Closed</option>
                                                                    <option value="03:00">01:00</option>
                                                                    <option value="03:00">02:00</option>
                                                                    <option value="04:00">04:00</option>
                                                                    <option value="05:00">05:00</option>
                                                                    <option value="06:00">06:00</option>
                                                                    <option value="07:00">07:00</option>
                                                                    <option value="08:00">08:00</option>
                                                                    <option value="03:00">09:00</option>
                                                                    <option value="03:00">10:00</option>
                                                                    <option value="04:00">11:00</option>
                                                                    <option value="05:00">12:00</option>
                                                                    <option value="03:00">13:00</option>
                                                                    <option value="03:00">14:00</option>
                                                                    <option value="04:00">15:00</option>
                                                                    <option value="05:00">16:00</option>
                                                                    <option value="06:00">17:00</option>
                                                                    <option value="07:00">19:00</option>
                                                                    <option value="08:00">20:00</option>
                                                                    <option value="03:00">21:00</option>
                                                                    <option value="03:00">22:00</option>
                                                                    <option value="04:00">23:00</option>
                                                                    <option value="05:00">24:00</option>
                                                                </select>
                                                            </div>
                                                            <div class="mb-3 col-md-6 select-border">
                                                                <select class="form-control basic-select"
                                                                    name="sartudayclosing">
                                                                    <option value="value 01" selected="selected">Closing
                                                                        Time</option>
                                                                    <option value="02:00">Closed</option>
                                                                    <option value="03:00">01:00</option>
                                                                    <option value="03:00">02:00</option>
                                                                    <option value="04:00">04:00</option>
                                                                    <option value="05:00">05:00</option>
                                                                    <option value="06:00">06:00</option>
                                                                    <option value="07:00">07:00</option>
                                                                    <option value="08:00">08:00</option>
                                                                    <option value="03:00">09:00</option>
                                                                    <option value="03:00">10:00</option>
                                                                    <option value="04:00">11:00</option>
                                                                    <option value="05:00">12:00</option>
                                                                    <option value="03:00">13:00</option>
                                                                    <option value="03:00">14:00</option>
                                                                    <option value="04:00">15:00</option>
                                                                    <option value="05:00">16:00</option>
                                                                    <option value="06:00">17:00</option>
                                                                    <option value="07:00">19:00</option>
                                                                    <option value="08:00">20:00</option>
                                                                    <option value="03:00">21:00</option>
                                                                    <option value="03:00">22:00</option>
                                                                    <option value="04:00">23:00</option>
                                                                    <option value="05:00">24:00</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-2">
                                                            <div class="col-12">
                                                                <h6 class="font-md">Sunday: </h6>
                                                            </div>
                                                            <div class="mb-3 col-md-6 select-border">
                                                                <select class="form-control basic-select"
                                                                    name="sundayopenning">
                                                                    <option value="value 01" selected="selected">Opening
                                                                        Time</option>
                                                                    <option value="value 02">Closed</option>
                                                                    <option value="03">01</option>
                                                                    <option value="03">02</option>
                                                                    <option value="04">04</option>
                                                                    <option value="05">05</option>
                                                                    <option value="06">06</option>
                                                                    <option value="07">07</option>
                                                                    <option value="08">08</option>
                                                                    <option value="03">09</option>
                                                                    <option value="03">10</option>
                                                                    <option value="04">11</option>
                                                                    <option value="05">12</option>
                                                                </select>
                                                            </div>
                                                            <div class="mb-3 col-md-6 select-border">
                                                                <select class="form-control basic-select"
                                                                    name="sundayclosing">
                                                                    <option value="value 01" selected="selected">Closing
                                                                        Time</option>
                                                                    <option value="02:00">Closed</option>
                                                                    <option value="03:00">01:00</option>
                                                                    <option value="03:00">02:00</option>
                                                                    <option value="04:00">04:00</option>
                                                                    <option value="05:00">05:00</option>
                                                                    <option value="06:00">06:00</option>
                                                                    <option value="07:00">07:00</option>
                                                                    <option value="08:00">08:00</option>
                                                                    <option value="03:00">09:00</option>
                                                                    <option value="03:00">10:00</option>
                                                                    <option value="04:00">11:00</option>
                                                                    <option value="05:00">12:00</option>
                                                                    <option value="03:00">13:00</option>
                                                                    <option value="03:00">14:00</option>
                                                                    <option value="04:00">15:00</option>
                                                                    <option value="05:00">16:00</option>
                                                                    <option value="06:00">17:00</option>
                                                                    <option value="07:00">19:00</option>
                                                                    <option value="08:00">20:00</option>
                                                                    <option value="03:00">21:00</option>
                                                                    <option value="03:00">22:00</option>
                                                                    <option value="04:00">23:00</option>
                                                                    <option value="05:00">24:00</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget">
                                                    <div class="widget-title bg-primary">
                                                        <h6 class="text-white mb-0"> <i class="fas fa-th"></i> Gallery:
                                                        </h6>
                                                    </div>
                                                    <div class="widget-content">

                                                        <div class="row">
                                                            <div
                                                                class="control-group form-group col-lg-6 col-md-6 product_mainimage">
                                                                <div class="controls">
                                                                    <h6>Main Image <span class="text-danger">*</span>
                                                                    </h6>
                                                                    <img alt="osahan logo" id="output"
                                                                        style="width:100%;"
                                                                        src="<?php echo base_url('assets/images/placeholder2.jpg')?>">
                                                                    <input type="file" name="imageone" required=""
                                                                        class="form-control" onchange="loadFile(event)">
                                                                    <script>
                                                                    var loadFile = function(event) {
                                                                        var image = document.getElementById(
                                                                            'output');
                                                                        image.src = URL.createObjectURL(event.target
                                                                            .files[0]);
                                                                    };
                                                                    </script>
                                                                </div>
                                                            </div>
                                                            <div class="control-group form-group col-lg-6 col-md-6">
                                                                <h6>Additional Images <span class="text-danger">*</span>
                                                                </h6>
                                                                <div class="row product_images">
                                                                    <div class="col-md-6 ">
                                                                        <img alt="osahan logo" id="output2"
                                                                            style="width:100%;"
                                                                            src="<?php echo base_url('assets/images/placeholder2.jpg')?>">
                                                                        <input type="file" name="image2"
                                                                            class="form-control"
                                                                            onchange="loadFile2(event)">
                                                                    </div>
                                                                    <script>
                                                                    var loadFile2 = function(event) {
                                                                        var image = document.getElementById(
                                                                            'output2');
                                                                        image.src = URL.createObjectURL(event.target
                                                                            .files[0]);
                                                                    };
                                                                    </script>
                                                                    <div class="col-md-6">
                                                                        <img alt="osahan logo" id="output3"
                                                                            style="width:100%;"
                                                                            src="<?php echo base_url('assets/images/placeholder2.jpg')?>">
                                                                        <input type="file" name="image3"
                                                                            class="form-control"
                                                                            onchange="loadFile3(event)">
                                                                    </div>
                                                                    <script>
                                                                    var loadFile3 = function(event) {
                                                                        var image = document.getElementById(
                                                                            'output3');
                                                                        image.src = URL.createObjectURL(event.target
                                                                            .files[0]);
                                                                    };
                                                                    </script>
                                                                    <div class="col-md-6 ">
                                                                        <img alt="osahan logo" id="output4"
                                                                            style="width:100%;"
                                                                            src="<?php echo base_url('assets/images/placeholder2.jpg')?>">
                                                                        <input type="file" name="image4"
                                                                            class="form-control"
                                                                            onchange="loadFile4(event)">
                                                                    </div>
                                                                    <script>
                                                                    var loadFile4 = function(event) {
                                                                        var image = document.getElementById(
                                                                            'output4');
                                                                        image.src = URL.createObjectURL(event.target
                                                                            .files[0]);
                                                                    };
                                                                    </script>
                                                                    <div class="col-md-6 ">
                                                                        <img alt="osahan logo" id="output5"
                                                                            style="width:100%;"
                                                                            src="<?php echo base_url('assets/images/placeholder2.jpg')?>">
                                                                        <input type="file" name="image5"
                                                                            class="form-control"
                                                                            onchange="loadFile5(event)">
                                                                    </div>
                                                                    <script>
                                                                    var loadFile5 = function(event) {
                                                                        var image = document.getElementById(
                                                                            'output5');
                                                                        image.src = URL.createObjectURL(event.target
                                                                            .files[0]);
                                                                    };
                                                                    </script>


                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget mb-0">
                                                    <div class="widget-title bg-primary">
                                                        <h6 class="text-white mb-0"> <i class="fas fa-share-alt"></i>
                                                            Social Networks: </h6>
                                                    </div>
                                                    <div class="widget-content">
                                                        <div class="row align-items-end">
                                                            <div class="mb-3 col-md-6">
                                                                <label class="form-label">Phone </label>
                                                                <input type="text" name="phone" class="form-control"
                                                                    placeholder="Phone">
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label class="form-label">Website </label>
                                                                <input type="text" name="website" class="form-control"
                                                                    placeholder="Website">
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label class="form-label">Facebook </label>
                                                                <input type="text" name="facebook" class="form-control"
                                                                    placeholder="Facebook">
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label class="form-label">Twitter </label>
                                                                <input type="text" name="twitter" class="form-control"
                                                                    placeholder="Twitter">
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label class="form-label">Pinterest </label>
                                                                <input type="text" name="pintrest" class="form-control"
                                                                    placeholder="Pinterest ">
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label class="form-label">Instagram </label>
                                                                <input type="text" name="instagram" class="form-control"
                                                                    placeholder="Instagram">
                                                            </div>
                                                            <div class="mb-3 col-12 form-group">
                                                                <button class="btn btn-secondary" type="submit">Save &
                                                                    Preview</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div id="deactivateTab">
                                    <a href=""><i class="far fa-star"></i> edit</a>
                                </div>
                                <div id="RatingsTab">
                                    <?php if(isset($ratings) && ($ratings->num_rows()>0)){ ?>
                                    <div class="listing-detail-box mb-3" style="background-color:white;padding:20px;">
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
                                </div>
                                <div id="addproductTab">
                                    <div class="col-lg-12 col-md-12">
                                        <form action="Admin/SubmitListing" enctype="multipart/form-data" method="post">
                                            <h4 class="mb-4">Add Listing</h4>
                                            <div class="sidebar mb-0">
                                                <div class="row">
                                                    <div class="mt-3 col-sm-12">
                                                        <?php require_once(APPPATH . 'views/Templates/error.php'); ?>
                                                    </div>
                                                </div>
                                                <div class="widget">
                                                    <div class="widget-title bg-primary">
                                                        <h6 class="text-white mb-0"> <i class="far fa-address-book"></i>
                                                            General
                                                            Information:
                                                        </h6>
                                                    </div>
                                                    <div class="widget-content">
                                                        <div class="row">
                                                            <div class="mb-3 col-lg-12">
                                                                <label class="form-label">Business name *</label>
                                                                <input type="text" class="form-control"
                                                                    name="businessname" placeholder="Business name"
                                                                    required>
                                                            </div>


                                                            <div class="col-12 mb-0">
                                                                <label class="form-label">Description</label>
                                                                <textarea class="form-control" name="description"
                                                                    rows="4" placeholder="Description"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="widget">
                                                    <div class="widget-title bg-primary">
                                                        <h6 class="text-white mb-0"> <i class="fas fa-th"></i> Gallery:
                                                        </h6>
                                                    </div>
                                                    <div class="widget-content">

                                                        <div class="row">
                                                            <div
                                                                class="control-group form-group col-lg-6 col-md-6 product_mainimage">
                                                                <div class="controls">
                                                                    <h6>Main Image <span class="text-danger">*</span>
                                                                    </h6>
                                                                    <img alt="osahan logo" id="output"
                                                                        style="width:100%;"
                                                                        src="<?php echo base_url('assets/images/placeholder2.jpg')?>">
                                                                    <input type="file" name="imageone" required=""
                                                                        class="form-control" onchange="loadFile(event)">
                                                                    <script>
                                                                    var loadFile = function(event) {
                                                                        var image = document.getElementById(
                                                                            'output');
                                                                        image.src = URL.createObjectURL(event.target
                                                                            .files[0]);
                                                                    };
                                                                    </script>
                                                                </div>
                                                            </div>
                                                            <div class="control-group form-group col-lg-6 col-md-6">
                                                                <h6>Additional Images <span class="text-danger">*</span>
                                                                </h6>
                                                                <div class="row product_images">
                                                                    <div class="col-md-6 ">
                                                                        <img alt="osahan logo" id="output2"
                                                                            style="width:100%;"
                                                                            src="<?php echo base_url('assets/images/placeholder2.jpg')?>">
                                                                        <input type="file" name="image2"
                                                                            class="form-control"
                                                                            onchange="loadFile2(event)">
                                                                    </div>
                                                                    <script>
                                                                    var loadFile2 = function(event) {
                                                                        var image = document.getElementById(
                                                                            'output2');
                                                                        image.src = URL.createObjectURL(event.target
                                                                            .files[0]);
                                                                    };
                                                                    </script>
                                                                    <div class="col-md-6">
                                                                        <img alt="osahan logo" id="output3"
                                                                            style="width:100%;"
                                                                            src="<?php echo base_url('assets/images/placeholder2.jpg')?>">
                                                                        <input type="file" name="image3"
                                                                            class="form-control"
                                                                            onchange="loadFile3(event)">
                                                                    </div>
                                                                    <script>
                                                                    var loadFile3 = function(event) {
                                                                        var image = document.getElementById(
                                                                            'output3');
                                                                        image.src = URL.createObjectURL(event.target
                                                                            .files[0]);
                                                                    };
                                                                    </script>
                                                                    <div class="col-md-6 ">
                                                                        <img alt="osahan logo" id="output4"
                                                                            style="width:100%;"
                                                                            src="<?php echo base_url('assets/images/placeholder2.jpg')?>">
                                                                        <input type="file" name="image4"
                                                                            class="form-control"
                                                                            onchange="loadFile4(event)">
                                                                    </div>
                                                                    <script>
                                                                    var loadFile4 = function(event) {
                                                                        var image = document.getElementById(
                                                                            'output4');
                                                                        image.src = URL.createObjectURL(event.target
                                                                            .files[0]);
                                                                    };
                                                                    </script>
                                                                    <div class="col-md-6 ">
                                                                        <img alt="osahan logo" id="output5"
                                                                            style="width:100%;"
                                                                            src="<?php echo base_url('assets/images/placeholder2.jpg')?>">
                                                                        <input type="file" name="image5"
                                                                            class="form-control"
                                                                            onchange="loadFile5(event)">
                                                                    </div>
                                                                    <script>
                                                                    var loadFile5 = function(event) {
                                                                        var image = document.getElementById(
                                                                            'output5');
                                                                        image.src = URL.createObjectURL(event.target
                                                                            .files[0]);
                                                                    };
                                                                    </script>


                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </form>
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
</body>

</html>