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
                <?php if($getdata['RoleCode']=="01"){ ?>              
                <div class="col-lg-9 col-md-8">
                    <!-- <h4 class="mb-4">Howdy, Directro</h4> -->
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="bg-white p-4 shadow-sm border-radius">
                                <h5>Pending Listings</h5>
                                <h2 class="mb-0 text-primary"><?php echo $homestats['Pending'] ?></h2>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="bg-white p-4 shadow-sm border-radius">
                                <h5>Rejected Listings</h5>
                                <h2 class="mb-0 text-success"><?php echo $homestats['Rejected'] ?></h2>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="bg-white p-4 shadow-sm border-radius">
                                <h5>Approved Listings</h5>
                                <h2 class="mb-0 text-danger"><?php echo $homestats['Approved'] ?></h2>
                            </div>
                        </div>
                    </div>
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
                                                    <img class="img-fluid" style="height:50px;width:60%;" src="<?php echo $imageone ?>" alt="">
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
                        <div class="col-md-4 mb-4">
                            <div class="bg-white p-4 shadow-sm border-radius">
                                <h5>Pending Listings</h5>
                                <h2 class="mb-0 text-primary"><?php echo $homestats['Pending'] ?></h2>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="bg-white p-4 shadow-sm border-radius">
                                <h5>Rejected Listings</h5>
                                <h2 class="mb-0 text-success"><?php echo $homestats['Rejected'] ?></h2>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="bg-white p-4 shadow-sm border-radius">
                                <h5>Approved Listings</h5>
                                <h2 class="mb-0 text-danger"><?php echo $homestats['Approved'] ?></h2>
                            </div>
                        </div>
                    </div>
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
                                                    <img class="img-fluid" style="height:50px;width:60%;" src="<?php echo $imageone ?>" alt="">
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
                                                <td> <a class="badge mb-0 bg-success" href="<?php echo base_url('PendingListing/'.$row->ListingId) ?>">VIEW DETAILS</a>
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
                        <div class="col-md-4 mb-4">
                            <div class="bg-white p-4 shadow-sm border-radius">
                                <h5>Pending Listings</h5>
                                <h2 class="mb-0 text-primary"><?php echo $homestats['Pending'] ?></h2>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="bg-white p-4 shadow-sm border-radius">
                                <h5>Rejected Listings</h5>
                                <h2 class="mb-0 text-success"><?php echo $homestats['Rejected'] ?></h2>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="bg-white p-4 shadow-sm border-radius">
                                <h5>Approved Listings</h5>
                                <h2 class="mb-0 text-danger"><?php echo $homestats['Approved'] ?></h2>
                            </div>
                        </div>
                    </div>
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
                                                    <img class="img-fluid" style="height:50px;width:60%;" src="<?php echo $imageone ?>" alt="">
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
                                                <td> <a class="badge mb-0 bg-success" href="<?php echo base_url('PendingListing/'.$row->ListingId) ?>">EDIT DETAILS</a>
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