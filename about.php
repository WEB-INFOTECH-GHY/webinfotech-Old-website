<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>About Us | Webinfotech</title>
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="Web Infotech is the most trusted website development and digital marketing company in guwahati assam (india)">
    <meta name="title" content="Website Development Company | Website design | Mobile app development">
    <meta name="keywords" content="Website designing company in guwahati">
    <?php include 'include/header.php' ?>
    <section class="page-title">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Title -->
                <div class="title-column col-md-6 col-sm-8 col-xs-12">
                    <h1>About Us</h1>
                </div>
                <!--Bread Crumb -->
                <div class="breadcrumb-column col-md-6 col-sm-4 col-xs-12">
                    <ul class="bread-crumb clearfix">
                        <li><a href="/">Home</a></li>
                        <li class="active">About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="business-section alternate">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="image-column col-md-5 col-sm-12 col-xs-12">
                    <div class="image">
                        <img src="images/resource/business-3.png" alt="">
                    </div>
                </div>
                <div class="content-column col-md-7 col-sm-12 col-xs-12">
                    <div class="inner-content">
                        <div class="text small_head">Creativity Can Light Your Brand</div>
                        <h2>We Believe in the Power of Creativity to Solve Problems</h2>
                        <p class="para">“Convert Business into a brand” is what we have embraced as our tag-line. By this we strive to convey a message to our customers that whatever we deliver we deliver the best. Our services are always aimed at improving your business strategy and eventually building it so strong so that it turns to a brand. In a diverse technical world, the wide array of choices for technology makes things even more complex, when the primary objective of technology implementation is to make things simpler. We strongly believe that there should exists no division in business and technology, therefore, we first try to understand your business operations, functions, your organization objective and this is what allows us to develop simple yet cost-effective solutions.</p>
                    </div>
                </div>
                <div class="content-column col-md-12 col-sm-12 col-xs-12">
                    <h1 class="para111">Being one of the best IT Companies in Guwahati devoted to technology and bottom line results, we continue to strive for new, simpler ways to achieve results. We spare no effort to extend our knowledge-base and improve the level of expertise we provide to our each and every client. We also believe in learning from experiment reason wise we are never at the back foot while accepting new challenges. What makes us the best is our 8 long years of experience in this field of providing IT services and solution across entire Assam, India and Guwahati locally.</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="counter-section">
        <div class="outer-section clearfix">
            <!--Content Column-->
            <div class="content-column">
                <div class="content-inner">
                    <h3 class="mission">OUR MISSION</h3>
                    <p class="mission_p">Our mission is to revolutionize the plane of online business areas. We strive to include one and all in online businesses that are in business operations locally. Our motto is to make something different that touches lives and influences others. We are a company dedicated to ensuring ceaseless improvement in the businesses we cater our services to and we always strive to do that with quality in an ethical manner. We strive for growth and progress, be it in our business or the businesses we cater our services too.</p>
                    <h3 class="mission">OUR VISION</h3>
                    <p class="mission_p">Having an online presence is of utmost necessities in today’s fast paced lifestyle where people wish to get all the information on their 6 inches screen. No matter how much the business thrives offline, no one can deny the fact that there has been a manifold increase in online users and by just having an offline presence a business may lose some valuable customers who are searching for them online. Our vision is to help people transform their ideas into technology that creates a positive impact on people’s lives. We want to be the go-to technology partner for businesses, enterprises and entrepreneurs where they can unleash the potential of their ideas and positively shape the future we live in.</p>
                </div>
            </div>

        </div>
    </section>
    <section class="contact-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-md-2 col-sm-12 col-xs-12">
                </div>
                <!--Form Column-->
                <div class="form-column col-md-8 col-sm-12 col-xs-12">
                    <!-- <div class="text">CONTACT US</div>    -->
                    <h2> Don’t Hesitate to
                        contact with us for any
                        kind of information</h2>

                    <!--Contact Form-->
                    <div class="contact-form">
                        <form method="post" action="SendGrid-API/send-request.php" id="contact-form">
                            <div class="row clearfix">

                                <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                    <input type="text" name="name" value="" placeholder="Your Name *" required>
                                </div>

                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="mobile" value="" placeholder="Your Phone No *" maxlength="10" minlength="10" required>
                                </div>
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" name="email" value="" placeholder="Your Email">
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
                <div class="col-md-2 col-sm-12 col-xs-12">
                </div>
            </div>
        </div>
    </section>
    <?php include 'include/footer.php' ?>