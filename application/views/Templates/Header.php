<!--=================================
header -->
<header class="header">
    <nav class="navbar navbar-static-top navbar-expand-lg header-sticky">
        <div class="container-fluid">
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target=".navbar-collapse"><i
                    class="fas fa-align-left"></i></button>
            <a class="navbar-brand" href="<?php echo base_url() ?>">
                <img class="img-fluid" src="<?php echo base_url('assets/images/logthena.jpg') ?>" alt="logo">
            </a>
            <!-- <div class="navbar-collapse collapse justify-content-start">
                <ul class="nav navbar-nav">

                    <li class="dropdown nav-item">
                        <a href="" class="nav-link" data-bs-toggle="dropdown">Listings Categories<i
                                class="fa fa-chevron-down" aria-hidden="true"></i></a>
                        <ul class="dropdown-menu megamenu dropdown-menu-lg">
                            <li>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <h6 class="mb-3 nav-title">Pages </h6>
                                        <ul class="list-unstyled mt-lg-3">
                                            <li><a href="user-profile.html">User profile <span
                                                        class="badge bg-danger ms-2">Hot</span> </a></li>
                                            <li><a href="about-us.html">About us </a></li>
                                            <li><a href="advertising.html">Advertising</a></li>
                                            <li><a href="booking.html">Booking</a></li>
                                            <li><a href="careers.html">Careers</a></li>
                                            <li><a href="dashboard-add-listing.html">Add listing</a></li>
                                            <li><a href="compare-listing.html">Compare listing</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4">
                                        <h6 class="mb-3 nav-title">Pages</h6>
                                        <ul class="list-unstyled mt-lg-3">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-single.html">Blog detail </a></li>
                                            <li><a href="contact-us.html">Contact us</a></li>
                                            <li><a href="faqs.html">Faqs</a></li>
                                            <li><a href="pricing-plan.html">Pricing plan</a></li>
                                            <li><a href="invoice.html">Invoice</a></li>
                                            <li><a href="search-no-result.html">Search no result</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4">
                                        <h6 class="mb-3 nav-title">Authentication</h6>
                                        <ul class="list-unstyled mt-lg-3">
                                            <li><a href="login.html">login</a></li>
                                            <li><a href="coming-soon.html">Coming soon</a></li>
                                            <li><a href="error-404.html">Error 404</a></li>
                                            <li><a href="privacy-policy.html">Privacy policy</a></li>
                                            <li><a href="terms-and-conditions.html">T&C</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="index.html#" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Listing <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="listing-grid.html">listing Grid</a></li>
                            <li><a class="dropdown-item" href="listing-grid-map.html">listing grid map</a></li>
                            <li><a class="dropdown-item" href="listing-list.html">listing list</a></li>
                            <li><a class="dropdown-item" href="listing-list-map.html">listing list map</a></li>
                            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle"
                                    href="index.html#">listing details <i class="fas fa-chevron-right fa-xs"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="listing-single-01.html">listing Single 01</a>
                                    </li>
                                    <li><a class="dropdown-item" href="listing-single-02.html">listing Single 02</a>
                                    </li>
                                    <li><a class="dropdown-item" href="listing-single-03.html">listing Single 03 </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle"
                                    href="index.html#">Dropdown <i class="fas fa-chevron-right fa-xs"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="index.html#">Submenu</a></li>
                                    <li><a class="dropdown-item" href="index.html#">Submenu</a></li>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle"
                                            href="index.html#">Submenu 01 <i class="fas fa-chevron-right fa-xs"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="index.html#">Subsubmenu 01</a></li>
                                            <li><a class="dropdown-item" href="index.html#">Subsubmenu 01</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle"
                                            href="index.html#">Submenu 02 <i class="fas fa-chevron-right fa-xs"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="index.html#">Subsubmenu 02</a></li>
                                            <li><a class="dropdown-item" href="index.html#">Subsubmenu 02</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item">
                        <a href="index.html#" class="nav-link" data-bs-toggle="dropdown">Elements<i
                                class="fa fa-chevron-down" aria-hidden="true"></i></a>
                        <ul class="dropdown-menu megamenu dropdown-menu-md">
                            <li>
                                <div class="row">
                                    <div class="col-sm-6 col-lg-6">
                                        <h6 class="mb-3 nav-title">Elements</h6>
                                        <ul class="list-unstyled mt-lg-3">
                                            <li><a href="element-feature-box.html">Feature box</a></li>
                                            <li><a href="element-testimonials.html">Testimonials</a></li>
                                            <li><a href="element-accordion.html">Accordion</a></li>
                                            <li><a href="element-tabs.html">Tabs</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6 col-lg-6">
                                        <h6 class="mb-3 nav-title">Elements</h6>
                                        <ul class="list-unstyled mt-lg-3">
                                            <li><a href="element-typography.html">Typography</a></li>
                                            <li><a href="element-counter.html">counter</a></li>
                                            <li><a href="element-countdown.html">Countdown</a></li>
                                            <li><a href="element-category.html">Category</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="index.html#" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            User panel <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="dashboard.html">dashboard</a></li>
                            <li><a class="dropdown-item" href="dashboard-add-listing.html">Add listing</a></li>
                            <li><a class="dropdown-item" href="dashboard-booking.html">Booking</a></li>
                            <li><a class="dropdown-item" href="dashboard-invoice-listing.html">Invoice listing</a></li>
                            <li><a class="dropdown-item" href="dashboard-message.html">Messages</a></li>
                            <li><a class="dropdown-item" href="dashboard-chat.html">Chat</a></li>
                            <li><a class="dropdown-item" href="dashboard-my-listings.html">My listings</a></li>
                            <li><a class="dropdown-item" href="dashboard-bookmark.html">Bookmark</a></li>
                            <li><a class="dropdown-item" href="dashboard-my-profile.html">My Profile</a></li>
                            <li><a class="dropdown-item" href="dashboard-review.html">Reviews</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="index.html#" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Blog <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="blog.html">Blog</a></li>
                            <li><a class="dropdown-item" href="blog-single.html">Blog detail </a></li>
                        </ul>
                    </li>
                </ul>
            </div> -->
            <div class="d-block d-md-flex align-items-center">
                <div class="call me-4 d-inline-block">
                    <a class="text-white" href="<?php echo base_url('aboutus') ?>">About Us </a>
                </div>
                <div class="call me-4 d-inline-block">
                    <a class="text-white" href="<?php echo base_url('contactus') ?>">Contact Us </a>
                </div>
                <div class="login d-inline-block me-4">
                    <a class="text-white" data-bs-toggle="modal" data-bs-target="#loginModal" href="index.html#">
                        Signin/Register</a>
                </div>
                <div class="add-listing d-none d-sm-block">
                    <a class="btn btn-primary btn-md" href="<?php echo base_url('login') ?>"> <i
                            class="fa fa-plus-circle"></i>Add listing </a>
                </div>
            </div>
        </div>
    </nav>
</header>
<!--=================================
 header -->

<!--=================================
 Modal login -->
<div class="modal login fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="loginModalLabel">Log in & Register</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                        <form class="row mt-4 align-items-center" action="SubmitLoginform" method="post">
                            <div class="form-group mb-3 col-sm-12">
                                <input type="email" class="form-control" placeholder="Email" name="mail">
                            </div>
                            <div class="form-group mb-3 col-sm-12">
                                <input type="Password" class="form-control" placeholder="Password" name="pass">
                            </div>
                            <div class="col-sm-12 d-grid">
                                <button type="submit" class="btn btn-primary">Sign up</button>
                            </div>
                            <div class="col-sm-12">
                                <ul class="list-unstyled d-flex mb-1 mt-sm-0 mt-3" style="padding-top:30px;padding-bottom:50px;">
                                    <li class="me-1"><b>Not Registered User? </b><a class="" href="<?php echo base_url("register") ?>">
                                                Click here.</a></li>
                                </ul>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!--=================================
Modal login -->