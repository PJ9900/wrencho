<?php
include_once('include/head.php');
?>

<style>
    .card {
        margin: 5px;
    }
</style>

<body>

    <?php
    include_once('include/header.php');
    ?>


    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb position-relative" style="background: url('img/12622-scaled.webp'); background-size: cover;">
        <!-- Overlay -->
        <div class="overlay"></div>

        <div class="elementor-shape elementor-shape-bottom" data-negative="true">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" fill="white">
                <path class="elementor-shape-fill" d="M761.9,40.6L643.1,24L333.9,93.8L0.1,1H0v99h1000V1" />
            </svg>
        </div>

        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="display-about mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Blog</h4>
        </div>
    </div>

    <!-- Header End -->

    <style>
        .paragraph {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            /* Limit to 3 lines */
            -webkit-box-orient: vertical;
            overflow: hidden;
            font-size: 14px !important;
        }
    </style>

    <!-- About Start -->
    <div class="container-fluid about py-5">
        <div class="container-fluid">
            <div class="row py-5">
                <div class="col-xl-12 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="about-item-content text-center rounded h-100">
                        <h1 class="display-4 mb-4 text-center">Insights & Updates: Explore Our Latest Blog Posts</h1>
                        <p>Stay informed with the latest trends, expert tips, and valuable insights from our blog. Whether you're looking for industry updates, how-to guides, or in-depth analyses, our blog is your go-to source for all things related to our field. Check back regularly for fresh content that keeps you ahead of the curve!
                        </p>
                    </div>
                </div>

            </div>
            <div class="row py-5">
                <?php
                include_once('admin/inc/config.php');
                $statement = $pdo->prepare("SELECT * FROM blogs");
                $statement->execute();
                while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                ?>

                    <div class="col-xl-4">
                        <div class="card card-carr">
                            <div class="card-body">
                                <a href="blogs/<?= $row['slug'] ?>" style="color: #000;">
                                    <img src="admin/assets/images/blog-image/<?php echo $row['banner'];  ?>" class="w-100 mb-4">
                                    <h5 class="mb-2 text-center"><?= $row['name'] ?></h5>
                                    <p class="paragraph"><?= $row['short_description']; ?></p>
                                    <a href="blogs/<?= $row['slug'] ?>" class="text-center" style="color: #000;">Read More</a>
                                </a>
                            </div>
                        </div>
                    </div>

                <?php } ?>

                <!-- <div class="col-xl-4">
                    <div class="card card-carr">
                        <div class="card-body">
                            <a href="blog-detail.php" style="color: #000;">
                                <img src="https://i0.wp.com/blog.wrencho.in/wp-content/uploads/2023/04/hvbd_arfv_210723-scaled.jpg?resize=1536%2C661&ssl=1" class="w-100 mb-4">
                                <h5 class="mb-2 text-center">Most Unsafe Cars in India</h5>
                                <p class="paragraph">Discover the most unsafe cars in India with our comprehensive guide. Learn about the safety ratings given by global assessment programs like Global NCAP, ASEAN NCAP, and Euro NCAP. Find out what to look for in a car to ensure safety on the road.</p>
                                <a href="blog-detail.php" class="text-center" style="color: #000;">Read More</a>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="card card-carr">
                        <div class="card-body">
                            <a href="blog-detail.php" style="color: #000;">
                                <img src="https://i0.wp.com/blog.wrencho.in/wp-content/uploads/2023/04/hvbd_arfv_210723-scaled.jpg?resize=1536%2C661&ssl=1" class="w-100 mb-4">
                                <h5 class="mb-2 text-center">Most Unsafe Cars in India</h5>
                                <p class="paragraph">Discover the most unsafe cars in India with our comprehensive guide. Learn about the safety ratings given by global assessment programs like Global NCAP, ASEAN NCAP, and Euro NCAP. Find out what to look for in a car to ensure safety on the road.</p>
                                <a href="blog-detail.php" class="text-center" style="color: #000;">Read More</a>
                            </a>
                        </div>
                    </div>
                </div> -->

            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Footer Start -->
    <?php
    include_once('include/footer.php');
    ?>
</body>

</html>