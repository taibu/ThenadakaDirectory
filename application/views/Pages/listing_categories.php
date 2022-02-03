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

    <?php if($displaytype=="all"){ ?>
    <section class="space-ptb bg-light">
        <div class="containe" style="width:98%;margin:auto;">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <?php $this->load->view("Templates/adminsidebar") ?>
                </div>
                <div class="col-lg-9 col-md-8">
                    <!-- <h4 class="mb-4">Howdy, Directro</h4> -->

                    <div class="row">
                        <div class="col-12">
                            <div class="bg-white p-4 shadow-sm border-radius">
                                <h5 class="mb-4"> Listings Categories <a
                                        href="<?php echo base_url('addlistingcategories') ?>"
                                        class="btn btn-info btn-sm pull-right"
                                        style="color:white;border-radius:0px;">ADD CATEGORY</a></h5>
                                <div class=" table-responsive ">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr style="background-color:darkcyan">
                                                <th> ID </th>
                                                <th> Category</th>
                                                <th> Created By</th>
                                                <th> Created On </th>
                                                <th> Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if($allcategories->num_rows()>0){
                                            $i=1;
                                            foreach($allcategories->result() as $row){
                                           
                                            ?>
                                            <tr>
                                                <td>
                                                    <div> <?php echo $i ?></div>
                                                </td>
                                                <td><?php echo $row->Category ?></td>
                                                <td><?php echo $row->name ?></td>
                                                <td><?php echo $row->CreatedOn ?></td>
                                                <td> <a href="<?php echo base_url('Editlistingcategories/'.$row->CategoryId) ?>" class="btn btn-success btn-sm"
                                                        style="color:white;border-radius:0px;">Edit Category</a> </td>
                                            </tr>
                                            <?php } } ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>

    <?php if($displaytype=="form"){ ?>
    <section class="space-ptb bg-light">
        <div class="containe" style="width:98%;margin:auto;">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <?php $this->load->view("Templates/adminsidebar") ?>
                </div>
                <div class="col-lg-9 col-md-8">
                    
                    <div class="sidebar mb-0">
                        <div class="widget">
                            <div class="widget-title bg-primary">
                                <h6 class="text-white mb-0"> <i class="far fa-address-book"></i> Add New Category
                                </h6>
                            </div>
                            <div class="widget-content">
                                <form class="row"  action="<?php echo base_url('Admin/SubmitCategory') ?>" method="post">
                                    <div class="mb-3 col-lg-6">
                                    <?php
                                     $category="";
                                      if(isset($allcategories)){ 
                                        
                                        if($allcategories->num_rows()>0){
                                            $i=1;
                                            foreach($allcategories->result() as $row){
                                                $category=$row->Category; }?>
                                            <input type="hidden" class="form-control" value="<?php echo $row->CategoryId ?> "  name="catId">
                                           <?php    }} ?>
                                        <input type="text" class="form-control" value="<?php echo $category ?> " placeholder="Category name" name="name">
                                    </div>
                                    <div class="mb-3 col-lg-6">
                           
                                        <button type="submit" class="btn btn-secondary" >Save Category</button>
                                    </div>
                                    <div class="mt-3 col-sm-12">
                                      <?php require_once(APPPATH . 'views/Templates/error.php'); ?>
                                    </div>
                                </form>
                            </div>
                        </div>

                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>
    <!--=================================
footer-->
    <?php $this->load->view("Templates/footer") ?>
    <!--=================================
footer-->



</body>

</html>