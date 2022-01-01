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
                <div class="col-lg-9 col-md-8">
                    <!-- <h4 class="mb-4">Howdy, Directro</h4> -->
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="bg-white p-4 shadow-sm border-radius">
                                <h5>Active Listings</h5>
                                <h2 class="mb-0 text-primary">50</h2>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="bg-white p-4 shadow-sm border-radius">
                                <h5>Review Listings</h5>
                                <h2 class="mb-0 text-success">325</h2>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="bg-white p-4 shadow-sm border-radius">
                                <h5>Messages</h5>
                                <h2 class="mb-0 text-danger">654</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="bg-white p-4 shadow-sm border-radius">
                                <h5 class="mb-4">Recent Listings</h5>
                                <div class=" table-responsive ">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th> ID </th>
                                                <th> Booking Date</th>
                                                <th> Plan</th>
                                                <th> Status </th>
                                                <th> Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div>
                                                        #0001
                                                    </div>
                                                </td>
                                                <td>
                                                    10 Jan 2020
                                                </td>
                                                <td>
                                                    Basic
                                                </td>
                                                <td> <label class="badge mb-0 bg-success">Delivered</label>
                                                </td>
                                                <td>
                                                    $658.00
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div>
                                                        #0002
                                                    </div>
                                                </td>
                                                <td>
                                                    22 Jan 2020
                                                </td>
                                                <td>
                                                    Standard
                                                </td>
                                                <td> <label class="badge mb-0 bg-success">Delivered</label>
                                                </td>
                                                <td>
                                                    $356.00
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div>
                                                        #0003
                                                    </div>
                                                </td>
                                                <td>
                                                    23 Feb 2020
                                                </td>
                                                <td>
                                                    Standard
                                                </td>
                                                <td> <label class="badge mb-0 bg-danger">Pending</label>
                                                </td>
                                                <td>
                                                    $256.00
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div>
                                                        #0004
                                                    </div>
                                                </td>
                                                <td>
                                                    06 Mar 2020
                                                </td>
                                                <td>
                                                    Professional
                                                </td>
                                                <td> <label class="badge mb-0 bg-success">Delivered</label>
                                                </td>
                                                <td>
                                                    $789.00
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div>
                                                        #0005
                                                    </div>
                                                </td>
                                                <td>
                                                    30 Apr 2020
                                                </td>
                                                <td>
                                                    Professional
                                                </td>
                                                <td> <label class="badge mb-0 bg-danger">Pending</label>
                                                </td>
                                                <td>
                                                    $668.00
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div>
                                                        #0006
                                                    </div>
                                                </td>
                                                <td>
                                                    02 May 2020
                                                </td>
                                                <td>
                                                    Basic
                                                </td>
                                                <td> <label class="badge mb-0 bg-success">Delivered</label>
                                                </td>
                                                <td>
                                                    $226.00
                                                </td>
                                            </tr>
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


    <!--=================================
footer-->
    <?php $this->load->view("Templates/footer") ?>
    <!--=================================
footer-->



</body>

</html>