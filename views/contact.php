<!doctype html>
<html lang="en">
<head>
<title>A Globally Renowned Publishing Company | Prime Leaf Publishing</title>
<meta name="description" content="Prime Leaf Publishing provides comprehensive book publishing services, including writing, editing, design, and marketing. Transform your manuscript into a bestseller with our expert team. Discover your one-stop solution for all your book publishing needs today!"/>
<?php include_once("includes/head.php")?>

<body class="contact_form">
 <!-- Google Tag Manager (noscript) -->
 <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TC428LN9" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


<!-- header -->
<?php include_once("includes/header.php")?>
<!-- header end -->

<section class="sec_1 contact_banner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="banner_inner">                    
                    <h1>Want To Discuss <span>Your Project?</span></h1>
                    <p>Get in touch with our friendly and knowledgeable team. We're here to help you every step of the way.</p>
                    <div class="global_btn center">
                        <span>
                            <button type="button" class="btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Let’s Discuss Your Project </button>
                        </span>  
                        <span>
                            <a href="tel:+0 000 000 0000"><button type="button" class="btn-danger" > +0 000 000 0000</button></a>
                        </span>                      
                    </div>                    
                </div>
            </div>            
        </div>
    </div>
</section>

<section class="contact_form_sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="global_content text-center">
                    <h2>Get In Touch</h2>
                    <p>If you have any questions or want to know more about our services, fill out the form below. We'll get back to you soon!</p>
                </div>
            </div>
        </div>
        <div class="row mt-5 align-items-center">
            <div class="col-md-7">
                <div class="form_wraper">
                    <form action="/thank-you/" method="POST">
                        <div class="inner_fields">
                            <span>
                                <p><i class="fa-solid fa-user"></i> Full Name</p>
                                <input type="text" name="name" placeholder="Full Name" required>
                            </span>
                            <span>
                                <p><i class="fa-solid fa-phone"></i> Contact</p>
                                <input type="number" name="phone" placeholder="Full Name" required>
                            </span>
                        </div>
                        <p><i class="fa-solid fa-envelope"></i> Email</p>
                        <input type="email" name="email" placeholder="info@example.com" required>
                        <p><i class="fa-solid fa-message"></i> Message</p>
                        <textarea name="brief" placeholder="Write message here.."></textarea>
                        <input type="submit">
                    </form>
                </div>
            </div>
            <div class="col-md-5">
                <div class="team_img">
                    <img src="assets/images/team.webp" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta_sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="global_content">
                    <ul>
                        <li>Ready to Share Your</li>
                        <li>Story with the World?</li>
                    </ul>
                    <h2>Let Us Publish Your Dream</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once("includes/testimonial.php")?>

<!-- footer -->
<?php include_once("includes/footer.php")?>