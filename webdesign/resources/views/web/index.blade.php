@extends('web.layout.master')


@section('content')
    


<!-- Hero Area Start -->
<div id="home" class="hero-area">
    <div class="curve curve-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex align-self-center">
                <div class="left-content">
                    <!-- Slider Wrapper -->
                    <div class="bts-wrapper">
                        <div class="bts-container">
                            <!-- Slide 1 -->
                            <div class="bts-slide bts-active">
                                <div class="content">
                                    <h1 class="title">
                                        <span class="locate-high">Guwahati</span>’s Leading Web Design Agency for Modern
                                        Brands
                                    </h1>
                                    <p class="subtitle">
                                        Custom-crafted websites that reflect your brand’s class and drive measurable
                                        growth.
                                    </p>
                                    <div class="links">
                                        <a href="tel:7086030335" class="mybtn1"><span>Schedule a Free Consultation Today
                                                - 7086030335
                                            </span></a>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide 2 -->
                            <div class="bts-slide">
                                <div class="content">
                                    <h1 class="title">
                                        Top Web Designing Company in <span class="locate-high">Guwahati</span> for
                                        Businesses That Demand
                                        Excellence
                                    </h1>
                                    <p class="subtitle">
                                        Bespoke design. Seamless performance. Tailored for brands that value
                                        distinction.
                                    </p>
                                    <div class="links">
                                        <a href="tel:7086030335" class="mybtn1"><span>Schedule a Free Consultation Today
                                                - 7086030335
                                            </span></a>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide 3 -->
                            <div class="bts-slide">
                                <div class="content">
                                    <h1 class="title">
                                        Transform Your Online Presence with <span class="locate-high">Guwahati</span>’s
                                        Most Trusted Web
                                        Design Agency
                                    </h1>
                                    <p class="subtitle">
                                        Get a high-performing, visually stunning website designed for results — book
                                        your free consultation.
                                    </p>
                                    <div class="links">
                                        <a href="tel:7086030335" class="mybtn1"><span>Schedule a Free Consultation Today
                                                - 7086030335
                                            </span></a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Slider Dots -->
                        <div class="bts-dots">
                            <span class="bts-dot bts-dot-active"></span>
                            <span class="bts-dot"></span>
                            <span class="bts-dot"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-first order-lg-last">
                <div class="right-img">
                    <div class="banner-form">
                        {{-- <form action="https://formspree.io/f/mdkwvwdo" method="POST" class="contact-form-main">
                            <input type="hidden" name="_next"
                                value="https://home-landing.webinfoghy.co.in/thankyou.html">
                            <div class="row justify-content-center">
                                <div class="col-lg-12">
                                    <h2 class="form-hd">Feel Free to Connect With Us</h2>
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" name="name" id="name" placeholder="Enter Your Name" required>
                                </div>
                                <div class="col-lg-12">
                                    <input type="email" name="email" id="email" placeholder="Enter Your Mail" required>
                                </div>
                                <div class="col-lg-12">
                                    <input type="number" name="number" id="number" placeholder="Enter Your Number"
                                        required>
                                </div>
                                <div class="col-lg-12">
                                    <textarea name="message" id="message" placeholder="Enter Your Message"
                                        required></textarea>
                                </div>
                                <div class="col-lg-5">
                                    <button type="submit" class="submit-bf">Submit</button>
                                </div>
                            </div>
                        </form> --}}
                        <form action="{{ route('contact.store') }}" method="POST" class="contact-form-main">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" class="input-field borderd" id="name" name="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="input-field borderd" id="email" name="email"
                                        placeholder="Enter Your Email" required>
                                </div>
                                <div class="col-md-6">
                                    <input
  type="tel"
  class="input-field borderd"
  id="number"
  name="number"
  placeholder="Enter Your Number"
  pattern="[0-9]{10}"
  maxlength="10"
  title="Please enter number"
  required
>

                                </div>
                                <div class="col-12">
                                    <textarea class="input-field borderd textarea" rows="3" id="message" name="message"
                                        placeholder="Write Your Message Here" required></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="submit-bf">Submit</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero Area End -->

