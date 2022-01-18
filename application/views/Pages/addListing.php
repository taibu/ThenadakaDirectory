<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Directro - Directory and Listing Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Thenadaka</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/logthena.jpg') ?>" />

    <!-- Google Font -->
    <link rel="stylesheet" href="../../fonts.googleapis.com/css2.css">

    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel="stylesheet" href="assets/css/font-awesome/all.min.css" />
    <link rel="stylesheet" href="assets/css/flaticon/flaticon.css" />
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css" />

    <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
    <link rel="stylesheet" href="assets/css/select2/select2.css" />
    <link rel="stylesheet" href="assets/css/dropzone/dropzone.css" />

    <!-- Template Style -->
    <link rel="stylesheet" href="assets/css/style.css" />

</head>

<body>

    <?php $this->load->view("Templates/headerAdmin") ?>

    <!--=================================
Add Listings -->
    <section class="space-ptb bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <?php $this->load->view("Templates/adminsidebar") ?>
                </div>
                <div class="col-lg-9 col-md-8">
                    <form action="Admin/SubmitListing" enctype="multipart/form-data" method="post">
                        <h4 class="mb-4">Add Listing</h4>
                        <div class="sidebar mb-0">
                            <div class="row">
                                <div class="mt-3 col-sm-12">
                                    <?php require_once(APPPATH . 'views/Templates/error.php'); ?>
                                </div>
                            </div>
                            <div class="widget">
                                <div class="widget-title bg-primary">
                                    <h6 class="text-white mb-0"> <i class="far fa-address-book"></i> General
                                        Information:
                                    </h6>
                                </div>
                                <div class="widget-content">
                                    <div class="row">
                                        <div class="mb-3 col-lg-12">
                                            <label class="form-label">Business name *</label>
                                            <input type="text" class="form-control" name="businessname"
                                                placeholder="Business name" required>
                                        </div>
                                        <div class="mb-3 col-lg-6 select-border">
                                            <label class="form-label">Category *</label>
                                            <select class="form-control basic-select" name="category" required>
                                                <option value="" selected="selected">Select Category</option>
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
                                                placeholder="keywords">
                                        </div>
                                        <!-- <div class="mb-3 col-lg-6">
                                        <label class="form-label">Listing tag</label>
                                        <input type="email" class="form-control" placeholder="Listing tag">
                                    </div> -->
                                        <div class="col-12 mb-0">
                                            <label class="form-label">Description</label>
                                            <textarea class="form-control" name="description" rows="4"
                                                placeholder="Description"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="widget">
                                <div class="widget-title bg-primary">
                                    <h6 class="text-white mb-0"> <i class="fas fa-map-marked-alt"></i> Location: </h6>
                                </div>
                                <div class="widget-content">
                                    <!-- <iframe src="../../www.google.com/maps/embed.htm"
                                    style="border:0; width: 100%; height: 250px;"></iframe> -->
                                    <div class="row mt-4">
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Business Maps Address </label>
                                            <input type="text" name="address" class="form-control" placeholder=""
                                                id="autocomplete">
                                        </div>
                                        <!-- <div class="mb-3 col-md-6">
                                        <label class="form-label">Friendly Address </label>
                                        <input type="text" class="form-control" placeholder="Envato market">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Longitude </label>
                                        <input type="text" class="form-control" placeholder="-102.243340">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Latitude </label>
                                        <input type="text" class="form-control" placeholder="21.852270">
                                    </div>
                                    <div class="col-md-12 select-border">
                                        <label class="form-label">Regions</label>
                                        <select class="form-control basic-select">
                                            <option value="value 01" selected="selected">Los angeles</option>
                                            <option value="value 02">Miami</option>
                                        </select>
                                    </div> -->
                                    </div>
                                </div>
                            </div>

                            <div class="widget">
                                <div class="widget-title bg-primary">
                                    <h6 class="text-white mb-0"> <i class="far fa-clock"></i> Opening Hours: </h6>
                                </div>
                                <div class="widget-content">
                                    <div class="row mt-4">
                                        <div class="col-12">
                                            <h6 class="font-md">Monday: </h6>
                                        </div>
                                        <div class="mb-3 col-md-6 select-border">
                                            <select class="form-control basic-select" name="monopenning">
                                                <option value="" selected="selected">Opening Time</option>
                                                <option value="02:00">Closed</option>
                                                <option value="03:00">01:00</option>
                                                <option value="03:00">02:00</option>
                                                <option value="04:00">04:00</option>
                                                <option value="05:00">05:00</option>
                                                <option value="06:00">06:00</option>
                                                <option value="07:00">07:00</option>
                                                <option value="08:00">08:00</option>
                                                <option value="03:00">09:00</option>
                                                <option value="03:00">10:00</option>
                                                <option value="04:00">11:00</option>
                                                <option value="05:00">12:00</option>
                                                <option value="03:00">13:00</option>
                                                <option value="03:00">14:00</option>
                                                <option value="04:00">15:00</option>
                                                <option value="05:00">16:00</option>
                                                <option value="06:00">17:00</option>
                                                <option value="07:00">19:00</option>
                                                <option value="08:00">20:00</option>
                                                <option value="03:00">21:00</option>
                                                <option value="03:00">22:00</option>
                                                <option value="04:00">23:00</option>
                                                <option value="05:00">24:00</option>

                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-6 select-border">
                                            <select class="form-control basic-select" name="monclosing">
                                                <option value="value 01" selected="selected">Closing Time</option>
                                                <option value="02:00">Closed</option>
                                                <option value="03:00">01:00</option>
                                                <option value="03:00">02:00</option>
                                                <option value="04:00">04:00</option>
                                                <option value="05:00">05:00</option>
                                                <option value="06:00">06:00</option>
                                                <option value="07:00">07:00</option>
                                                <option value="08:00">08:00</option>
                                                <option value="03:00">09:00</option>
                                                <option value="03:00">10:00</option>
                                                <option value="04:00">11:00</option>
                                                <option value="05:00">12:00</option>
                                                <option value="03:00">13:00</option>
                                                <option value="03:00">14:00</option>
                                                <option value="04:00">15:00</option>
                                                <option value="05:00">16:00</option>
                                                <option value="06:00">17:00</option>
                                                <option value="07:00">19:00</option>
                                                <option value="08:00">20:00</option>
                                                <option value="03:00">21:00</option>
                                                <option value="03:00">22:00</option>
                                                <option value="04:00">23:00</option>
                                                <option value="05:00">24:00</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-12">
                                            <h6 class="font-md">Tuesday: </h6>
                                        </div>
                                        <div class="mb-3 col-md-6 select-border">
                                            <select class="form-control basic-select" name="tuesopening">
                                                <option value="value 01" selected="selected">Opening Time</option>
                                                <option value="02:00">Closed</option>
                                                <option value="03:00">01:00</option>
                                                <option value="03:00">02:00</option>
                                                <option value="04:00">04:00</option>
                                                <option value="05:00">05:00</option>
                                                <option value="06:00">06:00</option>
                                                <option value="07:00">07:00</option>
                                                <option value="08:00">08:00</option>
                                                <option value="03:00">09:00</option>
                                                <option value="03:00">10:00</option>
                                                <option value="04:00">11:00</option>
                                                <option value="05:00">12:00</option>
                                                <option value="03:00">13:00</option>
                                                <option value="03:00">14:00</option>
                                                <option value="04:00">15:00</option>
                                                <option value="05:00">16:00</option>
                                                <option value="06:00">17:00</option>
                                                <option value="07:00">19:00</option>
                                                <option value="08:00">20:00</option>
                                                <option value="03:00">21:00</option>
                                                <option value="03:00">22:00</option>
                                                <option value="04:00">23:00</option>
                                                <option value="05:00">24:00</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-6 select-border">
                                            <select class="form-control basic-select" name="tuesclosing">
                                                <option value="value 01" selected="selected">Closing Time</option>
                                                <option value="02:00">Closed</option>
                                                <option value="03:00">01:00</option>
                                                <option value="03:00">02:00</option>
                                                <option value="04:00">04:00</option>
                                                <option value="05:00">05:00</option>
                                                <option value="06:00">06:00</option>
                                                <option value="07:00">07:00</option>
                                                <option value="08:00">08:00</option>
                                                <option value="03:00">09:00</option>
                                                <option value="03:00">10:00</option>
                                                <option value="04:00">11:00</option>
                                                <option value="05:00">12:00</option>
                                                <option value="03:00">13:00</option>
                                                <option value="03:00">14:00</option>
                                                <option value="04:00">15:00</option>
                                                <option value="05:00">16:00</option>
                                                <option value="06:00">17:00</option>
                                                <option value="07:00">19:00</option>
                                                <option value="08:00">20:00</option>
                                                <option value="03:00">21:00</option>
                                                <option value="03:00">22:00</option>
                                                <option value="04:00">23:00</option>
                                                <option value="05:00">24:00</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-12">
                                            <h6 class="font-md">Wednesday: </h6>
                                        </div>
                                        <div class="mb-3 col-md-6 select-border">
                                            <select class="form-control basic-select" name="wedopening">
                                                <option value="value 01" selected="selected">Opening Time</option>
                                                <option value="02:00">Closed</option>
                                                <option value="03:00">01:00</option>
                                                <option value="03:00">02:00</option>
                                                <option value="04:00">04:00</option>
                                                <option value="05:00">05:00</option>
                                                <option value="06:00">06:00</option>
                                                <option value="07:00">07:00</option>
                                                <option value="08:00">08:00</option>
                                                <option value="03:00">09:00</option>
                                                <option value="03:00">10:00</option>
                                                <option value="04:00">11:00</option>
                                                <option value="05:00">12:00</option>
                                                <option value="03:00">13:00</option>
                                                <option value="03:00">14:00</option>
                                                <option value="04:00">15:00</option>
                                                <option value="05:00">16:00</option>
                                                <option value="06:00">17:00</option>
                                                <option value="07:00">19:00</option>
                                                <option value="08:00">20:00</option>
                                                <option value="03:00">21:00</option>
                                                <option value="03:00">22:00</option>
                                                <option value="04:00">23:00</option>
                                                <option value="05:00">24:00</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-6 select-border">
                                            <select class="form-control basic-select" name="wedclosing">
                                                <option value="value 01" selected="selected">Closing Time</option>
                                                <option value="02:00">Closed</option>
                                                <option value="03:00">01:00</option>
                                                <option value="03:00">02:00</option>
                                                <option value="04:00">04:00</option>
                                                <option value="05:00">05:00</option>
                                                <option value="06:00">06:00</option>
                                                <option value="07:00">07:00</option>
                                                <option value="08:00">08:00</option>
                                                <option value="03:00">09:00</option>
                                                <option value="03:00">10:00</option>
                                                <option value="04:00">11:00</option>
                                                <option value="05:00">12:00</option>
                                                <option value="03:00">13:00</option>
                                                <option value="03:00">14:00</option>
                                                <option value="04:00">15:00</option>
                                                <option value="05:00">16:00</option>
                                                <option value="06:00">17:00</option>
                                                <option value="07:00">19:00</option>
                                                <option value="08:00">20:00</option>
                                                <option value="03:00">21:00</option>
                                                <option value="03:00">22:00</option>
                                                <option value="04:00">23:00</option>
                                                <option value="05:00">24:00</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-12">
                                            <h6 class="font-md">Thursday: </h6>
                                        </div>
                                        <div class="mb-3 col-md-6 select-border">
                                            <select class="form-control basic-select" name="thursdayopening">
                                                <option value="value 01" selected="selected">Opening Time</option>
                                                <option value="02:00">Closed</option>
                                                <option value="03:00">01:00</option>
                                                <option value="03:00">02:00</option>
                                                <option value="04:00">04:00</option>
                                                <option value="05:00">05:00</option>
                                                <option value="06:00">06:00</option>
                                                <option value="07:00">07:00</option>
                                                <option value="08:00">08:00</option>
                                                <option value="03:00">09:00</option>
                                                <option value="03:00">10:00</option>
                                                <option value="04:00">11:00</option>
                                                <option value="05:00">12:00</option>
                                                <option value="03:00">13:00</option>
                                                <option value="03:00">14:00</option>
                                                <option value="04:00">15:00</option>
                                                <option value="05:00">16:00</option>
                                                <option value="06:00">17:00</option>
                                                <option value="07:00">19:00</option>
                                                <option value="08:00">20:00</option>
                                                <option value="03:00">21:00</option>
                                                <option value="03:00">22:00</option>
                                                <option value="04:00">23:00</option>
                                                <option value="05:00">24:00</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-6 select-border">
                                            <select class="form-control basic-select" name="thursdayclosing">
                                                <option value="value 01" selected="selected">Closing Time</option>
                                                <option value="02:00">Closed</option>
                                                <option value="03:00">01:00</option>
                                                <option value="03:00">02:00</option>
                                                <option value="04:00">04:00</option>
                                                <option value="05:00">05:00</option>
                                                <option value="06:00">06:00</option>
                                                <option value="07:00">07:00</option>
                                                <option value="08:00">08:00</option>
                                                <option value="03:00">09:00</option>
                                                <option value="03:00">10:00</option>
                                                <option value="04:00">11:00</option>
                                                <option value="05:00">12:00</option>
                                                <option value="03:00">13:00</option>
                                                <option value="03:00">14:00</option>
                                                <option value="04:00">15:00</option>
                                                <option value="05:00">16:00</option>
                                                <option value="06:00">17:00</option>
                                                <option value="07:00">19:00</option>
                                                <option value="08:00">20:00</option>
                                                <option value="03:00">21:00</option>
                                                <option value="03:00">22:00</option>
                                                <option value="04:00">23:00</option>
                                                <option value="05:00">24:00</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-12">
                                            <h6 class="font-md">Friday: </h6>
                                        </div>
                                        <div class="mb-3 col-md-6 select-border">
                                            <select class="form-control basic-select" name="fridayopenning">
                                                <option value="value 01" selected="selected">Opening Time</option>
                                                <option value="02:00">Closed</option>
                                                <option value="03:00">01:00</option>
                                                <option value="03:00">02:00</option>
                                                <option value="04:00">04:00</option>
                                                <option value="05:00">05:00</option>
                                                <option value="06:00">06:00</option>
                                                <option value="07:00">07:00</option>
                                                <option value="08:00">08:00</option>
                                                <option value="03:00">09:00</option>
                                                <option value="03:00">10:00</option>
                                                <option value="04:00">11:00</option>
                                                <option value="05:00">12:00</option>
                                                <option value="03:00">13:00</option>
                                                <option value="03:00">14:00</option>
                                                <option value="04:00">15:00</option>
                                                <option value="05:00">16:00</option>
                                                <option value="06:00">17:00</option>
                                                <option value="07:00">19:00</option>
                                                <option value="08:00">20:00</option>
                                                <option value="03:00">21:00</option>
                                                <option value="03:00">22:00</option>
                                                <option value="04:00">23:00</option>
                                                <option value="05:00">24:00</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-6 select-border">
                                            <select class="form-control basic-select" name="fridayclosing">
                                                <option value="value 01" selected="selected">Closing Time</option>
                                                <option value="02:00">Closed</option>
                                                <option value="03:00">01:00</option>
                                                <option value="03:00">02:00</option>
                                                <option value="04:00">04:00</option>
                                                <option value="05:00">05:00</option>
                                                <option value="06:00">06:00</option>
                                                <option value="07:00">07:00</option>
                                                <option value="08:00">08:00</option>
                                                <option value="03:00">09:00</option>
                                                <option value="03:00">10:00</option>
                                                <option value="04:00">11:00</option>
                                                <option value="05:00">12:00</option>
                                                <option value="03:00">13:00</option>
                                                <option value="03:00">14:00</option>
                                                <option value="04:00">15:00</option>
                                                <option value="05:00">16:00</option>
                                                <option value="06:00">17:00</option>
                                                <option value="07:00">19:00</option>
                                                <option value="08:00">20:00</option>
                                                <option value="03:00">21:00</option>
                                                <option value="03:00">22:00</option>
                                                <option value="04:00">23:00</option>
                                                <option value="05:00">24:00</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-12">
                                            <h6 class="font-md">Saturday: </h6>
                                        </div>
                                        <div class="mb-3 col-md-6 select-border">
                                            <select class="form-control basic-select" name="saturdayopening">
                                                <option value="value 01" selected="selected">Opening Time</option>
                                                <option value="02:00">Closed</option>
                                                <option value="03:00">01:00</option>
                                                <option value="03:00">02:00</option>
                                                <option value="04:00">04:00</option>
                                                <option value="05:00">05:00</option>
                                                <option value="06:00">06:00</option>
                                                <option value="07:00">07:00</option>
                                                <option value="08:00">08:00</option>
                                                <option value="03:00">09:00</option>
                                                <option value="03:00">10:00</option>
                                                <option value="04:00">11:00</option>
                                                <option value="05:00">12:00</option>
                                                <option value="03:00">13:00</option>
                                                <option value="03:00">14:00</option>
                                                <option value="04:00">15:00</option>
                                                <option value="05:00">16:00</option>
                                                <option value="06:00">17:00</option>
                                                <option value="07:00">19:00</option>
                                                <option value="08:00">20:00</option>
                                                <option value="03:00">21:00</option>
                                                <option value="03:00">22:00</option>
                                                <option value="04:00">23:00</option>
                                                <option value="05:00">24:00</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-6 select-border">
                                            <select class="form-control basic-select" name="sartudayclosing">
                                                <option value="value 01" selected="selected">Closing Time</option>
                                                <option value="02:00">Closed</option>
                                                <option value="03:00">01:00</option>
                                                <option value="03:00">02:00</option>
                                                <option value="04:00">04:00</option>
                                                <option value="05:00">05:00</option>
                                                <option value="06:00">06:00</option>
                                                <option value="07:00">07:00</option>
                                                <option value="08:00">08:00</option>
                                                <option value="03:00">09:00</option>
                                                <option value="03:00">10:00</option>
                                                <option value="04:00">11:00</option>
                                                <option value="05:00">12:00</option>
                                                <option value="03:00">13:00</option>
                                                <option value="03:00">14:00</option>
                                                <option value="04:00">15:00</option>
                                                <option value="05:00">16:00</option>
                                                <option value="06:00">17:00</option>
                                                <option value="07:00">19:00</option>
                                                <option value="08:00">20:00</option>
                                                <option value="03:00">21:00</option>
                                                <option value="03:00">22:00</option>
                                                <option value="04:00">23:00</option>
                                                <option value="05:00">24:00</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-12">
                                            <h6 class="font-md">Sunday: </h6>
                                        </div>
                                        <div class="mb-3 col-md-6 select-border">
                                            <select class="form-control basic-select" name="sundayopenning">
                                                <option value="value 01" selected="selected">Opening Time</option>
                                                <option value="value 02">Closed</option>
                                                <option value="03">01</option>
                                                <option value="03">02</option>
                                                <option value="04">04</option>
                                                <option value="05">05</option>
                                                <option value="06">06</option>
                                                <option value="07">07</option>
                                                <option value="08">08</option>
                                                <option value="03">09</option>
                                                <option value="03">10</option>
                                                <option value="04">11</option>
                                                <option value="05">12</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-6 select-border">
                                            <select class="form-control basic-select" name="sundayclosing">
                                                <option value="value 01" selected="selected">Closing Time</option>
                                                <option value="02:00">Closed</option>
                                                <option value="03:00">01:00</option>
                                                <option value="03:00">02:00</option>
                                                <option value="04:00">04:00</option>
                                                <option value="05:00">05:00</option>
                                                <option value="06:00">06:00</option>
                                                <option value="07:00">07:00</option>
                                                <option value="08:00">08:00</option>
                                                <option value="03:00">09:00</option>
                                                <option value="03:00">10:00</option>
                                                <option value="04:00">11:00</option>
                                                <option value="05:00">12:00</option>
                                                <option value="03:00">13:00</option>
                                                <option value="03:00">14:00</option>
                                                <option value="04:00">15:00</option>
                                                <option value="05:00">16:00</option>
                                                <option value="06:00">17:00</option>
                                                <option value="07:00">19:00</option>
                                                <option value="08:00">20:00</option>
                                                <option value="03:00">21:00</option>
                                                <option value="03:00">22:00</option>
                                                <option value="04:00">23:00</option>
                                                <option value="05:00">24:00</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget">
                                <div class="widget-title bg-primary">
                                    <h6 class="text-white mb-0"> <i class="fas fa-th"></i> Gallery: </h6>
                                </div>
                                <div class="widget-content">
                                    <!-- <form action="http://themes.potenzaglobalsolutions.com/file-upload" class="dropzone"
                                    id="my-awesome-dropzone"></form> -->
                                    <div class="row">
                                        <div class="control-group form-group col-lg-6 col-md-6 product_mainimage">
                                            <div class="controls">
                                                <h6>Main Image <span class="text-danger">*</span></h6>
                                                <img alt="osahan logo" id="output" style="width:100%;"
                                                    src="<?php echo base_url('assets/images/placeholder2.jpg')?>">
                                                <input type="file" name="imageone" required="" class="form-control"
                                                    onchange="loadFile(event)">
                                                <script>
                                                var loadFile = function(event) {
                                                    var image = document.getElementById('output');
                                                    image.src = URL.createObjectURL(event.target.files[0]);
                                                };
                                                </script>
                                            </div>
                                        </div>
                                        <div class="control-group form-group col-lg-6 col-md-6">
                                            <h6>Additional Images <span class="text-danger">*</span></h6>
                                            <div class="row product_images">
                                                <div class="col-md-6 ">
                                                    <img alt="osahan logo" id="output2" style="width:100%;"
                                                        src="<?php echo base_url('assets/images/placeholder2.jpg')?>">
                                                    <input type="file" name="image2" class="form-control"
                                                        onchange="loadFile2(event)">
                                                </div>
                                                <script>
                                                var loadFile2 = function(event) {
                                                    var image = document.getElementById('output2');
                                                    image.src = URL.createObjectURL(event.target.files[0]);
                                                };
                                                </script>
                                                <div class="col-md-6">
                                                    <img alt="osahan logo" id="output3" style="width:100%;"
                                                        src="<?php echo base_url('assets/images/placeholder2.jpg')?>">
                                                    <input type="file" name="image3" class="form-control"
                                                        onchange="loadFile3(event)">
                                                </div>
                                                <script>
                                                var loadFile3 = function(event) {
                                                    var image = document.getElementById('output3');
                                                    image.src = URL.createObjectURL(event.target.files[0]);
                                                };
                                                </script>
                                                <div class="col-md-6 ">
                                                    <img alt="osahan logo" id="output4" style="width:100%;"
                                                        src="<?php echo base_url('assets/images/placeholder2.jpg')?>">
                                                    <input type="file" name="image4" class="form-control"
                                                        onchange="loadFile4(event)">
                                                </div>
                                                <script>
                                                var loadFile4 = function(event) {
                                                    var image = document.getElementById('output4');
                                                    image.src = URL.createObjectURL(event.target.files[0]);
                                                };
                                                </script>
                                                <div class="col-md-6 ">
                                                    <img alt="osahan logo" id="output5" style="width:100%;"
                                                        src="<?php echo base_url('assets/images/placeholder2.jpg')?>">
                                                    <input type="file" name="image5" class="form-control"
                                                        onchange="loadFile5(event)">
                                                </div>
                                                <script>
                                                var loadFile5 = function(event) {
                                                    var image = document.getElementById('output5');
                                                    image.src = URL.createObjectURL(event.target.files[0]);
                                                };
                                                </script>


                                            </div>
                                            <!-- <div class="controls">
                                    <label>Additional images <span class="text-danger">*</span></label>
                                    <input type="file" name="images[]" required="" class="form-control" multiple>
                                 </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget mb-0">
                                <div class="widget-title bg-primary">
                                    <h6 class="text-white mb-0"> <i class="fas fa-share-alt"></i> Social Networks: </h6>
                                </div>
                                <div class="widget-content">
                                    <div class="row align-items-end">
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Phone </label>
                                            <input type="text" name="phone" class="form-control" placeholder="Phone">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Website </label>
                                            <input type="text" name="website" class="form-control"
                                                placeholder="Website">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Facebook </label>
                                            <input type="text" name="facebook" class="form-control"
                                                placeholder="Facebook">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Twitter </label>
                                            <input type="text" name="twitter" class="form-control"
                                                placeholder="Twitter">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Pinterest </label>
                                            <input type="text" name="pintrest" class="form-control"
                                                placeholder="Pinterest ">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Instagram </label>
                                            <input type="text" name="instagram" class="form-control"
                                                placeholder="Instagram">
                                        </div>
                                        <div class="mb-3 col-12 form-group">
                                            <button class="btn btn-secondary" type="submit">Save &
                                                Preview</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
Add Listings -->

    <?php $this->load->view("Templates/footerAdmin") ?>

</body>


<script
    src="https://maps.google.com/maps/api/js?key=AIzaSyBUj0JGBQxd8ANDzpXJvKbZCVYJ8LiDkF8&libraries=places&callback=initAutocomplete"
    type="text/javascript"></script>
<script>
$(document).ready(function() {
    $("#lat_area").addClass("d-none");
    $("#long_area").addClass("d-none");
});
</script>
<script>
google.maps.event.addDomListener(window, 'load', initialize);

function initialize() {
    var input = document.getElementById('autocomplete');
    var autocomplete = new google.maps.places.Autocomplete(input);
    autocomplete.addListener('place_changed', function() {
        var place = autocomplete.getPlace();
        $('#latitude').val(place.geometry['location'].lat());
        $('#longitude').val(place.geometry['location'].lng());
        // --------- show lat and long ---------------
        $("#lat_area").removeClass("d-none");
        $("#long_area").removeClass("d-none");
    });
}
</script>

</html>