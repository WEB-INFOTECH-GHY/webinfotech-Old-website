<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Contact Us</title>
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <?php include 'include/header.php' ?>
    <section class="page-title">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Title -->
                <div class="title-column col-md-6 col-sm-8 col-xs-12">
                    <h1>Contact Us</h1>
                </div>
                <!--Bread Crumb -->
                <div class="breadcrumb-column col-md-6 col-sm-4 col-xs-12">
                    <ul class="bread-crumb clearfix">
                        <li><a href="/">Home</a></li>
                        <li class="active">Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-section">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Info Container-->
                <div class="info-column col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <h2>Contact Info</h2>
                        <ul class="contact-info">
                            <li class="map">
                                <div class="icon-box"><span class="flaticon-placeholder"></span></div>
                                <h4>Address</h4>
                                3rd Floor, House No. - 03, Rajbari Path, Dispur, Ganeshguri, Guwahati, Assam 781005
                            </li>
                            <li>
                                <div class="icon-box"><span class="">@</span></div>
                                <h4>E-mail</h4><a href="mailto:info@webinfotech.net.in" style="color:black;"> info@webinfotech.net.in</a><br>
                                <a href="mailto:webinfotech014@gmail.com" style="color:black;"> webinfotech014@gmail.com</a>
                            </li>
                            <li class="phone">
                                <div class="icon-box"><span class="flaticon-technology"></span></div>
                                <h4>Phone</h4><a href="tel:7086030335" style="color:black;">+91-7086030335 </a><br><a href="tel:9706868355" style="color:black;">+91-9706868355</a>
                            </li>


                        </ul>
                    </div>
                </div>
                <!--Form Column-->
                <div class="form-column col-md-6 col-sm-12 col-xs-12">
                    <h2>Send Message</h2>
                    <!--Contact Form-->
                    <div class="contact-form">
                        <form method="post" action="https://formspree.io/f/xbjegqdg" id="contact-form">
                            <div class="row clearfix">

                                <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                    <input type="text" name="name" value="" placeholder="Your Name *" required>
                                </div>

                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" name="email" value="" placeholder="Your Email">
                                </div>
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="mobile" value="" placeholder="Your Phone No *" minlength="10" maxlength="10" required>
                                </div>

                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <textarea name="reference" placeholder="Your Message"></textarea>
                                    <input type="hidden" id="pageurl" name="pageurl" value="<?= basename($_SERVER['PHP_SELF']) ?>">
                                </div>
                                <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                    <div class="g-recaptcha" data-sitekey="6LcegrIZAAAAABzt38kC6xbbt9SAy8KrtvfhLgPR"></div>
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <button type="submit" class="theme-btn btn-style-one">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--End Contact Form-->
                </div>
            </div>
        </div>
    </section>
    <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14325.564754994903!2d91.7828246!3d26.1513865!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375a593aa90f7a7d%3A0x2532da64bdc5134f!2sWeb%20Infotech!5e0!3m2!1sen!2sin!4v1682488645880!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <?php include 'include/footer.php' ?>