<!-- Marketing Section -->
<section class="marketing-section alternate">
    <div class="container">
        <div class="row justify-content-center gap-side">

            <!--Services Block Five-->
            <div class="services-block-five col-md-2 col-sm-6 col-xs-4 col-4">
                <div class="inner-box">
                    <div class="icon-box">
                        <span class="icon"><img src="{{asset('assets/images/custom/Google-Review.webp')}}" alt=""></span>
                    </div>
                </div>
            </div>

            <!--Services Block Five-->
            <div class="services-block-five col-md-2 col-sm-6 col-xs-4 col-4">
                <div class="inner-box">
                    <div class="icon-box">
                        <span class="icon"><img src="{{asset('assets/images/custom/trusted-band.webp')}}" alt=""></span>
                    </div>
                </div>
            </div>

            <!--Services Block Five-->
            <div class="services-block-five col-md-2 col-sm-6 col-xs-4 col-4">
                <div class="inner-box">
                    <div class="icon-box">
                        <span class="icon"><img src="{{asset('assets/images/custom/facebook-Review.webp')}}" alt=""></span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Marketing Section -->

<!-- About Area Start -->
<section class="about" id="about">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="section-title extra">
                    <h2 class="title">Our Process</h2>
                    <p>We follow a transparent, step-by-step approach that turns your vision into functional,
                        high-performing digital solutions.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="arrow-box">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                        xmlns:svgjs="http://svgjs.dev/svgjs" viewBox="0 0 800 800" class="arrow-svg">
                        <g stroke-width="10" stroke="hsl(230, 55%, 40%)" fill="none" stroke-linecap="round"
                            stroke-linejoin="round" stroke-dasharray="111 13"
                            transform="matrix(0.7071067811865474,-0.7071067811865477,0.7071067811865477,0.7071067811865474,-204.68542494923804,390.0000000000001)">
                            <path d="M250 250Q516 295 550 550 " marker-end="url(#SvgjsMarker1858)"></path>
                        </g>
                        <defs>
                            <marker markerWidth="8.5" markerHeight="8.5" refX="4.25" refY="4.25" viewBox="0 0 8.5 8.5"
                                orient="auto" id="SvgjsMarker1858">
                                <polygon points="0,8.5 2.8333333333333335,4.25 0,0 8.5,4.25" fill="hsl(230, 55%, 40%)">
                                </polygon>
                            </marker>
                        </defs>
                    </svg>
                </div>
                <div class="box">
                    <div class="inner-box">
                        <div class="icon">
                            <img src="{{asset('assets/images/custom/design.png')}}" alt="">
                        </div>
                        <h4 class="title">Consult</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="box">
                    <div class="inner-box">
                        <div class="icon">
                            <img src="{{asset('assets/images/custom/develop.png')}}" alt="">
                        </div>
                        <h4 class="title">Develop</h4>
                    </div>
                </div>
                <div class="arrow-box">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                        xmlns:svgjs="http://svgjs.dev/svgjs" viewBox="0 0 800 800" class="arrow-svg2">
                        <g stroke-width="10" stroke="hsl(230, 55%, 40%)" fill="none" stroke-linecap="round"
                            stroke-linejoin="round" stroke-dasharray="111 13"
                            transform="matrix(0.7193398003386509,-0.6946583704589976,0.6946583704589976,0.7193398003386509,-185.59926831905932,380.1274280481387)">
                            <path d="M250 250Q276 513 550 550 " marker-end="url(#SvgjsMarker2320)"></path>
                        </g>
                        <defs>
                            <marker markerWidth="8.5" markerHeight="8.5" refX="4.25" refY="4.25" viewBox="0 0 8.5 8.5"
                                orient="auto" id="SvgjsMarker2320">
                                <polygon points="0,8.5 2.8333333333333335,4.25 0,0 8.5,4.25" fill="hsl(230, 55%, 40%)">
                                </polygon>
                            </marker>
                        </defs>
                    </svg>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="arrow-box">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                        xmlns:svgjs="http://svgjs.dev/svgjs" viewBox="0 0 800 800" class="arrow-svg">
                        <g stroke-width="10" stroke="hsl(230, 55%, 40%)" fill="none" stroke-linecap="round"
                            stroke-linejoin="round" stroke-dasharray="111 13"
                            transform="matrix(0.7071067811865474,-0.7071067811865477,0.7071067811865477,0.7071067811865474,-204.68542494923804,390.0000000000001)">
                            <path d="M250 250Q516 295 550 550 " marker-end="url(#SvgjsMarker1858)"></path>
                        </g>
                        <defs>
                            <marker markerWidth="8.5" markerHeight="8.5" refX="4.25" refY="4.25" viewBox="0 0 8.5 8.5"
                                orient="auto" id="SvgjsMarker1858">
                                <polygon points="0,8.5 2.8333333333333335,4.25 0,0 8.5,4.25" fill="hsl(230, 55%, 40%)">
                                </polygon>
                            </marker>
                        </defs>
                    </svg>
                </div>
                <div class="box">
                    <div class="inner-box">
                        <div class="icon">
                            <img src="{{asset('assets/images/custom/delivery.png')}}" alt="">
                        </div>
                        <h4 class="title">Deliver</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="box">
                    <div class="inner-box">
                        <div class="icon">
                            <img src="{{asset('assets/images/custom/support.png')}}" alt="">
                        </div>
                        <h4 class="title">Support</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Area End -->

