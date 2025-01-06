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
    <?php
    include_once('admin/inc/config.php');
    $statement = $pdo->prepare("SELECT * FROM blogs where slug = ?");
    $statement->execute([$_REQUEST['slug']]);
    $row = $statement->fetch(PDO::FETCH_ASSOC);
    ?>

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb position-relative" style="background: url('<?php path(); ?>/admin/assets/images/blog-image/<?= $row['banner'] ?>'); background-size: cover;">
        <!-- Overlay -->

        <div class="elementor-shape elementor-shape-bottom" data-negative="true">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" fill="white">
                <path class="elementor-shape-fill" d="M761.9,40.6L643.1,24L333.9,93.8L0.1,1H0v99h1000V1" />
            </svg>
        </div>

        <div class="container text-center py-5" style="max-width: 900px;">
            <h2 class="mb-4 wow fadeInDown text-white" data-wow-delay="0.1s"><?php echo $row['short_description'] ?></h2>
        </div>
    </div>

    <!-- Header End -->
    <!-- About Start -->
    <div class="container-fluid about py-5">
        <div class="container-fluid">
            <p><?php echo $row['description'] ?></p>
            <!-- <p>Several cars sold in India have poor safety ratings due to various factors such as low-quality build materials, inadequate crash protection, lack of safety features, and poor structural integrity. Among the reasons why these cars are considered unsafe, some are as follows:</p>
            <p>Poor build quality: Some cars are made with low-quality materials, which makes them vulnerable to damage in the event of a crash. This can result in serious injuries to passengers.
                Lack of safety features: Many cars sold in India lack essential safety features such as airbags, ABS (anti-lock braking system), and EBD (electronic brakeforce distribution), which can greatly elevate the risks of injuries in the event of a crash.
                Poor structural integrity: Cars with poor structural integrity are more likely to crumple or collapse in the case of a crash, which can increase the risk of serious injuries to passengers.
                Lack of crash testing: Some cars sold in India have not undergone thorough crash testing, which makes it difficult to analyze their safety ratings.
                Some of the cars that have been rated as unsafe by Global NCAP and other agencies in India are:</p> -->
        </div>
    </div>

    <!-- About End -->


    <!-- Footer Start -->
    <?php
    include_once('include/footer.php');
    ?>
</body>

</html>