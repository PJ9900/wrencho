<?php
include_once('include/head.php');
?>

<style>
    .card {
        margin: 5px;
    }
</style>

<?php
include_once('admin/inc/config.php');
if (isset($_POST['form1'])) {

    $valid = 1;
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $current_ctc = $_POST['current_ctc'];
    $total_ex = $_POST['total_ex'];
    $resume_name = $_FILES['resume']['name'];
    $resume_size = $_FILES['resume']['size'];
    $resume_tmp = $_FILES['resume']['tmp_name'];


    if ($resume_name != '') {
        $ext = pathinfo($resume_name, PATHINFO_EXTENSION);
        $file_name = basename($resume_name, '.' . $ext);
        if ($ext != 'pdf') {
            $valid = 0;
            $error_message .= 'You must have to upload pdf file<br>';
        }
        if ($resume_size > 2097152) {
            $valid = 0;
            $error_message .= 'Resume file size must be less than 2mb<br>';
        }
    } else {
        $valid = 0;
        $error_message .= 'You must have to select Banner Image<br>';
    }


    if ($valid == 1) {

        $statement = $pdo->prepare("INSERT into career_inquiry (name,email,phone,resume,current_ctc,total_experience) VALUES(?,?,?,?,?,?)");
        if ($statement->execute(array($name, $email, $phone, $resume_name, $current_ctc, $total_ex))) {
            move_uploaded_file($resume_tmp, 'admin/assets/upload-resume/' . $resume_name);
            $success_message = 'Application has been submitted successfully.';
        } else {
            $error_message = 'Application submission Failed!';
        }
    }
}

?>

<body>

    <?php
    include_once('include/header.php');
    ?>


    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb position-relative" style="background: url('img/career.webp'); background-size: cover;">
        <!-- Overlay -->
        <div class="overlay"></div>

        <div class="elementor-shape elementor-shape-bottom" data-negative="true">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" fill="white">
                <path class="elementor-shape-fill" d="M761.9,40.6L643.1,24L333.9,93.8L0.1,1H0v99h1000V1" />
            </svg>
        </div>

        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="display-about mb-4 wow fadeInDown" data-wow-delay="0.1s"> Career</h4>
        </div>
    </div>

    <!-- CSS for the Overlay -->
    <style>
        .bg-breadcrumb {
            position: relative;
        }

        .container-fluid .container {
            position: relative;
            z-index: 2;
        }
    </style>

    <!-- Header End -->


    <!-- About Start -->
    <div class="container-fluid about py-5">
        <div class="container">
            <div class="row py-5">
                <div class="col-xl-12 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="about-item-content text-center rounded h-100">
                        <h1 class="display-4 mb-4">Be a part of our story</h1>
                        <p>We’re always looking for passionate people to join us on our mission. If you want to grow your career with us, we’d love to have you in our team.
                        </p>

                    </div>
                </div>

                <div class="col-xl-4 mb-4">
                    <div class="card card-carr">
                        <div class="card-body">
                            <center>
                                <img src="img/marketing.webp" class="career-img">
                            </center>
                            <h4 class="text-center mb-4">Marketing</h4>
                            <p class="text-center ">You will be assisting us in planning and implementing online marketing strategies, handling our social media, manage offline campaigns, writing and analyzing content for our blogs.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 mb-4">
                    <div class="card card-carr">
                        <div class="card-body">
                            <center>
                                <img src="img/coding.webp" class="career-img">
                            </center>
                            <h4 class="text-center mb-4">Product Development</h4>
                            <p class="text-center">Your primary focus will be the development of mobile applications and its integration with back-end services. Explain technologies and solutions to technical and non-technical persons.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 mb-4">
                    <div class="card card-carr">
                        <div class="card-body">
                            <center>
                                <img src="img/auto-tech.webp" class="career-img">
                            </center>
                            <h4 class="text-center mb-4">Automotive Technician</h4>
                            <p class="text-center">You have to Inspect vehicle engine and mechanical/electrical components. Provide accurate estimates (cost, time, effort) of service, Keep logs on work and issues of our users.</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row py-5">
                <div class="col-xl-6">
                    <h4>Join Our Mission, Shape Your Future</h4>
                    <p>At Wrencho, we believe that great teams build great futures. We’re always on the lookout for passionate, talented individuals who share our vision of making a difference. Whether you're an experienced professional or just starting your career journey, we offer a collaborative environment where your skills and ambitions can thrive. Take the first step toward a fulfilling career—apply now and become a part of our growing famil</p>
                </div>
                <div class="col-xl-6">
                    <?php if ($error_message): ?>
                        <div class="callout callout-danger">
                            <p>
                                <?php echo $error_message; ?>
                            </p>
                        </div>
                    <?php endif; ?>
                    <?php if ($success_message): ?>
                        <div class="callout callout-success">
                            <p><?php echo $success_message; ?></p>
                        </div>
                    <?php endif; ?>
                    <div class="card card-carr">
                        <div class="card-body">
                            <form accept="" enctype="multipart/form-data" method="POST">
                                <!-- Row 1 -->
                                <div class="row mb-3">
                                    <!-- Name -->
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name" required>
                                    </div>
                                    <!-- Email ID -->
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email ID</label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
                                    </div>
                                </div>

                                <!-- Row 2 -->
                                <div class="row mb-3">
                                    <!-- Phone Number -->
                                    <div class="col-md-6">
                                        <label for="phone" class="form-label">Phone Number</label>
                                        <input type="tel" class="form-control" name="phone" id="phone" placeholder="Enter your phone number" required>
                                    </div>
                                    <!-- Resume -->
                                    <div class="col-md-6">
                                        <label for="resume" class="form-label">Resume</label>
                                        <input type="file" class="form-control" name="resume" id="resume" accept=".pdf" required>
                                    </div>
                                </div>

                                <!-- Row 3 -->
                                <div class="row mb-3">
                                    <!-- Current CTC -->
                                    <div class="col-md-6">
                                        <label for="ctc" class="form-label">Current CTC</label>
                                        <input type="text" class="form-control" name="current_ctc" id="ctc" placeholder="Enter your current CTC" required>
                                    </div>
                                    <!-- Total Experience -->
                                    <div class="col-md-6">
                                        <label for="experience" class="form-label">Total Experience</label>
                                        <input type="text" class="form-control" name="total_ex" id="experience" placeholder="Enter your total experience" required>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="text-center">
                                    <button type="submit" name="form1" class="btn btn-primary btn-lg">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
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