<!-- We are best Area Start -->
<section class="whaybest" id="feat-tech">
    <div class="curve curve-bottom"></div>
    <div class="curve curve-top"></div>
    <div class="container">
        <div class="row row-one">
            <div class="col-lg-4 d-flex">
                <div class="about-img">
                    <img src="{{asset('assets/images/custom/about-img.png')}}" alt="">
                </div>
            </div>
            <div class="col-lg-8">
                <div class="info">
                    <h2 class="info-title">
                        Amazing Web Design Features
                    </h2>
                    <p>Our designs blend creativity with technology — delivering sleek, responsive, and user-focused
                        experiences that captivate audiences.</p>
                    <ul class="feature-list feat-li">
                        <li>
                            <div class="icon">
                                <img src="{{asset('assets/images/custom/discussion.png')}}" alt="">
                            </div>
                            <div class="content">
                                <h4>Free Consultation</h4>
                            </div>
                            <div class="overlay-hover">
                                <p>Feel free to reach out to start a conversation about your business goals you’d like
                                    to accomplish.</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="{{asset('assets/images/custom/technology.png')}}" alt="">
                            </div>
                            <div class="content">
                                <h4>Advanced Technology</h4>
                            </div>
                            <div class="overlay-hover">
                                <p>We are professionals and familiar with new trends and upgraded technology.</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="{{asset('assets/images/custom/secure.png')}}" alt="">
                            </div>
                            <div class="content">
                                <h4>High security</h4>
                            </div>
                            <div class="overlay-hover">
                                <p>We provide you the best possible solution for protecting your system from intrusion.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="{{asset('assets/images/custom/branding.png')}}" alt="">
                            </div>
                            <div class="content">
                                <h4>Guaranteed Works</h4>
                            </div>
                            <div class="overlay-hover">
                                <p>We analysis your project and finalised with a guaranteed work within time frame.</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="{{asset('assets/images/custom/helpline.png')}}" alt="">
                            </div>
                            <div class="content">
                                <h4>24/7 Support</h4>
                            </div>
                            <div class="overlay-hover">
                                <p>Get in touch with our support team, we trouble shoot your query as fast we can.</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="{{asset('assets/images/custom/money.png')}}" alt="">
                            </div>
                            <div class="content">
                                <h4>Reasonable Price</h4>
                            </div>
                            <div class="overlay-hover">
                                <p>We charge lowest cost possible according to your products and services.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

        <div class="row ">
            <div class="col-lg-12">
                <div class="info">
                    <div class="round-shape"></div>
                    <h2 class="info-title">
                        Technology Expertise
                    </h2>
                    <p>We master the latest technologies and frameworks to build scalable, secure, and future-ready
                        solutions for your business.</p>
                    <ul class="tech-logo feature-list">
                        <li>
                            <div class="icon">
                                <img src="{{asset('assets/images/custom/html5.png')}}" alt="">
                            </div>
                            <div class="content">
                                <h4>HTML5</h4>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="{{asset('assets/images/custom/css3.png')}}" alt="">
                            </div>
                            <div class="content">
                                <h4>CSS3</h4>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="{{asset('assets/images/custom/js.png')}}" alt="">
                            </div>
                            <div class="content">
                                <h4>Vanilla JS</h4>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="{{asset('assets/images/custom/scss.png')}}" alt="">
                            </div>
                            <div class="content">
                                <h4>SaSS</h4>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="{{asset('assets/images/custom/reactjs.png')}}" alt="">
                            </div>
                            <div class="content">
                                <h4>React JS</h4>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="{{asset('assets/images/custom/laravel.png')}}" alt="">
                            </div>
                            <div class="content">
                                <h4>Laravel</h4>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="{{asset('assets/images/custom/reactjs.png')}}" alt="">
                            </div>
                            <div class="content">
                                <h4>React Native</h4>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="{{asset('assets/images/custom/php.png')}}" alt="">
                            </div>
                            <div class="content">
                                <h4>PHP</h4>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="{{asset('assets/images/custom/nodejs.png')}}" alt="">
                            </div>
                            <div class="content">
                                <h4>Node JS</h4>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="{{asset('assets/images/custom/vuejs.png')}}" alt="">
                            </div>
                            <div class="content">
                                <h4>Vue JS</h4>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="{{asset('assets/images/custom/bootstrap.png')}}" alt="">
                            </div>
                            <div class="content">
                                <h4>Bootstrap</h4>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="{{asset('assets/images/custom/astudio.png')}}" alt="">
                            </div>
                            <div class="content">
                                <h4>Android Studio</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--We are best Area Start -->

