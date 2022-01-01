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
               
            </ul>
        <h5 class="mb-4 mt-5">Listings</h5>
            <ul class="list-unstyled">
                
                <li class="active"><a href="<?php echo base_url('listingcategories') ?>"> <i class="fa fa-chevron-right"
                            aria-hidden="true"></i> Listing Categories</a></li>
                <li class="active"><a href="dashboard.html#"> <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        View Listing</a></li>
                <li class="active"><a href="dashboard.html#"> <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        View Reviews</a></li>
            </ul>
            <h5 class="mb-4 mt-5">System users</h5>
            <ul class="list-unstyled">
                <li><a href="<?php echo base_url('addListing') ?>"> <i class="far fa-edit me-2"></i> Add
                        listing</a></li>
                <li><a href="dashboard-booking.html"> <i class="far fa-calendar-alt me-2"></i>
                        Booking</a></li>
                <li><a href="dashboard-bookmark.html"> <i class="far fa-bookmark me-2"></i>
                        Bookmark</a></li>
                <li><a href="dashboard-my-listings.html"> <i class="fas fa-list-ul me-2"></i> My
                        Listings</a></li>
                <li><a href="dashboard-review.html"> <i class="far fa-star me-2"></i> Review</a>
                </li>
                <li><a href="dashboard-invoice-listing.html"> <i class="fas fa-file-invoice me-2"></i> Invoice
                        listing</a></li>
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
                <li class="active"><a href="dashboard.html#"> <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        View Listing</a></li>
                <li class="active"><a href="dashboard.html#"> <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        View Reviews</a></li>
            </ul>
            <h5 class="mb-4 mt-5">Listings</h5>
            <ul class="list-unstyled">
                <li><a href="<?php echo base_url('addListing') ?>"> <i class="far fa-edit me-2"></i> Add
                        listing</a></li>
                <li><a href="dashboard-booking.html"> <i class="far fa-calendar-alt me-2"></i>
                        Booking</a></li>
                <li><a href="dashboard-bookmark.html"> <i class="far fa-bookmark me-2"></i>
                        Bookmark</a></li>
                <li><a href="dashboard-my-listings.html"> <i class="fas fa-list-ul me-2"></i> My
                        Listings</a></li>
                <li><a href="dashboard-review.html"> <i class="far fa-star me-2"></i> Review</a>
                </li>
                <li><a href="dashboard-invoice-listing.html"> <i class="fas fa-file-invoice me-2"></i> Invoice
                        listing</a></li>
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
                <li class="active"><a href="<?php echo base_url('addListing') ?>"> <i class="fa fa-chevron-right"
                            aria-hidden="true"></i> Add Listing</a></li>
                <li class="active"><a href="dashboard.html#"> <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        View Listing</a></li>
                <li class="active"><a href="dashboard.html#"> <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        View Reviews</a></li>
            </ul>
            <h5 class="mb-4 mt-5">Listings</h5>
            <ul class="list-unstyled">
                <li><a href="<?php echo base_url('addListing') ?>"> <i class="far fa-edit me-2"></i> Add
                        listing</a></li>
                <li><a href="dashboard-booking.html"> <i class="far fa-calendar-alt me-2"></i>
                        Booking</a></li>
                <li><a href="dashboard-bookmark.html"> <i class="far fa-bookmark me-2"></i>
                        Bookmark</a></li>
                <li><a href="dashboard-my-listings.html"> <i class="fas fa-list-ul me-2"></i> My
                        Listings</a></li>
                <li><a href="dashboard-review.html"> <i class="far fa-star me-2"></i> Review</a>
                </li>
                <li><a href="dashboard-invoice-listing.html"> <i class="fas fa-file-invoice me-2"></i> Invoice
                        listing</a></li>
            </ul>
            <a class="btn btn-secondary btn-sm mt-2" href="dashboard.html#">Logout</a>
        </div>
    </div>
</div>

<?php } ?>