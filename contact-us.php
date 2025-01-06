<?php
   include_once('include/head.php');
?>

<style>
    .card{
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
            <path class="elementor-shape-fill" d="M761.9,40.6L643.1,24L333.9,93.8L0.1,1H0v99h1000V1"/>
        </svg>
    </div>

    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="display-about mb-4 wow fadeInDown" data-wow-delay="0.1s">Contact Us</h4>
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
            <div class="container-fluid">
                <div class="row py-5">
                    <div class="col-xl-12 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="about-item-content text-center rounded h-100">
                            <h1 class="display-4 mb-4">We would love to hear from you</h1>
                            <p>Whether you have a question about features, trials, pricing, need a demo, or anything else, our team is ready to answer all your questions.
                            </p>
                           
                        </div>
                    </div>
                    
                    <div class="col-xl-3 mb-4">
                        <div class="card card-carr">
                            <div class="card-body">
                               <center>
                                    <img src="img/call.webp" class="career-img">
                               </center>
                                <h4 class="text-center mb-4">Call</h4>
                                <a href="tel+917078647773" style="color: #000;" target="_blank">
                                <p class="text-center">+91-7078647773</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 mb-4">
                        <div class="card card-carr">
                            <div class="card-body">
                                <center>
                                    <img src="img/whatsapp.webp" class="career-img">
                                </center>
                                <h4 class="text-center mb-4">Whatsapp</h4>
                                <p class="text-center"><a href="https://api.whatsapp.com/send/?phone=%2B917078647773&text&type=phone_number&app_absent=0" style="color: #000;" target="_blank">+91-7078647773</a></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 mb-4">
                        <div class="card card-carr">
                            <div class="card-body">
                                <center>
                                    <img src="img/email.webp" class="career-img">
                                </center>
                                <h4 class="text-center mb-4">Email Id</h4>
                                <p class="text-center"><a href="mailto:support@wrencho.in" style="color: #000;" target="_blank">support@wrencho.in</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 mb-4">
                        <div class="card card-carr">
                            <div class="card-body">
                                <center>
                                    <img src="img/whatsapp.webp" class="career-img">
                                </center>
                                <h4 class="text-center mb-4">Address</h4>
                                <p class="text-center">IT-01, IT Park,      Sahastradhara Road, Dehradun, 248001</p>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <div class="row py-5">
                    <div class="col-xl-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3442.8030906299505!2d78.08230907464515!3d30.35654560371775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3908d76c2682a30f%3A0xa9c29d6498703a05!2sSoftware%20Technology%20Parks%20of%20India%20(STPI)!5e0!3m2!1sen!2sin!4v1731655198969!5m2!1sen!2sin"  height="450" style="border:0; width: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-xl-6">
                        <div class="col-xl-12 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="about-item-content text-center rounded h-100">
                            <h1 class="display-4 mb-4">Have a Question? We’re Here to Help!</h1>
                            <p>Our support team is just a message away. Fill out the form below, and we’ll be in touch shortly to answer any of your questions or concerns.
                            </p>
                           
                        </div>
                        
                        <form>
          <div class="row mb-3">
            <div class="col-md-6">
              <label for="name" class="form-label">Full Name</label>
              <input type="text" class="form-control" id="name" placeholder="Enter your full name" required>
            </div>
            <div class="col-md-6">
              <label for="email" class="form-label">Email Address</label>
              <input type="email" class="form-control" id="email" placeholder="Enter your email address" required>
            </div>
          </div>
          <div class="mb-3">
            <label for="subject" class="form-label">Subject</label>
            <input type="text" class="form-control" id="subject" placeholder="Enter the subject" required>
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" rows="3" placeholder="Write your message here..." required></textarea>
          </div>
          <div>
              <center>
                  <button type="submit" class="btn btn-primary" style="width: 50%">Submit</button>
              </center>
          </div>
        </form>
        
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