<!-- Package Section  -->

<section class="package-sec" id="package">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="section-title extra">
                    <h2 class="title">Our Packages</h2>
                    <p>Choose from flexible and value-driven plans designed to meet diverse business needs without
                        compromising on quality.</p>
                </div>
            </div>
        </div>

        <div class="toggle-container d-flex justify-content-center align-items-center">
            <span class="toggle-label active" id="label1">Static Package</span>
            <div class="toggle-switch" id="toggleSwitch">
                <div class="toggle-slider"></div>
            </div>
            <span class="toggle-label inactive" id="label2">Dynamic Package</span>
        </div>

        <div class="row justify-content-center">
            <!-- Package 1 Card -->
            <div class="col-md-5">
                <div class="card active" id="card1">
                    <div class="package-name">Static Plan</div>
                    <ul class="features">
                        <li><span><strong>Premium Design</strong> – Clean, modern, and user-friendly layout</span></li>
                        <li><span><strong>5 Informative Web Pages</strong> – Tailored to your business needs</span></li>
                        <li><span><strong>Fully Mobile Responsive</strong> – Looks great on all devices</span></li>
                        <li><span><strong>Cross-Browser Compatibility</strong> – Smooth performance across all major
                                browsers</span></li>
                        <li><span><strong>Call & WhatsApp Button Integration</strong> – Easy contact for your
                                visitors</span></li>
                        <li><span><strong>WhatsApp API Integration</strong> – Connect directly with customers</span>
                        </li>
                        <li><span><strong>Social Media Integration</strong> – Links to your profiles (Facebook,
                                Instagram, etc.)</span></li>
                        <li><span><strong>Enquiry Form</strong> – Let users reach you easily</span></li>
                        <li><span><strong>Domain Name for 1 Year</strong> – Professional online identity</span>
                        </li>
                        <li><span><strong>Hosting Setup for 1 Year</strong> – Fast & reliable hosting
                                included</span></li>
                        <li><span><strong>SSL Certificate</strong> – Secure and trusted website access
                                (HTTPS)</span></li>
                        <li><span><strong>1 Year Free Maintenance</strong> – We handle the tech, you focus on your
                                business</span></li>
                        <li class="n-av">
                            <span><strong>User Admin Panel</strong> – Manage website content and data easily through a
                                secure dashboard.</span>
                        </li>
                        <li class="n-av">
                            <span><strong>Regular Backups & Security</strong> – Automatic backups and protection against
                                data loss or breaches.</span>
                        </li>
                        <li class="n-av">
                            <span><strong>Daily Consultancy</strong> – Ongoing support and guidance for smooth website
                                operations.</span>
                        </li>

                    </ul>
                </div>
            </div>

            <!-- Package 2 Card -->
            <div class="col-md-5">
                <div class="card" id="card2">
                    <div class="package-name">Dynamic Plan</div>
                    <ul class="features">
                        <li><span><strong>Premium Design</strong> – Clean, modern, and user-friendly layout</span></li>
                        <li><span><strong>5 Informative Web Pages</strong> – Tailored to your business needs</span></li>
                        <li><span><strong>Fully Mobile Responsive</strong> – Looks great on all devices</span></li>
                        <li><span><strong>Cross-Browser Compatibility</strong> – Smooth performance across all major
                                browsers</span></li>
                        <li><span><strong>Call & WhatsApp Button Integration</strong> – Easy contact for your
                                visitors</span></li>
                        <li><span><strong>WhatsApp API Integration</strong> – Connect directly with customers</span>
                        </li>
                        <li><span><strong>Social Media Integration</strong> – Links to your profiles (Facebook,
                                Instagram, etc.)</span></li>
                        <li><span><strong>Enquiry Form</strong> – Let users reach you easily</span></li>
                        <li><span><strong>Domain Name for 1 Year</strong> – Professional online identity</span>
                        </li>
                        <li><span><strong>Hosting Setup for 1 Year</strong> – Fast & reliable hosting
                                included</span></li>
                        <li><span><strong>SSL Certificate</strong> – Secure and trusted website access
                                (HTTPS)</span></li>
                        <li><span><strong>1 Year Free Maintenance</strong> – We handle the tech, you focus on your
                                business</span></li>
                        <li>
                            <span><strong>User Admin Panel</strong> – Manage website content and data easily through a
                                secure dashboard.</span>
                        </li>
                        <li>
                            <span><strong>Regular Backups & Security</strong> – Automatic backups and protection against
                                data loss or breaches.</span>
                        </li>
                        <li>
                            <span><strong>Daily Consultancy</strong> – Ongoing support and guidance for smooth website
                                operations.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- Package Section  -->

