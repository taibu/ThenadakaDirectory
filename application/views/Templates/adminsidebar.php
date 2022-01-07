<?php
  $getdata= $this->session->userdata('loggedinUser');  
?>

<!--SYSTEM ADMIN MENU-->
<?php if($getdata['RoleCode']=="01"){ ?>
<div class="sidebar">
    <div class="widget">
        <div class="widget-title bg-primary">
            <h6 class="text-white mb-0"> <i class="fa fa-home"></i> USER MENU </h6>
        </div>
        <div class="widget-content dashboard-nav">
        <ul class="list-unstyled">
                <li class="active"><a href="<?php echo base_url('AdminHome') ?>"> <i class="fa fa-chevron-right"
                            aria-hidden="true"></i> Home</a></li>
                            <li class="active"><a href="<?php echo base_url('AdminHome') ?>"> <i class="fa fa-chevron-right"
                            aria-hidden="true"></i> System Users</a></li>
                            <li class="active"><a href="<?php echo base_url('listingcategories') ?>"> <i class="fa fa-chevron-right"
                            aria-hidden="true"></i> Listing Categories</a></li>
                            <li class="active"><a href="<?php echo base_url('AdminHome') ?>"> <i class="fa fa-chevron-right"
                            aria-hidden="true"></i> Pending Listing</a></li>
                            <li class="active"><a href="<?php echo base_url('AdminHome') ?>"> <i class="fa fa-chevron-right"
                            aria-hidden="true"></i> Approved listing</a></li>
                            <li class="active"><a href="<?php echo base_url('AdminHome') ?>"> <i class="fa fa-chevron-right"
                            aria-hidden="true"></i> Rejected listing</a></li>

               
            </ul>
        
            <a class="btn btn-secondary btn-sm mt-2" href="dashboard.html#">Logout</a>
        </div>
    </div>
</div>

<?php } ?>



<!--BUSINESS  ADMIN MENU-->
<?php if($getdata['RoleCode']=="03"){ ?>
<div class="sidebar">
    <div class="widget">
        <div class="widget-title bg-primary">
            <h6 class="text-white mb-0"> <i class="fas fa-home"></i> Main </h6>
        </div>
        <div class="widget-content dashboard-nav">
            <ul class="list-unstyled">
                <li class="active"><a href="<?php echo base_url('AdminHome') ?>"> <i class="fa fa-chevron-right"
                            aria-hidden="true"></i> Home</a></li>
                <li class="active"><a href="<?php echo base_url('addListing') ?>"> <i class="fa fa-chevron-right"
                            aria-hidden="true"></i> Add Listing</a></li>
                            <li class="active"><a href="<?php echo base_url('AdminHome') ?>"> <i class="fa fa-chevron-right"
                            aria-hidden="true"></i> Pending Listing</a></li>
                            <li class="active"><a href="<?php echo base_url('AdminHome') ?>"> <i class="fa fa-chevron-right"
                            aria-hidden="true"></i> Approved listing</a></li>
                            <li class="active"><a href="<?php echo base_url('AdminHome') ?>"> <i class="fa fa-chevron-right"
                            aria-hidden="true"></i> Rejected listing</a></li>
            </ul>
            
            <a class="btn btn-secondary btn-sm mt-2" href="dashboard.html#">Logout</a>
        </div>
    </div>
</div>

<?php } ?>


<!--APPROVER MENU-->
<?php if($getdata['RoleCode']=="02"){ ?>
<div class="sidebar">
    <div class="widget">
        <div class="widget-title bg-primary">
            <h6 class="text-white mb-0"> <i class="fas fa-home"></i> Main </h6>
        </div>
        <div class="widget-content dashboard-nav">
            <ul class="list-unstyled">
            <li class="active"><a href="<?php echo base_url('AdminHome') ?>"> <i class="fa fa-chevron-right"
                            aria-hidden="true"></i> Home</a></li>
                            <li class="active"><a href="<?php echo base_url('AdminHome') ?>"> <i class="fa fa-chevron-right"
                            aria-hidden="true"></i> System Users</a></li>
                            <li class="active"><a href="<?php echo base_url('listingcategories') ?>"> <i class="fa fa-chevron-right"
                            aria-hidden="true"></i> Listing Categories</a></li>
                            <li class="active"><a href="<?php echo base_url('AdminHome') ?>"> <i class="fa fa-chevron-right"
                            aria-hidden="true"></i> Pending Listing</a></li>
                            <li class="active"><a href="<?php echo base_url('AdminHome') ?>"> <i class="fa fa-chevron-right"
                            aria-hidden="true"></i> Approved listing</a></li>
                            <li class="active"><a href="<?php echo base_url('AdminHome') ?>"> <i class="fa fa-chevron-right"
                            aria-hidden="true"></i> Rejected listing</a></li>
            </ul>
            
            <a class="btn btn-secondary btn-sm mt-2" href="dashboard.html#">Logout</a>
        </div>
    </div>
</div>

<?php } ?>