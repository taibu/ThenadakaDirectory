<!DOCTYPE html>
<html lang="en" dir="ltr">

<?php $this->load->view("Templates/head") ?>

<body class="layout-navbar-mini-fixed-bottom">
    <div class="preloader">
        <div class="sk-double-bounce">
            <div class="sk-child sk-double-bounce1"></div>
            <div class="sk-child sk-double-bounce2"></div>
        </div>
    </div>

    <!-- Header Layout -->
    <div class="mdk-header-layout js-mdk-header-layout">

        <!-- Header -->

		<?php $this->load->view("Templates/Header") ?>

        <!-- // END Header -->

        <!-- Header Layout Content -->
        <div class="mdk-header-layout__content page-content ">
            <div class="mdk-box mdk-box--bg-gradient-primary bg-dark js-mdk-box position-relative overflow-hidden mb-0" data-effects="parallax-background blend-background" style="background-image: url(assets/images/back.png);">
                <div class="mdk-box__bg">
                    <div class="mdk-box__bg-front" ></div>
                </div>
                <div class="mdk-box__content">
                    <div class="container page__container py-64pt py-md-112pt">
                        <div class="row align-items-center text-center text-md-left">
                            <div class="col-md-6 col-lg-5 order-1 order-md-0">
                                <h1 class="text-white">Learn <span class="d-block d-md-inline-block text-scramble js-text-scramble">Development</span></h1>
                                <p class="lead mb-32pt mb-lg-48pt text-white">Business, Technology and Creative Skills taught by industry experts. Explore a wide range of skills with our professional tutorials.</p>
                                <a href="library.html" class="btn btn-lg btn-white btn--raised mb-16pt">Browse Courses</a>
                                <p class="mb-0"><a href="index.html" class="text-white-70 text-underline"><strong>Are you a teacher?</strong></a></p>
                            </div>
                            <div class="col-md-6 col-lg-7 order-0 order-md-1 text-center mb-32pt mb-md-0">
                                <img src="assets/images/macbook.png" alt="macbook" class="home-macbook">
                            </div>
                        </div>
                    </div>
                    <!-- <div class="hero container text-center py-112pt">
      <h1 class="text-white">Learn to Code</h1>
      <p class="lead measure-hero-lead mx-auto mb-48pt text-white">Business, Technology and Creative Skills taught by industry experts. Explore a wide range of skills with our professional tutorials.</p>
      <a href="library.html" class="btn btn-lg btn-outline-white">Browse Courses</a>
    </div> -->
                </div>
            </div>

            <div class="bg-white border-bottom-2 py-16pt py-sm-24pt py-md-32pt ">
                <div class="container page__container">
                    <div class="row align-items-center">
                        <div class="d-flex col-md align-items-center border-bottom border-md-0 mb-16pt mb-md-0 pb-16pt pb-md-0">
                            <div class="rounded-circle bg-primary w-64 h-64 d-inline-flex align-items-center justify-content-center mr-16pt">
                                <i class="material-icons text-primary-light">subscriptions</i>
                            </div>
                            <div class="flex">
                                <p class="mb-0"><strong>8,000+ Courses</strong></p>
                                <p class="text-black-70 mb-0">Explore a wide range of skills.</p>
                            </div>
                        </div>
                        <div class="d-flex col-md align-items-center border-bottom border-md-0 mb-16pt mb-md-0 pb-16pt pb-md-0">
                            <div class="rounded-circle bg-primary w-64 h-64 d-inline-flex align-items-center justify-content-center mr-16pt">
                                <i class="material-icons text-primary-light">verified_user</i>
                            </div>
                            <div class="flex">
                                <p class="mb-0"><strong>By Industry Experts</strong></p>
                                <p class="text-black-70 mb-0">Professional development from the best people.</p>
                            </div>
                        </div>
                        <div class="d-flex col-md align-items-center">
                            <div class="rounded-circle bg-primary w-64 h-64 d-inline-flex align-items-center justify-content-center mr-16pt">
                                <i class="material-icons text-primary-light">update</i>
                            </div>
                            <div class="flex">
                                <p class="mb-0"><strong>Unlimited Access</strong></p>
                                <p class="text-black-70 mb-0">Unlock Library and learn any topic with one subscription.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-section border-bottom-2">
                <div class="container page__container">
                    <div class="row align-items-end mb-16pt mb-md-32pt">
                        <div class="col-md-auto mb-32pt mb-md-0">
                            <div class="page-headline page-headline--title text-center text-md-left p-0">
                                <h2>Top Courses</h2>
                            </div>
                        </div>
                        <div class="col-md text-center text-md-right d-flex justify-content-md-end align-items-center flex-wrap" style="white-space: nowrap;">
                            <h5 class="mr-24pt mb-md-0 d-md-inline-block">Popular topics</h5>
                            <a href="library-development.html" class="chip mb-16pt mb-md-0 chip-secondary">Development</a>
                            <a href="library-development.html" class="chip mb-16pt mb-md-0 chip-outline-secondary">Design</a>
                            <a href="library-development.html" class="chip mb-16pt mb-md-0 chip-outline-secondary">Photography</a>
                            <a href="library-development.html" class="chip mb-16pt mb-md-0 chip-outline-secondary d-md-none d-lg-inline-flex">Business</a>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-6 col-md-4 col-lg-3">

                            <div class="card card--elevated card-course overlay js-overlay mdk-reveal js-mdk-reveal " data-partial-height="40" data-toggle="popover" data-trigger="click">


                                <a href="course.html" class="js-image" data-position="center">
                                    <img src="assets/images/paths/angular_430x168.png" alt="course">
                                    <span class="overlay__content">
                                        <span class="overlay__action d-flex flex-column text-center">
                                            <i class="material-icons">play_circle_outline</i>
                                            <small>Preview course</small>
                                        </span>
                                    </span>
                                </a>

                                <span class="corner-ribbon corner-ribbon--default-right-top corner-ribbon--shadow bg-accent text-white">NEW</span>

                                <div class="mdk-reveal__content">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex">
                                                <a class="card-title" href="course.html">Learn Angular fundamentals</a>
                                                <small class="text-50 font-weight-bold mb-4pt">Elijah Murray</small>
                                            </div>
                                            <a href="course.html" class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite</a>
                                        </div>
                                        <div class="d-flex">
                                            <div class="rating flex">
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star_border</span></span>
                                            </div>
                                            <small class="text-50">6 hours</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="popoverContainer d-none">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="assets/images/paths/angular_40x40@2x.png" width="40" height="40" alt="Angular" class="rounded">
                                    </div>
                                    <div class="media-body">
                                        <div class="card-title mb-0">Learn Angular fundamentals</div>
                                        <p class="lh-1 mb-0">
                                            <span class="text-black-50 small">with</span>
                                            <span class="text-black-50 small font-weight-bold">Elijah Murray</span>
                                        </p>
                                    </div>
                                </div>

                                <p class="my-16pt text-black-70">Learn the fundamentals of working with Angular and how to create basic applications.</p>

                                <div class="mb-16pt">
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                        <p class="flex text-black-50 lh-1 mb-0"><small>Fundamentals of working with Angular</small></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                        <p class="flex text-black-50 lh-1 mb-0"><small>Create complete Angular applications</small></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                        <p class="flex text-black-50 lh-1 mb-0"><small>Working with the Angular CLI</small></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                        <p class="flex text-black-50 lh-1 mb-0"><small>Understanding Dependency Injection</small></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                        <p class="flex text-black-50 lh-1 mb-0"><small>Testing with Angular</small></p>
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <div class="d-flex align-items-center mb-4pt">
                                            <span class="material-icons icon-16pt text-black-50 mr-4pt">access_time</span>
                                            <p class="flex text-black-50 lh-1 mb-0"><small>6 hours</small></p>
                                        </div>
                                        <div class="d-flex align-items-center mb-4pt">
                                            <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                                            <p class="flex text-black-50 lh-1 mb-0"><small>12 lessons</small></p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="material-icons icon-16pt text-black-50 mr-4pt">assessment</span>
                                            <p class="flex text-black-50 lh-1 mb-0"><small>Beginner</small></p>
                                        </div>
                                    </div>
                                    <div class="col text-right">
                                        <a href="course.html" class="btn btn-primary">Watch trailer</a>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">

                            <div class="card card--elevated card-course overlay js-overlay mdk-reveal js-mdk-reveal " data-partial-height="40" data-toggle="popover" data-trigger="click">


                                <a href="course.html" class="js-image" data-position="center">
                                    <img src="assets/images/paths/swift_430x168.png" alt="course">
                                    <span class="overlay__content">
                                        <span class="overlay__action d-flex flex-column text-center">
                                            <i class="material-icons">play_circle_outline</i>
                                            <small>Preview course</small>
                                        </span>
                                    </span>
                                </a>

                                <div class="mdk-reveal__content">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex">
                                                <a class="card-title" href="course.html">Build an iOS Application in Swift</a>
                                                <small class="text-50 font-weight-bold mb-4pt">Elijah Murray</small>
                                            </div>
                                            <a href="course.html" class="ml-4pt material-icons text-accent card-course__icon-favorite">favorite</a>
                                        </div>
                                        <div class="d-flex">
                                            <div class="rating flex">
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star_border</span></span>
                                            </div>
                                            <small class="text-50">6 hours</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="popoverContainer d-none">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="assets/images/paths/swift_40x40@2x.png" width="40" height="40" alt="Angular" class="rounded">
                                    </div>
                                    <div class="media-body">
                                        <div class="card-title mb-0">Build an iOS Application in Swift</div>
                                        <p class="lh-1 mb-0">
                                            <span class="text-black-50 small">with</span>
                                            <span class="text-black-50 small font-weight-bold">Elijah Murray</span>
                                        </p>
                                    </div>
                                </div>

                                <p class="my-16pt text-black-70">Learn the fundamentals of working with Angular and how to create basic applications.</p>

                                <div class="mb-16pt">
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                        <p class="flex text-black-50 lh-1 mb-0"><small>Fundamentals of working with Angular</small></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                        <p class="flex text-black-50 lh-1 mb-0"><small>Create complete Angular applications</small></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                        <p class="flex text-black-50 lh-1 mb-0"><small>Working with the Angular CLI</small></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                        <p class="flex text-black-50 lh-1 mb-0"><small>Understanding Dependency Injection</small></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                        <p class="flex text-black-50 lh-1 mb-0"><small>Testing with Angular</small></p>
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <div class="d-flex align-items-center mb-4pt">
                                            <span class="material-icons icon-16pt text-black-50 mr-4pt">access_time</span>
                                            <p class="flex text-black-50 lh-1 mb-0"><small>6 hours</small></p>
                                        </div>
                                        <div class="d-flex align-items-center mb-4pt">
                                            <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                                            <p class="flex text-black-50 lh-1 mb-0"><small>12 lessons</small></p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="material-icons icon-16pt text-black-50 mr-4pt">assessment</span>
                                            <p class="flex text-black-50 lh-1 mb-0"><small>Beginner</small></p>
                                        </div>
                                    </div>
                                    <div class="col text-right">
                                        <a href="course.html" class="btn btn-primary">Watch trailer</a>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">

                            <div class="card card--elevated card-course overlay js-overlay mdk-reveal js-mdk-reveal " data-partial-height="40" data-toggle="popover" data-trigger="click">


                                <a href="course.html" class="js-image" data-position="center">
                                    <img src="assets/images/paths/wordpress_430x168.png" alt="course">
                                    <span class="overlay__content">
                                        <span class="overlay__action d-flex flex-column text-center">
                                            <i class="material-icons">play_circle_outline</i>
                                            <small>Preview course</small>
                                        </span>
                                    </span>
                                </a>

                                <div class="mdk-reveal__content">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex">
                                                <a class="card-title" href="course.html">Build a WordPress Website</a>
                                                <small class="text-50 font-weight-bold mb-4pt">Elijah Murray</small>
                                            </div>
                                            <a href="course.html" class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite</a>
                                        </div>
                                        <div class="d-flex">
                                            <div class="rating flex">
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star_border</span></span>
                                            </div>
                                            <small class="text-50">6 hours</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="popoverContainer d-none">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="assets/images/paths/wordpress_40x40@2x.png" width="40" height="40" alt="Angular" class="rounded">
                                    </div>
                                    <div class="media-body">
                                        <div class="card-title mb-0">Build a WordPress Website</div>
                                        <p class="lh-1 mb-0">
                                            <span class="text-black-50 small">with</span>
                                            <span class="text-black-50 small font-weight-bold">Elijah Murray</span>
                                        </p>
                                    </div>
                                </div>

                                <p class="my-16pt text-black-70">Learn the fundamentals of working with Angular and how to create basic applications.</p>

                                <div class="mb-16pt">
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                        <p class="flex text-black-50 lh-1 mb-0"><small>Fundamentals of working with Angular</small></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                        <p class="flex text-black-50 lh-1 mb-0"><small>Create complete Angular applications</small></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                        <p class="flex text-black-50 lh-1 mb-0"><small>Working with the Angular CLI</small></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                        <p class="flex text-black-50 lh-1 mb-0"><small>Understanding Dependency Injection</small></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                        <p class="flex text-black-50 lh-1 mb-0"><small>Testing with Angular</small></p>
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <div class="d-flex align-items-center mb-4pt">
                                            <span class="material-icons icon-16pt text-black-50 mr-4pt">access_time</span>
                                            <p class="flex text-black-50 lh-1 mb-0"><small>6 hours</small></p>
                                        </div>
                                        <div class="d-flex align-items-center mb-4pt">
                                            <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                                            <p class="flex text-black-50 lh-1 mb-0"><small>12 lessons</small></p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="material-icons icon-16pt text-black-50 mr-4pt">assessment</span>
                                            <p class="flex text-black-50 lh-1 mb-0"><small>Beginner</small></p>
                                        </div>
                                    </div>
                                    <div class="col text-right">
                                        <a href="course.html" class="btn btn-primary">Watch trailer</a>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">

                            <div class="card card--elevated card-course overlay js-overlay mdk-reveal js-mdk-reveal " data-partial-height="40" data-toggle="popover" data-trigger="click">


                                <a href="course.html" class="js-image" data-position="left">
                                    <img src="assets/images/paths/react_430x168.png" alt="course">
                                    <span class="overlay__content">
                                        <span class="overlay__action d-flex flex-column text-center">
                                            <i class="material-icons">play_circle_outline</i>
                                            <small>Preview course</small>
                                        </span>
                                    </span>
                                </a>

                                <div class="mdk-reveal__content">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex">
                                                <a class="card-title" href="course.html">Become a React Native Developer</a>
                                                <small class="text-50 font-weight-bold mb-4pt">Elijah Murray</small>
                                            </div>
                                            <a href="course.html" class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite</a>
                                        </div>
                                        <div class="d-flex">
                                            <div class="rating flex">
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star_border</span></span>
                                            </div>
                                            <small class="text-50">6 hours</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="popoverContainer d-none">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="assets/images/paths/react_40x40@2x.png" width="40" height="40" alt="Angular" class="rounded">
                                    </div>
                                    <div class="media-body">
                                        <div class="card-title mb-0">Become a React Native Developer</div>
                                        <p class="lh-1 mb-0">
                                            <span class="text-black-50 small">with</span>
                                            <span class="text-black-50 small font-weight-bold">Elijah Murray</span>
                                        </p>
                                    </div>
                                </div>

                                <p class="my-16pt text-black-70">Learn the fundamentals of working with Angular and how to create basic applications.</p>

                                <div class="mb-16pt">
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                        <p class="flex text-black-50 lh-1 mb-0"><small>Fundamentals of working with Angular</small></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                        <p class="flex text-black-50 lh-1 mb-0"><small>Create complete Angular applications</small></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                        <p class="flex text-black-50 lh-1 mb-0"><small>Working with the Angular CLI</small></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                        <p class="flex text-black-50 lh-1 mb-0"><small>Understanding Dependency Injection</small></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                        <p class="flex text-black-50 lh-1 mb-0"><small>Testing with Angular</small></p>
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <div class="d-flex align-items-center mb-4pt">
                                            <span class="material-icons icon-16pt text-black-50 mr-4pt">access_time</span>
                                            <p class="flex text-black-50 lh-1 mb-0"><small>6 hours</small></p>
                                        </div>
                                        <div class="d-flex align-items-center mb-4pt">
                                            <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                                            <p class="flex text-black-50 lh-1 mb-0"><small>12 lessons</small></p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="material-icons icon-16pt text-black-50 mr-4pt">assessment</span>
                                            <p class="flex text-black-50 lh-1 mb-0"><small>Beginner</small></p>
                                        </div>
                                    </div>
                                    <div class="col text-right">
                                        <a href="course.html" class="btn btn-primary">Watch trailer</a>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">

                            <div class="card card--elevated card-course overlay js-overlay mdk-reveal js-mdk-reveal " data-partial-height="40" data-toggle="popover" data-trigger="click">


                                <a href="course.html" class="js-image" data-position="center">
                                    <img src="assets/images/paths/redis_430x168.png" alt="course">
                                    <span class="overlay__content">
                                        <span class="overlay__action d-flex flex-column text-center">
                                            <i class="material-icons">play_circle_outline</i>
                                            <small>Preview course</small>
                                        </span>
                                    </span>
                                </a>

                                <div class="mdk-reveal__content">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex">
                                                <a class="card-title" href="course.html">Become a Redis Developer</a>
                                                <small class="text-50 font-weight-bold mb-4pt">Elijah Murray</small>
                                            </div>
                                            <a href="course.html" class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite</a>
                                        </div>
                                        <div class="d-flex">
                                            <div class="rating flex">
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star_border</span></span>
                                            </div>
                                            <small class="text-50">6 hours</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="popoverContainer d-none">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="assets/images/paths/redis_40x40@2x.png" width="40" height="40" alt="Angular" class="rounded">
                                    </div>
                                    <div class="media-body">
                                        <div class="card-title mb-0">Become a Redis Developer</div>
                                        <p class="lh-1 mb-0">
                                            <span class="text-black-50 small">with</span>
                                            <span class="text-black-50 small font-weight-bold">Elijah Murray</span>
                                        </p>
                                    </div>
                                </div>

                                <p class="my-16pt text-black-70">Learn the fundamentals of working with Angular and how to create basic applications.</p>

                                <div class="mb-16pt">
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                        <p class="flex text-black-50 lh-1 mb-0"><small>Fundamentals of working with Angular</small></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                        <p class="flex text-black-50 lh-1 mb-0"><small>Create complete Angular applications</small></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                        <p class="flex text-black-50 lh-1 mb-0"><small>Working with the Angular CLI</small></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                        <p class="flex text-black-50 lh-1 mb-0"><small>Understanding Dependency Injection</small></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                        <p class="flex text-black-50 lh-1 mb-0"><small>Testing with Angular</small></p>
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <div class="d-flex align-items-center mb-4pt">
                                            <span class="material-icons icon-16pt text-black-50 mr-4pt">access_time</span>
                                            <p class="flex text-black-50 lh-1 mb-0"><small>6 hours</small></p>
                                        </div>
                                        <div class="d-flex align-items-center mb-4pt">
                                            <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                                            <p class="flex text-black-50 lh-1 mb-0"><small>12 lessons</small></p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="material-icons icon-16pt text-black-50 mr-4pt">assessment</span>
                                            <p class="flex text-black-50 lh-1 mb-0"><small>Beginner</small></p>
                                        </div>
                                    </div>
                                    <div class="col text-right">
                                        <a href="course.html" class="btn btn-primary">Watch trailer</a>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">

                            <div class="card card--elevated card-course overlay js-overlay mdk-reveal js-mdk-reveal " data-partial-height="40" data-toggle="popover" data-trigger="click">


                                <a href="course.html" class="js-image" data-position="left">
                                    <img src="assets/images/paths/typescript_430x168.png" alt="course">
                                    <span class="overlay__content">
                                        <span class="overlay__action d-flex flex-column text-center">
                                            <i class="material-icons">play_circle_outline</i>
                                            <small>Preview course</small>
                                        </span>
                                    </span>
                                </a>

                                <div class="mdk-reveal__content">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex">
                                                <a class="card-title" href="course.html">Introduction to Typescript</a>
                                                <small class="text-50 font-weight-bold mb-4pt">Elijah Murray</small>
                                            </div>
                                            <a href="course.html" class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite</a>
                                        </div>
                                        <div class="d-flex">
                                            <div class="rating flex">
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star_border</span></span>
                                            </div>
                                            <small class="text-50">6 hours</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="popoverContainer d-none">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="assets/images/paths/typescript_40x40@2x.png" width="40" height="40" alt="Angular" class="rounded">
                                    </div>
                                    <div class="media-body">
                                        <div class="card-title mb-0">Introduction to Typescript</div>
                                        <p class="lh-1 mb-0">
                                            <span class="text-black-50 small">with</span>
                                            <span class="text-black-50 small font-weight-bold">Elijah Murray</span>
                                        </p>
                                    </div>
                                </div>

                                <p class="my-16pt text-black-70">Learn the fundamentals of working with Angular and how to create basic applications.</p>

                                <div class="mb-16pt">
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                        <p class="flex text-black-50 lh-1 mb-0"><small>Fundamentals of working with Angular</small></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                        <p class="flex text-black-50 lh-1 mb-0"><small>Create complete Angular applications</small></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                        <p class="flex text-black-50 lh-1 mb-0"><small>Working with the Angular CLI</small></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                        <p class="flex text-black-50 lh-1 mb-0"><small>Understanding Dependency Injection</small></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                        <p class="flex text-black-50 lh-1 mb-0"><small>Testing with Angular</small></p>
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <div class="d-flex align-items-center mb-4pt">
                                            <span class="material-icons icon-16pt text-black-50 mr-4pt">access_time</span>
                                            <p class="flex text-black-50 lh-1 mb-0"><small>6 hours</small></p>
                                        </div>
                                        <div class="d-flex align-items-center mb-4pt">
                                            <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                                            <p class="flex text-black-50 lh-1 mb-0"><small>12 lessons</small></p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="material-icons icon-16pt text-black-50 mr-4pt">assessment</span>
                                            <p class="flex text-black-50 lh-1 mb-0"><small>Beginner</small></p>
                                        </div>
                                    </div>
                                    <div class="col text-right">
                                        <a href="course.html" class="btn btn-primary">Watch trailer</a>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">

                            <div class="card card--elevated card-course overlay js-overlay mdk-reveal js-mdk-reveal " data-partial-height="40" data-toggle="popover" data-trigger="click">


                                <a href="course.html" class="js-image" data-position="center">
                                    <img src="assets/images/paths/devops_430x168.png" alt="course">
                                    <span class="overlay__content">
                                        <span class="overlay__action d-flex flex-column text-center">
                                            <i class="material-icons">play_circle_outline</i>
                                            <small>Preview course</small>
                                        </span>
                                    </span>
                                </a>

                                <div class="mdk-reveal__content">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex">
                                                <a class="card-title" href="course.html">Become a DevOps Engineer</a>
                                                <small class="text-50 font-weight-bold mb-4pt">Elijah Murray</small>
                                            </div>
                                            <a href="course.html" class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite</a>
                                        </div>
                                        <div class="d-flex">
                                            <div class="rating flex">
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star_border</span></span>
                                            </div>
                                            <small class="text-50">6 hours</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="popoverContainer d-none">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="assets/images/paths/devops_40x40@2x.png" width="40" height="40" alt="Angular" class="rounded">
                                    </div>
                                    <div class="media-body">
                                        <div class="card-title mb-0">Become a DevOps Engineer</div>
                                        <p class="lh-1 mb-0">
                                            <span class="text-black-50 small">with</span>
                                            <span class="text-black-50 small font-weight-bold">Elijah Murray</span>
                                        </p>
                                    </div>
                                </div>

                                <p class="my-16pt text-black-70">Learn the fundamentals of working with Angular and how to create basic applications.</p>

                                <div class="mb-16pt">
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                        <p class="flex text-black-50 lh-1 mb-0"><small>Fundamentals of working with Angular</small></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                        <p class="flex text-black-50 lh-1 mb-0"><small>Create complete Angular applications</small></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                        <p class="flex text-black-50 lh-1 mb-0"><small>Working with the Angular CLI</small></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                        <p class="flex text-black-50 lh-1 mb-0"><small>Understanding Dependency Injection</small></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                        <p class="flex text-black-50 lh-1 mb-0"><small>Testing with Angular</small></p>
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <div class="d-flex align-items-center mb-4pt">
                                            <span class="material-icons icon-16pt text-black-50 mr-4pt">access_time</span>
                                            <p class="flex text-black-50 lh-1 mb-0"><small>6 hours</small></p>
                                        </div>
                                        <div class="d-flex align-items-center mb-4pt">
                                            <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                                            <p class="flex text-black-50 lh-1 mb-0"><small>12 lessons</small></p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="material-icons icon-16pt text-black-50 mr-4pt">assessment</span>
                                            <p class="flex text-black-50 lh-1 mb-0"><small>Beginner</small></p>
                                        </div>
                                    </div>
                                    <div class="col text-right">
                                        <a href="course.html" class="btn btn-primary">Watch trailer</a>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">

                            <div class="card card--elevated card-course overlay js-overlay mdk-reveal js-mdk-reveal " data-partial-height="40" data-toggle="popover" data-trigger="click">


                                <a href="course.html" class="js-image" data-position="left">
                                    <img src="assets/images/paths/angular_testing_430x168.png" alt="course">
                                    <span class="overlay__content">
                                        <span class="overlay__action d-flex flex-column text-center">
                                            <i class="material-icons">play_circle_outline</i>
                                            <small>Preview course</small>
                                        </span>
                                    </span>
                                </a>

                                <div class="mdk-reveal__content">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex">
                                                <a class="card-title" href="course.html">Angular Unit Testing</a>
                                                <small class="text-50 font-weight-bold mb-4pt">Elijah Murray</small>
                                            </div>
                                            <a href="course.html" class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite</a>
                                        </div>
                                        <div class="d-flex">
                                            <div class="rating flex">
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star_border</span></span>
                                            </div>
                                            <small class="text-50">6 hours</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="popoverContainer d-none">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="assets/images/paths/angular_40x40@2x.png" width="40" height="40" alt="Angular" class="rounded">
                                    </div>
                                    <div class="media-body">
                                        <div class="card-title mb-0">Angular Unit Testing</div>
                                        <p class="lh-1 mb-0">
                                            <span class="text-black-50 small">with</span>
                                            <span class="text-black-50 small font-weight-bold">Elijah Murray</span>
                                        </p>
                                    </div>
                                </div>

                                <p class="my-16pt text-black-70">Learn the fundamentals of working with Angular and how to create basic applications.</p>

                                <div class="mb-16pt">
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                        <p class="flex text-black-50 lh-1 mb-0"><small>Fundamentals of working with Angular</small></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                        <p class="flex text-black-50 lh-1 mb-0"><small>Create complete Angular applications</small></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                        <p class="flex text-black-50 lh-1 mb-0"><small>Working with the Angular CLI</small></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                        <p class="flex text-black-50 lh-1 mb-0"><small>Understanding Dependency Injection</small></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                        <p class="flex text-black-50 lh-1 mb-0"><small>Testing with Angular</small></p>
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <div class="d-flex align-items-center mb-4pt">
                                            <span class="material-icons icon-16pt text-black-50 mr-4pt">access_time</span>
                                            <p class="flex text-black-50 lh-1 mb-0"><small>6 hours</small></p>
                                        </div>
                                        <div class="d-flex align-items-center mb-4pt">
                                            <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                                            <p class="flex text-black-50 lh-1 mb-0"><small>12 lessons</small></p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="material-icons icon-16pt text-black-50 mr-4pt">assessment</span>
                                            <p class="flex text-black-50 lh-1 mb-0"><small>Beginner</small></p>
                                        </div>
                                    </div>
                                    <div class="col text-right">
                                        <a href="course.html" class="btn btn-primary">Watch trailer</a>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="pt-md-16pt text-center">
                        <a href="library.html" class="btn btn-outline-secondary">Browse Courses</a>
                    </div>
                </div>
            </div>

            <div class="page-section bg-white border-bottom-2">
                <div class="container page__container">
                    <div class="page-headline text-center">
                        <h2>Learning Paths</h2>
                        <p class="lead text-black-70 measure-lead mx-auto">Stop guessing what to learn next and start making progress faster based on your current skill level and experience.</p>
                    </div>

                    <div class="row d-block js-mdk-carousel">
                        <div class="mdk-carousel__content">


                            <div class="col-12 col-sm-6 col-md-4">

                                <a href="path.html" class="card stack stack--hidden-hover card-featured-path overlay js-overlay">
                                    <span class="card-featured-path__content">
                                        <span data-position="center" class="js-image" data-height="96">
                                            <img src="assets/images/paths/angular_430x168.png" alt="course">
                                        </span>
                                        <span class="overlay__content">
                                            <span class="overlay__action card-title mb-0">Angular</span>
                                        </span>
                                    </span>
                                </a>

                            </div>
                            <div class="col-12 col-sm-6 col-md-4">

                                <a href="path.html" class="card stack stack--hidden-hover card-featured-path overlay js-overlay">
                                    <span class="card-featured-path__content">
                                        <span data-position="left" class="js-image" data-height="96">
                                            <img src="assets/images/paths/react_430x168.png" alt="course">
                                        </span>
                                        <span class="overlay__content">
                                            <span class="overlay__action card-title mb-0">React Native</span>
                                        </span>
                                    </span>
                                </a>

                            </div>
                            <div class="col-12 col-sm-6 col-md-4">

                                <a href="path.html" class="card stack stack--hidden-hover card-featured-path overlay js-overlay">
                                    <span class="card-featured-path__content">
                                        <span data-position="center" class="js-image" data-height="96">
                                            <img src="assets/images/paths/swift_430x168.png" alt="course">
                                        </span>
                                        <span class="overlay__content">
                                            <span class="overlay__action card-title mb-0">Swift</span>
                                        </span>
                                    </span>
                                </a>

                            </div>

                        </div>
                    </div>

                    <div class="row mt-16pt mt-lg-32pt">
                        <div class="col-i8-6 col-md-3 mb-16pt">
                            <a href="path.html" class="media">
                                <img src="assets/images/paths/angular_40x40@2x.png" width="40" height="40" alt="Angular" class="media-left rounded">
                                <span class="media-body">
                                    <span class="card-title text-body d-block mb-0">Angular</span>
                                    <span class="text-muted d-flex lh-1">24 courses</span>
                                </span>
                            </a>
                        </div>
                        <div class="col-i8-6 col-md-3 mb-16pt">
                            <a href="path.html" class="media">
                                <img src="assets/images/paths/react_40x40@2x.png" width="40" height="40" alt="React Native" class="media-left rounded">
                                <span class="media-body">
                                    <span class="card-title text-body d-block mb-0">React Native</span>
                                    <span class="text-muted d-flex lh-1">18 courses</span>
                                </span>
                            </a>
                        </div>
                        <div class="col-i8-6 col-md-3 mb-16pt">
                            <a href="path.html" class="media">
                                <img src="assets/images/paths/swift_40x40@2x.png" width="40" height="40" alt="Swift" class="media-left rounded">
                                <span class="media-body">
                                    <span class="card-title text-body d-block mb-0">Swift</span>
                                    <span class="text-muted d-flex lh-1">22 courses</span>
                                </span>
                            </a>
                        </div>
                        <div class="col-i8-6 col-md-3 mb-16pt">
                            <a href="path.html" class="media">
                                <img src="assets/images/paths/wordpress_40x40@2x.png" width="40" height="40" alt="WordPress" class="media-left rounded">
                                <span class="media-body">
                                    <span class="card-title text-body d-block mb-0">WordPress</span>
                                    <span class="text-muted d-flex lh-1">13 courses</span>
                                </span>
                            </a>
                        </div>
                        <div class="col-i8-6 col-md-3 mb-16pt">
                            <a href="path.html" class="media">
                                <img src="assets/images/paths/swift_40x40@2x.png" width="40" height="40" alt="Swift" class="media-left rounded">
                                <span class="media-body">
                                    <span class="card-title text-body d-block mb-0">Swift</span>
                                    <span class="text-muted d-flex lh-1">22 courses</span>
                                </span>
                            </a>
                        </div>
                        <div class="col-i8-6 col-md-3 mb-16pt">
                            <a href="path.html" class="media">
                                <img src="assets/images/paths/wordpress_40x40@2x.png" width="40" height="40" alt="WordPress" class="media-left rounded">
                                <span class="media-body">
                                    <span class="card-title text-body d-block mb-0">WordPress</span>
                                    <span class="text-muted d-flex lh-1">13 courses</span>
                                </span>
                            </a>
                        </div>
                        <div class="col-i8-6 col-md-3 mb-16pt">
                            <a href="path.html" class="media">
                                <img src="assets/images/paths/devops_40x40@2x.png" width="40" height="40" alt="Development Tools" class="media-left rounded">
                                <span class="media-body">
                                    <span class="card-title text-body d-block mb-0">Development Tools</span>
                                    <span class="text-muted d-flex lh-1">5 courses</span>
                                </span>
                            </a>
                        </div>
                        <div class="col-i8-6 col-md-3 mb-16pt">
                            <a href="path.html" class="media">
                                <img src="assets/images/paths/react_40x40@2x.png" width="40" height="40" alt="React Native" class="media-left rounded">
                                <span class="media-body">
                                    <span class="card-title text-body d-block mb-0">React Native</span>
                                    <span class="text-muted d-flex lh-1">18 courses</span>
                                </span>
                            </a>
                        </div>
                    </div>

                    <div class="pt-8pt pt-md-32pt text-center">
                        <a href="paths.html" class="btn btn-outline-secondary">Browse Learning Paths</a>
                    </div>
                </div>
            </div>

            <div class="page-section">
                <div class="container page__container">
                    <div class="page-headline text-center">
                        <h2>Feedback</h2>
                        <p class="lead measure-lead mx-auto text-black-70">What other students turned professionals have to say about us after learning with us and reaching their goals.</p>
                    </div>

                    <div class="position-relative carousel-card">
                        <div class="row d-block js-mdk-carousel" id="carousel-feedback">
                            <a class="carousel-control-next js-mdk-carousel-control mt-n24pt" href="index.html#carousel-feedback" role="button" data-slide="next">
                                <span class="carousel-control-icon material-icons" aria-hidden="true">keyboard_arrow_right</span>
                                <span class="sr-only">Next</span>
                            </a>
                            <div class="mdk-carousel__content">

                                <div class="col-12 col-md-6">
                                    <div class="card card--elevated card-body">
                                        <blockquote class="mb-0">
                                            <p class="text-70">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia distinctio reiciendis iusto id, doloribus optio soluta laborum nobis dolor tempore velit porro maiores eveniet voluptas officia ipsa magnam aliquam. Perferendis?</p>

                                            <div class="media">
                                                <div class="media-left">
                                                    <img src="assets/images/people/110/guy-1.jpg" width="40" alt="avatar" class="rounded-circle">
                                                </div>
                                                <div class="media-body media-middle">
                                                    <p class="mb-0"><a href="index.html" class="text-body"><strong>Umberto Kass</strong></a></p>
                                                    <div class="rating">
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star_border</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="card card--elevated card-body">
                                        <blockquote class="mb-0">
                                            <p class="text-70">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia distinctio reiciendis iusto id, doloribus optio soluta laborum nobis dolor tempore velit porro maiores eveniet voluptas officia ipsa magnam aliquam. Perferendis?</p>

                                            <div class="media">
                                                <div class="media-left">
                                                    <img src="assets/images/people/110/guy-2.jpg" width="40" alt="avatar" class="rounded-circle">
                                                </div>
                                                <div class="media-body media-middle">
                                                    <p class="mb-0"><a href="index.html" class="text-body"><strong>Umberto Kass</strong></a></p>
                                                    <div class="rating">
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                                        <span class="rating__item"><span class="material-icons">star_border</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="js-fix-footer bg-white border-top-2">
                <div class="container page-section py-lg-48pt">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-6 col-md-4 mb-24pt mb-md-0">
                                    <h4 class="text-70">Learn</h4>
                                    <nav class="nav nav-links nav--flush flex-column">
                                        <a class="nav-link" href="library.html">Library</a>
                                        <a class="nav-link" href="library-featured.html">Featured</a>
                                        <a class="nav-link" href="library-filters.html">Explore</a>
                                        <a class="nav-link" href="paths.html">Learning Paths</a>
                                    </nav>
                                </div>
                                <div class="col-6 col-md-4 mb-24pt mb-md-0">
                                    <h4 class="text-70">Join us</h4>
                                    <nav class="nav nav-links nav--flush flex-column">
                                        <a class="nav-link" href="pricing.html">Pricing</a>
                                        <a class="nav-link" href="login.html">Login</a>
                                        <a class="nav-link" href="signup.html">Sign Up</a>
                                        <a class="nav-link" href="signup-payment.html">Payment</a>
                                    </nav>
                                </div>
                                <div class="col-6 col-md-4 mb-32pt mb-md-0">
                                    <h4 class="text-70">Community</h4>
                                    <nav class="nav nav-links nav--flush flex-column">
                                        <a class="nav-link" href="student-discussions.html">Discussions</a>
                                        <a class="nav-link" href="student-discussions-ask.html">Ask Question</a>
                                        <a class="nav-link" href="student-profile.html">Student Profile</a>
                                        <a class="nav-link" href="instructor-profile.html">Instructor Profile</a>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-md-right">
                            <p class="text-70 brand justify-content-md-end">
                                <img class="brand-icon" src="assets/images/logo/black-70@2x.png" width="30" alt="Tutorio"> Tutorio
                            </p>
                            <p class="text-muted mb-0 mb-lg-16pt">Tutorio is an online learning platform that helps anyone achieve their personal and professional goals.</p>
                        </div>
                    </div>
                </div>
                <div class="bg-footer page-section py-lg-32pt">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-2 col-sm-4 mb-24pt mb-md-0">
                                <p class="text-white-70 mb-8pt"><strong>Follow us</strong></p>
                                <nav class="nav nav-links nav--flush">
                                    <a href="index.html#" class="nav-link mr-8pt"><img src="assets/images/icon/footer/facebook-square@2x.png" width="24" height="24" alt="Facebook"></a>
                                    <a href="index.html#" class="nav-link mr-8pt"><img src="assets/images/icon/footer/twitter-square@2x.png" width="24" height="24" alt="Twitter"></a>
                                    <a href="index.html#" class="nav-link mr-8pt"><img src="assets/images/icon/footer/vimeo-square@2x.png" width="24" height="24" alt="Vimeo"></a>
                                    <a href="index.html#" class="nav-link"><img src="assets/images/icon/footer/youtube-square@2x.png" width="24" height="24" alt="YouTube"></a>
                                </nav>
                            </div>
                            <div class="col-md-6 col-sm-4 mb-24pt mb-md-0 d-flex align-items-center">
                                <a href="index.html" class="btn btn-outline-white">English <span class="icon--right material-icons">arrow_drop_down</span></a>
                            </div>
                            <div class="col-md-4 text-md-right">
                                <p class="mb-8pt d-flex align-items-md-center justify-content-md-end">
                                    <a href="index.html" class="text-white-70 text-underline mr-16pt">Terms</a>
                                    <a href="index.html" class="text-white-70 text-underline">Privacy policy</a>
                                </p>
                                <p class="text-white-50 mb-0">Copyright 2019 &copy; All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- // END Header Layout Content -->

    </div>
    <!-- // END Header Layout -->

    <div class="navbar navbar-expand-sm navbar-mini navbar-dark fixed-bottom bg-dark d-none d-md-flex p-0" id="demo-navbar">
        <div class="container-fluid">

            <!-- Main Navigation -->
            <ul class="nav navbar-nav flex-nowrap">
                <li class="nav-item dropup active">
                    <a href="index.html#" class="nav-link dropdown-toggle" data-toggle="dropdown">Catalog</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item active" href="index.html">Home page</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="library.html">Library</a>
                        <a class="dropdown-item" href="library-featured.html">Featured</a>
                        <a class="dropdown-item" href="library-development.html">Development</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="library-filters.html">Explore</a>
                        <a class="dropdown-item" href="library-filters-list.html">Explore List</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="paths.html">Learning Paths</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="course.html">Course Details</a>
                        <a class="dropdown-item" href="lesson.html">Lesson Details</a>
                        <a class="dropdown-item" href="path.html">Path Details</a>
                    </div>
                </li>
                <li class="nav-item dropup">
                    <a href="index.html#" class="nav-link dropdown-toggle" data-toggle="dropdown">Student</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="student-dashboard.html">Dashboard</a>
                        <a class="dropdown-item" href="student-my-courses.html">My Courses</a>
                        <a class="dropdown-item" href="student-take-course.html">Take Course</a>
                        <a class="dropdown-item" href="student-take-lesson.html">Take Lesson</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="student-take-quiz.html">Take Quiz</a>
                        <a class="dropdown-item" href="student-quiz-result-details.html">Quiz Result</a>
                        <a class="dropdown-item" href="student-quiz-results.html">My Quizzes</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="student-path-assessment.html">Skill Assessment</a>
                        <a class="dropdown-item" href="student-path-assessment-result.html">Skill Result</a>
                    </div>
                </li>
                <li class="nav-item dropup">
                    <a href="index.html#" class="nav-link dropdown-toggle" data-toggle="dropdown">Instructor</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="instructor-dashboard.html">Dashboard</a>
                        <a class="dropdown-item" href="instructor-courses.html">Courses</a>
                        <a class="dropdown-item" href="instructor-quizzes.html">Quizzes</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="instructor-edit-course.html">Edit Course</a>
                        <a class="dropdown-item" href="instructor-edit-quiz.html">Edit Quiz</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="http://tutorio-bootstrap.frontendmatter.com/instructor-earnings.html">Earnings</a>
                        <a class="dropdown-item" href="http://tutorio-bootstrap.frontendmatter.com/instructor-statement.html">Statement</a>
                    </div>
                </li>
                <li class="nav-item dropup">
                    <a href="index.html#" class="nav-link dropdown-toggle" data-toggle="dropdown">Community</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="student-discussions.html">Discussions</a>
                        <a class="dropdown-item" href="http://tutorio-bootstrap.frontendmatter.com/student-discussion.html">Discussion Details</a>
                        <a class="dropdown-item" href="student-discussions-ask.html">Ask Question</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="student-profile.html">Student Profile</a>
                        <a class="dropdown-item" href="instructor-profile.html">Instructor Profile</a>
                    </div>
                </li>
                <li class="nav-item dropup">
                    <a href="index.html#" class="nav-link dropdown-toggle" data-toggle="dropdown">Account</a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="pricing.html">Pricing</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.html">Login</a>
                        <a class="dropdown-item" href="signup.html">Signup</a>
                        <a class="dropdown-item" href="signup-payment.html">Payment</a>
                        <a class="dropdown-item" href="reset-password.html">Reset Password</a>
                        <a class="dropdown-item" href="change-password.html">Change Password</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="student-edit-account.html">Edit Account</a>
                        <a class="dropdown-item" href="student-edit-account-profile.html">Profile &amp; Privacy</a>
                        <a class="dropdown-item" href="student-edit-account-notifications.html">Email Notifications</a>
                        <a class="dropdown-item" href="student-edit-account-password.html">Account Password</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="student-billing.html">Subscription</a>
                        <a class="dropdown-item" href="student-billing-upgrade.html">Upgrade Account</a>
                        <a class="dropdown-item" href="student-billing-payment.html">Payment Information</a>
                        <a class="dropdown-item" href="student-billing-history.html">Payment History</a>
                        <a class="dropdown-item" href="student-billing-invoice.html">Invoice</a>
                    </div>
                </li>
                <li class="nav-item dropup">
                    <a href="index.html#" class="nav-link dropdown-toggle" data-toggle="dropdown">Components</a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="ui-buttons.html">Buttons</a>
                        <a class="dropdown-item" href="ui-charts.html">Charts</a>
                        <a class="dropdown-item" href="ui-avatars.html">Avatars</a>
                        <a class="dropdown-item" href="ui-forms.html">Forms</a>
                        <a class="dropdown-item" href="ui-loaders.html">Loaders</a>
                        <a class="dropdown-item" href="ui-tables.html">Tables</a>
                        <a class="dropdown-item" href="ui-cards.html">Cards</a>
                        <a class="dropdown-item" href="ui-icons.html">Icons</a>
                        <a class="dropdown-item" href="ui-tabs.html">Tabs</a>
                        <a class="dropdown-item" href="ui-alerts.html">Alerts</a>
                        <a class="dropdown-item" href="ui-badges.html">Badges</a>
                        <a class="dropdown-item" href="ui-progress.html">Progress</a>
                        <a class="dropdown-item" href="ui-pagination.html">Pagination</a>
                    </div>
                </li>
            </ul>
            <!-- // END Main Navigation -->

        </div>
    </div>
    <!-- drawer -->
    <div class="mdk-drawer js-mdk-drawer" id="default-drawer">
        <div class="mdk-drawer__content">
            <div class="sidebar sidebar-dark sidebar-left" data-perfect-scrollbar>
                <div class="sidebar-p-a sidebar-b-b sidebar-m-b pt-0">

                    <!-- Brand -->
                    <a href="index.html" class="sidebar-brand">
                        <img class="sidebar-brand-icon" src="assets/images/logo/white-100.svg" width="30" alt="Tutorio">
                        <span>Tutorio</span>
                    </a>
                    <!-- // END Brand -->

                    <!-- Search -->
                    <form action="library-filters.html" class="search-form search-form--black">
                        <input type="text" class="form-control" placeholder="Search">
                        <button class="btn" type="submit" role="button"><i class="material-icons">search</i></button>
                    </form>

                </div>

                <ul class="sidebar-menu">
                    <li class="sidebar-menu-item active">
                        <a class="sidebar-menu-button" href="index.html">Home Page</a>
                    </li>
                    <li class="sidebar-menu-item active open">
                        <a class="sidebar-menu-button" data-toggle="collapse" href="index.html#catalog_menu">
                            Catalog
                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse show sm-indent" id="catalog_menu">
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="library.html">Library</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="library-featured.html">Featured</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="library-development.html">Development</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="library-filters.html">Explore</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="library-filters-list.html">Explore List</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="paths.html">Learning Paths</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="course.html">Course Details</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="lesson.html">Lesson Details</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="path.html">Path Details</a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <div class="sidebar-heading">Pages</div>
                <ul class="sidebar-menu">
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" data-toggle="collapse" href="index.html#student_menu">
                            Student
                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse sm-indent" id="student_menu">
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-dashboard.html">Dashboard</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-my-courses.html">My Courses</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-quiz-results.html">My Quizzes</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-take-course.html">Take Course</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-take-lesson.html">Take Lesson</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-take-quiz.html">Take Quiz</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-quiz-result-details.html">Quiz Result</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-path-assessment.html">Skill Assessment</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-path-assessment-result.html">Skill Result</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" data-toggle="collapse" href="index.html#instructor_menu">
                            Instructor
                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse sm-indent" id="instructor_menu">
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="instructor-dashboard.html">Dashboard</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="instructor-courses.html">Manage Courses</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="instructor-quizzes.html">Manage Quizzes</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="instructor-edit-course.html">Edit Course</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="instructor-edit-quiz.html">Edit Quiz</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="http://tutorio-bootstrap.frontendmatter.com/instructor-earnings.html">Earnings</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="http://tutorio-bootstrap.frontendmatter.com/instructor-statement.html">Statement</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" data-toggle="collapse" href="index.html#account_menu">
                            Account
                            <span class="sidebar-menu-badge badge badge-primary badge-notifications ml-auto">2</span>
                            <span class="sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse sm-indent" id="account_menu">
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="pricing.html">Pricing</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="login.html">Login</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="signup.html">Signup</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="signup-payment.html">Payment</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="reset-password.html">Reset Password</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="change-password.html">Change Password</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-edit-account.html">Edit Account</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-edit-account-profile.html">Profile &amp; Privacy</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-edit-account-notifications.html">Email Notifications</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-edit-account-password.html">Account Password</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-billing.html">Subscription</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-billing-upgrade.html">Upgrade Account</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-billing-payment.html">Payment Information</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-billing-history.html">Payment History</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-billing-invoice.html">Invoice</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" data-toggle="collapse" href="index.html#community_menu">
                            Community
                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse sm-indent" id="community_menu">
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-discussions.html">Discussions</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="http://tutorio-bootstrap.frontendmatter.com/student-discussion.html">Discussion Details</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-discussions-ask.html">Ask Question</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-profile.html">Student Profile</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="instructor-profile.html">Instructor Profile</a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <div class="sidebar-heading">Components</div>
                <ul class="sidebar-menu">
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" data-toggle="collapse" href="index.html#components_menu">
                            Components
                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse sm-indent" id="components_menu">
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="ui-buttons.html">Buttons</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="ui-charts.html">Charts</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="ui-avatars.html">Avatars</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="ui-forms.html">Forms</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="ui-loaders.html">Loaders</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="ui-tables.html">Tables</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="ui-cards.html">Cards</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="ui-icons.html">Icons</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="ui-tabs.html">Tabs</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="ui-alerts.html">Alerts</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="ui-badges.html">Badges</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="ui-progress.html">Progress</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="ui-pagination.html">Pagination</a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </div>
    <!-- // END drawer -->
    <!-- App Settings FAB -->
    <div id="app-settings">
        <app-settings theme-active="blue-light" :theme-location="{
      'blue-light': 'http://tutorio-bootstrap.frontendmatter.com/index.html',
      'blue-dark': 'http://tutorio-dark.frontendmatter.com/index.html',
      'teal-light': 'http://tutorio-teal.frontendmatter.com/index.html',
      'teal-dark': 'http://tutorio-teal-dark.frontendmatter.com/index.html'
    }" sidebar-variant="bg-transparent border-0"></app-settings>
    </div>
    <!-- Modal -->
    <div class="modal courses-modal" id="courses" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-i8-plus bg-body pr-0">
                            <div class="py-16pt pl-16pt menu">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="index.html#courses-development" data-toggle="tab">Development</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.html#courses-design" data-toggle="tab">Design</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.html#courses-photography" data-toggle="tab">Photography</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.html#courses-marketing" data-toggle="tab">Marketing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.html#courses-business" data-toggle="tab">Business</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-6 col-i8-plus-auto tab-content">


                            <div id="courses-development" class="tab-pane show active">
                                <div class="row no-gutters">
                                    <div class="col-md-6 p-0">
                                        <div class="p-24pt d-flex h-100 flex-column">
                                            <div class="flex">
                                                <h5 class="text-black-100">Courses</h5>
                                                <ul class="nav flex-column mb-24pt">

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Web Development</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">JavaScript</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">HTML</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">CSS</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">WordPress</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">PHP</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">iOS Development</a>
                                                    </li>

                                                </ul>
                                            </div>
                                            <div>
                                                <a href="library.html" class="btn btn-block text-center btn-secondary">Library</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 p-0">
                                        <div class="p-24pt d-flex h-100 flex-column">
                                            <div class="flex">
                                                <h5 class="text-black-100">Learning Paths</h5>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media text-black-100">
                                                        <img src="assets/images/paths/angular_40x40@2x.png" width="40" height="40" alt="Angular" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title d-block mb-0">Angular</span>
                                                            <span class="text-muted text-black-70 d-flex lh-1">24 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media text-black-100">
                                                        <img src="assets/images/paths/swift_40x40@2x.png" width="40" height="40" alt="Swift" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title d-block mb-0">Swift</span>
                                                            <span class="text-muted text-black-70 d-flex lh-1">22 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media text-black-100">
                                                        <img src="assets/images/paths/react_40x40@2x.png" width="40" height="40" alt="React Native" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title d-block mb-0">React Native</span>
                                                            <span class="text-muted text-black-70 d-flex lh-1">18 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media text-black-100">
                                                        <img src="assets/images/paths/wordpress_40x40@2x.png" width="40" height="40" alt="WordPress" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title d-block mb-0">WordPress</span>
                                                            <span class="text-muted text-black-70 d-flex lh-1">13 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-24pt">
                                                    <a href="path.html" class="media text-black-100">
                                                        <img src="assets/images/paths/devops_40x40@2x.png" width="40" height="40" alt="Development Tools" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title d-block mb-0">Development Tools</span>
                                                            <span class="text-muted text-black-70 d-flex lh-1">5 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="paths.html" class="btn btn-block text-center btn-outline-secondary">Learning Paths</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div id="courses-design" class="tab-pane">
                                <div class="row no-gutters">
                                    <div class="col-md-6 p-0">
                                        <div class="p-24pt d-flex h-100 flex-column">
                                            <div class="flex">
                                                <h5 class="text-black-100">Courses</h5>
                                                <ul class="nav flex-column mb-24pt">

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Illustration</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Design Skills</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Design Techniques</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Page Layout</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Projects</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Drawing</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Typography</a>
                                                    </li>

                                                </ul>
                                            </div>
                                            <div>
                                                <a href="library.html" class="btn btn-block text-center btn-secondary">Library</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 p-0">
                                        <div class="p-24pt d-flex h-100 flex-column">
                                            <div class="flex">
                                                <h5 class="text-black-100">Learning Paths</h5>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media text-black-100">
                                                        <img src="assets/images/paths/angular_40x40@2x.png" width="40" height="40" alt="Angular" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title d-block mb-0">Angular</span>
                                                            <span class="text-muted text-black-70 d-flex lh-1">24 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media text-black-100">
                                                        <img src="assets/images/paths/swift_40x40@2x.png" width="40" height="40" alt="Swift" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title d-block mb-0">Swift</span>
                                                            <span class="text-muted text-black-70 d-flex lh-1">22 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media text-black-100">
                                                        <img src="assets/images/paths/react_40x40@2x.png" width="40" height="40" alt="React Native" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title d-block mb-0">React Native</span>
                                                            <span class="text-muted text-black-70 d-flex lh-1">18 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media text-black-100">
                                                        <img src="assets/images/paths/wordpress_40x40@2x.png" width="40" height="40" alt="WordPress" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title d-block mb-0">WordPress</span>
                                                            <span class="text-muted text-black-70 d-flex lh-1">13 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-24pt">
                                                    <a href="path.html" class="media text-black-100">
                                                        <img src="assets/images/paths/devops_40x40@2x.png" width="40" height="40" alt="Development Tools" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title d-block mb-0">Development Tools</span>
                                                            <span class="text-muted text-black-70 d-flex lh-1">5 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="paths.html" class="btn btn-block text-center btn-outline-secondary">Learning Paths</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div id="courses-photography" class="tab-pane">
                                <div class="row no-gutters">
                                    <div class="col-md-6 p-0">
                                        <div class="p-24pt d-flex h-100 flex-column">
                                            <div class="flex">
                                                <h5 class="text-black-100">Courses</h5>
                                                <ul class="nav flex-column mb-24pt">

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Cameras</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Raw Processing</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Masking</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Compositing</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Portraits</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Photo Management</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Lighting</a>
                                                    </li>

                                                </ul>
                                            </div>
                                            <div>
                                                <a href="library.html" class="btn btn-block text-center btn-secondary">Library</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 p-0">
                                        <div class="p-24pt d-flex h-100 flex-column">
                                            <div class="flex">
                                                <h5 class="text-black-100">Learning Paths</h5>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media text-black-100">
                                                        <img src="assets/images/paths/angular_40x40@2x.png" width="40" height="40" alt="Angular" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title d-block mb-0">Angular</span>
                                                            <span class="text-muted text-black-70 d-flex lh-1">24 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media text-black-100">
                                                        <img src="assets/images/paths/swift_40x40@2x.png" width="40" height="40" alt="Swift" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title d-block mb-0">Swift</span>
                                                            <span class="text-muted text-black-70 d-flex lh-1">22 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media text-black-100">
                                                        <img src="assets/images/paths/react_40x40@2x.png" width="40" height="40" alt="React Native" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title d-block mb-0">React Native</span>
                                                            <span class="text-muted text-black-70 d-flex lh-1">18 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media text-black-100">
                                                        <img src="assets/images/paths/wordpress_40x40@2x.png" width="40" height="40" alt="WordPress" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title d-block mb-0">WordPress</span>
                                                            <span class="text-muted text-black-70 d-flex lh-1">13 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-24pt">
                                                    <a href="path.html" class="media text-black-100">
                                                        <img src="assets/images/paths/devops_40x40@2x.png" width="40" height="40" alt="Development Tools" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title d-block mb-0">Development Tools</span>
                                                            <span class="text-muted text-black-70 d-flex lh-1">5 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="paths.html" class="btn btn-block text-center btn-outline-secondary">Learning Paths</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div id="courses-marketing" class="tab-pane">
                                <div class="row no-gutters">
                                    <div class="col-md-6 p-0">
                                        <div class="p-24pt d-flex h-100 flex-column">
                                            <div class="flex">
                                                <h5 class="text-black-100">Courses</h5>
                                                <ul class="nav flex-column mb-24pt">

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Small Business</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Marketing</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Enterprise Marketing</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Content Marketing</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Online Marketing</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Social Media Marketing</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Advertising</a>
                                                    </li>

                                                </ul>
                                            </div>
                                            <div>
                                                <a href="library.html" class="btn btn-block text-center btn-secondary">Library</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 p-0">
                                        <div class="p-24pt d-flex h-100 flex-column">
                                            <div class="flex">
                                                <h5 class="text-black-100">Learning Paths</h5>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media text-black-100">
                                                        <img src="assets/images/paths/angular_40x40@2x.png" width="40" height="40" alt="Angular" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title d-block mb-0">Angular</span>
                                                            <span class="text-muted text-black-70 d-flex lh-1">24 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media text-black-100">
                                                        <img src="assets/images/paths/swift_40x40@2x.png" width="40" height="40" alt="Swift" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title d-block mb-0">Swift</span>
                                                            <span class="text-muted text-black-70 d-flex lh-1">22 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media text-black-100">
                                                        <img src="assets/images/paths/react_40x40@2x.png" width="40" height="40" alt="React Native" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title d-block mb-0">React Native</span>
                                                            <span class="text-muted text-black-70 d-flex lh-1">18 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media text-black-100">
                                                        <img src="assets/images/paths/wordpress_40x40@2x.png" width="40" height="40" alt="WordPress" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title d-block mb-0">WordPress</span>
                                                            <span class="text-muted text-black-70 d-flex lh-1">13 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-24pt">
                                                    <a href="path.html" class="media text-black-100">
                                                        <img src="assets/images/paths/devops_40x40@2x.png" width="40" height="40" alt="Development Tools" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title d-block mb-0">Development Tools</span>
                                                            <span class="text-muted text-black-70 d-flex lh-1">5 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="paths.html" class="btn btn-block text-center btn-outline-secondary">Learning Paths</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div id="courses-business" class="tab-pane">
                                <div class="row no-gutters">
                                    <div class="col-md-6 p-0">
                                        <div class="p-24pt d-flex h-100 flex-column">
                                            <div class="flex">
                                                <h5 class="text-black-100">Courses</h5>
                                                <ul class="nav flex-column mb-24pt">

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Business Skills</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Productivity</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Communication</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Leadership</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Management</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Career Development</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Spreadsheets</a>
                                                    </li>

                                                </ul>
                                            </div>
                                            <div>
                                                <a href="library.html" class="btn btn-block text-center btn-secondary">Library</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 p-0">
                                        <div class="p-24pt d-flex h-100 flex-column">
                                            <div class="flex">
                                                <h5 class="text-black-100">Learning Paths</h5>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media text-black-100">
                                                        <img src="assets/images/paths/angular_40x40@2x.png" width="40" height="40" alt="Angular" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title d-block mb-0">Angular</span>
                                                            <span class="text-muted text-black-70 d-flex lh-1">24 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media text-black-100">
                                                        <img src="assets/images/paths/swift_40x40@2x.png" width="40" height="40" alt="Swift" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title d-block mb-0">Swift</span>
                                                            <span class="text-muted text-black-70 d-flex lh-1">22 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media text-black-100">
                                                        <img src="assets/images/paths/react_40x40@2x.png" width="40" height="40" alt="React Native" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title d-block mb-0">React Native</span>
                                                            <span class="text-muted text-black-70 d-flex lh-1">18 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media text-black-100">
                                                        <img src="assets/images/paths/wordpress_40x40@2x.png" width="40" height="40" alt="WordPress" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title d-block mb-0">WordPress</span>
                                                            <span class="text-muted text-black-70 d-flex lh-1">13 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-24pt">
                                                    <a href="path.html" class="media text-black-100">
                                                        <img src="assets/images/paths/devops_40x40@2x.png" width="40" height="40" alt="Development Tools" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title d-block mb-0">Development Tools</span>
                                                            <span class="text-muted text-black-70 d-flex lh-1">5 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="paths.html" class="btn btn-block text-center btn-outline-secondary">Learning Paths</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="assets/vendor/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/vendor/popper.min.js"></script>
    <script src="assets/vendor/bootstrap.min.js"></script>

    <!-- Perfect Scrollbar -->
    <script src="assets/vendor/perfect-scrollbar.min.js"></script>

    <!-- DOM Factory -->
    <script src="assets/vendor/dom-factory.js"></script>

    <!-- MDK -->
    <script src="assets/vendor/material-design-kit.js"></script>

    <!-- Fix Footer -->
    <script src="assets/vendor/fix-footer.js"></script>

    <!-- Chart.js -->
    <script src="assets/vendor/Chart.min.js"></script>

    <!-- App JS -->
    <script src="assets/js/app.js"></script>

    <!-- Highlight.js -->
    <script src="assets/js/hljs.js"></script>

    <!-- App Settings (safe to remove) -->
    <script src="assets/js/app-settings.js"></script>




</body>

</html>