<!-- Service Area start -->
<section class="feature" id="services">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="section-title">
                    <h2 class="title">What We Serve</h2>
                    <p>
                        We deliver a full spectrum of IT and digital services, empowering businesses to grow, scale, and
                        succeed online.
                    </p>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="left-feature">
                    <div class="feature-box feature-box1">
                        <div class="details">
                            <h4>
                                <a href="#" class="title">
                                    Website design
                                </a>
                            </h4>
                            <p class="text">We design modern, mobile friendly websites that load fast, look great on any
                                device, and help you rank higher on Google. From layout to launch, we build sites that
                                attract visitors and turn them into customers.</p>
                        </div>
                        <div class="icon-area">
                            <div class="icon">
                                <img src="{{asset('assets/images/custom/web.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="feature-box feature-box2">
                        <div class="details">
                            <h4>
                                <a href="#" class="title">E-commerce development </a>
                            </h4>
                            <p class="text">We build powerful, SEO-friendly eCommerce websites that look great, load
                                fast, and sell more. From product pages to secure checkout, everything is designed to
                                boost your sales.</p>
                        </div>
                        <div class="icon-area">
                            <div class="icon">
                                <img src="{{asset('assets/images/custom/ecom.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="feature-box feature-box3">
                        <div class="details">
                            <h4>
                                <a href="#" class="title">Custom software </a>
                            </h4>
                            <p class="text">We create custom software solutions that fit your business goals and boost
                                performance,our software helps you track, manage, and grow your business smarter and
                                faster.</p>
                        </div>
                        <div class="icon-area">
                            <div class="icon">
                                <img src="{{asset('assets/images/custom/custom.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex justify-content-center mob-d">
                <div class="center-feature align-self-start">
                    <svg viewBox="0 0 800 800" xmlns="http://www.w3.org/2000/svg">
                        <circle class="spin2" cx="400" cy="400" fill="none" r="200" stroke-width="19" stroke="#d6c8e3"
                            stroke-dasharray="901 1400" stroke-linecap="round" />
                    </svg>
                    <img src="{{asset('assets/images/custom/tech.gif')}}" alt="">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="right-feature">
                    <div class="feature-box feature-box4">
                        <div class="icon-area">
                            <div class="icon">
                                <img src="{{asset('assets/images/custom/app.png')}}" alt="">
                            </div>
                        </div>
                        <div class="details">
                            <h4>
                                <a href="#" class="title">Mobile app development</a>
                            </h4>
                            <p class="text">We develop fast, user-friendly mobile apps built to perform . From concept
                                to launch, our apps help you connect with users, grow visibility, and scale your
                                business effortlessly.</p>
                        </div>
                    </div>
                    <div class="feature-box feature-box5">
                        <div class="icon-area">
                            <div class="icon">
                                <img src="{{asset('assets/images/custom/oms.png')}}" alt="">
                            </div>
                        </div>
                        <div class="details">
                            <h4>
                                <a href="#" class="title">OMS <span>(Operation management system)</span></a>
                            </h4>
                            <p class="text">We build smart Operation Management Software that helps you streamline
                                tasks, track performance, and boost efficiency. It keeps your business organized,
                                visible, and ready to grow.</p>
                        </div>
                    </div>
                    <div class="feature-box feature-box6">
                        <div class="icon-area">
                            <div class="icon">
                                <img src="{{asset('assets/images/custom/dm.png')}}" alt="">
                            </div>
                        </div>
                        <div class="details">
                            <h4>
                                <a href="#" class="title">Digital marketing <span>(Local SEO, SMM)</span></a>
                            </h4>
                            <p class="text">We deliver result-driven digital marketing solutions that boost your Google
                                visibility, attract the right audience, and grow your business. From SEO to ads, we turn
                                clicks into real customers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Main Stats Section -->
