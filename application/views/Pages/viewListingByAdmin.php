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
                                            <tr style="background-color:darkcyan">
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
                                        <tr style="background-color:darkcyan">
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
                                        <tr style="background-color:darkcyan">
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
                                                    href="<?php echo base_url('ViewListingDetails/'.$row->ListingId) ?>">VIEW
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
                            <div class="col-lg-12">
                                <ul class="list-unstyled listing-detail-meta mb-4">
                                    <li><a href="#" onclick="hideShowTab('overviewTab')"><i class="fa fa-eye"></i>
                                            OVERVIEW</a></li>
                                    <li><a href="#" onclick="hideShowTab('editTab')"><i class="fa fa-edit"></i>
                                            EDIT</a></li>
                                    <li><a href="#" onclick="hideShowTab('deactivateTab')"><i class="fa fa-remove"></i>
                                            SERVICES</a>
                                    </li>
                                    <li><a href="#" onclick="hideShowTab('RatingsTab')"><i class="fa fa-star"></i>
                                            RATINGS</a></li>

                                    <li><a href="#" onclick="hideShowTab('addproductTab')"><i class="fa fa-cogs"></i>
                                            ADD PRODUCTS</a></li>

                                </ul>
                                <div class="row">
                                    <div class="mt-3 col-sm-12">
                                        <?php require_once(APPPATH . 'views/Templates/error.php'); ?>
                                    </div>
                                </div>
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
                                                    <h4 class=" mb-0"> <b>Contacts & Social Links</b></h4>
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
                                    <?php if(($getdata['RoleCode']=="02") &&($addetails['Approved']=="PENDING")){ ?>
                                    <div class="row" style="padding-bottom:30px;padding-top:20px;">
                                        <div class="col-md-6">
                                            <a  href="<?php echo base_url('ApprovePendingListing/'.$addetails['ListingId']) ?>" class="btn btn-primary" type="submit">Approve Listing</a>
                                        </div>
                                        <div class="col-md-6">
                                            <a class="btn btn-danger" onclick="hideshowrejectionform()" type="submit">Reject Listing</a>
                                        </div>
                                    </div>
                                    <script>
                                        function hideshowrejectionform(){
                                            
                                            var y = document.getElementById("rejectform").style.display = "block";
                                           
                                        }
                                    </script>
                                    <form id="rejectform" style="display:none;" action="<?php echo base_url('RejectPendingListing/'.$addetails['ListingId']) ?>" method="post"> 
                                        <div class="row">
                                            
                                            <div class="form-group mb-12 col-md-12">
                                                <input type="hidden"  name="Id" value="<?php echo $addetails['ListingId'] ?>">   
                                            
                                            
                                            </div>
                                            
                                            <div class="form-group mb-3 col-md-12">
                                                <label class="form-label">Your Reason for rejecting</label>
                                                <textarea class="form-control" name="message" rows="4" placeholder=""></textarea>
                                            </div>
                                        
                                            <div class="col-md-12">
                                                <button class="btn btn-primary" type="submit">Submit Review</button>
                                            </div>
                                        </div>
                                    </form>
                                    <?php } ?>
                                </div>
                                <div id="editTab">
                                    <div class="col-lg-12 col-md-12">
                                        <form action="<?php echo base_url('Admin/SubmitListing') ?>"
                                            enctype="multipart/form-data" method="post">
                                            <h4 class="mb-4">Edit Listing</h4>
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
                                                                <input type="hidden" name="listingId"
                                                                    value="<?php echo $addetails['ListingId']; ?>"
                                                                    required>
                                                                <input type="text" class="form-control"
                                                                    name="businessname"
                                                                    value="<?php echo $addetails['adName']; ?>"
                                                                    required>
                                                            </div>
                                                            <div class="mb-3 col-lg-6 select-border">
                                                                <label class="form-label">Category *</label>
                                                                <select class="form-control basic-select"
                                                                    name="category" required>
                                                                    <option
                                                                        value="<?php echo $addetails['CategoryId']; ?>"
                                                                        selected="selected">
                                                                        <?php echo $addetails['Category']; ?>
                                                                    </option>
                                                                    <?php if($allcategories->num_rows()>0){
                                                                    $i=1;
                                                                    foreach($allcategories->result() as $row){
                                                                
                                                                    ?>
                                                                    <tr>
                                                                        <option value="<?php echo $row->CategoryId ?>">
                                                                            <?php echo $row->Category ?></option>
                                                                    </tr>
                                                                    <?php } } ?>
                                                                </select>
                                                            </div>
                                                            <div class="mb-3 col-lg-6">
                                                                <label class="form-label">Search keywords</label>
                                                                <input type="text" class="form-control" name="keywords"
                                                                    value="<?php echo $addetails['keywords']; ?>">
                                                            </div>

                                                            <div class="col-12 mb-0">
                                                                <label class="form-label">Description</label>
                                                                <textarea class="form-control" name="description"
                                                                    rows="4"
                                                                    placeholder="Description"><?php echo $addetails['Description']; ?></textarea>
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
                                                                    value="<?php echo $addetails['Adress']; ?>"
                                                                    id="autocomplete">
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
                                                                <input type="time" name="monopenning" id=""
                                                                    class="form-control"
                                                                    value="<?php echo explode(" - " ,$addetails['MonworkHours'])[0]; ?>">
                                                            </div>
                                                            <div class="mb-3 col-md-6 select-border">
                                                                <input type="time" name="monclosing" id=""
                                                                    class="form-control"
                                                                    value="<?php echo explode(" - " ,$addetails['MonworkHours'])[1]; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="row mt-2">
                                                            <div class="col-12">
                                                                <h6 class="font-md">Tuesday: </h6>
                                                            </div>
                                                            <div class="mb-3 col-md-6 select-border">
                                                                <input type="time" name="tuesopening" id=""
                                                                    class="form-control"
                                                                    value="<?php echo explode(" - " ,$addetails['TueworkHours'])[0]; ?>">

                                                            </div>
                                                            <div class="mb-3 col-md-6 select-border">
                                                                <input type="time" name="tuesclosing" id=""
                                                                    class="form-control"
                                                                    value="<?php echo explode(" - " ,$addetails['TueworkHours'])[1]; ?>">

                                                            </div>
                                                        </div>
                                                        <div class="row mt-2">
                                                            <div class="col-12">
                                                                <h6 class="font-md">Wednesday: </h6>
                                                            </div>
                                                            <div class="mb-3 col-md-6 select-border">
                                                                <input type="time" name="wedopening" id=""
                                                                    class="form-control"
                                                                    value="<?php echo explode(" - " ,$addetails['WedworkHours'])[0]; ?>">

                                                            </div>
                                                            <div class="mb-3 col-md-6 select-border">
                                                                <input type="time" name="wedclosing" id=""
                                                                    class="form-control"
                                                                    value="<?php echo explode(" - " ,$addetails['WedworkHours'])[1]; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="row mt-2">
                                                            <div class="col-12">
                                                                <h6 class="font-md">Thursday: </h6>
                                                            </div>
                                                            <div class="mb-3 col-md-6 select-border">
                                                                <input type="time" name="thursdayopening" id=""
                                                                    class="form-control"
                                                                    value="<?php echo explode(" - " ,$addetails['ThursworkHours'])[0]; ?>">

                                                            </div>
                                                            <div class="mb-3 col-md-6 select-border">
                                                                <input type="time" name="thursdayclosing" id=""
                                                                    class="form-control"
                                                                    value="<?php echo explode(" - " ,$addetails['ThursworkHours'])[1]; ?>">

                                                            </div>
                                                        </div>
                                                        <div class="row mt-2">
                                                            <div class="col-12">
                                                                <h6 class="font-md">Friday: </h6>
                                                            </div>
                                                            <div class="mb-3 col-md-6 select-border">
                                                                <input type="time" name="fridayopenning" id=""
                                                                    class="form-control"
                                                                    value="<?php echo explode(" - " ,$addetails['FriworkHours'])[0]; ?>">

                                                            </div>
                                                            <div class="mb-3 col-md-6 select-border">
                                                                <input type="time" name="fridayclosing" id=""
                                                                    class="form-control"
                                                                    value="<?php echo explode(" - " ,$addetails['FriworkHours'])[1]; ?>">

                                                            </div>
                                                        </div>
                                                        <div class="row mt-2">
                                                            <div class="col-12">
                                                                <h6 class="font-md">Saturday: </h6>
                                                            </div>
                                                            <div class="mb-3 col-md-6 select-border">
                                                                <input type="time" name="saturdayopening" id=""
                                                                    class="form-control"
                                                                    value="<?php echo explode(" - " ,$addetails['SatworkHours'])[0]; ?>">

                                                            </div>
                                                            <div class="mb-3 col-md-6 select-border">
                                                                <input type="time" name="sartudayclosing" id=""
                                                                    class="form-control"
                                                                    value="<?php echo explode(" - " ,$addetails['SatworkHours'])[1]; ?>">

                                                            </div>
                                                        </div>
                                                        <div class="row mt-2">
                                                            <div class="col-12">
                                                                <h6 class="font-md">Sunday: </h6>
                                                            </div>
                                                            <div class="mb-3 col-md-6 select-border">
                                                                <input type="time" name="sundayopenning" id=""
                                                                    class="form-control"
                                                                    value="<?php echo explode(" - " ,$addetails['SunworkHours'])[0]; ?>">

                                                            </div>
                                                            <div class="mb-3 col-md-6 select-border">
                                                                <input type="time" name="sundayclosing" id=""
                                                                    class="form-control"
                                                                    value="<?php echo explode(" - " ,$addetails['SunworkHours'])[1]; ?>">

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
                                                                        src="<?php echo  ($imageone)!=""?$imageone:base_url('assets/images/placeholder2.jpg');?>">
                                                                    <input type="file" name="imageone" required="false"
                                                                        class="form-control" onchange="loadFile(event)">
                                                                    <?php //echo (strpos($imageone,'placeholder2')?'true':'false') ?>

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
                                                                            src="<?php echo  ($imagetwo)!=""?$imagetwo:base_url('assets/images/placeholder2.jpg');?>">
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
                                                                            src="<?php echo  ($imagethree)!=""?$imagethree:base_url('assets/images/placeholder2.jpg');?>">
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
                                                                            src="<?php echo  ($imagethree)!=""?$imagefour:base_url('assets/images/placeholder2.jpg');?>">
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
                                                                            src="<?php echo  $imagefive ?>">
                                                                        <input type="file" name="image5"
                                                                            class="form-control"
                                                                            value="<?php echo  $imagefive ?>"
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
                                                                    value="<?php echo $addetails['Phone']; ?>">
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label class="form-label">Website </label>
                                                                <input type="text" name="website" class="form-control"
                                                                    value="<?php echo $addetails['Website']; ?>">
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label class="form-label">Facebook </label>
                                                                <input type="text" name="facebook" class="form-control"
                                                                    value="<?php echo $addetails['facebooklink']; ?>">
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label class="form-label">Twitter </label>
                                                                <input type="text" name="twitter" class="form-control"
                                                                    value="<?php echo $addetails['twitterlink']; ?>">
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label class="form-label">Pinterest </label>
                                                                <input type="text" name="pintrest" class="form-control"
                                                                    value="<?php echo $addetails['instalink']; ?>">
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label class="form-label">Instagram </label>
                                                                <input type="text" name="instagram" class="form-control"
                                                                    value="<?php echo $addetails['instalink']; ?>">
                                                            </div>
                                                            <div class="mb-3 col-12 form-group">
                                                                <button class="btn btn-secondary" type="submit">Save
                                                                    Details</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
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
                                                        <img class="img-fluid" src="<?php echo base_url('assets/images/listing/'.$row->photo) ?>" alt="">
                                                    </div>
                                                    <div class="ms-3">
                                                        <h5 class="text-dark">  <?php echo $row->ProductName ?> </h5>
                                                        <p class="d-flex font-sm text-dark" href="blog-single.html#"><?php echo $row->ProductDescription ?></p>
                                                    </div>
                                                </div>
                                                <?php } }else{ ?>
                                                <h5 style="margin:3em;"><i>Content creater did not add products / services to this listing</i></h5>
                                                <?php } ?>
                                        </div>
                                    </div>
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
                                    <?php }else{ ?>
                                    <div style="padding:30px;background-color:white;">
                                        <p>There are no ratings for this listing</p>
                                    </div>
                                    <?php } ?>
                                </div>
                                <div id="addproductTab">
                                    <div class="col-lg-12 col-md-12">
                                        <form action="<?php echo base_url('Admin/SubmitListingProduct') ?>"
                                            enctype="multipart/form-data" method="post">
                                            <h4 class="mb-4">Add Product / Service to Listing</h4>
                                            <div class="sidebar mb-0">
                                                <div class="row">
                                                    <div class="mt-3 col-sm-12">
                                                        <?php require_once(APPPATH . 'views/Templates/error.php'); ?>
                                                    </div>
                                                </div>
                                                <div class="widget">
                                                    <div class="widget-title bg-primary">
                                                        <h6 class="text-white mb-0"> <i class="far fa-address-book"></i>
                                                            Product /service
                                                            Information:
                                                        </h6>
                                                    </div>
                                                    <div class="widget-content">
                                                        <div class="row">
                                                            <div class="mb-3 col-lg-12">
                                                                <label class="form-label">Product /Service name
                                                                    *</label>
                                                                <input type="hidden" name="listingId"
                                                                    value="<?php echo $addetails['ListingId']; ?>"
                                                                    required>
                                                                <input type="text" class="form-control"
                                                                    name="businessname"
                                                                    placeholder="product / service name" required>
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
                                                        <h6 class="text-white mb-0"> <i class="fas fa-th"></i> Product
                                                            Image:
                                                        </h6>
                                                    </div>
                                                    <div class="widget-content">

                                                        <div class="row">
                                                            <div
                                                                class="control-group form-group col-lg-6 col-md-6 product_mainimage">
                                                                <div class="controls">
                                                                    <h6>Main Image <span class="text-danger">*</span>
                                                                    </h6>
                                                                    <img alt="osahan logo" id="outputps"
                                                                        style="width:200px;"
                                                                        src="<?php echo base_url('assets/images/placeholder2.jpg')?>">
                                                                    <input type="file" name="imageone" required=""
                                                                        class="form-control" onchange="loadFile(event)">
                                                                    <script>
                                                                    var loadFile = function(event) {
                                                                        var image = document.getElementById(
                                                                            'outputps');
                                                                        image.src = URL.createObjectURL(event.target
                                                                            .files[0]);
                                                                    };
                                                                    </script>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="mb-3 col-12 form-group"> <br><br>
                                                            <button class="btn btn-secondary" type="submit">Save
                                                                Product/Service</button>
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