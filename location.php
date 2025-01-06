<?php
include_once('include/head.php');
?>

<body>

    <?php
    include_once('include/header.php');

    include_once('admin/inc/config.php');
    $statement = $pdo->prepare("SELECT * FROM locations where slug = ?");
    $statement->execute([$_REQUEST['slug']]);
    $row = $statement->fetch(PDO::FETCH_ASSOC);

    ?>

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb" style="background: url('<?php path(); ?>/admin/assets/images/location/<?= $row['banner_img'] ?>'); background-size: cover;">
        <div class="overlay"></div>
        <div class="elementor-shape elementor-shape-bottom" data-negative="true">
            <svg xmlns="" viewBox="0 0 1000 100" preserveAspectRatio="none" fill="white">
                <path class="elementor-shape-fill" d="M761.9,40.6L643.1,24L333.9,93.8L0.1,1H0v99h1000V1" />
            </svg>
        </div>
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="display-about mb-4 wow fadeInDown" data-wow-delay="0.1s"><?php echo $row['title'] ?></h4>

        </div>
    </div>
    <!-- Header End -->

    <!-- Service Start -->
    <div class="container-fluid service">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6">
                    <img src="<?php path(); ?>/admin/assets/images/location/<?= $row['text_img'] ?>" class="w-100 h-100">
                </div>
                <div class="col-md-6">
                    <div class="about-item-content rounded h-100">
                        <h1 class="display-4 mb-4">Location Detail</h1>
                        <p><?php echo $row['text_editor_1'] ?></p>
                    </div>
                </div>
                <div class="col-md-12">
                    <p><?php echo $row['text_editor_2'] ?></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <?php
    include_once('include/footer.php');
    ?>

</body>

</html>