<section class="stats-section">
    <div class="container">

        <div class="row">
            <div class="col-lg-3 col-md-6 col-6">
                <div class="stat-card">
                    <div class="stat-icon">
                        <img src="{{asset('assets/images/custom/icons/customer.png')}}" alt="">
                    </div>
                    <div class="stat-number" data-target="1600" data-suffix="+">0</div>
                    <div class="stat-label">Happy Clients</div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-6">
                <div class="stat-card">
                    <div class="stat-icon">
                        <img src="{{asset('assets/images/custom/icons/website.png')}}" alt="">
                    </div>
                    <div class="stat-number" data-target="1200" data-suffix="+">0</div>
                    <div class="stat-label">Responsive Websites</div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-6">
                <div class="stat-card">
                    <div class="stat-icon">
                        <img src="{{asset('assets/images/custom/icons/app.png')}}" alt="">
                    </div>
                    <div class="stat-number" data-target="80" data-suffix="+">0</div>
                    <div class="stat-label">Mobile Applications</div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-6">
                <div class="stat-card">
                    <div class="stat-icon">
                        <img src="{{asset('assets/images/custom/icons/software.png')}}" alt="">
                    </div>
                    <div class="stat-number" data-target="120" data-suffix="+">0</div>
                    <div class="stat-label">Custom Softwares</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Clients Base -->
