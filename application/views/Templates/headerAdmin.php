<!--=================================
header -->
<?php
  
  if($this->session->userdata('loggedinUser')){
    $getdata= $this->session->userdata('loggedinUser');
}else{
    redirect( base_url(), 'refresh');
}
?>
<header class="header">
    <nav class="navbar navbar-static-top navbar-expand-lg header-sticky">
        <div class="container-fluid">
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target=".navbar-collapse"><i
                    class="fas fa-align-left"></i></button>
            <a class="navbar-brand" href="<?php echo base_url('AdminHome') ?>">
                <img class="img-fluid" src="assets/images/logo.svg" alt="logo">
            </a>
          
            <div class="call d-block d-md-flex align-items-center">
               
                <div class="add-listing d-none d-sm-block">
                    <a class="btn btn-primary btn-md" href="<?php echo base_url('addListing') ?>"> <i
                            class="fa fa-plus-circle"></i>Add listing </a>
                </div>
            </div>
        </div>
    </nav>
</header>
<!--=================================
 header -->


<!--=================================
Page title -->
<section class="page-title page-title-bottom bg-holder bg-overlay-black-50"
    style="background: url(<?php echo base_url('assets/images/bg/01.jpg') ?>);background-attachment:fixed;">
    <div class="container">
        <div class="row align-items-center position-relative">
            <div class="col-lg-6">
                <div class="d-flex align-items-center">
                    <img class="img-fluid rounded-circle avatar avatar-xll" src="<?php echo base_url('assets/images/avatar/01.png') ?>" alt="">
                    <div class="ms-4">
                        <h3 class="text-white mb-2"> <?php echo $getdata['name']; ?></h3>
                        <div class="d-flex">
                            <span class="d-inline-block text-white"><?php echo $getdata['RoleName']; ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 text-lg-end mt-3 mt-lg-0">
                <a class="btn btn-secondary btn-md" href="<?php echo base_url('Admin/logout') ?>"> <i
                        class="fa fa-plus-circle"></i>Logout </a>
            </div>
        </div>
    </div>
</section>
<!--=================================
Page title -->