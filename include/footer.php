<!-- Footer Start -->
<div class="container-fluid footer mt-4 pt-5 pb-5 wow fadeIn" data-wow-delay="0.2s">
    <div class="container-fluid">
        <div class="row g-5">
            <div class="col-xl-3">
                <div class="mb-5">
                    <div class="row g-4">
                        <div class="col-md-12 col-lg-12 col-xl-12">
                            <div class="footer-item">
                                <a href="index.html" class="p-0">

                                    <img src="<?php path() ?>/img/38135_WRENCHO_AK_VR-03.webp" class="w-100 h-100 mb-4" alt="Logo">
                                </a>
                                <p class="mb-4">An one stop solution for any vehicle, any place, any time at the point of need.</p>
                                <div class="footer-btn d-flex">
                                    <a class="btn btn-md-square rounded-circle me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-md-square rounded-circle me-3" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-md-square rounded-circle me-3" href="#"><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-md-square rounded-circle me-0" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3">
                <div class="mb-5">
                    <div class="row g-4">
                        <div class="col-lg-12">
                            <div class="footer-item">
                                <h4 class="mb-4 link-useful">Useful Links</h4>
                                <div class="footer-links">
                                    <a href="<?php path(); ?>/index.php"><i class="fas fa-angle-right me-2"></i> Home </a>
                                    <a href="<?php path(); ?>/about.php"><i class="fas fa-angle-right me-2"></i> About Us</a>
                                    <a href="<?php path(); ?>/contact-us"><i class="fas fa-angle-right me-2"></i> Contact Us</a>
                                    <a href="<?php path(); ?>/#"><i class="fas fa-angle-right me-2"></i> Privacy Policy</a>
                                    <a href="<?php path(); ?>/#"><i class="fas fa-angle-right me-2"></i> Term & Condition</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-xl-3">
                <div class="mb-5">
                    <div class="row g-4">
                        <div class="col-lg-12">
                            <div class="footer-item">
                                <h4 class="mb-4 link-useful">Our Location</h4>
                                <div class="footer-links">
                                    <?php
                                    include_once('admin/inc/config.php');
                                    $statement = $pdo->prepare("SELECT * FROM locations");
                                    $statement->execute();
                                    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                                    ?>
                                        <a href="<?php path() ?>/locations/<?= $row['slug'] ?>"><i class="fas fa-angle-right me-2"></i> <?php echo $row['title'] ?> </a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-xl-3">
                <div class="footer-item">
                    <h4 class="mb-2 link-useful">Subscribe Now</h4>
                    <p class="mb-3">Don’t miss our future updates! Get Subscribed Today!</p>
                    <div class="position-relative rounded-pill mb-4">
                        <input class="form-control rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email">
                        <button type="button" class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 mt-2 me-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
                            </svg></button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Copyright Start -->
<div class="container-fluid copyright py-4">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-md-6 text-center text-md-end mb-md-0">
                <span class="text-white"><a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i> A PRODUCT OF AXLEMECHANIC TECHNOLOGIES PVT. LTD.</a></span>
            </div>
            <div class="col-md-6 text-center text-md-start text-white">

                Designed and Developed By <a class="border-bottom text-white" href="https://wedigitalindia.com/">WeDigital India</a>
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->


<!-- Back to Top -->
<a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php path() ?>/lib/wow/wow.min.js"></script>
<script src="<?php path() ?>/lib/easing/easing.min.js"></script>
<script src="<?php path() ?>/lib/waypoints/waypoints.min.js"></script>
<script src="<?php path() ?>/lib/counterup/counterup.min.js"></script>
<script src="<?php path() ?>/lib/lightbox/js/lightbox.min.js"></script>
<script src="<?php path() ?>/lib/owlcarousel/owl.carousel.min.js"></script>


<!-- Template Javascript -->
<script src="<?php path() ?>/js/main.js"></script>