<?php
include_once('include/head.php');
?>

<body>

  <?php

  include_once('include/header.php');

  include_once('admin/inc/config.php');
  if (isset($_POST['form1'])) {

    $valid = 1;
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    $dob = $_POST['dob'];
    $permanent_address = $_POST['per_address'];
    $aadhar = $_POST['aadhar'];
    $current_business = $_POST['curr_business'];
    $experience_oil_sector = $_POST['exp_oil_sector'];
    $qualification = $_POST['qualification'];
    $location_potential_area = $_POST['location_potential_area'];
    $investment = $_POST['investment'];
    $near_petrol_pump = $_POST['near_petrol_pump'];
    $residential_stay = $_POST['residential_stay'];
    $political_affiliation = $_POST['political_affiliation'];
    $photo = $_FILES['photo']['name'];
    $photo_temp = $_FILES['photo']['tmp_name'];

    if ($photo != '') {
      $ext = pathinfo($photo, PATHINFO_EXTENSION);
      $file_name = basename($photo, '.' . $ext);
      if ($ext != 'jpg' && $ext != 'png' && $ext != 'jpeg' && $ext != 'gif' && $ext != 'webp') {
        $valid = 0;
        $error_message .= 'You must have to upload jpg, jpeg, gif or png file<br>';
      }
    } else {
      $valid = 0;
      $error_message .= 'You must have to select Image<br>';
    }

    if ($valid == 1) {

      $statement = $pdo->prepare("INSERT into partnership_inquiry (full_name,email,phone,age,dob,permanent_address,aadhar,current_business,exp_oil_sector,qualification,location_potential_area,investment,near_petrol_pump,residential_stay,political_affiliation,photo) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
      if ($statement->execute(array($full_name, $email, $phone, $age, $dob, $permanent_address, $aadhar, $current_business, $experience_oil_sector, $qualification, $location_potential_area, $investment, $near_petrol_pump, $residential_stay, $political_affiliation, $photo))) {
        move_uploaded_file($photo_temp, 'admin/assets/images/partnership-inquiry-image/' . $photo);
        $success_message = 'Partnership Inquiry application has been submitted successfully.';
      } else {
        $error_message = 'Partnership inquiry submission Failed!';
      }
    }
  }

  if (isset($_POST['form'])) {

    $registered_as = $_POST['registered_as'];
    $state  = $_POST['state'];
    $district  = $_POST['district'];
    $full_name  = $_POST['full_name'];
    $father_name  = $_POST['father_name'];
    $dob  = $_POST['dob'];
    $email  = $_POST['email'];
    $phone  = $_POST['phone'];
    $permanent_address  = $_POST['permanent_address'];
    $business_address  = $_POST['business_address'];
    $experience_oil_sector  = $_POST['experience_oil_sector'];
    $nearest_petrol_pump  = $_POST['nearest_petrol_pump'];
    $politicial_affiliation  = $_POST['politicial_affiliation'];
    $investment_plan  = $_POST['investment_plan'];
    $transaction_refrence_number  = $_POST['transaction_refrence_number'];
    $pan_number  = $_POST['pan_number'];
    $aadhar  = $_POST['aadhar'];
    $driving_license  = $_POST['driving_license'];
    $reg_num_two_wheeler  = $_POST['reg_num_two_wheeler'];

    $payment_proof  = $_FILES['payment_proof']['name'];
    $payment_proof_tmp  = $_FILES['payment_proof']['tmp_name'];

    $pan_image  = $_FILES['pan_image']['name'];
    $pan_image_tmp  = $_FILES['pan_image']['tmp_name'];

    $aadhar_image  = $_FILES['aadhar_image']['name'];
    $aadhar_image_tmp  = $_FILES['aadhar_image']['tmp_name'];

    $driving_license_image  = $_FILES['driving_license_image']['name'];
    $driving_license_image_tmp  = $_FILES['driving_license_image']['tmp_name'];

    $reg_certificate_image  = $_FILES['reg_certificate_image']['name'];
    $reg_certificate_image_tmp  = $_FILES['reg_certificate_image']['tmp_name'];

    $passport_photo  = $_FILES['passport_photo']['name'];
    $passport_photo_tmp  = $_FILES['passport_photo']['tmp_name'];

    if ($payment_proof != '') {
      $ext = pathinfo($payment_proof, PATHINFO_EXTENSION);
      $file_name = basename($payment_proof, '.' . $ext);
      if ($ext != 'jpg' && $ext != 'png' && $ext != 'jpeg' && $ext != 'gif' && $ext != 'webp') {
        $valid = 0;
        $error_message1 .= 'You must have to upload jpg, jpeg, gif or png file<br>';
      }
    } else {
      $valid = 0;
      $error_message1 .= 'You must have to select payment proof Image<br>';
    }

    if ($pan_image != '') {
      $ext = pathinfo($pan_image, PATHINFO_EXTENSION);
      $file_name = basename($pan_image, '.' . $ext);
      if ($ext != 'jpg' && $ext != 'png' && $ext != 'jpeg' && $ext != 'gif' && $ext != 'webp') {
        $valid = 0;
        $error_message1 .= 'You must have to upload jpg, jpeg, gif or png file<br>';
      }
    } else {
      $valid = 0;
      $error_message1 .= 'You must have to select pan card Image<br>';
    }

    if ($aadhar_image != '') {
      $ext = pathinfo($aadhar_image, PATHINFO_EXTENSION);
      $file_name = basename($aadhar_image, '.' . $ext);
      if ($ext != 'jpg' && $ext != 'png' && $ext != 'jpeg' && $ext != 'gif' && $ext != 'webp') {
        $valid = 0;
        $error_message1 .= 'You must have to upload jpg, jpeg, gif or png file<br>';
      }
    } else {
      $valid = 0;
      $error_message1 .= 'You must have to select aadhar card Image<br>';
    }

    if ($driving_license_image != '') {
      $ext = pathinfo($driving_license_image, PATHINFO_EXTENSION);
      $file_name = basename($driving_license_image, '.' . $ext);
      if ($ext != 'jpg' && $ext != 'png' && $ext != 'jpeg' && $ext != 'gif' && $ext != 'webp') {
        $valid = 0;
        $error_message1 .= 'You must have to upload jpg, jpeg, gif or png file<br>';
      }
    } else {
      $valid = 0;
      $error_message1 .= 'You must have to select driving license Image<br>';
    }

    if ($reg_certificate_image != '') {
      $ext = pathinfo($reg_certificate_image, PATHINFO_EXTENSION);
      $file_name = basename($reg_certificate_image, '.' . $ext);
      if ($ext != 'jpg' && $ext != 'png' && $ext != 'jpeg' && $ext != 'gif' && $ext != 'webp') {
        $valid = 0;
        $error_message1 .= 'You must have to upload jpg, jpeg, gif or png file<br>';
      }
    } else {
      $valid = 0;
      $error_message1 .= 'You must have to select registration certificate Image<br>';
    }

    if ($passport_photo != '') {
      $ext = pathinfo($reg_certificate_image, PATHINFO_EXTENSION);
      $file_name = basename($reg_certificate_image, '.' . $ext);
      if ($ext != 'jpg' && $ext != 'png' && $ext != 'jpeg' && $ext != 'gif' && $ext != 'webp') {
        $valid = 0;
        $error_message1 .= 'You must have to upload jpg, jpeg, gif or png file<br>';
      }
    } else {
      $valid = 0;
      $error_message1 .= 'You must have to select Passport Image<br>';
    }

    $statement = $pdo->prepare("INSERT into apply_partnership (registered_as,state,district,full_name,father_name,dob,email,phone,permanent_address,business_address,experience_oil_sector,nearest_petrol_pump,politicial_affiliation,investment_plan,transaction_refrence_number,payment_proof,pan_number,pan_image,aadhar,aadhar_image,driving_license,driving_license_image,reg_num_two_wheeler,reg_certificate_image,passport_photo) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    if ($statement->execute(array($registered_as, $state, $district, $full_name, $father_name, $dob, $email, $phone, $permanent_address, $business_address, $experience_oil_sector, $nearest_petrol_pump, $politicial_affiliation, $investment_plan, $transaction_refrence_number, $payment_proof, $pan_number, $pan_image, $aadhar, $aadhar_image, $driving_license, $driving_license_image, $reg_num_two_wheeler, $reg_certificate_image, $passport_photo))) {
      move_uploaded_file($aadhar_image_tmp, 'admin/assets/images/apply-partnership-image/aadhar/' . $aadhar_image);
      move_uploaded_file($driving_license_image_tmp, 'admin/assets/images/apply-partnership-image/driving/' . $driving_license_image);
      move_uploaded_file($pan_image_tmp, 'admin/assets/images/apply-partnership-image/pan/' . $pan_image);
      move_uploaded_file($passport_photo_tmp, 'admin/assets/images/apply-partnership-image/passport-photo/' . $passport_photo);
      move_uploaded_file($payment_proof_tmp, 'admin/assets/images/apply-partnership-image/payment/' . $payment_proof);
      move_uploaded_file($reg_certificate_image_tmp, 'admin/assets/images/apply-partnership-image/registration-certificate/' . $reg_certificate_image);
      $success_message1 = 'Apply for Partnership Inquiry application has been submitted successfully.';
    } else {
      $error_message1 = 'Partnership inquiry submission Failed!';
      die('pdo not working');
    }
  }

  ?>

  <!-- Header Start -->
  <div class="container-fluid bg-breadcrumb" style="background: url('img/electric-car-charging-1.webp'); background-size: cover;">
    <div class="overlay"></div>
    <div class="elementor-shape elementor-shape-bottom" data-negative="true">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" fill="white">
        <path class="elementor-shape-fill" d="M761.9,40.6L643.1,24L333.9,93.8L0.1,1H0v99h1000V1" />
      </svg>
    </div>
    <div class="container text-center py-5" style="max-width: 900px;">
      <h4 class="display-about mb-4 wow fadeInDown" data-wow-delay="0.1s">Become a Partner</h4>

    </div>
  </div>
  <!-- Header End -->

  <!-- Service Start -->
  <div class="container-fluid service">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-7">
          <!-- Nav Pills -->
          <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="partnership-inquiry-tab" data-bs-toggle="pill" data-bs-target="#partnership-inquiry" type="button" role="tab" aria-controls="partnership-inquiry" aria-selected="true">Partnership Inquiry</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="apply-partnership-tab" data-bs-toggle="pill" data-bs-target="#apply-partnership" type="button" role="tab" aria-controls="apply-partnership" aria-selected="false">Apply for Partnership</button>
            </li>
          </ul>

          <!-- Tab Content -->
          <div class="tab-content" id="pills-tabContent">
            <!-- Partnership Inquiry Form -->
            <div class="tab-pane fade show active" id="partnership-inquiry" role="tabpanel" aria-labelledby="partnership-inquiry-tab">
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
              <form action="" method="POST" enctype="multipart/form-data">
                <div class="row mb-3">
                  <div class="col-md-6">
                    <label for="fullName" class="form-label">Full Name</label>
                    <input type="text" class="form-control" name="full_name" id="fullName" placeholder="Sanjay Kumar" required>
                  </div>
                  <div class="col-md-6">
                    <label for="age" class="form-label">Age</label>
                    <input type="number" class="form-control" name="age" id="age" placeholder="30" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <label for="dob" class="form-label">Date of Birth</label>
                    <input type="date" class="form-control" name="dob" id="dob" placeholder="1992-05-15" required>
                  </div>
                  <div class="col-md-6">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="sanjay.kumar@example.com" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="tel" class="form-control" name="phone" id="phone" placeholder="+91 9876543210" required>
                  </div>
                  <div class="col-md-6">
                    <label for="address" class="form-label">Permanent Address</label>
                    <input type="text" class="form-control" name="per_address" id="address" placeholder="123, MG Road, Delhi" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <label for="aadhaar" class="form-label">Aadhaar Number</label>
                    <input type="text" class="form-control" name="aadhar" id="aadhaar" placeholder="1234 5678 9012" required>
                  </div>
                  <div class="col-md-6">
                    <label for="business" class="form-label">Current Business/Occupation</label>
                    <input type="text" class="form-control" name="curr_business" id="business" placeholder="Retail Business" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <label for="experience" class="form-label">Any Experience in Oil Sector</label>
                    <div>
                      <input type="radio" class="form-check-input" id="individual" name="exp_oil_sector" value="Yes" required>
                      <label for="individual" class="form-check-label">Yes</label>
                    </div>
                    <div>
                      <input type="radio" class="form-check-input" id="company" name="exp_oil_sector" value="No" required>
                      <label for="company" class="form-check-label">No</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label for="qualification" class="form-label">Qualification</label>
                    <input type="text" name="qualification" class="form-control" id="qualification" placeholder="B.Tech in Mechanical Engineering" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <label for="location" class="form-label">Location of the Potential Area</label>
                    <input type="text" name="location_potential_area" class="form-control" id="location" placeholder="Andheri West, Mumbai" required>
                  </div>
                  <div class="col-md-6">
                    <label for="investment" class="form-label">Investment You Wish to Make</label>
                    <input type="text" name="investment" class="form-control" id="investment" placeholder="₹10,00,000" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <label for="distance" class="form-label">Distance from Nearest Petrol Pump</label>
                    <input type="text" name="near_petrol_pump" class="form-control" id="distance" placeholder="2 km" required>
                  </div>
                  <div class="col-md-6">
                    <label for="residence" class="form-label">Years of Residential Stay in the Area</label>
                    <input type="text" name="residential_stay" class="form-control" id="residence" placeholder="10 years" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <label for="political" class="form-label">Political Affiliations, if any</label>
                    <div>
                      <input type="radio" class="form-check-input" id="individual" name="political_affiliation" value="Yes" required>
                      <label for="individual" class="form-check-label">Yes</label>
                    </div>
                    <div>
                      <input type="radio" class="form-check-input" id="company" name="political_affiliation" value="No" required>
                      <label for="company" class="form-check-label">No</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label for="photo" class="form-label">Upload Your Passport Size Photo</label>
                    <input type="file" name="photo" class="form-control" id="photo" placeholder="Upload a recent passport-size photo" required>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" name="form1" class="btn btn-primary">Submit Inquiry</button>
                </div>
              </form>

            </div>

            <!-- Apply for Partnership Form -->
            <div class="tab-pane fade" id="apply-partnership" role="tabpanel" aria-labelledby="apply-partnership-tab">
              <?php if ($error_message1): ?>
                <div class="callout callout-danger">
                  <p>
                    <?php echo $error_message1; ?>
                  </p>
                </div>
              <?php endif; ?>
              <?php if ($success_message1): ?>
                <div class="callout callout-success">
                  <p><?php echo $success_message1; ?></p>
                </div>
              <?php endif; ?>
              <form method="POST" action="" enctype="multipart/form-data">
                <div class="row mb-3">
                  <div class="col-md-6">
                    <label class="form-label">Registered As</label>
                    <div>
                      <input type="radio" class="form-check-input" id="individual" name="registered_as" value="Individual" required>
                      <label for="individual" class="form-check-label">Individual</label>
                    </div>
                    <div>
                      <input type="radio" class="form-check-input" id="company" name="registered_as" value="Company" required>
                      <label for="company" class="form-check-label">Company</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label for="state" class="form-label">Your State</label>
                    <input type="text" name="state" class="form-control" id="state" placeholder="Enter your state" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <label for="district" class="form-label">Your District</label>
                    <input type="text" name="district" class="form-control" id="district" placeholder="Enter your district" required>
                  </div>
                  <div class="col-md-6">
                    <label for="fullNameApply" class="form-label">Full Name</label>
                    <input type="text" name="full_name" class="form-control" id="fullNameApply" placeholder="Enter your full name" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <label for="ageApply" class="form-label">Father's Name</label>
                    <input type="text" name="father_name" class="form-control" id="ageApply" placeholder="Enter your father's name" required>
                  </div>
                  <div class="col-md-6">
                    <label for="dobApply" class="form-label">Date of Birth</label>
                    <input type="date" name="dob" class="form-control" id="dobApply" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <label for="emailApply" class="form-label">Email Address</label>
                    <input type="email" name="email" class="form-control" id="emailApply" placeholder="Enter your email" required>
                  </div>
                  <div class="col-md-6">
                    <label for="phoneApply" class="form-label">Phone</label>
                    <input type="tel" name="phone" class="form-control" id="phoneApply" placeholder="Enter your phone number" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-12">
                    <label for="addressApply" class="form-label">Permanent Address</label>
                    <input type="text" name="permanent_address" class="form-control" id="addressApply" placeholder="Enter your address" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col-md-6">
                    <label for="emailApply" class="form-label">Business Address</label>
                    <input type="text" name="business_address" class="form-control" id="emailApply" placeholder="Enter business address" required>
                  </div>
                  <div class="col-md-6">
                    <label for="phoneApply" class="form-label">Any Experience in Oil Sector</label>
                    <input type="tel" name="experience_oil_sector" class="form-control" id="phoneApply" placeholder="Enter experience in oil sector" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col-md-6">
                    <label for="emailApply" class="form-label">Distance from nearest petrol pump</label>
                    <input type="text" name="nearest_petrol_pump" class="form-control" id="emailApply" placeholder="near petrol pump" required>
                  </div>
                  <div class="col-md-6">
                    <label for="phoneApply" class="form-label">Political Affiliations if any</label>
                    <input type="tel" name="politicial_affiliation" class="form-control" id="phoneApply" placeholder="Political affiliation" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col-md-6">
                    <label for="emailApply" class="form-label">Your Investment Plan</label>
                    <input type="text" name="investment_plan" class="form-control" id="emailApply" placeholder="Enter investment plan" required>
                  </div>
                  <div class="col-md-6">
                    <label for="phoneApply" class="form-label">Transaction reference Number</label>
                    <input type="tel" name="transaction_refrence_number" class="form-control" id="phoneApply" placeholder="Enter transaction refrence number" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col-md-6">
                    <label for="emailApply" class="form-label">Upload Your Payment Proof (₹2100) </label>
                    <input type="file" name="payment_proof" class="form-control" id="emailApply" placeholder="Enter your email" required>
                  </div>
                  <div class="col-md-6">
                    <label for="phoneApply" class="form-label">PAN Number</label>
                    <input type="text" name="pan_number" class="form-control" id="phoneApply" placeholder="Enter pan number" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col-md-6">
                    <label for="emailApply" class="form-label">Upload Your PAN Card</label>
                    <input type="file" name="pan_image" class="form-control" id="emailApply" placeholder="Enter your email" required>
                  </div>
                  <div class="col-md-6">
                    <label for="phoneApply" class="form-label">Adhaar Number</label>
                    <input type="text" name="aadhar" class="form-control" id="phoneApply" placeholder="Enter aadhar number" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col-md-6">
                    <label for="emailApply" class="form-label">Upload Your Adhaar Card</label>
                    <input type="file" name="aadhar_image" class="form-control" id="emailApply" placeholder="Enter your email" required>
                  </div>
                  <div class="col-md-6">
                    <label for="phoneApply" class="form-label">Driving License</label>
                    <input type="text" name="driving_license" class="form-control" id="phoneApply" placeholder="Enter driving license" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col-md-6">
                    <label for="emailApply" class="form-label">Upload Your Driving License</label>
                    <input type="file" name="driving_license_image" class="form-control" id="emailApply" placeholder="Enter your email" required>
                  </div>
                  <div class="col-md-6">
                    <label for="phoneApply" class="form-label">Registration certificate No. of two wheeler </label>
                    <input type="text" name="reg_num_two_wheeler" class="form-control" id="phoneApply" placeholder="Enter registration certificate" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col-md-6">
                    <label for="emailApply" class="form-label">Upload Your Registration Certificate</label>
                    <input type="file" name="reg_certificate_image" class="form-control" id="emailApply" placeholder="Enter your email" required>
                  </div>
                  <div class="col-md-6">
                    <label for="phoneApply" class="form-label">Upload Your Passport Size Photo</label>
                    <input type="file" name="passport_photo" class="form-control" id="phoneApply" placeholder="Enter your phone number" required>
                  </div>
                </div>

                <div class="text-center">
                  <button type="submit" name="form" class="btn btn-primary">Apply</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="card" style="border-radius: 10px 10px 10px 10px;
    box-shadow: 0px 2px 15px 5px rgba(0, 0, 0, 0.5); margin-top: 20px;">
            <div class="card-body">
              <h3 class="mt-4 text-center">Payment Details</h3>
              <p class="mb-2">Please make your payments using one of the following methods:</p>
              <p class="mb-4">Please include your transaction reference number in the form after completing the payment.</p>

              <ul class="mb-4">
                <li><b>UPI Payment:-</b>
                  <p>UPI ID:- </p>
                </li>
                <li><b>Bank Transfer:-</b>
                  <p>Bank Details for NEFT/RTGS/IMPS:</p>
                  <ol>
                    <li>Account Name: </li>
                    <li>Account Number:</li>
                    <li>Bank:</li>
                    <li>Branch:</li>
                    <li>IFSC Code:</li>
                  </ol>
                </li>
              </ul>
              <p class="mb-4">
                Please include your transaction reference number in the form after completing the payment.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Service End -->


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

  <?php
  include_once('include/footer.php');
  ?>

</body>

</html>