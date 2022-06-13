<section>
    <!-- Start Breadcrumb 
============================================= -->
<div class="breadcrumb-area bg-gradient text-center">
    <!-- Fixed BG -->
    <div class="fixed-bg" style="background-image: url({{ asset('landing/assets/img/shape/9.png') }});"></div>
    <!-- Fixed BG -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1>Contact Us</h1>
                <ul class="breadcrumb">
                    <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li class="active">Contact</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start Contact Area  
============================================= -->
<div id="contact" class="contact-us-area default-padding">
    <div class="container">
        <div class="contact-items">
            <div class="row">

                <div class="col-lg-7 wow address-box fadeInUp bg-cover"
                    style="background-image: url({{ asset('landing/assets/img/2440x1578.png') }});">
                    <div class="address-info">
                        <ul>
                            <li>
                                <h5><i class="flaticon-call"></i> Phone</h5>
                                <span>+44-20-7328-4499</span>
                            </li>
                            <li>
                                <h5><i class="flaticon-email"></i> Email</h5>
                                <span>info@healdi.com</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-5 wow fadeInLeft contact-form-box">
                    <h2>Need help? <strong>Let's ask your questions</strong></h2>
                    <form action="assets/mail/contact.php" method="POST" class="contact-form">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group comments">
                                    <textarea class="form-control" id="comments" name="comments" placeholder="Tell Us About Project *"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" name="submit" id="submit">
                                    Send Message
                                </button>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-lg-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- End Contact -->

<!-- Start Google Maps 
============================================= -->
<div class="maps-area">
    <div class="google-maps">
        <iframe
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11050.261470957426!2d6.127334!3d46.179307!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478c7ad8d51c605d%3A0xf61f21210e5471ef!2sParking%20Sardaigne!5e0!3m2!1sfr!2sma!4v1652890384830!5m2!1sfr!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
<!-- End Google Maps -->
</section>