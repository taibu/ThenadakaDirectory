<!DOCTYPE html>
<html lang="en">
<?php
  $getdata= $this->session->userdata('loggedinUser');
   
?>

<script>
$(document).ready(function() {
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
                                <h5 class="mb-4"> SYSTEM USERS </h5>
                                <div class="mb-3 col-sm-12">
                                    <?php require_once(APPPATH . 'views/Templates/error.php'); ?>
                                </div>
                                <div class=" table-responsive ">
                                    <table id="dtBasicExample" class="table table-striped table-bordered table-sm"
                                        cellspacing="0" width="100%">
                                        <thead>
                                            <tr style="background-color:darkcyan">
                                                <th class="th-sm"> ID </th>
                                                <th class="th-sm"> Names</th>
                                                <th class="th-sm"> Email</th>
                                                <th class="th-sm"> Phone</th>
                                                <th class="th-sm"> UserRole</th>
                                                <th class="th-sm"> Created On </th>
                                                <th class="th-sm"> Edit</th>
                                                <th class="th-sm"> Change</th>

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
                                                <td><?php echo $row->RoleName ?></td>
                                                <td> <?php echo $row->RecordDate ?> </td>
                                                <td> <a class="badge mb-0 bg-success"
                                                        href="<?php echo base_url('EditSystemUser/'.$row->UserId) ?>">EDIT</a>
                                                </td>
                                                <td>
                                                    <?php if($row->IsActive==1){ ?>
                                                      <a class="badge mb-0 bg-danger" href="<?php echo base_url('DisableUser/'.$row->UserId) ?>">DIABLE</a>
                                                    <?php }else{ ?>
                                                        <a class="badge mb-0 bg-success" href="<?php echo base_url('EnableUser/'.$row->UserId) ?>">Enable</a>
                                                    <?php } ?>
                                                </td>
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
                                <h6 class="text-white mb-0"> <i class="far fa-address-book"></i> Add Article
                                </h6>
                            </div>
                            <div class="mb-3 col-sm-12">
                                <?php require_once(APPPATH . 'views/Templates/error.php'); ?>
                            </div>
                            <div class="widget-content">
                                <form class="row" action="<?php echo base_url('SubmitArticle') ?>" method="post" enctype="multipart/form-data">
                                    <div class="mb-3 col-lg-12">
                                        <input type="hidden" name="user_role" value="02">
                                        <label class="form-label">Article title</label>
                                        <input name="title" type="text" class="form-control" placeholder="Title"
                                            required required>
                                    </div>
                                    
                                    <div class="mb-3 col-lg-12">
                                        <label class="form-label">Article details</label>
                                        <textarea name="article" id="" cols="30" rows="10" class="form-control" required></textarea>
                                    </div>
                                    <div class="mb-3 col-lg-12">
                                        <label class="form-label">Atatch files</label>
                                        <input type="file" name="photos" id="" multiple class="form-control">
                                    </div>
                                    <div class="col-12 mb-0">
                                        <button type="submit" class="btn btn-secondary">Save Article</button>
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

    <?php if($type=="edit"){ ?>
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
                                <h6 class="text-white mb-0"> <i class="far fa-address-book"></i> Edit System User
                                </h6>
                            </div>
                            <div class="mb-3 col-sm-12">
                                <?php require_once(APPPATH . 'views/Templates/error.php'); ?>
                            </div>
                            <div class="widget-content">
                                <form class="row" action="<?php echo base_url('SubmitRegisterformEdit') ?>" method="post">
                                    <div class="mb-3 col-lg-12">
                                        <input type="hidden" name="user_role" value="02">
                                        <label class="form-label">Names</label>
                                        <input name="name" type="text" class="form-control"
                                            value="<?php echo $user['name'] ?>" required>
                                    </div>

                                    <div class="mb-3 col-lg-6">
                                        <label class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control"
                                            value="<?php echo $user['email'] ?>" required>
                                    </div>
                                    <div class="mb-3 col-lg-6">
                                        <label class="form-label">Phone</label>
                                        <input type="phone" name="phone" class="form-control"
                                            value="<?php echo $user['phone'] ?>" required>
                                    </div>
                                    <div class="col-12 mb-0">
                                        <button type="submit" class="btn btn-secondary">Edit User Details</button>
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