<section class="whaybest" id="client">
    <div class="curve curve-bottom"></div>
    <div class="curve curve-top"></div>
    <div class="container">

        <div class="row ">
            <div class="col-lg-12">
                <div class="info">
                    <div class="round-shape"></div>
                    <h2 class="info-title">
                        Our Clients
                    </h2>
                    <p>From startups to enterprises, we’re proud to have earned the trust of clients who believe in our
                        innovation and reliability.</p>
                    <ul class="tech-logo feature-list client-logo">
                        <li>
                            <div class="icon">
                                <img src="{{asset('assets/images/custom/clients/itc.png')}}" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="{{asset('assets/images/custom/clients/ir.png')}}" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="{{asset('assets/images/custom/clients/selco.png')}}" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="{{asset('assets/images/custom/clients/nps.png')}}" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="{{asset('assets/images/custom/clients/dht.png')}}" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="{{asset('assets/images/custom/clients/kala.png')}}" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="{{asset('assets/images/custom/clients/dipr.png')}}" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="{{asset('assets/images/custom/clients/nurse.png')}}" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="{{asset('assets/images/custom/clients/nfr.png')}}" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="{{asset('assets/images/custom/clients/cab.png')}}" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="{{asset('assets/images/custom/clients/apsta.png')}}" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="{{asset('assets/images/custom/clients/drtn.png')}}" alt="">
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Clients Base -->

<!-- Contact Area Start -->
<section class="contact" id="contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="section-title">
                    <h2 class="title">Contact Us</h2>
                    <p>
                        Have a project in mind? Let’s connect and explore how our expertise can bring your ideas to
                        life.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="info-box box1">
                    <div class="left">
                        <div class="icon">
                            <i class="fas fa-phone"></i>
                        </div>
                    </div>
                    <div class="right">
                        <div class="content">
                            <p><a href="tel:7086030335">+91-7086030335</a></p>
                            <p><a href="tel:9706868355">+91-9706868355</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="info-box box2">
                    <div class="left">
                        <div class="icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                    </div>
                    <div class="right">
                        <div class="content">
                            <p><a href="mailto:info@webinfotech.net.in">info@webinfotech.net.in</a></p>
                            <p><a href="mailto:webinfotech014@gmail.com">webinfotech014@gmail.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="info-box box3">
                    <div class="left">
                        <div class="icon">
                            <i class="fas fa-map-marked-alt"></i>
                        </div>
                    </div>
                    <div class="right">
                        <div class="content">
                            <p>3rd Floor, House No. 03, Rajbari Path, Ganeshguri, Guwahati, Assam - 781005
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7">
                <div class="contact-form-wrapper">
                    {{-- <form action="https://formspree.io/f/mdkwvwdo" method="POST" class="contact-form-main">
                        <input type="hidden" name="_next"
                            value="https://home-landing.webinfoghy.co.in/thankyou.html">
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" class="input-field borderd" id="name" name="name"
                                    placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="input-field borderd" id="email" name="email"
                                    placeholder="Enter Your Email" required>
                            </div>
                            <div class="col-md-6">
                                <input type="number" class="input-field borderd" id="number" name="number"
                                    placeholder="Enter Your Number" required>
                            </div>
                            <div class="col-12">
                                <textarea class="input-field borderd textarea" rows="3" id="message" name="message"
                                    placeholder="Write Your Message Here" required></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="submit-bf">Submit</button>
                            </div>
                        </div>
                    </form> --}}
                    <form action="{{ route('contact.store') }}" method="POST" class="contact-form-main">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" class="input-field borderd" id="name" name="name"
                                    placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="input-field borderd" id="email" name="email"
                                    placeholder="Enter Your Email" required>
                            </div>
                            <div class="col-md-6">
                                    <input
  type="tel"
  class="input-field borderd"
  id="number"
  name="number"
  placeholder="Enter Your Number"
  pattern="[0-9]{10}"
  maxlength="10"
  title="Please enter number"
  required
