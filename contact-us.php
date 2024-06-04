<?php include_once('include/header.php'); ?>

<section class="about-wrap-1st" style="background-image: url(assests/img/about-banner.webp);">
    <div class="container">
        <div class="row">
            <h2>Contact Us</h2>
            <div class="breadcrumb-box">
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><i class="fa fa-angle-double-right wv_circle"></i></li>
                    <li class="active">Contact Us</li>
                </ul>
            </div>
        </div>
    </div>

</section>

<section class="wrap-contact pt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="contact-text">
                    <h4>Contact Us</h4>
                    <p><span class="rounded-icon"><i class="fa fa-map-marker"></i></span>&nbsp; C-2, Patel Nagar, IIND, Ghaziabad-201001, Uttar Pradesh, India
                    </p>
                    <p><span class="rounded-icon"><i class="fa fa-phone"></i></span>
                        +91 98702 18371
                    </p>
                    <p><span class="rounded-icon"><i class="fa-regular fa-envelope"></i></span><span>
                            info@amazinpower.com</span>
                    </p>
                    <div class="social-icons">

                        <a href=""><i class="fa-brands fa-facebook"></i></a>
                        <a href=""> <i class="fa-brands fa-instagram"></i></a>
                        <a href=""> <i class="fa-brands fa-twitter"></i></a>
                        <a href=""> <i class="fa-brands fa-linkedin"></i></a>

                    </div>

                </div>


            </div>
            <div class="col-md-7">
                <div class="contact-form shadow-lg rounded" style="padding: 20px;">
                    <form action="contact-inquiry.php" method="POST">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" aria-describedby="text" placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Email Id" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="number" class="form-control" name="phone" aria-describedby="text" placeholder="Phone Number" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="address" aria-describedby="address" placeholder="Address" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="3" placeholder="Type Message" required></textarea>
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary btn-warning">Send Message</button>
                    </form>



                </div>


            </div>


        </div>
    </div>
    <!--********-->
    <div class="pt-5"></div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3500.439510750943!2d77.41800307550238!3d28.6764964756408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjjCsDQwJzM1LjQiTiA3N8KwMjUnMTQuMSJF!5e0!3m2!1sen!2sin!4v1700487813919!5m2!1sen!2sin" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>



<?php include_once('include/footer.php'); ?>