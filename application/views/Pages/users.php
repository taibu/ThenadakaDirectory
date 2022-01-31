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

    <?php if($type=="view"){ ?>
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
                                            <tr>
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
                                                <td> <a href="<?php echo base_url('Editlistingcategories/'.$row->CategoryId) ?>"
                                                        class="btn btn-success btn-sm"
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

    <?php if($type=="add"){ ?>
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
                                <form class="row">
                                    <div class="mb-3 col-lg-6">
                                        <label class="form-label">First name</label>
                                        <input type="email" class="form-control" placeholder="First name">
                                    </div>
                                    <div class="mb-3 col-lg-6 select-border">
                                        <label class="form-label">Category*</label>
                                        <select class="form-control basic-select select2-hidden-accessible"
                                            data-select2-id="1" tabindex="-1" aria-hidden="true">
                                            <option value="value 01" selected="selected" data-select2-id="3">Select
                                                Category</option>
                                            <option value="value 02">Restaurant</option>
                                            <option value="value 02">Night life </option>
                                            <option value="value 03">Museum</option>
                                            <option value="value 04">Hotels</option>
                                            <option value="value 05">Cafe</option>
                                            <option value="value 06">Club &amp; Bars</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-lg-6">
                                        <label class="form-label">keywords</label>
                                        <input type="email" class="form-control" placeholder="keywords">
                                    </div>
                                    <div class="mb-3 col-lg-6">
                                        <label class="form-label">Listing tag</label>
                                        <input type="email" class="form-control" placeholder="Listing tag">
                                    </div>
                                    <div class="col-12 mb-0">
                                        <label class="form-label">Description</label>
                                        <textarea class="form-control" rows="4" placeholder="Description"></textarea>
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