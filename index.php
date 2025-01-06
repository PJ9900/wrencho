<?php
include_once('include/head.php');
?>

<body>

    <?php
    include_once('include/header.php');
    ?>

    <!-- Carousel Start -->
    <div class="header-carousel owl-carousel">
        <div class="header-carousel-item ">

            <div class="elementor-shape top-shape elementor-shape-bottom" data-negative="true">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                    <path class="elementor-shape-fill" d="M761.9,40.6L643.1,24L333.9,93.8L0.1,1H0v99h1000V1" fill="white" />
                </svg>
            </div>

            <?php
            include_once('admin/inc/config.php');
            $statement = $pdo->prepare("SELECT * FROM banners");
            $statement->execute();
            while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            ?>
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row g-4 align-items-center">
                            <div class="col-lg-7 animated fadeInLeft">
                                <div class="text-sm-center text-md-start">
                                    <!-- <h4 class="text-uppercase fw-bold mb-4">MECHANICS IN MOTION</h4> -->
                                    <h3 class="display-1 mb-4"><?php echo $row['title'] ?></h3>
                                    <p class="mb-5 fs-5"><?php echo $row['description'] ?>
                                    </p>
                                    <div class="d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4">

                                        <a class="btn btn-dark rounded-pill py-3 px-4 px-md-5 ms-2" href="#">Call Now</a>
                                        <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#"> Whatsapp</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 animated fadeInRight">
                                <div class="calrousel-img" style="object-fit: cover;">
                                    <img src="admin/assets/images/banner-image/<?php echo $row['banners'] ?>" class="img-fluid w-100" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>

    </div>
    <!-- Carousel End -->

    <!-- Service Start -->
    <div class="container-fluid service">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h1 class="display-4">Services we offer</h1>
                <p class="mb-0 black">We provide the best services for our customers
                </p>
            </div>
            <div class="row g-4 justify-content-center">
                <?php
                include_once('admin/inc/config.php');
                $statement = $pdo->prepare("SELECT * FROM tbl_service");
                $statement->execute();
                while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                ?>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="admin/assets/images/services-image/<?php echo $row['photo'] ?>" class="img-fluid rounded-top w-100" alt="">
                            </div>
                            <div class="service-content p-4">
                                <div class="service-content-inner">
                                    <a href="#" class="d-inline-block h4"><?php echo $row['title'] ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/service/repair-at-location.webp" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content p-4">
                            <div class="service-content-inner">
                                <a href="#" class="d-inline-block h4">Repair at Location
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/service/washing-and-detailing.webp" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content p-4">
                            <div class="service-content-inner">
                                <a href="#" class="d-inline-block h4">Washing and Detailing
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/service/towing.webp" class="img-fluid rounded-top w-100" alt="">

                        </div>
                        <div class="service-content p-4">
                            <div class="service-content-inner">
                                <a href="#" class="d-inline-block h4">Towing</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/service/car-ac-repair.webp" class="img-fluid rounded-top w-100" alt="">

                        </div>
                        <div class="service-content p-4">
                            <div class="service-content-inner">
                                <a href="#" class="d-inline-block h4">Car AC Repair </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/service/periodic-servicing.webp" class="img-fluid rounded-top w-100" alt="">

                        </div>
                        <div class="service-content p-4">
                            <div class="service-content-inner">
                                <a href="#" class="d-inline-block h4">Periodic Servicing</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/service/pre-purchase-inspection.webp" class="img-fluid rounded-top w-100" alt="">

                        </div>
                        <div class="service-content p-4">
                            <div class="service-content-inner">
                                <a href="#" class="d-inline-block h4">Pre-purchase Inspection</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/service/denting-and-painting.webp" class="img-fluid rounded-top w-100" alt="">

                        </div>
                        <div class="service-content p-4">
                            <div class="service-content-inner">
                                <a href="#" class="d-inline-block h4">Denting and Painting </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/service/wheels-and-tyre.webp" class="img-fluid rounded-top w-100" alt="">

                        </div>
                        <div class="service-content p-4">
                            <div class="service-content-inner">
                                <a href="#" class="d-inline-block h4">Wheels and Tyres
                                </a>
                            </div>
                        </div>
                    </div>
                </div> -->
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- banner middle -->


    <div class="background">
        <div class="elementor-shape elementor-shape-top" data-negative="false" style="top: 0;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 283.5 27.8" preserveAspectRatio="xMidYMax slice" style="fill: white;">
                <path class="elementor-shape-fill" d="M0 0v6.7c1.9-.8 4.7-1.4 8.5-1 9.5 1.1 11.1 6 11.1 6s2.1-.7 4.3-.2c2.1.5 2.8 2.6 2.8 2.6s.2-.5 1.4-.7c1.2-.2 1.7.2 1.7.2s0-2.1 1.9-2.8c1.9-.7 3.6.7 3.6.7s.7-2.9 3.1-4.1 4.7 0 4.7 0 1.2-.5 2.4 0 1.7 1.4 1.7 1.4h1.4c.7 0 1.2.7 1.2.7s.8-1.8 4-2.2c3.5-.4 5.3 2.4 6.2 4.4.4-.4 1-.7 1.8-.9 2.8-.7 4 .7 4 .7s1.7-5 11.1-6c9.5-1.1 12.3 3.9 12.3 3.9s1.2-4.8 5.7-5.7c4.5-.9 6.8 1.8 6.8 1.8s.6-.6 1.5-.9c.9-.2 1.9-.2 1.9-.2s5.2-6.4 12.6-3.3c7.3 3.1 4.7 9 4.7 9s1.9-.9 4 0 2.8 2.4 2.8 2.4 1.9-1.2 4.5-1.2 4.3 1.2 4.3 1.2.2-1 1.4-1.7 2.1-.7 2.1-.7-.5-3.1 2.1-5.5 5.7-1.4 5.7-1.4 1.5-2.3 4.2-1.1c2.7 1.2 1.7 5.2 1.7 5.2s.3-.1 1.3.5c.5.4.8.8.9 1.1.5-1.4 2.4-5.8 8.4-4 7.1 2.1 3.5 8.9 3.5 8.9s.8-.4 2 0 1.1 1.1 1.1 1.1 1.1-1.1 2.3-1.1 2.1.5 2.1.5 1.9-3.6 6.2-1.2 1.9 6.4 1.9 6.4 2.6-2.4 7.4 0c3.4 1.7 3.9 4.9 3.9 4.9s3.3-6.9 10.4-7.9 11.5 2.6 11.5 2.6.8 0 1.2.2c.4.2.9.9.9.9s4.4-3.1 8.3.2c1.9 1.7 1.5 5 1.5 5s.3-1.1 1.6-1.4c1.3-.3 2.3.2 2.3.2s-.1-1.2.5-1.9 1.9-.9 1.9-.9-4.7-9.3 4.4-13.4c5.6-2.5 9.2.9 9.2.9s5-6.2 15.9-6.2 16.1 8.1 16.1 8.1.7-.2 1.6-.4V0H0z" />
            </svg>
        </div>

        <div class="elementor-shape elementor-shape-bottom-midd" data-negative="false">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 283.5 27.8" preserveAspectRatio="xMidYMax slice" style="fill: white;">
                <path class="elementor-shape-fill" d="M0 0v6.7c1.9-.8 4.7-1.4 8.5-1 9.5 1.1 11.1 6 11.1 6s2.1-.7 4.3-.2c2.1.5 2.8 2.6 2.8 2.6s.2-.5 1.4-.7c1.2-.2 1.7.2 1.7.2s0-2.1 1.9-2.8c1.9-.7 3.6.7 3.6.7s.7-2.9 3.1-4.1 4.7 0 4.7 0 1.2-.5 2.4 0 1.7 1.4 1.7 1.4h1.4c.7 0 1.2.7 1.2.7s.8-1.8 4-2.2c3.5-.4 5.3 2.4 6.2 4.4.4-.4 1-.7 1.8-.9 2.8-.7 4 .7 4 .7s1.7-5 11.1-6c9.5-1.1 12.3 3.9 12.3 3.9s1.2-4.8 5.7-5.7c4.5-.9 6.8 1.8 6.8 1.8s.6-.6 1.5-.9c.9-.2 1.9-.2 1.9-.2s5.2-6.4 12.6-3.3c7.3 3.1 4.7 9 4.7 9s1.9-.9 4 0 2.8 2.4 2.8 2.4 1.9-1.2 4.5-1.2 4.3 1.2 4.3 1.2.2-1 1.4-1.7 2.1-.7 2.1-.7-.5-3.1 2.1-5.5 5.7-1.4 5.7-1.4 1.5-2.3 4.2-1.1c2.7 1.2 1.7 5.2 1.7 5.2s.3-.1 1.3.5c.5.4.8.8.9 1.1.5-1.4 2.4-5.8 8.4-4 7.1 2.1 3.5 8.9 3.5 8.9s.8-.4 2 0 1.1 1.1 1.1 1.1 1.1-1.1 2.3-1.1 2.1.5 2.1.5 1.9-3.6 6.2-1.2 1.9 6.4 1.9 6.4 2.6-2.4 7.4 0c3.4 1.7 3.9 4.9 3.9 4.9s3.3-6.9 10.4-7.9 11.5 2.6 11.5 2.6.8 0 1.2.2c.4.2.9.9.9.9s4.4-3.1 8.3.2c1.9 1.7 1.5 5 1.5 5s.3-1.1 1.6-1.4c1.3-.3 2.3.2 2.3.2s-.1-1.2.5-1.9 1.9-.9 1.9-.9-4.7-9.3 4.4-13.4c5.6-2.5 9.2.9 9.2.9s5-6.2 15.9-6.2 16.1 8.1 16.1 8.1.7-.2 1.6-.4V0H0z" />
            </svg>
        </div>

        <div class="contact-text">
            <h2 class="text-white tex">SAVE OUR CONTACT NUMBER</h2>
            <div class="number">7078647773 7078697773</div>
        </div>
    </div>

    <!-- Feature Start -->
    <div class="container-fluid feature py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary"></h4>
                <h1 class="display-4">Why WRENCHO is the best </h1>
                <p class="mb-0 black">You will find these qualities in our services</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="feature-item p-4 pt-0">
                        <div class="feature-icon p-4">
                            <center><img src="img/responsive.webp" class="w-100 h-100"></center>
                        </div>
                        <h3 class="mb-2 text-center">Responsive</h3>
                        <p class="mb-4">Our mechanic will be at your location in less than 30 minutes .
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="feature-item p-4 pt-0">
                        <div class="feature-icon p-4">
                            <center><img src="img/trust.webp" class="w-100 h-100"></center>
                        </div>
                        <h3 class="mb-2 text-center">Trust</h3>
                        <p class="mb-4">We provide our customers with genuine parts and best automotive technicians.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="feature-item p-4 pt-0">
                        <div class="feature-icon p-4">
                            <center><img src="img/support2.webp" class="w-100 h-100"></center>
                        </div>
                        <h3 class="mb-2 text-center">Support</h3>
                        <p class="mb-4">Free of cost repair on our all serviced parts upto 48 hours.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->

    <!-- Team Start -->
    <div class="container-fluid team pb-5">
        <div class="container-fluid pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h1 class="display-4">Planet over Profit</h1>
                <p class="mb-0 black">An initiative to protect the environment</p>
            </div>
            <div class="col-md-12">
                <div class="tool">
                    <h2 class="text-center">Free Diagnostic test for your vehicle</h2>
                    <p class="text-center">Wrencho is providing a free of cost diagnostic test for vehicle owners.
                    </p>
                    <center>
                        <a href="" class="btn btn-call">Call Now</a>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <?php
    include_once('include/footer.php');
    ?>

</body>

</html>