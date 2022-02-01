<!DOCTYPE html>
<html lang="en">
<?php
  $getdata= $this->session->userdata('loggedinUser');
   
?>
<style>
    table.dataTable thead .sorting:after,
table.dataTable thead .sorting:before,
table.dataTable thead .sorting_asc:after,
table.dataTable thead .sorting_asc:before,
table.dataTable thead .sorting_asc_disabled:after,
table.dataTable thead .sorting_asc_disabled:before,
table.dataTable thead .sorting_desc:after,
table.dataTable thead .sorting_desc:before,
table.dataTable thead .sorting_desc_disabled:after,
table.dataTable thead .sorting_desc_disabled:before {
  bottom: .5em;
}
</style>
<script>
    $(document).ready(function () {
$('#dtBasicExample').DataTable();
$('.dataTables_length').addClass('bs-select');
});
</script>
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
                                <h5 class="mb-4"> Listings Categories </h5>
                                <div class=" table-responsive ">
                                    <table  id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th class="th-sm"> ID </th>
                                                <th class="th-sm"> User Names</th>
                                                <th class="th-sm"> Email</th>
                                                <th class="th-sm"> Phone</th>
                                                <th class="th-sm"> Created On </th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            if($users->num_rows()>0){
                                            $i=1;
                                            foreach($users->result() as $row){
                                           
                                            ?>
                                            <tr>
                                                <td>
                                                    <div> <?php echo $i ?></div>
                                                </td>
                                                <td><?php echo $row->name ?></td>
                                                <td><?php echo $row->email ?></td>
                                                <td><?php echo $row->phone ?></td>
                                                <td> <?php echo $row->RecordDate ?> </td>
                                            </tr>
                                            <?php $i++; } } ?>
                                            

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
                                <h6 class="text-white mb-0"> <i class="far fa-address-book"></i> Add New Approver
                                </h6>
                            </div>
                            <div class="mb-3 col-sm-12">
                                <?php require_once(APPPATH . 'views/Templates/error.php'); ?>
                            </div>
                            <div class="widget-content">
                                <form class="row" action="SubmitRegisterform2" method="post">
                                    <div class="mb-3 col-lg-6">
                                        <input type="hidden" name="user_role" value="02">
                                        <label class="form-label">Last name</label>
                                        <input name="lastname" type="text" class="form-control" placeholder="Last name">
                                    </div>
                                    <div class="mb-3 col-lg-6">
                                        <label class="form-label">First name</label>
                                        <input name="firstname" type="text" class="form-control" placeholder="First name">
                                    </div>
                                    <div class="mb-3 col-lg-6">
                                        <label class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="mb-3 col-lg-6">
                                        <label class="form-label">Phone</label>
                                        <input type="phone" name="phone" class="form-control" placeholder="Phone">
                                    </div>
                                    <div class="col-12 mb-0">
                                       <button type="submit" class="btn btn-secondary" >Save User Details</button>
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