>
                            </div>
                            <div class="col-12">
                                <textarea class="input-field borderd textarea" rows="3" id="message" name="message"
                                    placeholder="Write Your Message Here" required></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="submit-bf">Submit</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <div class="col-lg-5">
                <div class="google_map_wrapper">

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3119.727481436073!2d91.78024967541344!3d26.15138647710922!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375a593aa90f7a7d%3A0x2532da64bdc5134f!2sWeb%20Infotech!5e1!3m2!1sen!2sin!4v1760787428180!5m2!1sen!2sin"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Area End -->

<!-- Testimonial Area Start -->

<section class="testimonial-area" id="testimonial-area">
    <div class="curve curve-bottom"></div>
    <div class="curve curve-top"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="section-title extra">
                    <h2 class="title">What Our Clients Say </h2>
                    <p>
                        Hear directly from our clients who have experienced measurable growth and seamless digital
                        transformation with us.
                    </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-12">
                <div class="testimonial-slider">
                    <div class="item">
                        <div class="client">
                            <div class="client-image">
                                <img src="{{asset('assets/images/custom/vcrystal.png')}}" class="img-fluid" alt="">
                            </div>
                            <p class="client-say">
                                "Web Infotech did a great job developing our eCommerce website. The team was
                                professional, responsive, and delivered on time. Very happy with the design and
                                functionality. Highly recommended!"
                            </p>
                            <h4 class="client-name">
                                <a href="#">
                                    Vibrant Crystal
                                </a>
                            </h4>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client">
                            <div class="client-image">
                                <img src="{{asset('assets/images/custom/speeds.png')}}" class="img-fluid" alt="">
                            </div>
                            <p class="client-say">
                                "Excellent service and great experience! The website was designed professionally and met
                                all my expectations. Highly recommend..."
                            </p>
                            <h4 class="client-name">
                                <a href="#">
                                    Fast Delivery Service
                                </a>
                            </h4>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client">
                            <div class="client-image">
                                <img src="{{asset('assets/images/custom/fav.jpg')}}" class="img-fluid" alt="">
                            </div>
                            <p class="client-say">
                                "Best app development company 👌"
                            </p>
                            <h4 class="client-name">
                                <a href="#">
                                    Inkspire Tattoo
                                </a>
                            </h4>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client">
                            <div class="client-image">
                                <img src="{{asset('assets/images/custom/rong.png')}}" class="img-fluid" alt="">
                            </div>
                            <p class="client-say">
                                "Impressed, thank you so much for the beautiful web design"
                            </p>
                            <h4 class="client-name">
                                <a href="#">
                                    Rong & Rhythm
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial Area End -->

<!-- Partner Base -->
<section class="whaybest">
    <div class="curve curve-bottom"></div>
    <div class="curve curve-top"></div>
    <div class="container">

        <div class="row ">
            <div class="col-lg-12">
                <div class="info">
                    <div class="round-shape"></div>
                    <h2 class="info-title">
                        Our Partners
                    </h2>
                    <p>We collaborate with leading global technology partners to ensure every project benefits from
                        world-class solutions.</p>
                    <ul class="tech-logo feature-list partner-logo">
                        <li>
                            <div class="icon">
                                <img src="{{asset('assets/images/custom/partner/godaddy.png')}}" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="{{asset('assets/images/custom/partner/hostinger.png')}}" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="{{asset('assets/images/custom/partner/phonepe.png')}}" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="{{asset('assets/images/custom/partner/razor.png')}}" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="{{asset('assets/images/custom/partner/google.png')}}" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="{{asset('assets/images/custom/partner/meta.png')}}" alt="">
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Partner Base -->

<!-- Subscribe Area Start -->
<div class="subscribe-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="section-title extra">
                    <h2 class="title">Connect with Us</h2>
                    <p>
                        Stay in touch for updates, insights, and opportunities to grow together in the ever-evolving
                        digital world.
                    </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="connect-us">
                    <a href="tel:7086030335">
                        <h4>Call Us Now</h4>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Subscribe Area End -->




@endsection